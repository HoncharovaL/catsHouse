<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_7df0d231507086ab1b6e4cde0774ddbcd59dffea0866561e13a086bdac40f70f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74e5698938e79bb56816da67cbca73530cb9b74e3bf3b585c5e938e67027d4d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e5698938e79bb56816da67cbca73530cb9b74e3bf3b585c5e938e67027d4d1->enter($__internal_74e5698938e79bb56816da67cbca73530cb9b74e3bf3b585c5e938e67027d4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_74e5698938e79bb56816da67cbca73530cb9b74e3bf3b585c5e938e67027d4d1->leave($__internal_74e5698938e79bb56816da67cbca73530cb9b74e3bf3b585c5e938e67027d4d1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/var/www/zabava/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
