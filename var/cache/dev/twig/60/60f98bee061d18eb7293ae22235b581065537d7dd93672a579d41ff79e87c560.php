<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_6831278be0950e711fd99dbc9cda677fdb5f5fc17923fb43129a9cb0c0d309a0 extends Twig_Template
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
        $__internal_39b89230453074fa2aa2bb8e4e69eb9171e39b6f5f3505b31425c9cd2c45ca08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39b89230453074fa2aa2bb8e4e69eb9171e39b6f5f3505b31425c9cd2c45ca08->enter($__internal_39b89230453074fa2aa2bb8e4e69eb9171e39b6f5f3505b31425c9cd2c45ca08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_39b89230453074fa2aa2bb8e4e69eb9171e39b6f5f3505b31425c9cd2c45ca08->leave($__internal_39b89230453074fa2aa2bb8e4e69eb9171e39b6f5f3505b31425c9cd2c45ca08_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
