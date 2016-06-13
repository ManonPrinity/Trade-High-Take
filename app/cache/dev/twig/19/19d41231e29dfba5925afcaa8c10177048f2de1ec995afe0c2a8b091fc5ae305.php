<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_9d83da14c842557ddfb3dd2312b212831f24ce45cdc6d345592dacdfc97f5675 extends Twig_Template
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
        $__internal_ec057f4d99e5a060997cc8c806405debf566c60dc5ca42495a1559ecd50da09f = $this->env->getExtension("native_profiler");
        $__internal_ec057f4d99e5a060997cc8c806405debf566c60dc5ca42495a1559ecd50da09f->enter($__internal_ec057f4d99e5a060997cc8c806405debf566c60dc5ca42495a1559ecd50da09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ec057f4d99e5a060997cc8c806405debf566c60dc5ca42495a1559ecd50da09f->leave($__internal_ec057f4d99e5a060997cc8c806405debf566c60dc5ca42495a1559ecd50da09f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
