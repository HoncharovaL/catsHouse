<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_ddc07922aab32d4bbd1b2da8780d482c5aafefe7268dcb16016996504aedf722 extends Twig_Template
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
        $__internal_26b10f93f30a4332111b75b2df1a2ac2c63163f1d6c632eb45b286691f3fbf5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b10f93f30a4332111b75b2df1a2ac2c63163f1d6c632eb45b286691f3fbf5f->enter($__internal_26b10f93f30a4332111b75b2df1a2ac2c63163f1d6c632eb45b286691f3fbf5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_26b10f93f30a4332111b75b2df1a2ac2c63163f1d6c632eb45b286691f3fbf5f->leave($__internal_26b10f93f30a4332111b75b2df1a2ac2c63163f1d6c632eb45b286691f3fbf5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
