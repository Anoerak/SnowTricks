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

/* profile/_profile.scss */
class __TwigTemplate_748c2400c2a06f59ddc717a62115882f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/_profile.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/_profile.scss"));

        // line 1
        echo "section#user_profile {
\tmin-height: 50vh;
\t#form {
\t\tdisplay: flex;
\t\tflex-direction: column;
\t\talign-items: center;
\t\t.user__profile__picture {
\t\t\theight: 100px;
\t\t\twidth: 100px;
\t\t\tborder-radius: 100%;
\t\t\tmargin: 1rem;
\t\t}
\t}
\t#user_profile_profile_picture {
\t\tmargin-bottom: 1rem;
\t}
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "profile/_profile.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("section#user_profile {
\tmin-height: 50vh;
\t#form {
\t\tdisplay: flex;
\t\tflex-direction: column;
\t\talign-items: center;
\t\t.user__profile__picture {
\t\t\theight: 100px;
\t\t\twidth: 100px;
\t\t\tborder-radius: 100%;
\t\t\tmargin: 1rem;
\t\t}
\t}
\t#user_profile_profile_picture {
\t\tmargin-bottom: 1rem;
\t}
}
", "profile/_profile.scss", "/Users/sebastien/Sebbe's Cloud/School/OpenClassRooms/3 - OCR - Développeur d'application - PHP & Symfony/Projet 6 (120h)/P6 - Mission/0 - Code/templates/profile/_profile.scss");
    }
}
