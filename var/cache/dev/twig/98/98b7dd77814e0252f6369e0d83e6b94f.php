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

/* trick/trick.html.twig */
class __TwigTemplate_698b10e9e04c0e9708227a77fee025af extends Template
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
            'carousel' => [$this, 'block_carousel'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/trick.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/trick.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trick/trick.html.twig", 1);
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
        echo "\t";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
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
        echo "\t";
        // line 9
        echo "\t<section id=\"trick_details\" class=\"container\">
\t\t<div class=\"title__container\">
\t\t\t<span></span>
\t\t\t<h2 class=\"title\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "</h2>
\t\t\t";
        // line 13
        if (((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13) == twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 14
            echo "\t\t\t\t<div class=\"trick__commands\">
\t\t\t\t\t<a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 15, $this->source); })()), "slug", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\" class=\"button edit\">
\t\t\t\t\t\t<i class=\"fa-solid fa-pencil\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_delete", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 18, $this->source); })()), "slug", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\" class=\"button delete delete_trick_button\">
\t\t\t\t\t\t<i class=\"fa-regular fa-trash-can\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 23
        echo "\t\t</div>
\t\t";
        // line 25
        echo "\t\t";
        $this->displayBlock('carousel', $context, $blocks);
        // line 28
        echo "\t\t";
        // line 29
        echo "\t\t<div class=\"trick__content\">
\t\t\t<h3 class=\"trick__title\">
\t\t\t\t";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), "html", null, true);
        echo "
\t\t\t</h3>
\t\t\t<p class=\"trick__description\">
\t\t\t\t";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), "html", null, true);
        echo "
\t\t\t</p>
\t\t</div>
\t\t";
        // line 38
        echo "\t\t<div class=\"trick__category\">
\t\t\t<a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_category", ["category" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 39, $this->source); })()), "category", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\" class=\"trick__category__tag\">
\t\t\t\t";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 40, $this->source); })()), "category", [], "any", false, false, false, 40), "html", null, true);
        echo "
\t\t\t</a>
\t\t\t";
        // line 43
        echo "\t\t\t<div class=\"trick__category__tag\">
\t\t\t\tCreated
\t\t\t\t";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 45, $this->source); })()), "createdAt", [], "any", false, false, false, 45), "D d M Y H:i:s"), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t";
        // line 48
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 48, $this->source); })()), "modifiedAt", [], "any", false, false, false, 48)) {
            // line 49
            echo "\t\t\t\t<div class=\"trick__category__tag\">
\t\t\t\t\tModified
\t\t\t\t\t";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 51, $this->source); })()), "modifiedAt", [], "any", false, false, false, 51), "D d M Y H:i:s"), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 54
        echo "\t\t</div>


\t\t";
        // line 58
        echo "\t\t<span class=\"separator\"></span>
\t\t<div
\t\t\tclass=\"trick__comments\">
\t\t\t";
        // line 62
        echo "\t\t\t<h3 class=\"trick__comments__title\">Comments Section</h3>
\t\t\t";
        // line 64
        echo "\t\t\t";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 65
            echo "\t\t\t\t";
            // line 66
            echo "\t\t\t\t<span class=\"separator\"></span>
\t\t\t\t";
            // line 68
            echo "\t\t\t\t<div class=\"trick__comments__form\">
\t\t\t\t\t<h3 class=\"trick__comments__form__title\">Add a comment</h3>
\t\t\t\t\t";
            // line 70
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_start');
            echo "
\t\t\t\t\t<div id=\"form\">
\t\t\t\t\t\t";
            // line 72
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'widget');
            echo "
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Post</button>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 75
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), 'form_end');
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 78
        echo "
\t\t\t";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 80
            echo "\t\t\t\t<div class=\"trick__comments__comment\">
\t\t\t\t\t<div class=\"trick__comments__comment__header\">
\t\t\t\t\t\t<img src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 82), "profilePicture", [], "any", false, false, false, 82)), "html", null, true);
            echo "\" class=\"trick__comments__comment__header__profile__picture\">
\t\t\t\t\t\t<div class=\"trick__comments__comment__header__informations\">
\t\t\t\t\t\t\t<div class=\"trick__comments__comment__header__author\">
\t\t\t\t\t\t\t\t";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 85), "username", [], "any", false, false, false, 85), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t";
            // line 87
            echo "\t\t\t\t\t\t\t\t";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 88
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 88)]), "html", null, true);
                echo "\" class=\"trick__comments__comment__delete\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-alt\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            }
            // line 92
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"trick__comments__comment__header__date\">
\t\t\t\t\t\t\t\t";
            // line 94
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 94), "D d M Y H:i:s"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"trick__comments__comment__content\">
\t\t\t\t\t\t";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 99), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "\t\t</div>
\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        // line 26
        echo "\t\t\t";
        $this->loadTemplate("components/carousel/carousel.html.twig", "trick/trick.html.twig", 26)->display($context);
        // line 27
        echo "\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "trick/trick.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 27,  299 => 26,  289 => 25,  277 => 103,  267 => 99,  259 => 94,  255 => 92,  247 => 88,  244 => 87,  240 => 85,  234 => 82,  230 => 80,  226 => 79,  223 => 78,  217 => 75,  211 => 72,  206 => 70,  202 => 68,  199 => 66,  197 => 65,  194 => 64,  191 => 62,  186 => 58,  181 => 54,  175 => 51,  171 => 49,  168 => 48,  163 => 45,  159 => 43,  154 => 40,  150 => 39,  147 => 38,  141 => 34,  135 => 31,  131 => 29,  129 => 28,  126 => 25,  123 => 23,  115 => 18,  109 => 15,  106 => 14,  104 => 13,  100 => 12,  95 => 9,  93 => 8,  83 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}
