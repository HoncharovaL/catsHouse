<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_55b6950fc8d6fb7fb6a4fad27d2872257db7f4dc2a5c1d1a4b73507e5966917e extends Twig_Template
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
        $__internal_938a01d5ec177c571932d03df3785fe23f130bf7ffe5484cc30d8f69b961b324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938a01d5ec177c571932d03df3785fe23f130bf7ffe5484cc30d8f69b961b324->enter($__internal_938a01d5ec177c571932d03df3785fe23f130bf7ffe5484cc30d8f69b961b324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_938a01d5ec177c571932d03df3785fe23f130bf7ffe5484cc30d8f69b961b324->leave($__internal_938a01d5ec177c571932d03df3785fe23f130bf7ffe5484cc30d8f69b961b324_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
