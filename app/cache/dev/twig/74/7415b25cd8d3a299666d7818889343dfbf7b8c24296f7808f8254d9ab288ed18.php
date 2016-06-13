<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f34f1f915ac52133dd4ff6f31b3512e222312af283f81a30d92a880137d570e9 extends Twig_Template
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
        $__internal_e42073563fb1523556549d0cd881de4699cf8513cb46df8ce006294637ad7d78 = $this->env->getExtension("native_profiler");
        $__internal_e42073563fb1523556549d0cd881de4699cf8513cb46df8ce006294637ad7d78->enter($__internal_e42073563fb1523556549d0cd881de4699cf8513cb46df8ce006294637ad7d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e42073563fb1523556549d0cd881de4699cf8513cb46df8ce006294637ad7d78->leave($__internal_e42073563fb1523556549d0cd881de4699cf8513cb46df8ce006294637ad7d78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
