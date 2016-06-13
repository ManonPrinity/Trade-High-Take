<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_923c410632565c7d2f1059ea9325f098cf602d4a831d2745ec221d545bd574cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3290811720d4c4570abd53a4c23d046a441a5da5b7c3a2dac4fd8b555a85ea8b = $this->env->getExtension("native_profiler");
        $__internal_3290811720d4c4570abd53a4c23d046a441a5da5b7c3a2dac4fd8b555a85ea8b->enter($__internal_3290811720d4c4570abd53a4c23d046a441a5da5b7c3a2dac4fd8b555a85ea8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3290811720d4c4570abd53a4c23d046a441a5da5b7c3a2dac4fd8b555a85ea8b->leave($__internal_3290811720d4c4570abd53a4c23d046a441a5da5b7c3a2dac4fd8b555a85ea8b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c521f691740182d10f1dab03d6ba338f71b64cf830f1988602483fec3510fac9 = $this->env->getExtension("native_profiler");
        $__internal_c521f691740182d10f1dab03d6ba338f71b64cf830f1988602483fec3510fac9->enter($__internal_c521f691740182d10f1dab03d6ba338f71b64cf830f1988602483fec3510fac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c521f691740182d10f1dab03d6ba338f71b64cf830f1988602483fec3510fac9->leave($__internal_c521f691740182d10f1dab03d6ba338f71b64cf830f1988602483fec3510fac9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
