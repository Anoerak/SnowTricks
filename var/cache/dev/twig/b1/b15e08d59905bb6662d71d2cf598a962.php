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

/* about/about.html.twig */
class __TwigTemplate_4a00f958d32d3a2149ebf68934d4a74d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about/about.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "SnowTricks - About";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<section class=\"about\">
\t<h2>About SnowTricks</h2>
\t<p>
\t\tWelcome to SnowTricks, your ultimate guide to the world of snowboarding stunts and tricks! Our site is dedicated
\t\tto providing you with the latest and greatest in snowboarding techniques, including step-by-step tutorials,
\t\texpert tips and tricks, and a community of fellow snowboarders to help you perfect your skills.
\t</p>
\t<p>
\t\tWhether you're just starting out or you're a seasoned pro, SnowTricks has something for everyone. From basic
\t\tjumps and spins to advanced rail tricks and backcountry stunts, we've got you covered with everything you need
\t\tto take your snowboarding to the next level.
\t</p>
\t<p>
\t\tOur team of experienced snowboarders is passionate about the sport and dedicated to helping you achieve your
\t\tgoals. We're always on the lookout for the latest trends and techniques in snowboarding, and we're constantly
\t\tupdating our site with new content to keep you ahead of the game.
\t</p>
\t<p>
\t\tSo what are you waiting for? Join the SnowTricks community today and start mastering the art of snowboarding
\t\tstunts and tricks!
\t</p>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "about/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %} {% block title %}SnowTricks - About{% endblock %} {% block body %}
<section class=\"about\">
\t<h2>About SnowTricks</h2>
\t<p>
\t\tWelcome to SnowTricks, your ultimate guide to the world of snowboarding stunts and tricks! Our site is dedicated
\t\tto providing you with the latest and greatest in snowboarding techniques, including step-by-step tutorials,
\t\texpert tips and tricks, and a community of fellow snowboarders to help you perfect your skills.
\t</p>
\t<p>
\t\tWhether you're just starting out or you're a seasoned pro, SnowTricks has something for everyone. From basic
\t\tjumps and spins to advanced rail tricks and backcountry stunts, we've got you covered with everything you need
\t\tto take your snowboarding to the next level.
\t</p>
\t<p>
\t\tOur team of experienced snowboarders is passionate about the sport and dedicated to helping you achieve your
\t\tgoals. We're always on the lookout for the latest trends and techniques in snowboarding, and we're constantly
\t\tupdating our site with new content to keep you ahead of the game.
\t</p>
\t<p>
\t\tSo what are you waiting for? Join the SnowTricks community today and start mastering the art of snowboarding
\t\tstunts and tricks!
\t</p>
</section>
{% endblock %}
", "about/about.html.twig", "/Users/sebastien/Sebbe's Cloud/School/OpenClassRooms/3 - OCR - Développeur d'application - PHP & Symfony/Projet 6 (120h)/P6 - Mission/0 - Code/templates/about/about.html.twig");
    }
}
