<?php

/* :nursery:editPar.html.twig */
class __TwigTemplate_c2cfc7265dc1d384036886a3846ab597becb27eba2bdba1ff24e77521d588974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":nursery:editPar.html.twig", 1);
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
        $__internal_8f3b6598597eade630fcef8e0445c51c69ba62f6050b1be4549e5047f2c4cea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f3b6598597eade630fcef8e0445c51c69ba62f6050b1be4549e5047f2c4cea5->enter($__internal_8f3b6598597eade630fcef8e0445c51c69ba62f6050b1be4549e5047f2c4cea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":nursery:editPar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f3b6598597eade630fcef8e0445c51c69ba62f6050b1be4549e5047f2c4cea5->leave($__internal_8f3b6598597eade630fcef8e0445c51c69ba62f6050b1be4549e5047f2c4cea5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0cfd7fdda8baa0f7f000d548ea0b0d95ba3a7d2f8db2a033625f97de227d2713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cfd7fdda8baa0f7f000d548ea0b0d95ba3a7d2f8db2a033625f97de227d2713->enter($__internal_0cfd7fdda8baa0f7f000d548ea0b0d95ba3a7d2f8db2a033625f97de227d2713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"nursery-edit container\">
        <div class=\"row\">
            <div class=\"button-container left col-4\">
                <a class=\"grey-button\" href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nursery_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.back"), "html", null, true);
        echo "</a>
            </div>
            <div class=\"button-container col-8\">                
                <input class=\"orange-button\" onclick=\"\$('#main-form').submit();\" type=\"submit\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.save"), "html", null, true);
        echo "\"/>
            </div>
        </div>
        ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 13, $this->getSourceContext()); })()), 'form_start', array("attr" => array("id" => "main-form")));
        echo "
        <div class=\"tabs\">
            <ul>
                <li><a href=\"#tab-main-info\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.main_info"), "html", null, true);
        echo "</a></li>
            </ul>
            <div class=\"nursery-info row\" id=\"tab-main-info\">
                <div class=\"main-photo col-4\">
                    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 20, $this->getSourceContext()); })()), "photoFile", array()), 'widget');
        echo "
                </div>
                <div class=\"main-info col-6\">
                    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 23, $this->getSourceContext()); })()), "nameNur", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 24, $this->getSourceContext()); })()), "nameNur_en", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 25, $this->getSourceContext()); })()), "owner", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 26, $this->getSourceContext()); })()), "ownerEn", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 27, $this->getSourceContext()); })()), "cellphone", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 28, $this->getSourceContext()); })()), "email", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 29, $this->getSourceContext()); })()), "site", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                </div>
            </div>
        </div>
        ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 33, $this->getSourceContext()); })()), 'form_end');
        echo "
    </div>

";
        
        $__internal_0cfd7fdda8baa0f7f000d548ea0b0d95ba3a7d2f8db2a033625f97de227d2713->leave($__internal_0cfd7fdda8baa0f7f000d548ea0b0d95ba3a7d2f8db2a033625f97de227d2713_prof);

    }

    public function getTemplateName()
    {
        return ":nursery:editPar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 33,  102 => 29,  98 => 28,  94 => 27,  90 => 26,  86 => 25,  82 => 24,  78 => 23,  72 => 20,  65 => 16,  59 => 13,  53 => 10,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"nursery-edit container\">
        <div class=\"row\">
            <div class=\"button-container left col-4\">
                <a class=\"grey-button\" href=\"{{ path('nursery_index') }}\">{{'total.back'|trans}}</a>
            </div>
            <div class=\"button-container col-8\">                
                <input class=\"orange-button\" onclick=\"\$('#main-form').submit();\" type=\"submit\" value=\"{{'total.save'|trans}}\"/>
            </div>
        </div>
        {{ form_start(edit_form, {'attr': {'id': 'main-form'} }) }}
        <div class=\"tabs\">
            <ul>
                <li><a href=\"#tab-main-info\">{{'total.main_info'|trans}}</a></li>
            </ul>
            <div class=\"nursery-info row\" id=\"tab-main-info\">
                <div class=\"main-photo col-4\">
                    {{ form_widget(edit_form.photoFile)}}
                </div>
                <div class=\"main-info col-6\">
                    {{ form_row(edit_form.nameNur, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(edit_form.nameNur_en, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(edit_form.owner, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(edit_form.ownerEn, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(edit_form.cellphone, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(edit_form.email, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(edit_form.site, {'attr': {'class': 'parent-width'} })}}
                </div>
            </div>
        </div>
        {{ form_end(edit_form) }}
    </div>

{% endblock %}
", ":nursery:editPar.html.twig", "/var/www/zabava/app/Resources/views/nursery/editPar.html.twig");
    }
}
