<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_35847b5212b151914593c528052b3acb9c405339334aa4154bf8400681df8afe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_c10111ebfcc0aa92c2336e74ccac148ebac9abe1e405fc23e6c192797efc753d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c10111ebfcc0aa92c2336e74ccac148ebac9abe1e405fc23e6c192797efc753d->enter($__internal_c10111ebfcc0aa92c2336e74ccac148ebac9abe1e405fc23e6c192797efc753d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c10111ebfcc0aa92c2336e74ccac148ebac9abe1e405fc23e6c192797efc753d->leave($__internal_c10111ebfcc0aa92c2336e74ccac148ebac9abe1e405fc23e6c192797efc753d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb4887777724d647ca2f7ae4c0d4b3590059bf0364a8224fec08a8248c630f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4887777724d647ca2f7ae4c0d4b3590059bf0364a8224fec08a8248c630f9b->enter($__internal_bb4887777724d647ca2f7ae4c0d4b3590059bf0364a8224fec08a8248c630f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_bb4887777724d647ca2f7ae4c0d4b3590059bf0364a8224fec08a8248c630f9b->leave($__internal_bb4887777724d647ca2f7ae4c0d4b3590059bf0364a8224fec08a8248c630f9b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/zabava/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
