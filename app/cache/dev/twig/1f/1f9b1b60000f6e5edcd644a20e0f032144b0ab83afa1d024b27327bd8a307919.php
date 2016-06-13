<?php

/* @Admin/Default/index.html.twig */
class __TwigTemplate_ff9e67fab11cfcfab29876a75e9cd11a87e9dddf2b554040df85f5b4d368261b extends Twig_Template
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
        $__internal_deb4e73cef51b4f8abfde3cf029ab066434b68addb8f830b98456c2ef5d84a84 = $this->env->getExtension("native_profiler");
        $__internal_deb4e73cef51b4f8abfde3cf029ab066434b68addb8f830b98456c2ef5d84a84->enter($__internal_deb4e73cef51b4f8abfde3cf029ab066434b68addb8f830b98456c2ef5d84a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/Default/index.html.twig"));

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
        
        $__internal_deb4e73cef51b4f8abfde3cf029ab066434b68addb8f830b98456c2ef5d84a84->leave($__internal_deb4e73cef51b4f8abfde3cf029ab066434b68addb8f830b98456c2ef5d84a84_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_81ddf75f3072a11a776fc769b8a29941ae9ccc8109b2d8162b25e4602728b53b = $this->env->getExtension("native_profiler");
        $__internal_81ddf75f3072a11a776fc769b8a29941ae9ccc8109b2d8162b25e4602728b53b->enter($__internal_81ddf75f3072a11a776fc769b8a29941ae9ccc8109b2d8162b25e4602728b53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_81ddf75f3072a11a776fc769b8a29941ae9ccc8109b2d8162b25e4602728b53b->leave($__internal_81ddf75f3072a11a776fc769b8a29941ae9ccc8109b2d8162b25e4602728b53b_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fa5abb10035d5da2d854549b1bc694e6f02a6f6e7c2002c075f2ac8dcd70f1f = $this->env->getExtension("native_profiler");
        $__internal_3fa5abb10035d5da2d854549b1bc694e6f02a6f6e7c2002c075f2ac8dcd70f1f->enter($__internal_3fa5abb10035d5da2d854549b1bc694e6f02a6f6e7c2002c075f2ac8dcd70f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil - ";
        
        $__internal_3fa5abb10035d5da2d854549b1bc694e6f02a6f6e7c2002c075f2ac8dcd70f1f->leave($__internal_3fa5abb10035d5da2d854549b1bc694e6f02a6f6e7c2002c075f2ac8dcd70f1f_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_35bd23b5db730f4e8416bb071f9ab1e963e837a6d27e3d7ccb7f4f769dc66f8d = $this->env->getExtension("native_profiler");
        $__internal_35bd23b5db730f4e8416bb071f9ab1e963e837a6d27e3d7ccb7f4f769dc66f8d->enter($__internal_35bd23b5db730f4e8416bb071f9ab1e963e837a6d27e3d7ccb7f4f769dc66f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "  <div id='container'>
    <div id='menu'>
     ";
        // line 19
        $this->displayBlock('menu_admin', $context, $blocks);
        // line 28
        echo "  ";
        
        $__internal_35bd23b5db730f4e8416bb071f9ab1e963e837a6d27e3d7ccb7f4f769dc66f8d->leave($__internal_35bd23b5db730f4e8416bb071f9ab1e963e837a6d27e3d7ccb7f4f769dc66f8d_prof);

    }

    // line 19
    public function block_menu_admin($context, array $blocks = array())
    {
        $__internal_e22809611adbae4dce75f28a2e48c8f2172ffd4ae03cb097e83ab29a2c5eea0a = $this->env->getExtension("native_profiler");
        $__internal_e22809611adbae4dce75f28a2e48c8f2172ffd4ae03cb097e83ab29a2c5eea0a->enter($__internal_e22809611adbae4dce75f28a2e48c8f2172ffd4ae03cb097e83ab29a2c5eea0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_admin"));

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
        
        $__internal_e22809611adbae4dce75f28a2e48c8f2172ffd4ae03cb097e83ab29a2c5eea0a->leave($__internal_e22809611adbae4dce75f28a2e48c8f2172ffd4ae03cb097e83ab29a2c5eea0a_prof);

    }

    // line 30
    public function block_board($context, array $blocks = array())
    {
        $__internal_52b6095521254704e88f4de60f1d8837486b9073f52c9752735728de7c0a7d73 = $this->env->getExtension("native_profiler");
        $__internal_52b6095521254704e88f4de60f1d8837486b9073f52c9752735728de7c0a7d73->enter($__internal_52b6095521254704e88f4de60f1d8837486b9073f52c9752735728de7c0a7d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "board"));

        // line 31
        echo "
   ";
        
        $__internal_52b6095521254704e88f4de60f1d8837486b9073f52c9752735728de7c0a7d73->leave($__internal_52b6095521254704e88f4de60f1d8837486b9073f52c9752735728de7c0a7d73_prof);

    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f5ef24ee07a439603abb4663e6f9485573c1867fd5b42b0e87f130a7e0fef042 = $this->env->getExtension("native_profiler");
        $__internal_f5ef24ee07a439603abb4663e6f9485573c1867fd5b42b0e87f130a7e0fef042->enter($__internal_f5ef24ee07a439603abb4663e6f9485573c1867fd5b42b0e87f130a7e0fef042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_f5ef24ee07a439603abb4663e6f9485573c1867fd5b42b0e87f130a7e0fef042->leave($__internal_f5ef24ee07a439603abb4663e6f9485573c1867fd5b42b0e87f130a7e0fef042_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_892dc0f013e2a8820a08eeb433b63596b64728a7b1f36d7e153c055de98cafa2 = $this->env->getExtension("native_profiler");
        $__internal_892dc0f013e2a8820a08eeb433b63596b64728a7b1f36d7e153c055de98cafa2->enter($__internal_892dc0f013e2a8820a08eeb433b63596b64728a7b1f36d7e153c055de98cafa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo " <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/admin.js"), "html", null, true);
        echo "\"></script>

 ";
        
        $__internal_892dc0f013e2a8820a08eeb433b63596b64728a7b1f36d7e153c055de98cafa2->leave($__internal_892dc0f013e2a8820a08eeb433b63596b64728a7b1f36d7e153c055de98cafa2_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Default/index.html.twig";
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
