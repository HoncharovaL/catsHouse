<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_8945168b67860cc9658fc9a2fb58d1048151df9c8d9baab5e67e5d2e1c2ab1d3 extends Twig_Template
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
        $__internal_7ef8a499d6a27f5af69e54ddd38ce2dd162456caaadcf11a8918fc9d61e67009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef8a499d6a27f5af69e54ddd38ce2dd162456caaadcf11a8918fc9d61e67009->enter($__internal_7ef8a499d6a27f5af69e54ddd38ce2dd162456caaadcf11a8918fc9d61e67009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_7ef8a499d6a27f5af69e54ddd38ce2dd162456caaadcf11a8918fc9d61e67009->leave($__internal_7ef8a499d6a27f5af69e54ddd38ce2dd162456caaadcf11a8918fc9d61e67009_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
