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

/* components/modals/delete_trick_confirmation.html.twig */
class __TwigTemplate_bb1d04ac3e991186c5c51183ab986704 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/modals/delete_trick_confirmation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/modals/delete_trick_confirmation.html.twig"));

        // line 1
        echo "<div id=\"delete_trick_modal\">
\t<div class=\"modal__content\">
\t\t<div class=\"modal__header\">
\t\t\t<h2 class=\"modal__title\">Delete trick</h2>
\t\t\t<button id=\"close_modal_button\" class=\"modal__close\">
\t\t\t\t<span>x</span>
\t\t\t</button>
\t\t</div>
\t\t<div class=\"modal__body\">
\t\t\t<p class=\"modal__text\">Are you sure you want to delete this trick?</p>
\t\t\t<div class=\"modal__footer\">
\t\t\t\t<a id=\"delete_button\" class=\"btn btn-primary\">Delete</a>
\t\t\t\t<a id=\"cancel_delete_button\" class=\"btn btn-cancel\">Cancel</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/modals/delete_trick_confirmation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"delete_trick_modal\">
\t<div class=\"modal__content\">
\t\t<div class=\"modal__header\">
\t\t\t<h2 class=\"modal__title\">Delete trick</h2>
\t\t\t<button id=\"close_modal_button\" class=\"modal__close\">
\t\t\t\t<span>x</span>
\t\t\t</button>
\t\t</div>
\t\t<div class=\"modal__body\">
\t\t\t<p class=\"modal__text\">Are you sure you want to delete this trick?</p>
\t\t\t<div class=\"modal__footer\">
\t\t\t\t<a id=\"delete_button\" class=\"btn btn-primary\">Delete</a>
\t\t\t\t<a id=\"cancel_delete_button\" class=\"btn btn-cancel\">Cancel</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>", "components/modals/delete_trick_confirmation.html.twig", "C:\\Users\\anorak\\SynologyDrive\\OpenClassRooms\\3 - OCR - Développeur d'application - PHP & Symfony\\Projet 6 (120h)\\P6 - Mission\\0 - Code\\templates\\components\\modals\\delete_trick_confirmation.html.twig");
    }
}
