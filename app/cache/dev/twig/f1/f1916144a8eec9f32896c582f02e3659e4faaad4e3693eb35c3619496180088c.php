<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_91d1abd8fcba1873db91ec0bb6d634856670895a0fc152d450bddf394a4ca0d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_826ca0a8040fb31a1d2287f43fb8452b9bff47e460da203595c3a4e276cb0a97 = $this->env->getExtension("native_profiler");
        $__internal_826ca0a8040fb31a1d2287f43fb8452b9bff47e460da203595c3a4e276cb0a97->enter($__internal_826ca0a8040fb31a1d2287f43fb8452b9bff47e460da203595c3a4e276cb0a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_826ca0a8040fb31a1d2287f43fb8452b9bff47e460da203595c3a4e276cb0a97->leave($__internal_826ca0a8040fb31a1d2287f43fb8452b9bff47e460da203595c3a4e276cb0a97_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c84e6c3a939b8498245a20079e3d0914ca8203b5a2a02d7b7e304fe2d9b950b = $this->env->getExtension("native_profiler");
        $__internal_8c84e6c3a939b8498245a20079e3d0914ca8203b5a2a02d7b7e304fe2d9b950b->enter($__internal_8c84e6c3a939b8498245a20079e3d0914ca8203b5a2a02d7b7e304fe2d9b950b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8c84e6c3a939b8498245a20079e3d0914ca8203b5a2a02d7b7e304fe2d9b950b->leave($__internal_8c84e6c3a939b8498245a20079e3d0914ca8203b5a2a02d7b7e304fe2d9b950b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_06d3d8c1ae47e6865e1a9fe608a81e1dabed69ab98e6839902e1dd22c8927ca2 = $this->env->getExtension("native_profiler");
        $__internal_06d3d8c1ae47e6865e1a9fe608a81e1dabed69ab98e6839902e1dd22c8927ca2->enter($__internal_06d3d8c1ae47e6865e1a9fe608a81e1dabed69ab98e6839902e1dd22c8927ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_06d3d8c1ae47e6865e1a9fe608a81e1dabed69ab98e6839902e1dd22c8927ca2->leave($__internal_06d3d8c1ae47e6865e1a9fe608a81e1dabed69ab98e6839902e1dd22c8927ca2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a92ad555d17d6a45f17d7023b7471f6045c20b6e32f3078cbf2fa812f8d1144 = $this->env->getExtension("native_profiler");
        $__internal_2a92ad555d17d6a45f17d7023b7471f6045c20b6e32f3078cbf2fa812f8d1144->enter($__internal_2a92ad555d17d6a45f17d7023b7471f6045c20b6e32f3078cbf2fa812f8d1144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_2a92ad555d17d6a45f17d7023b7471f6045c20b6e32f3078cbf2fa812f8d1144->leave($__internal_2a92ad555d17d6a45f17d7023b7471f6045c20b6e32f3078cbf2fa812f8d1144_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
