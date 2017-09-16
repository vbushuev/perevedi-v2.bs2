$(document).ready(function() {

// Для работы с куки используется плагин jquery.cookie.js
// Перевод лежит в JSON locale.js

$(function() {

//ПЕРЕКЛЮЧЕНИЕ ЯЗЫКА
$('.lang').click(function(e) {
	e.preventDefault();
	//переключение локали
	var lang = $(this).attr('id');
	$('[name=lang]').val(lang);
	$.cookie('curLang', lang);


//правим перевод placeholder
if (lang === 'ukr') {
	$('.card-wrap_card_input__text').attr('placeholder', 'НОМЕР КАРТКИ');
} else if (lang === 'eng') {
	$('.card-wrap_card_input__text').attr('placeholder', 'CARD NUMBER');
} else {
	$('.card-wrap_card_input__text').attr('placeholder', 'НОМЕР КАРТЫ');
}

//правим перевод placeholder главный экран
// if (lang === 'ukr') {
// 	$('.card-wrap_card_input__summ').attr('placeholder', 'СУМА ПЕРЕКАЗУ');
// } else if (lang === 'eng') {
// 	$('.card-wrap_card_input__summ').attr('placeholder', 'TRANSFER AMOUNT');
// } else {
// 	$('.card-wrap_card_input__summ').attr('placeholder', 'СУММА ПЕРЕВОДА');
// }

//правим email-input в успешном переводе
if (lang === 'ukr') {
	$('.email-input').attr('placeholder', 'ВВЕДІТЬ ВАШ E-MAIL');
} else if (lang === 'eng') {
	$('.email-input').attr('placeholder', 'ENTER YOUR E-MAIL');
} else {
	$('.email-input').attr('placeholder', 'ВВЕДИТЕ ВАШ E-MAIL');
}

//правим input в popup первые 6
if (lang === 'ukr') {
	$('.first-six').attr('placeholder', 'ПЕРШІ 6');
} else if (lang === 'eng') {
	$('.first-six').attr('placeholder', 'FIRST 6');
} else {
	$('.first-six').attr('placeholder', 'ПЕРВЫЕ 6');
}

//правим input в popup последние 4
if (lang === 'ukr') {
	$('.last-four').attr('placeholder', 'ОСТАННІ 4');
} else if (lang === 'eng') {
	$('.last-four').attr('placeholder', 'LAST 4');
} else {
	$('.last-four').attr('placeholder', 'ПОСЛЕДНИЕ 4');
}


//перевод
	$('.translate-it').each(function(){
		$(this).text(arrLang[lang][$(this).attr('key')]);
	});
//end перевод

//стилевое переключение
	$('.lang-menu').find('.lang').removeClass('active');
	$(this).addClass('active');
//end стилевое переключение
});
//END ПЕРЕКЛЮЧЕНИЕ ЯЗЫКА
});

(function() {
// Проверка есть ли что в куки
// если в куки ничего нет
// то пишем в куку активный пункт меню

	if ($.cookie('curLang') === undefined) {
		var lang = $('.active').attr('id');
		$.cookie('curLang', lang);

//правим перевод placeholder
if (lang === 'ukr') {
	$('.card-wrap_card_input__text').attr('placeholder', 'НОМЕР КАРТКИ');
} else if (lang === 'eng') {
	$('.card-wrap_card_input__text').attr('placeholder', 'CARD NUMBER');
} else {
	$('.card-wrap_card_input__text').attr('placeholder', 'НОМЕР КАРТЫ');
}

	} else{
		lang = $.cookie('curLang');

//стилевое переключение
		$('.lang-menu').find('.lang').removeClass('active');
		$('#'+lang).addClass('active');
//end стилевое переключение

//правим перевод placeholder
if (lang === 'ukr') {
	$('.card-wrap_card_input__text').text('НОМЕР КАРТКИ');
} else if (lang === 'eng') {
	$('.card-wrap_card_input__text').text('CARD NUMBER');
} else {
	$('.card-wrap_card_input__text').text('НОМЕР КАРТЫ');
}
	};
//end проверка есть ли что в куки

//перевод на лету
	$('.translate-it').each(function(){
		$(this).text(arrLang[lang][$(this).attr('key')]);
	});
//end перевод на лету

})();

//agreement
var chBox = $('#agreement');

	chBox.change(function(){
		isChek = chBox.is(':checked');
		if (isChek) {
				$('.send-transfer').removeAttr('disabled', 'disabled');
		}else{
				$('.send-transfer').attr('disabled', 'disabled');
		};
	});
//end agreement

//print
$('.print-btn').on('click', function() {
	window.print();
});
//end print

});
