<?php

/* /Applications/AMPPS/www/perevedi-v2.bs2/themes/perevedionline/pages/home.htm */
class __TwigTemplate_ee103c697fcc2aaf2ebbde853245c4b1bf225db3dbcb70df5f9fe64f4e424088 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"two-block_wrapper\">
    <div class=\"error_block\">
        <div class=\"row\">
            <div class=\"large-12 columns\">
                <h2 class=\"error_block__h2 text-center\"><span class=\"translate-it\" key=\"error\">ОШИБКА</span> <span>505</span></h2>
            </div>
            <div class=\"large-2 columns large-centered\">
                <button class=\"button expanded error-button translate-it\" key=\"cancel\">вернуться</button>
            </div>
        </div>
    </div><!-- END ERROR_BLOCK -->
<div class=\"transaction-operation\">
<form data-abide action=\"#\">
    <div class=\"row\">
        <div class=\"large-5 large-offset-1 column\">
            <div class=\"card-wrap\">
                <div class=\"card-wrap_card\">
                    <div class=\"card-wrap_card_h-wr\">
                        <div class=\"row\">
                            <div class=\"large-6 column\">
                                <span class=\"card-wrap_card__header translate-it\" key=\"sender\">Отправитель</span>
                            </div>
                            <div class=\"large-6 column\">
                                <div class=\"small-vendor_wrap\">
                                    <i class=\"icn-visa-small\"></i>
                                    <i class=\"icn-master-small\"></i>
                                    <i class=\"icn-mir-small\"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- END CARD-WRAP_CARD_H-WR -->
            <div class=\"card-wrap_card_input\">
              <input type=\"number\" class=\"card-wrap_card_input__text\" placeholder=\"НОМЕР КАРТЫ\" pattern=\"card\">
            </div>
            <div class=\"card-wrap_card_data-input\">
              <div class=\"card-wrap_card_data-input__m-wrap clearfix\">
                <div class=\"card-wrap_card_data-input__m-wrap_item\">
                    <input type=\"number\" min=\"1\" max=\"12\" class=\"card-wrap_card_data-input__m-wrap_month\" placeholder=\"ММ\">
                </div>
                <div class=\"card-wrap_card_data-input__m-wrap_item\">
                    <input type=\"number\" min=\"1\" max=\"99\" class=\"card-wrap_card_data-input__m-wrap_year\" placeholder=\"YY\">
                </div>
                <div class=\"card-wrap_card_data-input__m-wrap_item__cvv\">
                  <input type=\"number\" min=\"1\" max=\"999\" class=\"card-wrap_card_data-input__m-wrap_cvv\" placeholder=\"CVV/CVC2\" pattern=\"cvv\">
                </div>
                <div class=\"about_cvv__wrap\">
                  <a href=\"#!\" class=\"about_cvv\">?</a>
                  <div class=\"about_cvv_tooltip\">
                    <p><span class=\"translate-it\" key=\"tooltip1\">Введите 3 последние цифры</span><br /><span class=\"translate-it\" key=\"tooltip2\">на обратной стороне карты</span></p>
                    <div class=\"about_cvv_tooltip__card\"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div><!-- END CARD-WRAP -->
    </div><!-- END LEFT CARD COLL -->
    <div class=\"large-5 large-pull-1 column\">
        <div class=\"card-wrap\">
          <div class=\"card-wrap_card\">
            <div class=\"card-wrap_card_h-wr\">
                <div class=\"row\">
                  <div class=\"large-6 column\">
                    <span class=\"card-wrap_card__header translate-it\" key=\"recipient\">Получатель</span>
                  </div>
                  <div class=\"large-6 column\">
                    <div class=\"small-vendor_wrap\">
                      <i class=\"icn-visa-small\"></i>
                      <i class=\"icn-master-small\"></i>
                      <i class=\"icn-mir-small\"></i>
                    </div>
                  </div>
                </div>
            </div><!-- END CARD-WRAP_CARD_H-WR -->
              <div class=\"card-wrap_card_input\">
                <input type=\"number\" class=\"card-wrap_card_input__text\" placeholder=\"НОМЕР КАРТЫ\" pattern=\"card\">
              </div>
            </div>
        </div><!-- END CARD-WRAP -->
    </div><!-- END RIGHT CARD COLL -->
  </div>
  <div class=\"row\">
    <div class=\"large-10 large-offset-2 columns\">
      <div class=\"agreement-chbx_wrapper\">
        <input id=\"agreement\" type=\"checkbox\" required=\"required\">
        <label for=\"agreement\" class=\"css-label\"><span class=\"translate-it\" key=\"i_accept_the_terms_of_use_of\">Я принимаю условия использования</span> <a href=\"#!\" class=\"translate-it\" key=\"the_service\">сервиса</a> <span class=\"translate-it\" key=\"and\">и</span> <a href=\"#!\" class=\"translate-it\" key=\"the_public_offer\">публичной оферты</a> <span class=\"translate-it\" key=\"of_the_acquiring_banks\">банков-эквайров</span></label>
      </div>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"large-2 large-centered columns\">
      <button class=\"button expanded send-transfer translate-it\" disabled=\"disabled\" key=\"send\">Перевести</button>
    </div>
  </div>
