<?php

/* index.html.twig */
class __TwigTemplate_0bb864c16e3f54fd2970ce016b51e699126bb426ef0a2fe6b1fae78a87baee12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'menu_auth' => array($this, 'block_menu_auth'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50456aae9d1c315ae3f57705d33b5dd1865c51065e397d0ca138d20120d2425b = $this->env->getExtension("native_profiler");
        $__internal_50456aae9d1c315ae3f57705d33b5dd1865c51065e397d0ca138d20120d2425b->enter($__internal_50456aae9d1c315ae3f57705d33b5dd1865c51065e397d0ca138d20120d2425b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50456aae9d1c315ae3f57705d33b5dd1865c51065e397d0ca138d20120d2425b->leave($__internal_50456aae9d1c315ae3f57705d33b5dd1865c51065e397d0ca138d20120d2425b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc546c4fd3ca36ac94ec0bef32598f009ee8dbd3c35c3d11b4d444ec113eb9e6 = $this->env->getExtension("native_profiler");
        $__internal_cc546c4fd3ca36ac94ec0bef32598f009ee8dbd3c35c3d11b4d444ec113eb9e6->enter($__internal_cc546c4fd3ca36ac94ec0bef32598f009ee8dbd3c35c3d11b4d444ec113eb9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_cc546c4fd3ca36ac94ec0bef32598f009ee8dbd3c35c3d11b4d444ec113eb9e6->leave($__internal_cc546c4fd3ca36ac94ec0bef32598f009ee8dbd3c35c3d11b4d444ec113eb9e6_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d5b2e172512cdc0d48fcb161b895036dd9a2e80e6cb1c1c7ae4a41fbe1c6b68 = $this->env->getExtension("native_profiler");
        $__internal_8d5b2e172512cdc0d48fcb161b895036dd9a2e80e6cb1c1c7ae4a41fbe1c6b68->enter($__internal_8d5b2e172512cdc0d48fcb161b895036dd9a2e80e6cb1c1c7ae4a41fbe1c6b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_8d5b2e172512cdc0d48fcb161b895036dd9a2e80e6cb1c1c7ae4a41fbe1c6b68->leave($__internal_8d5b2e172512cdc0d48fcb161b895036dd9a2e80e6cb1c1c7ae4a41fbe1c6b68_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_7274862ef4635037cd1efbf00a1136e624d1bd949bc203b41486cce808572e19 = $this->env->getExtension("native_profiler");
        $__internal_7274862ef4635037cd1efbf00a1136e624d1bd949bc203b41486cce808572e19->enter($__internal_7274862ef4635037cd1efbf00a1136e624d1bd949bc203b41486cce808572e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "

    <div id=\"main_div\">
    <div id='sub_head'></div>
        <header>
            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"/>

";
        // line 16
        $this->displayBlock('menu_auth', $context, $blocks);
        // line 17
        echo "        </header>
\t<section id=\"slide_div\">
\t\t<div id=\"slider\">
\t\t\t<a href=\"#\">
\t\t\t\t<div id=\"slides\">
\t\t\t\t\t<img class=\"slide\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/elec.jpg"), "html", null, true);
        echo "\"/>
\t\t\t\t\t<img class=\"slide\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide1.jpeg"), "html", null, true);
        echo "\"/>
\t\t\t\t\t<img class=\"slide\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide2.JPG"), "html", null, true);
        echo "\" />
\t\t\t\t\t<img class=\"slide\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide3.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t<img class=\"slide\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide4.jpg"), "html", null, true);
        echo "\"/>
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<img id=\"leftArrow\" class=\"arrow\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrowLeft.svg"), "html", null, true);
        echo "\"/>
\t\t\t<img id=\"rightArrow\" class=\"arrow\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrowRight.svg"), "html", null, true);
        echo "\"/>
\t\t\t<div id=\"bullets\"/>
\t\t</div>
\t</section>

\t<section id=\"button_div\">
\t\t<div class=\"categories\">
\t\t<li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("home_categories");
        echo "\">Categories</a></li>

\t\t</div>
\t\t<div class=\"promo\">

\t\t</div>
\t\t<div class=\"other\">

\t\t</div>
\t</section>

\t<section id=\"pst_div\">
\t\t<div id=\"pst_slide\">
\t\t\t<a href=\"#\">
\t\t\t\t<div id=\"pst_slides\">
\t\t\t\t\t<img class=\"pst_slide\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/elec.jpg"), "html", null, true);
        echo "\"/>
\t\t\t\t\t<img class=\"pst_slide\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide1.jpeg"), "html", null, true);
        echo "\"/>
\t\t\t\t\t<img class=\"pst_slide\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide2.JPG"), "html", null, true);
        echo "\" />
\t\t\t\t\t<img class=\"pst_slide\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide3.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t<img class=\"pst_slide\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide4.jpg"), "html", null, true);
        echo "\"/>
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<img id=\"gaucheArrow\" class=\"fleches\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrowLeft.svg"), "html", null, true);
        echo "\"/>
\t\t\t<img id=\"droiteArrow\" class=\"fleches\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrowRight.svg"), "html", null, true);
        echo "\"/>
\t\t\t<div id=\"points\"/>
\t\t</div>
\t</div>
</section>

