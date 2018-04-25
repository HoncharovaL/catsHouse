<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_67e70ebf8813116d7aab1a953f2d8038d6b6b6b38e3acb23bd3f68fc776137f6 extends Twig_Template
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
        $__internal_3a349249d6cbb192e7da6a40ef071bbc89096a4d7604ed5fe23c469b7eaa1474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a349249d6cbb192e7da6a40ef071bbc89096a4d7604ed5fe23c469b7eaa1474->enter($__internal_3a349249d6cbb192e7da6a40ef071bbc89096a4d7604ed5fe23c469b7eaa1474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_3a349249d6cbb192e7da6a40ef071bbc89096a4d7604ed5fe23c469b7eaa1474->leave($__internal_3a349249d6cbb192e7da6a40ef071bbc89096a4d7604ed5fe23c469b7eaa1474_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
