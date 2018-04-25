<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_2a335ad81c8f3647cf32e8d2e64ceec3b28a33398b4ca4eb2afefdaa2cec34e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_4e23ef6d17ee960eb3a7a67d082ac8572512a3e68c79e4417e7d683ed50defc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e23ef6d17ee960eb3a7a67d082ac8572512a3e68c79e4417e7d683ed50defc8->enter($__internal_4e23ef6d17ee960eb3a7a67d082ac8572512a3e68c79e4417e7d683ed50defc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e23ef6d17ee960eb3a7a67d082ac8572512a3e68c79e4417e7d683ed50defc8->leave($__internal_4e23ef6d17ee960eb3a7a67d082ac8572512a3e68c79e4417e7d683ed50defc8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_32b81b2b297e76bb7a84b918c68d918b7751d6c3006c68ccc04190908fb93514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b81b2b297e76bb7a84b918c68d918b7751d6c3006c68ccc04190908fb93514->enter($__internal_32b81b2b297e76bb7a84b918c68d918b7751d6c3006c68ccc04190908fb93514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_32b81b2b297e76bb7a84b918c68d918b7751d6c3006c68ccc04190908fb93514->leave($__internal_32b81b2b297e76bb7a84b918c68d918b7751d6c3006c68ccc04190908fb93514_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/zabava/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
