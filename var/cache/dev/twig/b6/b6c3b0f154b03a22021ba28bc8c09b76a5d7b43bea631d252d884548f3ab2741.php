<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_8a5c398e154e8a17b3c5e50643c5591290d01d547ccb23296f33f11f4f5a7bbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_96a1886867f7cce4abc34b1b583fab26a8d48f8ff10fd7414a5dc9dce52dbd06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a1886867f7cce4abc34b1b583fab26a8d48f8ff10fd7414a5dc9dce52dbd06->enter($__internal_96a1886867f7cce4abc34b1b583fab26a8d48f8ff10fd7414a5dc9dce52dbd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96a1886867f7cce4abc34b1b583fab26a8d48f8ff10fd7414a5dc9dce52dbd06->leave($__internal_96a1886867f7cce4abc34b1b583fab26a8d48f8ff10fd7414a5dc9dce52dbd06_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c46367d86906651e3b8a65297d661fc6779245cfaa413cac19eb8cf28635769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c46367d86906651e3b8a65297d661fc6779245cfaa413cac19eb8cf28635769->enter($__internal_4c46367d86906651e3b8a65297d661fc6779245cfaa413cac19eb8cf28635769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_4c46367d86906651e3b8a65297d661fc6779245cfaa413cac19eb8cf28635769->leave($__internal_4c46367d86906651e3b8a65297d661fc6779245cfaa413cac19eb8cf28635769_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/zabava/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
