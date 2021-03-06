"use strict";
function isCCValid(){
    $('[placeholder=YY]').val('20'+$('[placeholder=YY]').val());
    return true;
}
var getParam = (function(){
    return function(n){
        var searchstr = (typeof(ORDERDESCRIPTION)!="undefined")?ORDERDESCRIPTION:location.search;
        var p = searchstr.split(n+'=')[1];
        if(p!=undefined){
            p = p.split('&')[0];
        }
        return p;
    }
})();
var LuhnCheck = (function(){
    var luhnArr = [0, 2, 4, 6, 8, 1, 3, 5, 7, 9];
    return function(str){
        var counter = 0;
        var incNum;
        var odd = false;
        var temp = String(str).replace(/[^\d]/g, "");

        if ( temp.length == 0)
            return false;
        for (var i = temp.length-1; i >= 0; --i)
        {
            incNum = parseInt(temp.charAt(i), 10);
            counter += (odd = !odd)? incNum : luhnArr[incNum];
        }
        console.debug('check pan '+str+' '+((counter%10 == 0)?'OK':'failed'));
        return (counter%10 == 0);
    }
})();
var po = {
    options:{
        fee:{
            indoor:{
                amount:{
                    min:50,
                    max:75000
                },
                min:50,
                percent:.015
            },
            crossboard:{
                amount:{
                    min:50,
                    max:75000
                },
                min:200,
                percent:.02
            }
        },
        rates:{
            RUB:1,
            GRN:.43014217,
            USD:.016822
        },
        symbols:{
            GRN:'<b>&#8372;</b>',
            RUB:'<b>&#8381;</b>',
            USD:'<b>$</b>'
        },
        delayed:false
    },
    transferType:function(){
        var res=$("[name=direction]").val();
        // console.debug("transferType()="+res);
        return res;
    },
    getoptions:function(o){
        return this.options[o];
    },
    fee:function(a){
        var amt = (a.amount !== undefined)?a.amount:0, opt = this.getoptions("fee"),  res = {
            amount:amt,
            fee:0,
            response:"ok",
            code:0
        };
        // console.debug(opt);
        opt = opt[this.transferType()];
        res.fee_real = amt*opt.percent;

        if( amt < opt.amount.min) {res.response = "Сумма перевода должна быть не менее "+opt.amount.min;res.code=-1;res.amount=opt.amount.min;return res;}
        if( opt.amount.max< amt) {res.response =  "Сумма перевода должна быть не более "+opt.amount.max;res.code=-2;res.amount=opt.amount.max; return res;}
        res.fee = (res.fee_real<opt.min)?opt.min:res.fee_real;
        res.fee = Math.ceil(res.fee*100)/100;
        return res;
    },
    feeback:function(a){
        var amt = (a.amount !== undefined)?a.amount:0, opt = this.getoptions("fee"),  res = {
            amount:amt,
            fee:0,
            response:"ok",
            code:0
        };
        // console.debug(opt);
        res.amount = amt/(1+opt.percent);
        res.fee_real = amt-res.amt;
        res.fee = (res.fee_real<opt.min)?opt.min:res.fee_real;
        res.amount = amt-res.fee;
        res.fee = Math.ceil(res.fee*100)/100;
        return res;
    },
    exrate:function(a){
        var amt = (a.amount !== undefined)?a.amount:0, opt = this.getoptions("rates"),  res = {
            amount:amt,
            from:amt,
            exrate:1,
            response:"ok",
            code:0
        },currency = $("[name=currencyto]").val();
        console.debug(currency);
        res.exrate = opt[currency];
        res.amount = opt[currency]*res.from;
        res.amount = parseFloat(res.amount.toFixed(2));
        return res;
    },
    setDataText:function(fee,exr){
        console.debug(fee);
        var syms = this.getoptions("symbols"),currency={from:$("[name=currencyfrom]").val(),to:$("[name=currencyto]").val()};
        if(Math.ceil(exr.amount)>0){
            var amt = Math.ceil(exr.amount) - fee.fee;
            $(".transfer-amount-to").val(amt);
        }
        if(fee.code!=0){
            $('.error-response').html(fee.response);
            $(".commission").text(0);
            $('.transfer-amount-from').closest('.input-form-field').addClass('invalid');
            $('#continue').attr('disabled','disabled');
        }
        else{
            $("[name=fee]").val(fee.fee);
            $(".commission").text(fee.fee);
            $(".commission_cur").text(currency.from);
            $('.error-response').html('');
            $('.transfer-amount-from').closest('.input-form-field').removeClass('invalid').removeClass('show-invalid');
            if(LuhnCheck($('.transfer-pan-to').val())) $('#continue').removeAttr('disabled');
        }


        // s+='<p>Комиссия за перевод: <code>'+fee.fee+syms[currency.from]+'</code></p>';
        // (this.transferType()=="crossboard")?s+='<p>По курсу: <code>1'+syms[currency.from]+' = '+exr.exrate+syms[currency.to]+'</code></p>':{};
        // s+='<p>Сумма получателя: <code>'+exr.amount+syms[currency.to]+'</code></p>';
        // s+='<p>Сумма списания: <code>'+(parseFloat(exr.from)+parseFloat(fee.fee))+syms[currency.from]+'</code></p>';
        // $(".transfer-amount-to").val(exr.amount);
        // $c.html(s);
    }
};


