<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_92d946e2f532f49864da3b2439fa3ad6317b5286ec111d931993ccd8069357ec extends Twig_Template
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
        $__internal_ed340ea673f8dd3b8bdb497878337febc7aed0a7f440a28cf2535e4c05cb6895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed340ea673f8dd3b8bdb497878337febc7aed0a7f440a28cf2535e4c05cb6895->enter($__internal_ed340ea673f8dd3b8bdb497878337febc7aed0a7f440a28cf2535e4c05cb6895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_ed340ea673f8dd3b8bdb497878337febc7aed0a7f440a28cf2535e4c05cb6895->leave($__internal_ed340ea673f8dd3b8bdb497878337febc7aed0a7f440a28cf2535e4c05cb6895_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
