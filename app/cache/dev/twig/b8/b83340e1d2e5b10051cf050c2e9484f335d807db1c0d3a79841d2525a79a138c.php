<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_6a7839ece1d76e380f764df7ee060a5269c7ef0a3b0327012ad32ebdb535441d extends Twig_Template
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
        $__internal_fdfb8df9aa2f901e8d553d9938459dc71b440f41f81d7108fa1e1c58f679e21b = $this->env->getExtension("native_profiler");
        $__internal_fdfb8df9aa2f901e8d553d9938459dc71b440f41f81d7108fa1e1c58f679e21b->enter($__internal_fdfb8df9aa2f901e8d553d9938459dc71b440f41f81d7108fa1e1c58f679e21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_fdfb8df9aa2f901e8d553d9938459dc71b440f41f81d7108fa1e1c58f679e21b->leave($__internal_fdfb8df9aa2f901e8d553d9938459dc71b440f41f81d7108fa1e1c58f679e21b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