\t{{ trick.name }}
{% endblock %}

{% block body %}
\t{# We display all the details about the trick #}
\t<section id=\"trick_details\" class=\"container\">
\t\t<div class=\"title__container\">
\t\t\t<span></span>
\t\t\t<h2 class=\"title\">{{ trick.name }}</h2>
\t\t\t{% if app.user == trick.user or is_granted('ROLE_ADMIN') %}
\t\t\t\t<div class=\"trick__commands\">
\t\t\t\t\t<a href=\"{{ path('app_trick_edit', { slug: trick.slug }) }}\" class=\"button edit\">
\t\t\t\t\t\t<i class=\"fa-solid fa-pencil\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"{{ path('app_trick_delete', {'slug': trick.slug}) }}\" class=\"button delete delete_trick_button\">
\t\t\t\t\t\t<i class=\"fa-regular fa-trash-can\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>
\t\t{# We insert a carousel to display the medias #}
\t\t{% block carousel %}
\t\t\t{% include \"components/carousel/carousel.html.twig\" %}
\t\t{% endblock %}
\t\t{# We display the description of the trick #}
\t\t<div class=\"trick__content\">
\t\t\t<h3 class=\"trick__title\">
\t\t\t\t{{ trick.name }}
\t\t\t</h3>
\t\t\t<p class=\"trick__description\">
\t\t\t\t{{ trick.description }}
\t\t\t</p>
\t\t</div>
\t\t{# We add a category tag #}
\t\t<div class=\"trick__category\">
\t\t\t<a href=\"{{ path('app_trick_category', {category: trick.category}) }}\" class=\"trick__category__tag\">
\t\t\t\t{{ trick.category }}
\t\t\t</a>
\t\t\t{# We add tha date of creation #}
\t\t\t<div class=\"trick__category__tag\">
\t\t\t\tCreated
\t\t\t\t{{ trick.createdAt|date('D d M Y H:i:s')}}
\t\t\t</div>
\t\t\t{# If modified, we display the modification date #}
\t\t\t{% if trick.modifiedAt %}
\t\t\t\t<div class=\"trick__category__tag\">
\t\t\t\t\tModified
\t\t\t\t\t{{ trick.modifiedAt|date('D d M Y H:i:s')}}
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>


\t\t{# We insert a line to separate the blocks #}
\t\t<span class=\"separator\"></span>
\t\t<div
\t\t\tclass=\"trick__comments\">
\t\t\t{# We display all the comments for this tricks, from the most recent to the older #}
\t\t\t<h3 class=\"trick__comments__title\">Comments Section</h3>
\t\t\t{# If not \"user\" or \"admin\", we don't display the 'add a comment' section #}
\t\t\t{% if is_granted('ROLE_USER') or is_granted('ROLE_ADMIN') %}
\t\t\t\t{# We insert a line to separate the blocks #}
\t\t\t\t<span class=\"separator\"></span>
\t\t\t\t{# We display the form to add a comment #}
\t\t\t\t<div class=\"trick__comments__form\">
\t\t\t\t\t<h3 class=\"trick__comments__form__title\">Add a comment</h3>
\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t<div id=\"form\">
\t\t\t\t\t\t{{ form_widget(form) }}
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Post</button>
\t\t\t\t\t</div>
\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% for comment in comments %}
\t\t\t\t<div class=\"trick__comments__comment\">
\t\t\t\t\t<div class=\"trick__comments__comment__header\">
\t\t\t\t\t\t<img src=\"{{ asset(comment.user.profilePicture) }}\" class=\"trick__comments__comment__header__profile__picture\">
\t\t\t\t\t\t<div class=\"trick__comments__comment__header__informations\">
\t\t\t\t\t\t\t<div class=\"trick__comments__comment__header__author\">
\t\t\t\t\t\t\t\t{{ comment.user.username }}
\t\t\t\t\t\t\t\t{# If ROLE_ADMIN is granted, we display the delete icon #}
\t\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_comment_delete', {id:comment.id})}}\" class=\"trick__comments__comment__delete\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-alt\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"trick__comments__comment__header__date\">
\t\t\t\t\t\t\t\t{{ comment.createdAt|date('D d M Y H:i:s')}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"trick__comments__comment__content\">
\t\t\t\t\t\t{{ comment.comment }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</section>
{% endblock %}
", "trick/trick.html.twig", "/Users/sebastien/Sebbe's Cloud/School/OpenClassRooms/3 - OCR - Développeur d'application - PHP & Symfony/Projet 6 (120h)/P6 - Mission/0 - Code/templates/trick/trick.html.twig");
    }
}
