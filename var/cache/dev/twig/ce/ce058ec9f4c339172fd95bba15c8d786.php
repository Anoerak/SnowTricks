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
class __TwigTemplate_ee08e1fd868e4c13a7ea1bc3069570df extends Template
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
\t\t<h2 class=\"title\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "</h2>
\t\t";
        // line 12
        echo "\t\t<div class=\"trick__category\">
\t\t\t<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_category", ["category" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 13, $this->source); })()), "category", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\" class=\"trick__category__tag\">
\t\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 14, $this->source); })()), "category", [], "any", false, false, false, 14), "html", null, true);
        echo "
\t\t\t</a>
\t\t</div>
\t\t";
        // line 18
        echo "\t\t";
        $this->displayBlock('carousel', $context, $blocks);
        // line 21
        echo "\t\t";
        // line 22
        echo "\t\t<div class=\"trick__content\">
\t\t\t<h3 class=\"trick__title\">
\t\t\t\t";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "
\t\t\t</h3>
\t\t\t<p class=\"trick__description\">
\t\t\t\t";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), "html", null, true);
        echo "
\t\t\t</p>
\t\t</div>
\t\t";
        // line 31
        echo "\t\t<span class=\"separator\"></span>
\t\t<div
\t\t\tclass=\"trick__comments\">
\t\t\t";
        // line 35
        echo "\t\t\t<h3 class=\"trick__comments__title\">Comments Section</h3>
\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 37
            echo "\t\t\t\t<div class=\"trick__comments__comment\">
\t\t\t\t\t<div class=\"trick__comments__comment__header\">
\t\t\t\t\t\t<img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 39), "profilePicture", [], "any", false, false, false, 39)), "html", null, true);
            echo "\" class=\"trick__comments__comment__header__profile__picture\">
\t\t\t\t\t\t<div class=\"trick__comments__comment__header__informations\">
\t\t\t\t\t\t\t<div class=\"trick__comments__comment__header__author\">
\t\t\t\t\t\t\t\t";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 42), "username", [], "any", false, false, false, 42), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t";
            // line 44
            echo "\t\t\t\t\t\t\t\t";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 45
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\" class=\"trick__comments__comment__delete\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-trash-alt\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"trick__comments__comment__header__date\">
\t\t\t\t\t\t\t\t";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 51), "D d M Y H:i:s"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"trick__comments__comment__content\">
\t\t\t\t\t\t";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 56), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t\t";
        // line 61
        echo "\t\t\t";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 62
            echo "\t\t\t\t";
            // line 63
            echo "\t\t\t\t<span class=\"separator\"></span>
\t\t\t\t";
            // line 65
            echo "\t\t\t\t<div class=\"trick__comments__form\">
\t\t\t\t\t<h3 class=\"trick__comments__form__title\">Add a comment</h3>
\t\t\t\t\t";
            // line 67
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_start');
            echo "
\t\t\t\t\t<div id=\"form\">
\t\t\t\t\t\t";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), 'widget');
            echo "
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Post</button>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 72
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 75
        echo "\t\t</div>
\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        // line 19
        echo "\t\t\t";
        $this->loadTemplate("components/carousel/carousel.html.twig", "trick/trick.html.twig", 19)->display($context);
        // line 20
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
        return array (  251 => 20,  248 => 19,  238 => 18,  226 => 75,  220 => 72,  214 => 69,  209 => 67,  205 => 65,  202 => 63,  200 => 62,  197 => 61,  195 => 60,  185 => 56,  177 => 51,  173 => 49,  165 => 45,  162 => 44,  158 => 42,  152 => 39,  148 => 37,  144 => 36,  141 => 35,  136 => 31,  130 => 27,  124 => 24,  120 => 22,  118 => 21,  115 => 18,  109 => 14,  105 => 13,  102 => 12,  98 => 10,  95 => 9,  93 => 8,  83 => 7,  70 => 4,  60 => 3,  37 => 1,);
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
\t\t<h2 class=\"title\">{{ trick.name }}</h2>
\t\t{# We add a category tag #}
\t\t<div class=\"trick__category\">
\t\t\t<a href=\"{{ path('app_trick_category', {category: trick.category}) }}\" class=\"trick__category__tag\">
\t\t\t\t{{ trick.category }}
\t\t\t</a>
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
\t\t{# We insert a line to separate the blocks #}
\t\t<span class=\"separator\"></span>
\t\t<div
\t\t\tclass=\"trick__comments\">
\t\t\t{# We display all the comments for this tricks, from the most recent to the older #}
\t\t\t<h3 class=\"trick__comments__title\">Comments Section</h3>
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
\t\t</div>
\t</section>
{% endblock %}
", "trick/trick.html.twig", "C:\\Users\\anorak\\SynologyDrive\\OpenClassRooms\\3 - OCR - Développeur d'application - PHP & Symfony\\Projet 6 (120h)\\P6 - Mission\\0 - Code\\templates\\trick\\trick.html.twig");
    }
}
