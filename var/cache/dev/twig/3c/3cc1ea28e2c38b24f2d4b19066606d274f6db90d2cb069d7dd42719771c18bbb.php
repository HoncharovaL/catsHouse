<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_229acad5f33de36861df0f2e03532a72eb36bd37c4492feb603041dc73ade44b extends Twig_Template
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
        $__internal_68657bcaf59010df249e1328d839dbef96cb4993992a176169090d28b98b4f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68657bcaf59010df249e1328d839dbef96cb4993992a176169090d28b98b4f96->enter($__internal_68657bcaf59010df249e1328d839dbef96cb4993992a176169090d28b98b4f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_68657bcaf59010df249e1328d839dbef96cb4993992a176169090d28b98b4f96->leave($__internal_68657bcaf59010df249e1328d839dbef96cb4993992a176169090d28b98b4f96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
