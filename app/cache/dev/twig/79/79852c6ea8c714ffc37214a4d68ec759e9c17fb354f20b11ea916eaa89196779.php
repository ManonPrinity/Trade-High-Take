<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_ea0620a77225e2979335842a807c96ddec93426a38c2f1f39ad555d4424c5ab6 extends Twig_Template
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
        $__internal_12a8efe350f67c4b3606f4a76b1f1f9038681b438d796f8a6d460528d4daa7dd = $this->env->getExtension("native_profiler");
        $__internal_12a8efe350f67c4b3606f4a76b1f1f9038681b438d796f8a6d460528d4daa7dd->enter($__internal_12a8efe350f67c4b3606f4a76b1f1f9038681b438d796f8a6d460528d4daa7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_12a8efe350f67c4b3606f4a76b1f1f9038681b438d796f8a6d460528d4daa7dd->leave($__internal_12a8efe350f67c4b3606f4a76b1f1f9038681b438d796f8a6d460528d4daa7dd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
