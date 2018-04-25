<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_9b92c52b4de2adc7feb2e3e22556184c49ab615c755a64ada190edeb5d965c88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_acf1859ab23c03bef71071fe34eb52549657a8305773680bb0ab123e7bc607b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf1859ab23c03bef71071fe34eb52549657a8305773680bb0ab123e7bc607b5->enter($__internal_acf1859ab23c03bef71071fe34eb52549657a8305773680bb0ab123e7bc607b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acf1859ab23c03bef71071fe34eb52549657a8305773680bb0ab123e7bc607b5->leave($__internal_acf1859ab23c03bef71071fe34eb52549657a8305773680bb0ab123e7bc607b5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_192c9e965502bca570e1c1b2f1c3d75a9ce96020c7e7ad0f48216508fe48c7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192c9e965502bca570e1c1b2f1c3d75a9ce96020c7e7ad0f48216508fe48c7c9->enter($__internal_192c9e965502bca570e1c1b2f1c3d75a9ce96020c7e7ad0f48216508fe48c7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_192c9e965502bca570e1c1b2f1c3d75a9ce96020c7e7ad0f48216508fe48c7c9->leave($__internal_192c9e965502bca570e1c1b2f1c3d75a9ce96020c7e7ad0f48216508fe48c7c9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/zabava/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
