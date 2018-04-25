<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_dbea359f6cd272f4fb736027daca48b398db546e10d784a7fc3f413ce3355a74 extends Twig_Template
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
        $__internal_7dcff8d6549a39b96ccbc6e0d36f47fafa97bb0742256684f838eeaaefaf2e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dcff8d6549a39b96ccbc6e0d36f47fafa97bb0742256684f838eeaaefaf2e6e->enter($__internal_7dcff8d6549a39b96ccbc6e0d36f47fafa97bb0742256684f838eeaaefaf2e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_7dcff8d6549a39b96ccbc6e0d36f47fafa97bb0742256684f838eeaaefaf2e6e->leave($__internal_7dcff8d6549a39b96ccbc6e0d36f47fafa97bb0742256684f838eeaaefaf2e6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
