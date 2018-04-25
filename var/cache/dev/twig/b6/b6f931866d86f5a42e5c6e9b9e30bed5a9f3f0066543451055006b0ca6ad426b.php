<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_55d6d4c0a45fa9d2dd18aef44755f72e6c3333967f54758cb0145a712354c8a9 extends Twig_Template
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
        $__internal_a22bf53b29eb2884ec8f3a18dfc270b8e53ef93218d06ec2a5549d821304db84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a22bf53b29eb2884ec8f3a18dfc270b8e53ef93218d06ec2a5549d821304db84->enter($__internal_a22bf53b29eb2884ec8f3a18dfc270b8e53ef93218d06ec2a5549d821304db84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_a22bf53b29eb2884ec8f3a18dfc270b8e53ef93218d06ec2a5549d821304db84->leave($__internal_a22bf53b29eb2884ec8f3a18dfc270b8e53ef93218d06ec2a5549d821304db84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
