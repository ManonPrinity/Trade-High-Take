<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ffe19e1953e47e3bd1bca29ada87614b542363649d672859ac200436aa5501b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_853f718a4df8f8b56b3776abed8d10dd7477faa805c2950fb21df6ea1ea51c4e = $this->env->getExtension("native_profiler");
        $__internal_853f718a4df8f8b56b3776abed8d10dd7477faa805c2950fb21df6ea1ea51c4e->enter($__internal_853f718a4df8f8b56b3776abed8d10dd7477faa805c2950fb21df6ea1ea51c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_853f718a4df8f8b56b3776abed8d10dd7477faa805c2950fb21df6ea1ea51c4e->leave($__internal_853f718a4df8f8b56b3776abed8d10dd7477faa805c2950fb21df6ea1ea51c4e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3205545f4154944f25d6bdb447df6a9abcc60d8005cabbe7d8af5075cd944ff9 = $this->env->getExtension("native_profiler");
        $__internal_3205545f4154944f25d6bdb447df6a9abcc60d8005cabbe7d8af5075cd944ff9->enter($__internal_3205545f4154944f25d6bdb447df6a9abcc60d8005cabbe7d8af5075cd944ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3205545f4154944f25d6bdb447df6a9abcc60d8005cabbe7d8af5075cd944ff9->leave($__internal_3205545f4154944f25d6bdb447df6a9abcc60d8005cabbe7d8af5075cd944ff9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_62df4d4cd265660a69dfa027129e28c5ec13f01ed7e2322bf74f52ee13e1e886 = $this->env->getExtension("native_profiler");
        $__internal_62df4d4cd265660a69dfa027129e28c5ec13f01ed7e2322bf74f52ee13e1e886->enter($__internal_62df4d4cd265660a69dfa027129e28c5ec13f01ed7e2322bf74f52ee13e1e886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_62df4d4cd265660a69dfa027129e28c5ec13f01ed7e2322bf74f52ee13e1e886->leave($__internal_62df4d4cd265660a69dfa027129e28c5ec13f01ed7e2322bf74f52ee13e1e886_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2139ae06de06c49d9833c229f36c38b69c75d9af238ecfd13d6941ee299d7aa = $this->env->getExtension("native_profiler");
        $__internal_a2139ae06de06c49d9833c229f36c38b69c75d9af238ecfd13d6941ee299d7aa->enter($__internal_a2139ae06de06c49d9833c229f36c38b69c75d9af238ecfd13d6941ee299d7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a2139ae06de06c49d9833c229f36c38b69c75d9af238ecfd13d6941ee299d7aa->leave($__internal_a2139ae06de06c49d9833c229f36c38b69c75d9af238ecfd13d6941ee299d7aa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
