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

/* components/modals/delete_trick.js */
class __TwigTemplate_9e3143b5c374f9331eb9e6466c529391 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/modals/delete_trick.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/modals/delete_trick.js"));

        // line 1
        echo "// We get the html head title
const headTitle = document.head.querySelector('title').innerHTML;
console.log(headTitle);

if (headTitle.includes('Home') || headTitle.includes('Category')) {
\t// We grab the delete_trick_buttons.
\tconst deleteTrickButton = document.getElementsByClassName('delete_trick_button');

\t// We loop through the delete_trick_buttons and add an event listener on each one..
\tfor (let i = 0; i < deleteTrickButton.length; i++) {
\t\tdeleteTrickButton[i].addEventListener('click', getTrickId);
\t\tfunction getTrickId() {
\t\t\t// On click, we display the modal.
\t\t\tmodalManagement();
\t\t\t// Then we get the trick.id and pass it to the delete_button
\t\t\tconst trickId = deleteTrickButton[i].getAttribute('id');
\t\t\tdocument.getElementById('delete_button').setAttribute('data-trick-id', trickId);
\t\t}
\t}

\tfunction modalManagement() {
\t\t// we grab the modal and display it as a block.
\t\tlet modal = document.getElementById('delete_trick_modal');
\t\tmodal.style.display = 'block';

\t\t// We grab the close button and cancel button and add event listener to allow to close the modal.
\t\tlet modalCloseButton = document.getElementById('close_modal_button');
\t\tmodalCloseButton.addEventListener('click', closeModal);
\t\tlet modalCancelButton = document.getElementById('cancel_delete_button');
\t\tmodalCancelButton.addEventListener('click', closeModal);

\t\tdocument.getElementById('delete_button').addEventListener('click', deleteTrick);

\t\t// We grab the window and add an event listener to close the modal if the user clicks outside of it.
\t\twindow.addEventListener('click', function (event) {
\t\t\tif (event.target == modal) {
\t\t\t\tmodal.style.display = 'none';
\t\t\t}
\t\t});

\t\tfunction closeModal() {
\t\t\tmodal.style.display = 'none';
\t\t}

\t\tfunction deleteTrick() {
\t\t\t// We grab the trick.id from the delete_button and pass it to the url.
\t\t\tlet trickToDelete = document.getElementById('delete_button').getAttribute('data-trick-id');
\t\t\tlet url = 'https://127.0.0.1:8000/trick/' + trickToDelete + '/delete';
\t\t\t// We fetch the url and use the Symfony controller to delete the trick.
\t\t\t// We wait for the response and if it's ok, we close the modal.
\t\t\tfetch(url)
\t\t\t\t.then((response) => {
\t\t\t\t\tif (response.ok) {
\t\t\t\t\t\tmodal.style.display = 'none';
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\t.then((data) => {
\t\t\t\t\t// We reload the page.
\t\t\t\t\twindow.location.reload();
\t\t\t\t});
\t\t}
\t}
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/modals/delete_trick.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// We get the html head title
const headTitle = document.head.querySelector('title').innerHTML;
console.log(headTitle);

if (headTitle.includes('Home') || headTitle.includes('Category')) {
\t// We grab the delete_trick_buttons.
\tconst deleteTrickButton = document.getElementsByClassName('delete_trick_button');

\t// We loop through the delete_trick_buttons and add an event listener on each one..
\tfor (let i = 0; i < deleteTrickButton.length; i++) {
\t\tdeleteTrickButton[i].addEventListener('click', getTrickId);
\t\tfunction getTrickId() {
\t\t\t// On click, we display the modal.
\t\t\tmodalManagement();
\t\t\t// Then we get the trick.id and pass it to the delete_button
\t\t\tconst trickId = deleteTrickButton[i].getAttribute('id');
\t\t\tdocument.getElementById('delete_button').setAttribute('data-trick-id', trickId);
\t\t}
\t}

\tfunction modalManagement() {
\t\t// we grab the modal and display it as a block.
\t\tlet modal = document.getElementById('delete_trick_modal');
\t\tmodal.style.display = 'block';

\t\t// We grab the close button and cancel button and add event listener to allow to close the modal.
\t\tlet modalCloseButton = document.getElementById('close_modal_button');
\t\tmodalCloseButton.addEventListener('click', closeModal);
\t\tlet modalCancelButton = document.getElementById('cancel_delete_button');
\t\tmodalCancelButton.addEventListener('click', closeModal);

\t\tdocument.getElementById('delete_button').addEventListener('click', deleteTrick);

\t\t// We grab the window and add an event listener to close the modal if the user clicks outside of it.
\t\twindow.addEventListener('click', function (event) {
\t\t\tif (event.target == modal) {
\t\t\t\tmodal.style.display = 'none';
\t\t\t}
\t\t});

\t\tfunction closeModal() {
\t\t\tmodal.style.display = 'none';
\t\t}

\t\tfunction deleteTrick() {
\t\t\t// We grab the trick.id from the delete_button and pass it to the url.
\t\t\tlet trickToDelete = document.getElementById('delete_button').getAttribute('data-trick-id');
\t\t\tlet url = 'https://127.0.0.1:8000/trick/' + trickToDelete + '/delete';
\t\t\t// We fetch the url and use the Symfony controller to delete the trick.
\t\t\t// We wait for the response and if it's ok, we close the modal.
\t\t\tfetch(url)
\t\t\t\t.then((response) => {
\t\t\t\t\tif (response.ok) {
\t\t\t\t\t\tmodal.style.display = 'none';
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\t.then((data) => {
\t\t\t\t\t// We reload the page.
\t\t\t\t\twindow.location.reload();
\t\t\t\t});
\t\t}
\t}
}
", "components/modals/delete_trick.js", "/Users/sebastien/Sebbe's Cloud/School/OpenClassRooms/3 - OCR - Développeur d'application - PHP & Symfony/Projet 6 (120h)/P6 - Mission/0 - Code/templates/components/modals/delete_trick.js");
    }
}
