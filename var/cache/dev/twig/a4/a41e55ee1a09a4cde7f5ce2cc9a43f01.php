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

/* trick/edit/_add_edit_trick.scss */
class __TwigTemplate_f33e5d1dabe77d35b67396b5d4156ad9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/edit/_add_edit_trick.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/edit/_add_edit_trick.scss"));

        // line 1
        echo "section#trick_edition,
section#new_trick {
\tform {
\t\tmargin-bottom: 1rem;
\t\tdisplay: flex;
\t\tflex-direction: column;
\t\tgap: 1rem;
\t\t> div {
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t\tgap: 1rem;
\t\t\t#add-video-links {
\t\t\t\tdisplay: flex;
\t\t\t\tflex-direction: column;
\t\t\t\talign-items: flex-start;
\t\t\t\tjustify-content: space-between;
\t\t\t\tgap: 0.5rem;
\t\t\t\tposition: relative;
\t\t\t\t> div {
\t\t\t\t\twidth: 104%;
\t\t\t\t\t.video__link__added {
\t\t\t\t\t\twidth: 90%;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t#add-video-link-button {
\t\t\t\t\tposition: absolute;
\t\t\t\t\tright: -1rem;
\t\t\t\t\ttop: 1.55rem;
\t\t\t\t\twidth: 2rem;
\t\t\t\t\theight: 2rem;
\t\t\t\t\tbackground-color: \$extra-light-blue;
\t\t\t\t\tcolor: \$blue;
\t\t\t\t\tborder: none;
\t\t\t\t\toutline: none;
\t\t\t\t\tborder-radius: 5px;
\t\t\t\t\ttransition: all 0.2s ease-in-out;
\t\t\t\t\tcursor: pointer;
\t\t\t\t\t&:hover {
\t\t\t\t\t\tbackground-color: \$blue;
\t\t\t\t\t\tcolor: \$white;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t.video__link__added__container {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\talign-items: center;
\t\t\t\t\tjustify-content: space-between;
\t\t\t\t\t> input {
\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t}
\t\t\t\t\t.remove__video__link__button {
\t\t\t\t\t\twidth: 1.75rem;
\t\t\t\t\t\theight: 1.75rem;
\t\t\t\t\t\tbackground-color: \$cancel-button-red;
\t\t\t\t\t\tborder: none;
\t\t\t\t\t\toutline: none;
\t\t\t\t\t\tborder-radius: 100%;
\t\t\t\t\t\ttransition: all 0.2s ease-in-out;
\t\t\t\t\t\tcursor: pointer;
\t\t\t\t\t\t&:hover {
\t\t\t\t\t\t\tbackground-color: \$cancel-button-red-hover;
\t\t\t\t\t\t\tcolor: \$white;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\t.medias__gallery {
\t\t\t\twidth: 100%;
\t\t\t\ttransition: 0.3s ease;
\t\t\t\tpadding: 0.5rem;
\t\t\t\tdisplay: flex;
\t\t\t\tgap: 25px;
\t\t\t\t.media {
\t\t\t\t\tposition: relative;
\t\t\t\t\twidth: 80px;
\t\t\t\t\tflex-shrink: 0;
\t\t\t\t\theight: 80px;
\t\t\t\t\toverflow: visible;
\t\t\t\t\tborder-radius: 5px;
\t\t\t\t\ttransition: 0.2s ease;
\t\t\t\t\t&:hover {
\t\t\t\t\t\tbox-shadow: rgba(246, 128, 128, 0.25) 0px 13px 27px -5px,
\t\t\t\t\t\t\trgba(246, 161, 161, 0.3) 0px 8px 16px -8px;
\t\t\t\t\t\ttransform: translateY(-5px);
\t\t\t\t\t}
\t\t\t\t\timg,
\t\t\t\t\tvideo {
\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\theight: 100%;
\t\t\t\t\t\tborder-radius: 5px;
\t\t\t\t\t\tobject-fit: cover;
\t\t\t\t\t}
\t\t\t\t\t.remove__media {
\t\t\t\t\t\tposition: absolute;
\t\t\t\t\t\ttop: -10px;
\t\t\t\t\t\tright: -10px;
\t\t\t\t\t\tbackground-color: rgba(255, 0, 0, 0.5);
\t\t\t\t\t\tcolor: white;
\t\t\t\t\t\tborder-radius: 100%;
\t\t\t\t\t\tpadding: 0.25rem 0.5rem;
\t\t\t\t\t\ttransition: 0.2s ease;
\t\t\t\t\t\tfont-weight: 500;
\t\t\t\t\t\t&:hover {
\t\t\t\t\t\t\tbackground-color: rgba(255, 0, 0, 0.8);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
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
        return "trick/edit/_add_edit_trick.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("section#trick_edition,
section#new_trick {
\tform {
\t\tmargin-bottom: 1rem;
\t\tdisplay: flex;
\t\tflex-direction: column;
\t\tgap: 1rem;
\t\t> div {
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t\tgap: 1rem;
\t\t\t#add-video-links {
\t\t\t\tdisplay: flex;
\t\t\t\tflex-direction: column;
\t\t\t\talign-items: flex-start;
\t\t\t\tjustify-content: space-between;
\t\t\t\tgap: 0.5rem;
\t\t\t\tposition: relative;
\t\t\t\t> div {
\t\t\t\t\twidth: 104%;
\t\t\t\t\t.video__link__added {
\t\t\t\t\t\twidth: 90%;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t#add-video-link-button {
\t\t\t\t\tposition: absolute;
\t\t\t\t\tright: -1rem;
\t\t\t\t\ttop: 1.55rem;
\t\t\t\t\twidth: 2rem;
\t\t\t\t\theight: 2rem;
\t\t\t\t\tbackground-color: \$extra-light-blue;
\t\t\t\t\tcolor: \$blue;
\t\t\t\t\tborder: none;
\t\t\t\t\toutline: none;
\t\t\t\t\tborder-radius: 5px;
\t\t\t\t\ttransition: all 0.2s ease-in-out;
\t\t\t\t\tcursor: pointer;
\t\t\t\t\t&:hover {
\t\t\t\t\t\tbackground-color: \$blue;
\t\t\t\t\t\tcolor: \$white;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t.video__link__added__container {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\talign-items: center;
\t\t\t\t\tjustify-content: space-between;
\t\t\t\t\t> input {
\t\t\t\t\t\tmargin: 0;
\t\t\t\t\t}
\t\t\t\t\t.remove__video__link__button {
\t\t\t\t\t\twidth: 1.75rem;
\t\t\t\t\t\theight: 1.75rem;
\t\t\t\t\t\tbackground-color: \$cancel-button-red;
\t\t\t\t\t\tborder: none;
\t\t\t\t\t\toutline: none;
\t\t\t\t\t\tborder-radius: 100%;
\t\t\t\t\t\ttransition: all 0.2s ease-in-out;
\t\t\t\t\t\tcursor: pointer;
\t\t\t\t\t\t&:hover {
\t\t\t\t\t\t\tbackground-color: \$cancel-button-red-hover;
\t\t\t\t\t\t\tcolor: \$white;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\t.medias__gallery {
\t\t\t\twidth: 100%;
\t\t\t\ttransition: 0.3s ease;
\t\t\t\tpadding: 0.5rem;
\t\t\t\tdisplay: flex;
\t\t\t\tgap: 25px;
\t\t\t\t.media {
\t\t\t\t\tposition: relative;
\t\t\t\t\twidth: 80px;
\t\t\t\t\tflex-shrink: 0;
\t\t\t\t\theight: 80px;
\t\t\t\t\toverflow: visible;
\t\t\t\t\tborder-radius: 5px;
\t\t\t\t\ttransition: 0.2s ease;
\t\t\t\t\t&:hover {
\t\t\t\t\t\tbox-shadow: rgba(246, 128, 128, 0.25) 0px 13px 27px -5px,
\t\t\t\t\t\t\trgba(246, 161, 161, 0.3) 0px 8px 16px -8px;
\t\t\t\t\t\ttransform: translateY(-5px);
\t\t\t\t\t}
\t\t\t\t\timg,
\t\t\t\t\tvideo {
\t\t\t\t\t\twidth: 100%;
\t\t\t\t\t\theight: 100%;
\t\t\t\t\t\tborder-radius: 5px;
\t\t\t\t\t\tobject-fit: cover;
\t\t\t\t\t}
\t\t\t\t\t.remove__media {
\t\t\t\t\t\tposition: absolute;
\t\t\t\t\t\ttop: -10px;
\t\t\t\t\t\tright: -10px;
\t\t\t\t\t\tbackground-color: rgba(255, 0, 0, 0.5);
\t\t\t\t\t\tcolor: white;
\t\t\t\t\t\tborder-radius: 100%;
\t\t\t\t\t\tpadding: 0.25rem 0.5rem;
\t\t\t\t\t\ttransition: 0.2s ease;
\t\t\t\t\t\tfont-weight: 500;
\t\t\t\t\t\t&:hover {
\t\t\t\t\t\t\tbackground-color: rgba(255, 0, 0, 0.8);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}
}
", "trick/edit/_add_edit_trick.scss", "C:\\Users\\anorak\\SynologyDrive\\OpenClassRooms\\3 - OCR - Développeur d'application - PHP & Symfony\\Projet 6 (120h)\\P6 - Mission\\0 - Code\\templates\\trick\\edit\\_add_edit_trick.scss");
    }
}
