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

/* home/display_tricks/display_tricks.html.twig */
class __TwigTemplate_363232e03c13e14cef2b7e21c3ffaf88 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/display_tricks/display_tricks.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/display_tricks/display_tricks.html.twig"));

        // line 1
        echo "<div id=\"tricks_count_";
        echo twig_escape_filter($this->env, (isset($context["tricksCount"]) || array_key_exists("tricksCount", $context) ? $context["tricksCount"] : (function () { throw new RuntimeError('Variable "tricksCount" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\" class=\"container\">
\t<h2 class=\"title\">Latest tricks</h2>
\t";
        // line 4
        echo "\t";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4)) {
            // line 5
            echo "\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_new");
            echo "\" class=\"button__add\">Add a new trick</a>
\t";
        }
        // line 7
        echo "\t<div id=\"tricks_list\" class=\"tricks\">
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tricks"]) || array_key_exists("tricks", $context) ? $context["tricks"] : (function () { throw new RuntimeError('Variable "tricks" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trick"]) {
            // line 9
            echo "\t\t\t<div id=\"trick_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 9), "html", null, true);
            echo "\" class=\"trick\">
\t\t\t\t<div class=\"trick__image\">
\t\t\t\t\t<img src=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "mainPicture", [], "any", false, false, false, 11), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "name", [], "any", false, false, false, 11), "html", null, true);
            echo "\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"trick__content\">
\t\t\t\t\t<h3 class=\"trick__title\">
\t\t\t\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo "
\t\t\t\t\t</h3>
\t\t\t\t\t<p class=\"trick__description\">
\t\t\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "description", [], "any", false, false, false, 18), "html", null, true);
            echo "
\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"trick__bottom\">
\t\t\t\t\t\t";
            // line 21
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) {
                // line 22
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 22)]), "html", null, true);
                echo "\" class=\"read__more\">Read more</a>
\t\t\t\t\t\t";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 23
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23) == twig_get_attribute($this->env, $this->source, $context["trick"], "user", [], "any", false, false, false, 23)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 24
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 24)]), "html", null, true);
                echo "\" class=\"read__more\">Read more</a>
\t\t\t\t\t\t\t<div class=\"trick__commands\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_edit", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 26)]), "html", null, true);
                echo "\" class=\"button edit\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-pencil\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a id=\"";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 29), "html", null, true);
                echo "\" class=\"button delete delete_trick_button\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-trash-can\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
\t\t<div id=\"load_more_card\" class=\"trick__load__more\">
\t\t\t<h3 class=\"\"></h3>
\t\t\t<p class=\"trick__description\">
\t\t\t\tWant to see more tricks??
\t\t\t</p>
\t\t\t<button id=\"display-more_button\">Click Here</button>
\t\t</div>

\t</div>
</div>
<a href=\"#home\" class=\"arrow\">
\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
\t\t<path d=\"M8 10l4 4 4-4\"/>
\t</svg>
</a>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/display_tricks/display_tricks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 38,  121 => 34,  113 => 29,  107 => 26,  101 => 24,  99 => 23,  94 => 22,  92 => 21,  86 => 18,  80 => 15,  71 => 11,  65 => 9,  61 => 8,  58 => 7,  52 => 5,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"tricks_count_{{ tricksCount }}\" class=\"container\">
\t<h2 class=\"title\">Latest tricks</h2>
\t{# Button to add a new trick for ADMIN and USER only #}
\t{% if app.user %}
\t\t<a href=\"{{ path('app_trick_new' ) }}\" class=\"button__add\">Add a new trick</a>
\t{% endif %}
\t<div id=\"tricks_list\" class=\"tricks\">
\t\t{% for trick in tricks %}
\t\t\t<div id=\"trick_{{ trick.id }}\" class=\"trick\">
\t\t\t\t<div class=\"trick__image\">
\t\t\t\t\t<img src=\"{{ trick.mainPicture }}\" alt=\"{{ trick.name }}\"/>
\t\t\t\t</div>
\t\t\t\t<div class=\"trick__content\">
\t\t\t\t\t<h3 class=\"trick__title\">
\t\t\t\t\t\t{{ trick.name }}
\t\t\t\t\t</h3>
\t\t\t\t\t<p class=\"trick__description\">
\t\t\t\t\t\t{{ trick.description }}
\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"trick__bottom\">
\t\t\t\t\t\t{% if not app.user %}
\t\t\t\t\t\t\t<a href=\"{{ path('app_trick', { slug: trick.slug }) }}\" class=\"read__more\">Read more</a>
\t\t\t\t\t\t{% elseif app.user == trick.user or is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t<a href=\"{{ path('app_trick', { slug: trick.slug }) }}\" class=\"read__more\">Read more</a>
\t\t\t\t\t\t\t<div class=\"trick__commands\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_trick_edit', { slug: trick.slug }) }}\" class=\"button edit\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-pencil\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a id=\"{{ trick.slug }}\" class=\"button delete delete_trick_button\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-trash-can\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}

\t\t<div id=\"load_more_card\" class=\"trick__load__more\">
\t\t\t<h3 class=\"\"></h3>
\t\t\t<p class=\"trick__description\">
\t\t\t\tWant to see more tricks??
\t\t\t</p>
\t\t\t<button id=\"display-more_button\">Click Here</button>
\t\t</div>

\t</div>
</div>
<a href=\"#home\" class=\"arrow\">
\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
\t\t<path d=\"M8 10l4 4 4-4\"/>
\t</svg>
</a>
", "home/display_tricks/display_tricks.html.twig", "/Users/sebastien/Sebbe's Cloud/School/OpenClassRooms/3 - OCR - Développeur d'application - PHP & Symfony/Projet 6 (120h)/P6 - Mission/0 - Code/templates/home/display_tricks/display_tricks.html.twig");
    }
}
