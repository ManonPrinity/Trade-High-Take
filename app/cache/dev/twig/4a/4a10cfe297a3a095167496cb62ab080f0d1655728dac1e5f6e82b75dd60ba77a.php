<?php

/* ::index.html.twig */
class __TwigTemplate_b6d592f3d93589cc29201b9d570f68d420b54e583230d07e83f81f405c9b2776 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::index.html.twig", 1);
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
        $__internal_525e55b560bb08f655d6b775441c595b127f569d3fb6e9622ff8c9a49b34687e = $this->env->getExtension("native_profiler");
        $__internal_525e55b560bb08f655d6b775441c595b127f569d3fb6e9622ff8c9a49b34687e->enter($__internal_525e55b560bb08f655d6b775441c595b127f569d3fb6e9622ff8c9a49b34687e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_525e55b560bb08f655d6b775441c595b127f569d3fb6e9622ff8c9a49b34687e->leave($__internal_525e55b560bb08f655d6b775441c595b127f569d3fb6e9622ff8c9a49b34687e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_17289ffbce16a2573a082c3175dd5534b5579fd79934d00d1201c70714f7996f = $this->env->getExtension("native_profiler");
        $__internal_17289ffbce16a2573a082c3175dd5534b5579fd79934d00d1201c70714f7996f->enter($__internal_17289ffbce16a2573a082c3175dd5534b5579fd79934d00d1201c70714f7996f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil ";
        
        $__internal_17289ffbce16a2573a082c3175dd5534b5579fd79934d00d1201c70714f7996f->leave($__internal_17289ffbce16a2573a082c3175dd5534b5579fd79934d00d1201c70714f7996f_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb3ce071c8f1d84c36f879dfa752229fd85b1293a6e87885e20c3334870ddcce = $this->env->getExtension("native_profiler");
        $__internal_eb3ce071c8f1d84c36f879dfa752229fd85b1293a6e87885e20c3334870ddcce->enter($__internal_eb3ce071c8f1d84c36f879dfa752229fd85b1293a6e87885e20c3334870ddcce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo " ";
        $this->displayParentBlock("head", $context, $blocks);
        echo " ";
        
        $__internal_eb3ce071c8f1d84c36f879dfa752229fd85b1293a6e87885e20c3334870ddcce->leave($__internal_eb3ce071c8f1d84c36f879dfa752229fd85b1293a6e87885e20c3334870ddcce_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b824b0fbc9e0b71f2a8756cf28d40ff875cf3383071433e86a67752166e0094 = $this->env->getExtension("native_profiler");
        $__internal_1b824b0fbc9e0b71f2a8756cf28d40ff875cf3383071433e86a67752166e0094->enter($__internal_1b824b0fbc9e0b71f2a8756cf28d40ff875cf3383071433e86a67752166e0094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "

<div id=\"main_div\">
\t<header>
\t\t<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"/>

\t</header>
\t<div id='search_login'>
\t\t";
        // line 17
        $this->displayBlock('menu_auth', $context, $blocks);
        // line 18
        echo "\t</div>
\t<div id='contents'>
\t\t<section id=\"menu_category_slide\">
\t\t\t<div id='menu_category'>

\t\t\t</div>

\t\t\t<div id=\"slider\">
\t\t\t\t\t\t\t\t\t<img class=\"slide\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/hightech.jpg"), "html", null, true);
        echo "\"/>

\t\t\t\t<!-- <a href=\"#\">
\t\t\t\t\t<div id=\"slides\">
\t\t\t\t\t\t<img class=\"slide\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/hightech.jpg"), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t<img class=\"slide\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide1.jpeg"), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t<img class=\"slide\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide2.JPG"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<img class=\"slide\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide3.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<img class=\"slide\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide4.jpg"), "html", null, true);
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t<img id=\"leftArrow\" class=\"arrow\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrowLeft.svg"), "html", null, true);
        echo "\"/>
