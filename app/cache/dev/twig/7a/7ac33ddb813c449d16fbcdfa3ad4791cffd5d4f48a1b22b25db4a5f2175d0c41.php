<?php

/* :layout:menu.html.twig */
class __TwigTemplate_61a66131cd225e5d1e81feace443aaba3af01237cafe0c3b57ec872a768b7382 extends Twig_Template
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
        $__internal_1dc19db4efc2560e54292778ff16a03f0bc520f40d1647fa413dbb1ebdd618e9 = $this->env->getExtension("native_profiler");
        $__internal_1dc19db4efc2560e54292778ff16a03f0bc520f40d1647fa413dbb1ebdd618e9->enter($__internal_1dc19db4efc2560e54292778ff16a03f0bc520f40d1647fa413dbb1ebdd618e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":layout:menu.html.twig"));

        // line 1
        echo "<div id='auth'>
\t<ul>
\t\t";
        // line 3
        if ((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session"))) {
            // line 4
            echo "\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Deconnexion</a></li>
\t\t";
        } else {
            // line 6
            echo "\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Connexion</a></li>
\t\t<li><a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("ecommerce_account_registration");
            echo "\">Inscription</a></li>
\t\t";
        }
        // line 9
        echo "

\t</ul>
</div>

";
        
        $__internal_1dc19db4efc2560e54292778ff16a03f0bc520f40d1647fa413dbb1ebdd618e9->leave($__internal_1dc19db4efc2560e54292778ff16a03f0bc520f40d1647fa413dbb1ebdd618e9_prof);

    }

    public function getTemplateName()
    {
        return ":layout:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  39 => 7,  34 => 6,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <div id='auth'>*/
/* 	<ul>*/
/* 		{% if(session)  %}*/
/* 		<li><a href="{{ path('logout') }}">Deconnexion</a></li>*/
/* 		{% else %}*/
/* 		<li><a href="{{ path('login') }}">Connexion</a></li>*/
/* 		<li><a href="{{ path('ecommerce_account_registration') }}">Inscription</a></li>*/
/* 		{% endif %}*/
/* */
/* */
/* 	</ul>*/
/* </div>*/
/* */
/* */
