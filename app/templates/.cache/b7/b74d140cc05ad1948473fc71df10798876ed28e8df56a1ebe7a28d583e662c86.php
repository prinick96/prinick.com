<?php

/* error/error.twig */
class __TwigTemplate_c779d822ed3464f4cfba47e316d4cd2cf5215675ec2437130f9e929bb7ce9745 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("overall/layout", "error/error.twig", 1);
        $this->blocks = array(
            'appTitle' => array($this, 'block_appTitle'),
            'appBody' => array($this, 'block_appBody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "overall/layout";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_appTitle($context, array $blocks = array())
    {
        echo "PRINICK | ERROR 404";
    }

    // line 3
    public function block_appBody($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"section no-pad-bot\" id=\"index-banner\" style=\"height: 100%!important\">
    <div class=\"container\">
        <h1 class=\"text_h center header cd-headline letters type\">
            <span>Error </span> 
            <span class=\"cd-words-wrapper waiting\">
                <b class=\"is-visible\">404</b>
            </span>
            <br />
            <span>Página no encontrada</span>
        </h1>
    </div>
</div>    
";
    }

    public function getTemplateName()
    {
        return "error/error.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "error/error.twig", "C:\\xampp\\htdocs\\prinick.com\\app\\templates\\error\\error.twig");
    }
}