\t\t\t\t<img id=\"rightArrow\" class=\"arrow\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrowRight.svg"), "html", null, true);
        echo "\"/>
\t\t\t\t<div id=\"bullets\"/> -->
\t\t\t</div>
\t\t</section>

\t\t<section id=\"button_div\">
\t\t\t<div class=\"categories\">
\t\t\t\t<li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("home_categories");
        echo "\">Categories</a></li>

\t\t\t</div>
\t\t\t<div class=\"promo\">

\t\t\t</div>
\t\t\t<div class=\"other\">

\t\t\t</div>
\t\t</section>

\t\t<section id=\"pst_div\">
\t\t\t<!-- <div id=\"pst_slide\">
\t\t\t\t<a href=\"#\">
\t\t\t\t\t<div id=\"pst_slides\">
\t\t\t\t\t\t<img class=\"pst_slide\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/elec.jpg"), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t<img class=\"pst_slide\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide1.jpeg"), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t<img class=\"pst_slide\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide2.JPG"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<img class=\"pst_slide\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide3.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<img class=\"pst_slide\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/slide_brute/slide4.jpg"), "html", null, true);
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t<img id=\"gaucheArrow\" class=\"fleches\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrowLeft.svg"), "html", null, true);
        echo "\"/>
\t\t\t\t<img id=\"droiteArrow\" class=\"fleches\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/arrowRight.svg"), "html", null, true);
        echo "\"/>
