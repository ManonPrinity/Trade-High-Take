<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_e2ee05bcc299bdabb046359a68f2170b8f9f4e38e28a2d7ab8a91ff68ffb640b extends Twig_Template
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
        $__internal_969fcfb6a7f7101101165a6910c4380281aac25e3df9a912eba1c1871fec1dc8 = $this->env->getExtension("native_profiler");
        $__internal_969fcfb6a7f7101101165a6910c4380281aac25e3df9a912eba1c1871fec1dc8->enter($__internal_969fcfb6a7f7101101165a6910c4380281aac25e3df9a912eba1c1871fec1dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_969fcfb6a7f7101101165a6910c4380281aac25e3df9a912eba1c1871fec1dc8->leave($__internal_969fcfb6a7f7101101165a6910c4380281aac25e3df9a912eba1c1871fec1dc8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
