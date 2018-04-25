<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b7be8fb85dc8545baae3d87d978ea1d122c10406b5725092b2aefd40fba97be3 extends Twig_Template
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
        $__internal_350eee5bc2aea41e7eb6b987122e3a1f8033b13e8b1813fc503f1317a573c246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_350eee5bc2aea41e7eb6b987122e3a1f8033b13e8b1813fc503f1317a573c246->enter($__internal_350eee5bc2aea41e7eb6b987122e3a1f8033b13e8b1813fc503f1317a573c246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_350eee5bc2aea41e7eb6b987122e3a1f8033b13e8b1813fc503f1317a573c246->leave($__internal_350eee5bc2aea41e7eb6b987122e3a1f8033b13e8b1813fc503f1317a573c246_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
