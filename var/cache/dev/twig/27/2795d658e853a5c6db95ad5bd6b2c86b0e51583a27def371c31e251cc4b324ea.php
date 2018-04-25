<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_342d748afd17e452dc454e12f53260b1d521d9195a996132be00577670a88358 extends Twig_Template
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
        $__internal_86597ad72f82cfc24737acfdea9cb40bef7ce2da80872f095e8b0fe6d48c41f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86597ad72f82cfc24737acfdea9cb40bef7ce2da80872f095e8b0fe6d48c41f3->enter($__internal_86597ad72f82cfc24737acfdea9cb40bef7ce2da80872f095e8b0fe6d48c41f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_86597ad72f82cfc24737acfdea9cb40bef7ce2da80872f095e8b0fe6d48c41f3->leave($__internal_86597ad72f82cfc24737acfdea9cb40bef7ce2da80872f095e8b0fe6d48c41f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
