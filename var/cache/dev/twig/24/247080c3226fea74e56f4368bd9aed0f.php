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

/* home/_home.scss */
class __TwigTemplate_e2616e04abb3bf43c3961a164e7f6c68 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/_home.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/_home.scss"));

        // line 1
        echo ".hero {
\tpadding: 100px 0;

\t.container {
\t\tmax-width: 960px;
\t\tmargin: 0 auto;
\t\ttext-align: center;
\t\tcolor: \$blue;

\t\t.title {
\t\t\tfont-size: 4rem;
\t\t\tfont-weight: bold;
\t\t\tmargin-bottom: 20px;
\t\t}

\t\t.subtitle {
\t\t\tfont-size: 2rem;
\t\t\tmargin-bottom: 40px;
\t\t}

\t\t.description {
\t\t\tfont-size: 1.5rem;
\t\t\tline-height: 1.6;
\t\t\tmargin-bottom: 40px;
\t\t}

\t\t.button {
\t\t\t@include a-button;
\t\t}

\t\t.disclaimer {
\t\t\tmargin-top: 2rem;
\t\t\tcolor: \$text-light;
\t\t\tfont-weight: 100;
\t\t\tspan {
\t\t\t\tcolor: \$text-light;
\t\t\t\tfont-weight: 400;
\t\t\t}
\t\t}
\t}
\t.arrow {
\t\tsvg {
\t\t\tposition: absolute;
\t\t\tright: 0;
\t\t\twidth: 100px;
\t\t\theight: 100px;
\t\t\tcolor: \$extra-light-blue;
\t\t\ttransition: all 0.75s ease-in-out;

\t\t\t&:hover {
\t\t\t\tcolor: \$blue;
\t\t\t}
\t\t}
\t}
}

.tricks {
\t// min-height: 100vh;
\tmargin: 2rem 0;
\t.button__add {
\t\tdisplay: flex !important;
\t\talign-items: center;
\t\tjustify-content: center;
\t\t@include a-button;
\t\tpadding: 10px;
\t\tfont-size: 1rem;
\t\tmax-height: 2rem;
\t}
\t.arrow {
\t\tdisplay: flex;
\t\tsvg {
\t\t\tposition: relative;
\t\t\tdisplay: inline-block;
\t\t\tbottom: 0;
\t\t\tright: 0;
\t\t\tmargin-left: auto;
\t\t\twidth: 100px;
\t\t\theight: 100px;
\t\t\tcolor: \$extra-light-blue;
\t\t\ttransition: all 0.75s ease-in-out;
\t\t\trotate: 180deg;

\t\t\t&:hover {
\t\t\t\tcolor: \$blue;
\t\t\t}
\t\t}
\t}
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/_home.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".hero {
\tpadding: 100px 0;

\t.container {
\t\tmax-width: 960px;
\t\tmargin: 0 auto;
\t\ttext-align: center;
\t\tcolor: \$blue;

\t\t.title {
\t\t\tfont-size: 4rem;
\t\t\tfont-weight: bold;
\t\t\tmargin-bottom: 20px;
\t\t}

\t\t.subtitle {
\t\t\tfont-size: 2rem;
\t\t\tmargin-bottom: 40px;
\t\t}

\t\t.description {
\t\t\tfont-size: 1.5rem;
\t\t\tline-height: 1.6;
\t\t\tmargin-bottom: 40px;
\t\t}

\t\t.button {
\t\t\t@include a-button;
\t\t}

\t\t.disclaimer {
\t\t\tmargin-top: 2rem;
\t\t\tcolor: \$text-light;
\t\t\tfont-weight: 100;
\t\t\tspan {
\t\t\t\tcolor: \$text-light;
\t\t\t\tfont-weight: 400;
\t\t\t}
\t\t}
\t}
\t.arrow {
\t\tsvg {
\t\t\tposition: absolute;
\t\t\tright: 0;
\t\t\twidth: 100px;
\t\t\theight: 100px;
\t\t\tcolor: \$extra-light-blue;
\t\t\ttransition: all 0.75s ease-in-out;

\t\t\t&:hover {
\t\t\t\tcolor: \$blue;
\t\t\t}
\t\t}
\t}
}

.tricks {
\t// min-height: 100vh;
\tmargin: 2rem 0;
\t.button__add {
\t\tdisplay: flex !important;
\t\talign-items: center;
\t\tjustify-content: center;
\t\t@include a-button;
\t\tpadding: 10px;
\t\tfont-size: 1rem;
\t\tmax-height: 2rem;
\t}
\t.arrow {
\t\tdisplay: flex;
\t\tsvg {
\t\t\tposition: relative;
\t\t\tdisplay: inline-block;
\t\t\tbottom: 0;
\t\t\tright: 0;
\t\t\tmargin-left: auto;
\t\t\twidth: 100px;
\t\t\theight: 100px;
\t\t\tcolor: \$extra-light-blue;
\t\t\ttransition: all 0.75s ease-in-out;
\t\t\trotate: 180deg;

\t\t\t&:hover {
\t\t\t\tcolor: \$blue;
\t\t\t}
\t\t}
\t}
}
", "home/_home.scss", "C:\\Users\\anorak\\SynologyDrive\\OpenClassRooms\\3 - OCR - Développeur d'application - PHP & Symfony\\Projet 6 (120h)\\P6 - Mission\\0 - Code\\templates\\home\\_home.scss");
    }
}
