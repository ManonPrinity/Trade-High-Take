<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_ffb11ab8629cd7fe8b60467b10a34623cc50e1044ebc9a8ee52ed427b83583c3 extends Twig_Template
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
        $__internal_16919f7ea1aeb54a076068e1306df761538f744527d1d742c502d135a6fd0489 = $this->env->getExtension("native_profiler");
        $__internal_16919f7ea1aeb54a076068e1306df761538f744527d1d742c502d135a6fd0489->enter($__internal_16919f7ea1aeb54a076068e1306df761538f744527d1d742c502d135a6fd0489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_16919f7ea1aeb54a076068e1306df761538f744527d1d742c502d135a6fd0489->leave($__internal_16919f7ea1aeb54a076068e1306df761538f744527d1d742c502d135a6fd0489_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
