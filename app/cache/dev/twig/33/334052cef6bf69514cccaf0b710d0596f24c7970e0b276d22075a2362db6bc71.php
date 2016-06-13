<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_badcfc76414d71ededb80eb7d056dad1b9ac05084683807061615691a0652f2d extends Twig_Template
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
        $__internal_991ce641bf211f28148609b47a90980f5e6396d5bd3c1459d3c76754a5b8fffd = $this->env->getExtension("native_profiler");
        $__internal_991ce641bf211f28148609b47a90980f5e6396d5bd3c1459d3c76754a5b8fffd->enter($__internal_991ce641bf211f28148609b47a90980f5e6396d5bd3c1459d3c76754a5b8fffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_991ce641bf211f28148609b47a90980f5e6396d5bd3c1459d3c76754a5b8fffd->leave($__internal_991ce641bf211f28148609b47a90980f5e6396d5bd3c1459d3c76754a5b8fffd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
