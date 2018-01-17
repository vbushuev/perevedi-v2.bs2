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
      <img src=\"img/logo.png\" alt=\"Perevedi.online\">
    </div><!-- END LOGO -->
  </div>
  <div class=\"large-4 column\">
    <div class=\"row\">
      <div class=\"large-9 large-offset-3 column\">
        <div class=\"lang-box\">
          <ul class=\"lang-menu\">
            <li><a href=\"#\" class=\"lang active\" title=\"Русский\" id=\"rus\">РУС</a></li>
            <li><a href=\"#\" class=\"lang\" title=\"English\" id=\"eng\">ENG</a></li>
            <li><a href=\"#!\" class=\"envelop\" data-open=\"support\" title=\"Поддержка\"><i class=\"icn-envelop\"></i></a></li>
          </ul>
        </div><!-- END LANG-BOX -->
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/AMPPS/www/perevedi-v2.bs2/themes/perevedionline/partials/site/header.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
      <img src=\"img/logo.png\" alt=\"Perevedi.online\">
    </div><!-- END LOGO -->
  </div>
  <div class=\"large-4 column\">
    <div class=\"row\">
      <div class=\"large-9 large-offset-3 column\">
        <div class=\"lang-box\">
          <ul class=\"lang-menu\">
            <li><a href=\"#\" class=\"lang active\" title=\"Русский\" id=\"rus\">РУС</a></li>
            <li><a href=\"#\" class=\"lang\" title=\"English\" id=\"eng\">ENG</a></li>
            <li><a href=\"#!\" class=\"envelop\" data-open=\"support\" title=\"Поддержка\"><i class=\"icn-envelop\"></i></a></li>
          </ul>
        </div><!-- END LANG-BOX -->
      </div>
    </div>
  </div>
</div>", "/Applications/AMPPS/www/perevedi-v2.bs2/themes/perevedionline/partials/site/header.htm", "");
    }
}
