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

/* home/display_tricks/_display_tricks.scss */
class __TwigTemplate_8612711a56f2e70930d1211a210256aa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/display_tricks/_display_tricks.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/display_tricks/_display_tricks.scss"));

        // line 1
        echo "section#tricks .container,
section#trick_category {
\tdisplay: flex;
\tflex-wrap: wrap;
\tjustify-content: space-between;
\tmargin: 0 auto;
\tmax-width: 1200px;
\tpadding: 0 20px;
\th2 {
\t\tfont-size: 1.5rem;
\t\tmargin: 0 0 2rem 0;
\t\tpadding: 0;
\t\tcolor: \$blue;
\t}
\t.tricks {
\t\tdisplay: flex;
\t\tflex-wrap: wrap;
\t\tjustify-content: space-between;
\t\talign-content: flex-start;
\t\tmargin: 0 auto;
\t\tmax-width: 1200px;
\t\tpadding: 0 20px;
\t\tgap: 20px;
\t\t.trick {
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t\tjustify-content: space-between;
\t\t\tmargin: 0 auto;
\t\t\tmax-width: 300px;
\t\t\tpadding: 0 20px 20px 20px;
\t\t\ttransition: all 0.3s ease-in-out;
\t\t\tbox-shadow: 0 0 10px rgba(13, 61, 103, 0.2);
\t\t\tborder-radius: 5px;
\t\t\t&:hover {
\t\t\t\tbox-shadow: 0 0 10px rgba(13, 61, 103, 0.5);
\t\t\t}
\t\t\t.trick__image {
\t\t\t\tdisplay: flex;
\t\t\t\tjustify-content: center;
\t\t\t\talign-items: center;
\t\t\t\theight: 200px;
\t\t\t\twidth: 100%;
\t\t\t\tpadding-top: 20px;
\t\t\t\timg {
\t\t\t\t\theight: 100%;
\t\t\t\t\twidth: 100%;
\t\t\t\t\tobject-fit: cover;
\t\t\t\t\tborder-radius: 3.5px 3.5px 0 0;
\t\t\t\t}
\t\t\t}
\t\t\t.trick__content {
\t\t\t\t.trick__title {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\tjustify-content: center;
\t\t\t\t\talign-items: center;
\t\t\t\t\theight: 50px;
\t\t\t\t\twidth: 100%;
\t\t\t\t\tbackground-color: \$blue;
\t\t\t\t\tcolor: \$white;
\t\t\t\t\tfont-size: 1.25rem;
\t\t\t\t\tfont-weight: bold;
\t\t\t\t\ttext-transform: uppercase;
\t\t\t\t\ttext-align: center;
\t\t\t\t}
\t\t\t\t.trick__description {
\t\t\t\t\tdisplay: -webkit-box;
\t\t\t\t\t-webkit-line-clamp: 3;
\t\t\t\t\t-webkit-box-orient: vertical;
\t\t\t\t\theight: 50px;
\t\t\t\t\twidth: 100%;
\t\t\t\t\tbackground-color: \$white;
\t\t\t\t\tcolor: \$blue;
\t\t\t\t\tfont-size: 0.7rem;
\t\t\t\t\tfont-weight: normal;
\t\t\t\t\ttext-transform: uppercase;
\t\t\t\t\ttext-align: center;
\t\t\t\t\toverflow: hidden;
\t\t\t\t\ttext-overflow: ellipsis;
\t\t\t\t}
\t\t\t\t.trick__bottom {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\tflex-direction: row;
\t\t\t\t\talign-items: flex-start;
\t\t\t\t\tjustify-content: space-between;
\t\t\t\t\t.read__more {
\t\t\t\t\t\tcursor: pointer;
\t\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t\tpadding: 5px;
\t\t\t\t\t\tmargin: 1rem 0 0 0;
\t\t\t\t\t\tbackground-color: \$extra-light-blue;
\t\t\t\t\t\tborder-radius: 4px;
\t\t\t\t\t\tcolor: \$blue;
\t\t\t\t\t\tfont-size: 0.75rem;
\t\t\t\t\t\ttext-decoration: none;
\t\t\t\t\t\ttransition: all 0.3s ease-in-out;
\t\t\t\t\t\t&:hover {
\t\t\t\t\t\t\tbackground-color: \$blue;
\t\t\t\t\t\t\tcolor: \$white;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\t.button {
\t\t\t\t\t\tcursor: pointer;
\t\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t\tpadding: 5px;
\t\t\t\t\t\tmargin: 1rem 0 0 0;
\t\t\t\t\t\tbackground-color: \$white;
\t\t\t\t\t\tborder-radius: 4px;
\t\t\t\t\t\tcolor: \$blue;
\t\t\t\t\t\tfont-size: 0.75rem;
\t\t\t\t\t\ttext-decoration: none;
\t\t\t\t\t\tbox-shadow: 0 0 10px rgba(13, 61, 103, 0.2);
\t\t\t\t\t\ttransition: all 0.3s ease-in-out;
\t\t\t\t\t\t&.edit {
\t\t\t\t\t\t\t&:hover {
\t\t\t\t\t\t\t\tbackground-color: \$extra-light-blue;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t&.delete {
\t\t\t\t\t\t\t&:hover {
\t\t\t\t\t\t\t\tbackground-color: \$text-error;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t&:hover {
\t\t\t\t\t\t\tbackground-color: \$extra-light-blue;
\t\t\t\t\t\t\tbox-shadow: 0 0 10px rgba(13, 61, 103, 0.5);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t\t.trick__load__more {
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t\tjustify-content: space-between;
\t\t\talign-items: center;
\t\t\tmax-height: 360px;
\t\t\tmax-width: 300px;
\t\t\tbackground-color: \$white;
\t\t\tcolor: \$extra-light-blue;
\t\t\tmargin: 0 auto;
\t\t\tpadding: 0 20px 20px 20px;
\t\t\tfont-size: 1.5rem;
\t\t\tfont-weight: bold;
\t\t\ttext-transform: uppercase;
\t\t\ttext-align: center;
\t\t\ttransition: all 0.3s ease-in-out;
\t\t\tbox-shadow: 0 0 10px rgba(13, 61, 103, 0.2);
\t\t\tborder-radius: 5px;
\t\t\t&:hover {
\t\t\t\tbox-shadow: 0 0 10px rgba(13, 61, 103, 0.5);
\t\t\t}
\t\t\t.trick__title {
\t\t\t\theight: 50px;
\t\t\t\twidth: 100%;
\t\t\t\tbackground-color: \$blue;
\t\t\t\tborder-radius: 0 0 3px 3px;
\t\t\t\tcolor: \$white;
\t\t\t\tfont-size: 1.5rem;
\t\t\t\tfont-weight: bold;
\t\t\t\ttext-transform: uppercase;
\t\t\t}
\t\t\tbutton {
\t\t\t\tdisplay: inline-block;
\t\t\t\tpadding: 5px;
\t\t\t\tmargin: 1rem 0 0 0;
\t\t\t\tbackground-color: \$extra-light-blue;
\t\t\t\tborder-radius: 4px;
\t\t\t\tcolor: \$blue;
\t\t\t\tfont-size: 0.75rem;
\t\t\t\ttext-decoration: none;
\t\t\t\ttransition: all 0.3s ease-in-out;
\t\t\t\toutline: none;
\t\t\t\tborder: none;
\t\t\t\tcursor: pointer;
\t\t\t\t&:hover {
\t\t\t\t\tbackground-color: \$light-blue;
\t\t\t\t\tcolor: \$white;
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
        return "home/display_tricks/_display_tricks.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("section#tricks .container,
section#trick_category {
\tdisplay: flex;
\tflex-wrap: wrap;
\tjustify-content: space-between;
\tmargin: 0 auto;
\tmax-width: 1200px;
\tpadding: 0 20px;
\th2 {
\t\tfont-size: 1.5rem;
\t\tmargin: 0 0 2rem 0;
\t\tpadding: 0;
\t\tcolor: \$blue;
\t}
\t.tricks {
\t\tdisplay: flex;
\t\tflex-wrap: wrap;
\t\tjustify-content: space-between;
\t\talign-content: flex-start;
\t\tmargin: 0 auto;
\t\tmax-width: 1200px;
\t\tpadding: 0 20px;
\t\tgap: 20px;
\t\t.trick {
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t\tjustify-content: space-between;
\t\t\tmargin: 0 auto;
\t\t\tmax-width: 300px;
\t\t\tpadding: 0 20px 20px 20px;
\t\t\ttransition: all 0.3s ease-in-out;
\t\t\tbox-shadow: 0 0 10px rgba(13, 61, 103, 0.2);
\t\t\tborder-radius: 5px;
\t\t\t&:hover {
\t\t\t\tbox-shadow: 0 0 10px rgba(13, 61, 103, 0.5);
\t\t\t}
\t\t\t.trick__image {
\t\t\t\tdisplay: flex;
\t\t\t\tjustify-content: center;
\t\t\t\talign-items: center;
\t\t\t\theight: 200px;
\t\t\t\twidth: 100%;
\t\t\t\tpadding-top: 20px;
\t\t\t\timg {
\t\t\t\t\theight: 100%;
\t\t\t\t\twidth: 100%;
\t\t\t\t\tobject-fit: cover;
\t\t\t\t\tborder-radius: 3.5px 3.5px 0 0;
\t\t\t\t}
\t\t\t}
\t\t\t.trick__content {
\t\t\t\t.trick__title {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\tjustify-content: center;
\t\t\t\t\talign-items: center;
\t\t\t\t\theight: 50px;
\t\t\t\t\twidth: 100%;
\t\t\t\t\tbackground-color: \$blue;
\t\t\t\t\tcolor: \$white;
\t\t\t\t\tfont-size: 1.25rem;
\t\t\t\t\tfont-weight: bold;
\t\t\t\t\ttext-transform: uppercase;
\t\t\t\t\ttext-align: center;
\t\t\t\t}
\t\t\t\t.trick__description {
\t\t\t\t\tdisplay: -webkit-box;
\t\t\t\t\t-webkit-line-clamp: 3;
\t\t\t\t\t-webkit-box-orient: vertical;
\t\t\t\t\theight: 50px;
\t\t\t\t\twidth: 100%;
\t\t\t\t\tbackground-color: \$white;
\t\t\t\t\tcolor: \$blue;
\t\t\t\t\tfont-size: 0.7rem;
\t\t\t\t\tfont-weight: normal;
\t\t\t\t\ttext-transform: uppercase;
\t\t\t\t\ttext-align: center;
\t\t\t\t\toverflow: hidden;
\t\t\t\t\ttext-overflow: ellipsis;
\t\t\t\t}
\t\t\t\t.trick__bottom {
\t\t\t\t\tdisplay: flex;
\t\t\t\t\tflex-direction: row;
\t\t\t\t\talign-items: flex-start;
\t\t\t\t\tjustify-content: space-between;
\t\t\t\t\t.read__more {
\t\t\t\t\t\tcursor: pointer;
\t\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t\tpadding: 5px;
\t\t\t\t\t\tmargin: 1rem 0 0 0;
\t\t\t\t\t\tbackground-color: \$extra-light-blue;
\t\t\t\t\t\tborder-radius: 4px;
\t\t\t\t\t\tcolor: \$blue;
\t\t\t\t\t\tfont-size: 0.75rem;
\t\t\t\t\t\ttext-decoration: none;
\t\t\t\t\t\ttransition: all 0.3s ease-in-out;
\t\t\t\t\t\t&:hover {
\t\t\t\t\t\t\tbackground-color: \$blue;
\t\t\t\t\t\t\tcolor: \$white;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\t.button {
\t\t\t\t\t\tcursor: pointer;
\t\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t\tpadding: 5px;
\t\t\t\t\t\tmargin: 1rem 0 0 0;
\t\t\t\t\t\tbackground-color: \$white;
\t\t\t\t\t\tborder-radius: 4px;
\t\t\t\t\t\tcolor: \$blue;
\t\t\t\t\t\tfont-size: 0.75rem;
\t\t\t\t\t\ttext-decoration: none;
\t\t\t\t\t\tbox-shadow: 0 0 10px rgba(13, 61, 103, 0.2);
\t\t\t\t\t\ttransition: all 0.3s ease-in-out;
\t\t\t\t\t\t&.edit {
\t\t\t\t\t\t\t&:hover {
\t\t\t\t\t\t\t\tbackground-color: \$extra-light-blue;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t&.delete {
\t\t\t\t\t\t\t&:hover {
\t\t\t\t\t\t\t\tbackground-color: \$text-error;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t&:hover {
\t\t\t\t\t\t\tbackground-color: \$extra-light-blue;
\t\t\t\t\t\t\tbox-shadow: 0 0 10px rgba(13, 61, 103, 0.5);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t\t.trick__load__more {
\t\t\tdisplay: flex;
\t\t\tflex-direction: column;
\t\t\tjustify-content: space-between;
\t\t\talign-items: center;
\t\t\tmax-height: 360px;
\t\t\tmax-width: 300px;
\t\t\tbackground-color: \$white;
\t\t\tcolor: \$extra-light-blue;
\t\t\tmargin: 0 auto;
\t\t\tpadding: 0 20px 20px 20px;
\t\t\tfont-size: 1.5rem;
\t\t\tfont-weight: bold;
\t\t\ttext-transform: uppercase;
\t\t\ttext-align: center;
\t\t\ttransition: all 0.3s ease-in-out;
\t\t\tbox-shadow: 0 0 10px rgba(13, 61, 103, 0.2);
\t\t\tborder-radius: 5px;
\t\t\t&:hover {
\t\t\t\tbox-shadow: 0 0 10px rgba(13, 61, 103, 0.5);
\t\t\t}
\t\t\t.trick__title {
\t\t\t\theight: 50px;
\t\t\t\twidth: 100%;
\t\t\t\tbackground-color: \$blue;
\t\t\t\tborder-radius: 0 0 3px 3px;
\t\t\t\tcolor: \$white;
\t\t\t\tfont-size: 1.5rem;
\t\t\t\tfont-weight: bold;
\t\t\t\ttext-transform: uppercase;
\t\t\t}
\t\t\tbutton {
\t\t\t\tdisplay: inline-block;
\t\t\t\tpadding: 5px;
\t\t\t\tmargin: 1rem 0 0 0;
\t\t\t\tbackground-color: \$extra-light-blue;
\t\t\t\tborder-radius: 4px;
\t\t\t\tcolor: \$blue;
\t\t\t\tfont-size: 0.75rem;
\t\t\t\ttext-decoration: none;
\t\t\t\ttransition: all 0.3s ease-in-out;
\t\t\t\toutline: none;
\t\t\t\tborder: none;
\t\t\t\tcursor: pointer;
\t\t\t\t&:hover {
\t\t\t\t\tbackground-color: \$light-blue;
\t\t\t\t\tcolor: \$white;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
}
", "home/display_tricks/_display_tricks.scss", "/Users/sebastien/Sebbe's Cloud/School/OpenClassRooms/3 - OCR - Développeur d'application - PHP & Symfony/Projet 6 (120h)/P6 - Mission/0 - Code/templates/home/display_tricks/_display_tricks.scss");
    }
}
