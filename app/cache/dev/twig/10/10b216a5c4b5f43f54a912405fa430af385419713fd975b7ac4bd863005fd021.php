<?php

/* @BraincraftedBootstrap/layout.html.twig */
class __TwigTemplate_ce7182beec58716d5acf32fe30ccd482178bfc5843f3186bc9998f05031fdd7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d348c1cd6609213dfa369c9e77beafda03ba610a26042a4e301f009406c98496 = $this->env->getExtension("native_profiler");
        $__internal_d348c1cd6609213dfa369c9e77beafda03ba610a26042a4e301f009406c98496->enter($__internal_d348c1cd6609213dfa369c9e77beafda03ba610a26042a4e301f009406c98496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BraincraftedBootstrap/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>

<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

<!-- Bootstrap -->
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">

";
        // line 12
        $this->displayBlock('head', $context, $blocks);
        // line 13
        echo "
</head>

<body>

";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "
<!-- JavaScript plugins (requires jQuery) -->
<script src=\"//code.jquery.com/jquery.js\"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

<!-- Optionally enable responsive features in IE8 -->
<script src=\"js/respond.js\"></script>

</body>
</html>
";
        
        $__internal_d348c1cd6609213dfa369c9e77beafda03ba610a26042a4e301f009406c98496->leave($__internal_d348c1cd6609213dfa369c9e77beafda03ba610a26042a4e301f009406c98496_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9749974bb753638420c74ae80170c41d065f7647735a6428430ba70242263923 = $this->env->getExtension("native_profiler");
        $__internal_9749974bb753638420c74ae80170c41d065f7647735a6428430ba70242263923->enter($__internal_9749974bb753638420c74ae80170c41d065f7647735a6428430ba70242263923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BraincraftedBootstrapBundle by Florian Eckerstorfer";
        
        $__internal_9749974bb753638420c74ae80170c41d065f7647735a6428430ba70242263923->leave($__internal_9749974bb753638420c74ae80170c41d065f7647735a6428430ba70242263923_prof);

    }

    // line 12
    public function block_head($context, array $blocks = array())
    {
        $__internal_79f8b9126ceb17a7e5e5bec2d1fc688848dac46c116f0c23a53f715749a7e7af = $this->env->getExtension("native_profiler");
        $__internal_79f8b9126ceb17a7e5e5bec2d1fc688848dac46c116f0c23a53f715749a7e7af->enter($__internal_79f8b9126ceb17a7e5e5bec2d1fc688848dac46c116f0c23a53f715749a7e7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_79f8b9126ceb17a7e5e5bec2d1fc688848dac46c116f0c23a53f715749a7e7af->leave($__internal_79f8b9126ceb17a7e5e5bec2d1fc688848dac46c116f0c23a53f715749a7e7af_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_07b57f7c610b9fa5d3739e95dab89501fe0d67a1b36659697daf129358022980 = $this->env->getExtension("native_profiler");
        $__internal_07b57f7c610b9fa5d3739e95dab89501fe0d67a1b36659697daf129358022980->enter($__internal_07b57f7c610b9fa5d3739e95dab89501fe0d67a1b36659697daf129358022980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_07b57f7c610b9fa5d3739e95dab89501fe0d67a1b36659697daf129358022980->leave($__internal_07b57f7c610b9fa5d3739e95dab89501fe0d67a1b36659697daf129358022980_prof);

    }

    public function getTemplateName()
    {
        return "@BraincraftedBootstrap/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 18,  88 => 12,  76 => 6,  61 => 23,  55 => 19,  53 => 18,  46 => 13,  44 => 12,  39 => 10,  32 => 6,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* */
/* <head>*/
/* */
/* <title>{% block title %}BraincraftedBootstrapBundle by Florian Eckerstorfer{% endblock title %}</title>*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/* <!-- Bootstrap -->*/
/* <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" media="screen">*/
/* */
/* {% block head %}{% endblock %}*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/* {% block body %}{% endblock body %}*/
/* */
/* <!-- JavaScript plugins (requires jQuery) -->*/
/* <script src="//code.jquery.com/jquery.js"></script>*/
/* <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/* <script src="{{ asset('/js/bootstrap.js') }}"></script>*/
/* */
/* <!-- Optionally enable responsive features in IE8 -->*/
/* <script src="js/respond.js"></script>*/
/* */
/* </body>*/
/* </html>*/
/* */
