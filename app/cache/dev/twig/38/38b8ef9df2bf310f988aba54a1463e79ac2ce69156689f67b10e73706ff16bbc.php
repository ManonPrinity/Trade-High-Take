<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_1eb45745e43f3b97c0047e200c75b5585a1af50f86111a77eaa198530604f443 extends Twig_Template
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
        $__internal_78c6fa1267dd992f6ee42ac7f94c7826caa3e13246bf30be067e5f16f9235204 = $this->env->getExtension("native_profiler");
        $__internal_78c6fa1267dd992f6ee42ac7f94c7826caa3e13246bf30be067e5f16f9235204->enter($__internal_78c6fa1267dd992f6ee42ac7f94c7826caa3e13246bf30be067e5f16f9235204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_78c6fa1267dd992f6ee42ac7f94c7826caa3e13246bf30be067e5f16f9235204->leave($__internal_78c6fa1267dd992f6ee42ac7f94c7826caa3e13246bf30be067e5f16f9235204_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
