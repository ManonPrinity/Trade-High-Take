<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_3f8bbeee51bfd2121b922751b0118fc9071de358ae5a787ab8d754f94456bff4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'menu_admin' => array($this, 'block_menu_admin'),
            'board' => array($this, 'block_board'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3c21b61d5f71484d08c368e54a15af17dc24038ef59dfabc688e5cb1e17309d = $this->env->getExtension("native_profiler");
        $__internal_c3c21b61d5f71484d08c368e54a15af17dc24038ef59dfabc688e5cb1e17309d->enter($__internal_c3c21b61d5f71484d08c368e54a15af17dc24038ef59dfabc688e5cb1e17309d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>

  ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 14
        echo "</head>
<body>
  ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "  <div id='board'>
   ";
        // line 30
        $this->displayBlock('board', $context, $blocks);
        // line 33
        echo "
 </div>
 ";
        // line 35
        $this->displayBlock('footer', $context, $blocks);
        // line 36
        echo "

 ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "</body>
</html>";
        
        $__internal_c3c21b61d5f71484d08c368e54a15af17dc24038ef59dfabc688e5cb1e17309d->leave($__internal_c3c21b61d5f71484d08c368e54a15af17dc24038ef59dfabc688e5cb1e17309d_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f2fe7980a245dc2b72c7ca579d41e79d7c11ff12caa7eca9c92a320118e6533 = $this->env->getExtension("native_profiler");
        $__internal_2f2fe7980a245dc2b72c7ca579d41e79d7c11ff12caa7eca9c92a320118e6533->enter($__internal_2f2fe7980a245dc2b72c7ca579d41e79d7c11ff12caa7eca9c92a320118e6533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "
  <meta charset=\"UTF-8\" />
  <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " - THT</title>

  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\"/>

  ";
        
        $__internal_2f2fe7980a245dc2b72c7ca579d41e79d7c11ff12caa7eca9c92a320118e6533->leave($__internal_2f2fe7980a245dc2b72c7ca579d41e79d7c11ff12caa7eca9c92a320118e6533_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e7f531f57379dd06f8a394ccd621abb444be583ba8823fc419ade66b6167e49 = $this->env->getExtension("native_profiler");
        $__internal_3e7f531f57379dd06f8a394ccd621abb444be583ba8823fc419ade66b6167e49->enter($__internal_3e7f531f57379dd06f8a394ccd621abb444be583ba8823fc419ade66b6167e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_3e7f531f57379dd06f8a394ccd621abb444be583ba8823fc419ade66b6167e49->leave($__internal_3e7f531f57379dd06f8a394ccd621abb444be583ba8823fc419ade66b6167e49_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca5fc84d88e8c0178c95c6d66d930527056d946e668fa9a907cc430cd4d3f372 = $this->env->getExtension("native_profiler");
        $__internal_ca5fc84d88e8c0178c95c6d66d930527056d946e668fa9a907cc430cd4d3f372->enter($__internal_ca5fc84d88e8c0178c95c6d66d930527056d946e668fa9a907cc430cd4d3f372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "  <div id='container'>
    <div id='menu'>
     ";
        // line 19
        $this->displayBlock('menu_admin', $context, $blocks);
        // line 28
        echo "  ";
        
        $__internal_ca5fc84d88e8c0178c95c6d66d930527056d946e668fa9a907cc430cd4d3f372->leave($__internal_ca5fc84d88e8c0178c95c6d66d930527056d946e668fa9a907cc430cd4d3f372_prof);

    }

    // line 19
    public function block_menu_admin($context, array $blocks = array())
    {
        $__internal_c49ebfddcc88c4fb35fd14f4ab876faa3d320c95267fd6214690b0541a87d7cf = $this->env->getExtension("native_profiler");
        $__internal_c49ebfddcc88c4fb35fd14f4ab876faa3d320c95267fd6214690b0541a87d7cf->enter($__internal_c49ebfddcc88c4fb35fd14f4ab876faa3d320c95267fd6214690b0541a87d7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_admin"));

        // line 20
        echo "      <a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\">Dashboard</a>
      <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("admin_categories");
        echo "\">Gerer les categories</a>
      <h3>Panel Administrateur</h3>
      <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("admin_add_product");
        echo "\">Ajouter un produit</a>
      <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("admin_all_products");
        echo "\">Voir les produits</a>
  </div>

  ";
        
        $__internal_c49ebfddcc88c4fb35fd14f4ab876faa3d320c95267fd6214690b0541a87d7cf->leave($__internal_c49ebfddcc88c4fb35fd14f4ab876faa3d320c95267fd6214690b0541a87d7cf_prof);

    }

    // line 30
    public function block_board($context, array $blocks = array())
    {
        $__internal_04de650e0cf4450ed225eafae2d952a053de54724a797f9a99b43cd4fa8076c3 = $this->env->getExtension("native_profiler");
        $__internal_04de650e0cf4450ed225eafae2d952a053de54724a797f9a99b43cd4fa8076c3->enter($__internal_04de650e0cf4450ed225eafae2d952a053de54724a797f9a99b43cd4fa8076c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

        // line 31
        echo "
   ";
        
        $__internal_04de650e0cf4450ed225eafae2d952a053de54724a797f9a99b43cd4fa8076c3->leave($__internal_04de650e0cf4450ed225eafae2d952a053de54724a797f9a99b43cd4fa8076c3_prof);

    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        $__internal_76ccf4c593639b9e88bc07d2976d43d7afdfeb71900ebc4b88f6e82446c30e03 = $this->env->getExtension("native_profiler");
        $__internal_76ccf4c593639b9e88bc07d2976d43d7afdfeb71900ebc4b88f6e82446c30e03->enter($__internal_76ccf4c593639b9e88bc07d2976d43d7afdfeb71900ebc4b88f6e82446c30e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_76ccf4c593639b9e88bc07d2976d43d7afdfeb71900ebc4b88f6e82446c30e03->leave($__internal_76ccf4c593639b9e88bc07d2976d43d7afdfeb71900ebc4b88f6e82446c30e03_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1608d1c520bd8e3e3bc043780595ea6bdd0f53d0030e79cb37d0dd8c3eca108b = $this->env->getExtension("native_profiler");
        $__internal_1608d1c520bd8e3e3bc043780595ea6bdd0f53d0030e79cb37d0dd8c3eca108b->enter($__internal_1608d1c520bd8e3e3bc043780595ea6bdd0f53d0030e79cb37d0dd8c3eca108b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo " <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/admin.js"), "html", null, true);
        echo "\"></script>

 ";
        
        $__internal_1608d1c520bd8e3e3bc043780595ea6bdd0f53d0030e79cb37d0dd8c3eca108b->leave($__internal_1608d1c520bd8e3e3bc043780595ea6bdd0f53d0030e79cb37d0dd8c3eca108b_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  193 => 40,  190 => 39,  184 => 38,  173 => 35,  165 => 31,  159 => 30,  148 => 24,  144 => 23,  139 => 21,  134 => 20,  128 => 19,  121 => 28,  119 => 19,  115 => 17,  109 => 16,  97 => 8,  87 => 11,  83 => 10,  78 => 8,  74 => 6,  68 => 5,  60 => 43,  58 => 38,  54 => 36,  52 => 35,  48 => 33,  46 => 30,  43 => 29,  41 => 16,  37 => 14,  35 => 5,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* */
/*   {% block head %}*/
/* */
/*   <meta charset="UTF-8" />*/
/*   <title>{% block title %}Acceuil - {% endblock %} - THT</title>*/
/* */
/*   <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*   <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}"/>*/
/* */
/*   {% endblock %}*/
/* </head>*/
/* <body>*/
/*   {% block body %}*/
/*   <div id='container'>*/
/*     <div id='menu'>*/
/*      {% block menu_admin %}*/
/*       <a href="{{ path('admin') }}">Dashboard</a>*/
/*       <a href="{{ path('admin_categories') }}">Gerer les categories</a>*/
/*       <h3>Panel Administrateur</h3>*/
/*       <a href="{{ path('admin_add_product') }}">Ajouter un produit</a>*/
/*       <a href="{{ path('admin_all_products') }}">Voir les produits</a>*/
/*   </div>*/
/* */
/*   {% endblock %}*/
/*   {% endblock %}*/
/*   <div id='board'>*/
/*    {% block board %}*/
/* */
/*    {% endblock %}*/
/* */
/*  </div>*/
/*  {% block footer %}{% endblock %}*/
/* */
/* */
/*  {% block javascripts %}*/
/*  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>*/
/*  <script type="text/javascript" src="{{ asset('js/admin.js') }}"></script>*/
/* */
/*  {% endblock %}*/
/* </body>*/
/* </html>*/
