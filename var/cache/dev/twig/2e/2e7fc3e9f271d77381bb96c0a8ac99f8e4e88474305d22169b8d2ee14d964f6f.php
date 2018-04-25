<?php

/* :dogtitles:new.html.twig */
class __TwigTemplate_db6fd6b2fc5993cd6a70d359b2c8e76a60a21f0c9dc1b02d87a24c4ca963c945 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":dogtitles:new.html.twig", 1);
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
        $__internal_4b9a23faff1d630f5a186589e1de40a090b9477349e2e29febde1498ff68345f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b9a23faff1d630f5a186589e1de40a090b9477349e2e29febde1498ff68345f->enter($__internal_4b9a23faff1d630f5a186589e1de40a090b9477349e2e29febde1498ff68345f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dogtitles:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b9a23faff1d630f5a186589e1de40a090b9477349e2e29febde1498ff68345f->leave($__internal_4b9a23faff1d630f5a186589e1de40a090b9477349e2e29febde1498ff68345f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ba8118cbd7d94f7a38d5c0813528d314e1c050da6dccaabce9182f0188995b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba8118cbd7d94f7a38d5c0813528d314e1c050da6dccaabce9182f0188995b9->enter($__internal_3ba8118cbd7d94f7a38d5c0813528d314e1c050da6dccaabce9182f0188995b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Dogtitle creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogtitles_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_3ba8118cbd7d94f7a38d5c0813528d314e1c050da6dccaabce9182f0188995b9->leave($__internal_3ba8118cbd7d94f7a38d5c0813528d314e1c050da6dccaabce9182f0188995b9_prof);

    }

    public function getTemplateName()
    {
        return ":dogtitles:new.html.twig";
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
    <h1>Dogtitle creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('dogtitles_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":dogtitles:new.html.twig", "/var/www/zabava/app/Resources/views/dogtitles/new.html.twig");
    }
}
