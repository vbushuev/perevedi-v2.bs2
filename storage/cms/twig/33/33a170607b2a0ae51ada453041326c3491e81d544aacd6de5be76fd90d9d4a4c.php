<?php

/* /Applications/AMPPS/www/perevedi-v2.bs2/themes/perevedionline/layouts/default.htm */
class __TwigTemplate_65933d06b2d75d4a28990f561f4598e37accc47e47686724210b8c88e0818a01 extends Twig_Template
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
        echo "<!doctype html>
<html class=\"no-js\" lang=\"ru\" dir=\"ltr\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Perevedi.online – Переводы с карты на карту</title>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/foundation.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/app.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/custom.css");
        echo "\">
    <!-- favicons -->
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/favicons/apple-touch-icon.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/favicons/favicon-32x32.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/favicons/favicon-16x16.png");
        echo "\">
    <link rel=\"manifest\" href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/favicons/manifest.json");
        echo "\">
    <link rel=\"mask-icon\" href=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/favicons/safari-pinned-tab.svg");
        echo "\" color=\"#5bbad5\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\"/>
    <meta name=\"theme-color\" content=\"#ffffff\">
</head>
<body>
    <div class=\"loader\">
        <img src=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/loader.gif");
        echo "\" alt=\"\">
    </div>
    <section class=\"hero\">
        <header class=\"header\">
            ";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "        </header>
        ";
        // line 28
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 29
        echo "    </section>
    ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/about-service"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/conditions"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/faq"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/contacts"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "
  <footer class=\"footer\">
        ";
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "    </footer>
  <div class=\"reveal large popup\" id=\"support\" data-reveal>
    <div class=\"row\">
      <div class=\"large-12 columns\">
        <h2 class=\"popup_h2 translate-it\" key=\"support_service_of_the_payer\">служба поддержки плательщика</h2>
        <p class=\"translate-it\" key=\"carried_out_a_bank_transfer\">Осуществляли перевод у нас? Вы можете найти полную информацию о ваших переводах</p>
      </div>
    </div>
    <form action=\"#!\" data-abide>
      <div class=\"row\">
        <div class=\"large-3 columns\">
          <span class=\"popup_label_desc translate-it\" key=\"card\">карта</span>
        </div>
        <div class=\"large-7 end columns\">
          <div class=\"row\">
            <div class=\"large-5 columns\">
              <input type=\"number\" class=\"first-six\" placeholder=\"ПЕРВЫЕ 6\" required=\"required\">
            </div>
            <div class=\"large-2 columns\">
              <span class=\"popup_label__stars\">*******</span>
            </div>
            <div class=\"large-5 columns\">
              <input type=\"number\" class=\"last-four\" placeholder=\"ПОСЛЕДНИЕ 4\" required=\"required\">
            </div>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"large-3 columns\">
          <span class=\"popup_label_desc translate-it\" key=\"transfer_amount\">сумма перевода</span>
        </div>
        <div class=\"large-7 end columns\">
          <input type=\"number\" required=\"required\">
        </div>
      </div>
      <div class=\"row\">
        <div class=\"large-3 columns\">
          <span class=\"popup_label_desc translate-it\" key=\"date\">дата</span>
        </div>
        <div class=\"large-7 end columns\">
          <input type=\"date\" required=\"required\">
        </div>
      </div>
      <div class=\"row\">
        <div class=\"large-3 columns\">
          <span class=\"popup_label_desc translate-it\" key=\"your_email\">ваш e-mail</span>
        </div>
        <div class=\"large-7 end columns\">
          <input type=\"email\" pattern=\"email\" required=\"required\">
        </div>
      </div>
      <div class=\"row\">
        <div class=\"large-3 columns\">
          <span class=\"popup_label_desc translate-it\" key=\"message\">сообщение</span>
        </div>
        <div class=\"large-7 end columns\">
          <textarea rows=\"4\"></textarea>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"large-3 columns\">
          <span class=\"popup_label_desc translate-it\" key=\"capcha\">код рисунка</span>
        </div>
        <div class=\"large-7 end columns\">
          <div class=\"row\">
            <div class=\"large-3 columns\">
              <span class=\"capcha\"><img src=\"";
        // line 103
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/capcha.png");
        echo "\" alt=\"capcha\"></span>
            </div>
            <div class=\"large-4 columns end\">
              <input type=\"text\">
            </div>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"large-3 large-centered columns\">
          <button class=\"button expanded success-operation-button translate-it\" key=\"send\">отправить</button>
        </div>
      </div>
    </form>


    <button class=\"close-button\" data-close aria-label=\"Close reveal\" type=\"button\">
      <span aria-hidden=\"true\"><i class=\"icn-close\"></i></span>
    </button>
  </div><!-- END POPUP -->
    <script src=\"";
        // line 123
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/vendor/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 124
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/vendor/what-input.js");
        echo "\"></script>
    <script src=\"";
        // line 125
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/vendor/foundation.js");
        echo "\"></script>
    <script src=\"";
        // line 126
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/vendor/jquery.cookie.js");
        echo "\"></script>
    <script src=\"";
        // line 127
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/app.js");
        echo "\"></script>
    <script src=\"";
        // line 128
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/locale.js");
        echo "\"></script>
    <script src=\"";
        // line 129
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/functions.js");
        echo "\"></script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/AMPPS/www/perevedi-v2.bs2/themes/perevedionline/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 129,  223 => 128,  219 => 127,  215 => 126,  211 => 125,  207 => 124,  203 => 123,  180 => 103,  112 => 37,  108 => 36,  104 => 34,  99 => 33,  94 => 32,  89 => 31,  85 => 30,  82 => 29,  80 => 28,  77 => 27,  73 => 26,  66 => 22,  57 => 16,  53 => 15,  49 => 14,  45 => 13,  41 => 12,  36 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html class=\"no-js\" lang=\"ru\" dir=\"ltr\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Perevedi.online – Переводы с карты на карту</title>
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/foundation.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/app.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/custom.css'|theme }}\">
    <!-- favicons -->
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ 'assets/img/favicons/apple-touch-icon.png'|theme }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ 'assets/img/favicons/favicon-32x32.png'|theme }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ 'assets/img/favicons/favicon-16x16.png'|theme }}\">
    <link rel=\"manifest\" href=\"{{ 'assets/img/favicons/manifest.json'|theme }}\">
    <link rel=\"mask-icon\" href=\"{{ 'assets/img/favicons/safari-pinned-tab.svg'|theme }}\" color=\"#5bbad5\">
    <link rel=\"shortcut icon\" href=\"favicon.ico\"/>
    <meta name=\"theme-color\" content=\"#ffffff\">
