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

/* components/carousel/_carousel.scss */
class __TwigTemplate_fd78fec725b3ef2ec2d06b77ae9ca06c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/carousel/_carousel.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/carousel/_carousel.scss"));

        // line 1
        echo ".carousel__container {
\tmax-width: 720px;
\theight: fit-content;
\tmargin: auto;
\tpadding: 1rem;
\tdisplay: flex;
\tflex-direction: column;
\talign-items: center;
\tgap: 15px;
\t.display {
\t\twidth: 100%;
\t\tpadding: 0.5rem;
\t\tmax-height: 500px;

\t\timg {
\t\t\tmax-width: 100%;
\t\t\theight: 100%;
\t\t\tborder-radius: 5px;

\t\t\tborder-radius: 5px;
\t\t\twidth: 100%;
\t\t\tobject-fit: contain;
\t\t\tmax-height: 100%;
\t\t\tanimation-name: example;
\t\t\tanimation-duration: 1s;
\t\t\toverflow: hidden;
\t\t}
\t}
\t.img-select-container {
\t\twidth: 100%;
\t\tpadding: 1rem;

\t\tdisplay: flex;
\t\tjustify-content: center;
\t\toverflow: hidden;
\t\t.img-container {
\t\t\twidth: 100%;

\t\t\ttransition: 0.3s ease;
\t\t\t//transform:translatex(calc(( -1 * (80px + 1.6rem))));

\t\t\tpadding: 0.5rem;
\t\t\tdisplay: flex;

\t\t\tgap: 25px;
\t\t\t.img {
\t\t\t\twidth: 80px;
\t\t\t\tflex-shrink: 0;
\t\t\t\theight: 80px;
\t\t\t\toverflow: hidden;
\t\t\t\tborder-radius: 5px;
\t\t\t\ttransition: 0.2s ease;
\t\t\t\t&:hover {
\t\t\t\t\tbox-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
\t\t\t\t\ttransform: translateY(-5px);
\t\t\t\t}
\t\t\t\timg {
\t\t\t\t\twidth: 100%;
\t\t\t\t\theight: 100%;
\t\t\t\t\tobject-fit: cover;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
}
.buttons {
\tdisplay: flex;

\twidth: 40%;
\tjustify-content: center;
\tpadding: 0.5rem;
\tgap: 15%;
\tbutton {
\t\twidth: 48px;
\t\theight: 48px;
\t\tdisplay: flex;
\t\tjustify-content: center;
\t\talign-items: center;
\t\tcolor: #021012;
\t\tborder-radius: 100%;
\t\tborder: none;
\t\tbackground: transparent;
\t}
}

@keyframes example {
\tfrom {
\t\topacity: 0;
\t}
\tto {
\t\topacity: 100%;
\t}
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/carousel/_carousel.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".carousel__container {
\tmax-width: 720px;
\theight: fit-content;
\tmargin: auto;
\tpadding: 1rem;
\tdisplay: flex;
\tflex-direction: column;
\talign-items: center;
\tgap: 15px;
\t.display {
\t\twidth: 100%;
\t\tpadding: 0.5rem;
\t\tmax-height: 500px;

\t\timg {
\t\t\tmax-width: 100%;
\t\t\theight: 100%;
\t\t\tborder-radius: 5px;

\t\t\tborder-radius: 5px;
\t\t\twidth: 100%;
\t\t\tobject-fit: contain;
\t\t\tmax-height: 100%;
\t\t\tanimation-name: example;
\t\t\tanimation-duration: 1s;
\t\t\toverflow: hidden;
\t\t}
\t}
\t.img-select-container {
\t\twidth: 100%;
\t\tpadding: 1rem;

\t\tdisplay: flex;
\t\tjustify-content: center;
\t\toverflow: hidden;
\t\t.img-container {
\t\t\twidth: 100%;

\t\t\ttransition: 0.3s ease;
\t\t\t//transform:translatex(calc(( -1 * (80px + 1.6rem))));

\t\t\tpadding: 0.5rem;
\t\t\tdisplay: flex;

\t\t\tgap: 25px;
\t\t\t.img {
\t\t\t\twidth: 80px;
\t\t\t\tflex-shrink: 0;
\t\t\t\theight: 80px;
\t\t\t\toverflow: hidden;
\t\t\t\tborder-radius: 5px;
\t\t\t\ttransition: 0.2s ease;
\t\t\t\t&:hover {
\t\t\t\t\tbox-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
\t\t\t\t\ttransform: translateY(-5px);
\t\t\t\t}
\t\t\t\timg {
\t\t\t\t\twidth: 100%;
\t\t\t\t\theight: 100%;
\t\t\t\t\tobject-fit: cover;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
}
.buttons {
\tdisplay: flex;

\twidth: 40%;
\tjustify-content: center;
\tpadding: 0.5rem;
\tgap: 15%;
\tbutton {
\t\twidth: 48px;
\t\theight: 48px;
\t\tdisplay: flex;
\t\tjustify-content: center;
\t\talign-items: center;
\t\tcolor: #021012;
\t\tborder-radius: 100%;
\t\tborder: none;
\t\tbackground: transparent;
\t}
}

@keyframes example {
\tfrom {
\t\topacity: 0;
\t}
\tto {
\t\topacity: 100%;
\t}
}
", "components/carousel/_carousel.scss", "/Users/sebastien/Sebbe's Cloud/School/OpenClassRooms/3 - OCR - Développeur d'application - PHP & Symfony/Projet 6 (120h)/P6 - Mission/0 - Code/templates/components/carousel/_carousel.scss");
    }
}
