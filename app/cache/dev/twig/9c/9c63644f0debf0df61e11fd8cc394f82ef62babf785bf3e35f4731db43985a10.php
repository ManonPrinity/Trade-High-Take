<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_81bb90fdf57c00f50173e1aebfd47a2ae4fd286338f5e001aa78174454a128dd extends Twig_Template
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
        $__internal_43f60bc0d18277905ec3f3689de189d946dccd519e24ae9af465c5292471c778 = $this->env->getExtension("native_profiler");
        $__internal_43f60bc0d18277905ec3f3689de189d946dccd519e24ae9af465c5292471c778->enter($__internal_43f60bc0d18277905ec3f3689de189d946dccd519e24ae9af465c5292471c778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_43f60bc0d18277905ec3f3689de189d946dccd519e24ae9af465c5292471c778->leave($__internal_43f60bc0d18277905ec3f3689de189d946dccd519e24ae9af465c5292471c778_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
