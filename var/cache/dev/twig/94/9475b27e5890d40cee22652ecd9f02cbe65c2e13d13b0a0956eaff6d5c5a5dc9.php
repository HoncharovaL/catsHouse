<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_60c025e0f4102bf9a2ed50ed4903e7c7ee531965db10c49adbee857db48932bf extends Twig_Template
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
        $__internal_e521eda8b174b2f6984be1cb9cf44dbca7cb63e35924ed3be5fa2d1289f716a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e521eda8b174b2f6984be1cb9cf44dbca7cb63e35924ed3be5fa2d1289f716a6->enter($__internal_e521eda8b174b2f6984be1cb9cf44dbca7cb63e35924ed3be5fa2d1289f716a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_e521eda8b174b2f6984be1cb9cf44dbca7cb63e35924ed3be5fa2d1289f716a6->leave($__internal_e521eda8b174b2f6984be1cb9cf44dbca7cb63e35924ed3be5fa2d1289f716a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
