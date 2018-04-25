<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_9c63328ae700f88b83430c915eebcfe60459179f30588b5c0b11e45ce25967af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_468200d066399f29d91ea7bf3f3e737de10b45f74dddcc3fc6d418ddb6374ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_468200d066399f29d91ea7bf3f3e737de10b45f74dddcc3fc6d418ddb6374ff1->enter($__internal_468200d066399f29d91ea7bf3f3e737de10b45f74dddcc3fc6d418ddb6374ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_468200d066399f29d91ea7bf3f3e737de10b45f74dddcc3fc6d418ddb6374ff1->leave($__internal_468200d066399f29d91ea7bf3f3e737de10b45f74dddcc3fc6d418ddb6374ff1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5bf47ff92f31fcefacf0a7dfe133d85f04e125bd2425c8d25060ac0a13875baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf47ff92f31fcefacf0a7dfe133d85f04e125bd2425c8d25060ac0a13875baf->enter($__internal_5bf47ff92f31fcefacf0a7dfe133d85f04e125bd2425c8d25060ac0a13875baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_5bf47ff92f31fcefacf0a7dfe133d85f04e125bd2425c8d25060ac0a13875baf->leave($__internal_5bf47ff92f31fcefacf0a7dfe133d85f04e125bd2425c8d25060ac0a13875baf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/zabava/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
