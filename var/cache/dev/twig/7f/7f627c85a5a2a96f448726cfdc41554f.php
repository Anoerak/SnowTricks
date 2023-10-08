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

/* components/carousel/carousel.html.twig */
class __TwigTemplate_7153faf37b63534351fc16e9a17128f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/carousel/carousel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/carousel/carousel.html.twig"));

        // line 1
        echo "<div
\tclass=\"trick\">
\t";
        // line 4
        echo "\t<div class=\"trick__media\">
\t\t<div class='carousel__container'>
\t\t\t<div data-display class='display'></div>
\t\t\t<div class='img-select-container'>
\t\t\t\t<div data-img-container class='img-container'>
\t\t\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medias"]) || array_key_exists("medias", $context) ? $context["medias"] : (function () { throw new RuntimeError('Variable "medias" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
            // line 10
            echo "\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["media"], "type", [], "any", false, false, false, 10) == "picture")) {
                // line 11
                echo "\t\t\t\t\t\t\t<div data-img-box class='img'>
\t\t\t\t\t\t\t\t<img data-img src='";
                // line 12
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["media"], "path", [], "any", false, false, false, 12)), "html", null, true);
                echo "'>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            } else {
                // line 15
                echo "\t\t\t\t\t\t\t<div data-img-box class='img'>
\t\t\t\t\t\t\t\t<video data-img src=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["media"], "path", [], "any", false, false, false, 16)), "html", null, true);
                echo "\" poster=\"../build/images/youtube.3e675bd3.jpg\" width=\"80\" height=\"80\"></video>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 19
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class='buttons'>
\t<button data-btn-left>
\t\t<span class=\"material-icons\">navigate_before</span>
\t</button>
\t<button data-btn-right>
\t\t<span class=\"material-icons\">navigate_next</span>
\t</button>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/carousel/carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 20,  79 => 19,  73 => 16,  70 => 15,  64 => 12,  61 => 11,  58 => 10,  54 => 9,  47 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div
\tclass=\"trick\">
\t{# We go through the media and display a slideshow with the pictures and videos #}
\t<div class=\"trick__media\">
\t\t<div class='carousel__container'>
\t\t\t<div data-display class='display'></div>
\t\t\t<div class='img-select-container'>
\t\t\t\t<div data-img-container class='img-container'>
\t\t\t\t\t{% for media in medias %}
\t\t\t\t\t\t{% if media.type == 'picture' %}
\t\t\t\t\t\t\t<div data-img-box class='img'>
\t\t\t\t\t\t\t\t<img data-img src='{{ asset(media.path) }}'>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div data-img-box class='img'>
\t\t\t\t\t\t\t\t<video data-img src=\"{{ asset(media.path) }}\" poster=\"../build/images/youtube.3e675bd3.jpg\" width=\"80\" height=\"80\"></video>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class='buttons'>
\t<button data-btn-left>
\t\t<span class=\"material-icons\">navigate_before</span>
\t</button>
\t<button data-btn-right>
\t\t<span class=\"material-icons\">navigate_next</span>
\t</button>
</div>
", "components/carousel/carousel.html.twig", "C:\\Users\\anorak\\SynologyDrive\\OpenClassRooms\\3 - OCR - Développeur d'application - PHP & Symfony\\Projet 6 (120h)\\P6 - Mission\\0 - Code\\templates\\components\\carousel\\carousel.html.twig");
    }
}
