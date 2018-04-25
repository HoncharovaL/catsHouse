<?php

/* :services:new.html.twig */
class __TwigTemplate_272c3f8c4848efac2bc15cef2199f0f009729349b21560523d693dafe11ed44b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":services:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d7c258c124b71efa85bcaa07e72e402638fccd16987773745390724c75d1258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d7c258c124b71efa85bcaa07e72e402638fccd16987773745390724c75d1258->enter($__internal_7d7c258c124b71efa85bcaa07e72e402638fccd16987773745390724c75d1258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":services:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d7c258c124b71efa85bcaa07e72e402638fccd16987773745390724c75d1258->leave($__internal_7d7c258c124b71efa85bcaa07e72e402638fccd16987773745390724c75d1258_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8328ca09178ec394e351f18ea6d2595c417048ea379f64df394f94508aebf0b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8328ca09178ec394e351f18ea6d2595c417048ea379f64df394f94508aebf0b3->enter($__internal_8328ca09178ec394e351f18ea6d2595c417048ea379f64df394f94508aebf0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("services.list.services"), "html", null, true);
        echo "</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.create"), "html", null, true);
        echo "\"/>
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.back"), "html", null, true);
        echo "</a>
        </li>
    </ul>
";
        
        $__internal_8328ca09178ec394e351f18ea6d2595c417048ea379f64df394f94508aebf0b3->leave($__internal_8328ca09178ec394e351f18ea6d2595c417048ea379f64df394f94508aebf0b3_prof);

    }

    public function getTemplateName()
    {
        return ":services:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  58 => 9,  54 => 8,  50 => 7,  46 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>{{'services.list.services'|trans}}</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"{{'total.create'|trans}}\"/>
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('services_index') }}\">{{'total.back'|trans}}</a>
        </li>
    </ul>
{% endblock %}
", ":services:new.html.twig", "/var/www/zabava/app/Resources/views/services/new.html.twig");
    }
}
