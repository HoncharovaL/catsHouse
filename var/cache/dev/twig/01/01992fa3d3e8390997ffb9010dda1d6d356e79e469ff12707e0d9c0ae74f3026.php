<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_0e81dcdd16aa629f0ced5125b89d66fda412fa2bdb1e08814addf743eabfef39 extends Twig_Template
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
        $__internal_127eacc8f550b8ddb57fd13c4387fff9fc70ffae821e4dccdd8e4e854b0f905b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_127eacc8f550b8ddb57fd13c4387fff9fc70ffae821e4dccdd8e4e854b0f905b->enter($__internal_127eacc8f550b8ddb57fd13c4387fff9fc70ffae821e4dccdd8e4e854b0f905b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_127eacc8f550b8ddb57fd13c4387fff9fc70ffae821e4dccdd8e4e854b0f905b->leave($__internal_127eacc8f550b8ddb57fd13c4387fff9fc70ffae821e4dccdd8e4e854b0f905b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
