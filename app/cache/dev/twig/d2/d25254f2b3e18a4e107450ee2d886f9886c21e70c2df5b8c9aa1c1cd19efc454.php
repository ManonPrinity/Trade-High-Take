<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_2b08f5e54f2b22595311b6a5aa01ac4f17a3019e6f0905f6252c755f5a4940f1 extends Twig_Template
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
        $__internal_1aec3ab3c2ebd2b47068ab2b401c6710a4d011fb1017453ec518daa7755c385f = $this->env->getExtension("native_profiler");
        $__internal_1aec3ab3c2ebd2b47068ab2b401c6710a4d011fb1017453ec518daa7755c385f->enter($__internal_1aec3ab3c2ebd2b47068ab2b401c6710a4d011fb1017453ec518daa7755c385f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1aec3ab3c2ebd2b47068ab2b401c6710a4d011fb1017453ec518daa7755c385f->leave($__internal_1aec3ab3c2ebd2b47068ab2b401c6710a4d011fb1017453ec518daa7755c385f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
