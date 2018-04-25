<?php

/* :nursery:new.html.twig */
class __TwigTemplate_40fca369c755de420b249963899776374fdd4f0c6cb540dca66e6b7e4b03c382 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":nursery:new.html.twig", 1);
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
        $__internal_24238c76a0c8313cb43f93afc696a321916b5b02b4d416f3be2769f7ee2328cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24238c76a0c8313cb43f93afc696a321916b5b02b4d416f3be2769f7ee2328cd->enter($__internal_24238c76a0c8313cb43f93afc696a321916b5b02b4d416f3be2769f7ee2328cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":nursery:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24238c76a0c8313cb43f93afc696a321916b5b02b4d416f3be2769f7ee2328cd->leave($__internal_24238c76a0c8313cb43f93afc696a321916b5b02b4d416f3be2769f7ee2328cd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b20c378d6fbab069c3374218415b9d4ef508d4632cd740f9e8ddbd3afcbc858d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20c378d6fbab069c3374218415b9d4ef508d4632cd740f9e8ddbd3afcbc858d->enter($__internal_b20c378d6fbab069c3374218415b9d4ef508d4632cd740f9e8ddbd3afcbc858d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.partners"), "html", null, true);
        echo "</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.create"), "html", null, true);
        echo " />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nursery_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.back"), "html", null, true);
        echo "</a>
        </li>
    </ul>
";
        
        $__internal_b20c378d6fbab069c3374218415b9d4ef508d4632cd740f9e8ddbd3afcbc858d->leave($__internal_b20c378d6fbab069c3374218415b9d4ef508d4632cd740f9e8ddbd3afcbc858d_prof);

    }

    public function getTemplateName()
    {
        return ":nursery:new.html.twig";
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
    <h1>{{'total.partners'|trans}}</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value={{'total.create'|trans}} />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('nursery_index') }}\">{{'total.back'|trans}}</a>
        </li>
    </ul>
{% endblock %}
", ":nursery:new.html.twig", "/var/www/zabava/app/Resources/views/nursery/new.html.twig");
    }
}
