<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_63b9a4521c2253744500e4682c13500689d131ea6b4d5363d24c6519f469c779 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3657de25b5fc915ca22f09beadb6a36cfba4b443694f208a7728542859bb10ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3657de25b5fc915ca22f09beadb6a36cfba4b443694f208a7728542859bb10ba->enter($__internal_3657de25b5fc915ca22f09beadb6a36cfba4b443694f208a7728542859bb10ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3657de25b5fc915ca22f09beadb6a36cfba4b443694f208a7728542859bb10ba->leave($__internal_3657de25b5fc915ca22f09beadb6a36cfba4b443694f208a7728542859bb10ba_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d1df8ee2cf19130b85c5b6d3164849bbad6be2c28147417c206e3027e8ea3bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1df8ee2cf19130b85c5b6d3164849bbad6be2c28147417c206e3027e8ea3bc7->enter($__internal_d1df8ee2cf19130b85c5b6d3164849bbad6be2c28147417c206e3027e8ea3bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_d1df8ee2cf19130b85c5b6d3164849bbad6be2c28147417c206e3027e8ea3bc7->leave($__internal_d1df8ee2cf19130b85c5b6d3164849bbad6be2c28147417c206e3027e8ea3bc7_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_58ea24e27a6b41b4c62970482806ee8707a6cb9101b3c3a984625adc3d134b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ea24e27a6b41b4c62970482806ee8707a6cb9101b3c3a984625adc3d134b35->enter($__internal_58ea24e27a6b41b4c62970482806ee8707a6cb9101b3c3a984625adc3d134b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_58ea24e27a6b41b4c62970482806ee8707a6cb9101b3c3a984625adc3d134b35->leave($__internal_58ea24e27a6b41b4c62970482806ee8707a6cb9101b3c3a984625adc3d134b35_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_49c209adc29b1c8a2b2c5e5fba1a5b288a4714bc759cdd11c58ca148adb526a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49c209adc29b1c8a2b2c5e5fba1a5b288a4714bc759cdd11c58ca148adb526a3->enter($__internal_49c209adc29b1c8a2b2c5e5fba1a5b288a4714bc759cdd11c58ca148adb526a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_49c209adc29b1c8a2b2c5e5fba1a5b288a4714bc759cdd11c58ca148adb526a3->leave($__internal_49c209adc29b1c8a2b2c5e5fba1a5b288a4714bc759cdd11c58ca148adb526a3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/zabava/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
