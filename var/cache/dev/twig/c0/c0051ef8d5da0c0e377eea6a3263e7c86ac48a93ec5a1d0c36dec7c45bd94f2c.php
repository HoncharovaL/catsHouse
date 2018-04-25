<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3d6d086b89bc8ff76e1e4f6e455746fd52fafb0dc4f1527230002121aa7f9137 extends Twig_Template
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
        $__internal_93939715622de00df3631d86a42d35baaecb929f98d2b1b18c2d57a2c377ab11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93939715622de00df3631d86a42d35baaecb929f98d2b1b18c2d57a2c377ab11->enter($__internal_93939715622de00df3631d86a42d35baaecb929f98d2b1b18c2d57a2c377ab11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_93939715622de00df3631d86a42d35baaecb929f98d2b1b18c2d57a2c377ab11->leave($__internal_93939715622de00df3631d86a42d35baaecb929f98d2b1b18c2d57a2c377ab11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
