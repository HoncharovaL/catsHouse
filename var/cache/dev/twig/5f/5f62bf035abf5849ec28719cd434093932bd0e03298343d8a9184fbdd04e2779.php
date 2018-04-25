<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8b23728bd476eb97124cb75ac2a148f76017167bd144008e4aa4ae8a000e7d44 extends Twig_Template
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
        $__internal_f76204dbc4320286b9eb7bd91d30c196ebbe8a57eee231b0fbc224606e4140c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76204dbc4320286b9eb7bd91d30c196ebbe8a57eee231b0fbc224606e4140c3->enter($__internal_f76204dbc4320286b9eb7bd91d30c196ebbe8a57eee231b0fbc224606e4140c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_f76204dbc4320286b9eb7bd91d30c196ebbe8a57eee231b0fbc224606e4140c3->leave($__internal_f76204dbc4320286b9eb7bd91d30c196ebbe8a57eee231b0fbc224606e4140c3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
