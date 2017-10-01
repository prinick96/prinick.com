<?php

/* curso/curso.twig */
class __TwigTemplate_13cb3b88876a97704286a0236502d562a5127f854a3f1de0e202ad0f5d0ed366 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("overall/layout", "curso/curso.twig", 1);
        $this->blocks = array(
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
    public function block_appBody($context, array $blocks = array())
    {
        // line 3
        echo "    ¡Hola Mundo!
";
    }

    public function getTemplateName()
    {
        return "curso/curso.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "curso/curso.twig", "C:\\xampp\\htdocs\\prinick.com\\app\\templates\\curso\\curso.twig");
    }
}
