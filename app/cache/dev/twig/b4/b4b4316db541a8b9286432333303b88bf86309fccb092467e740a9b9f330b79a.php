<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_4850f6b43904bf190f07c716337327bbf6c65be82133417a0528d90fe5e3da41 extends Twig_Template
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
        $__internal_3c7b6f1114260e31e08327d28fa36fbc71972ddf2c59c8495d4205109acfa2c3 = $this->env->getExtension("native_profiler");
        $__internal_3c7b6f1114260e31e08327d28fa36fbc71972ddf2c59c8495d4205109acfa2c3->enter($__internal_3c7b6f1114260e31e08327d28fa36fbc71972ddf2c59c8495d4205109acfa2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3c7b6f1114260e31e08327d28fa36fbc71972ddf2c59c8495d4205109acfa2c3->leave($__internal_3c7b6f1114260e31e08327d28fa36fbc71972ddf2c59c8495d4205109acfa2c3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
