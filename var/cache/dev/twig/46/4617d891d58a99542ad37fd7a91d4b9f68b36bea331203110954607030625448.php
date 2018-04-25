<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_6282aa7d3f725b80de974ae2bef98a0c5845ac7cb5db8513e90d743bed6b43f9 extends Twig_Template
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
        $__internal_e5e265a81c82001f08c53fc196f5f81d99c948ad180e01d83be415b6b8fe98ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e265a81c82001f08c53fc196f5f81d99c948ad180e01d83be415b6b8fe98ed->enter($__internal_e5e265a81c82001f08c53fc196f5f81d99c948ad180e01d83be415b6b8fe98ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e5e265a81c82001f08c53fc196f5f81d99c948ad180e01d83be415b6b8fe98ed->leave($__internal_e5e265a81c82001f08c53fc196f5f81d99c948ad180e01d83be415b6b8fe98ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
