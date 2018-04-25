<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_66cea5a8b8cd1e0f5c41a3d68e68289ed3fa4d1a538998d1cd02e68c8c239e78 extends Twig_Template
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
        $__internal_bba1967895090ca3ec0d8fc20a2918c868363f9b3b1bcd1486107c7b0db753db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba1967895090ca3ec0d8fc20a2918c868363f9b3b1bcd1486107c7b0db753db->enter($__internal_bba1967895090ca3ec0d8fc20a2918c868363f9b3b1bcd1486107c7b0db753db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_bba1967895090ca3ec0d8fc20a2918c868363f9b3b1bcd1486107c7b0db753db->leave($__internal_bba1967895090ca3ec0d8fc20a2918c868363f9b3b1bcd1486107c7b0db753db_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
