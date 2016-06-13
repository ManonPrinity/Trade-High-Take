<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e48b4b8b37f582e0befd938fc4e4d8cc2ce8f57762d054dc016dc699f5217058 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_5da7cf91854ac1bbdf4e2704261afa2fccb46c703612f2bcd68ba65c59342311 = $this->env->getExtension("native_profiler");
        $__internal_5da7cf91854ac1bbdf4e2704261afa2fccb46c703612f2bcd68ba65c59342311->enter($__internal_5da7cf91854ac1bbdf4e2704261afa2fccb46c703612f2bcd68ba65c59342311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5da7cf91854ac1bbdf4e2704261afa2fccb46c703612f2bcd68ba65c59342311->leave($__internal_5da7cf91854ac1bbdf4e2704261afa2fccb46c703612f2bcd68ba65c59342311_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_08ab435cdfb2168be896932f7982d5daaa627ea281fde31fb734bed28b182fb7 = $this->env->getExtension("native_profiler");
        $__internal_08ab435cdfb2168be896932f7982d5daaa627ea281fde31fb734bed28b182fb7->enter($__internal_08ab435cdfb2168be896932f7982d5daaa627ea281fde31fb734bed28b182fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_08ab435cdfb2168be896932f7982d5daaa627ea281fde31fb734bed28b182fb7->leave($__internal_08ab435cdfb2168be896932f7982d5daaa627ea281fde31fb734bed28b182fb7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a4a68c38deaf30580fb17d0800102e94b27985341d42a18dc01d203cd3f76b66 = $this->env->getExtension("native_profiler");
        $__internal_a4a68c38deaf30580fb17d0800102e94b27985341d42a18dc01d203cd3f76b66->enter($__internal_a4a68c38deaf30580fb17d0800102e94b27985341d42a18dc01d203cd3f76b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a4a68c38deaf30580fb17d0800102e94b27985341d42a18dc01d203cd3f76b66->leave($__internal_a4a68c38deaf30580fb17d0800102e94b27985341d42a18dc01d203cd3f76b66_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_009453c7887c3b89c7dd65f657b414f289bc2d2865631cd72ba09aeb67608203 = $this->env->getExtension("native_profiler");
        $__internal_009453c7887c3b89c7dd65f657b414f289bc2d2865631cd72ba09aeb67608203->enter($__internal_009453c7887c3b89c7dd65f657b414f289bc2d2865631cd72ba09aeb67608203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_009453c7887c3b89c7dd65f657b414f289bc2d2865631cd72ba09aeb67608203->leave($__internal_009453c7887c3b89c7dd65f657b414f289bc2d2865631cd72ba09aeb67608203_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
