<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_4583bc1c0becbdecf3f6cd098b3fca3a2782257b5f9c98985cdb4cd4061e4369 extends Twig_Template
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
        $__internal_5acc2f73fd4191aa8e015672bf2303e57c7351e0a19d1b4147c62c64b4f6fe5b = $this->env->getExtension("native_profiler");
        $__internal_5acc2f73fd4191aa8e015672bf2303e57c7351e0a19d1b4147c62c64b4f6fe5b->enter($__internal_5acc2f73fd4191aa8e015672bf2303e57c7351e0a19d1b4147c62c64b4f6fe5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_5acc2f73fd4191aa8e015672bf2303e57c7351e0a19d1b4147c62c64b4f6fe5b->leave($__internal_5acc2f73fd4191aa8e015672bf2303e57c7351e0a19d1b4147c62c64b4f6fe5b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
