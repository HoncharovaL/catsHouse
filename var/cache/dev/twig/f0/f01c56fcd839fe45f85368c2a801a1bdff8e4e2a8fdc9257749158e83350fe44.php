<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_6cf3d4cd4c958f60b697ebbf787e67947f9db537512eab92efbfdadeee177f8d extends Twig_Template
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
        $__internal_f2fbe2ddf8f33204b687668425d4d3df2e7b8403cbefa39205946885a97ed87f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2fbe2ddf8f33204b687668425d4d3df2e7b8403cbefa39205946885a97ed87f->enter($__internal_f2fbe2ddf8f33204b687668425d4d3df2e7b8403cbefa39205946885a97ed87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f2fbe2ddf8f33204b687668425d4d3df2e7b8403cbefa39205946885a97ed87f->leave($__internal_f2fbe2ddf8f33204b687668425d4d3df2e7b8403cbefa39205946885a97ed87f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_04ec7ecce9ea44dd94c75587ddaee7091c1221e75501922b4eae20b9ab0e1413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ec7ecce9ea44dd94c75587ddaee7091c1221e75501922b4eae20b9ab0e1413->enter($__internal_04ec7ecce9ea44dd94c75587ddaee7091c1221e75501922b4eae20b9ab0e1413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_04ec7ecce9ea44dd94c75587ddaee7091c1221e75501922b4eae20b9ab0e1413->leave($__internal_04ec7ecce9ea44dd94c75587ddaee7091c1221e75501922b4eae20b9ab0e1413_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_66ef1c327903031dec3fc562b735075fa496ec17f8c731f897f9ad39b83d8d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ef1c327903031dec3fc562b735075fa496ec17f8c731f897f9ad39b83d8d6a->enter($__internal_66ef1c327903031dec3fc562b735075fa496ec17f8c731f897f9ad39b83d8d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_66ef1c327903031dec3fc562b735075fa496ec17f8c731f897f9ad39b83d8d6a->leave($__internal_66ef1c327903031dec3fc562b735075fa496ec17f8c731f897f9ad39b83d8d6a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_203cabb18329cc418edf1f4b9e89e527d2986da63d82058d1f8e390235376d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_203cabb18329cc418edf1f4b9e89e527d2986da63d82058d1f8e390235376d53->enter($__internal_203cabb18329cc418edf1f4b9e89e527d2986da63d82058d1f8e390235376d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_203cabb18329cc418edf1f4b9e89e527d2986da63d82058d1f8e390235376d53->leave($__internal_203cabb18329cc418edf1f4b9e89e527d2986da63d82058d1f8e390235376d53_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/zabava/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
