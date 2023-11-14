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

/* components/footer/_footer.scss */
class __TwigTemplate_16ac0f6dfcf9fb5026842f5110d483e6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/footer/_footer.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/footer/_footer.scss"));

        // line 1
        echo "@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap');
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css');

footer {
\t// position: fixed;
\tbackground: #fff;
\twidth: 100%;
\tmargin: auto;
\tbottom: 0;
\tleft: 0;
\tbox-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

\t.content {
\t\tmax-width: 1440px;
\t\tmargin: auto;
\t\tpadding: 30px 10px 40px 10px;

\t\t.top {
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tjustify-content: space-between;
\t\t\tmargin-bottom: 50px;

\t\t\t.logo-details {
\t\t\t\tdisplay: flex;
\t\t\t\tflex-direction: row;
\t\t\t\talign-items: flex-end;
\t\t\t\tjustify-content: end;
\t\t\t\tcolor: \$text-dark;
\t\t\t\tfont-size: 30px;

\t\t\t\tsvg {
\t\t\t\t\twidth: 75px;
\t\t\t\t\theight: 75px;
\t\t\t\t\tborder-radius: 100%;
\t\t\t\t\tfill: \$text-dark;
\t\t\t\t}
\t\t\t}

\t\t\t.media-icons {
\t\t\t\tdisplay: flex;

\t\t\t\ta {
\t\t\t\t\theight: 40px;
\t\t\t\t\twidth: 40px;
\t\t\t\t\tmargin: 0 8px;
\t\t\t\t\tborder-radius: 50%;
\t\t\t\t\ttext-align: center;
\t\t\t\t\tline-height: 40px;
\t\t\t\t\tcolor: #fff;
\t\t\t\t\tfont-size: 17px;
\t\t\t\t\ttext-decoration: none;
\t\t\t\t\ttransition: all 0.4s ease;

\t\t\t\t\t&:nth-child(1) {
\t\t\t\t\t\tbackground: #4267b2;
\t\t\t\t\t}

\t\t\t\t\t&:nth-child(1):hover {
\t\t\t\t\t\tcolor: #4267b2;
\t\t\t\t\t\tbackground: #fff;
\t\t\t\t\t\tbox-shadow: 0 0 0 2px #4267b2;
\t\t\t\t\t}

\t\t\t\t\t&:nth-child(2) {
\t\t\t\t\t\tbackground: #1da1f2;
\t\t\t\t\t}

\t\t\t\t\t&:nth-child(2):hover {
\t\t\t\t\t\tcolor: #1da1f2;
\t\t\t\t\t\tbackground: #fff;
\t\t\t\t\t\tbox-shadow: 0 0 0 2px #1da1f2;
\t\t\t\t\t}

\t\t\t\t\t&:nth-child(3) {
\t\t\t\t\t\tbackground: #e1306c;
\t\t\t\t\t}

\t\t\t\t\t:nth-child(3):hover {
\t\t\t\t\t\tcolor: #e1306c;
\t\t\t\t\t\tbackground: #fff;
\t\t\t\t\t\tbox-shadow: 0 0 0 2px #e1306c;
\t\t\t\t\t}

\t\t\t\t\t&:nth-child(4) {
\t\t\t\t\t\tbackground: #0077b5;
\t\t\t\t\t}

\t\t\t\t\t&:nth-child(4):hover {
\t\t\t\t\t\tcolor: #0077b5;
\t\t\t\t\t\tbackground: #fff;
\t\t\t\t\t\tbox-shadow: 0 0 0 2px #0077b5;
\t\t\t\t\t}

\t\t\t\t\t&:nth-child(5) {
\t\t\t\t\t\tbackground: #ff0000;
\t\t\t\t\t}

\t\t\t\t\t&:nth-child(5):hover {
\t\t\t\t\t\tcolor: #ff0000;
\t\t\t\t\t\tbackground: #fff;
\t\t\t\t\t\tbox-shadow: 0 0 0 2px #ff0000;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\t.link-boxes {
\t\t\twidth: 100%;
\t\t\tdisplay: flex;
\t\t\tjustify-content: space-between;

\t\t\t.box {
\t\t\t\twidth: calc(100% / 5 - 10px);

\t\t\t\t.link_name {
\t\t\t\t\tcolor: \$blue;
\t\t\t\t\tfont-size: 18px;
\t\t\t\t\tfont-weight: 400;
\t\t\t\t\tmargin-bottom: 10px;
\t\t\t\t\tposition: relative;

\t\t\t\t\t&::before {
\t\t\t\t\t\tcontent: '';
\t\t\t\t\t\tposition: absolute;
\t\t\t\t\t\tleft: 0;
\t\t\t\t\t\tbottom: -2px;
\t\t\t\t\t\theight: 2px;
\t\t\t\t\t\twidth: 35px;
\t\t\t\t\t\tbackground: \$text-dark;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tli {
\t\t\t\t\tmargin: 6px 0;
\t\t\t\t\tlist-style: none;

\t\t\t\t\ta {
\t\t\t\t\t\tcolor: \$blue;
\t\t\t\t\t\tfont-size: 14px;
\t\t\t\t\t\tfont-weight: 400;
\t\t\t\t\t\ttext-decoration: none;
\t\t\t\t\t\topacity: 0.8;
\t\t\t\t\t\ttransition: all 0.4s ease;

\t\t\t\t\t\t&:hover {
\t\t\t\t\t\t\topacity: 1;
\t\t\t\t\t\t\ttext-decoration: underline;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t.input-box {
\t\t\t\tmargin-right: 55px;

\t\t\t\tinput {
\t\t\t\t\theight: 40px;
\t\t\t\t\twidth: calc(100% + 55px);
\t\t\t\t\toutline: none;
\t\t\t\t\tborder: 2px solid #afafb6;
\t\t\t\t\tbackground: \$white;
\t\t\t\t\tborder-radius: 4px;
\t\t\t\t\tpadding: 0 15px;
\t\t\t\t\tfont-size: 15px;
\t\t\t\t\tcolor: \$text-dark;
\t\t\t\t\tmargin-top: 5px;

\t\t\t\t\t&::placeholder {
\t\t\t\t\t\tcolor: #afafb6;
\t\t\t\t\t\tfont-size: 16px;
\t\t\t\t\t}

\t\t\t\t\t&[type='button'] {
\t\t\t\t\t\tbackground: \$extra-light-blue;
\t\t\t\t\t\tcolor: \$blue;
\t\t\t\t\t\tborder: none;
\t\t\t\t\t\tfont-size: 18px;
\t\t\t\t\t\tfont-weight: 500;
\t\t\t\t\t\tmargin: 4px 0;
\t\t\t\t\t\topacity: 0.8;
\t\t\t\t\t\tcursor: pointer;
\t\t\t\t\t\ttransition: all 0.4s ease;
\t\t\t\t\t}

\t\t\t\t\t&[type='button']:hover {
\t\t\t\t\t\topacity: 1;
\t\t\t\t\t\tbackground-color: \$blue;
\t\t\t\t\t\tcolor: \$white;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t.bottom-details {
\t\twidth: 100%;
\t\tbackground: \$light-blue;

\t\t.bottom_text {
\t\t\tmax-width: 1250px;
\t\t\tmargin: auto;
\t\t\tpadding: 20px 40px;
\t\t\tdisplay: flex;
\t\t\tjustify-content: space-between;

\t\t\tspan,
\t\t\ta {
\t\t\t\tfont-size: 14px;
\t\t\t\tfont-weight: 300;
\t\t\t\tcolor: \$white;
\t\t\t\topacity: 0.8;
\t\t\t\ttext-decoration: none;
\t\t\t}

\t\t\ta {
\t\t\t\tmargin-right: 10px;

\t\t\t\t&:hover {
\t\t\t\t\topacity: 1;
\t\t\t\t\ttext-decoration: underline;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
}

/*
|--------------------------------------------------|
| Footer Media Queries
|--------------------------------------------------|
*/

@media (max-width: 900px) {
\tfooter .content .link-boxes {
\t\tflex-wrap: wrap;

\t\t.input-box {
\t\t\twidth: 40%;
\t\t\tmargin-top: 10px;
\t\t}
\t}
}

@media (max-width: 700px) {
\tfooter {
\t\tposition: relative;

\t\t.content {
\t\t\t.top {
\t\t\t\t.logo-details {
\t\t\t\t\tfont-size: 26px;
\t\t\t\t}

\t\t\t\t.media-icons a {
\t\t\t\t\theight: 35px;
\t\t\t\t\twidth: 35px;
\t\t\t\t\tfont-size: 14px;
\t\t\t\t\tline-height: 35px;
\t\t\t\t}
\t\t\t}

\t\t\t.link-boxes {
\t\t\t\t.box {
\t\t\t\t\twidth: calc(100% / 3 - 10px);
\t\t\t\t}

\t\t\t\t.input-box {
\t\t\t\t\twidth: 60%;
\t\t\t\t}
\t\t\t}
\t\t}

\t\t.bottom-details {
\t\t\t.bottom_text {

\t\t\t\tspan,
\t\t\t\ta {
\t\t\t\t\tfont-size: 12px;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
}

@media (max-width: 520px) {
\tfooter {
\t\t&::before {
\t\t\ttop: 145px;
\t\t}

\t\t.content {
\t\t\t.top {
\t\t\t\tflex-direction: column;

\t\t\t\t.media-icons {
\t\t\t\t\tmargin-top: 16px;
\t\t\t\t}
\t\t\t}

\t\t\t.link-boxes {
\t\t\t\t.box {
\t\t\t\t\twidth: calc(100% / 2 - 10px);
\t\t\t\t}

\t\t\t\t.input-box {
\t\t\t\t\twidth: 100%;
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
        return "components/footer/_footer.scss";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap');
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css');

footer {
\t// position: fixed;
\tbackground: #fff;
\twidth: 100%;
\tmargin: auto;
\tbottom: 0;
\tleft: 0;
\tbox-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

\t.content {
\t\tmax-width: 1440px;
\t\tmargin: auto;
\t\tpadding: 30px 10px 40px 10px;

\t\t.top {
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tjustify-content: space-between;
\t\t\tmargin-bottom: 50px;

\t\t\t.logo-details {
\t\t\t\tdisplay: flex;
\t\t\t\tflex-direction: row;
\t\t\t\talign-items: flex-end;
\t\t\t\tjustify-content: end;
\t\t\t\tcolor: \$text-dark;
\t\t\t\tfont-size: 30px;

\t\t\t\tsvg {
\t\t\t\t\twidth: 75px;
\t\t\t\t\theight: 75px;
\t\t\t\t\tborder-radius: 100%;
\t\t\t\t\tfill: \$text-dark;
\t\t\t\t}
\t\t\t}

\t\t\t.media-icons {
\t\t\t\tdisplay: flex;

\t\t\t\ta {
\t\t\t\t\theight: 40px;
\t\t\t\t\twidth: 40px;
\t\t\t\t\tmargin: 0 8px;
\t\t\t\t\tborder-radius: 50%;
\t\t\t\t\ttext-align: center;
\t\t\t\t\tline-height: 40px;
\t\t\t\t\tcolor: #fff;
\t\t\t\t\tfont-size: 17px;
\t\t\t\t\ttext-decoration: none;
\t\t\t\t\ttransition: all 0.4s ease;

\t\t\t\t\t&:nth-child(1) {
\t\t\t\t\t\tbackground: #4267b2;
\t\t\t\t\t}

\t\t\t\t\t&:nth-child(1):hover {
\t\t\t\t\t\tcolor: #4267b2;
\t\t\t\t\t\tbackground: #fff;
\t\t\t\t\t\tbox-shadow: 0 0 0 2px #4267b2;
\t\t\t\t\t}

\t\t\t\t\t&:nth-child(2) {
\t\t\t\t\t\tbackground: #1da1f2;
\t\t\t\t\t}

\t\t\t\t\t&:nth-child(2):hover {
\t\t\t\t\t\tcolor: #1da1f2;
\t\t\t\t\t\tbackground: #fff;
\t\t\t\t\t\tbox-shadow: 0 0 0 2px #1da1f2;
\t\t\t\t\t}

\t\t\t\t\t&:nth-child(3) {
\t\t\t\t\t\tbackground: #e1306c;
\t\t\t\t\t}

\t\t\t\t\t:nth-child(3):hover {
\t\t\t\t\t\tcolor: #e1306c;
\t\t\t\t\t\tbackground: #fff;
\t\t\t\t\t\tbox-shadow: 0 0 0 2px #e1306c;
\t\t\t\t\t}

\t\t\t\t\t&:nth-child(4) {
\t\t\t\t\t\tbackground: #0077b5;
\t\t\t\t\t}

\t\t\t\t\t&:nth-child(4):hover {
\t\t\t\t\t\tcolor: #0077b5;
\t\t\t\t\t\tbackground: #fff;
\t\t\t\t\t\tbox-shadow: 0 0 0 2px #0077b5;
\t\t\t\t\t}

\t\t\t\t\t&:nth-child(5) {
\t\t\t\t\t\tbackground: #ff0000;
\t\t\t\t\t}

\t\t\t\t\t&:nth-child(5):hover {
\t\t\t\t\t\tcolor: #ff0000;
\t\t\t\t\t\tbackground: #fff;
\t\t\t\t\t\tbox-shadow: 0 0 0 2px #ff0000;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\t.link-boxes {
\t\t\twidth: 100%;
\t\t\tdisplay: flex;
\t\t\tjustify-content: space-between;

\t\t\t.box {
\t\t\t\twidth: calc(100% / 5 - 10px);

\t\t\t\t.link_name {
\t\t\t\t\tcolor: \$blue;
\t\t\t\t\tfont-size: 18px;
\t\t\t\t\tfont-weight: 400;
\t\t\t\t\tmargin-bottom: 10px;
\t\t\t\t\tposition: relative;

\t\t\t\t\t&::before {
\t\t\t\t\t\tcontent: '';
\t\t\t\t\t\tposition: absolute;
\t\t\t\t\t\tleft: 0;
\t\t\t\t\t\tbottom: -2px;
\t\t\t\t\t\theight: 2px;
\t\t\t\t\t\twidth: 35px;
\t\t\t\t\t\tbackground: \$text-dark;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tli {
\t\t\t\t\tmargin: 6px 0;
\t\t\t\t\tlist-style: none;

\t\t\t\t\ta {
\t\t\t\t\t\tcolor: \$blue;
\t\t\t\t\t\tfont-size: 14px;
\t\t\t\t\t\tfont-weight: 400;
\t\t\t\t\t\ttext-decoration: none;
\t\t\t\t\t\topacity: 0.8;
\t\t\t\t\t\ttransition: all 0.4s ease;

\t\t\t\t\t\t&:hover {
\t\t\t\t\t\t\topacity: 1;
\t\t\t\t\t\t\ttext-decoration: underline;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t.input-box {
\t\t\t\tmargin-right: 55px;

\t\t\t\tinput {
\t\t\t\t\theight: 40px;
\t\t\t\t\twidth: calc(100% + 55px);
\t\t\t\t\toutline: none;
\t\t\t\t\tborder: 2px solid #afafb6;
\t\t\t\t\tbackground: \$white;
\t\t\t\t\tborder-radius: 4px;
\t\t\t\t\tpadding: 0 15px;
\t\t\t\t\tfont-size: 15px;
\t\t\t\t\tcolor: \$text-dark;
\t\t\t\t\tmargin-top: 5px;

\t\t\t\t\t&::placeholder {
\t\t\t\t\t\tcolor: #afafb6;
\t\t\t\t\t\tfont-size: 16px;
\t\t\t\t\t}

\t\t\t\t\t&[type='button'] {
\t\t\t\t\t\tbackground: \$extra-light-blue;
\t\t\t\t\t\tcolor: \$blue;
\t\t\t\t\t\tborder: none;
\t\t\t\t\t\tfont-size: 18px;
\t\t\t\t\t\tfont-weight: 500;
\t\t\t\t\t\tmargin: 4px 0;
\t\t\t\t\t\topacity: 0.8;
\t\t\t\t\t\tcursor: pointer;
\t\t\t\t\t\ttransition: all 0.4s ease;
\t\t\t\t\t}

\t\t\t\t\t&[type='button']:hover {
\t\t\t\t\t\topacity: 1;
\t\t\t\t\t\tbackground-color: \$blue;
\t\t\t\t\t\tcolor: \$white;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}

\t.bottom-details {
\t\twidth: 100%;
\t\tbackground: \$light-blue;

\t\t.bottom_text {
\t\t\tmax-width: 1250px;
\t\t\tmargin: auto;
\t\t\tpadding: 20px 40px;
\t\t\tdisplay: flex;
\t\t\tjustify-content: space-between;

\t\t\tspan,
\t\t\ta {
\t\t\t\tfont-size: 14px;
\t\t\t\tfont-weight: 300;
\t\t\t\tcolor: \$white;
\t\t\t\topacity: 0.8;
\t\t\t\ttext-decoration: none;
\t\t\t}

\t\t\ta {
\t\t\t\tmargin-right: 10px;

\t\t\t\t&:hover {
\t\t\t\t\topacity: 1;
\t\t\t\t\ttext-decoration: underline;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
}

/*
|--------------------------------------------------|
| Footer Media Queries
|--------------------------------------------------|
*/

@media (max-width: 900px) {
\tfooter .content .link-boxes {
\t\tflex-wrap: wrap;

\t\t.input-box {
\t\t\twidth: 40%;
\t\t\tmargin-top: 10px;
\t\t}
\t}
}

@media (max-width: 700px) {
\tfooter {
\t\tposition: relative;

\t\t.content {
\t\t\t.top {
\t\t\t\t.logo-details {
\t\t\t\t\tfont-size: 26px;
\t\t\t\t}

\t\t\t\t.media-icons a {
\t\t\t\t\theight: 35px;
\t\t\t\t\twidth: 35px;
\t\t\t\t\tfont-size: 14px;
\t\t\t\t\tline-height: 35px;
\t\t\t\t}
\t\t\t}

\t\t\t.link-boxes {
\t\t\t\t.box {
\t\t\t\t\twidth: calc(100% / 3 - 10px);
\t\t\t\t}

\t\t\t\t.input-box {
\t\t\t\t\twidth: 60%;
\t\t\t\t}
\t\t\t}
\t\t}

\t\t.bottom-details {
\t\t\t.bottom_text {

\t\t\t\tspan,
\t\t\t\ta {
\t\t\t\t\tfont-size: 12px;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
}

@media (max-width: 520px) {
\tfooter {
\t\t&::before {
\t\t\ttop: 145px;
\t\t}

\t\t.content {
\t\t\t.top {
\t\t\t\tflex-direction: column;

\t\t\t\t.media-icons {
\t\t\t\t\tmargin-top: 16px;
\t\t\t\t}
\t\t\t}

\t\t\t.link-boxes {
\t\t\t\t.box {
\t\t\t\t\twidth: calc(100% / 2 - 10px);
\t\t\t\t}

\t\t\t\t.input-box {
\t\t\t\t\twidth: 100%;
\t\t\t\t}
\t\t\t}
\t\t}
\t}
}
", "components/footer/_footer.scss", "/Users/sebastien/Sebbe's Cloud/School/OpenClassRooms/3 - OCR - Développeur d'application - PHP & Symfony/Projet 6 (120h)/P6 - Mission/0 - Code/templates/components/footer/_footer.scss");
    }
}
