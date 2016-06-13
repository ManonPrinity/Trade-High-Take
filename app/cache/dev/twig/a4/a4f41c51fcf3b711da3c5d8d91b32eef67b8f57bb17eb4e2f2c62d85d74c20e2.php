<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0f70a762025a7c41dc0447cba9e9b1a94bc03f5c6978d429ba266a37a89f5f0f extends Twig_Template
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
        $__internal_a4e2bf706f253da934634ffa9e6d144140f2ea53ba24e92594df34cac299397e = $this->env->getExtension("native_profiler");
        $__internal_a4e2bf706f253da934634ffa9e6d144140f2ea53ba24e92594df34cac299397e->enter($__internal_a4e2bf706f253da934634ffa9e6d144140f2ea53ba24e92594df34cac299397e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a4e2bf706f253da934634ffa9e6d144140f2ea53ba24e92594df34cac299397e->leave($__internal_a4e2bf706f253da934634ffa9e6d144140f2ea53ba24e92594df34cac299397e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
