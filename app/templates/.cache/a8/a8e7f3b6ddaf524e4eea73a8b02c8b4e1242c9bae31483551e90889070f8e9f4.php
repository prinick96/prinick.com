<?php

/* ver/ver.twig */
class __TwigTemplate_8856714269a33abf311d3da979002dd2e72974269923b404230f4456625d96ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("overall/layout", "ver/ver.twig", 1);
        $this->blocks = array(
            'appHeader' => array($this, 'block_appHeader'),
            'appTitle' => array($this, 'block_appTitle'),
            'ogTitle' => array($this, 'block_ogTitle'),
            'twitterTitle' => array($this, 'block_twitterTitle'),
            'ogUrl' => array($this, 'block_ogUrl'),
            'appDesc' => array($this, 'block_appDesc'),
            'ogDesc' => array($this, 'block_ogDesc'),
            'twitterDesc' => array($this, 'block_twitterDesc'),
            'appTags' => array($this, 'block_appTags'),
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

    // line 3
    public function block_appHeader($context, array $blocks = array())
    {
        // line 4
        echo "    <meta property=\"og:type\" content=\"article\" />
";
    }

    // line 7
    public function block_appTitle($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["v"] ?? null), "title", array()), "html", null, true);
    }

    // line 8
    public function block_ogTitle($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["v"] ?? null), "title", array()), "html", null, true);
    }

    // line 9
    public function block_twitterTitle($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["v"] ?? null), "title", array()), "html", null, true);
    }

    // line 11
    public function block_ogUrl($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "site", array()), "url", array()), "html", null, true);
        echo "ver/";
        echo twig_escape_filter($this->env, $this->env->getExtension('Ocrend\Kernel\Helpers\Strings')->url_amigable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["v"] ?? null), "title", array())), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["v"] ?? null), "url", array()), "html", null, true);
    }

    // line 13
    public function block_appDesc($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["v"] ?? null), "desc", array()), 0, 159), "html", null, true);
    }

    // line 14
    public function block_ogDesc($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["v"] ?? null), "desc", array()), 0, 159), "html", null, true);
    }

    // line 15
    public function block_twitterDesc($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["v"] ?? null), "desc", array()), 0, 159), "html", null, true);
    }

    // line 17
    public function block_appTags($context, array $blocks = array())
    {
        echo "tags del title";
    }

    // line 19
    public function block_appBody($context, array $blocks = array())
    {
        // line 20
        echo "<div id=\"intro\" class=\"section scrollspy\">
    <div class=\"container\">
        <div class=\"row\">
            <div  class=\"col s12\">
                <h2 class=\"center header text_h3\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["v"] ?? null), "title", array()), "html", null, true);
        echo "</h2>
                <div class=\"video-container\">
                    <iframe width=\"1280\" height=\"720\" src=\"https://www.youtube.com/embed/";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["v"] ?? null), "url", array()), "html", null, true);
        echo "?showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>
                </div>
                <br />
                <br />
               ";
        // line 30
        echo $this->env->getExtension('Ocrend\Kernel\Helpers\Strings')->description_video(twig_get_attribute($this->env, $this->getSourceContext(), ($context["v"] ?? null), "desc", array()));
        echo "
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ver/ver.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 30,  111 => 26,  106 => 24,  100 => 20,  97 => 19,  91 => 17,  85 => 15,  79 => 14,  73 => 13,  63 => 11,  57 => 9,  51 => 8,  45 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ver/ver.twig", "C:\\xampp\\htdocs\\prinick.com\\app\\templates\\ver\\ver.twig");
    }
}
