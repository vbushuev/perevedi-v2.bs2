<?php

/* /Applications/AMPPS/www/perevedi-v2.bs2/themes/perevedionline/partials/site/header.htm */
class __TwigTemplate_ec153027bf8b9c9ae1fbcd346af7264463cf738b920c30f6dbbda06b79122fdd extends Twig_Template
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
        echo "<div class=\"row\">
  <div class=\"large-8 column\">
    <div class=\"logo\">
        <a href=\"/\">
            <img src=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/img/logo.png");
        echo "\" alt=\"Perevedi.online\">
        </a>

    </div><!-- END LOGO -->
  </div>
  <div class=\"large-4 column\">
    <div class=\"row\">
      <div class=\"large-9 large-offset-3 column\">
        <div class=\"lang-box\">
          <ul class=\"lang-menu\">
            <li><a href=\"#\" class=\"lang active\" title=\"Русский\" id=\"rus\">РУС</a></li>
            <li><a href=\"#\" class=\"lang\" title=\"Українська\" id=\"ukr\">УКР</a></li>
            <li><a href=\"#\" class=\"lang\" title=\"English\" id=\"eng\">ENG</a></li>
            <li><a href=\"#!\" class=\"envelop\" data-open=\"support\" title=\"Поддержка\"><i class=\"icn-envelop\"></i></a></li>
          </ul>
        </div><!-- END LANG-BOX -->
      </div>
    </div>
  </div>
</div>
<div class=\"row\" data-magellan>
  <div class=\"large-12 column text-right\">
    <ul class=\"main-menu\">
      <li><a href=\"#aboutService\" class=\"menu-link translate-it\" key=\"about_service\">о сервисе</a></li>
      <li><a href=\"#tariff\" class=\"menu-link translate-it\" key=\"tarif\">тарифы</a></li>
      <li><a href=\"#faq\" class=\"menu-link translate-it\" key=\"faq\">вопросы</a></li>
      <li><a href=\"#contact\" class=\"menu-link translate-it\" key=\"contacts\">контакты</a></li>
    </ul>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/AMPPS/www/perevedi-v2.bs2/themes/perevedionline/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
  <div class=\"large-8 column\">
    <div class=\"logo\">
        <a href=\"/\">
            <img src=\"{{ 'assets/img/logo.png'|theme }}\" alt=\"Perevedi.online\">
        </a>

    </div><!-- END LOGO -->
  </div>
  <div class=\"large-4 column\">
    <div class=\"row\">
      <div class=\"large-9 large-offset-3 column\">
        <div class=\"lang-box\">
          <ul class=\"lang-menu\">
            <li><a href=\"#\" class=\"lang active\" title=\"Русский\" id=\"rus\">РУС</a></li>
            <li><a href=\"#\" class=\"lang\" title=\"Українська\" id=\"ukr\">УКР</a></li>
            <li><a href=\"#\" class=\"lang\" title=\"English\" id=\"eng\">ENG</a></li>
            <li><a href=\"#!\" class=\"envelop\" data-open=\"support\" title=\"Поддержка\"><i class=\"icn-envelop\"></i></a></li>
          </ul>
        </div><!-- END LANG-BOX -->
      </div>
    </div>
  </div>
</div>
<div class=\"row\" data-magellan>
  <div class=\"large-12 column text-right\">
    <ul class=\"main-menu\">
      <li><a href=\"#aboutService\" class=\"menu-link translate-it\" key=\"about_service\">о сервисе</a></li>
      <li><a href=\"#tariff\" class=\"menu-link translate-it\" key=\"tarif\">тарифы</a></li>
      <li><a href=\"#faq\" class=\"menu-link translate-it\" key=\"faq\">вопросы</a></li>
      <li><a href=\"#contact\" class=\"menu-link translate-it\" key=\"contacts\">контакты</a></li>
    </ul>
  </div>
</div>", "/Applications/AMPPS/www/perevedi-v2.bs2/themes/perevedionline/partials/site/header.htm", "");
    }
}
