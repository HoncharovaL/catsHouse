<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_2cf1bad89c8c6b976e48e1cb293459737a8e9591e0590ce179148ff52804a52e extends Twig_Template
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
        $__internal_6313a6bb270f3ba481de9a4dd34b84f9bfd34df4b9e7e2573bd9865d183540fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6313a6bb270f3ba481de9a4dd34b84f9bfd34df4b9e7e2573bd9865d183540fc->enter($__internal_6313a6bb270f3ba481de9a4dd34b84f9bfd34df4b9e7e2573bd9865d183540fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_6313a6bb270f3ba481de9a4dd34b84f9bfd34df4b9e7e2573bd9865d183540fc->leave($__internal_6313a6bb270f3ba481de9a4dd34b84f9bfd34df4b9e7e2573bd9865d183540fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
