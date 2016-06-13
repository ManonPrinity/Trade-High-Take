<?php

/* ::base.html.twig */
class __TwigTemplate_92447360a6023d54d16dbdb576debd6176770097e8decb1add2e560ae5f44a34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'search' => array($this, 'block_search'),
            'menu_auth' => array($this, 'block_menu_auth'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d08c36ae472282fb8b6af3d7dd2fb09a36c8d6e24d7705599d85d39acaeba9e = $this->env->getExtension("native_profiler");
        $__internal_1d08c36ae472282fb8b6af3d7dd2fb09a36c8d6e24d7705599d85d39acaeba9e->enter($__internal_1d08c36ae472282fb8b6af3d7dd2fb09a36c8d6e24d7705599d85d39acaeba9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>

    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 14
        echo "</head>
<body>
    ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "

    ";
        // line 34
        $this->displayBlock('footer', $context, $blocks);
        // line 35
        echo "

    ";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "</body>
</html>";
        
        $__internal_1d08c36ae472282fb8b6af3d7dd2fb09a36c8d6e24d7705599d85d39acaeba9e->leave($__internal_1d08c36ae472282fb8b6af3d7dd2fb09a36c8d6e24d7705599d85d39acaeba9e_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_086af45e8697e8a2b5946dfd1c1be13f5c1d4936171750ab24f120e44b3d06b3 = $this->env->getExtension("native_profiler");
        $__internal_086af45e8697e8a2b5946dfd1c1be13f5c1d4936171750ab24f120e44b3d06b3->enter($__internal_086af45e8697e8a2b5946dfd1c1be13f5c1d4936171750ab24f120e44b3d06b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "
    <meta charset=\"UTF-8\" />
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " - THT</title>

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\"/>

    ";
        
        $__internal_086af45e8697e8a2b5946dfd1c1be13f5c1d4936171750ab24f120e44b3d06b3->leave($__internal_086af45e8697e8a2b5946dfd1c1be13f5c1d4936171750ab24f120e44b3d06b3_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa529589738fd1ed7ac0c82f37c964898c866f37d59a8d1b5ee4515a50911edc = $this->env->getExtension("native_profiler");
        $__internal_aa529589738fd1ed7ac0c82f37c964898c866f37d59a8d1b5ee4515a50911edc->enter($__internal_aa529589738fd1ed7ac0c82f37c964898c866f37d59a8d1b5ee4515a50911edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_aa529589738fd1ed7ac0c82f37c964898c866f37d59a8d1b5ee4515a50911edc->leave($__internal_aa529589738fd1ed7ac0c82f37c964898c866f37d59a8d1b5ee4515a50911edc_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_276ff1351a7f2e1def499b6b5df049fe01fa0a52a5b476a9022d5bf3f1feb503 = $this->env->getExtension("native_profiler");
        $__internal_276ff1351a7f2e1def499b6b5df049fe01fa0a52a5b476a9022d5bf3f1feb503->enter($__internal_276ff1351a7f2e1def499b6b5df049fe01fa0a52a5b476a9022d5bf3f1feb503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
  ";
        // line 18
        $this->displayBlock('search', $context, $blocks);
        // line 22
        echo "
    ";
        // line 23
        $this->displayBlock('menu_auth', $context, $blocks);
        // line 30
        echo "
    ";
        
        $__internal_276ff1351a7f2e1def499b6b5df049fe01fa0a52a5b476a9022d5bf3f1feb503->leave($__internal_276ff1351a7f2e1def499b6b5df049fe01fa0a52a5b476a9022d5bf3f1feb503_prof);

    }

    // line 18
    public function block_search($context, array $blocks = array())
    {
        $__internal_1edc4a7cad3f9fb079a552da515c6c8b37441095785c6e2cf6f051160caa04f5 = $this->env->getExtension("native_profiler");
        $__internal_1edc4a7cad3f9fb079a552da515c6c8b37441095785c6e2cf6f051160caa04f5->enter($__internal_1edc4a7cad3f9fb079a552da515c6c8b37441095785c6e2cf6f051160caa04f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search"));

        // line 19
        echo "      ";
        echo twig_include($this->env, $context, "layout/search.html.twig");
        echo "

 ";
        
        $__internal_1edc4a7cad3f9fb079a552da515c6c8b37441095785c6e2cf6f051160caa04f5->leave($__internal_1edc4a7cad3f9fb079a552da515c6c8b37441095785c6e2cf6f051160caa04f5_prof);

    }

    // line 23
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_836891e51230644c4a949e07448506b8780e0c3487a65c673d72bfb61576c22f = $this->env->getExtension("native_profiler");
        $__internal_836891e51230644c4a949e07448506b8780e0c3487a65c673d72bfb61576c22f->enter($__internal_836891e51230644c4a949e07448506b8780e0c3487a65c673d72bfb61576c22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

        // line 24
        echo "    ";
        if ((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session"))) {
            // line 25
            echo "    <h1>Bienvenu ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")), "username", array()), "html", null, true);
            echo " </h1>
    ";
        }
        // line 27
        echo "    ";
        echo twig_include($this->env, $context, "layout/menu.html.twig");
        echo "

    ";
        
        $__internal_836891e51230644c4a949e07448506b8780e0c3487a65c673d72bfb61576c22f->leave($__internal_836891e51230644c4a949e07448506b8780e0c3487a65c673d72bfb61576c22f_prof);

    }

    // line 34
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d873931f136ff355d3ea08f26e5c75adad322414be963caecc20cb349f7d8fc5 = $this->env->getExtension("native_profiler");
        $__internal_d873931f136ff355d3ea08f26e5c75adad322414be963caecc20cb349f7d8fc5->enter($__internal_d873931f136ff355d3ea08f26e5c75adad322414be963caecc20cb349f7d8fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_d873931f136ff355d3ea08f26e5c75adad322414be963caecc20cb349f7d8fc5->leave($__internal_d873931f136ff355d3ea08f26e5c75adad322414be963caecc20cb349f7d8fc5_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3c86113173adca676fafabadec2f892a2db9fadcdab65651d888c000b1cd4b04 = $this->env->getExtension("native_profiler");
        $__internal_3c86113173adca676fafabadec2f892a2db9fadcdab65651d888c000b1cd4b04->enter($__internal_3c86113173adca676fafabadec2f892a2db9fadcdab65651d888c000b1cd4b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
<!--     <script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/slide.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/presentation_slide.js"), "html", null, true);
        echo "\"></script> -->
<!--     <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>
 -->    ";
        
        $__internal_3c86113173adca676fafabadec2f892a2db9fadcdab65651d888c000b1cd4b04->leave($__internal_3c86113173adca676fafabadec2f892a2db9fadcdab65651d888c000b1cd4b04_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  200 => 42,  196 => 41,  192 => 40,  188 => 38,  182 => 37,  171 => 34,  160 => 27,  154 => 25,  151 => 24,  145 => 23,  134 => 19,  128 => 18,  120 => 30,  118 => 23,  115 => 22,  113 => 18,  110 => 17,  104 => 16,  92 => 8,  82 => 11,  78 => 10,  73 => 8,  69 => 6,  63 => 5,  55 => 44,  53 => 37,  49 => 35,  47 => 34,  43 => 32,  41 => 16,  37 => 14,  35 => 5,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* */
/*     {% block head %}*/
/* */
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}Acceuil - {% endblock %} - THT</title>*/
/* */
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}"/>*/
/* */
/*     {% endblock %}*/
/* </head>*/
/* <body>*/
/*     {% block body %}*/
/* */
/*   {% block search %}*/
/*       {{ include('layout/search.html.twig')}}*/
/* */
/*  {% endblock %}*/
/* */
/*     {% block menu_auth %}*/
/*     {% if(session) %}*/
/*     <h1>Bienvenu {{ session.username }} </h1>*/
/*     {% endif %}*/
/*     {{ include('layout/menu.html.twig')}}*/
/* */
/*     {% endblock %}*/
/* */
/*     {% endblock %}*/
/* */
/* */
/*     {% block footer %}{% endblock %}*/
/* */
/* */
/*     {% block javascripts %}*/
/* */
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>*/
/* <!--     <script type="text/javascript" src="{{ asset('js/slide.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/presentation_slide.js') }}"></script> -->*/
/* <!--     <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>*/
/*  -->    {% endblock %}*/
/* </body>*/
/* </html>*/
