<?php

/* :vaccinations:new.html.twig */
class __TwigTemplate_e604ccfb8d70f16438e4372e5ba42a48f00b6268d8905614a0aac3788f318ab0 extends Twig_Template
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
        $__internal_3c51cf8b56efe6bea7d33fc9aca4c904ad7c05090a4b2ab04db3ac509006f01d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c51cf8b56efe6bea7d33fc9aca4c904ad7c05090a4b2ab04db3ac509006f01d->enter($__internal_3c51cf8b56efe6bea7d33fc9aca4c904ad7c05090a4b2ab04db3ac509006f01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":vaccinations:new.html.twig"));

        // line 1
        echo "<div class=\"edit-head\">
    <h3>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.create"), "html", null, true);
        echo "</h3>
</div>
<div class=\"edit-content\">
";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vaccinations_new")));
        echo "
";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "vaccinations", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "vaccinationsEng", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
<input class=\"orange-button\" type=\"submit\" value=";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.create"), "html", null, true);
        echo " />
";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_3c51cf8b56efe6bea7d33fc9aca4c904ad7c05090a4b2ab04db3ac509006f01d->leave($__internal_3c51cf8b56efe6bea7d33fc9aca4c904ad7c05090a4b2ab04db3ac509006f01d_prof);

    }

    public function getTemplateName()
    {
        return ":vaccinations:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"edit-head\">
    <h3>{{'total.create'|trans}}</h3>
</div>
<div class=\"edit-content\">
{{ form_start(form, {'action':path('vaccinations_new')}) }}
{{ form_row(form.vaccinations, {'attr': {'class': 'parent-width'} })}}
{{ form_row(form.vaccinationsEng, {'attr': {'class': 'parent-width'} })}}
<input class=\"orange-button\" type=\"submit\" value={{'total.create'|trans}} />
{{ form_end(form) }}
</div>
", ":vaccinations:new.html.twig", "/var/www/zabava/app/Resources/views/vaccinations/new.html.twig");
    }
}
