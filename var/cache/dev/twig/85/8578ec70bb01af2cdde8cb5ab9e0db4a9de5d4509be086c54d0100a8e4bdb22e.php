<?php

/* :services:edit.html.twig */
class __TwigTemplate_5c2f8e13835cf5c1a6d92db31accbebf6ed77cfcc6cea925c13b557d22f2b240 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":services:edit.html.twig", 1);
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
        $__internal_cec8a5a70a1237ab3bea4ff5fa037b3b40b81571e75674cede6f95d7f8b73f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec8a5a70a1237ab3bea4ff5fa037b3b40b81571e75674cede6f95d7f8b73f9b->enter($__internal_cec8a5a70a1237ab3bea4ff5fa037b3b40b81571e75674cede6f95d7f8b73f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":services:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cec8a5a70a1237ab3bea4ff5fa037b3b40b81571e75674cede6f95d7f8b73f9b->leave($__internal_cec8a5a70a1237ab3bea4ff5fa037b3b40b81571e75674cede6f95d7f8b73f9b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc4cb9d827a00f4425997ef2662cb174264721661f88321587015144fb1898fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4cb9d827a00f4425997ef2662cb174264721661f88321587015144fb1898fe->enter($__internal_dc4cb9d827a00f4425997ef2662cb174264721661f88321587015144fb1898fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"services-edit container\">
        <div class=\"row\">
            <div class=\"button-container left col-4\">
                <a class=\"grey-button\" href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services_index");
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
                    <div class=\"left-col\">
                        ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), "services", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "description", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    </div> 
                    <div class=\"right-col\">
                        ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "servicesEng", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                        ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "descriptionEn", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    </div>
                    <div class=\"service-price\">
                        ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "price", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "  
                    </div>                
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_dc4cb9d827a00f4425997ef2662cb174264721661f88321587015144fb1898fe->leave($__internal_dc4cb9d827a00f4425997ef2662cb174264721661f88321587015144fb1898fe_prof);

    }

    public function getTemplateName()
    {
        return ":services:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 34,  104 => 31,  100 => 30,  94 => 27,  90 => 26,  82 => 21,  76 => 18,  69 => 15,  64 => 13,  60 => 12,  55 => 11,  53 => 10,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"services-edit container\">
        <div class=\"row\">
            <div class=\"button-container left col-4\">
                <a class=\"grey-button\" href=\"{{ path('services_index') }}\">{{'total.back'|trans}}</a>
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
                    <div class=\"left-col\">
                        {{ form_row(form.services, {'attr': {'class': 'parent-width'} })}}
                        {{ form_row(form.description, {'attr': {'class': 'parent-width'} })}}
                    </div> 
                    <div class=\"right-col\">
                        {{ form_row(form.servicesEng, {'attr': {'class': 'parent-width'} })}}
                        {{ form_row(form.descriptionEn, {'attr': {'class': 'parent-width'} })}}
                    </div>
                    <div class=\"service-price\">
                        {{ form_row(form.price, {'attr': {'class': 'parent-width'} })}}  
                    </div>                
                </div>
            </div>
        </div>
    </div>
{% endblock %}


", ":services:edit.html.twig", "/var/www/zabava/app/Resources/views/services/edit.html.twig");
    }
}
