<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e6babf467fca77a37443f785fb641599f9030a59024304de8b923348550d8203 extends Twig_Template
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
        $__internal_68ea7f000255b1b8397659e9f8706353eaf4b730e381a9d519088c911229a150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ea7f000255b1b8397659e9f8706353eaf4b730e381a9d519088c911229a150->enter($__internal_68ea7f000255b1b8397659e9f8706353eaf4b730e381a9d519088c911229a150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_68ea7f000255b1b8397659e9f8706353eaf4b730e381a9d519088c911229a150->leave($__internal_68ea7f000255b1b8397659e9f8706353eaf4b730e381a9d519088c911229a150_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
