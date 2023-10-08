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

/* components/footer/footer.html.twig */
class __TwigTemplate_8ae09a05d20e389a4aeec2adb3ccd32f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/footer/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/footer/footer.html.twig"));

        // line 1
        echo "<footer>
\t<div class=\"content\">
\t\t<div class=\"top\">
\t\t\t<div class=\"logo-details\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 400 400\">
\t\t\t\t\t<rect fill=\"#0d3d67\" width=\"100%\" height=\"100%\"/>
\t\t\t\t\t<g transform=\"translate(100, 100)\">
\t\t\t\t\t\t<path fill=\"#fff\" d=\"M50 0 L0 100 L100 100 Z\"/>
\t\t\t\t\t\t<path fill=\"#8eb8d1\" d=\"M50 20 L20 80 L80 80 Z\"/>
\t\t\t\t\t\t<circle cx=\"50\" cy=\"115\" r=\"15\" fill=\"#fff\"/>
\t\t\t\t\t</g>
\t\t\t\t\t<text x=\"50%\" y=\"300\" text-anchor=\"middle\" font-size=\"40\" font-weight=\"bold\" fill=\"#fff\">
\t\t\t\t\t\tSnowTricks
\t\t\t\t\t</text>
\t\t\t\t</svg>
\t\t\t\t<div class=\"logo_name\">
\t\t\t\t\t<span class=\"logo__snow\">Snow</span>
\t\t\t\t\t<span class=\"logo__tricks\">Tricks</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"media-icons\">
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"link-boxes\">
\t\t\t<ul class=\"box\">
\t\t\t\t<li class=\"link_name\">SnowTricks</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contact us</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\">About us</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"box\">
\t\t\t\t<li class=\"link_name\">Services</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">App design</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Web design</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Logo design</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Banner design</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"box\">
\t\t\t\t<li class=\"link_name\">Account</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        echo "\">Profile</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        echo "\">My account</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Preferences</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"box input-box\">
\t\t\t\t<li class=\"link_name\">Subscribe</li>
\t\t\t\t<li><input type=\"text\" placeholder=\"Enter your email\"/></li>
\t\t\t\t<li><input type=\"button\" value=\"Subscribe\"/></li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"bottom-details\">
\t\t<div class=\"bottom_text\">
\t\t\t<span class=\"copyright_text\">Copyright © 2023
\t\t\t\t<a href=\"#\">Logo.</a>All rights reserved</span>
\t\t\t<span class=\"policy_terms\">
\t\t\t\t<a href=\"#\">Privacy policy</a>
\t\t\t\t<a href=\"#\">Terms & condition</a>
\t\t\t</span>
\t\t</div>
\t</div>
</footer>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/footer/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 74,  123 => 70,  99 => 49,  93 => 46,  87 => 43,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
\t<div class=\"content\">
\t\t<div class=\"top\">
\t\t\t<div class=\"logo-details\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 400 400\">
\t\t\t\t\t<rect fill=\"#0d3d67\" width=\"100%\" height=\"100%\"/>
\t\t\t\t\t<g transform=\"translate(100, 100)\">
\t\t\t\t\t\t<path fill=\"#fff\" d=\"M50 0 L0 100 L100 100 Z\"/>
\t\t\t\t\t\t<path fill=\"#8eb8d1\" d=\"M50 20 L20 80 L80 80 Z\"/>
\t\t\t\t\t\t<circle cx=\"50\" cy=\"115\" r=\"15\" fill=\"#fff\"/>
\t\t\t\t\t</g>
\t\t\t\t\t<text x=\"50%\" y=\"300\" text-anchor=\"middle\" font-size=\"40\" font-weight=\"bold\" fill=\"#fff\">
\t\t\t\t\t\tSnowTricks
\t\t\t\t\t</text>
\t\t\t\t</svg>
\t\t\t\t<div class=\"logo_name\">
\t\t\t\t\t<span class=\"logo__snow\">Snow</span>
\t\t\t\t\t<span class=\"logo__tricks\">Tricks</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"media-icons\">
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<i class=\"fab fa-instagram\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t</a>
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"link-boxes\">
\t\t\t<ul class=\"box\">
\t\t\t\t<li class=\"link_name\">SnowTricks</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ path('app_home') }}\">Home</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ path('app_contact') }}\">Contact us</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ path('app_about') }}\">About us</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"box\">
\t\t\t\t<li class=\"link_name\">Services</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">App design</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Web design</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Logo design</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Banner design</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"box\">
\t\t\t\t<li class=\"link_name\">Account</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ path('app_profile')}}\">Profile</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ path('app_profile')}}\">My account</a>
\t\t\t\t</li>

\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">Preferences</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"box input-box\">
\t\t\t\t<li class=\"link_name\">Subscribe</li>
\t\t\t\t<li><input type=\"text\" placeholder=\"Enter your email\"/></li>
\t\t\t\t<li><input type=\"button\" value=\"Subscribe\"/></li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"bottom-details\">
\t\t<div class=\"bottom_text\">
\t\t\t<span class=\"copyright_text\">Copyright © 2023
\t\t\t\t<a href=\"#\">Logo.</a>All rights reserved</span>
\t\t\t<span class=\"policy_terms\">
\t\t\t\t<a href=\"#\">Privacy policy</a>
\t\t\t\t<a href=\"#\">Terms & condition</a>
\t\t\t</span>
\t\t</div>
\t</div>
</footer>
", "components/footer/footer.html.twig", "/Users/sebastien/Sebbe's Cloud/School/OpenClassRooms/3 - OCR - Développeur d'application - PHP & Symfony/Projet 6 (120h)/P6 - Mission/0 - Code/templates/components/footer/footer.html.twig");
    }
}
