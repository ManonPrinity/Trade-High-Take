<?php

/* BraincraftedBootstrapBundle::layout.html.twig */
class __TwigTemplate_2b25ce6e16d958bc87ea324d63e63b583cb65b6b18cea15ca65dff46ae9f63e0 extends Twig_Template
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
        $__internal_df5a6082b44716db1b06880c5c2cd1447a4f2b07b3adbd6924a96ac3567933b0 = $this->env->getExtension("native_profiler");
        $__internal_df5a6082b44716db1b06880c5c2cd1447a4f2b07b3adbd6924a96ac3567933b0->enter($__internal_df5a6082b44716db1b06880c5c2cd1447a4f2b07b3adbd6924a96ac3567933b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BraincraftedBootstrapBundle::layout.html.twig"));

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
        
        $__internal_df5a6082b44716db1b06880c5c2cd1447a4f2b07b3adbd6924a96ac3567933b0->leave($__internal_df5a6082b44716db1b06880c5c2cd1447a4f2b07b3adbd6924a96ac3567933b0_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_8613c3b9eba1d3999f8f9391cfa8443e8eea423520aa7617ab7b7e8770882158 = $this->env->getExtension("native_profiler");
        $__internal_8613c3b9eba1d3999f8f9391cfa8443e8eea423520aa7617ab7b7e8770882158->enter($__internal_8613c3b9eba1d3999f8f9391cfa8443e8eea423520aa7617ab7b7e8770882158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BraincraftedBootstrapBundle by Florian Eckerstorfer";
        
        $__internal_8613c3b9eba1d3999f8f9391cfa8443e8eea423520aa7617ab7b7e8770882158->leave($__internal_8613c3b9eba1d3999f8f9391cfa8443e8eea423520aa7617ab7b7e8770882158_prof);

    }

    // line 12
    public function block_head($context, array $blocks = array())
    {
        $__internal_b4a661b2bec9b3d873b4dee354b265c20b871a4777f8fb74214789b876c2c5f5 = $this->env->getExtension("native_profiler");
        $__internal_b4a661b2bec9b3d873b4dee354b265c20b871a4777f8fb74214789b876c2c5f5->enter($__internal_b4a661b2bec9b3d873b4dee354b265c20b871a4777f8fb74214789b876c2c5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b4a661b2bec9b3d873b4dee354b265c20b871a4777f8fb74214789b876c2c5f5->leave($__internal_b4a661b2bec9b3d873b4dee354b265c20b871a4777f8fb74214789b876c2c5f5_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_e260b42a7858d7610d50e0136725652f4bdac2ed19a9863532adf8ee8ca57fee = $this->env->getExtension("native_profiler");
        $__internal_e260b42a7858d7610d50e0136725652f4bdac2ed19a9863532adf8ee8ca57fee->enter($__internal_e260b42a7858d7610d50e0136725652f4bdac2ed19a9863532adf8ee8ca57fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e260b42a7858d7610d50e0136725652f4bdac2ed19a9863532adf8ee8ca57fee->leave($__internal_e260b42a7858d7610d50e0136725652f4bdac2ed19a9863532adf8ee8ca57fee_prof);

    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle::layout.html.twig";
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