</form>
</div><!-- END TRANSACTION-OPERATION -->
<div class=\"success-operation\">
<div class=\"row\">
  <div class=\"large-6 columns large-centered\">
    <img src=\"";
        // line 100
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets//img/logo-gs.png");
        echo "\" alt=\"Perevedi.online\" class=\"print-logo\">
  </div>
</div><!-- END PRINT LOGO ROW -->
<div class=\"row\">
  <div class=\"large-12 columns\">
    <h2 class=\"success-operation_h2 text-center translate-it\" key=\"successful\">перевод совершен успешно</h2>
    <p class=\"success-operation_text__desc translate-it\" key=\"several_minutes_to_several_days\">Зачисление может происходить от нескольких минут до нескольких дней</p>
    <p class=\"success-operation_text\"><span class=\"translate-it\" key=\"number_of_the_sender\">Номер карты отправителя</span> <span>123456****1234</span></p>
    <p class=\"success-operation_text\"><span class=\"translate-it\" key=\"beneficiary_card_number\">Номер карты получателя</span> <span>123456****1234</span></p>
    <p class=\"success-operation_text\"><span class=\"translate-it\" key=\"operation_time\">Время операции</span> <span>15:08:2017, 10:27</span></p>
    <p class=\"success-operation_text\"><span class=\"translate-it\" key=\"operation_id\">ID операции</span> <span>1234567</span></p>
    <p class=\"success-operation_text\"><span class=\"translate-it\" key=\"transfer_amount\">Сумма перевода:</span> <span>6000</span> <span>RUB</span></p>
    <p class=\"success-operation_text\"><span class=\"translate-it\" key=\"transfer_amount\">Сумма зачисления:</span> <span>6000</span> <span>RUB</span></p>
    <p class=\"success-operation_text\"><span class=\"translate-it\" key=\"fee\">Комиссия:</span> <span>150</span> <span>RUB</span></p>
    <p class=\"success-operation_text\"><span class=\"translate-it\" key=\"keep_your_check\">Рекомендуем сохранить ваш чек</span></p>
  </div>
</div>
<form action=\"#!\" data-abide class=\"success-operation__form\">
  <div class=\"row\">
    <div class=\"large-1 large-offset-2 columns\">
      <button class=\"button expanded success-operation-button\">ok</button>
    </div>
    <div class=\"large-3 columns\">
      <button class=\"button expanded success-operation-button print-btn translate-it\" key=\"print\">распечатать</button>
    </div>
    <div class=\"large-3 columns\">
      <input type=\"email\" class=\"email-input\" pattern=\"email\" placeholder=\"ВВЕДИТЕ ВАШ E-MAIL\">
    </div>
    <div class=\"large-3 columns\">
      <button class=\"button expanded success-operation-button translate-it\" key=\"send\">отправить</button>
    </div>
  </div>
</form>
</div><!-- END SUCCESS-OPERATION -->
<div class=\"main-block\">
<div class=\"row\">
  <div class=\"large-12 column\">
    <h1 class=\"main-h1 text-center translate-it\" key=\"send money outside\">перевести деньги за пределы россии</h1>
  </div>
</div>
<div class=\"row\">
  <div class=\"large-12 column\">
    <div class=\"main-desc text-center translate-it\" key=\"from card to card\">с карты на карту?</div>
  </div>
