<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6ec2eedf3249e68792cc7cd8cd844decfe32bcd470d8bc6740a97f8518e3015a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ede980224642870cc3ab922ff8acf836f725657bbf99f0c4f43912d342174b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede980224642870cc3ab922ff8acf836f725657bbf99f0c4f43912d342174b9c->enter($__internal_ede980224642870cc3ab922ff8acf836f725657bbf99f0c4f43912d342174b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ede980224642870cc3ab922ff8acf836f725657bbf99f0c4f43912d342174b9c->leave($__internal_ede980224642870cc3ab922ff8acf836f725657bbf99f0c4f43912d342174b9c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_79054e0c9ac6cbfd7472ed49172f984af2d30ea0cb06d036febeb4cf408a6efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79054e0c9ac6cbfd7472ed49172f984af2d30ea0cb06d036febeb4cf408a6efc->enter($__internal_79054e0c9ac6cbfd7472ed49172f984af2d30ea0cb06d036febeb4cf408a6efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_79054e0c9ac6cbfd7472ed49172f984af2d30ea0cb06d036febeb4cf408a6efc->leave($__internal_79054e0c9ac6cbfd7472ed49172f984af2d30ea0cb06d036febeb4cf408a6efc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_53aa99862a37864bc85b3af0e2b6b656fd87425d140562b908f607686a0686d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53aa99862a37864bc85b3af0e2b6b656fd87425d140562b908f607686a0686d8->enter($__internal_53aa99862a37864bc85b3af0e2b6b656fd87425d140562b908f607686a0686d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_53aa99862a37864bc85b3af0e2b6b656fd87425d140562b908f607686a0686d8->leave($__internal_53aa99862a37864bc85b3af0e2b6b656fd87425d140562b908f607686a0686d8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9ca9cd1e9dc15337e4da20ffc1e847d27fba350abc22e9564d4147a2e672ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ca9cd1e9dc15337e4da20ffc1e847d27fba350abc22e9564d4147a2e672ff2->enter($__internal_b9ca9cd1e9dc15337e4da20ffc1e847d27fba350abc22e9564d4147a2e672ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b9ca9cd1e9dc15337e4da20ffc1e847d27fba350abc22e9564d4147a2e672ff2->leave($__internal_b9ca9cd1e9dc15337e4da20ffc1e847d27fba350abc22e9564d4147a2e672ff2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
