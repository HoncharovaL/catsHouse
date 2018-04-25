<?php

/* :comments:edit.html.twig */
class __TwigTemplate_e84083257511dfaf9522766909d3245571fb96fb55b38bac12e33afcd3ec47fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comments:edit.html.twig", 1);
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
        $__internal_519d0961a5c64eb77c684d7246aceb0031678cdb843ea76e867a9bd877a63eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_519d0961a5c64eb77c684d7246aceb0031678cdb843ea76e867a9bd877a63eec->enter($__internal_519d0961a5c64eb77c684d7246aceb0031678cdb843ea76e867a9bd877a63eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comments:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_519d0961a5c64eb77c684d7246aceb0031678cdb843ea76e867a9bd877a63eec->leave($__internal_519d0961a5c64eb77c684d7246aceb0031678cdb843ea76e867a9bd877a63eec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5e0d21436c8545ff6b6e4f7c991c8536bf06c4c791adb9b90a916bfe5a27f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e0d21436c8545ff6b6e4f7c991c8536bf06c4c791adb9b90a916bfe5a27f25->enter($__internal_f5e0d21436c8545ff6b6e4f7c991c8536bf06c4c791adb9b90a916bfe5a27f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"services-edit container\">
        <div class=\"row\">
            <div class=\"button-container left col-4\">
                <a class=\"grey-button\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nursery_show", array("idNursery" => $this->env->getExtension('AppBundle\Twig\Extension\NurseryExtension')->getNurseryId())), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.back"), "html", null, true);
        echo "</a>
            </div>
            <div class=\"button-container col-8\">
                ";
        // line 10
        if (array_key_exists("delete_form", $context)) {
            // line 11
            echo "                    ";
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 11, $this->getSourceContext()); })()), 'form_start');
            echo "
                    <input class=\"grey-button\" type=\"submit\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.delete"), "html", null, true);
            echo "\">
                    ";
            // line 13
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 13, $this->getSourceContext()); })()), 'form_end');
            echo "
                ";
        }
        // line 15
        echo "                <input class=\"orange-button\" onclick=\"\$('#main-form').submit();\" type=\"submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.save"), "html", null, true);
        echo "\"/>
            </div>
        </div>
        ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), 'form_start', array("attr" => array("id" => "main-form")));
        echo "
        <div class=\"tabs\">
            <ul>
                <li><a href=\"#tab-main-info\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.main_info"), "html", null, true);
        echo "</a></li>                
            </ul>
            <div class=\"services-info row\" id=\"tab-main-info\">                
                <div class=\"main-info col-6\">
                    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "klname", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), "phone", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "email", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), "question", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_f5e0d21436c8545ff6b6e4f7c991c8536bf06c4c791adb9b90a916bfe5a27f25->leave($__internal_f5e0d21436c8545ff6b6e4f7c991c8536bf06c4c791adb9b90a916bfe5a27f25_prof);

    }

    public function getTemplateName()
    {
        return ":comments:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 28,  97 => 27,  93 => 26,  89 => 25,  82 => 21,  76 => 18,  69 => 15,  64 => 13,  60 => 12,  55 => 11,  53 => 10,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"services-edit container\">
        <div class=\"row\">
            <div class=\"button-container left col-4\">
                <a class=\"grey-button\" href=\"{{ path('nursery_show', { 'idNursery': get_nursery_id()}) }}\">{{'total.back'|trans}}</a>
            </div>
            <div class=\"button-container col-8\">
                {% if delete_form is defined %}
                    {{ form_start(delete_form) }}
                    <input class=\"grey-button\" type=\"submit\" value=\"{{\"total.delete\"|trans}}\">
                    {{ form_end(delete_form) }}
                {% endif %}
                <input class=\"orange-button\" onclick=\"\$('#main-form').submit();\" type=\"submit\" value=\"{{'total.save'|trans}}\"/>
            </div>
        </div>
        {{ form_start(form, {'attr': {'id': 'main-form'} }) }}
        <div class=\"tabs\">
            <ul>
                <li><a href=\"#tab-main-info\">{{'total.main_info'|trans}}</a></li>                
            </ul>
            <div class=\"services-info row\" id=\"tab-main-info\">                
                <div class=\"main-info col-6\">
                    {{ form_row(form.klname, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.phone, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.email, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.question, {'attr': {'class': 'parent-width'} })}}
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", ":comments:edit.html.twig", "/var/www/zabava/app/Resources/views/comments/edit.html.twig");
    }
}
