<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_2db6e467d5b28476c66183cf5f4b1f28a2a287c1e20ab92a32676f942ce3ff3c extends Twig_Template
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
        $__internal_b3ae9e7e744fce49c9bcb22e0c3931299b3d6d6ec8f02196777b481a5a88b94b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ae9e7e744fce49c9bcb22e0c3931299b3d6d6ec8f02196777b481a5a88b94b->enter($__internal_b3ae9e7e744fce49c9bcb22e0c3931299b3d6d6ec8f02196777b481a5a88b94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_b3ae9e7e744fce49c9bcb22e0c3931299b3d6d6ec8f02196777b481a5a88b94b->leave($__internal_b3ae9e7e744fce49c9bcb22e0c3931299b3d6d6ec8f02196777b481a5a88b94b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
