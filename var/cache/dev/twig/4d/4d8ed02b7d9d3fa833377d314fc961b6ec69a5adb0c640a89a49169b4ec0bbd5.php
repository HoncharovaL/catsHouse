<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3bd2df49644b79e77d42caee32501fcf4f0c2feffb439998871912959a9bcce8 extends Twig_Template
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
        $__internal_e457ea206a48f2c3dfe5d2b615f5ef2f413bfced86fe8cd23aee164ef5651112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e457ea206a48f2c3dfe5d2b615f5ef2f413bfced86fe8cd23aee164ef5651112->enter($__internal_e457ea206a48f2c3dfe5d2b615f5ef2f413bfced86fe8cd23aee164ef5651112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e457ea206a48f2c3dfe5d2b615f5ef2f413bfced86fe8cd23aee164ef5651112->leave($__internal_e457ea206a48f2c3dfe5d2b615f5ef2f413bfced86fe8cd23aee164ef5651112_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
