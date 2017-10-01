<?php

/* home/home.twig */
class __TwigTemplate_d8d761766ab5d5288f36b204b5d8c635efaa21e6f05199b99a82e50612b4cc0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("overall/layout", "home/home.twig", 1);
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
        echo "<!--Hero-->
<div class=\"section no-pad-bot\" id=\"index-banner\">
    <div class=\"container\">
        <h1 class=\"text_h center header cd-headline letters type\">
            <span>Tutoriales de </span> 
            <span class=\"cd-words-wrapper waiting\">
                <b class=\"is-visible\">Windows</b>
                <b>Photoshop</b>
                <b>HTML, CSS y JavaScript</b>
                <b>PHP</b>
                <b>Ocrend Framework</b>
                <b>Twig</b>
            </span>
        </h1>
    </div>
</div>

<!--Intro and service-->
<div id=\"intro\" class=\"section scrollspy\">
    <div class=\"container\">
        <div class=\"row\">
            <div  class=\"col s12\">
                <h2 class=\"center header text_h2\"> Bienvenido a mi rincón personal, donde verás todos mis <span class=\"span_h2\"> tutoriales  </span> y también <span class=\"span_h2\"> aportes </span> a la comunidad de internet.</h2>
            </div>
        </div>
    </div>
</div>

<!--Parallax-->
<div class=\"parallax-container\">
    <div class=\"parallax\"><img src=\"views/assets/img/parallax1.png\"></div>
</div>

<!--Work-->
<div class=\"section scrollspy\" id=\"work\">
    <div class=\"container\">
        <h2 class=\"header\">Lista de Reproducción <small class=\"ver_todo\"><a href=\"#\">Ver Todo</a></small></h2>
        <div class=\"row\">
            <div class=\"col s12 m3 l3\">
                <div class=\"card\">
                    <div class=\"card-image waves-effect waves-block waves-light\">
                        <img class=\"activator\" src=\"views/assets/img/project1.jpg\">
                    </div>
                    <div class=\"card-content\">
                        <span class=\"card-title activator grey-text text-darken-4\">
                            <span class=\"trunc_title\">YouTube</span>
                            <i class=\"mdi-navigation-more-vert right\"></i>
                        </span>
                        <p><a href=\"#\">Ver Publicación</a></p>
                    </div>
                    <div class=\"card-reveal\">
                        <span class=\"card-title grey-text text-darken-4\">
                            Descripción
                            <i class=\"mdi-navigation-close right\"></i>
                        </span>
                        <p><b>Título del vídeo</b></p>
                        <p>Descripción corta por aquí.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "home/home.twig";
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
        return new Twig_Source("", "home/home.twig", "C:\\xampp\\htdocs\\prinick.com\\app\\templates\\home\\home.twig");
    }
}
