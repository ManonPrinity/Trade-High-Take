<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_4fc55b0300bf7b58668e650bd0c2aad263f7dace0b4b68fb6e165487e5808f53 extends Twig_Template
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
        $__internal_9b164fb43620c984f1d89f36363a0b303a9cbb3cac2e581527537950862f9422 = $this->env->getExtension("native_profiler");
        $__internal_9b164fb43620c984f1d89f36363a0b303a9cbb3cac2e581527537950862f9422->enter($__internal_9b164fb43620c984f1d89f36363a0b303a9cbb3cac2e581527537950862f9422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_9b164fb43620c984f1d89f36363a0b303a9cbb3cac2e581527537950862f9422->leave($__internal_9b164fb43620c984f1d89f36363a0b303a9cbb3cac2e581527537950862f9422_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
