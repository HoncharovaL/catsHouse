<?php

/* :comments:new.html.twig */
class __TwigTemplate_cce1f4eaac83df953db8e98245b185b16946329e5987fb8469856233a7a2676f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comments:new.html.twig", 1);
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
        $__internal_e1551e858af64c2eec68ca9cb238f5fa51ac687a7498c748bbcadef1aa3f0cb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1551e858af64c2eec68ca9cb238f5fa51ac687a7498c748bbcadef1aa3f0cb2->enter($__internal_e1551e858af64c2eec68ca9cb238f5fa51ac687a7498c748bbcadef1aa3f0cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comments:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1551e858af64c2eec68ca9cb238f5fa51ac687a7498c748bbcadef1aa3f0cb2->leave($__internal_e1551e858af64c2eec68ca9cb238f5fa51ac687a7498c748bbcadef1aa3f0cb2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f7fb891ef4fd0f8c8046ceafaaff74514611e221eb23c5bb5c601f2a2bfaa75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f7fb891ef4fd0f8c8046ceafaaff74514611e221eb23c5bb5c601f2a2bfaa75->enter($__internal_5f7fb891ef4fd0f8c8046ceafaaff74514611e221eb23c5bb5c601f2a2bfaa75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comment creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comments_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_5f7fb891ef4fd0f8c8046ceafaaff74514611e221eb23c5bb5c601f2a2bfaa75->leave($__internal_5f7fb891ef4fd0f8c8046ceafaaff74514611e221eb23c5bb5c601f2a2bfaa75_prof);

    }

    public function getTemplateName()
    {
        return ":comments:new.html.twig";
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
    <h1>Comment creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('comments_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":comments:new.html.twig", "/var/www/zabava/app/Resources/views/comments/new.html.twig");
    }
}
