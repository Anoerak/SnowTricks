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

/* components/carousel/carousel.js */
class __TwigTemplate_4cb6fdaec45017eac06bd9a4d33140b8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/carousel/carousel.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/carousel/carousel.js"));

        // line 1
        echo "// If we have a carousel on the page
let carouselTest = document.getElementsByClassName('carousel__container');

if (carouselTest.length > 0) {
\t// We select the elements we need
\tlet display = document.querySelector('[data-display]');
\tlet imgs = document.querySelectorAll('[data-img]');
\tlet leftBtn = document.querySelector('[data-btn-left]');
\tlet rightBtn = document.querySelector('[data-btn-right]');
\tlet imgSlider = document.querySelector('[data-img-container ]');

\t// We create the container based on the tagName
\tlet new_img = imgs[0].tagName === 'VIDEO' ? document.createElement('iframe') : document.createElement('img');
\tnew_img.src = imgs[0].src;

\t// We style the container
\tmediaStylingFunction = (media) => {
\t\tif (media.tagName === 'IFRAME') {
\t\t\tmedia.id = 'displayed_media';
\t\t\tmedia.width = 750;
\t\t\tmedia.height = 500;
\t\t\tmedia.allow = 'accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; fullscreen';
\t\t\tmedia.autoplay = 1;
\t\t} else {
\t\t\tmedia.id = 'displayed_media';
\t\t}
\t};

\tmediaStylingFunction(new_img);

\tdisplay.appendChild(new_img);

\tlet left = 0;

\t// We add event listeners to the buttons
\trightBtn.addEventListener('click', function next() {
\t\tif (left <= imgs.length - 2) {
\t\t\tleft++;
\t\t\timgSlider.style.transform = `translatex(calc(( \${left} * (-80px - 1.6rem)))`;
\t\t} else {
\t\t\tleft = 0;
\t\t\timgSlider.style.transform = `translatex(0)`;
\t\t}
\t});

\tleftBtn.addEventListener('click', function before() {
\t\tif (left > 0) {
\t\t\tleft--;
\t\t\timgSlider.style.transform = `translatex(calc(( -\${left} * (80px + 1.6rem)))`;
\t\t}
\t\tif (left == 0) {
\t\t\timgSlider.style.transform = `translatex(0)`;
\t\t}
\t});

\t// We add event listeners to the images and add logic to display the selected image
\timgs.forEach((img) => {
\t\timg.addEventListener('click', function (e) {
\t\t\tlet new_media = this.tagName === 'VIDEO' ? document.createElement('iframe') : document.createElement('img');
\t\t\tmediaStylingFunction(new_media);
\t\t\tif (new_media.src == undefined) {
\t\t\t\tnew_media.src = imgs[0].src;
\t\t\t}
\t\t\tnew_media.id = 'displayed_media';
\t\t\tnew_media.src = this.getAttribute('src');
\t\t\tlet oldChild = document.getElementById('displayed_media');
\t\t\toldChild.remove();
\t\t\tdisplay.appendChild(new_media);
\t\t});
\t});
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/carousel/carousel.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("// If we have a carousel on the page
let carouselTest = document.getElementsByClassName('carousel__container');

if (carouselTest.length > 0) {
\t// We select the elements we need
\tlet display = document.querySelector('[data-display]');
\tlet imgs = document.querySelectorAll('[data-img]');
\tlet leftBtn = document.querySelector('[data-btn-left]');
\tlet rightBtn = document.querySelector('[data-btn-right]');
\tlet imgSlider = document.querySelector('[data-img-container ]');

\t// We create the container based on the tagName
\tlet new_img = imgs[0].tagName === 'VIDEO' ? document.createElement('iframe') : document.createElement('img');
\tnew_img.src = imgs[0].src;

\t// We style the container
\tmediaStylingFunction = (media) => {
\t\tif (media.tagName === 'IFRAME') {
\t\t\tmedia.id = 'displayed_media';
\t\t\tmedia.width = 750;
\t\t\tmedia.height = 500;
\t\t\tmedia.allow = 'accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; fullscreen';
\t\t\tmedia.autoplay = 1;
\t\t} else {
\t\t\tmedia.id = 'displayed_media';
\t\t}
\t};

\tmediaStylingFunction(new_img);

\tdisplay.appendChild(new_img);

\tlet left = 0;

\t// We add event listeners to the buttons
\trightBtn.addEventListener('click', function next() {
\t\tif (left <= imgs.length - 2) {
\t\t\tleft++;
\t\t\timgSlider.style.transform = `translatex(calc(( \${left} * (-80px - 1.6rem)))`;
\t\t} else {
\t\t\tleft = 0;
\t\t\timgSlider.style.transform = `translatex(0)`;
\t\t}
\t});

\tleftBtn.addEventListener('click', function before() {
\t\tif (left > 0) {
\t\t\tleft--;
\t\t\timgSlider.style.transform = `translatex(calc(( -\${left} * (80px + 1.6rem)))`;
\t\t}
\t\tif (left == 0) {
\t\t\timgSlider.style.transform = `translatex(0)`;
\t\t}
\t});

\t// We add event listeners to the images and add logic to display the selected image
\timgs.forEach((img) => {
\t\timg.addEventListener('click', function (e) {
\t\t\tlet new_media = this.tagName === 'VIDEO' ? document.createElement('iframe') : document.createElement('img');
\t\t\tmediaStylingFunction(new_media);
\t\t\tif (new_media.src == undefined) {
\t\t\t\tnew_media.src = imgs[0].src;
\t\t\t}
\t\t\tnew_media.id = 'displayed_media';
\t\t\tnew_media.src = this.getAttribute('src');
\t\t\tlet oldChild = document.getElementById('displayed_media');
\t\t\toldChild.remove();
\t\t\tdisplay.appendChild(new_media);
\t\t});
\t});
}
", "components/carousel/carousel.js", "/Users/sebastien/Sebbe's Cloud/School/OpenClassRooms/3 - OCR - Développeur d'application - PHP & Symfony/Projet 6 (120h)/P6 - Mission/0 - Code/templates/components/carousel/carousel.js");
    }
}