\t\t\t\t<div id=\"points\"/> -->
\t\t\t</div>
\t\t</div>
\t</section>
</div>
";
        
        $__internal_1b824b0fbc9e0b71f2a8756cf28d40ff875cf3383071433e86a67752166e0094->leave($__internal_1b824b0fbc9e0b71f2a8756cf28d40ff875cf3383071433e86a67752166e0094_prof);

    }

    // line 17
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_82f293fcd3aa0a376acf2957e2a4afd19a63dd72e0e9f5faf5734215cdb6b0b9 = $this->env->getExtension("native_profiler");
        $__internal_82f293fcd3aa0a376acf2957e2a4afd19a63dd72e0e9f5faf5734215cdb6b0b9->enter($__internal_82f293fcd3aa0a376acf2957e2a4afd19a63dd72e0e9f5faf5734215cdb6b0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        echo " ";
        $this->displayParentBlock("menu_auth", $context, $blocks);
        echo " ";
        
        $__internal_82f293fcd3aa0a376acf2957e2a4afd19a63dd72e0e9f5faf5734215cdb6b0b9->leave($__internal_82f293fcd3aa0a376acf2957e2a4afd19a63dd72e0e9f5faf5734215cdb6b0b9_prof);

    }

    // line 76
    public function block_footer($context, array $blocks = array())
    {
        $__internal_14bc588f7b5cbf5341cd4611e58614350aec6848e6c057ef1993d4740e2d5fad = $this->env->getExtension("native_profiler");
        $__internal_14bc588f7b5cbf5341cd4611e58614350aec6848e6c057ef1993d4740e2d5fad->enter($__internal_14bc588f7b5cbf5341cd4611e58614350aec6848e6c057ef1993d4740e2d5fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 77
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_14bc588f7b5cbf5341cd4611e58614350aec6848e6c057ef1993d4740e2d5fad->leave($__internal_14bc588f7b5cbf5341cd4611e58614350aec6848e6c057ef1993d4740e2d5fad_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_32a265820e0bc5424a4d52181551a301af5fda55b461f9a84de6d401f1fab886 = $this->env->getExtension("native_profiler");
        $__internal_32a265820e0bc5424a4d52181551a301af5fda55b461f9a84de6d401f1fab886->enter($__internal_32a265820e0bc5424a4d52181551a301af5fda55b461f9a84de6d401f1fab886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_32a265820e0bc5424a4d52181551a301af5fda55b461f9a84de6d401f1fab886->leave($__internal_32a265820e0bc5424a4d52181551a301af5fda55b461f9a84de6d401f1fab886_prof);

    }

    public function getTemplateName()
    {
        return "::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 82,  226 => 81,  217 => 77,  211 => 76,  197 => 17,  183 => 68,  179 => 67,  173 => 64,  169 => 63,  165 => 62,  161 => 61,  157 => 60,  139 => 45,  129 => 38,  125 => 37,  119 => 34,  115 => 33,  111 => 32,  107 => 31,  103 => 30,  96 => 26,  86 => 18,  84 => 17,  77 => 13,  71 => 9,  65 => 8,  51 => 5,  39 => 3,  11 => 1,);
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
/* <div id="main_div">*/
/* 	<header>*/
/* 		<img src="{{ asset('images/logo.png') }}"/>*/
/* */
/* 	</header>*/
/* 	<div id='search_login'>*/
/* 		{% block menu_auth %} {{ parent() }} {% endblock %}*/
/* 	</div>*/
/* 	<div id='contents'>*/
/* 		<section id="menu_category_slide">*/
/* 			<div id='menu_category'>*/
/* */
/* 			</div>*/
/* */
/* 			<div id="slider">*/
/* 									<img class="slide" src="{{ asset('images/slide_brute/hightech.jpg') }}"/>*/
/* */
/* 				<!-- <a href="#">*/
/* 					<div id="slides">*/
/* 						<img class="slide" src="{{ asset('images/slide_brute/hightech.jpg') }}"/>*/
/* 						<img class="slide" src="{{ asset('images/slide_brute/slide1.jpeg') }}"/>*/
/* 						<img class="slide" src="{{ asset('images/slide_brute/slide2.JPG') }}" />*/
/* 						<img class="slide" src="{{ asset('images/slide_brute/slide3.jpg') }}" />*/
/* 						<img class="slide" src="{{ asset('images/slide_brute/slide4.jpg') }}"/>*/
/* 					</div>*/
/* 				</a>*/
/* 				<img id="leftArrow" class="arrow" src="{{ asset('images/arrowLeft.svg') }}"/>*/
/* 				<img id="rightArrow" class="arrow" src="{{ asset('images/arrowRight.svg') }}"/>*/
/* 				<div id="bullets"/> -->*/
/* 			</div>*/
/* 		</section>*/
/* */
/* 		<section id="button_div">*/
/* 			<div class="categories">*/
/* 				<li><a href="{{ path('home_categories') }}">Categories</a></li>*/
/* */
/* 			</div>*/
/* 			<div class="promo">*/
/* */
/* 			</div>*/
/* 			<div class="other">*/
/* */
/* 			</div>*/
/* 		</section>*/
/* */
/* 		<section id="pst_div">*/
/* 			<!-- <div id="pst_slide">*/
/* 				<a href="#">*/
/* 					<div id="pst_slides">*/
/* 						<img class="pst_slide" src="{{ asset('images/slide_brute/elec.jpg') }}"/>*/
/* 						<img class="pst_slide" src="{{ asset('images/slide_brute/slide1.jpeg') }}"/>*/
/* 						<img class="pst_slide" src="{{ asset('images/slide_brute/slide2.JPG') }}" />*/
/* 						<img class="pst_slide" src="{{ asset('images/slide_brute/slide3.jpg') }}" />*/
/* 						<img class="pst_slide" src="{{ asset('images/slide_brute/slide4.jpg') }}"/>*/
/* 					</div>*/
/* 				</a>*/
/* 				<img id="gaucheArrow" class="fleches" src="{{ asset('images/arrowLeft.svg') }}"/>*/
/* 				<img id="droiteArrow" class="fleches" src="{{ asset('images/arrowRight.svg') }}"/>*/
/* 				<div id="points"/> -->*/
/* 			</div>*/
/* 		</div>*/
/* 	</section>*/
/* </div>*/
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
