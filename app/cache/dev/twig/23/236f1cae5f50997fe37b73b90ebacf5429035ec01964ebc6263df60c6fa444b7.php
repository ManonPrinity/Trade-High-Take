<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_7b57d3b01b2658b25fe28f7e6ce9db124b62be33f31792d3b8853ad4f4b74e40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_274b6d8c799db11eee2ff05955b94c0a99bfa0f052435406b05ef4e0014e6787 = $this->env->getExtension("native_profiler");
        $__internal_274b6d8c799db11eee2ff05955b94c0a99bfa0f052435406b05ef4e0014e6787->enter($__internal_274b6d8c799db11eee2ff05955b94c0a99bfa0f052435406b05ef4e0014e6787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_274b6d8c799db11eee2ff05955b94c0a99bfa0f052435406b05ef4e0014e6787->leave($__internal_274b6d8c799db11eee2ff05955b94c0a99bfa0f052435406b05ef4e0014e6787_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
