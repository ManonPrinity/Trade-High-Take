<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_fedfffa6dcc4f9c6dc198cb39b9fb20e5e20b69279334b526b45d9714dfdcd37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1c81c02adb0f30cbb69623e247180dd6eb626499ebc85541b75314c07fcb636 = $this->env->getExtension("native_profiler");
        $__internal_a1c81c02adb0f30cbb69623e247180dd6eb626499ebc85541b75314c07fcb636->enter($__internal_a1c81c02adb0f30cbb69623e247180dd6eb626499ebc85541b75314c07fcb636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1c81c02adb0f30cbb69623e247180dd6eb626499ebc85541b75314c07fcb636->leave($__internal_a1c81c02adb0f30cbb69623e247180dd6eb626499ebc85541b75314c07fcb636_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3a65ef9215133a7de57fb3730e1db605cb33730f9dca52a53eb7632136584af = $this->env->getExtension("native_profiler");
        $__internal_a3a65ef9215133a7de57fb3730e1db605cb33730f9dca52a53eb7632136584af->enter($__internal_a3a65ef9215133a7de57fb3730e1db605cb33730f9dca52a53eb7632136584af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a3a65ef9215133a7de57fb3730e1db605cb33730f9dca52a53eb7632136584af->leave($__internal_a3a65ef9215133a7de57fb3730e1db605cb33730f9dca52a53eb7632136584af_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_703f18b9f243be501a2dddad1c9b4013c06fd7cdff39c3c762d063e05ed59b52 = $this->env->getExtension("native_profiler");
        $__internal_703f18b9f243be501a2dddad1c9b4013c06fd7cdff39c3c762d063e05ed59b52->enter($__internal_703f18b9f243be501a2dddad1c9b4013c06fd7cdff39c3c762d063e05ed59b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_703f18b9f243be501a2dddad1c9b4013c06fd7cdff39c3c762d063e05ed59b52->leave($__internal_703f18b9f243be501a2dddad1c9b4013c06fd7cdff39c3c762d063e05ed59b52_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
