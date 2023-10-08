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

/* components/modals/_delete_trick_modal.scss */
class __TwigTemplate_05dd545d9fa553808b9faa4a8e463239 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/modals/_delete_trick_modal.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/modals/_delete_trick_modal.scss"));

        // line 1
        echo "#delete_trick_modal {
\tdisplay: none;
\tposition: fixed;
\tz-index: 1;
\tleft: 0;
\ttop: 0;
\twidth: 100%;
\theight: 100%;
\toverflow: auto;
\tbackground-color: rgba(0, 0, 0, 0.4);
\t.modal__content {
\t\tbackground-color: \$white;
\t\tmargin: 15% auto;
\t\tpadding: 20px;
\t\tborder: 1px solid \$text-dark;
\t\twidth: 80%;
\t\t.modal__header {
\t\t\tdisplay: flex;
\t\t\tjustify-content: space-between;
\t\t\talign-items: center;
\t\t\t.modal__title {
\t\t\t\tfont-size: 1.5rem;
\t\t\t\tfont-weight: 600;
\t\t\t\tcolor: \$text-dark;
\t\t\t}
\t\t\t.modal__close {
\t\t\t\tcursor: pointer;
\t\t\t\t@include btn-cancel;
\t\t\t\tdisplay: flex;
\t\t\t\talign-items: center;
\t\t\t\tjustify-content: center;
\t\t\t\tfont-size: 1rem;
\t\t\t\tfont-weight: 600;
\t\t\t\ttext-decoration: none;
\t\t\t\twidth: 2rem;
\t\t\t\theight: 2rem;
\t\t\t}
\t\t}
\t\t.modal__body {
\t\t\tmargin-top: 20px;
\t\t\t.modal__text {
\t\t\t\tfont-size: 1.2rem;
\t\t\t\tfont-weight: 400;
\t\t\t\tcolor: \$text-dark;
\t\t\t}
\t\t}
\t\t.modal__footer {
\t\t\tdisplay: flex;
\t\t\tjustify-content: flex-end;
\t\t\tmargin-top: 20px;
\t\t\t.btn.btn-primary {
\t\t\t\t@include btn-cancel;
\t\t\t\twidth: 4rem;
\t\t\t\theight: 2rem;
\t\t\t\tmargin: 0.5rem;
\t\t\t}
\t\t\t.btn.btn-cancel {
\t\t\t\t@include btn-primary;
\t\t\t\twidth: 4rem;
\t\t\t\theight: 2rem;
\t\t\t\tmargin: 0.5rem;
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
        return "components/modals/_delete_trick_modal.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#delete_trick_modal {
\tdisplay: none;
\tposition: fixed;
\tz-index: 1;
\tleft: 0;
\ttop: 0;
\twidth: 100%;
\theight: 100%;
\toverflow: auto;
\tbackground-color: rgba(0, 0, 0, 0.4);
\t.modal__content {
\t\tbackground-color: \$white;
\t\tmargin: 15% auto;
\t\tpadding: 20px;
\t\tborder: 1px solid \$text-dark;
\t\twidth: 80%;
\t\t.modal__header {
\t\t\tdisplay: flex;
\t\t\tjustify-content: space-between;
\t\t\talign-items: center;
\t\t\t.modal__title {
\t\t\t\tfont-size: 1.5rem;
\t\t\t\tfont-weight: 600;
\t\t\t\tcolor: \$text-dark;
\t\t\t}
\t\t\t.modal__close {
\t\t\t\tcursor: pointer;
\t\t\t\t@include btn-cancel;
\t\t\t\tdisplay: flex;
\t\t\t\talign-items: center;
\t\t\t\tjustify-content: center;
\t\t\t\tfont-size: 1rem;
\t\t\t\tfont-weight: 600;
\t\t\t\ttext-decoration: none;
\t\t\t\twidth: 2rem;
\t\t\t\theight: 2rem;
\t\t\t}
\t\t}
\t\t.modal__body {
\t\t\tmargin-top: 20px;
\t\t\t.modal__text {
\t\t\t\tfont-size: 1.2rem;
\t\t\t\tfont-weight: 400;
\t\t\t\tcolor: \$text-dark;
\t\t\t}
\t\t}
\t\t.modal__footer {
\t\t\tdisplay: flex;
\t\t\tjustify-content: flex-end;
\t\t\tmargin-top: 20px;
\t\t\t.btn.btn-primary {
\t\t\t\t@include btn-cancel;
\t\t\t\twidth: 4rem;
\t\t\t\theight: 2rem;
\t\t\t\tmargin: 0.5rem;
\t\t\t}
\t\t\t.btn.btn-cancel {
\t\t\t\t@include btn-primary;
\t\t\t\twidth: 4rem;
\t\t\t\theight: 2rem;
\t\t\t\tmargin: 0.5rem;
\t\t\t}
\t\t}
\t}
}
", "components/modals/_delete_trick_modal.scss", "C:\\Users\\anorak\\SynologyDrive\\OpenClassRooms\\3 - OCR - Développeur d'application - PHP & Symfony\\Projet 6 (120h)\\P6 - Mission\\0 - Code\\templates\\components\\modals\\_delete_trick_modal.scss");
    }
}
