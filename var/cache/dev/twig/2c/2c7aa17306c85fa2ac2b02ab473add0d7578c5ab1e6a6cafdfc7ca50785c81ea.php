<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_7716ca570c7a1309939a0db25558aefa56ec5470ad2e4557bc5ab52358532bac extends Twig_Template
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
        $__internal_a8f177c1f3f3f10164c35722e00c1908b0bccd16358a157671b6be682362bc45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f177c1f3f3f10164c35722e00c1908b0bccd16358a157671b6be682362bc45->enter($__internal_a8f177c1f3f3f10164c35722e00c1908b0bccd16358a157671b6be682362bc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a8f177c1f3f3f10164c35722e00c1908b0bccd16358a157671b6be682362bc45->leave($__internal_a8f177c1f3f3f10164c35722e00c1908b0bccd16358a157671b6be682362bc45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