</div>
<form action=\"#!\">
  <div class=\"row\">
    <div class=\"large-5 columns large-offset-1\">
      <div class=\"row\">
        <div class=\"large-9 columns\">
          <input type=\"number\" class=\"card-wrap_card_input__summ\" placeholder=\"СУММА ПЕРЕВОДА\">
        </div>
        <div class=\"large-3 columns\">
          <div class=\"cur-select_wrap\">
            <label>
                <select class=\"cur-select\">
                    <option value=\"rub\">RUB</option>
                    <option value=\"grn\">UAH</option>
                    <option value=\"usd\">USD</option>
                </select>
            </label>
          </div>
        </div>
      </div><!-- INPUT SUMM -->
      <div class=\"row\">
        <div class=\"large-9 columns\">
          <input type=\"number\" class=\"card-wrap_card_input__summ\" placeholder=\"СУММА К ПОЛУЧЕНИЮ\">
        </div>
        <div class=\"large-3 columns\">
          <div class=\"cur-select_wrap\">
            <label>
                <select class=\"cur-select\">
                    <option value=\"rub\">RUB</option>
                    <option value=\"grn\">UAH</option>
                    <option value=\"usd\">USD</option>
                </select>
            </label>
          </div>
        </div>
      </div><!-- OUTGOIN SUMM -->
      <div class=\"row\">
        <div class=\"large-9 columns\">
          <button class=\"button expanded start-transfer translate-it\" key=\"start_translating\">НАЧАТЬ ПЕРЕВОД</button>
        </div>
      </div>
    </div>
    <div class=\"large-4 columns end\">
      <div class=\"main-desc_scnd translate-it\" key=\"easily\">легко!</div>
      <div class=\"vendor-box\">
        <i class=\"icn-visa-big\"></i>
        <i class=\"icn-master-big\"></i>
        <i class=\"icn-mir-big\"></i>
      </div><!-- END VENDOR-BOX -->
      <div class=\"commission-comment__wrap\">
        <p><span class=\"translate-it\" key=\"commission\">Комиссия</span> <span class=\"commission\">49</span> <span class=\"commission_cur\">RUB</span></p>
        <p><span class=\"translate-it\" key=\"crediting_instantly\">Зачисление мгновенно</span><sup>*</sup></p>
      </div><!-- END COMMISSION-COMMENT__WRAP -->
    </div>
  </div>
</form><!-- END INPUT FORM -->
<div class=\"row\">
  <div class=\"large-12 columns\">
    <div class=\"first-scr_comment__wrap\">
      <p>
        <sup>*</sup><span class=\"translate-it\" key=\"the_term_of_enrollment\">Срок зачисления может составлять от нескольких секунд до нескольких дней и зависит от банка, выпустившего карту получателя.</span>
      </p>
    </div>
  </div>
