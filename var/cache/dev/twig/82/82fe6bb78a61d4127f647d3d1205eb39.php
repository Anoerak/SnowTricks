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

/* components/header/header.js */
class __TwigTemplate_57f1dc34ab9650505be5a35cb6b6d723 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/header/header.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/header/header.js"));

        // line 1
        echo "// We select the elements we need.
let dropdowns = document.querySelectorAll('.navbar .dropdown-toggler');
let dropdownIsOpen = false;

// We handle dropdown menus
if (dropdowns.length) {
\tdropdowns.forEach((dropdown) => {
\t\tdropdown.addEventListener('click', (event) => {
\t\t\tlet target = document.querySelector(`#\${event.target.dataset.dropdown}`);

\t\t\tif (target) {
\t\t\t\tif (target.classList.contains('show')) {
\t\t\t\t\ttarget.classList.remove('show');
\t\t\t\t\tdropdownIsOpen = false;
\t\t\t\t} else {
\t\t\t\t\ttarget.classList.add('show');
\t\t\t\t\tdropdownIsOpen = true;
\t\t\t\t}
\t\t\t}
\t\t});
\t});
}

// We add an event listener to the window to close the dropdowns when the user clicks outside of them.
window.addEventListener('mouseup', (event) => {
\tif (dropdownIsOpen) {
\t\tdropdowns.forEach((dropdownButton) => {
\t\t\tlet dropdown = document.querySelector(`#\${dropdownButton.dataset.dropdown}`);
\t\t\tlet targetIsDropdown = dropdown == event.target;

\t\t\tif (dropdownButton == event.target) {
\t\t\t\treturn;
\t\t\t}

\t\t\tif (!targetIsDropdown && !dropdown.contains(event.target)) {
\t\t\t\tdropdown.classList.remove('show');
\t\t\t}
\t\t});
\t}
});

// We handle small screens
function handleSmallScreens() {
\tdocument.querySelector('.navbar-toggler').addEventListener('click', () => {
\t\tlet navbarMenu = document.querySelector('.navbar-menu');

\t\tif (!navbarMenu.classList.contains('active')) {
\t\t\tnavbarMenu.classList.add('active');
\t\t} else {
\t\t\tnavbarMenu.classList.remove('active');
\t\t}
\t});
}

handleSmallScreens();
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/header/header.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// We select the elements we need.
let dropdowns = document.querySelectorAll('.navbar .dropdown-toggler');
let dropdownIsOpen = false;

// We handle dropdown menus
if (dropdowns.length) {
\tdropdowns.forEach((dropdown) => {
\t\tdropdown.addEventListener('click', (event) => {
\t\t\tlet target = document.querySelector(`#\${event.target.dataset.dropdown}`);

\t\t\tif (target) {
\t\t\t\tif (target.classList.contains('show')) {
\t\t\t\t\ttarget.classList.remove('show');
\t\t\t\t\tdropdownIsOpen = false;
\t\t\t\t} else {
\t\t\t\t\ttarget.classList.add('show');
\t\t\t\t\tdropdownIsOpen = true;
\t\t\t\t}
\t\t\t}
\t\t});
\t});
}

// We add an event listener to the window to close the dropdowns when the user clicks outside of them.
window.addEventListener('mouseup', (event) => {
\tif (dropdownIsOpen) {
\t\tdropdowns.forEach((dropdownButton) => {
\t\t\tlet dropdown = document.querySelector(`#\${dropdownButton.dataset.dropdown}`);
\t\t\tlet targetIsDropdown = dropdown == event.target;

\t\t\tif (dropdownButton == event.target) {
\t\t\t\treturn;
\t\t\t}

\t\t\tif (!targetIsDropdown && !dropdown.contains(event.target)) {
\t\t\t\tdropdown.classList.remove('show');
\t\t\t}
\t\t});
\t}
});

// We handle small screens
function handleSmallScreens() {
\tdocument.querySelector('.navbar-toggler').addEventListener('click', () => {
\t\tlet navbarMenu = document.querySelector('.navbar-menu');

\t\tif (!navbarMenu.classList.contains('active')) {
\t\t\tnavbarMenu.classList.add('active');
\t\t} else {
\t\t\tnavbarMenu.classList.remove('active');
\t\t}
\t});
}

handleSmallScreens();
", "components/header/header.js", "/Users/sebastien/Sebbe's Cloud/School/OpenClassRooms/3 - OCR - Développeur d'application - PHP & Symfony/Projet 6 (120h)/P6 - Mission/0 - Code/templates/components/header/header.js");
    }
}
