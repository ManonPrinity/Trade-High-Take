<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_6bc1244fd76f9821b997183b292001875c509b9e8f3b861df80d06b6c70144c7 extends Twig_Template
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
        $__internal_6ca88d4ed4a80b56e74ddfa85de33e115ba55a3d2478f8d7e336bcb4de624007 = $this->env->getExtension("native_profiler");
        $__internal_6ca88d4ed4a80b56e74ddfa85de33e115ba55a3d2478f8d7e336bcb4de624007->enter($__internal_6ca88d4ed4a80b56e74ddfa85de33e115ba55a3d2478f8d7e336bcb4de624007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6ca88d4ed4a80b56e74ddfa85de33e115ba55a3d2478f8d7e336bcb4de624007->leave($__internal_6ca88d4ed4a80b56e74ddfa85de33e115ba55a3d2478f8d7e336bcb4de624007_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
