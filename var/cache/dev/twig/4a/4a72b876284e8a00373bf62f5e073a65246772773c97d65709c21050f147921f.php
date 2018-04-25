<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_8fc46e08ff5c1e7b40dd151f16d8499aaa97369b4fa91f2250dc39e8d08a31ee extends Twig_Template
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
        $__internal_9861940da64897884eb1cf453ed3b3292ea7644cfc1a2715c768fd7e71f9303f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9861940da64897884eb1cf453ed3b3292ea7644cfc1a2715c768fd7e71f9303f->enter($__internal_9861940da64897884eb1cf453ed3b3292ea7644cfc1a2715c768fd7e71f9303f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9861940da64897884eb1cf453ed3b3292ea7644cfc1a2715c768fd7e71f9303f->leave($__internal_9861940da64897884eb1cf453ed3b3292ea7644cfc1a2715c768fd7e71f9303f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
