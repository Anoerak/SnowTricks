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

/* trick/category/_trick_category.scss */
class __TwigTemplate_a1bb4f657a3a37ff320fd763e5513b1d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/category/_trick_category.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/category/_trick_category.scss"));

        // line 1
        echo "section#trick_category {
\tdisplay: flex;
\tflex-direction: column;
\talign-items: center;
\tjustify-content: center;
\twidth: 100%;
\theight: 100%;
\tbackground-color: \$white;
\tpadding: 2rem 0;
\t.trick__category {
\t\t.trick__category__tag {
\t\t\tfont-size: 0.8rem;
\t\t\tfont-weight: 700;
\t\t\tmargin-right: 0.5rem;
\t\t\tcolor: \$white;
\t\t\tbackground-color: \$blue;
\t\t\tpadding: 0.5rem 0.75rem;
\t\t\tborder-radius: 1rem;
\t\t\ttransition: all 0.2s ease-in-out;
\t\t\t&:hover {
\t\t\t\tcolor: \$blue;
\t\t\t\tbackground-color: \$extra-light-blue;
\t\t\t\tfont-weight: 500;
\t\t\t}
\t\t}
\t\tmargin-bottom: 1rem;
\t}

\t& > h1 {
\t\tfont-size: 2rem;
\t\tfont-weight: 700;
\t\tcolor: \$text-dark;
\t\tmargin-bottom: 1rem;
\t}

\t& > p {
\t\tfont-size: 1.2rem;
\t\tfont-weight: 400;
\t\tcolor: \$text-dark;
\t\tmargin-bottom: 1rem;
\t}

\t& > div#tricks {
\t\tdisplay: flex;
\t\tflex-direction: column;
\t\talign-items: center;
\t\tjustify-content: center;
\t\twidth: 100%;
\t\theight: 100%;
\t\tbackground-color: \$white;
\t\tpadding: 2rem 0;

\t\t& > div.trick {
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t\talign-items: center;
\t\t\tjustify-content: center;
\t\t\twidth: 100%;
\t\t\theight: 100%;
\t\t\tbackground-color: \$white;
\t\t\tpadding: 2rem 0;

\t\t\t& > h2 {
\t\t\t\tfont-size: 1.5rem;
\t\t\t\tfont-weight: 700;
\t\t\t\tcolor: \$text-dark;
\t\t\t\tmargin-bottom: 1rem;
\t\t\t}

\t\t\t& > p {
\t\t\t\tfont-size: 1rem;
\t\t\t\tfont-weight: 400;
\t\t\t\tcolor: \$text-dark;
\t\t\t\tmargin-bottom: 1rem;
\t\t\t}

\t\t\t& > a {
\t\t\t\tfont-size: 1rem;
\t\t\t\tfont-weight: 400;
\t\t\t\tcolor: \$text-dark;
\t\t\t\tmargin-bottom: 1rem;
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
        return "trick/category/_trick_category.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("section#trick_category {
\tdisplay: flex;
\tflex-direction: column;
\talign-items: center;
\tjustify-content: center;
\twidth: 100%;
\theight: 100%;
\tbackground-color: \$white;
\tpadding: 2rem 0;
\t.trick__category {
\t\t.trick__category__tag {
\t\t\tfont-size: 0.8rem;
\t\t\tfont-weight: 700;
\t\t\tmargin-right: 0.5rem;
\t\t\tcolor: \$white;
\t\t\tbackground-color: \$blue;
\t\t\tpadding: 0.5rem 0.75rem;
\t\t\tborder-radius: 1rem;
\t\t\ttransition: all 0.2s ease-in-out;
\t\t\t&:hover {
\t\t\t\tcolor: \$blue;
\t\t\t\tbackground-color: \$extra-light-blue;
\t\t\t\tfont-weight: 500;
\t\t\t}
\t\t}
\t\tmargin-bottom: 1rem;
\t}

\t& > h1 {
\t\tfont-size: 2rem;
\t\tfont-weight: 700;
\t\tcolor: \$text-dark;
\t\tmargin-bottom: 1rem;
\t}

\t& > p {
\t\tfont-size: 1.2rem;
\t\tfont-weight: 400;
\t\tcolor: \$text-dark;
\t\tmargin-bottom: 1rem;
\t}

\t& > div#tricks {
\t\tdisplay: flex;
\t\tflex-direction: column;
\t\talign-items: center;
\t\tjustify-content: center;
\t\twidth: 100%;
\t\theight: 100%;
\t\tbackground-color: \$white;
\t\tpadding: 2rem 0;

\t\t& > div.trick {
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t\talign-items: center;
\t\t\tjustify-content: center;
\t\t\twidth: 100%;
\t\t\theight: 100%;
\t\t\tbackground-color: \$white;
\t\t\tpadding: 2rem 0;

\t\t\t& > h2 {
\t\t\t\tfont-size: 1.5rem;
\t\t\t\tfont-weight: 700;
\t\t\t\tcolor: \$text-dark;
\t\t\t\tmargin-bottom: 1rem;
\t\t\t}

\t\t\t& > p {
\t\t\t\tfont-size: 1rem;
\t\t\t\tfont-weight: 400;
\t\t\t\tcolor: \$text-dark;
\t\t\t\tmargin-bottom: 1rem;
\t\t\t}

\t\t\t& > a {
\t\t\t\tfont-size: 1rem;
\t\t\t\tfont-weight: 400;
\t\t\t\tcolor: \$text-dark;
\t\t\t\tmargin-bottom: 1rem;
\t\t\t}
\t\t}
\t}
}
", "trick/category/_trick_category.scss", "C:\\Users\\anorak\\SynologyDrive\\OpenClassRooms\\3 - OCR - Développeur d'application - PHP & Symfony\\Projet 6 (120h)\\P6 - Mission\\0 - Code\\templates\\trick\\category\\_trick_category.scss");
    }
}
