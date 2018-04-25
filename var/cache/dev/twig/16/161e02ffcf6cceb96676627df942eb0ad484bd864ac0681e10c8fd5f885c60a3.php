<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_740f0dbb4b11dac8a569a4dc53c915a30f55cd288b1441a477bf11e011f359b7 extends Twig_Template
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
        $__internal_d919171603100a7e09c2bf2618c24cd0ed58a9bafa52802086425782d3a6c3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d919171603100a7e09c2bf2618c24cd0ed58a9bafa52802086425782d3a6c3a7->enter($__internal_d919171603100a7e09c2bf2618c24cd0ed58a9bafa52802086425782d3a6c3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d919171603100a7e09c2bf2618c24cd0ed58a9bafa52802086425782d3a6c3a7->leave($__internal_d919171603100a7e09c2bf2618c24cd0ed58a9bafa52802086425782d3a6c3a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
