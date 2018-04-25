<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3d4ed883d3e55f4fa3417601892cf738e027b089addb67ace4e6a135f5aaa579 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88d0f0188cb8897a97c0dc0e8233f995e10808785e5b7757242ce6b341508a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d0f0188cb8897a97c0dc0e8233f995e10808785e5b7757242ce6b341508a5b->enter($__internal_88d0f0188cb8897a97c0dc0e8233f995e10808785e5b7757242ce6b341508a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_88d0f0188cb8897a97c0dc0e8233f995e10808785e5b7757242ce6b341508a5b->leave($__internal_88d0f0188cb8897a97c0dc0e8233f995e10808785e5b7757242ce6b341508a5b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d6cbba224584d757a6e78e4e6b9d2dc1dccaac5763acf727ee4e24ecadf3567b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6cbba224584d757a6e78e4e6b9d2dc1dccaac5763acf727ee4e24ecadf3567b->enter($__internal_d6cbba224584d757a6e78e4e6b9d2dc1dccaac5763acf727ee4e24ecadf3567b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d6cbba224584d757a6e78e4e6b9d2dc1dccaac5763acf727ee4e24ecadf3567b->leave($__internal_d6cbba224584d757a6e78e4e6b9d2dc1dccaac5763acf727ee4e24ecadf3567b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
