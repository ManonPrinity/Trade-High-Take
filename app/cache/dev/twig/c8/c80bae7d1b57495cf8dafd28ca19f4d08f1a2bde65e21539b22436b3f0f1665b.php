<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_8fd9f8619935e5527a3b3db76c6be896276c7eb49d64c7522de3847ee1411e38 extends Twig_Template
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
        $__internal_1d6a9b6c5672b563d0ecc12295d46b68c36522f486c4b82893815bce1b35fec9 = $this->env->getExtension("native_profiler");
        $__internal_1d6a9b6c5672b563d0ecc12295d46b68c36522f486c4b82893815bce1b35fec9->enter($__internal_1d6a9b6c5672b563d0ecc12295d46b68c36522f486c4b82893815bce1b35fec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1d6a9b6c5672b563d0ecc12295d46b68c36522f486c4b82893815bce1b35fec9->leave($__internal_1d6a9b6c5672b563d0ecc12295d46b68c36522f486c4b82893815bce1b35fec9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