";
        
        $__internal_7274862ef4635037cd1efbf00a1136e624d1bd949bc203b41486cce808572e19->leave($__internal_7274862ef4635037cd1efbf00a1136e624d1bd949bc203b41486cce808572e19_prof);

    }

    // line 16
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_382464184319ca403dbf6c9161c08c08a2d51a488185fe0c5259314cefe3c02f = $this->env->getExtension("native_profiler");
        $__internal_382464184319ca403dbf6c9161c08c08a2d51a488185fe0c5259314cefe3c02f->enter($__internal_382464184319ca403dbf6c9161c08c08a2d51a488185fe0c5259314cefe3c02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_382464184319ca403dbf6c9161c08c08a2d51a488185fe0c5259314cefe3c02f->leave($__internal_382464184319ca403dbf6c9161c08c08a2d51a488185fe0c5259314cefe3c02f_prof);

    }

    // line 68
    public function block_footer($context, array $blocks = array())
    {
        $__internal_21329b7567f43c40b4ba30effed1b84dcb002127815d9dd46f855ed9271b4de5 = $this->env->getExtension("native_profiler");
        $__internal_21329b7567f43c40b4ba30effed1b84dcb002127815d9dd46f855ed9271b4de5->enter($__internal_21329b7567f43c40b4ba30effed1b84dcb002127815d9dd46f855ed9271b4de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 69
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_21329b7567f43c40b4ba30effed1b84dcb002127815d9dd46f855ed9271b4de5->leave($__internal_21329b7567f43c40b4ba30effed1b84dcb002127815d9dd46f855ed9271b4de5_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c2031871068e6d43f7b38acc5bec5473768495c0df1ebba0bfece2a6d60bfcd2 = $this->env->getExtension("native_profiler");
        $__internal_c2031871068e6d43f7b38acc5bec5473768495c0df1ebba0bfece2a6d60bfcd2->enter($__internal_c2031871068e6d43f7b38acc5bec5473768495c0df1ebba0bfece2a6d60bfcd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_c2031871068e6d43f7b38acc5bec5473768495c0df1ebba0bfece2a6d60bfcd2->leave($__internal_c2031871068e6d43f7b38acc5bec5473768495c0df1ebba0bfece2a6d60bfcd2_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 74,  215 => 73,  206 => 69,  200 => 68,  186 => 16,  172 => 60,  168 => 59,  162 => 56,  158 => 55,  154 => 54,  150 => 53,  146 => 52,  128 => 37,  118 => 30,  114 => 29,  108 => 26,  104 => 25,  100 => 24,  96 => 23,  92 => 22,  85 => 17,  83 => 16,  78 => 14,  71 => 9,  65 => 8,  51 => 5,  39 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Accueil {% endblock %}*/
/* */
/* {% block head %} {{ parent() }} {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* */
/* */
/*     <div id="main_div">*/
/*     <div id='sub_head'></div>*/
/*         <header>*/
/*             <img src="{{ asset('images/logo.png') }}"/>*/
/* */
/* {% block menu_auth %} {{ parent() }} {% endblock %}*/
/*         </header>*/
/* 	<section id="slide_div">*/
/* 		<div id="slider">*/
/* 			<a href="#">*/
/* 				<div id="slides">*/
/* 					<img class="slide" src="{{ asset('images/slide_brute/elec.jpg') }}"/>*/
/* 					<img class="slide" src="{{ asset('images/slide_brute/slide1.jpeg') }}"/>*/
/* 					<img class="slide" src="{{ asset('images/slide_brute/slide2.JPG') }}" />*/
/* 					<img class="slide" src="{{ asset('images/slide_brute/slide3.jpg') }}" />*/
/* 					<img class="slide" src="{{ asset('images/slide_brute/slide4.jpg') }}"/>*/
/* 				</div>*/
/* 			</a>*/
/* 			<img id="leftArrow" class="arrow" src="{{ asset('images/arrowLeft.svg') }}"/>*/
/* 			<img id="rightArrow" class="arrow" src="{{ asset('images/arrowRight.svg') }}"/>*/
/* 			<div id="bullets"/>*/
/* 		</div>*/
/* 	</section>*/
/* */
/* 	<section id="button_div">*/
/* 		<div class="categories">*/
/* 		<li><a href="{{ path('home_categories') }}">Categories</a></li>*/
/* */
/* 		</div>*/
/* 		<div class="promo">*/
/* */
/* 		</div>*/
/* 		<div class="other">*/
/* */
/* 		</div>*/
/* 	</section>*/
/* */
/* 	<section id="pst_div">*/
/* 		<div id="pst_slide">*/
/* 			<a href="#">*/
/* 				<div id="pst_slides">*/
/* 					<img class="pst_slide" src="{{ asset('images/slide_brute/elec.jpg') }}"/>*/
/* 					<img class="pst_slide" src="{{ asset('images/slide_brute/slide1.jpeg') }}"/>*/
/* 					<img class="pst_slide" src="{{ asset('images/slide_brute/slide2.JPG') }}" />*/
/* 					<img class="pst_slide" src="{{ asset('images/slide_brute/slide3.jpg') }}" />*/
/* 					<img class="pst_slide" src="{{ asset('images/slide_brute/slide4.jpg') }}"/>*/
/* 				</div>*/
/* 			</a>*/
/* 			<img id="gaucheArrow" class="fleches" src="{{ asset('images/arrowLeft.svg') }}"/>*/
/* 			<img id="droiteArrow" class="fleches" src="{{ asset('images/arrowRight.svg') }}"/>*/
/* 			<div id="points"/>*/
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
/* */
/* {% block javascripts %}*/
/* {{ parent() }}*/
/* {% endblock %}*/
/* */
