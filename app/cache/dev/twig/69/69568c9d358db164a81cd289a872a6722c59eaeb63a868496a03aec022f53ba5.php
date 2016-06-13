<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7090a007f02b8060f4b3718801fec664d1607a11314be58808bc4160cd665f98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_22637de296f4f860a03f159e831825cafd5d894d6b96863fb7d73bae303fe8f9 = $this->env->getExtension("native_profiler");
        $__internal_22637de296f4f860a03f159e831825cafd5d894d6b96863fb7d73bae303fe8f9->enter($__internal_22637de296f4f860a03f159e831825cafd5d894d6b96863fb7d73bae303fe8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22637de296f4f860a03f159e831825cafd5d894d6b96863fb7d73bae303fe8f9->leave($__internal_22637de296f4f860a03f159e831825cafd5d894d6b96863fb7d73bae303fe8f9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3aa0a9f111769d6d0eee2538852f85d9fd41f4ed939d192bc538139dafc94ef6 = $this->env->getExtension("native_profiler");
        $__internal_3aa0a9f111769d6d0eee2538852f85d9fd41f4ed939d192bc538139dafc94ef6->enter($__internal_3aa0a9f111769d6d0eee2538852f85d9fd41f4ed939d192bc538139dafc94ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3aa0a9f111769d6d0eee2538852f85d9fd41f4ed939d192bc538139dafc94ef6->leave($__internal_3aa0a9f111769d6d0eee2538852f85d9fd41f4ed939d192bc538139dafc94ef6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf8747c3fa22517f135be5c35026a3666d35f8449a6a11c634abc02ade01b341 = $this->env->getExtension("native_profiler");
        $__internal_cf8747c3fa22517f135be5c35026a3666d35f8449a6a11c634abc02ade01b341->enter($__internal_cf8747c3fa22517f135be5c35026a3666d35f8449a6a11c634abc02ade01b341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cf8747c3fa22517f135be5c35026a3666d35f8449a6a11c634abc02ade01b341->leave($__internal_cf8747c3fa22517f135be5c35026a3666d35f8449a6a11c634abc02ade01b341_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_757342487ac76dbaa3dcb839c12902d72d4f5e4f749c68e163c1053cd1b848c6 = $this->env->getExtension("native_profiler");
        $__internal_757342487ac76dbaa3dcb839c12902d72d4f5e4f749c68e163c1053cd1b848c6->enter($__internal_757342487ac76dbaa3dcb839c12902d72d4f5e4f749c68e163c1053cd1b848c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_757342487ac76dbaa3dcb839c12902d72d4f5e4f749c68e163c1053cd1b848c6->leave($__internal_757342487ac76dbaa3dcb839c12902d72d4f5e4f749c68e163c1053cd1b848c6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
