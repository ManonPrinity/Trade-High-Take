<?php

/* AdminBundle:Category:categories.html.twig */
class __TwigTemplate_47420ed15b560d0ae091d5656ed55e69699f19f89597ccaa132d6daa01b6f095 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle:Default:index.html.twig", "AdminBundle:Category:categories.html.twig", 1);
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
        $__internal_608a348e8c7b85977b7082ed88983998ea11d35c4c697a1f8c02cb3a2679e3da = $this->env->getExtension("native_profiler");
        $__internal_608a348e8c7b85977b7082ed88983998ea11d35c4c697a1f8c02cb3a2679e3da->enter($__internal_608a348e8c7b85977b7082ed88983998ea11d35c4c697a1f8c02cb3a2679e3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Category:categories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_608a348e8c7b85977b7082ed88983998ea11d35c4c697a1f8c02cb3a2679e3da->leave($__internal_608a348e8c7b85977b7082ed88983998ea11d35c4c697a1f8c02cb3a2679e3da_prof);

    }

    // line 2
    public function block_board($context, array $blocks = array())
    {
        $__internal_7f12f14751743db9c7e21fa3b595a269011e2bc232bbc9ff946e4e5c233e79a4 = $this->env->getExtension("native_profiler");
        $__internal_7f12f14751743db9c7e21fa3b595a269011e2bc232bbc9ff946e4e5c233e79a4->enter($__internal_7f12f14751743db9c7e21fa3b595a269011e2bc232bbc9ff946e4e5c233e79a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

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
            $this->loadTemplate("AdminBundle:Category:category.html.twig", "AdminBundle:Category:categories.html.twig", 16)->display($context);
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
        
        $__internal_7f12f14751743db9c7e21fa3b595a269011e2bc232bbc9ff946e4e5c233e79a4->leave($__internal_7f12f14751743db9c7e21fa3b595a269011e2bc232bbc9ff946e4e5c233e79a4_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Category:categories.html.twig";
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
