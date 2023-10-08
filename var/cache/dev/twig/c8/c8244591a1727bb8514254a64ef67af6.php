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

/* trick/_trick.scss */
class __TwigTemplate_b903e24a7d11ff66b62d70eb01df2463 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/_trick.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/_trick.scss"));

        // line 1
        echo "section#trick_details {
\tdisplay: flex;
\tflex-direction: column;
\talign-items: flex-start;
\tjustify-content: flex-start;
\tmin-height: 100vh;
\tpadding: 0;
\t.title {
\t\tmargin-top: 2rem;
\t\tfont-size: 1.5rem;
\t\tfont-weight: 700;
\t\tmargin-bottom: 1rem;
\t\twidth: 100%;
\t\ttext-align: center;
\t}
\t.trick__category {
\t\twidth: 100%;
\t\ttext-align: center;
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
\t.trick {
\t\twidth: 100%;
\t\t.trick__slideshow {
\t\t\t.slideshow {
\t\t\t\t.slideshow__image {
\t\t\t\t\twidth: 100%;
\t\t\t\t\theight: 100%;
\t\t\t\t\tobject-fit: cover;
\t\t\t\t}
\t\t\t}
\t\t}
\t\t.trick__content {
\t\t\t.trick__title {
\t\t\t\tfont-size: 1.5rem;
\t\t\t\tfont-weight: 700;
\t\t\t\tmargin-bottom: 1rem;
\t\t\t}
\t\t\t.trick__description {
\t\t\t\tfont-size: 1rem;
\t\t\t\tfont-weight: 400;
\t\t\t\tmargin-bottom: 1rem;
\t\t\t}
\t\t}
\t}
\t.buttons {
\t\twidth: 100%;
\t}
\t.separator,
\t.trick__comments.separator {
\t\tdisplay: block;
\t\twidth: 100%;
\t\theight: 1px;
\t\tbackground-color: #ccc;
\t\tmargin: 2rem 0 0 0;
\t}
\t.trick__comments {
\t\t.trick__comments__title {
\t\t\tfont-size: 1.5rem;
\t\t\tfont-weight: 700;
\t\t\tmargin-top: 2rem;
\t\t\tmargin-bottom: 1rem;
\t\t}
\t\t.trick__comments__comment {
\t\t\t.trick__comments__comment__header {
\t\t\t\tdisplay: flex;
\t\t\t\tflex-direction: row;
\t\t\t\t.trick__comments__comment__header__profile__picture {
\t\t\t\t\twidth: 40px;
\t\t\t\t\theight: 40px;
\t\t\t\t\tborder-radius: 100%;
\t\t\t\t\tmargin-right: 0.5rem;
\t\t\t\t}
\t\t\t\t.trick__comments__comment__header__informations {
\t\t\t\t\t.trick__comments__comment__header__author {
\t\t\t\t\t\tfont-size: 1rem;
\t\t\t\t\t\tfont-weight: 700;
\t\t\t\t\t\tmargin-bottom: 0.25rem;
\t\t\t\t\t}
\t\t\t\t\t.trick__comments__comment__header__date {
\t\t\t\t\t\tfont-size: 0.8rem;
\t\t\t\t\t\tfont-weight: 400;
\t\t\t\t\t\tmargin-bottom: 0.5rem;
\t\t\t\t\t}
\t\t\t\t\t.fas.fa-trash-alt {
\t\t\t\t\t\tcolor: \$text-error;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\t.trick__comments__comment__content {
\t\t\t\tfont-size: 1rem;
\t\t\t\tfont-weight: 400;
\t\t\t\tmargin-bottom: 1rem;
\t\t\t}
\t\t}
\t\t.trick__comments__form {
\t\t\tmargin: 2rem 0;
\t\t\t.form {
\t\t\t\tpadding: 25px;
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
        return "trick/_trick.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("section#trick_details {
\tdisplay: flex;
\tflex-direction: column;
\talign-items: flex-start;
\tjustify-content: flex-start;
\tmin-height: 100vh;
\tpadding: 0;
\t.title {
\t\tmargin-top: 2rem;
\t\tfont-size: 1.5rem;
\t\tfont-weight: 700;
\t\tmargin-bottom: 1rem;
\t\twidth: 100%;
\t\ttext-align: center;
\t}
\t.trick__category {
\t\twidth: 100%;
\t\ttext-align: center;
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
\t.trick {
\t\twidth: 100%;
\t\t.trick__slideshow {
\t\t\t.slideshow {
\t\t\t\t.slideshow__image {
\t\t\t\t\twidth: 100%;
\t\t\t\t\theight: 100%;
\t\t\t\t\tobject-fit: cover;
\t\t\t\t}
\t\t\t}
\t\t}
\t\t.trick__content {
\t\t\t.trick__title {
\t\t\t\tfont-size: 1.5rem;
\t\t\t\tfont-weight: 700;
\t\t\t\tmargin-bottom: 1rem;
\t\t\t}
\t\t\t.trick__description {
\t\t\t\tfont-size: 1rem;
\t\t\t\tfont-weight: 400;
\t\t\t\tmargin-bottom: 1rem;
\t\t\t}
\t\t}
\t}
\t.buttons {
\t\twidth: 100%;
\t}
\t.separator,
\t.trick__comments.separator {
\t\tdisplay: block;
\t\twidth: 100%;
\t\theight: 1px;
\t\tbackground-color: #ccc;
\t\tmargin: 2rem 0 0 0;
\t}
\t.trick__comments {
\t\t.trick__comments__title {
\t\t\tfont-size: 1.5rem;
\t\t\tfont-weight: 700;
\t\t\tmargin-top: 2rem;
\t\t\tmargin-bottom: 1rem;
\t\t}
\t\t.trick__comments__comment {
\t\t\t.trick__comments__comment__header {
\t\t\t\tdisplay: flex;
\t\t\t\tflex-direction: row;
\t\t\t\t.trick__comments__comment__header__profile__picture {
\t\t\t\t\twidth: 40px;
\t\t\t\t\theight: 40px;
\t\t\t\t\tborder-radius: 100%;
\t\t\t\t\tmargin-right: 0.5rem;
\t\t\t\t}
\t\t\t\t.trick__comments__comment__header__informations {
\t\t\t\t\t.trick__comments__comment__header__author {
\t\t\t\t\t\tfont-size: 1rem;
\t\t\t\t\t\tfont-weight: 700;
\t\t\t\t\t\tmargin-bottom: 0.25rem;
\t\t\t\t\t}
\t\t\t\t\t.trick__comments__comment__header__date {
\t\t\t\t\t\tfont-size: 0.8rem;
\t\t\t\t\t\tfont-weight: 400;
\t\t\t\t\t\tmargin-bottom: 0.5rem;
\t\t\t\t\t}
\t\t\t\t\t.fas.fa-trash-alt {
\t\t\t\t\t\tcolor: \$text-error;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\t.trick__comments__comment__content {
\t\t\t\tfont-size: 1rem;
\t\t\t\tfont-weight: 400;
\t\t\t\tmargin-bottom: 1rem;
\t\t\t}
\t\t}
\t\t.trick__comments__form {
\t\t\tmargin: 2rem 0;
\t\t\t.form {
\t\t\t\tpadding: 25px;
\t\t\t}
\t\t}
\t}
}
", "trick/_trick.scss", "/Users/sebastien/Sebbe's Cloud/School/OpenClassRooms/3 - OCR - Développeur d'application - PHP & Symfony/Projet 6 (120h)/P6 - Mission/0 - Code/templates/trick/_trick.scss");
    }
}
