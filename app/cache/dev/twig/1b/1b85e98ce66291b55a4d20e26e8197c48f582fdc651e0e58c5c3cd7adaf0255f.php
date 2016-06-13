<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_c1b5cb75a0001a0f3d61d23a015e1102779f41f2579b2ecd9ab77e36546ecd0f extends Twig_Template
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
        $__internal_ff825ceb14503f0b46d1ff1d82994546f5c34c6feafe9d2836d655912b9e92c2 = $this->env->getExtension("native_profiler");
        $__internal_ff825ceb14503f0b46d1ff1d82994546f5c34c6feafe9d2836d655912b9e92c2->enter($__internal_ff825ceb14503f0b46d1ff1d82994546f5c34c6feafe9d2836d655912b9e92c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ff825ceb14503f0b46d1ff1d82994546f5c34c6feafe9d2836d655912b9e92c2->leave($__internal_ff825ceb14503f0b46d1ff1d82994546f5c34c6feafe9d2836d655912b9e92c2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
