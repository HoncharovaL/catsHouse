<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_ad86b144fb5a3ff912e40c38b77d775d6e422a57a0dbb239b6ee8cacc8fcc330 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_3d03876e37caab8ba7648a6661345bb194e3b9fcb71ab1bb11fcd853c2e52a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d03876e37caab8ba7648a6661345bb194e3b9fcb71ab1bb11fcd853c2e52a6f->enter($__internal_3d03876e37caab8ba7648a6661345bb194e3b9fcb71ab1bb11fcd853c2e52a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d03876e37caab8ba7648a6661345bb194e3b9fcb71ab1bb11fcd853c2e52a6f->leave($__internal_3d03876e37caab8ba7648a6661345bb194e3b9fcb71ab1bb11fcd853c2e52a6f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_956805c75bfdc7454aeb8abe41d370211dba10238c30c650f7c3d4471a526d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_956805c75bfdc7454aeb8abe41d370211dba10238c30c650f7c3d4471a526d62->enter($__internal_956805c75bfdc7454aeb8abe41d370211dba10238c30c650f7c3d4471a526d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_956805c75bfdc7454aeb8abe41d370211dba10238c30c650f7c3d4471a526d62->leave($__internal_956805c75bfdc7454aeb8abe41d370211dba10238c30c650f7c3d4471a526d62_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/zabava/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
