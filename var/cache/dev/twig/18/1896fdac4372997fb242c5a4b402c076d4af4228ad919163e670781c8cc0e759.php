<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_4bcb2dd7fbe78b21d50c0a74e33318ad0959b6396c95eebb52660a2541121f41 extends Twig_Template
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
        $__internal_f878a520a3f8b5c1a9ced55af7e0cef12d08d2f2caa52d11ba753b6415d1da03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f878a520a3f8b5c1a9ced55af7e0cef12d08d2f2caa52d11ba753b6415d1da03->enter($__internal_f878a520a3f8b5c1a9ced55af7e0cef12d08d2f2caa52d11ba753b6415d1da03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f878a520a3f8b5c1a9ced55af7e0cef12d08d2f2caa52d11ba753b6415d1da03->leave($__internal_f878a520a3f8b5c1a9ced55af7e0cef12d08d2f2caa52d11ba753b6415d1da03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
