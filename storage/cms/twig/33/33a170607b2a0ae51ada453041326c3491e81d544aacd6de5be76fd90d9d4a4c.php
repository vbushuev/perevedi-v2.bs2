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
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vsb/css/style.css");
        echo "\">

    <!-- favicons -->
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/favicons/apple-touch-icon.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/favicons/favicon-32x32.png");
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/favicons/favicon-16x16.png");
        echo "\">
    <link rel=\"manifest\" href=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/favicons/manifest.json");
        echo "\">
    <link rel=\"mask-icon\" href=\"";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/favicons/safari-pinned-tab.svg");
        echo "\" color=\"#5bbad5\">
    <link rel=\"shortcut icon\" href=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/favicon.ico");
        echo "\"/>
    <meta name=\"theme-color\" content=\"#ffffff\">
    <!-- Google Analytics -->
    <script>
    window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
    ga('create', 'UA-110543399-1', 'auto');
    ga('send', 'pageview');
    </script>
    <script async src='https://www.google-analytics.com/analytics.js'></script>
    <!-- End Google Analytics -->
</head>
<body>
    <div class=\"loader\">
        <img src=\"";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/loader.gif");
        echo "\" alt=\"\">
    </div>
    <section class=\"hero\">
        <header class=\"header\">
            ";
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "        </header>
        ";
        // line 38
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 39
        echo "    </section>

    ";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "
    ";
        // line 43
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/support"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 44
        echo "
    <script src=\"";
        // line 45
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/vendor/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 46
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/vendor/what-input.js");
        echo "\"></script>
    <script src=\"";
        // line 47
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/vendor/foundation.js");
        echo "\"></script>
    <script src=\"";
        // line 48
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/vendor/jquery.cookie.js");
        echo "\"></script>

    <script src=\"";
        // line 50
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/vendor/jquery.inputmask.bundle.js");
        echo "\"></script>
    <!-- <script src=\"";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/vendor/phone-codes/phone.js");
        echo "\"></script>
    <script src=\"";
        // line 52
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/vendor/phone-codes/phone-be.js");
        echo "\"></script>
    <script src=\"";
        // line 53
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/vendor/phone-codes/phone-ru.js");
        echo "\"></script> -->

    <script src=\"";
        // line 55
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/app.js");
        echo "\"></script>
    <script src=\"";
        // line 56
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/locale.js");
        echo "\"></script>
    <script src=\"";
        // line 57
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/functions.js");
        echo "\"></script>

    <script src=\"";
        // line 59
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vsb/js/app.js");
        echo "\"></script>

    ";
        // line 61
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 62
        echo "    <!-- Yandex.Metrika counter -->
    <script type=\"text/javascript\"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter46894260 = new Ya.Metrika({ id:46894260, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName(\"script\")[0], s = d.createElement(\"script\"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = \"text/javascript\"; s.async = true; s.src = \"https://mc.yandex.ru/metrika/watch.js\"; if (w.opera == \"[object Opera]\") { d.addEventListener(\"DOMContentLoaded\", f, false); } else { f(); } })(document, window, \"yandex_metrika_callbacks\"); </script> <noscript><div><img src=\"https://mc.yandex.ru/watch/46894260\" style=\"position:absolute; left:-9999px;\" alt=\"\" /></div></noscript> <!-- /Yandex.Metrika counter -->
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
        return array (  175 => 62,  168 => 61,  163 => 59,  158 => 57,  154 => 56,  150 => 55,  145 => 53,  141 => 52,  137 => 51,  133 => 50,  128 => 48,  124 => 47,  120 => 46,  116 => 45,  113 => 44,  109 => 43,  106 => 42,  102 => 41,  98 => 39,  96 => 38,  93 => 37,  89 => 36,  82 => 32,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  46 => 14,  40 => 11,  36 => 10,  32 => 9,  28 => 8,  19 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{ 'assets/vsb/css/style.css'|theme }}\">

    <!-- favicons -->
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ 'assets/img/favicons/apple-touch-icon.png'|theme }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ 'assets/img/favicons/favicon-32x32.png'|theme }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ 'assets/img/favicons/favicon-16x16.png'|theme }}\">
    <link rel=\"manifest\" href=\"{{ 'assets/img/favicons/manifest.json'|theme }}\">
    <link rel=\"mask-icon\" href=\"{{ 'assets/img/favicons/safari-pinned-tab.svg'|theme }}\" color=\"#5bbad5\">
    <link rel=\"shortcut icon\" href=\"{{ 'assets/favicon.ico'|theme }}\"/>
    <meta name=\"theme-color\" content=\"#ffffff\">
    <!-- Google Analytics -->
    <script>
    window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
    ga('create', 'UA-110543399-1', 'auto');
    ga('send', 'pageview');
    </script>
    <script async src='https://www.google-analytics.com/analytics.js'></script>
    <!-- End Google Analytics -->
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

    {% partial 'site/footer' %}

    {% partial 'site/support' %}

    <script src=\"{{ 'assets/js/vendor/jquery.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/vendor/what-input.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/vendor/foundation.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/vendor/jquery.cookie.js'|theme }}\"></script>

    <script src=\"{{ 'assets/js/vendor/jquery.inputmask.bundle.js'|theme }}\"></script>
    <!-- <script src=\"{{ 'assets/js/vendor/phone-codes/phone.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/vendor/phone-codes/phone-be.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/vendor/phone-codes/phone-ru.js'|theme }}\"></script> -->

    <script src=\"{{ 'assets/js/app.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/locale.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/functions.js'|theme }}\"></script>

    <script src=\"{{ 'assets/vsb/js/app.js'|theme }}\"></script>

    {% framework extras %}
    <!-- Yandex.Metrika counter -->
    <script type=\"text/javascript\"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter46894260 = new Ya.Metrika({ id:46894260, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName(\"script\")[0], s = d.createElement(\"script\"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = \"text/javascript\"; s.async = true; s.src = \"https://mc.yandex.ru/metrika/watch.js\"; if (w.opera == \"[object Opera]\") { d.addEventListener(\"DOMContentLoaded\", f, false); } else { f(); } })(document, window, \"yandex_metrika_callbacks\"); </script> <noscript><div><img src=\"https://mc.yandex.ru/watch/46894260\" style=\"position:absolute; left:-9999px;\" alt=\"\" /></div></noscript> <!-- /Yandex.Metrika counter -->
  </body>
</html>", "/Applications/AMPPS/www/perevedi-v2.bs2/themes/perevedionline/layouts/default.htm", "");
    }
}
