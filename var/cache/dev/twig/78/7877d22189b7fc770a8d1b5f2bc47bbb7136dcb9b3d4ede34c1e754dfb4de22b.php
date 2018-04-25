<?php

/* :videos:new.html.twig */
class __TwigTemplate_ac3899b6132a333c88d9607524203107d1e339a4874cecaf570a333581750ad4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":videos:new.html.twig", 1);
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
        $__internal_ee305661b832b2fa693bfeb63b542499f8cae37ea05b333075a1cc7037fb2650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee305661b832b2fa693bfeb63b542499f8cae37ea05b333075a1cc7037fb2650->enter($__internal_ee305661b832b2fa693bfeb63b542499f8cae37ea05b333075a1cc7037fb2650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":videos:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee305661b832b2fa693bfeb63b542499f8cae37ea05b333075a1cc7037fb2650->leave($__internal_ee305661b832b2fa693bfeb63b542499f8cae37ea05b333075a1cc7037fb2650_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdd71bd43c7ca3f956c1ac072eb1f9ba6967aa83e28490a3fea68491124b49df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd71bd43c7ca3f956c1ac072eb1f9ba6967aa83e28490a3fea68491124b49df->enter($__internal_cdd71bd43c7ca3f956c1ac072eb1f9ba6967aa83e28490a3fea68491124b49df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Video creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("videos_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_cdd71bd43c7ca3f956c1ac072eb1f9ba6967aa83e28490a3fea68491124b49df->leave($__internal_cdd71bd43c7ca3f956c1ac072eb1f9ba6967aa83e28490a3fea68491124b49df_prof);

    }

    public function getTemplateName()
    {
        return ":videos:new.html.twig";
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
    <h1>Video creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('videos_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":videos:new.html.twig", "/var/www/zabava/app/Resources/views/videos/new.html.twig");
    }
}
