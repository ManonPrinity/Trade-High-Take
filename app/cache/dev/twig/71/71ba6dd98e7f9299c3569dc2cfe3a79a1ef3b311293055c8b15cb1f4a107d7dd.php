<?php

/* @Admin/Category/categories.html.twig */
class __TwigTemplate_e4ee53162b6214bde2c6689e4e3972fd90e0c531fa3965a45fdd4108af54bbad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Default:index.html.twig", "@Admin/Category/categories.html.twig", 1);
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
        $__internal_96e1a9d40f75ba204cce3e0a841f30f76088158f0fd10356e5961f0b33f4b9bc = $this->env->getExtension("native_profiler");
        $__internal_96e1a9d40f75ba204cce3e0a841f30f76088158f0fd10356e5961f0b33f4b9bc->enter($__internal_96e1a9d40f75ba204cce3e0a841f30f76088158f0fd10356e5961f0b33f4b9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Category/categories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96e1a9d40f75ba204cce3e0a841f30f76088158f0fd10356e5961f0b33f4b9bc->leave($__internal_96e1a9d40f75ba204cce3e0a841f30f76088158f0fd10356e5961f0b33f4b9bc_prof);

    }

    // line 2
    public function block_board($context, array $blocks = array())
    {
        $__internal_53aba2e7942b4e55600728776f5fab7af25fcb75ac2497ddd1da70a2b8f14918 = $this->env->getExtension("native_profiler");
        $__internal_53aba2e7942b4e55600728776f5fab7af25fcb75ac2497ddd1da70a2b8f14918->enter($__internal_53aba2e7942b4e55600728776f5fab7af25fcb75ac2497ddd1da70a2b8f14918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

        // line 3
        echo "
<div class='contents'>

";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-add-category")));
        echo "

  ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
  ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "medias", array()), "vars", array()), "prototype", array()), "files", array()), 'widget');
        echo "
  ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "medias", array()), 'widget');
        echo "
    <button type=\"submit\">Ajouter</button>
    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <div class='categories'>
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 16
            echo "   ";
            $this->loadTemplate("AdminBundle:Category:category.html.twig", "@Admin/Category/categories.html.twig", 16)->display($context);
            // line 17
            echo "  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
</div>
</div>
";
        
        $__internal_53aba2e7942b4e55600728776f5fab7af25fcb75ac2497ddd1da70a2b8f14918->leave($__internal_53aba2e7942b4e55600728776f5fab7af25fcb75ac2497ddd1da70a2b8f14918_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Category/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 18,  89 => 17,  86 => 16,  69 => 15,  63 => 12,  58 => 10,  54 => 9,  50 => 8,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "AdminBundle:Default:index.html.twig" %}*/
/*      {% block board %}*/
/* */
/* <div class='contents'>*/
/* */
/* {{ form_start(form, {'attr': {'class': 'form-add-category'}}) }}*/
/* */
/*   {{ form_widget(form.name) }}*/
/*   {{ form_widget(form.medias.vars.prototype.files) }}*/
/*   {{ form_widget(form.medias) }}*/
/*     <button type="submit">Ajouter</button>*/
/*     {{ form_end(form) }}*/
/* */
/*     <div class='categories'>*/
/*   {% for category in categories %}*/
/*    {% include("AdminBundle:Category:category.html.twig" ) %}*/
/*   {% endfor %}*/
/* */
/* </div>*/
/* </div>*/
/* {% endblock %}*/
