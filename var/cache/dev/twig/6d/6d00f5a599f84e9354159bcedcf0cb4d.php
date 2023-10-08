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

/* components/form/_form.scss */
class __TwigTemplate_1505a748ecc07d1defd01cf65682b50e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/form/_form.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/form/_form.scss"));

        // line 1
        echo "section#signin,
section#signup,
section#contact,
section#trick_details,
section#user_profile,
section#new_trick,
section#trick_edition,
section#reset_password {
\tdisplay: flex;
\tflex-direction: column;
\talign-items: center;
\tpadding: 100px;
\tcolor: \$blue;
\tmin-height: calc(100vh - 582px);
\t/*
\t\t|-----------------------------------
\t\t| Style the form element
\t\t|-----------------------------------
\t*/
\tform {
\t\tdisplay: flex;
\t\tflex-direction: column;
\t\tmax-width: 750px;
\t\tmin-width: 350px;
\t\tmargin-top: 30px;
\t\tbackground-color: \$white;
\t\tpadding: 50px 75px;
\t\tborder-radius: 15px;

\t\t/*
\t\t\t|-----------------------------------
\t\t\t| Style the form field
\t\t\t|-----------------------------------
\t\t*/
\t\t#form {
\t\t\tmargin-bottom: 20px;
\t\t\tul li,
\t\t\tul li::marker {
\t\t\t\tcolor: \$text-error;
\t\t\t\tlist-style-type: '🤯';
\t\t\t}
\t\t\tul:first-of-type + input {
\t\t\t\tborder: solid 1px \$text-error;
\t\t\t}

\t\t\tlabel {
\t\t\t\tdisplay: block;
\t\t\t\tmargin-bottom: 5px;
\t\t\t\tfont-weight: 500;
\t\t\t}

\t\t\tinput[type='text'],
\t\t\tinput[type='email'],
\t\t\tinput[type='password'],
\t\t\ttextarea {
\t\t\t\twidth: 100%;
\t\t\t\tpadding: 10px;
\t\t\t\tborder: 1px solid #ccc;
\t\t\t\tborder-radius: 4px;
\t\t\t\tmargin-bottom: 0.5rem;
\t\t\t}

\t\t\t.form-error {
\t\t\t\tcolor: red;
\t\t\t\tfont-size: 12px;
\t\t\t\tmargin: 15px 0;
\t\t\t}
\t\t}

\t\t/*
\t\t\t|-----------------------------------
\t\t\t| Style the form buttons
\t\t\t|-----------------------------------
\t\t*/
\t\t.btn.btn-primary {
\t\t\t@include btn-primary;
\t\t}

\t\t.btn.btn-cancel {
\t\t\t@include btn-cancel;
\t\t}
\t}
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/form/_form.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("section#signin,
section#signup,
section#contact,
section#trick_details,
section#user_profile,
section#new_trick,
section#trick_edition,
section#reset_password {
\tdisplay: flex;
\tflex-direction: column;
\talign-items: center;
\tpadding: 100px;
\tcolor: \$blue;
\tmin-height: calc(100vh - 582px);
\t/*
\t\t|-----------------------------------
\t\t| Style the form element
\t\t|-----------------------------------
\t*/
\tform {
\t\tdisplay: flex;
\t\tflex-direction: column;
\t\tmax-width: 750px;
\t\tmin-width: 350px;
\t\tmargin-top: 30px;
\t\tbackground-color: \$white;
\t\tpadding: 50px 75px;
\t\tborder-radius: 15px;

\t\t/*
\t\t\t|-----------------------------------
\t\t\t| Style the form field
\t\t\t|-----------------------------------
\t\t*/
\t\t#form {
\t\t\tmargin-bottom: 20px;
\t\t\tul li,
\t\t\tul li::marker {
\t\t\t\tcolor: \$text-error;
\t\t\t\tlist-style-type: '🤯';
\t\t\t}
\t\t\tul:first-of-type + input {
\t\t\t\tborder: solid 1px \$text-error;
\t\t\t}

\t\t\tlabel {
\t\t\t\tdisplay: block;
\t\t\t\tmargin-bottom: 5px;
\t\t\t\tfont-weight: 500;
\t\t\t}

\t\t\tinput[type='text'],
\t\t\tinput[type='email'],
\t\t\tinput[type='password'],
\t\t\ttextarea {
\t\t\t\twidth: 100%;
\t\t\t\tpadding: 10px;
\t\t\t\tborder: 1px solid #ccc;
\t\t\t\tborder-radius: 4px;
\t\t\t\tmargin-bottom: 0.5rem;
\t\t\t}

\t\t\t.form-error {
\t\t\t\tcolor: red;
\t\t\t\tfont-size: 12px;
\t\t\t\tmargin: 15px 0;
\t\t\t}
\t\t}

\t\t/*
\t\t\t|-----------------------------------
\t\t\t| Style the form buttons
\t\t\t|-----------------------------------
\t\t*/
\t\t.btn.btn-primary {
\t\t\t@include btn-primary;
\t\t}

\t\t.btn.btn-cancel {
\t\t\t@include btn-cancel;
\t\t}
\t}
}
", "components/form/_form.scss", "/Users/sebastien/Sebbe's Cloud/School/OpenClassRooms/3 - OCR - Développeur d'application - PHP & Symfony/Projet 6 (120h)/P6 - Mission/0 - Code/templates/components/form/_form.scss");
    }
}
