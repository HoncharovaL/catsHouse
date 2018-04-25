<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_741c2f98a928ada5c96f388712b7b8245b62a61e6baa308a49c032d83787e765 extends Twig_Template
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
        $__internal_b15483e23457a4fe2befce7cbaf44e4fcc5f9b89bcc99e31183191fe3067b95b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15483e23457a4fe2befce7cbaf44e4fcc5f9b89bcc99e31183191fe3067b95b->enter($__internal_b15483e23457a4fe2befce7cbaf44e4fcc5f9b89bcc99e31183191fe3067b95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b15483e23457a4fe2befce7cbaf44e4fcc5f9b89bcc99e31183191fe3067b95b->leave($__internal_b15483e23457a4fe2befce7cbaf44e4fcc5f9b89bcc99e31183191fe3067b95b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
