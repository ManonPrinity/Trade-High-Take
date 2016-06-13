<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c3d931549114272ed9b7ed852606b87e48cbf21d3a0ce32549581bae53e6b2ff extends Twig_Template
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
        $__internal_9d8ea60727f7642a29760acc3b65ffea910b7c311600569b23fb03f64a79978d = $this->env->getExtension("native_profiler");
        $__internal_9d8ea60727f7642a29760acc3b65ffea910b7c311600569b23fb03f64a79978d->enter($__internal_9d8ea60727f7642a29760acc3b65ffea910b7c311600569b23fb03f64a79978d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9d8ea60727f7642a29760acc3b65ffea910b7c311600569b23fb03f64a79978d->leave($__internal_9d8ea60727f7642a29760acc3b65ffea910b7c311600569b23fb03f64a79978d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
