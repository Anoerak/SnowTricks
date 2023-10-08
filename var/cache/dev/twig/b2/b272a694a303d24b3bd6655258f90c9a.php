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

/* components/header/_header.scss */
class __TwigTemplate_0760849bb24e0cd8db4210cae2edce5e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/header/_header.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/header/_header.scss"));

        // line 1
        echo "a {
\ttext-decoration: none;
}

.container {
\tmax-width: 1440px;
\tposition: relative;
\tmargin: {
\t\tleft: 2rem;
\t\tright: 2rem;
\t}
\tpadding: {
\t\tleft: 15px;
\t\tright: 15px;
\t}
}

/*
\t|-----------------------------------
\t| Start navbar
\t|-----------------------------------
*/

.navbar,
.navbar > .container {
\twidth: 100%;
\tdisplay: flex;
\tflex-wrap: wrap;
\talign-items: center;
\tjustify-content: space-between;
\t@media (max-width: 768px) {
\t\tdisplay: block;
\t}
}

.navbar {
\tbox-shadow: \$navbar-shadow;
\tbackground-color: \$navbar-body-color;
\tpadding: \$navbar-padding-y \$navbar-padding-x;
\tborder-bottom: 1px solid \$border-color;

\t.container {
\t\t@media (min-width: 576px) {
\t\t\tmax-width: 540px;
\t\t}
\t\t@media (min-width: 768px) {
\t\t\tmax-width: 720px;
\t\t}
\t\t@media (min-width: 992px) {
\t\t\tmax-width: 960px;
\t\t}
\t\t@media (min-width: 1200px) {
\t\t\tmax-width: 1440px;
\t\t}
\t}

\t/*
\t|-----------------------------------
\t| Start navbar logo or brand etc..
\t|-----------------------------------
*/
\t.navbar-header {
\t\tdisplay: flex;
\t\talign-items: center;
\t\tjustify-content: space-between;

\t\t@media (max-width: 768px) {
\t\t\twidth: 100%;
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tjustify-content: space-between;
\t\t\tflex-direction: row-reverse;
\t\t}

\t\t.navbar-toggler {
\t\t\tborder-radius: 5px;
\t\t\tbackground-color: transparent;
\t\t\tcursor: pointer;
\t\t\tborder: none;
\t\t\tdisplay: none;
\t\t\toutline: none;

\t\t\t@media (max-width: 768px) {
\t\t\t\tdisplay: block;
\t\t\t}

\t\t\tspan {
\t\t\t\theight: 2px;
\t\t\t\twidth: 22px;
\t\t\t\tbackground-color: lighten(\$text-dark, 35%);
\t\t\t\tdisplay: block;
\t\t\t}
\t\t\tspan:not(:last-child) {
\t\t\t\tmargin-bottom: 0.2rem;
\t\t\t}
\t\t}

\t\t> a {
\t\t\tfont-weight: 500;
\t\t\tcolor: \$text-dark;
\t\t}
\t}

\t/*
\t|-----------------------------------
\t| Start navbar menu
\t|-----------------------------------
*/
\t.navbar-menu {
\t\tdisplay: flex;
\t\talign-items: center;
\t\tflex-basis: auto;
\t\tflex-grow: 1;

\t\t@media (max-width: 768px) {
\t\t\tdisplay: none;
\t\t\ttext-align: center;
\t\t}

\t\t&.active {
\t\t\tdisplay: flex !important;
\t\t}

\t\t// Ul
\t\t.navbar-nav {
\t\t\tmargin-left: auto;
\t\t\tflex-direction: row;
\t\t\tgap: 0.5rem;
\t\t\tdisplay: flex;
\t\t\tpadding-left: 0;
\t\t\tmargin-bottom: 0;
\t\t\tlist-style: none;
\t\t\t.dropdown {
\t\t\t\tposition: relative;
\t\t\t\t&:hover {
\t\t\t\t\t.dropdown-menu {
\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t.dropdown-menu {
\t\t\t\t\tposition: absolute;
\t\t\t\t\ttop: 70%;
\t\t\t\t\tleft: 2rem;
\t\t\t\t\tz-index: 1000;
\t\t\t\t\tdisplay: none;
\t\t\t\t\tmin-width: 6rem;
\t\t\t\t\tpadding: \$navbar-dropdown-padding-y 0;
\t\t\t\t\tmargin: \$navbar-dropdown-separator-margin-y 0 0;
\t\t\t\t\tfont-size: 1rem;
\t\t\t\t\tcolor: \$text-dark;
\t\t\t\t\ttext-align: left;
\t\t\t\t\tlist-style: none;
\t\t\t\t\tbackground-color: \$white;
\t\t\t\t\tbackground-clip: padding-box;
\t\t\t\t\tborder: 1px solid \$navbar-dropdown-separator-color;
\t\t\t\t\tborder-radius: \$navbar-dropdown-radius;
\t\t\t\t\tbox-shadow: \$navbar-dropdown-shadow;
\t\t\t\t\tli {
\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t\t&:not(:last-child) {
\t\t\t\t\t\t\tborder-bottom: 1px solid \$navbar-dropdown-separator-color;
\t\t\t\t\t\t}
\t\t\t\t\t\t&.active {
\t\t\t\t\t\t\t> a {
\t\t\t\t\t\t\t\tcolor: \$blue;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t> a {
\t\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t\t\tpadding: \$navbar-dropdown-item-padding-y \$navbar-dropdown-item-padding-x;
\t\t\t\t\t\t\tclear: both;
\t\t\t\t\t\t\tfont-weight: 400;
\t\t\t\t\t\t\tcolor: \$text-dark;
\t\t\t\t\t\t\ttext-align: inherit;
\t\t\t\t\t\t\twhite-space: nowrap;
\t\t\t\t\t\t\tbackground-color: transparent;
\t\t\t\t\t\t\tborder: 0;
\t\t\t\t\t\t\t&:hover {
\t\t\t\t\t\t\t\tbackground-color: \$blue;
\t\t\t\t\t\t\t\tcolor: \$white;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t@media (max-width: 768px) {
\t\t\t\twidth: 100%;
\t\t\t\tdisplay: block;
\t\t\t\tborder-top: 1px solid #eee;
\t\t\t\tmargin-top: 1rem;
\t\t\t}

\t\t\t> li {
\t\t\t\t&.signup {
\t\t\t\t\ta {
\t\t\t\t\t\tborder-radius: 0.25rem;
\t\t\t\t\t\tbackground-color: \$light-blue;
\t\t\t\t\t\tcolor: \$white;
\t\t\t\t\t\t&:hover {
\t\t\t\t\t\t\tbackground-color: \$extra-light-blue;
\t\t\t\t\t\t\tcolor: \$blue;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t> a {
\t\t\t\t\tcolor: \$text-dark;
\t\t\t\t\ttext-decoration: none;
\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\tborder-radius: 0.25rem;
\t\t\t\t\tpadding: \$navbar-link-padding-y \$navbar-link-padding-x;
\t\t\t\t\ttransition: all 0.25s ease-in-out;
\t\t\t\t\t&:hover {
\t\t\t\t\t\tbackground-color: \$blue;
\t\t\t\t\t\tcolor: \$white;
\t\t\t\t\t}
\t\t\t\t\t@media (max-width: 768px) {
\t\t\t\t\t\tborder-bottom: 1px solid \$border-color;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t&.active {
\t\t\t\t\t> a.signup {
\t\t\t\t\t\tborder-radius: 0.25rem;
\t\t\t\t\t}
\t\t\t\t\t> a {
\t\t\t\t\t\tcolor: \$blue;
\t\t\t\t\t\t// We reduce the length of the border to make it look like a line
\t\t\t\t\t\tborder-bottom: 2px solid \$blue;
\t\t\t\t\t\tborder-radius: 0;
\t\t\t\t\t\t&:hover {
\t\t\t\t\t\t\tcolor: \$white;
\t\t\t\t\t\t\tborder-radius: 0.25rem;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t.navbar-dropdown {
\t\t\t\t.dropdown {
\t\t\t\t\tlist-style: none;
\t\t\t\t\tposition: absolute;
\t\t\t\t\ttop: 150%;
\t\t\t\t\tleft: 0;
\t\t\t\t\tbackground-color: #fff;
\t\t\t\t\tpadding-top: \$navbar-dropdown-padding-y;
\t\t\t\t\tpadding-bottom: \$navbar-dropdown-padding-y;
\t\t\t\t\tmin-width: 160px;
\t\t\t\t\twidth: auto;
\t\t\t\t\twhite-space: nowrap;
\t\t\t\t\tbox-shadow: \$navbar-dropdown-shadow;
\t\t\t\t\tz-index: 99999;
\t\t\t\t\tborder-radius: \$navbar-dropdown-radius;
\t\t\t\t\tdisplay: none;
\t\t\t\t\t@media (max-width: 768px) {
\t\t\t\t\t\tposition: relative;
\t\t\t\t\t\tbox-shadow: none;
\t\t\t\t\t}
\t\t\t\t\tli {
\t\t\t\t\t\ta {
\t\t\t\t\t\t\tcolor: \$text-dark;
\t\t\t\t\t\t\tpadding: \$navbar-dropdown-item-padding-y \$navbar-dropdown-item-padding-x;
\t\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\t&.show {
\t\t\t\t\t\tdisplay: block !important;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t.dropdown > .separator {
\t\t\t\theight: 1px;
\t\t\t\twidth: 100%;
\t\t\t\tmargin: {
\t\t\t\t\ttop: \$navbar-dropdown-separator-margin-y;
\t\t\t\t\tbottom: \$navbar-dropdown-separator-margin-y;
\t\t\t\t}
\t\t\t\tbackground-color: \$navbar-dropdown-separator-color;
\t\t\t}
\t\t}
\t}

\t.navbar-dropdown {
\t\tposition: relative;
\t}
}

/*
\t|-----------------------------------
\t| Custom
\t|-----------------------------------
*/
.navbar .navbar-header > a span {
\tcolor: \$base-color;
}

.navbar .navbar-header svg {
\twidth: 150px;
\theight: 150px;
\t@media (max-width: 768px) {
\t\twidth: 100px;
\t\theight: 100px;
\t}
\tborder-radius: 100%;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/header/_header.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("a {
\ttext-decoration: none;
}

.container {
\tmax-width: 1440px;
\tposition: relative;
\tmargin: {
\t\tleft: 2rem;
\t\tright: 2rem;
\t}
\tpadding: {
\t\tleft: 15px;
\t\tright: 15px;
\t}
}

/*
\t|-----------------------------------
\t| Start navbar
\t|-----------------------------------
*/

.navbar,
.navbar > .container {
\twidth: 100%;
\tdisplay: flex;
\tflex-wrap: wrap;
\talign-items: center;
\tjustify-content: space-between;
\t@media (max-width: 768px) {
\t\tdisplay: block;
\t}
}

.navbar {
\tbox-shadow: \$navbar-shadow;
\tbackground-color: \$navbar-body-color;
\tpadding: \$navbar-padding-y \$navbar-padding-x;
\tborder-bottom: 1px solid \$border-color;

\t.container {
\t\t@media (min-width: 576px) {
\t\t\tmax-width: 540px;
\t\t}
\t\t@media (min-width: 768px) {
\t\t\tmax-width: 720px;
\t\t}
\t\t@media (min-width: 992px) {
\t\t\tmax-width: 960px;
\t\t}
\t\t@media (min-width: 1200px) {
\t\t\tmax-width: 1440px;
\t\t}
\t}

\t/*
\t|-----------------------------------
\t| Start navbar logo or brand etc..
\t|-----------------------------------
*/
\t.navbar-header {
\t\tdisplay: flex;
\t\talign-items: center;
\t\tjustify-content: space-between;

\t\t@media (max-width: 768px) {
\t\t\twidth: 100%;
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tjustify-content: space-between;
\t\t\tflex-direction: row-reverse;
\t\t}

\t\t.navbar-toggler {
\t\t\tborder-radius: 5px;
\t\t\tbackground-color: transparent;
\t\t\tcursor: pointer;
\t\t\tborder: none;
\t\t\tdisplay: none;
\t\t\toutline: none;

\t\t\t@media (max-width: 768px) {
\t\t\t\tdisplay: block;
\t\t\t}

\t\t\tspan {
\t\t\t\theight: 2px;
\t\t\t\twidth: 22px;
\t\t\t\tbackground-color: lighten(\$text-dark, 35%);
\t\t\t\tdisplay: block;
\t\t\t}
\t\t\tspan:not(:last-child) {
\t\t\t\tmargin-bottom: 0.2rem;
\t\t\t}
\t\t}

\t\t> a {
\t\t\tfont-weight: 500;
\t\t\tcolor: \$text-dark;
\t\t}
\t}

\t/*
\t|-----------------------------------
\t| Start navbar menu
\t|-----------------------------------
*/
\t.navbar-menu {
\t\tdisplay: flex;
\t\talign-items: center;
\t\tflex-basis: auto;
\t\tflex-grow: 1;

\t\t@media (max-width: 768px) {
\t\t\tdisplay: none;
\t\t\ttext-align: center;
\t\t}

\t\t&.active {
\t\t\tdisplay: flex !important;
\t\t}

\t\t// Ul
\t\t.navbar-nav {
\t\t\tmargin-left: auto;
\t\t\tflex-direction: row;
\t\t\tgap: 0.5rem;
\t\t\tdisplay: flex;
\t\t\tpadding-left: 0;
\t\t\tmargin-bottom: 0;
\t\t\tlist-style: none;
\t\t\t.dropdown {
\t\t\t\tposition: relative;
\t\t\t\t&:hover {
\t\t\t\t\t.dropdown-menu {
\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t.dropdown-menu {
\t\t\t\t\tposition: absolute;
\t\t\t\t\ttop: 70%;
\t\t\t\t\tleft: 2rem;
\t\t\t\t\tz-index: 1000;
\t\t\t\t\tdisplay: none;
\t\t\t\t\tmin-width: 6rem;
\t\t\t\t\tpadding: \$navbar-dropdown-padding-y 0;
\t\t\t\t\tmargin: \$navbar-dropdown-separator-margin-y 0 0;
\t\t\t\t\tfont-size: 1rem;
\t\t\t\t\tcolor: \$text-dark;
\t\t\t\t\ttext-align: left;
\t\t\t\t\tlist-style: none;
\t\t\t\t\tbackground-color: \$white;
\t\t\t\t\tbackground-clip: padding-box;
\t\t\t\t\tborder: 1px solid \$navbar-dropdown-separator-color;
\t\t\t\t\tborder-radius: \$navbar-dropdown-radius;
\t\t\t\t\tbox-shadow: \$navbar-dropdown-shadow;
\t\t\t\t\tli {
\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t\t&:not(:last-child) {
\t\t\t\t\t\t\tborder-bottom: 1px solid \$navbar-dropdown-separator-color;
\t\t\t\t\t\t}
\t\t\t\t\t\t&.active {
\t\t\t\t\t\t\t> a {
\t\t\t\t\t\t\t\tcolor: \$blue;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t\t> a {
\t\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t\t\tpadding: \$navbar-dropdown-item-padding-y \$navbar-dropdown-item-padding-x;
\t\t\t\t\t\t\tclear: both;
\t\t\t\t\t\t\tfont-weight: 400;
\t\t\t\t\t\t\tcolor: \$text-dark;
\t\t\t\t\t\t\ttext-align: inherit;
\t\t\t\t\t\t\twhite-space: nowrap;
\t\t\t\t\t\t\tbackground-color: transparent;
\t\t\t\t\t\t\tborder: 0;
\t\t\t\t\t\t\t&:hover {
\t\t\t\t\t\t\t\tbackground-color: \$blue;
\t\t\t\t\t\t\t\tcolor: \$white;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t@media (max-width: 768px) {
\t\t\t\twidth: 100%;
\t\t\t\tdisplay: block;
\t\t\t\tborder-top: 1px solid #eee;
\t\t\t\tmargin-top: 1rem;
\t\t\t}

\t\t\t> li {
\t\t\t\t&.signup {
\t\t\t\t\ta {
\t\t\t\t\t\tborder-radius: 0.25rem;
\t\t\t\t\t\tbackground-color: \$light-blue;
\t\t\t\t\t\tcolor: \$white;
\t\t\t\t\t\t&:hover {
\t\t\t\t\t\t\tbackground-color: \$extra-light-blue;
\t\t\t\t\t\t\tcolor: \$blue;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t> a {
\t\t\t\t\tcolor: \$text-dark;
\t\t\t\t\ttext-decoration: none;
\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\tborder-radius: 0.25rem;
\t\t\t\t\tpadding: \$navbar-link-padding-y \$navbar-link-padding-x;
\t\t\t\t\ttransition: all 0.25s ease-in-out;
\t\t\t\t\t&:hover {
\t\t\t\t\t\tbackground-color: \$blue;
\t\t\t\t\t\tcolor: \$white;
\t\t\t\t\t}
\t\t\t\t\t@media (max-width: 768px) {
\t\t\t\t\t\tborder-bottom: 1px solid \$border-color;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t&.active {
\t\t\t\t\t> a.signup {
\t\t\t\t\t\tborder-radius: 0.25rem;
\t\t\t\t\t}
\t\t\t\t\t> a {
\t\t\t\t\t\tcolor: \$blue;
\t\t\t\t\t\t// We reduce the length of the border to make it look like a line
\t\t\t\t\t\tborder-bottom: 2px solid \$blue;
\t\t\t\t\t\tborder-radius: 0;
\t\t\t\t\t\t&:hover {
\t\t\t\t\t\t\tcolor: \$white;
\t\t\t\t\t\t\tborder-radius: 0.25rem;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t.navbar-dropdown {
\t\t\t\t.dropdown {
\t\t\t\t\tlist-style: none;
\t\t\t\t\tposition: absolute;
\t\t\t\t\ttop: 150%;
\t\t\t\t\tleft: 0;
\t\t\t\t\tbackground-color: #fff;
\t\t\t\t\tpadding-top: \$navbar-dropdown-padding-y;
\t\t\t\t\tpadding-bottom: \$navbar-dropdown-padding-y;
\t\t\t\t\tmin-width: 160px;
\t\t\t\t\twidth: auto;
\t\t\t\t\twhite-space: nowrap;
\t\t\t\t\tbox-shadow: \$navbar-dropdown-shadow;
\t\t\t\t\tz-index: 99999;
\t\t\t\t\tborder-radius: \$navbar-dropdown-radius;
\t\t\t\t\tdisplay: none;
\t\t\t\t\t@media (max-width: 768px) {
\t\t\t\t\t\tposition: relative;
\t\t\t\t\t\tbox-shadow: none;
\t\t\t\t\t}
\t\t\t\t\tli {
\t\t\t\t\t\ta {
\t\t\t\t\t\t\tcolor: \$text-dark;
\t\t\t\t\t\t\tpadding: \$navbar-dropdown-item-padding-y \$navbar-dropdown-item-padding-x;
\t\t\t\t\t\t\tdisplay: block;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\t&.show {
\t\t\t\t\t\tdisplay: block !important;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t.dropdown > .separator {
\t\t\t\theight: 1px;
\t\t\t\twidth: 100%;
\t\t\t\tmargin: {
\t\t\t\t\ttop: \$navbar-dropdown-separator-margin-y;
\t\t\t\t\tbottom: \$navbar-dropdown-separator-margin-y;
\t\t\t\t}
\t\t\t\tbackground-color: \$navbar-dropdown-separator-color;
\t\t\t}
\t\t}
\t}

\t.navbar-dropdown {
\t\tposition: relative;
\t}
}

/*
\t|-----------------------------------
\t| Custom
\t|-----------------------------------
*/
.navbar .navbar-header > a span {
\tcolor: \$base-color;
}

.navbar .navbar-header svg {
\twidth: 150px;
\theight: 150px;
\t@media (max-width: 768px) {
\t\twidth: 100px;
\t\theight: 100px;
\t}
\tborder-radius: 100%;
}
", "components/header/_header.scss", "/Users/sebastien/Sebbe's Cloud/School/OpenClassRooms/3 - OCR - Développeur d'application - PHP & Symfony/Projet 6 (120h)/P6 - Mission/0 - Code/templates/components/header/_header.scss");
    }
}