</div>
</div><!-- END MAIN-BLOCK -->
</div><!-- END TWO-BLOCK_WRAPPER -->";
    }

    public function getTemplateName()
    {
        return "/Applications/AMPPS/www/perevedi-v2.bs2/themes/perevedionline/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 100,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"two-block_wrapper\">
    <div class=\"error_block\">
        <div class=\"row\">
            <div class=\"large-12 columns\">
                <h2 class=\"error_block__h2 text-center\"><span class=\"translate-it\" key=\"error\">ОШИБКА</span> <span>505</span></h2>
            </div>
            <div class=\"large-2 columns large-centered\">
                <button class=\"button expanded error-button translate-it\" key=\"cancel\">вернуться</button>
            </div>
        </div>
    </div><!-- END ERROR_BLOCK -->
<div class=\"transaction-operation\">
<form data-abide action=\"#\">
    <div class=\"row\">
        <div class=\"large-5 large-offset-1 column\">
            <div class=\"card-wrap\">
                <div class=\"card-wrap_card\">
                    <div class=\"card-wrap_card_h-wr\">
                        <div class=\"row\">
                            <div class=\"large-6 column\">
                                <span class=\"card-wrap_card__header translate-it\" key=\"sender\">Отправитель</span>
                            </div>
                            <div class=\"large-6 column\">
                                <div class=\"small-vendor_wrap\">
                                    <i class=\"icn-visa-small\"></i>
                                    <i class=\"icn-master-small\"></i>
                                    <i class=\"icn-mir-small\"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- END CARD-WRAP_CARD_H-WR -->
            <div class=\"card-wrap_card_input\">
              <input type=\"number\" class=\"card-wrap_card_input__text\" placeholder=\"НОМЕР КАРТЫ\" pattern=\"card\">
            </div>
            <div class=\"card-wrap_card_data-input\">
              <div class=\"card-wrap_card_data-input__m-wrap clearfix\">
                <div class=\"card-wrap_card_data-input__m-wrap_item\">
                    <input type=\"number\" min=\"1\" max=\"12\" class=\"card-wrap_card_data-input__m-wrap_month\" placeholder=\"ММ\">
                </div>
                <div class=\"card-wrap_card_data-input__m-wrap_item\">
                    <input type=\"number\" min=\"1\" max=\"99\" class=\"card-wrap_card_data-input__m-wrap_year\" placeholder=\"YY\">
                </div>
                <div class=\"card-wrap_card_data-input__m-wrap_item__cvv\">
                  <input type=\"number\" min=\"1\" max=\"999\" class=\"card-wrap_card_data-input__m-wrap_cvv\" placeholder=\"CVV/CVC2\" pattern=\"cvv\">
                </div>
                <div class=\"about_cvv__wrap\">
                  <a href=\"#!\" class=\"about_cvv\">?</a>
                  <div class=\"about_cvv_tooltip\">
                    <p><span class=\"translate-it\" key=\"tooltip1\">Введите 3 последние цифры</span><br /><span class=\"translate-it\" key=\"tooltip2\">на обратной стороне карты</span></p>
                    <div class=\"about_cvv_tooltip__card\"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div><!-- END CARD-WRAP -->
    </div><!-- END LEFT CARD COLL -->
    <div class=\"large-5 large-pull-1 column\">
        <div class=\"card-wrap\">
          <div class=\"card-wrap_card\">
            <div class=\"card-wrap_card_h-wr\">
                <div class=\"row\">
                  <div class=\"large-6 column\">
                    <span class=\"card-wrap_card__header translate-it\" key=\"recipient\">Получатель</span>
                  </div>
                  <div class=\"large-6 column\">
                    <div class=\"small-vendor_wrap\">
                      <i class=\"icn-visa-small\"></i>
                      <i class=\"icn-master-small\"></i>
                      <i class=\"icn-mir-small\"></i>
                    </div>
                  </div>
                </div>
            </div><!-- END CARD-WRAP_CARD_H-WR -->
              <div class=\"card-wrap_card_input\">
                <input type=\"number\" class=\"card-wrap_card_input__text\" placeholder=\"НОМЕР КАРТЫ\" pattern=\"card\">
              </div>
            </div>
        </div><!-- END CARD-WRAP -->
    </div><!-- END RIGHT CARD COLL -->
  </div>
  <div class=\"row\">
    <div class=\"large-10 large-offset-2 columns\">
      <div class=\"agreement-chbx_wrapper\">
        <input id=\"agreement\" type=\"checkbox\" required=\"required\">
        <label for=\"agreement\" class=\"css-label\"><span class=\"translate-it\" key=\"i_accept_the_terms_of_use_of\">Я принимаю условия использования</span> <a href=\"#!\" class=\"translate-it\" key=\"the_service\">сервиса</a> <span class=\"translate-it\" key=\"and\">и</span> <a href=\"#!\" class=\"translate-it\" key=\"the_public_offer\">публичной оферты</a> <span class=\"translate-it\" key=\"of_the_acquiring_banks\">банков-эквайров</span></label>
      </div>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"large-2 large-centered columns\">
      <button class=\"button expanded send-transfer translate-it\" disabled=\"disabled\" key=\"send\">Перевести</button>
    </div>
  </div>
</form>
</div><!-- END TRANSACTION-OPERATION -->
<div class=\"success-operation\">
<div class=\"row\">
  <div class=\"large-6 columns large-centered\">
    <img src=\"{{ 'assets//img/logo-gs.png'|theme }}\" alt=\"Perevedi.online\" class=\"print-logo\">
  </div>
</div><!-- END PRINT LOGO ROW -->
<div class=\"row\">
  <div class=\"large-12 columns\">
    <h2 class=\"success-operation_h2 text-center translate-it\" key=\"successful\">перевод совершен успешно</h2>
    <p class=\"success-operation_text__desc translate-it\" key=\"several_minutes_to_several_days\">Зачисление может происходить от нескольких минут до нескольких дней</p>
    <p class=\"success-operation_text\"><span class=\"translate-it\" key=\"number_of_the_sender\">Номер карты отправителя</span> <span>123456****1234</span></p>
    <p class=\"success-operation_text\"><span class=\"translate-it\" key=\"beneficiary_card_number\">Номер карты получателя</span> <span>123456****1234</span></p>
    <p class=\"success-operation_text\"><span class=\"translate-it\" key=\"operation_time\">Время операции</span> <span>15:08:2017, 10:27</span></p>
    <p class=\"success-operation_text\"><span class=\"translate-it\" key=\"operation_id\">ID операции</span> <span>1234567</span></p>
    <p class=\"success-operation_text\"><span class=\"translate-it\" key=\"transfer_amount\">Сумма перевода:</span> <span>6000</span> <span>RUB</span></p>
    <p class=\"success-operation_text\"><span class=\"translate-it\" key=\"transfer_amount\">Сумма зачисления:</span> <span>6000</span> <span>RUB</span></p>
    <p class=\"success-operation_text\"><span class=\"translate-it\" key=\"fee\">Комиссия:</span> <span>150</span> <span>RUB</span></p>
    <p class=\"success-operation_text\"><span class=\"translate-it\" key=\"keep_your_check\">Рекомендуем сохранить ваш чек</span></p>
  </div>
</div>
<form action=\"#!\" data-abide class=\"success-operation__form\">
  <div class=\"row\">
    <div class=\"large-1 large-offset-2 columns\">
      <button class=\"button expanded success-operation-button\">ok</button>
    </div>
    <div class=\"large-3 columns\">
      <button class=\"button expanded success-operation-button print-btn translate-it\" key=\"print\">распечатать</button>
    </div>
    <div class=\"large-3 columns\">
      <input type=\"email\" class=\"email-input\" pattern=\"email\" placeholder=\"ВВЕДИТЕ ВАШ E-MAIL\">
    </div>
    <div class=\"large-3 columns\">
      <button class=\"button expanded success-operation-button translate-it\" key=\"send\">отправить</button>
    </div>
  </div>
</form>
</div><!-- END SUCCESS-OPERATION -->
<div class=\"main-block\">
<div class=\"row\">
  <div class=\"large-12 column\">
    <h1 class=\"main-h1 text-center translate-it\" key=\"send money outside\">перевести деньги за пределы россии</h1>
  </div>
</div>
<div class=\"row\">
  <div class=\"large-12 column\">
    <div class=\"main-desc text-center translate-it\" key=\"from card to card\">с карты на карту?</div>
  </div>
</div>
<form action=\"#!\">
  <div class=\"row\">
    <div class=\"large-5 columns large-offset-1\">
      <div class=\"row\">
        <div class=\"large-9 columns\">
          <input type=\"number\" class=\"card-wrap_card_input__summ\" placeholder=\"СУММА ПЕРЕВОДА\">
        </div>
        <div class=\"large-3 columns\">
          <div class=\"cur-select_wrap\">
            <label>
                <select class=\"cur-select\">
                    <option value=\"rub\">RUB</option>
                    <option value=\"grn\">UAH</option>
                    <option value=\"usd\">USD</option>
                </select>
            </label>
          </div>
        </div>
      </div><!-- INPUT SUMM -->
      <div class=\"row\">
        <div class=\"large-9 columns\">
          <input type=\"number\" class=\"card-wrap_card_input__summ\" placeholder=\"СУММА К ПОЛУЧЕНИЮ\">
        </div>
        <div class=\"large-3 columns\">
          <div class=\"cur-select_wrap\">
            <label>
                <select class=\"cur-select\">
                    <option value=\"rub\">RUB</option>
                    <option value=\"grn\">UAH</option>
                    <option value=\"usd\">USD</option>
                </select>
            </label>
          </div>
        </div>
      </div><!-- OUTGOIN SUMM -->
      <div class=\"row\">
        <div class=\"large-9 columns\">
          <button class=\"button expanded start-transfer translate-it\" key=\"start_translating\">НАЧАТЬ ПЕРЕВОД</button>
        </div>
      </div>
    </div>
    <div class=\"large-4 columns end\">
      <div class=\"main-desc_scnd translate-it\" key=\"easily\">легко!</div>
      <div class=\"vendor-box\">
        <i class=\"icn-visa-big\"></i>
        <i class=\"icn-master-big\"></i>
        <i class=\"icn-mir-big\"></i>
      </div><!-- END VENDOR-BOX -->
      <div class=\"commission-comment__wrap\">
        <p><span class=\"translate-it\" key=\"commission\">Комиссия</span> <span class=\"commission\">49</span> <span class=\"commission_cur\">RUB</span></p>
        <p><span class=\"translate-it\" key=\"crediting_instantly\">Зачисление мгновенно</span><sup>*</sup></p>
      </div><!-- END COMMISSION-COMMENT__WRAP -->
    </div>
  </div>
</form><!-- END INPUT FORM -->
<div class=\"row\">
  <div class=\"large-12 columns\">
    <div class=\"first-scr_comment__wrap\">
      <p>
        <sup>*</sup><span class=\"translate-it\" key=\"the_term_of_enrollment\">Срок зачисления может составлять от нескольких секунд до нескольких дней и зависит от банка, выпустившего карту получателя.</span>
      </p>
    </div>
  </div>
</div>
</div><!-- END MAIN-BLOCK -->
</div><!-- END TWO-BLOCK_WRAPPER -->", "/Applications/AMPPS/www/perevedi-v2.bs2/themes/perevedionline/pages/home.htm", "");
    }
}