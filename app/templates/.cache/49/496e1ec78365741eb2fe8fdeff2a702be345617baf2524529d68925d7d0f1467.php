<?php

/* curso/curso.twig */
class __TwigTemplate_1fa119082d342f906ee0bb2fff4de949cd524c3453c68293e6ae40874bed7f06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("overall/layout", "curso/curso.twig", 1);
        $this->blocks = array(
            'appHeader' => array($this, 'block_appHeader'),
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
    public function block_appHeader($context, array $blocks = array())
    {
        // line 3
        echo "<style>
.card .card-content {
    height: 210px;
}
</style>
";
    }

    // line 9
    public function block_appBody($context, array $blocks = array())
    {
        // line 10
        echo "    <div id=\"intro\" class=\"section scrollspy\">
        <div class=\"container\">
            <div class=\"row\">
                <div  class=\"col s12\">
                    <h3 class=\"center header text_h3\"> ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["lista"] ?? null), "title", array()), "html", null, true);
        echo " </h3>
                    <h4 class=\"center header text_h4\" style=\"font-weight: 200\"> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["lista"] ?? null), "desc", array()), "html", null, true);
        echo " </h4>
                </div>
            </div>
        </div>
    </div>

    <div class=\"section scrollspy\" id=\"work\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["videos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            if ((false != ($context["videos"] ?? null))) {
                // line 25
                echo "                    <div class=\"col s12 m4 l4\">
                        <div class=\"card\">
                            <div class=\"card-image waves-effect waves-block waves-light\">
                                <img class=\"activator\" src=\"";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "thumb", array()), "html", null, true);
                echo "\">
                            </div>
                            <div class=\"card-content\">
                                <span class=\"card-title activator grey-text text-darken-4\">
                                    <span class=\"activator trunc_title\">";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "title", array()), "html", null, true);
                echo "</span>
                                </span>
                                <p><a href=\"ver/";
                // line 34
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
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "title", array()), "html", null, true);
                echo "</b></p>
                                <p>";
                // line 42
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
        // line 47
        echo "            </div>
        </div>
</div>
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
        return array (  116 => 47,  104 => 42,  100 => 41,  88 => 34,  83 => 32,  76 => 28,  71 => 25,  66 => 24,  54 => 15,  50 => 14,  44 => 10,  41 => 9,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "curso/curso.twig", "C:\\xampp\\htdocs\\prinick.com\\app\\templates\\curso\\curso.twig");
    }
}
