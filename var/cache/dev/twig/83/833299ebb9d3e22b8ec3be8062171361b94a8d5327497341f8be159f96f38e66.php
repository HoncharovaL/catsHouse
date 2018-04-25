<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_451454cc26451e1611e924fe0875cbbdb23b8cd3486fc39ca4b1e6ba59f050ad extends Twig_Template
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
        $__internal_69bfd86bbff978b09ab61612b0bc8661ee25e8003b00dd52c24c8a40fb2f3ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69bfd86bbff978b09ab61612b0bc8661ee25e8003b00dd52c24c8a40fb2f3ab9->enter($__internal_69bfd86bbff978b09ab61612b0bc8661ee25e8003b00dd52c24c8a40fb2f3ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_69bfd86bbff978b09ab61612b0bc8661ee25e8003b00dd52c24c8a40fb2f3ab9->leave($__internal_69bfd86bbff978b09ab61612b0bc8661ee25e8003b00dd52c24c8a40fb2f3ab9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
