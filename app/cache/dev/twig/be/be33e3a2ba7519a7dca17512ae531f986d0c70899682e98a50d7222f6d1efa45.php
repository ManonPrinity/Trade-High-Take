<?php

/* base.html.twig */
class __TwigTemplate_90cfbd6934c84a1b0ac079e1f414d10aa48fbfb391065afdd0aaa817708b887a extends Twig_Template
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
        $__internal_3bddb9eea695c00184030c1d5228f5b36089d98cc67aaec9ddf7da71df749b6c = $this->env->getExtension("native_profiler");
        $__internal_3bddb9eea695c00184030c1d5228f5b36089d98cc67aaec9ddf7da71df749b6c->enter($__internal_3bddb9eea695c00184030c1d5228f5b36089d98cc67aaec9ddf7da71df749b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3bddb9eea695c00184030c1d5228f5b36089d98cc67aaec9ddf7da71df749b6c->leave($__internal_3bddb9eea695c00184030c1d5228f5b36089d98cc67aaec9ddf7da71df749b6c_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_961e1574b1b9fc25ffaaac9b3c2f442a4b6171082bee6340590a95668c4e8fa0 = $this->env->getExtension("native_profiler");
        $__internal_961e1574b1b9fc25ffaaac9b3c2f442a4b6171082bee6340590a95668c4e8fa0->enter($__internal_961e1574b1b9fc25ffaaac9b3c2f442a4b6171082bee6340590a95668c4e8fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_961e1574b1b9fc25ffaaac9b3c2f442a4b6171082bee6340590a95668c4e8fa0->leave($__internal_961e1574b1b9fc25ffaaac9b3c2f442a4b6171082bee6340590a95668c4e8fa0_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_40720ec8bbb263a3b36674f2c34230bd01215bf5c6b11991a868d9f897a888f5 = $this->env->getExtension("native_profiler");
        $__internal_40720ec8bbb263a3b36674f2c34230bd01215bf5c6b11991a868d9f897a888f5->enter($__internal_40720ec8bbb263a3b36674f2c34230bd01215bf5c6b11991a868d9f897a888f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_40720ec8bbb263a3b36674f2c34230bd01215bf5c6b11991a868d9f897a888f5->leave($__internal_40720ec8bbb263a3b36674f2c34230bd01215bf5c6b11991a868d9f897a888f5_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_9be07ddc971305e61446be21542781bcf650a3e0d230a9e01128c6e33c69331f = $this->env->getExtension("native_profiler");
        $__internal_9be07ddc971305e61446be21542781bcf650a3e0d230a9e01128c6e33c69331f->enter($__internal_9be07ddc971305e61446be21542781bcf650a3e0d230a9e01128c6e33c69331f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9be07ddc971305e61446be21542781bcf650a3e0d230a9e01128c6e33c69331f->leave($__internal_9be07ddc971305e61446be21542781bcf650a3e0d230a9e01128c6e33c69331f_prof);

    }

    // line 18
    public function block_search($context, array $blocks = array())
    {
        $__internal_3d16f569119213e2f645f0403320ff7a73dff963416f6ffd00a1d144d2d0c351 = $this->env->getExtension("native_profiler");
        $__internal_3d16f569119213e2f645f0403320ff7a73dff963416f6ffd00a1d144d2d0c351->enter($__internal_3d16f569119213e2f645f0403320ff7a73dff963416f6ffd00a1d144d2d0c351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search"));

        // line 19
        echo "      ";
        echo twig_include($this->env, $context, "layout/search.html.twig");
        echo "

 ";
        
        $__internal_3d16f569119213e2f645f0403320ff7a73dff963416f6ffd00a1d144d2d0c351->leave($__internal_3d16f569119213e2f645f0403320ff7a73dff963416f6ffd00a1d144d2d0c351_prof);

    }

    // line 23
    public function block_menu_auth($context, array $blocks = array())
    {
        $__internal_cd40ca0629f8877188b9270c2bc7854ca679c4e877a4aacb677e80261b8537af = $this->env->getExtension("native_profiler");
        $__internal_cd40ca0629f8877188b9270c2bc7854ca679c4e877a4aacb677e80261b8537af->enter($__internal_cd40ca0629f8877188b9270c2bc7854ca679c4e877a4aacb677e80261b8537af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_auth"));

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
        
        $__internal_cd40ca0629f8877188b9270c2bc7854ca679c4e877a4aacb677e80261b8537af->leave($__internal_cd40ca0629f8877188b9270c2bc7854ca679c4e877a4aacb677e80261b8537af_prof);

    }

    // line 34
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8656677bfcf824e65f34c958b5bf975e456fbd411190992e388de9296294407e = $this->env->getExtension("native_profiler");
        $__internal_8656677bfcf824e65f34c958b5bf975e456fbd411190992e388de9296294407e->enter($__internal_8656677bfcf824e65f34c958b5bf975e456fbd411190992e388de9296294407e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_8656677bfcf824e65f34c958b5bf975e456fbd411190992e388de9296294407e->leave($__internal_8656677bfcf824e65f34c958b5bf975e456fbd411190992e388de9296294407e_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ce6e3ff7516b8256b6eea9dfc60f036a667e2fbd081b6d57d72b6c14ea4dab05 = $this->env->getExtension("native_profiler");
        $__internal_ce6e3ff7516b8256b6eea9dfc60f036a667e2fbd081b6d57d72b6c14ea4dab05->enter($__internal_ce6e3ff7516b8256b6eea9dfc60f036a667e2fbd081b6d57d72b6c14ea4dab05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/slide.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/presentation_slide.js"), "html", null, true);
        echo "\"></script>
<!--     <script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>
 -->    ";
        
        $__internal_ce6e3ff7516b8256b6eea9dfc60f036a667e2fbd081b6d57d72b6c14ea4dab05->leave($__internal_ce6e3ff7516b8256b6eea9dfc60f036a667e2fbd081b6d57d72b6c14ea4dab05_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
/*     <script type="text/javascript" src="{{ asset('js/slide.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/presentation_slide.js') }}"></script>*/
/* <!--     <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>*/
/*  -->    {% endblock %}*/
/* </body>*/
/* </html>*/
