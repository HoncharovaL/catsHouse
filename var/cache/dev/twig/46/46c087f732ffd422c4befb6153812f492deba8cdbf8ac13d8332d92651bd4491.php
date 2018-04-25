<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_d8b9b7d2a55baf37f0f8aca9db168ca8a1d0c5333147125a835bd245f219e98c extends Twig_Template
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
        $__internal_9d7111c90731489f34bb7a97a2b0299fcb30f97e5abf538b8b73114c5c58c75d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7111c90731489f34bb7a97a2b0299fcb30f97e5abf538b8b73114c5c58c75d->enter($__internal_9d7111c90731489f34bb7a97a2b0299fcb30f97e5abf538b8b73114c5c58c75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_9d7111c90731489f34bb7a97a2b0299fcb30f97e5abf538b8b73114c5c58c75d->leave($__internal_9d7111c90731489f34bb7a97a2b0299fcb30f97e5abf538b8b73114c5c58c75d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
