<?php

/* :litters:new.html.twig */
class __TwigTemplate_c751f4a7b22b8863f77f04b8952de0c396297c01b6e60daf388a13ae3cf457e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":litters:new.html.twig", 1);
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
        $__internal_318998f6cc87863b1b02f70d8e0f600911aec89a765ba62882c256ef212cf212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318998f6cc87863b1b02f70d8e0f600911aec89a765ba62882c256ef212cf212->enter($__internal_318998f6cc87863b1b02f70d8e0f600911aec89a765ba62882c256ef212cf212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":litters:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_318998f6cc87863b1b02f70d8e0f600911aec89a765ba62882c256ef212cf212->leave($__internal_318998f6cc87863b1b02f70d8e0f600911aec89a765ba62882c256ef212cf212_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_985c5a6de2c65fbe2485c027e9be9a6419ec641a66cd56418a8c91aec2c11192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_985c5a6de2c65fbe2485c027e9be9a6419ec641a66cd56418a8c91aec2c11192->enter($__internal_985c5a6de2c65fbe2485c027e9be9a6419ec641a66cd56418a8c91aec2c11192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Litter creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("litters_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_985c5a6de2c65fbe2485c027e9be9a6419ec641a66cd56418a8c91aec2c11192->leave($__internal_985c5a6de2c65fbe2485c027e9be9a6419ec641a66cd56418a8c91aec2c11192_prof);

    }

    public function getTemplateName()
    {
        return ":litters:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Litter creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('litters_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":litters:new.html.twig", "/var/www/zabava/app/Resources/views/litters/new.html.twig");
    }
}