$(document).ready(function(){
    $.ajax({
        url:"/fee",
        success:function(d){
            try{eval(d);}
            catch(e){
                console.error('Error loading Fee settings',e);
            }
        }
    });
    $("#continue").on("click",function(e){
        var f = po.fee({amount:$(".transfer-amount-from").val()});
        $.ajax({
            url:"/request",
            type:"post",
            dataType:"json",
            data:{
                amount:(parseFloat(f.amount)+parseFloat(f.fee)).toFixed(2),
                currency:$("[name=currency]").val()
            },
            success:function(d){
                console.debug(d);
                if(typeof(d["error-code"])=="undefined"){
                    $("#amount-block").fadeOut();
                    $("#iframeoverlay").fadeOut();
                    $("#fakeform").replaceWith('<iframe src="'+d["redirect-url"]+'"></iframe>')
                }
            }
        });
    });

    $(".transfer-amount-from").on("keyup change",function(e){
        $(this).delay(1000);
        var amt = {amount:$(this).val()},f = po.fee(amt), r= po.exrate(amt);
        po.setDataText(f,r);
    });
    $('.transfer-pan-to').inputmask("9999 9999 9999 9999").on('change keyup',function(e){
        if(!LuhnCheck($(this).val())){
            $(this).closest('.input-form-field').addClass('invalid');
            $('#continue').attr('disabled','disabled');
        }else{
            $(this).closest('.input-form-field').removeClass('invalid').removeClass('show-invalid');
            if($('.transfer-amount-from').val().length && !$(this).val().match(/_/) && $('.input-form-field.invalid').length==0) $('#continue').removeAttr('disabled');
        }
    });
    $(".transfer-amount-from,.transfer-pan-to").on("blur",function(){
        var iff = $(this).closest('.input-form-field');
        if(iff.hasClass('invalid'))iff.addClass('show-invalid');
    });

    $("[name=currencyto], [name=currency], [name=direction]").on("change",function(){
        $(".transfer-amount-from").change();
    });
    // $(".transfer-amount-from").change();
    $(".transfer-amount-to").on("keyup change",function(e){
        $(this).delay(1000);
        var amt = $(this).val(),r = po.feeback({amount:amt});
        console.debug(r);
    });

    $(".input-form-field-value > input").focus(function(){
        $(this).closest('.input-form-field').addClass('focused');
        return true;
    }).blur(function(){
        if(!$(this).val().length){
            $(this).closest('.input-form-field').removeClass('focused');
        }
    });
    $('.transfer-amount-from').inputmask("9{1,5}");
    $('.transfer-pan-from').inputmask("9999 9999 9999 9999",{removeMaskOnSubmit:true});

    $('.transfer-pan-from-,.transfer-pan-to-').inputmask("9999 9999 9999 9999",{removeMaskOnSubmit:true});

    var panto = getParam('panto');
    if(panto!=undefined){
        $('#cardnumberto').val(panto).prev('input').focus().val(panto).delay(200);
        // $('.transfer-pan-to-').val(panto).focus();
        // $('.transfer-amount-from').focus();
        // $('.transfer-pan-from').focus();
        $('.transfer-pan-from-:first').focus();
    }
    var lang = (typeof(CUSTOMER_LANGUAGE)!="undefined")?CUSTOMER_LANGUAGE:getParam('lang');
    lang = (lang==undefined)?'rus':lang;
    $('[name=lang]').val(lang);

    console.debug('current lang='+lang,$("#"+lang).length);
    console.debug('ifame:'+document.location);
    // try{$("#"+lang).click();}catch(e){console.warn(e);}
    $(".body > div > div:nth-child(4) > form > div.large-2.column > div > div.large-4.columns > div > label").hide();
    $("form").each(function(){
        if($(this).attr('data-abide')!=undefined){
            $(this).attr('onsubmit',"isCCValid()");
        }
    });
});
