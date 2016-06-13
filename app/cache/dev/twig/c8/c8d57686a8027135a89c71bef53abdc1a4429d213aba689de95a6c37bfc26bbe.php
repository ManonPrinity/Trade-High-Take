<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_1d37056485262b249c4326c2aa8e6ed6b74ec899977178b773f52667dae75f1c extends Twig_Template
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
        $__internal_a3d1cf8569c1d4d7947c8bd6854bf35e9106423fe3044342dbf14c4ab0abb8f0 = $this->env->getExtension("native_profiler");
        $__internal_a3d1cf8569c1d4d7947c8bd6854bf35e9106423fe3044342dbf14c4ab0abb8f0->enter($__internal_a3d1cf8569c1d4d7947c8bd6854bf35e9106423fe3044342dbf14c4ab0abb8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a3d1cf8569c1d4d7947c8bd6854bf35e9106423fe3044342dbf14c4ab0abb8f0->leave($__internal_a3d1cf8569c1d4d7947c8bd6854bf35e9106423fe3044342dbf14c4ab0abb8f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
