<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_6b25f89506e78d4a8660bcf9d05e7d1cc325208d0b99c99121c17641b760983d extends Twig_Template
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
        $__internal_e02c99530af619c34e1599fc12599a3a4f262a77754b05008b2dd3c4fd3538b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e02c99530af619c34e1599fc12599a3a4f262a77754b05008b2dd3c4fd3538b4->enter($__internal_e02c99530af619c34e1599fc12599a3a4f262a77754b05008b2dd3c4fd3538b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e02c99530af619c34e1599fc12599a3a4f262a77754b05008b2dd3c4fd3538b4->leave($__internal_e02c99530af619c34e1599fc12599a3a4f262a77754b05008b2dd3c4fd3538b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
