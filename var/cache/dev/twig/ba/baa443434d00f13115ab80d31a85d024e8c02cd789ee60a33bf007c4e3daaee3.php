<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_d49a7dc7a271eb48416eddec641aedea6e6972826bd9e524c2bea7efada85d67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_78bfa0a627ffaddcfd0d083586821b629057630ba56d67257f1b326e34600047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78bfa0a627ffaddcfd0d083586821b629057630ba56d67257f1b326e34600047->enter($__internal_78bfa0a627ffaddcfd0d083586821b629057630ba56d67257f1b326e34600047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78bfa0a627ffaddcfd0d083586821b629057630ba56d67257f1b326e34600047->leave($__internal_78bfa0a627ffaddcfd0d083586821b629057630ba56d67257f1b326e34600047_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_190be3e89ba52c19a4474bcafb95fcdda2e287106470c73b5a281950c408716e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_190be3e89ba52c19a4474bcafb95fcdda2e287106470c73b5a281950c408716e->enter($__internal_190be3e89ba52c19a4474bcafb95fcdda2e287106470c73b5a281950c408716e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_190be3e89ba52c19a4474bcafb95fcdda2e287106470c73b5a281950c408716e->leave($__internal_190be3e89ba52c19a4474bcafb95fcdda2e287106470c73b5a281950c408716e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/zabava/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
