<?php

/* overall/layout.twig */
class __TwigTemplate_525d1bd41c5756e4a85f93b32358588cf99c3019970c5c09cab1f66d0ee0c92d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'appDesc' => array($this, 'block_appDesc'),
            'appTags' => array($this, 'block_appTags'),
            'ogTitle' => array($this, 'block_ogTitle'),
            'ogUrl' => array($this, 'block_ogUrl'),
            'ogDesc' => array($this, 'block_ogDesc'),
            'twitterTitle' => array($this, 'block_twitterTitle'),
            'twitterDesc' => array($this, 'block_twitterDesc'),
            'appTitle' => array($this, 'block_appTitle'),
            'appHeader' => array($this, 'block_appHeader'),
            'appBody' => array($this, 'block_appBody'),
            'appFooter' => array($this, 'block_appFooter'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
    ";
        // line 4
        echo $this->env->getExtension('Ocrend\Kernel\Helpers\Functions')->base_assets();
        echo "
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no\"/>

    ";
        // line 9
        echo "    <meta name=\"theme-color\" content=\"#2196F3\">
    <meta name=\"HandheldFriendly\" content=\"True\">
\t<meta name=\"MobileOptimized\" content=\"320\">
    <link rel=\"author\" href=\"http://google.com/+PrinickNarváez\" />
    <link rel=\"publisher\" href=\"http://google.com/+PrinickNarváez\" />
    <meta name=\"description\"  content=\"";
        // line 14
        $this->displayBlock('appDesc', $context, $blocks);
        echo "\" />
    <meta name=\"keywords\"  content=\"";
        // line 15
        $this->displayBlock('appTags', $context, $blocks);
        echo "\" />
    <meta name=\"google-site-verification\" content=\"http://google.com/+PrinickNarváez\" />

    <meta property=\"og:title\" content=\"";
        // line 18
        $this->displayBlock('ogTitle', $context, $blocks);
        echo "\" />
    <meta property=\"og:url\" content=\"";
        // line 19
        $this->displayBlock('ogUrl', $context, $blocks);
        echo "\" />
    <meta property=\"og:image\" content=\"views/assets/img/default.jpg\" />
    <meta property=\"og:site_name\" content=\"PRINICK\" />
    <meta property=\"og:description\" content=\"";
        // line 22
        $this->displayBlock('ogDesc', $context, $blocks);
        echo "\" />
    <meta name=\"twitter:card\" content=\"summary_large_image\" />
    <meta name=\"twitter:title\" content=\"";
        // line 24
        $this->displayBlock('twitterTitle', $context, $blocks);
        echo "\" />
    <meta name=\"twitter:description\" content=\"";
        // line 25
        $this->displayBlock('twitterDesc', $context, $blocks);
        echo "\" />
    <meta name=\"twitter:image\" content=\"views/assets/img/default.jpg\" />
    
    ";
        // line 29
        echo "    <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-47456992-1', 'auto');
          
          ga('send', 'pageview');
    </script>

    ";
        // line 41
        echo "    <title>";
        $this->displayBlock('appTitle', $context, $blocks);
        echo "</title>

    ";
        // line 44
        echo "    <link rel=\"shortcut icon\" href=\"favicon.ico\">    
    <link href=\"views/assets/min/plugin-min.css\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"views/assets/min/custom-min.css\" type=\"text/css\" rel=\"stylesheet\" >
    <link href=\"views/assets/css/jquery-confirm.min.css\" type=\"text/css\" rel=\"stylesheet\" >
    
    ";
        // line 50
        echo "    ";
        $this->displayBlock('appHeader', $context, $blocks);
        // line 53
        echo "</head>
<body id=\"top\" class=\"scrollspy\">

    <!-- Pre Loader -->
    <div id=\"loader-wrapper\">
        <div id=\"loader\"></div>
        <div class=\"loader-section section-left\"></div>
        <div class=\"loader-section section-right\"></div>
    </div>

    <!--Navigation-->
    <div class=\"navbar-fixed\">
        <nav id=\"nav_f\" class=\"default_color\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"nav-wrapper\">
                    <a href=\"home/\" id=\"logo-container\" class=\"brand-logo\">
                        <img src=\"views/assets/img/logo.png\" />
                    </a>
                    <ul class=\"right hide-on-med-and-down\">
                        <li><a href=\"home/\">Inicio & Tutoriales</a></li>
                        <li><a href=\"http://www.ocrend.com/\">Desarrollo Web</a></li>
                        <li><a href=\"http://framework.ocrend.com/\">Framework</a></li>
                        <li><a href=\"#contact\">Contacto</a></li>
                    </ul>
                    <ul id=\"nav-mobile\" class=\"side-nav\">
                        <li><a href=\"home/\">Inicio & Tutoriales</a></li>
                        <li><a href=\"#contact\">Contacto</a></li>
                    </ul>
                    <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"mdi-navigation-menu\"></i></a>
                </div>
            </div>
        </nav>
    </div>

    ";
        // line 88
        echo "    ";
        $this->displayBlock('appBody', $context, $blocks);
        // line 91
        echo "
    <!--Footer-->
    <footer id=\"contact\" class=\"page-footer default_color scrollspy\">
        <div class=\"container\">  
            <div class=\"row\">
                <div class=\"col l6 s12\">
                    <form class=\"col s12\" id=\"contacto_form\">
                        <div class=\"row\">
                            <div class=\"input-field col s6\">
                                <i class=\"mdi-action-account-circle prefix white-text\"></i>
                                <input id=\"icon_prefix\" name=\"name\" type=\"text\" class=\"validate white-text\">
                                <label for=\"icon_prefix\" class=\"white-text\">Su Nombre</label>
                            </div>
                            <div class=\"input-field col s6\">
                                <i class=\"mdi-communication-email prefix white-text\"></i>
                                <input id=\"icon_email\" name=\"email\" type=\"email\" class=\"validate white-text\">
                                <label for=\"icon_email\" class=\"white-text\">Email de Contacto</label>
                            </div>
                            <div class=\"input-field col s12\">
                                <i class=\"mdi-communication-phone prefix white-text\"></i>
                                <input id=\"icon_phone\" name=\"phone\" type=\"tel\" class=\"validate white-text\">
                                <label for=\"icon_phone\" class=\"white-text\">Número de Teléfono</label>
                            </div>
                            <div class=\"input-field col s12\">
                                <i class=\"mdi-editor-mode-edit prefix white-text\"></i>
                                <textarea id=\"icon_prefix2\" name=\"message\" class=\"materialize-textarea white-text\"></textarea>
                                <label for=\"icon_prefix2\" class=\"white-text\">Mensaje</label>
                            </div>
                            <div class=\"col offset-s7 s5\">
                                <a class=\"btn waves-effect waves-light red darken-1\" id=\"contacto\"><i class=\"mdi-content-send right white-text\"></i> Enviar</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"col l3 s12\">
                    <h5 class=\"white-text\">Sobre Mí</h5>
                    <ul>
                        <li class=\"white-text\">
                            Desarrollador de aplicaciones web.
                        </li>
                        <li class=\"white-text\">
                            MEAN Stack & LAMP Stack.
                        </li>
                        <li class=\"white-text\">
                            JS & PHP Addict
                        </li>
                        <li class=\"white-text\">
                            Ingeniero Informático.
                        </li>
                        <li class=\"white-text\">
                            20 Años.
                        </li>
                    </ul>
                </div>
                <div class=\"col l3 s12\">
                    <h5 class=\"white-text\">Networks</h5>
                    <ul>
                        <li>
                            <a class=\"white-text\" href=\"http://www.youtube.com/user/prinick96?sub_confirmation=1\">
                                <i class=\"small fa fa-youtube-play white-text\"></i> YouTube
                            </a>
                        </li>
                        <li>
                            <a class=\"white-text\" href=\"https://github.com/prinick96/\">
                                <i class=\"small fa fa-github-square white-text\"></i> Github
                            </a>
                        </li>
                        <li>
                            <a class=\"white-text\" href=\"https://www.facebook.com/prinick.narvaez\">
                                <i class=\"small fa fa-facebook-square white-text\"></i> Facebook
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"footer-copyright default_color\">
            <div class=\"container\">
                Sitio web desarrollado por <a class=\"white-text\" href=\"http://www.ocrend.com\">Ocrend Software</a> &copy; 2013-2017
            </div>
        </div>
    </footer>
    
    ";
        // line 175
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "framework", array()), "debug", array())) {
            // line 176
            echo "      ";
            // line 177
            echo "      <script src=\"views/app/js/jdev.min.js\"></script>
    ";
        } else {
            // line 179
            echo "      ";
            // line 180
            echo "      <script src=\"views/app/vendor/jquery/jquery.min.js\"></script>
    ";
        }
        // line 182
        echo "
    <!--  Scripts -->
    <script src=\"views/assets/js/jquery-confirm.min.js\"></script>
    <script src=\"views/assets/js/modernizr.js\"></script>
    <script src=\"views/assets/js/materialize.min.js\"></script>
    <script src=\"views/assets/js/init.js\"></script>
    <script src=\"views/assets/min/custom-min.js\"></script>
    <script src=\"views/app/js/contacto/contacto.js\"></script>

    ";
        // line 192
        echo "    ";
        $this->displayBlock('appFooter', $context, $blocks);
        // line 194
        echo "  

    </body>
