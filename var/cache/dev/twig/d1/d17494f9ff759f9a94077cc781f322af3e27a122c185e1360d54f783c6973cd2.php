<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_296c75323af665851799d5b06999f2e23dc4f2525737f0615431f51b93975335 extends Twig_Template
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
        $__internal_c46406f48b4caeba1566d252f64f213b23e146c1f8a097bf2840217a662a8cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c46406f48b4caeba1566d252f64f213b23e146c1f8a097bf2840217a662a8cfd->enter($__internal_c46406f48b4caeba1566d252f64f213b23e146c1f8a097bf2840217a662a8cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c46406f48b4caeba1566d252f64f213b23e146c1f8a097bf2840217a662a8cfd->leave($__internal_c46406f48b4caeba1566d252f64f213b23e146c1f8a097bf2840217a662a8cfd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
