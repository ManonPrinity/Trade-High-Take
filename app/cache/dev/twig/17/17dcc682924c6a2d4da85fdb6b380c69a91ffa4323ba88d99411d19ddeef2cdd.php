<?php

/* @Account/Auth/login.html.twig */
class __TwigTemplate_ce2c706694d3e7c08e108305ee00c6aaa0ae55f4c26d241823ef83b33ec574ba extends Twig_Template
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
        $__internal_ecd3c833382a3449df918806dd18ae4c780947429cd53f659f35371722062c6d = $this->env->getExtension("native_profiler");
        $__internal_ecd3c833382a3449df918806dd18ae4c780947429cd53f659f35371722062c6d->enter($__internal_ecd3c833382a3449df918806dd18ae4c780947429cd53f659f35371722062c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Account/Auth/login.html.twig"));

        // line 1
        echo "<form class=\"\" method='post' action='";
        echo $this->env->getExtension('routing')->getPath("login");
        echo "'>
    ";
        // line 2
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 3
            echo "    <div class='red'>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</div><br>
    ";
        }
        // line 5
        echo "    <label for=\"\" class=\"\">Username</label>
    <input type=\"text\" id=\"\" name='username' class=\"\" placeholder=\"Username\" required autofocus>
    <label for=\"\" class=\"\">Password</label>
    <input type=\"password\" id=\"\" name=\"password\" class=\"\" placeholder=\"Password\" required>
    <div class=\"checkbox\">
    </div>
    <button class=\"\" type=\"submit\">Connexion</button>
</form>";
        
        $__internal_ecd3c833382a3449df918806dd18ae4c780947429cd53f659f35371722062c6d->leave($__internal_ecd3c833382a3449df918806dd18ae4c780947429cd53f659f35371722062c6d_prof);

    }

    public function getTemplateName()
    {
        return "@Account/Auth/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 3,  27 => 2,  22 => 1,);
    }
}
/* <form class="" method='post' action='{{path("login")}}'>*/
/*     {% if error %}*/
/*     <div class='red'>{{ error }}</div><br>*/
/*     {% endif %}*/
/*     <label for="" class="">Username</label>*/
/*     <input type="text" id="" name='username' class="" placeholder="Username" required autofocus>*/
/*     <label for="" class="">Password</label>*/
/*     <input type="password" id="" name="password" class="" placeholder="Password" required>*/
/*     <div class="checkbox">*/
/*     </div>*/
/*     <button class="" type="submit">Connexion</button>*/
/* </form>*/
