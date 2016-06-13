<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_682d6e7da115e33baa1b1b9aab0f5907857501ac69eb2b18db10bfa319afd54e extends Twig_Template
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
        $__internal_59e84b7d851128c420a1c6b66dfb036f31e8414fcc1d4afa7708f0075494ac6d = $this->env->getExtension("native_profiler");
        $__internal_59e84b7d851128c420a1c6b66dfb036f31e8414fcc1d4afa7708f0075494ac6d->enter($__internal_59e84b7d851128c420a1c6b66dfb036f31e8414fcc1d4afa7708f0075494ac6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_59e84b7d851128c420a1c6b66dfb036f31e8414fcc1d4afa7708f0075494ac6d->leave($__internal_59e84b7d851128c420a1c6b66dfb036f31e8414fcc1d4afa7708f0075494ac6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
