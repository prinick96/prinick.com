<?php

/* home/home.twig */
class __TwigTemplate_c91bb8c361413e4f9fc35aa5b52cd70a87a1ef1a6a6697b277b1b109d2889d31 extends Twig_Template
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
    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            if ((false != ($context["listas"] ?? null))) {
                // line 39
                echo "        <div class=\"container\">
            <h2 class=\"header\">";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "title", array()), "html", null, true);
                echo " <small class=\"ver_todo\"><a href=\"curso/";
                echo twig_escape_filter($this->env, $this->env->getExtension('Ocrend\Kernel\Helpers\Strings')->url_amigable(twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "title", array())), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "id_lista", array()), "html", null, true);
                echo "\">Ver Todo</a></small></h2>
            <div class=\"row\">
                ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "videos", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                    if ((false != twig_get_attribute($this->env, $this->getSourceContext(), $context["l"], "videos", array()))) {
                        // line 43
                        echo "                    <div class=\"col s12 m3 l3\">
                        <div class=\"card\">
                            <div class=\"card-image waves-effect waves-block waves-light\">
                                <img class=\"activator\" src=\"";
                        // line 46
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "thumb", array()), "html", null, true);
                        echo "\">
                            </div>
                            <div class=\"card-content\">
                                <span class=\"card-title activator grey-text text-darken-4\">
                                    <span class=\"activator trunc_title\">";
                        // line 50
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "title", array()), "html", null, true);
                        echo "</span>
                                </span>
                                <p><a href=\"ver/";
                        // line 52
                        echo twig_escape_filter($this->env, $this->env->getExtension('Ocrend\Kernel\Helpers\Strings')->url_amigable(twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "title", array())), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "url", array()), "html", null, true);
                        echo "\">Ver Publicación</a></p>
                            </div>
                            <div class=\"card-reveal\">
                                <span class=\"card-title grey-text text-darken-4\">
                                    Descripción
                                    <i class=\"mdi-navigation-close right\"></i>
                                </span>
                                <p><b>";
                        // line 59
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "title", array()), "html", null, true);
                        echo "</b></p>
                                <p>";
                        // line 60
                        echo $this->env->getExtension('Ocrend\Kernel\Helpers\Strings')->description_video(twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "desc", array()));
                        echo "</p>
                            </div>
                        </div>
                    </div>
                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "            </div>
        </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "</div>
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
        return array (  144 => 68,  135 => 65,  123 => 60,  119 => 59,  107 => 52,  102 => 50,  95 => 46,  90 => 43,  85 => 42,  76 => 40,  73 => 39,  68 => 38,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home/home.twig", "C:\\xampp\\htdocs\\prinick.com\\app\\templates\\home\\home.twig");
    }
}
