<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4c2c6469c72384c5011c3ddd5c76ade3833c9685176266e42a1afd66ebac06a7 extends Twig_Template
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
        $__internal_b6f457daa6796f729d69db1f9f02bf5ed62c02cf1c32fa7d7b2b8f95aae9728c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6f457daa6796f729d69db1f9f02bf5ed62c02cf1c32fa7d7b2b8f95aae9728c->enter($__internal_b6f457daa6796f729d69db1f9f02bf5ed62c02cf1c32fa7d7b2b8f95aae9728c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b6f457daa6796f729d69db1f9f02bf5ed62c02cf1c32fa7d7b2b8f95aae9728c->leave($__internal_b6f457daa6796f729d69db1f9f02bf5ed62c02cf1c32fa7d7b2b8f95aae9728c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