</head>
<body>
    <div class=\"loader\">
        <img src=\"{{ 'assets/img/loader.gif'|theme }}\" alt=\"\">
    </div>
    <section class=\"hero\">
        <header class=\"header\">
            {% partial 'site/header' %}
        </header>
        {% page %}
    </section>
    {% partial 'site/about-service' %}
    {% partial 'site/conditions' %}
    {% partial 'site/faq' %}
    {% partial 'site/contacts' %}

  <footer class=\"footer\">
        {% partial 'site/footer' %}
    </footer>
  <div class=\"reveal large popup\" id=\"support\" data-reveal>
    <div class=\"row\">
      <div class=\"large-12 columns\">
        <h2 class=\"popup_h2 translate-it\" key=\"support_service_of_the_payer\">служба поддержки плательщика</h2>
        <p class=\"translate-it\" key=\"carried_out_a_bank_transfer\">Осуществляли перевод у нас? Вы можете найти полную информацию о ваших переводах</p>
      </div>
    </div>
    <form action=\"#!\" data-abide>
      <div class=\"row\">
        <div class=\"large-3 columns\">
          <span class=\"popup_label_desc translate-it\" key=\"card\">карта</span>
        </div>
        <div class=\"large-7 end columns\">
          <div class=\"row\">
            <div class=\"large-5 columns\">
              <input type=\"number\" class=\"first-six\" placeholder=\"ПЕРВЫЕ 6\" required=\"required\">
            </div>
            <div class=\"large-2 columns\">
              <span class=\"popup_label__stars\">*******</span>
            </div>
            <div class=\"large-5 columns\">
              <input type=\"number\" class=\"last-four\" placeholder=\"ПОСЛЕДНИЕ 4\" required=\"required\">
            </div>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"large-3 columns\">
          <span class=\"popup_label_desc translate-it\" key=\"transfer_amount\">сумма перевода</span>
        </div>
        <div class=\"large-7 end columns\">
          <input type=\"number\" required=\"required\">
        </div>
      </div>
      <div class=\"row\">
        <div class=\"large-3 columns\">
          <span class=\"popup_label_desc translate-it\" key=\"date\">дата</span>
        </div>
        <div class=\"large-7 end columns\">
          <input type=\"date\" required=\"required\">
        </div>
      </div>
      <div class=\"row\">
        <div class=\"large-3 columns\">
          <span class=\"popup_label_desc translate-it\" key=\"your_email\">ваш e-mail</span>
        </div>
        <div class=\"large-7 end columns\">
          <input type=\"email\" pattern=\"email\" required=\"required\">
        </div>
      </div>
      <div class=\"row\">
        <div class=\"large-3 columns\">
          <span class=\"popup_label_desc translate-it\" key=\"message\">сообщение</span>
        </div>
        <div class=\"large-7 end columns\">
          <textarea rows=\"4\"></textarea>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"large-3 columns\">
          <span class=\"popup_label_desc translate-it\" key=\"capcha\">код рисунка</span>
        </div>
        <div class=\"large-7 end columns\">
          <div class=\"row\">
            <div class=\"large-3 columns\">
              <span class=\"capcha\"><img src=\"{{ 'assets/img/capcha.png'|theme }}\" alt=\"capcha\"></span>
            </div>
            <div class=\"large-4 columns end\">
              <input type=\"text\">
            </div>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"large-3 large-centered columns\">
          <button class=\"button expanded success-operation-button translate-it\" key=\"send\">отправить</button>
        </div>
      </div>
    </form>


    <button class=\"close-button\" data-close aria-label=\"Close reveal\" type=\"button\">
      <span aria-hidden=\"true\"><i class=\"icn-close\"></i></span>
    </button>
  </div><!-- END POPUP -->
    <script src=\"{{ 'assets/js/vendor/jquery.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/vendor/what-input.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/vendor/foundation.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/vendor/jquery.cookie.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/app.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/locale.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/functions.js'|theme }}\"></script>
  </body>
</html>", "/Applications/AMPPS/www/perevedi-v2.bs2/themes/perevedionline/layouts/default.htm", "");
    }
}
