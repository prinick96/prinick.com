<?php

/* ver/ver.twig */
class __TwigTemplate_ef93c0e2ab942f31339e67d4d57bca5323f1587d8fad868b3d6623399ed9f0de extends Twig_Template
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
        echo "Título del Post aquí";
    }

    // line 8
    public function block_ogTitle($context, array $blocks = array())
    {
        echo "Título del Post aquí";
    }

    // line 9
    public function block_twitterTitle($context, array $blocks = array())
    {
        echo "Título del Post aquí";
    }

    // line 11
    public function block_ogUrl($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "site", array()), "url", array()), "html", null, true);
        echo "ver/URL_AQUI";
    }

    // line 13
    public function block_appDesc($context, array $blocks = array())
    {
        echo "Descripción limitada a 160";
    }

    // line 14
    public function block_ogDesc($context, array $blocks = array())
    {
        echo "Descripción limitada a 160";
    }

    // line 15
    public function block_twitterDesc($context, array $blocks = array())
    {
        echo "Descripción limitada a 160";
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
                <h2 class=\"center header text_h2\">Título del Post por aquí</h2>
                <div class=\"video-container\">
                    <iframe ";
        // line 26
        echo " width=\"1280\" height=\"720\" src=\"https://www.youtube.com/embed/cW4Rq3pPGTM?showinfo=0\" frameborder=\"0\" allowfullscreen></iframe>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales auctor tempor. Praesent maximus nulla quis erat feugiat, quis laoreet lacus congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ut mauris ac dui auctor lacinia. Mauris sem mi, vehicula finibus mi eget, efficitur eleifend diam. Suspendisse nec dolor ultrices, sagittis orci vel, luctus massa. Sed vitae laoreet ex. Suspendisse vitae sem in mauris laoreet sagittis. Proin suscipit sollicitudin risus, lacinia blandit diam. Cras finibus ex eget arcu laoreet tempor. In porttitor felis id massa maximus, ut ullamcorper neque lacinia. Suspendisse ac venenatis diam, quis tempus metus. Nulla posuere leo elit, vitae laoreet magna euismod vel. Aenean eu viverra lectus. Nullam ac tincidunt neque, vel fringilla justo.</p>
                <p>Duis vel enim vel felis tincidunt iaculis quis at risus. Donec vel ligula luctus, suscipit mauris at, dapibus mi. Nullam efficitur condimentum congue. Duis hendrerit erat in molestie maximus. Maecenas rutrum mi eros, et finibus massa consequat nec. Nulla volutpat enim sit amet leo convallis mattis. Vestibulum posuere ante in consectetur pellentesque. Nulla sed viverra nunc. Cras sodales lacus sed bibendum vehicula.</p>
                <p>Aliquam erat volutpat. Donec lobortis mauris pellentesque, convallis nisl sed, varius libero. Nam in lacus ac mauris consequat pharetra. Sed est ex, posuere lobortis mi vitae, posuere luctus erat. Aenean ac vehicula arcu. Mauris velit augue, fermentum eget dolor quis, venenatis sodales ex. Integer elementum facilisis ante a iaculis. Morbi interdum diam turpis, et pharetra justo ultrices eget. Sed vulputate mauris orci, et mattis erat hendrerit ut.</p>
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
        return array (  105 => 26,  97 => 20,  94 => 19,  88 => 17,  82 => 15,  76 => 14,  70 => 13,  63 => 11,  57 => 9,  51 => 8,  45 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ver/ver.twig", "C:\\xampp\\htdocs\\prinick.com\\app\\templates\\ver\\ver.twig");
    }
}
