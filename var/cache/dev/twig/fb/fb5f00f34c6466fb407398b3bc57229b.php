<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* components/header/header.html.twig */
class __TwigTemplate_1fb6282958b0c5efe996b90f7d1651c1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/header/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/header/header.html.twig"));

        // line 1
        echo "<header id=\"home\">
\t<nav class=\"navbar\">
\t\t<div class=\"container\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button title=\"Menu\" class=\"navbar-toggler\" data-toggle=\"open-navbar1\">
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 400 400\">
\t\t\t\t\t\t<rect fill=\"#0d3d67\" width=\"100%\" height=\"100%\"/>
\t\t\t\t\t\t<g transform=\"translate(100, 100)\">
\t\t\t\t\t\t\t<path fill=\"#fff\" d=\"M50 0 L0 100 L100 100 Z\"/>
\t\t\t\t\t\t\t<path fill=\"#8eb8d1\" d=\"M50 20 L20 80 L80 80 Z\"/>
\t\t\t\t\t\t\t<circle cx=\"50\" cy=\"115\" r=\"15\" fill=\"#fff\"/>
\t\t\t\t\t\t</g>
\t\t\t\t\t\t<text x=\"50%\" y=\"300\" text-anchor=\"middle\" font-size=\"40\" font-weight=\"bold\" fill=\"#fff\">
\t\t\t\t\t\t\tSnowTricks
\t\t\t\t\t\t</text>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<div class=\"navbar-menu\" id=\"open-navbar1\">
\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t<li class=\"";
        // line 27
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "attributes", [], "any", false, false, false, 27), "get", [0 => "_route"], "method", false, false, false, 27) == "app_home")) ? ("active") : (""));
        echo "\">
\t\t\t\t\t\t<a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t<a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "#tricks\">Tricks</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"";
        // line 33
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "attributes", [], "any", false, false, false, 33), "get", [0 => "_route"], "method", false, false, false, 33) == "app_about")) ? ("active") : (""));
        echo "\">
\t\t\t\t\t\t<a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\">About</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"";
        // line 36
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", [], "any", false, false, false, 36), "attributes", [], "any", false, false, false, 36), "get", [0 => "_route"], "method", false, false, false, 36) == "app_contact")) ? ("active") : (""));
        echo "\">
\t\t\t\t\t\t<a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 39
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39)) {
            // line 40
            echo "\t\t\t\t\t\t<li class=\"";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "request", [], "any", false, false, false, 40), "attributes", [], "any", false, false, false, 40), "get", [0 => "_route"], "method", false, false, false, 40) == "app_signin")) ? ("active") : (""));
            echo "\">
\t\t\t\t\t\t\t<a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signin");
            echo "\">Signin</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"signup ";
            // line 43
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "attributes", [], "any", false, false, false, 43), "get", [0 => "_route"], "method", false, false, false, 43) == "app_signup")) ? ("active") : (""));
            echo "\">
\t\t\t\t\t\t\t<a class=\"signup\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signup");
            echo "\">Signup</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        } else {
            // line 47
            echo "\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "username", [], "any", false, false, false, 49), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            echo "\">Profile</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 62
        echo "
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</header>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/header/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 62,  147 => 57,  141 => 54,  133 => 49,  129 => 47,  123 => 44,  119 => 43,  114 => 41,  109 => 40,  107 => 39,  102 => 37,  98 => 36,  93 => 34,  89 => 33,  84 => 31,  78 => 28,  74 => 27,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"home\">
\t<nav class=\"navbar\">
\t\t<div class=\"container\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button title=\"Menu\" class=\"navbar-toggler\" data-toggle=\"open-navbar1\">
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>
\t\t\t\t</button>
\t\t\t\t<a href=\"{{ path('app_home') }}\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 400 400\">
\t\t\t\t\t\t<rect fill=\"#0d3d67\" width=\"100%\" height=\"100%\"/>
\t\t\t\t\t\t<g transform=\"translate(100, 100)\">
\t\t\t\t\t\t\t<path fill=\"#fff\" d=\"M50 0 L0 100 L100 100 Z\"/>
\t\t\t\t\t\t\t<path fill=\"#8eb8d1\" d=\"M50 20 L20 80 L80 80 Z\"/>
\t\t\t\t\t\t\t<circle cx=\"50\" cy=\"115\" r=\"15\" fill=\"#fff\"/>
\t\t\t\t\t\t</g>
\t\t\t\t\t\t<text x=\"50%\" y=\"300\" text-anchor=\"middle\" font-size=\"40\" font-weight=\"bold\" fill=\"#fff\">
\t\t\t\t\t\t\tSnowTricks
\t\t\t\t\t\t</text>
\t\t\t\t\t</svg>
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<div class=\"navbar-menu\" id=\"open-navbar1\">
\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t<li class=\"{{ app.request.attributes.get('_route') == 'app_home' ? 'active' : '' }}\">
\t\t\t\t\t\t<a href=\"{{ path('app_home') }}\">Home</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"\">
\t\t\t\t\t\t<a href=\"{{ path('app_home') }}#tricks\">Tricks</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"{{ app.request.attributes.get('_route') == 'app_about' ? 'active' : '' }}\">
\t\t\t\t\t\t<a href=\"{{ path('app_about') }}\">About</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"{{ app.request.attributes.get('_route') == 'app_contact' ? 'active' : '' }}\">
\t\t\t\t\t\t<a href=\"{{ path('app_contact') }}\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t\t{% if not app.user %}
\t\t\t\t\t\t<li class=\"{{ app.request.attributes.get('_route') == 'app_signin' ? 'active' : '' }}\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_signin') }}\">Signin</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"signup {{ app.request.attributes.get('_route') == 'app_signup' ? 'active' : '' }}\">
\t\t\t\t\t\t\t<a class=\"signup\" href=\"{{ path('app_signup') }}\">Signup</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t{{ app.user.username }}
\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_profile') }}\">Profile</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Logout</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}

\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</header>
", "components/header/header.html.twig", "/Users/sebastien/Sebbe's Cloud/School/OpenClassRooms/3 - OCR - Développeur d'application - PHP & Symfony/Projet 6 (120h)/P6 - Mission/0 - Code/templates/components/header/header.html.twig");
    }
}
