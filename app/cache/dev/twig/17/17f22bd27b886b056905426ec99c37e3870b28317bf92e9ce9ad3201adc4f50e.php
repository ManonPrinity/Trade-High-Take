<?php

/* AccountBundle:Auth:login.html.twig */
class __TwigTemplate_7766d9d35e791c81a2bae98ae269f479ee989bade71edbe0578ffc12fa85581e extends Twig_Template
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
        $__internal_bb68854ea0f4fcbc7e594235b220001201da8545d16c9b0db76bce6fedf0e7d0 = $this->env->getExtension("native_profiler");
        $__internal_bb68854ea0f4fcbc7e594235b220001201da8545d16c9b0db76bce6fedf0e7d0->enter($__internal_bb68854ea0f4fcbc7e594235b220001201da8545d16c9b0db76bce6fedf0e7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccountBundle:Auth:login.html.twig"));

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
        
        $__internal_bb68854ea0f4fcbc7e594235b220001201da8545d16c9b0db76bce6fedf0e7d0->leave($__internal_bb68854ea0f4fcbc7e594235b220001201da8545d16c9b0db76bce6fedf0e7d0_prof);

    }

    public function getTemplateName()
    {
        return "AccountBundle:Auth:login.html.twig";
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
