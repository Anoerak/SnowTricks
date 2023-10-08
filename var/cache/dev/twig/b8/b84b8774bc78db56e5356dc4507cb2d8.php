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

/* trick/edit/edit_trick.js */
class __TwigTemplate_fdc9b19009471627940ca98e8ac17c46 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/edit/edit_trick.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/edit/edit_trick.js"));

        // line 1
        echo "// We get the html head title
const headTitle = document.head.querySelector('title').innerHTML;

if (headTitle.includes('Edit') || headTitle.includes('New')) {
\t// We define a variable based on the page title.
\tlet page = headTitle.includes('Edit') ? 'edit' : 'add';
\t// We grab the button to add input fields
\tlet addLinkButton = document.getElementById('add-video-link-button');
\t// We define two counters for the input fields and the remove button associate with it
\tlet addLinkCounter = 0;
\tlet removeLinkCounter = 0;
\t// We write functions to increment those counter
\tfunction incrementAddLinkCounter() {
\t\taddLinkCounter++;
\t\treturn addLinkCounter;
\t}
\tfunction incrementRemoveLinkCounter() {
\t\tremoveLinkCounter++;
\t\treturn removeLinkCounter;
\t}
\t// We had EventListener the button to add input fields
\taddLinkButton.addEventListener('click', function (e) {
\t\te.preventDefault();
\t\t// We increment the link counter of 1
\t\tlet linkCounter = incrementAddLinkCounter();
\t\t// We create the new div for the input field element and its button
\t\tlet newLink = document.createElement('div');
\t\tnewLink.className = 'video__link__added__container';
\t\t// We create the input field
\t\tlet newInput = document.createElement('input');
\t\tnewInput.type = 'text';
\t\tnewInput.id = page + '-trick-embed-video-links-' + linkCounter;
\t\tnewInput.name = page + '_trick[embed_video_links][' + linkCounter + ']';
\t\tnewInput.value = '';
\t\tnewInput.placeholder = 'https://www.youtube.com/watch?v=xxxxxxxxxxx';
\t\tnewInput.className = 'video__link__added';
\t\t// We create the remove button
\t\tlet removeLinkButton = document.createElement('button');
\t\tremoveLinkButton.type = 'button';
\t\tremoveLinkButton.id = 'remove-video-link-button-' + incrementRemoveLinkCounter();
\t\tremoveLinkButton.className = 'remove__video__link__button';
\t\tremoveLinkButton.innerHTML = 'X';
\t\t// We had everything to the DOM
\t\tnewLink.appendChild(newInput);
\t\tnewLink.appendChild(removeLinkButton);
\t\tlet linkContainer = document.getElementById('add-video-links');
\t\tlinkContainer.appendChild(newLink);
\t\t// We add event listeners to the buttons and add logic to remove the selected link
\t\tlet removeLinkButtons = document.getElementsByClassName('remove__video__link__button');
\t\tfor (let i = 0; i < removeLinkButtons.length; i++) {
\t\t\tremoveLinkButtons[i].addEventListener('click', function (e) {
\t\t\t\te.preventDefault();
\t\t\t\tlet linkToRemove = this.parentNode;
\t\t\t\tlinkToRemove.remove();
\t\t\t});
\t\t}
\t});
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "trick/edit/edit_trick.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// We get the html head title
const headTitle = document.head.querySelector('title').innerHTML;

if (headTitle.includes('Edit') || headTitle.includes('New')) {
\t// We define a variable based on the page title.
\tlet page = headTitle.includes('Edit') ? 'edit' : 'add';
\t// We grab the button to add input fields
\tlet addLinkButton = document.getElementById('add-video-link-button');
\t// We define two counters for the input fields and the remove button associate with it
\tlet addLinkCounter = 0;
\tlet removeLinkCounter = 0;
\t// We write functions to increment those counter
\tfunction incrementAddLinkCounter() {
\t\taddLinkCounter++;
\t\treturn addLinkCounter;
\t}
\tfunction incrementRemoveLinkCounter() {
\t\tremoveLinkCounter++;
\t\treturn removeLinkCounter;
\t}
\t// We had EventListener the button to add input fields
\taddLinkButton.addEventListener('click', function (e) {
\t\te.preventDefault();
\t\t// We increment the link counter of 1
\t\tlet linkCounter = incrementAddLinkCounter();
\t\t// We create the new div for the input field element and its button
\t\tlet newLink = document.createElement('div');
\t\tnewLink.className = 'video__link__added__container';
\t\t// We create the input field
\t\tlet newInput = document.createElement('input');
\t\tnewInput.type = 'text';
\t\tnewInput.id = page + '-trick-embed-video-links-' + linkCounter;
\t\tnewInput.name = page + '_trick[embed_video_links][' + linkCounter + ']';
\t\tnewInput.value = '';
\t\tnewInput.placeholder = 'https://www.youtube.com/watch?v=xxxxxxxxxxx';
\t\tnewInput.className = 'video__link__added';
\t\t// We create the remove button
\t\tlet removeLinkButton = document.createElement('button');
\t\tremoveLinkButton.type = 'button';
\t\tremoveLinkButton.id = 'remove-video-link-button-' + incrementRemoveLinkCounter();
\t\tremoveLinkButton.className = 'remove__video__link__button';
\t\tremoveLinkButton.innerHTML = 'X';
\t\t// We had everything to the DOM
\t\tnewLink.appendChild(newInput);
\t\tnewLink.appendChild(removeLinkButton);
\t\tlet linkContainer = document.getElementById('add-video-links');
\t\tlinkContainer.appendChild(newLink);
\t\t// We add event listeners to the buttons and add logic to remove the selected link
\t\tlet removeLinkButtons = document.getElementsByClassName('remove__video__link__button');
\t\tfor (let i = 0; i < removeLinkButtons.length; i++) {
\t\t\tremoveLinkButtons[i].addEventListener('click', function (e) {
\t\t\t\te.preventDefault();
\t\t\t\tlet linkToRemove = this.parentNode;
\t\t\t\tlinkToRemove.remove();
\t\t\t});
\t\t}
\t});
}
", "trick/edit/edit_trick.js", "C:\\Users\\anorak\\SynologyDrive\\OpenClassRooms\\3 - OCR - Développeur d'application - PHP & Symfony\\Projet 6 (120h)\\P6 - Mission\\0 - Code\\templates\\trick\\edit\\edit_trick.js");
    }
}
