<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_85d3d330adfa8988d616543848cc9ca01c25743d9b11ac238d5613ac9cb5c467 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25fcb4ff2c704c5ec5ef6589d96957076c9122a141884fc12a3c37153e42a2bd = $this->env->getExtension("native_profiler");
        $__internal_25fcb4ff2c704c5ec5ef6589d96957076c9122a141884fc12a3c37153e42a2bd->enter($__internal_25fcb4ff2c704c5ec5ef6589d96957076c9122a141884fc12a3c37153e42a2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25fcb4ff2c704c5ec5ef6589d96957076c9122a141884fc12a3c37153e42a2bd->leave($__internal_25fcb4ff2c704c5ec5ef6589d96957076c9122a141884fc12a3c37153e42a2bd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1abf4976d16c146f64288173f44ea62bab037d6730ef943132a600cbe6b86ac2 = $this->env->getExtension("native_profiler");
        $__internal_1abf4976d16c146f64288173f44ea62bab037d6730ef943132a600cbe6b86ac2->enter($__internal_1abf4976d16c146f64288173f44ea62bab037d6730ef943132a600cbe6b86ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1abf4976d16c146f64288173f44ea62bab037d6730ef943132a600cbe6b86ac2->leave($__internal_1abf4976d16c146f64288173f44ea62bab037d6730ef943132a600cbe6b86ac2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_65fb23089e392b91b88abe5cf0187ce721409d5fb2a8b983a3bbc42bc353fb07 = $this->env->getExtension("native_profiler");
        $__internal_65fb23089e392b91b88abe5cf0187ce721409d5fb2a8b983a3bbc42bc353fb07->enter($__internal_65fb23089e392b91b88abe5cf0187ce721409d5fb2a8b983a3bbc42bc353fb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_65fb23089e392b91b88abe5cf0187ce721409d5fb2a8b983a3bbc42bc353fb07->leave($__internal_65fb23089e392b91b88abe5cf0187ce721409d5fb2a8b983a3bbc42bc353fb07_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc313980a9877ac3910f69a1e63387efac60898d9e94be99e2a35c6f6fc5f00f = $this->env->getExtension("native_profiler");
        $__internal_cc313980a9877ac3910f69a1e63387efac60898d9e94be99e2a35c6f6fc5f00f->enter($__internal_cc313980a9877ac3910f69a1e63387efac60898d9e94be99e2a35c6f6fc5f00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cc313980a9877ac3910f69a1e63387efac60898d9e94be99e2a35c6f6fc5f00f->leave($__internal_cc313980a9877ac3910f69a1e63387efac60898d9e94be99e2a35c6f6fc5f00f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
