<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_f709e15f6ec57ef5a977434dcb0cc6f99563d8ad33ff4647148585c7053423f3 extends Twig_Template
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
        $__internal_c59f56738c4118afb25b74de14726911d3a6e48dd203c663bc9f588ae6251c8e = $this->env->getExtension("native_profiler");
        $__internal_c59f56738c4118afb25b74de14726911d3a6e48dd203c663bc9f588ae6251c8e->enter($__internal_c59f56738c4118afb25b74de14726911d3a6e48dd203c663bc9f588ae6251c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c59f56738c4118afb25b74de14726911d3a6e48dd203c663bc9f588ae6251c8e->leave($__internal_c59f56738c4118afb25b74de14726911d3a6e48dd203c663bc9f588ae6251c8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
