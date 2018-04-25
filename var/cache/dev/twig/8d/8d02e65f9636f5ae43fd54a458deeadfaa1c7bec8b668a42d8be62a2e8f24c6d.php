<?php

/* :dogs:new.html.twig */
class __TwigTemplate_c51d3aa81dcb54f5fe9633dbb6403ea891507942fbc246cac92219b6a98361d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":dogs:new.html.twig", 1);
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
        $__internal_41af8c6a194e841d93b3ceb9986df0b443b20199e00fe778ad033e8761747194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41af8c6a194e841d93b3ceb9986df0b443b20199e00fe778ad033e8761747194->enter($__internal_41af8c6a194e841d93b3ceb9986df0b443b20199e00fe778ad033e8761747194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dogs:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41af8c6a194e841d93b3ceb9986df0b443b20199e00fe778ad033e8761747194->leave($__internal_41af8c6a194e841d93b3ceb9986df0b443b20199e00fe778ad033e8761747194_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ea6dc621ac9e3f6074f3a27a37f7d337d2394fccb25ed76f9ad8ff7aec74df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea6dc621ac9e3f6074f3a27a37f7d337d2394fccb25ed76f9ad8ff7aec74df0->enter($__internal_3ea6dc621ac9e3f6074f3a27a37f7d337d2394fccb25ed76f9ad8ff7aec74df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Dog creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogs_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_3ea6dc621ac9e3f6074f3a27a37f7d337d2394fccb25ed76f9ad8ff7aec74df0->leave($__internal_3ea6dc621ac9e3f6074f3a27a37f7d337d2394fccb25ed76f9ad8ff7aec74df0_prof);

    }

    public function getTemplateName()
    {
        return ":dogs:new.html.twig";
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
    <h1>Dog creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('dogs_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":dogs:new.html.twig", "/var/www/zabava/app/Resources/views/dogs/new.html.twig");
    }
}
