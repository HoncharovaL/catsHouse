<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_6cab17f37a15721cad911c30702250d5f874d9f5b3c62685cd34588c5469bfc9 extends Twig_Template
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
        $__internal_81d07b90a73c50122b6f2876c194800d0d6840a9614f8572d863e574cf69d528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d07b90a73c50122b6f2876c194800d0d6840a9614f8572d863e574cf69d528->enter($__internal_81d07b90a73c50122b6f2876c194800d0d6840a9614f8572d863e574cf69d528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_81d07b90a73c50122b6f2876c194800d0d6840a9614f8572d863e574cf69d528->leave($__internal_81d07b90a73c50122b6f2876c194800d0d6840a9614f8572d863e574cf69d528_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
