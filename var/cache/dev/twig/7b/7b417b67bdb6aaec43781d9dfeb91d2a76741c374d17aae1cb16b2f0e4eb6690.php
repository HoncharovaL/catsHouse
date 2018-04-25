<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_595f5aaf940c2dc41ee5a97752d52ca0b6596646e988f027fe15ff5f18bbd20f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_161e07356d686ca0659048451c411da8df88be1b4c85a21efb70e65790cb792a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161e07356d686ca0659048451c411da8df88be1b4c85a21efb70e65790cb792a->enter($__internal_161e07356d686ca0659048451c411da8df88be1b4c85a21efb70e65790cb792a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_161e07356d686ca0659048451c411da8df88be1b4c85a21efb70e65790cb792a->leave($__internal_161e07356d686ca0659048451c411da8df88be1b4c85a21efb70e65790cb792a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f761cc22e087a2b35507f9ab3a3f9867cdf34d02aab15b33f4496bb5eb9e92e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f761cc22e087a2b35507f9ab3a3f9867cdf34d02aab15b33f4496bb5eb9e92e1->enter($__internal_f761cc22e087a2b35507f9ab3a3f9867cdf34d02aab15b33f4496bb5eb9e92e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_f761cc22e087a2b35507f9ab3a3f9867cdf34d02aab15b33f4496bb5eb9e92e1->leave($__internal_f761cc22e087a2b35507f9ab3a3f9867cdf34d02aab15b33f4496bb5eb9e92e1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/zabava/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
