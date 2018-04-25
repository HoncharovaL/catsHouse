<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ca74b8a4db693847a2e7e5aa8612dd4e00409db3e4b1689f149111b4e086dbdb extends Twig_Template
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
        $__internal_763422681fe5ff1f00708a268154f816da9079542f49c8982c30a2f1be8cb78d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763422681fe5ff1f00708a268154f816da9079542f49c8982c30a2f1be8cb78d->enter($__internal_763422681fe5ff1f00708a268154f816da9079542f49c8982c30a2f1be8cb78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_763422681fe5ff1f00708a268154f816da9079542f49c8982c30a2f1be8cb78d->leave($__internal_763422681fe5ff1f00708a268154f816da9079542f49c8982c30a2f1be8cb78d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
