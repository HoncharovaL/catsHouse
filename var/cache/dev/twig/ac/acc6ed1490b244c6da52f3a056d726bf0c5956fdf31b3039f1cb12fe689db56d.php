<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_43f0218980cf7059fc4b950c60369be66d4c8b72f14e7183904ce74364739a2f extends Twig_Template
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
        $__internal_8af9ca17adb413391a5c9f75800dc6edb9ba6472b5780700afae41bfe7ca8e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8af9ca17adb413391a5c9f75800dc6edb9ba6472b5780700afae41bfe7ca8e0d->enter($__internal_8af9ca17adb413391a5c9f75800dc6edb9ba6472b5780700afae41bfe7ca8e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_8af9ca17adb413391a5c9f75800dc6edb9ba6472b5780700afae41bfe7ca8e0d->leave($__internal_8af9ca17adb413391a5c9f75800dc6edb9ba6472b5780700afae41bfe7ca8e0d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
