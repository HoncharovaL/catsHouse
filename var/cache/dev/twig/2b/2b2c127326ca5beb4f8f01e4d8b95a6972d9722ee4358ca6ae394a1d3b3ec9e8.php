<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_4849f0c184af238edbcc1e06857bf759df80836818eb78c45b275cae6ac6bb8a extends Twig_Template
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
        $__internal_b3f2035e65ff21e383ba9e3c0c4a6aa7173ca8e8af6567cc099d0be297acb80c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3f2035e65ff21e383ba9e3c0c4a6aa7173ca8e8af6567cc099d0be297acb80c->enter($__internal_b3f2035e65ff21e383ba9e3c0c4a6aa7173ca8e8af6567cc099d0be297acb80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b3f2035e65ff21e383ba9e3c0c4a6aa7173ca8e8af6567cc099d0be297acb80c->leave($__internal_b3f2035e65ff21e383ba9e3c0c4a6aa7173ca8e8af6567cc099d0be297acb80c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
