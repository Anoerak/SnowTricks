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

/* home/display_tricks/display_tricks.js */
class __TwigTemplate_b1ff425c273eecd96d806a58c4cf221e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/display_tricks/display_tricks.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/display_tricks/display_tricks.js"));

        // line 1
        echo "// We get the html head title
const headTitle = document.head.querySelector('title').innerHTML;

if (headTitle.includes('Home')) {
\t// We grab the display-more_button and add an event listener.
\tconst displayMoreButton = document.getElementById('display-more_button');
\tdisplayMoreButton.addEventListener('click', displayMoreTricks);

\tfunction displayMoreTricks() {
\t\tgetMoreTricks(getLastTrickNumber());
\t}

\t// We get the number of tricks displayed on screen
\tfunction getLastTrickNumber() {
\t\tlet tricksArray = document.getElementsByClassName('trick');
\t\tlet lastTrickNumber = parseInt(tricksArray.length) - 1;
\t\treturn lastTrickNumber;
\t}

\t// We get the sum of trick available in the database
\tfunction getTricksCount() {
\t\tlet tricksCount = document.getElementById('tricks').firstElementChild.id.replace('tricks_count_', '');
\t\tlet displayedTricksCount = parseInt(document.getElementsByClassName('trick').length);
\t\tlet tricksMarker = parseInt(tricksCount) - displayedTricksCount;
\t\treturn tricksMarker;
\t}

\t// We query for more tricks
\tfunction getMoreTricks(lastTrickIndex) {
\t\tlet url = 'https://localhost:8000/load-more-tricks/' + lastTrickIndex + '/' + getTricksCount();
\t\tconsole.log(url);
\t\tfetch(url)
\t\t\t.then(function (response) {
\t\t\t\treturn response.text();
\t\t\t})
\t\t\t.then(function (html) {
\t\t\t\tlet tricks = document.getElementById('tricks_list');
\t\t\t\tlet loadMoreButton = document.getElementById('load_more_card');
\t\t\t\t// We remove the load more button from the tricks list
\t\t\t\ttricks.removeChild(loadMoreButton);
\t\t\t\t// We insert the new tricks before the load more button in the tricks list
\t\t\t\ttricks.insertAdjacentHTML('beforeend', html);
\t\t\t\t// We check if there an id 'tricks_count_' + lastTrickIndex in the tricks list
\t\t\t\t// If there is no id 'tricks_count_' + lastTrickIndex, it means that there is more tricks to display
\t\t\t\t// So we add the load more button
\t\t\t\tif (!document.getElementById('tricks_count_' + parseInt(getLastTrickNumber() + 1))) {
\t\t\t\t\t// We insert the load more button at the end of the tricks list
\t\t\t\t\ttricks.insertAdjacentHTML('beforeend', loadMoreButton.outerHTML);
\t\t\t\t}
\t\t\t\tconst displayMoreButton = document.getElementById('display-more_button');
\t\t\t\tdisplayMoreButton.addEventListener('click', displayMoreTricks);
\t\t\t})
\t\t\t.catch(function (error) {
\t\t\t\tconsole.log(error);
\t\t\t});
\t}
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/display_tricks/display_tricks.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// We get the html head title
const headTitle = document.head.querySelector('title').innerHTML;

if (headTitle.includes('Home')) {
\t// We grab the display-more_button and add an event listener.
\tconst displayMoreButton = document.getElementById('display-more_button');
\tdisplayMoreButton.addEventListener('click', displayMoreTricks);

\tfunction displayMoreTricks() {
\t\tgetMoreTricks(getLastTrickNumber());
\t}

\t// We get the number of tricks displayed on screen
\tfunction getLastTrickNumber() {
\t\tlet tricksArray = document.getElementsByClassName('trick');
\t\tlet lastTrickNumber = parseInt(tricksArray.length) - 1;
\t\treturn lastTrickNumber;
\t}

\t// We get the sum of trick available in the database
\tfunction getTricksCount() {
\t\tlet tricksCount = document.getElementById('tricks').firstElementChild.id.replace('tricks_count_', '');
\t\tlet displayedTricksCount = parseInt(document.getElementsByClassName('trick').length);
\t\tlet tricksMarker = parseInt(tricksCount) - displayedTricksCount;
\t\treturn tricksMarker;
\t}

\t// We query for more tricks
\tfunction getMoreTricks(lastTrickIndex) {
\t\tlet url = 'https://localhost:8000/load-more-tricks/' + lastTrickIndex + '/' + getTricksCount();
\t\tconsole.log(url);
\t\tfetch(url)
\t\t\t.then(function (response) {
\t\t\t\treturn response.text();
\t\t\t})
\t\t\t.then(function (html) {
\t\t\t\tlet tricks = document.getElementById('tricks_list');
\t\t\t\tlet loadMoreButton = document.getElementById('load_more_card');
\t\t\t\t// We remove the load more button from the tricks list
\t\t\t\ttricks.removeChild(loadMoreButton);
\t\t\t\t// We insert the new tricks before the load more button in the tricks list
\t\t\t\ttricks.insertAdjacentHTML('beforeend', html);
\t\t\t\t// We check if there an id 'tricks_count_' + lastTrickIndex in the tricks list
\t\t\t\t// If there is no id 'tricks_count_' + lastTrickIndex, it means that there is more tricks to display
\t\t\t\t// So we add the load more button
\t\t\t\tif (!document.getElementById('tricks_count_' + parseInt(getLastTrickNumber() + 1))) {
\t\t\t\t\t// We insert the load more button at the end of the tricks list
\t\t\t\t\ttricks.insertAdjacentHTML('beforeend', loadMoreButton.outerHTML);
\t\t\t\t}
\t\t\t\tconst displayMoreButton = document.getElementById('display-more_button');
\t\t\t\tdisplayMoreButton.addEventListener('click', displayMoreTricks);
\t\t\t})
\t\t\t.catch(function (error) {
\t\t\t\tconsole.log(error);
\t\t\t});
\t}
}
", "home/display_tricks/display_tricks.js", "/Users/sebastien/Sebbe's Cloud/School/OpenClassRooms/3 - OCR - Développeur d'application - PHP & Symfony/Projet 6 (120h)/P6 - Mission/0 - Code/templates/home/display_tricks/display_tricks.js");
    }
}
