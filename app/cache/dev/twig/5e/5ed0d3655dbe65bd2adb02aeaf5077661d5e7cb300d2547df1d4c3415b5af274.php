<?php

/* AdminBundle:Category:category.html.twig */
class __TwigTemplate_bf3595c4a07330405508c673e89ee4c3e04aba43a929e7bd76bf3512dab10348 extends Twig_Template
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
        $__internal_a3975f506b94823d594d59376c53cf7b4033e3197d49100486164b85f7bde8fb = $this->env->getExtension("native_profiler");
        $__internal_a3975f506b94823d594d59376c53cf7b4033e3197d49100486164b85f7bde8fb->enter($__internal_a3975f506b94823d594d59376c53cf7b4033e3197d49100486164b85f7bde8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Category:category.html.twig"));

        // line 1
        echo "<div class='category_item'>

\t<form class=\"form_delete\" action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_delete_category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" }}>
\t\t<h4 class='name_category'> ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo " </h4>
\t\t<input border=0 src=\"/images/delete.svg\" type=image value=submit align=\"middle\"/>
\t</form>
\t<div class='medias_category' >
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "medias", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["medias"]) {
            // line 9
            echo "\t\t<img src=";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("uploads/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["medias"], "path", array()), "html", null, true);
            echo "/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medias'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
\t\t";
        // line 12
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "children", array(), "any", true, true)) {
            // line 13
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 14
                echo "\t\t<span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</span>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t";
        }
        // line 17
        echo "\t</div>
</div>
";
        
        $__internal_a3975f506b94823d594d59376c53cf7b4033e3197d49100486164b85f7bde8fb->leave($__internal_a3975f506b94823d594d59376c53cf7b4033e3197d49100486164b85f7bde8fb_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Category:category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 17,  70 => 16,  61 => 14,  56 => 13,  54 => 12,  51 => 11,  41 => 9,  37 => 8,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div class='category_item'>*/
/* */
/* 	<form class="form_delete" action="{{ path('admin_delete_category', {'id' :category.id}) }}" method="post" }}>*/
/* 		<h4 class='name_category'> {{category.name}} </h4>*/
/* 		<input border=0 src="/images/delete.svg" type=image value=submit align="middle"/>*/
/* 	</form>*/
/* 	<div class='medias_category' >*/
/* 		{% for medias in category.medias %}*/
/* 		<img src={{ asset('uploads/') }}{{medias.path}}/>*/
/* 		{% endfor %}*/
/* */
/* 		{% if category.children is defined %}*/
/* 		{% for category in category.children %}*/
/* 		<span>{{category.name}}</span>*/
/* 		{% endfor %}*/
/* 		{% endif %}*/
/* 	</div>*/
/* </div>*/
/* */
