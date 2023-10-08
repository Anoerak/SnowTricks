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

/* signin/_signin.scss */
class __TwigTemplate_6c3e7f039fc04ff4ae7d62ca54569015 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signin/_signin.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "signin/_signin.scss"));

        // line 1
        echo "section#signin {
\t.btn.btn-reset {
\t\tbackground-color: \$danger;
\t\tcolor: \$white;
\t\tmargin: 1rem;
\t\tpadding: 0.5rem;
\t\tborder-radius: 5px;
\t\ttext-align: center;
\t\ttransition: all 0.3s ease-in-out;
\t\t&:hover {
\t\t\tbackground-color: \$cancel-button-red-hover;
\t\t}
\t}
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "signin/_signin.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("section#signin {
\t.btn.btn-reset {
\t\tbackground-color: \$danger;
\t\tcolor: \$white;
\t\tmargin: 1rem;
\t\tpadding: 0.5rem;
\t\tborder-radius: 5px;
\t\ttext-align: center;
\t\ttransition: all 0.3s ease-in-out;
\t\t&:hover {
\t\t\tbackground-color: \$cancel-button-red-hover;
\t\t}
\t}
}
", "signin/_signin.scss", "C:\\Users\\anorak\\SynologyDrive\\OpenClassRooms\\3 - OCR - Développeur d'application - PHP & Symfony\\Projet 6 (120h)\\P6 - Mission\\0 - Code\\templates\\signin\\_signin.scss");
    }
}
