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

/* trick/category/trick_category.html.twig */
class __TwigTemplate_06aead2c653fcb316346d94d165fb9ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/category/trick_category.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/category/trick_category.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trick/category/trick_category.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tCategory - ";
        echo twig_escape_filter($this->env, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<section id=\"trick_category\" class=\"container\">
\t\t";
        // line 9
        $this->displayBlock('delete_modal', $context, $blocks);
        // line 12
        echo "\t\t<h2 class=\"title\">Category
\t\t\t";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</h2>
\t\t<div class=\"trick__category\">
\t\t\t<a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_category", ["category" => (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 15, $this->source); })())]), "html", null, true);
        echo "\" class=\"trick__category__tag\">
\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "
\t\t\t</a>
\t\t</div>
\t\t<span class=\"separator\"></span>
\t\t<div id=\"tricks_list\" class=\"tricks\">
\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tricks"]) || array_key_exists("tricks", $context) ? $context["tricks"] : (function () { throw new RuntimeError('Variable "tricks" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trick"]) {
            // line 22
            echo "\t\t\t\t<div id=\"trick_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\" class=\"trick\">
\t\t\t\t\t<div class=\"trick__image\">
\t\t\t\t\t\t<img src=\"../../";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "mainPicture", [], "any", false, false, false, 24), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"trick__content\">
\t\t\t\t\t\t<h3 class=\"trick__title\">
\t\t\t\t\t\t\t";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "name", [], "any", false, false, false, 28), "html", null, true);
            echo "
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p class=\"trick__description\">
\t\t\t\t\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "description", [], "any", false, false, false, 31), "html", null, true);
            echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"trick__bottom\">
\t\t\t\t\t\t\t";
            // line 34
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34)) {
                // line 35
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick", ["id" => twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\" class=\"read__more\">Read more</a>
\t\t\t\t\t\t\t";
            } else {
                // line 37
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick", ["id" => twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                echo "\" class=\"read__more\">Read more</a>
\t\t\t\t\t\t\t\t<div class=\"trick__commands\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                echo "\" class=\"button edit\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a id=\"";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 42), "html", null, true);
                echo "\" class=\"button delete delete_trick_button\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-trash-can\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t</div>
\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_delete_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_modal"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_modal"));

        // line 10
        echo "\t\t\t";
        $this->loadTemplate("components/modals/delete_trick_confirmation.html.twig", "trick/category/trick_category.html.twig", 10)->display($context);
        // line 11
        echo "\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "trick/category/trick_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 11,  208 => 10,  198 => 9,  186 => 51,  177 => 47,  169 => 42,  163 => 39,  157 => 37,  151 => 35,  149 => 34,  143 => 31,  137 => 28,  128 => 24,  122 => 22,  118 => 21,  110 => 16,  106 => 15,  101 => 13,  98 => 12,  96 => 9,  93 => 8,  83 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}
\tCategory - {{ category }}
{% endblock %}

{% block body %}
\t<section id=\"trick_category\" class=\"container\">
\t\t{% block delete_modal %}
\t\t\t{% include \"components/modals/delete_trick_confirmation.html.twig\" %}
\t\t{% endblock %}
\t\t<h2 class=\"title\">Category
\t\t\t{{ category }}</h2>
\t\t<div class=\"trick__category\">
\t\t\t<a href=\"{{ path('app_trick_category', {category: category}) }}\" class=\"trick__category__tag\">
\t\t\t\t{{ category }}
\t\t\t</a>
\t\t</div>
\t\t<span class=\"separator\"></span>
\t\t<div id=\"tricks_list\" class=\"tricks\">
\t\t\t{% for trick in tricks %}
\t\t\t\t<div id=\"trick_{{ trick.id }}\" class=\"trick\">
\t\t\t\t\t<div class=\"trick__image\">
\t\t\t\t\t\t<img src=\"../../{{ trick.mainPicture }}\" alt=\"{{ trick.name }}\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"trick__content\">
\t\t\t\t\t\t<h3 class=\"trick__title\">
\t\t\t\t\t\t\t{{ trick.name }}
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t<p class=\"trick__description\">
\t\t\t\t\t\t\t{{ trick.description }}
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"trick__bottom\">
\t\t\t\t\t\t\t{% if not app.user %}
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_trick', { id: trick.id }) }}\" class=\"read__more\">Read more</a>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_trick', { id: trick.id }) }}\" class=\"read__more\">Read more</a>
\t\t\t\t\t\t\t\t<div class=\"trick__commands\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_trick_edit', { id: trick.id }) }}\" class=\"button edit\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a id=\"{{ trick.id }}\" class=\"button delete delete_trick_button\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-trash-can\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</section>
{% endblock %}
", "trick/category/trick_category.html.twig", "/Users/sebastien/Sebbe's Cloud/School/OpenClassRooms/3 - OCR - Développeur d'application - PHP & Symfony/Projet 6 (120h)/P6 - Mission/0 - Code/templates/trick/category/trick_category.html.twig");
    }
}
