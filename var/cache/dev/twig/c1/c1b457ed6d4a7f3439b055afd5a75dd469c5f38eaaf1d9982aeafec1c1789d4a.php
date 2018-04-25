<?php

/* :dogvaccinations:new.html.twig */
class __TwigTemplate_d0dcdad48ba703e30a1400bca49ca383ba5dd2fde3108c0b52d73932c727949b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":dogvaccinations:new.html.twig", 1);
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
        $__internal_e1de32e4019c967adf5ea869668ad6efd206dea8da7f94dc5e7881d67c37ebff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1de32e4019c967adf5ea869668ad6efd206dea8da7f94dc5e7881d67c37ebff->enter($__internal_e1de32e4019c967adf5ea869668ad6efd206dea8da7f94dc5e7881d67c37ebff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dogvaccinations:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1de32e4019c967adf5ea869668ad6efd206dea8da7f94dc5e7881d67c37ebff->leave($__internal_e1de32e4019c967adf5ea869668ad6efd206dea8da7f94dc5e7881d67c37ebff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ca3bc07e66a577e372d296b6a36291ffc2d68071b3778b78b212cb29820bd2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca3bc07e66a577e372d296b6a36291ffc2d68071b3778b78b212cb29820bd2f->enter($__internal_4ca3bc07e66a577e372d296b6a36291ffc2d68071b3778b78b212cb29820bd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Dogvaccination creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogvaccinations_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_4ca3bc07e66a577e372d296b6a36291ffc2d68071b3778b78b212cb29820bd2f->leave($__internal_4ca3bc07e66a577e372d296b6a36291ffc2d68071b3778b78b212cb29820bd2f_prof);

    }

    public function getTemplateName()
    {
        return ":dogvaccinations:new.html.twig";
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
    <h1>Dogvaccination creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('dogvaccinations_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":dogvaccinations:new.html.twig", "/var/www/zabava/app/Resources/views/dogvaccinations/new.html.twig");
    }
}
