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

/* home/home.html.twig */
class __TwigTemplate_ee320c0708b97572a5d188dbdf0e72c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'delete_modal' => [$this, 'block_delete_modal'],
            'tricks' => [$this, 'block_tricks'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "SnowTricks - Home
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<section class=\"hero\">
\t\t";
        // line 6
        $this->displayBlock('delete_modal', $context, $blocks);
        // line 9
        echo "\t\t<div class=\"container\">
\t\t\t<h1 class=\"title\">Welcome to SnowTricks</h1>
\t\t\t<p class=\"subtitle\">Your ultimate resource for everything snowboarding!</p>
\t\t\t<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/snowtricks_home.eab6ed2d.jpg"), "html", null, true);
        echo "\" alt=\"snowboarder in the air\"/>
\t\t\t<p class=\"description\">
\t\t\t\tOur website is dedicated to providing you with the latest news, tips, and tricks for mastering the slopes
\t\t\t\tand performing jaw-dropping stunts on your snowboard. Whether you're a seasoned pro or just getting started,
\t\t\t\twe have something for everyone, with articles, videos, and tutorials covering all aspects of snowboarding,
\t\t\t\tfrom basic techniques to advanced freestyle maneuvers.
\t\t\t</p>
\t\t\t<a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_signup");
        echo "\" class=\"button\">Join our community</a>
\t\t\t<p class=\"disclaimer\">
\t\t\t\t<span>Disclaimer:</span>
\t\t\t\tAll the texts are fictitious and originate from the OpenAI ChatGPT API.
\t\t\t</p>
\t\t</div>
\t\t<a href=\"#tricks\" class=\"arrow\">
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
\t\t\t\t<path d=\"M8 10l4 4 4-4\"/>
\t\t\t</svg>
\t\t</a>
\t</section>

\t<section id=\"tricks\" class=\"tricks\">
\t\t";
        // line 33
        $this->displayBlock('tricks', $context, $blocks);
        // line 36
        echo "\t</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_delete_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_modal"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_modal"));

        // line 7
        echo "\t\t\t";
        $this->loadTemplate("components/modals/delete_trick_confirmation.html.twig", "home/home.html.twig", 7)->display($context);
        // line 8
        echo "\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 33
    public function block_tricks($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tricks"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tricks"));

        // line 34
        echo "\t\t\t";
        $this->loadTemplate("home/display_tricks/display_tricks.html.twig", "home/home.html.twig", 34)->display($context);
        // line 35
        echo "\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 35,  175 => 34,  165 => 33,  155 => 8,  152 => 7,  142 => 6,  130 => 36,  128 => 33,  111 => 19,  101 => 12,  96 => 9,  94 => 6,  91 => 5,  81 => 4,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}SnowTricks - Home
{% endblock %}
{% block body %}
\t<section class=\"hero\">
\t\t{% block delete_modal %}
\t\t\t{% include \"components/modals/delete_trick_confirmation.html.twig\" %}
\t\t{% endblock %}
\t\t<div class=\"container\">
\t\t\t<h1 class=\"title\">Welcome to SnowTricks</h1>
\t\t\t<p class=\"subtitle\">Your ultimate resource for everything snowboarding!</p>
\t\t\t<img src=\"{{ asset('build/images/snowtricks_home.eab6ed2d.jpg') }}\" alt=\"snowboarder in the air\"/>
\t\t\t<p class=\"description\">
\t\t\t\tOur website is dedicated to providing you with the latest news, tips, and tricks for mastering the slopes
\t\t\t\tand performing jaw-dropping stunts on your snowboard. Whether you're a seasoned pro or just getting started,
\t\t\t\twe have something for everyone, with articles, videos, and tutorials covering all aspects of snowboarding,
\t\t\t\tfrom basic techniques to advanced freestyle maneuvers.
\t\t\t</p>
\t\t\t<a href=\"{{ path('app_signup') }}\" class=\"button\">Join our community</a>
\t\t\t<p class=\"disclaimer\">
\t\t\t\t<span>Disclaimer:</span>
\t\t\t\tAll the texts are fictitious and originate from the OpenAI ChatGPT API.
\t\t\t</p>
\t\t</div>
\t\t<a href=\"#tricks\" class=\"arrow\">
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
\t\t\t\t<path d=\"M8 10l4 4 4-4\"/>
\t\t\t</svg>
\t\t</a>
\t</section>

\t<section id=\"tricks\" class=\"tricks\">
\t\t{% block tricks %}
\t\t\t{% include \"home/display_tricks/display_tricks.html.twig\" %}
\t\t{% endblock %}
\t</section>

{% endblock %}
", "home/home.html.twig", "/Users/sebastien/Sebbe's Cloud/School/OpenClassRooms/3 - OCR - Développeur d'application - PHP & Symfony/Projet 6 (120h)/P6 - Mission/0 - Code/templates/home/home.html.twig");
    }
}
