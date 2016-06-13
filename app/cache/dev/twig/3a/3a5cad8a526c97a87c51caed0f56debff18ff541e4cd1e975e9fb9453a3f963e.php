<?php

/* AdminBundle:Product:add.html.twig */
class __TwigTemplate_3e58cc60b34273ed38ad1e1ae6526a687907d28d927f92179e4d8d53f94addd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Default:index.html.twig", "AdminBundle:Product:add.html.twig", 1);
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
        $__internal_c71c2ad619283b2161b028aaa1affd887dc5bf8078fd2760a6b21ccae678ca88 = $this->env->getExtension("native_profiler");
        $__internal_c71c2ad619283b2161b028aaa1affd887dc5bf8078fd2760a6b21ccae678ca88->enter($__internal_c71c2ad619283b2161b028aaa1affd887dc5bf8078fd2760a6b21ccae678ca88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Product:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c71c2ad619283b2161b028aaa1affd887dc5bf8078fd2760a6b21ccae678ca88->leave($__internal_c71c2ad619283b2161b028aaa1affd887dc5bf8078fd2760a6b21ccae678ca88_prof);

    }

    // line 3
    public function block_board($context, array $blocks = array())
    {
        $__internal_42e3ea9ff685140ca328dc2e4f1f96b8d06ce210c7a21840dd14153d70b98dc7 = $this->env->getExtension("native_profiler");
        $__internal_42e3ea9ff685140ca328dc2e4f1f96b8d06ce210c7a21840dd14153d70b98dc7->enter($__internal_42e3ea9ff685140ca328dc2e4f1f96b8d06ce210c7a21840dd14153d70b98dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-add-product")));
        echo "
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
        echo "
     ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "summary", array()), 'row');
        echo "
     ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'row');
        echo "

     ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productsDerived", array()), "vars", array()), "prototype", array()), "name_derived", array()), 'widget');
        echo "
     ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productsDerived", array()), "vars", array()), "prototype", array()), "price", array()), 'widget');
        echo "
     ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productsDerived", array()), "vars", array()), "prototype", array()), "weight", array()), 'widget');
        echo "
     ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productsDerived", array()), "vars", array()), "prototype", array()), "status", array()), 'widget');
        echo "
     ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productsDerived", array()), "vars", array()), "prototype", array()), "medias", array()), "vars", array()), "prototype", array()), "files", array()), 'widget');
        echo "

  ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productsDerived", array()), 'widget');
        echo "


    <button type=\"submit\">Ajouter</button>
";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "    ";
        
        $__internal_42e3ea9ff685140ca328dc2e4f1f96b8d06ce210c7a21840dd14153d70b98dc7->leave($__internal_42e3ea9ff685140ca328dc2e4f1f96b8d06ce210c7a21840dd14153d70b98dc7_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Product:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  82 => 16,  77 => 14,  73 => 13,  69 => 12,  65 => 11,  61 => 10,  56 => 8,  52 => 7,  48 => 6,  44 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "AdminBundle:Default:index.html.twig" %}*/
/* */
/*      {% block board %}*/
/* {{ form_start(form, {'attr': {'class': 'form-add-product'}}) }}*/
/*     {{ form_row(form.name) }}*/
/* {{ form_row(form.description) }}*/
/*      {{ form_row(form.summary) }}*/
/*      {{ form_row(form.categories) }}*/
/* */
/*      {{ form_widget(form.productsDerived.vars.prototype.name_derived) }}*/
/*      {{ form_widget(form.productsDerived.vars.prototype.price) }}*/
/*      {{ form_widget(form.productsDerived.vars.prototype.weight) }}*/
/*      {{ form_widget(form.productsDerived.vars.prototype.status) }}*/
/*      {{ form_widget(form.productsDerived.vars.prototype.medias.vars.prototype.files) }}*/
/* */
/*   {{ form_widget(form.productsDerived) }}*/
/* */
/* */
/*     <button type="submit">Ajouter</button>*/
/* {{ form_end(form) }}    {% endblock %}*/
