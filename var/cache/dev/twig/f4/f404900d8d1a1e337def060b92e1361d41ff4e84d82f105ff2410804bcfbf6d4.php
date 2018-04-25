<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e887aceb02fdab57da2ead542bf1d562e138d2fe4b3ab62f5638e37310010aa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47b75f6caa8700ab360ff8cbfb2674f0ba9c4affd3b0cb99ce38f7847ff6c0d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47b75f6caa8700ab360ff8cbfb2674f0ba9c4affd3b0cb99ce38f7847ff6c0d7->enter($__internal_47b75f6caa8700ab360ff8cbfb2674f0ba9c4affd3b0cb99ce38f7847ff6c0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47b75f6caa8700ab360ff8cbfb2674f0ba9c4affd3b0cb99ce38f7847ff6c0d7->leave($__internal_47b75f6caa8700ab360ff8cbfb2674f0ba9c4affd3b0cb99ce38f7847ff6c0d7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3cd00ed11a591dea5cc4184bbef00b0eacac2493d73d9fe0682fe79f8c94ecdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd00ed11a591dea5cc4184bbef00b0eacac2493d73d9fe0682fe79f8c94ecdb->enter($__internal_3cd00ed11a591dea5cc4184bbef00b0eacac2493d73d9fe0682fe79f8c94ecdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_3cd00ed11a591dea5cc4184bbef00b0eacac2493d73d9fe0682fe79f8c94ecdb->leave($__internal_3cd00ed11a591dea5cc4184bbef00b0eacac2493d73d9fe0682fe79f8c94ecdb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/zabava/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
