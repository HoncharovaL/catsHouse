<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a9029b9a9831812961ebe3356b70a53bc04ebf1f32f400afcf693fa4259cd83b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_abc34af2f36dd9f65055ac1e9fb61ab67dea5a22fe6a0383ada9ed9e56d896c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abc34af2f36dd9f65055ac1e9fb61ab67dea5a22fe6a0383ada9ed9e56d896c4->enter($__internal_abc34af2f36dd9f65055ac1e9fb61ab67dea5a22fe6a0383ada9ed9e56d896c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abc34af2f36dd9f65055ac1e9fb61ab67dea5a22fe6a0383ada9ed9e56d896c4->leave($__internal_abc34af2f36dd9f65055ac1e9fb61ab67dea5a22fe6a0383ada9ed9e56d896c4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b8930b747b698d105c52152b27529c9a45892174ad44bcf1786d28fc7657681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8930b747b698d105c52152b27529c9a45892174ad44bcf1786d28fc7657681->enter($__internal_9b8930b747b698d105c52152b27529c9a45892174ad44bcf1786d28fc7657681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_9b8930b747b698d105c52152b27529c9a45892174ad44bcf1786d28fc7657681->leave($__internal_9b8930b747b698d105c52152b27529c9a45892174ad44bcf1786d28fc7657681_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/zabava/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
