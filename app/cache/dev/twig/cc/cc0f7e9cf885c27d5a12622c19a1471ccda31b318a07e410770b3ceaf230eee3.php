<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_fdc1688d69f06d8266367f7235991e05f6e23f15ae24c66f90524d19d314d366 extends Twig_Template
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
        $__internal_385793cc3c30b47d0f751e174a29e40434b99815135499adb00f20225d4aa3d7 = $this->env->getExtension("native_profiler");
        $__internal_385793cc3c30b47d0f751e174a29e40434b99815135499adb00f20225d4aa3d7->enter($__internal_385793cc3c30b47d0f751e174a29e40434b99815135499adb00f20225d4aa3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_385793cc3c30b47d0f751e174a29e40434b99815135499adb00f20225d4aa3d7->leave($__internal_385793cc3c30b47d0f751e174a29e40434b99815135499adb00f20225d4aa3d7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
