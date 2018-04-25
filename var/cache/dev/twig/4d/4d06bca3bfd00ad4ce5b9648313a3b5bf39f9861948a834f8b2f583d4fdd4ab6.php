<?php

/* :dogsphotos:new.html.twig */
class __TwigTemplate_7331ef7942faa51d945c12e144ee214cbf2e646fe7685f2834cc64afa32df0de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":dogsphotos:new.html.twig", 1);
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
        $__internal_734d5076bf1b491cbc9625d11efbe34ea3f224a5ac514f7bdaf2d51a3437af51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734d5076bf1b491cbc9625d11efbe34ea3f224a5ac514f7bdaf2d51a3437af51->enter($__internal_734d5076bf1b491cbc9625d11efbe34ea3f224a5ac514f7bdaf2d51a3437af51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dogsphotos:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_734d5076bf1b491cbc9625d11efbe34ea3f224a5ac514f7bdaf2d51a3437af51->leave($__internal_734d5076bf1b491cbc9625d11efbe34ea3f224a5ac514f7bdaf2d51a3437af51_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f6cd91ca90f298fcaf873c13768a1a82e2b4b61c9d3ac0da0777f00ca8d016a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f6cd91ca90f298fcaf873c13768a1a82e2b4b61c9d3ac0da0777f00ca8d016a->enter($__internal_6f6cd91ca90f298fcaf873c13768a1a82e2b4b61c9d3ac0da0777f00ca8d016a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Dogsphoto creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogsphotos_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6f6cd91ca90f298fcaf873c13768a1a82e2b4b61c9d3ac0da0777f00ca8d016a->leave($__internal_6f6cd91ca90f298fcaf873c13768a1a82e2b4b61c9d3ac0da0777f00ca8d016a_prof);

    }

    public function getTemplateName()
    {
        return ":dogsphotos:new.html.twig";
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
    <h1>Dogsphoto creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('dogsphotos_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":dogsphotos:new.html.twig", "/var/www/zabava/app/Resources/views/dogsphotos/new.html.twig");
    }
}
