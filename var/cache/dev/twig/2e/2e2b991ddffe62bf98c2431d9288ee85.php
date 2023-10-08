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

/* home/display_tricks/display_more_tricks.html.twig */
class __TwigTemplate_1dd0822a955ed66149ab2398562108d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/display_tricks/display_more_tricks.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/display_tricks/display_more_tricks.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tricks"]) || array_key_exists("tricks", $context) ? $context["tricks"] : (function () { throw new RuntimeError('Variable "tricks" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trick"]) {
            // line 2
            echo "\t<div id=\"trick_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 2), "html", null, true);
            echo "\" class=\"trick\">
\t\t<div class=\"trick__image\">
\t\t\t<img src=\"";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "mainPicture", [], "any", false, false, false, 4), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "name", [], "any", false, false, false, 4), "html", null, true);
            echo "\"/>
\t\t</div>
\t\t<div class=\"trick__content\">
\t\t\t<h3 class=\"trick__title\">
\t\t\t\t";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "name", [], "any", false, false, false, 8), "html", null, true);
            echo "
\t\t\t</h3>
\t\t\t<p class=\"trick__description\">
\t\t\t\t";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "description", [], "any", false, false, false, 11), "html", null, true);
            echo "
\t\t\t</p>
\t\t\t<div class=\"trick__bottom\">
\t\t\t\t";
            // line 14
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14)) {
                // line 15
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 15)]), "html", null, true);
                echo "\" class=\"read__more\">Read more</a>
\t\t\t\t";
            } else {
                // line 17
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 17)]), "html", null, true);
                echo "\" class=\"read__more\">Read more</a>
\t\t\t\t\t<div class=\"trick__commands\">
\t\t\t\t\t\t<a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trick_edit", ["slug" => twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 19)]), "html", null, true);
                echo "\" class=\"button edit\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-pencil\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a id=\"";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "slug", [], "any", false, false, false, 22), "html", null, true);
                echo "\" class=\"button delete delete_trick_button\">
\t\t\t\t\t\t\t<i class=\"fa-regular fa-trash-can\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 27
            echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/display_tricks/display_more_tricks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 27,  94 => 22,  88 => 19,  82 => 17,  76 => 15,  74 => 14,  68 => 11,  62 => 8,  53 => 4,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for trick in tricks %}
\t<div id=\"trick_{{ trick.id }}\" class=\"trick\">
\t\t<div class=\"trick__image\">
\t\t\t<img src=\"{{ trick.mainPicture }}\" alt=\"{{ trick.name }}\"/>
\t\t</div>
\t\t<div class=\"trick__content\">
\t\t\t<h3 class=\"trick__title\">
\t\t\t\t{{ trick.name }}
\t\t\t</h3>
\t\t\t<p class=\"trick__description\">
\t\t\t\t{{ trick.description }}
\t\t\t</p>
\t\t\t<div class=\"trick__bottom\">
\t\t\t\t{% if not app.user %}
\t\t\t\t\t<a href=\"{{ path('app_trick', { slug: trick.slug }) }}\" class=\"read__more\">Read more</a>
\t\t\t\t{% else %}
\t\t\t\t\t<a href=\"{{ path('app_trick', { slug: trick.slug }) }}\" class=\"read__more\">Read more</a>
\t\t\t\t\t<div class=\"trick__commands\">
\t\t\t\t\t\t<a href=\"{{ path('app_trick_edit', { slug: trick.slug }) }}\" class=\"button edit\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-pencil\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a id=\"{{ trick.slug }}\" class=\"button delete delete_trick_button\">
\t\t\t\t\t\t\t<i class=\"fa-regular fa-trash-can\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>
{% endfor %}
", "home/display_tricks/display_more_tricks.html.twig", "C:\\Users\\anorak\\SynologyDrive\\OpenClassRooms\\3 - OCR - Développeur d'application - PHP & Symfony\\Projet 6 (120h)\\P6 - Mission\\0 - Code\\templates\\home\\display_tricks\\display_more_tricks.html.twig");
    }
}
