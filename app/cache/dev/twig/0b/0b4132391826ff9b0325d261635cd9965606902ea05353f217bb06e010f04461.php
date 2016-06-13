<?php

/* @Admin/Product/add.html.twig */
class __TwigTemplate_f2eb2a8bf7de4e0b4ef3b86eec196e2f9ce35dadfb321911004bb59b65575f57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Default:index.html.twig", "@Admin/Product/add.html.twig", 1);
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
        $__internal_b71cc609a09165074169af1c16c9f50281e7b8a98eabfaa9b71cec82f6bbce2a = $this->env->getExtension("native_profiler");
        $__internal_b71cc609a09165074169af1c16c9f50281e7b8a98eabfaa9b71cec82f6bbce2a->enter($__internal_b71cc609a09165074169af1c16c9f50281e7b8a98eabfaa9b71cec82f6bbce2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Product/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b71cc609a09165074169af1c16c9f50281e7b8a98eabfaa9b71cec82f6bbce2a->leave($__internal_b71cc609a09165074169af1c16c9f50281e7b8a98eabfaa9b71cec82f6bbce2a_prof);

    }

    // line 3
    public function block_board($context, array $blocks = array())
    {
        $__internal_74cb1a12f020682e6de6cee654d3e42beaa57ae433600ee1ca02354c857e0c62 = $this->env->getExtension("native_profiler");
        $__internal_74cb1a12f020682e6de6cee654d3e42beaa57ae433600ee1ca02354c857e0c62->enter($__internal_74cb1a12f020682e6de6cee654d3e42beaa57ae433600ee1ca02354c857e0c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

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
        
        $__internal_74cb1a12f020682e6de6cee654d3e42beaa57ae433600ee1ca02354c857e0c62->leave($__internal_74cb1a12f020682e6de6cee654d3e42beaa57ae433600ee1ca02354c857e0c62_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Product/add.html.twig";
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
