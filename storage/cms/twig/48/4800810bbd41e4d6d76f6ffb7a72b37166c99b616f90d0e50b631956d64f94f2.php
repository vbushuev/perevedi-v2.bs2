<?php

/* /Applications/AMPPS/www/perevedi-v2.bs2/themes/perevedionline/partials/site/footer.htm */
class __TwigTemplate_f7a0773ac2d569586f8fe0569cf5cd868be4faa6bade7e0579f04a52dbe50518 extends Twig_Template
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
        echo "<footer class=\"footer\">
  <div class=\"row\">
    <div class=\"large-10 columns\">
      <ul class=\"footer_menu\">
        <!-- <li><a href=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/offer-Rentkomplekt.pdf");
        echo "\" target=\"_blank\" class=\"translate-it\" key=\"service_offer\">Оферта сервиса</a></li> -->
      </ul>
    </div>
    <div class=\"large-2 columns\">
       <span class=\"copyright\">© 2017 Copyright</span>
    </div>
  </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/Applications/AMPPS/www/perevedi-v2.bs2/themes/perevedionline/partials/site/footer.htm";
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
        return new Twig_Source("<footer class=\"footer\">
  <div class=\"row\">
    <div class=\"large-10 columns\">
      <ul class=\"footer_menu\">
        <!-- <li><a href=\"{{ 'assets/offer-Rentkomplekt.pdf'|theme }}\" target=\"_blank\" class=\"translate-it\" key=\"service_offer\">Оферта сервиса</a></li> -->
      </ul>
    </div>
    <div class=\"large-2 columns\">
       <span class=\"copyright\">© 2017 Copyright</span>
    </div>
  </div>
</footer>", "/Applications/AMPPS/www/perevedi-v2.bs2/themes/perevedionline/partials/site/footer.htm", "");
    }
}
