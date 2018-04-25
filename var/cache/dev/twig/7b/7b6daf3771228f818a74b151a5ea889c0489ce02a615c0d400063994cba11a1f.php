<?php

/* :titles:new.html.twig */
class __TwigTemplate_a1576ee88f6fe6deaa730df71968ccb9e2901dac540659338a15623ebd08a265 extends Twig_Template
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
        $__internal_a8cddb1d76e57d0b08eaf90719a822bbb7e6f6ad3afe68a421048e10e10f1e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8cddb1d76e57d0b08eaf90719a822bbb7e6f6ad3afe68a421048e10e10f1e3c->enter($__internal_a8cddb1d76e57d0b08eaf90719a822bbb7e6f6ad3afe68a421048e10e10f1e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":titles:new.html.twig"));

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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("titles_new")));
        echo "
";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "title", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "titleEng", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
<input class=\"orange-button\" type=\"submit\" value=";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.create"), "html", null, true);
        echo " />
";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "
</div>";
        
        $__internal_a8cddb1d76e57d0b08eaf90719a822bbb7e6f6ad3afe68a421048e10e10f1e3c->leave($__internal_a8cddb1d76e57d0b08eaf90719a822bbb7e6f6ad3afe68a421048e10e10f1e3c_prof);

    }

    public function getTemplateName()
    {
        return ":titles:new.html.twig";
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
{{ form_start(form, {'action':path('titles_new')}) }}
{{ form_row(form.title, {'attr': {'class': 'parent-width'} })}}
{{ form_row(form.titleEng, {'attr': {'class': 'parent-width'} })}}
<input class=\"orange-button\" type=\"submit\" value={{'total.create'|trans}} />
{{ form_end(form) }}
</div>", ":titles:new.html.twig", "/var/www/zabava/app/Resources/views/titles/new.html.twig");
    }
}
