<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_30e0f38204971b31eb668b472c006871acfdbdb356dfface59f3f0f3f571c223 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a55def25833fee4b7d75b427318acc6bac282221929e61a98f4dbe6bf24f7f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55def25833fee4b7d75b427318acc6bac282221929e61a98f4dbe6bf24f7f84->enter($__internal_a55def25833fee4b7d75b427318acc6bac282221929e61a98f4dbe6bf24f7f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a55def25833fee4b7d75b427318acc6bac282221929e61a98f4dbe6bf24f7f84->leave($__internal_a55def25833fee4b7d75b427318acc6bac282221929e61a98f4dbe6bf24f7f84_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_39260bb6c34707992628ac05be5e2e517a1a7b4029794fd0c640340c4e4a5484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39260bb6c34707992628ac05be5e2e517a1a7b4029794fd0c640340c4e4a5484->enter($__internal_39260bb6c34707992628ac05be5e2e517a1a7b4029794fd0c640340c4e4a5484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_39260bb6c34707992628ac05be5e2e517a1a7b4029794fd0c640340c4e4a5484->leave($__internal_39260bb6c34707992628ac05be5e2e517a1a7b4029794fd0c640340c4e4a5484_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_74602410aa2a2b4772a25dc86c65c768bf48083248eedb49d1482b0c8f33a35c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74602410aa2a2b4772a25dc86c65c768bf48083248eedb49d1482b0c8f33a35c->enter($__internal_74602410aa2a2b4772a25dc86c65c768bf48083248eedb49d1482b0c8f33a35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_74602410aa2a2b4772a25dc86c65c768bf48083248eedb49d1482b0c8f33a35c->leave($__internal_74602410aa2a2b4772a25dc86c65c768bf48083248eedb49d1482b0c8f33a35c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c8c077908f0b26af8c08503e29fee31e7b3eb234623ab2ba3df1f6d975495a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8c077908f0b26af8c08503e29fee31e7b3eb234623ab2ba3df1f6d975495a7->enter($__internal_1c8c077908f0b26af8c08503e29fee31e7b3eb234623ab2ba3df1f6d975495a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_1c8c077908f0b26af8c08503e29fee31e7b3eb234623ab2ba3df1f6d975495a7->leave($__internal_1c8c077908f0b26af8c08503e29fee31e7b3eb234623ab2ba3df1f6d975495a7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
