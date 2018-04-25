<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_a84518cc004d25669d044ad41067f5d9888ab789df9d52003b0434fbf8cc0c0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_74d0ecdc778247eff933d8872c197c2e0ddb4ce4b65c5536aa2c29207da8aceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d0ecdc778247eff933d8872c197c2e0ddb4ce4b65c5536aa2c29207da8aceb->enter($__internal_74d0ecdc778247eff933d8872c197c2e0ddb4ce4b65c5536aa2c29207da8aceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74d0ecdc778247eff933d8872c197c2e0ddb4ce4b65c5536aa2c29207da8aceb->leave($__internal_74d0ecdc778247eff933d8872c197c2e0ddb4ce4b65c5536aa2c29207da8aceb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_492c29273a83c1a221267b146ca23a22db575040c03878ef913afb10a5e43db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_492c29273a83c1a221267b146ca23a22db575040c03878ef913afb10a5e43db9->enter($__internal_492c29273a83c1a221267b146ca23a22db575040c03878ef913afb10a5e43db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_492c29273a83c1a221267b146ca23a22db575040c03878ef913afb10a5e43db9->leave($__internal_492c29273a83c1a221267b146ca23a22db575040c03878ef913afb10a5e43db9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/zabava/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
