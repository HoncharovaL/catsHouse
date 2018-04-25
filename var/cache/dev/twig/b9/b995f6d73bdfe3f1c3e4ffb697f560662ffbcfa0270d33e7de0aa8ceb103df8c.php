<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_eb41956577b7bcf2eb189685055f3c514ac622a7f7e3f91d9382bcf6c6bc8651 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_c001384a1e9128e604c3cab78560395a2bde4b7f239c169228fcfedc277175fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c001384a1e9128e604c3cab78560395a2bde4b7f239c169228fcfedc277175fa->enter($__internal_c001384a1e9128e604c3cab78560395a2bde4b7f239c169228fcfedc277175fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c001384a1e9128e604c3cab78560395a2bde4b7f239c169228fcfedc277175fa->leave($__internal_c001384a1e9128e604c3cab78560395a2bde4b7f239c169228fcfedc277175fa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2eaeb7a24391a529c22baf2ff1607e0e3bf7f3ac6bb947e2827463eb7071c64c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eaeb7a24391a529c22baf2ff1607e0e3bf7f3ac6bb947e2827463eb7071c64c->enter($__internal_2eaeb7a24391a529c22baf2ff1607e0e3bf7f3ac6bb947e2827463eb7071c64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_2eaeb7a24391a529c22baf2ff1607e0e3bf7f3ac6bb947e2827463eb7071c64c->leave($__internal_2eaeb7a24391a529c22baf2ff1607e0e3bf7f3ac6bb947e2827463eb7071c64c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/zabava/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
