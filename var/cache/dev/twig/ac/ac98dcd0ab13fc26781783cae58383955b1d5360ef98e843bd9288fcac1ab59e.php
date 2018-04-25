<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_01f48a25652fdd94007f726fa3fb9307363c93576f4d6b80b378f799677c9445 extends Twig_Template
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
        $__internal_5c6be1f1a8e611ba5beb27244bf5289457493c1e255ba754a047d2a15348f154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c6be1f1a8e611ba5beb27244bf5289457493c1e255ba754a047d2a15348f154->enter($__internal_5c6be1f1a8e611ba5beb27244bf5289457493c1e255ba754a047d2a15348f154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_5c6be1f1a8e611ba5beb27244bf5289457493c1e255ba754a047d2a15348f154->leave($__internal_5c6be1f1a8e611ba5beb27244bf5289457493c1e255ba754a047d2a15348f154_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
