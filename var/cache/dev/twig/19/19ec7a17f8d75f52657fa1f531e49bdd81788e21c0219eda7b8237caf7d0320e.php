<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e87525e3500d2f596b3c9599c0bf98930066f1d56f1b235416c18b07e9c71c5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_a337ea44a1de0d5a5a35cb5ea5b79fde43bd3cc5f3fd1f32db9098a1af0adc44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a337ea44a1de0d5a5a35cb5ea5b79fde43bd3cc5f3fd1f32db9098a1af0adc44->enter($__internal_a337ea44a1de0d5a5a35cb5ea5b79fde43bd3cc5f3fd1f32db9098a1af0adc44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a337ea44a1de0d5a5a35cb5ea5b79fde43bd3cc5f3fd1f32db9098a1af0adc44->leave($__internal_a337ea44a1de0d5a5a35cb5ea5b79fde43bd3cc5f3fd1f32db9098a1af0adc44_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6799a347a0b966dfe564c79882ba28f3c69d7da94cefe4e4ce5bab3ba67dea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6799a347a0b966dfe564c79882ba28f3c69d7da94cefe4e4ce5bab3ba67dea8->enter($__internal_a6799a347a0b966dfe564c79882ba28f3c69d7da94cefe4e4ce5bab3ba67dea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a6799a347a0b966dfe564c79882ba28f3c69d7da94cefe4e4ce5bab3ba67dea8->leave($__internal_a6799a347a0b966dfe564c79882ba28f3c69d7da94cefe4e4ce5bab3ba67dea8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa0595908ba5afa4672389012de8a9c44c98e8ce39c938fa490373207afc4e39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0595908ba5afa4672389012de8a9c44c98e8ce39c938fa490373207afc4e39->enter($__internal_fa0595908ba5afa4672389012de8a9c44c98e8ce39c938fa490373207afc4e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_fa0595908ba5afa4672389012de8a9c44c98e8ce39c938fa490373207afc4e39->leave($__internal_fa0595908ba5afa4672389012de8a9c44c98e8ce39c938fa490373207afc4e39_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
