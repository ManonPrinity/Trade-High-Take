<?php

/* @Admin/Product/view.html.twig */
class __TwigTemplate_875620917639a70457d63faf93d42bc9e2ccdd733d34c03a5a934374422b1863 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Default:index.html.twig", "@Admin/Product/view.html.twig", 1);
        $this->blocks = array(
            'board' => array($this, 'block_board'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6d421259e86cd9b1900d5d6c061ef6b72278b2397d88851a7e26126ca787a3e = $this->env->getExtension("native_profiler");
        $__internal_a6d421259e86cd9b1900d5d6c061ef6b72278b2397d88851a7e26126ca787a3e->enter($__internal_a6d421259e86cd9b1900d5d6c061ef6b72278b2397d88851a7e26126ca787a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Product/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6d421259e86cd9b1900d5d6c061ef6b72278b2397d88851a7e26126ca787a3e->leave($__internal_a6d421259e86cd9b1900d5d6c061ef6b72278b2397d88851a7e26126ca787a3e_prof);

    }

    // line 3
    public function block_board($context, array $blocks = array())
    {
        $__internal_f6209ccbf84f41f1026a1542fc2342b2237fce6b37cef76077bdc9b212a15e40 = $this->env->getExtension("native_profiler");
        $__internal_f6209ccbf84f41f1026a1542fc2342b2237fce6b37cef76077bdc9b212a15e40->enter($__internal_f6209ccbf84f41f1026a1542fc2342b2237fce6b37cef76077bdc9b212a15e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

        // line 4
        echo "
<div id='admin_view_product'>
   ";
        // line 6
        $this->loadTemplate("ProductBundle:Product:products.html.twig", "@Admin/Product/view.html.twig", 6)->display($context);
        // line 7
        echo "</div>

";
        
        $__internal_f6209ccbf84f41f1026a1542fc2342b2237fce6b37cef76077bdc9b212a15e40->leave($__internal_f6209ccbf84f41f1026a1542fc2342b2237fce6b37cef76077bdc9b212a15e40_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Product/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "AdminBundle:Default:index.html.twig" %}*/
/* */
/* {% block board %}*/
/* */
/* <div id='admin_view_product'>*/
/*    {% include("ProductBundle:Product:products.html.twig" ) %}*/
/* </div>*/
/* */
/* {% endblock %}*/
