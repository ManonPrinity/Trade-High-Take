<?php

/* AdminBundle:Product:view.html.twig */
class __TwigTemplate_488582c7f69ecb627dce98a537f5a8f27adb5d181daea7b82b2d0a91f0ed5698 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Default:index.html.twig", "AdminBundle:Product:view.html.twig", 1);
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
        $__internal_e33a4df7eeafeabe9ce47444e871157cf002970750637eee11df79c25c7ac294 = $this->env->getExtension("native_profiler");
        $__internal_e33a4df7eeafeabe9ce47444e871157cf002970750637eee11df79c25c7ac294->enter($__internal_e33a4df7eeafeabe9ce47444e871157cf002970750637eee11df79c25c7ac294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Product:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e33a4df7eeafeabe9ce47444e871157cf002970750637eee11df79c25c7ac294->leave($__internal_e33a4df7eeafeabe9ce47444e871157cf002970750637eee11df79c25c7ac294_prof);

    }

    // line 3
    public function block_board($context, array $blocks = array())
    {
        $__internal_2a9c4a7d7ae30c9e273b0d8f2fba6c602b5f8d9e2f265ae5ebac000ffa69e86d = $this->env->getExtension("native_profiler");
        $__internal_2a9c4a7d7ae30c9e273b0d8f2fba6c602b5f8d9e2f265ae5ebac000ffa69e86d->enter($__internal_2a9c4a7d7ae30c9e273b0d8f2fba6c602b5f8d9e2f265ae5ebac000ffa69e86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

        // line 4
        echo "
<div id='admin_view_product'>
   ";
        // line 6
        $this->loadTemplate("ProductBundle:Product:products.html.twig", "AdminBundle:Product:view.html.twig", 6)->display($context);
        // line 7
        echo "</div>

";
        
        $__internal_2a9c4a7d7ae30c9e273b0d8f2fba6c602b5f8d9e2f265ae5ebac000ffa69e86d->leave($__internal_2a9c4a7d7ae30c9e273b0d8f2fba6c602b5f8d9e2f265ae5ebac000ffa69e86d_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Product:view.html.twig";
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