</html>";
    }

    // line 14
    public function block_appDesc($context, array $blocks = array())
    {
        echo "Esto es PRINICK, mi blog personal donde encontrarás una gran cantidad de tutoriales, descargas y noticias sobre video juegos que voy siguiendo personalmente.";
    }

    // line 15
    public function block_appTags($context, array $blocks = array())
    {
        echo "blogger,desarrollo,developer,tutoriales,juegos,descargas,prinick,brayan,narvaez,xnova,ogame,windows";
    }

    // line 18
    public function block_ogTitle($context, array $blocks = array())
    {
        echo "PRINICK - Blogger y Videos Tutoriales";
    }

    // line 19
    public function block_ogUrl($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "site", array()), "url", array()), "html", null, true);
    }

    // line 22
    public function block_ogDesc($context, array $blocks = array())
    {
        echo "Esto es PRINICK y aquí encontrarás videos tutoriales de YouTube.";
    }

    // line 24
    public function block_twitterTitle($context, array $blocks = array())
    {
        echo "PRINICK - Blogger y Videos Tutoriales";
    }

    // line 25
    public function block_twitterDesc($context, array $blocks = array())
    {
        echo "Esto es PRINICK y aquí encontrarás videos tutoriales de YouTube.";
    }

    // line 41
    public function block_appTitle($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["config"] ?? null), "site", array()), "name", array()), "html", null, true);
    }

    // line 50
    public function block_appHeader($context, array $blocks = array())
    {
        // line 51
        echo "      <!-- :) -->
    ";
    }

    // line 88
    public function block_appBody($context, array $blocks = array())
    {
        // line 89
        echo "      <!-- :) -->
    ";
    }

    // line 192
    public function block_appFooter($context, array $blocks = array())
    {
        // line 193
        echo "      <!-- :) -->
    ";
    }

    public function getTemplateName()
    {
        return "overall/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 193,  337 => 192,  332 => 89,  329 => 88,  324 => 51,  321 => 50,  315 => 41,  309 => 25,  303 => 24,  297 => 22,  291 => 19,  285 => 18,  279 => 15,  273 => 14,  266 => 194,  263 => 192,  252 => 182,  248 => 180,  246 => 179,  242 => 177,  240 => 176,  237 => 175,  152 => 91,  149 => 88,  113 => 53,  110 => 50,  103 => 44,  97 => 41,  84 => 29,  78 => 25,  74 => 24,  69 => 22,  63 => 19,  59 => 18,  53 => 15,  49 => 14,  42 => 9,  35 => 4,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
    {{ base_assets()|raw }}
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no\"/>

    {# SEO #}
    <meta name=\"theme-color\" content=\"#2196F3\">
    <meta name=\"HandheldFriendly\" content=\"True\">
\t<meta name=\"MobileOptimized\" content=\"320\">
    <link rel=\"author\" href=\"http://google.com/+PrinickNarváez\" />
    <link rel=\"publisher\" href=\"http://google.com/+PrinickNarváez\" />
    <meta name=\"description\"  content=\"{% block appDesc %}Esto es PRINICK, mi blog personal donde encontrarás una gran cantidad de tutoriales, descargas y noticias sobre video juegos que voy siguiendo personalmente.{% endblock %}\" />
    <meta name=\"keywords\"  content=\"{% block appTags %}blogger,desarrollo,developer,tutoriales,juegos,descargas,prinick,brayan,narvaez,xnova,ogame,windows{% endblock %}\" />
    <meta name=\"google-site-verification\" content=\"http://google.com/+PrinickNarváez\" />

    <meta property=\"og:title\" content=\"{% block ogTitle %}PRINICK - Blogger y Videos Tutoriales{% endblock %}\" />
    <meta property=\"og:url\" content=\"{% block ogUrl %}{{ config.site.url }}{% endblock %}\" />
    <meta property=\"og:image\" content=\"views/assets/img/default.jpg\" />
    <meta property=\"og:site_name\" content=\"PRINICK\" />
    <meta property=\"og:description\" content=\"{% block ogDesc %}Esto es PRINICK y aquí encontrarás videos tutoriales de YouTube.{% endblock %}\" />
    <meta name=\"twitter:card\" content=\"summary_large_image\" />
    <meta name=\"twitter:title\" content=\"{% block twitterTitle %}PRINICK - Blogger y Videos Tutoriales{% endblock %}\" />
    <meta name=\"twitter:description\" content=\"{% block twitterDesc %}Esto es PRINICK y aquí encontrarás videos tutoriales de YouTube.{% endblock %}\" />
    <meta name=\"twitter:image\" content=\"views/assets/img/default.jpg\" />
    
    {# Google analytics #}
    <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-47456992-1', 'auto');
          
          ga('send', 'pageview');
    </script>

    {# Título #}
    <title>{% block appTitle %}{{ config.site.name }}{% endblock %}</title>

    {# CSS  #}
    <link rel=\"shortcut icon\" href=\"favicon.ico\">    
    <link href=\"views/assets/min/plugin-min.css\" type=\"text/css\" rel=\"stylesheet\">
    <link href=\"views/assets/min/custom-min.css\" type=\"text/css\" rel=\"stylesheet\" >
    <link href=\"views/assets/css/jquery-confirm.min.css\" type=\"text/css\" rel=\"stylesheet\" >
    
    {# Extras en el header #}
    {% block appHeader %}
      <!-- :) -->
    {% endblock %}
</head>
<body id=\"top\" class=\"scrollspy\">

    <!-- Pre Loader -->
    <div id=\"loader-wrapper\">
        <div id=\"loader\"></div>
        <div class=\"loader-section section-left\"></div>
        <div class=\"loader-section section-right\"></div>
    </div>

    <!--Navigation-->
    <div class=\"navbar-fixed\">
        <nav id=\"nav_f\" class=\"default_color\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"nav-wrapper\">
                    <a href=\"home/\" id=\"logo-container\" class=\"brand-logo\">
                        <img src=\"views/assets/img/logo.png\" />
                    </a>
                    <ul class=\"right hide-on-med-and-down\">
                        <li><a href=\"home/\">Inicio & Tutoriales</a></li>
                        <li><a href=\"http://www.ocrend.com/\">Desarrollo Web</a></li>
                        <li><a href=\"http://framework.ocrend.com/\">Framework</a></li>
                        <li><a href=\"#contact\">Contacto</a></li>
                    </ul>
                    <ul id=\"nav-mobile\" class=\"side-nav\">
                        <li><a href=\"home/\">Inicio & Tutoriales</a></li>
                        <li><a href=\"#contact\">Contacto</a></li>
                    </ul>
                    <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"mdi-navigation-menu\"></i></a>
                </div>
            </div>
        </nav>
    </div>

    {# Cuerpo real #}
    {% block appBody %}
      <!-- :) -->
    {% endblock %}

    <!--Footer-->
    <footer id=\"contact\" class=\"page-footer default_color scrollspy\">
        <div class=\"container\">  
            <div class=\"row\">
                <div class=\"col l6 s12\">
                    <form class=\"col s12\" id=\"contacto_form\">
                        <div class=\"row\">
                            <div class=\"input-field col s6\">
                                <i class=\"mdi-action-account-circle prefix white-text\"></i>
                                <input id=\"icon_prefix\" name=\"name\" type=\"text\" class=\"validate white-text\">
                                <label for=\"icon_prefix\" class=\"white-text\">Su Nombre</label>
                            </div>
                            <div class=\"input-field col s6\">
                                <i class=\"mdi-communication-email prefix white-text\"></i>
                                <input id=\"icon_email\" name=\"email\" type=\"email\" class=\"validate white-text\">
                                <label for=\"icon_email\" class=\"white-text\">Email de Contacto</label>
                            </div>
                            <div class=\"input-field col s12\">
                                <i class=\"mdi-communication-phone prefix white-text\"></i>
                                <input id=\"icon_phone\" name=\"phone\" type=\"tel\" class=\"validate white-text\">
                                <label for=\"icon_phone\" class=\"white-text\">Número de Teléfono</label>
                            </div>
                            <div class=\"input-field col s12\">
                                <i class=\"mdi-editor-mode-edit prefix white-text\"></i>
                                <textarea id=\"icon_prefix2\" name=\"message\" class=\"materialize-textarea white-text\"></textarea>
                                <label for=\"icon_prefix2\" class=\"white-text\">Mensaje</label>
                            </div>
                            <div class=\"col offset-s7 s5\">
                                <a class=\"btn waves-effect waves-light red darken-1\" id=\"contacto\"><i class=\"mdi-content-send right white-text\"></i> Enviar</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"col l3 s12\">
                    <h5 class=\"white-text\">Sobre Mí</h5>
                    <ul>
                        <li class=\"white-text\">
                            Desarrollador de aplicaciones web.
                        </li>
                        <li class=\"white-text\">
                            MEAN Stack & LAMP Stack.
                        </li>
                        <li class=\"white-text\">
                            JS & PHP Addict
                        </li>
                        <li class=\"white-text\">
                            Ingeniero Informático.
                        </li>
                        <li class=\"white-text\">
                            20 Años.
                        </li>
                    </ul>
                </div>
                <div class=\"col l3 s12\">
                    <h5 class=\"white-text\">Networks</h5>
                    <ul>
                        <li>
                            <a class=\"white-text\" href=\"http://www.youtube.com/user/prinick96?sub_confirmation=1\">
                                <i class=\"small fa fa-youtube-play white-text\"></i> YouTube
                            </a>
                        </li>
                        <li>
                            <a class=\"white-text\" href=\"https://github.com/prinick96/\">
                                <i class=\"small fa fa-github-square white-text\"></i> Github
                            </a>
                        </li>
                        <li>
                            <a class=\"white-text\" href=\"https://www.facebook.com/prinick.narvaez\">
                                <i class=\"small fa fa-facebook-square white-text\"></i> Facebook
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"footer-copyright default_color\">
            <div class=\"container\">
                Sitio web desarrollado por <a class=\"white-text\" href=\"http://www.ocrend.com\">Ocrend Software</a> &copy; 2013-2017
            </div>
        </div>
    </footer>
    
    {# Carga de jQuery #}
    {% if config.framework.debug %}
      {# jQuery para ver errores de ajax vía consola, no eliminar #}
      <script src=\"views/app/js/jdev.min.js\"></script>
    {% else %}
      {# jQuery para su plantilla, este puede ser modificado a voluntad #}
      <script src=\"views/app/vendor/jquery/jquery.min.js\"></script>
    {% endif %}

    <!--  Scripts -->
    <script src=\"views/assets/js/jquery-confirm.min.js\"></script>
    <script src=\"views/assets/js/modernizr.js\"></script>
    <script src=\"views/assets/js/materialize.min.js\"></script>
    <script src=\"views/assets/js/init.js\"></script>
    <script src=\"views/assets/min/custom-min.js\"></script>
    <script src=\"views/app/js/contacto/contacto.js\"></script>

    {# Footer #}
    {% block appFooter %}
      <!-- :) -->
    {% endblock %}  

    </body>
</html>", "overall/layout.twig", "C:\\xampp\\htdocs\\prinick.com\\app\\templates\\overall\\layout.twig");
    }
}
