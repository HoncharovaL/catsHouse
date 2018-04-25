<?php

/* :vaccinations:edit.html.twig */
class __TwigTemplate_ad401a83a2d699188fcf81a67f40f444496e485dc651244ad1e1f9f1ee78620d extends Twig_Template
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
        $__internal_55c66d5c400a05639fd5e5706e39a942f70d1b0c441dc79c351445ed6e40fc00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c66d5c400a05639fd5e5706e39a942f70d1b0c441dc79c351445ed6e40fc00->enter($__internal_55c66d5c400a05639fd5e5706e39a942f70d1b0c441dc79c351445ed6e40fc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":vaccinations:edit.html.twig"));

        // line 1
        echo "<div class=\"edit-head\">
    <h3>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.edit"), "html", null, true);
        echo "</h3>
</div>
<div class=\"edit-content\">
    ";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 5, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vaccinations_edit", array("idVaccinations" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "idVaccinations"), "method")))));
        echo "
    ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), "vaccinations", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
    ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), "vaccinationsEng", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
    <input class=\"orange-button\" type=\"submit\" value=";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.edit"), "html", null, true);
        echo " />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "
</div>";
        
        $__internal_55c66d5c400a05639fd5e5706e39a942f70d1b0c441dc79c351445ed6e40fc00->leave($__internal_55c66d5c400a05639fd5e5706e39a942f70d1b0c441dc79c351445ed6e40fc00_prof);

    }

    public function getTemplateName()
    {
        return ":vaccinations:edit.html.twig";
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
    <h3>{{'total.edit'|trans}}</h3>
</div>
<div class=\"edit-content\">
    {{ form_start(edit_form, {'action':path('vaccinations_edit',{'idVaccinations':app.request.get('idVaccinations')})}) }}
    {{ form_row(edit_form.vaccinations, {'attr': {'class': 'parent-width'} })}}
    {{ form_row(edit_form.vaccinationsEng, {'attr': {'class': 'parent-width'} })}}
    <input class=\"orange-button\" type=\"submit\" value={{'total.edit'|trans}} />
    {{ form_end(edit_form) }}
</div>", ":vaccinations:edit.html.twig", "/var/www/zabava/app/Resources/views/vaccinations/edit.html.twig");
    }
}
