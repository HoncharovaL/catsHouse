<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_f300c47ccbfee98db139c5528e33766a75c7dc795fc950f70585110eefa283c3 extends Twig_Template
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
        $__internal_0dcd5796e80fbcf91fc6dc5bd9ab8f98615cb74f206aab714b60a3c927a0ab9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dcd5796e80fbcf91fc6dc5bd9ab8f98615cb74f206aab714b60a3c927a0ab9b->enter($__internal_0dcd5796e80fbcf91fc6dc5bd9ab8f98615cb74f206aab714b60a3c927a0ab9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_0dcd5796e80fbcf91fc6dc5bd9ab8f98615cb74f206aab714b60a3c927a0ab9b->leave($__internal_0dcd5796e80fbcf91fc6dc5bd9ab8f98615cb74f206aab714b60a3c927a0ab9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
