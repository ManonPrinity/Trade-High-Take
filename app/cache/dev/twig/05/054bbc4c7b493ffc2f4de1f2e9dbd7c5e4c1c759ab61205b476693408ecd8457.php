<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_f1b92c7a55df9e0afc241d240b41d9e9430ababa1e3c19d2613ee6596ecf51e7 extends Twig_Template
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
        $__internal_fe9fee85a9214f4e0c4a5cea139e146dd68ca62329100c27ceb14cfca0894568 = $this->env->getExtension("native_profiler");
        $__internal_fe9fee85a9214f4e0c4a5cea139e146dd68ca62329100c27ceb14cfca0894568->enter($__internal_fe9fee85a9214f4e0c4a5cea139e146dd68ca62329100c27ceb14cfca0894568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_fe9fee85a9214f4e0c4a5cea139e146dd68ca62329100c27ceb14cfca0894568->leave($__internal_fe9fee85a9214f4e0c4a5cea139e146dd68ca62329100c27ceb14cfca0894568_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
