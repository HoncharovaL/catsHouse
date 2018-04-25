<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6d867c7568da02caf2bd9a3320a24a484037a6b43a5eeb3804b2c3294377c400 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43b3757d08c30fc7961033812c098439adf0192f637144ef0c2c8c85906262c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b3757d08c30fc7961033812c098439adf0192f637144ef0c2c8c85906262c6->enter($__internal_43b3757d08c30fc7961033812c098439adf0192f637144ef0c2c8c85906262c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43b3757d08c30fc7961033812c098439adf0192f637144ef0c2c8c85906262c6->leave($__internal_43b3757d08c30fc7961033812c098439adf0192f637144ef0c2c8c85906262c6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8d35596638f468d0a6922bc5bb6fe0a113b814f579075e4f29ae3e5ce731813c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d35596638f468d0a6922bc5bb6fe0a113b814f579075e4f29ae3e5ce731813c->enter($__internal_8d35596638f468d0a6922bc5bb6fe0a113b814f579075e4f29ae3e5ce731813c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8d35596638f468d0a6922bc5bb6fe0a113b814f579075e4f29ae3e5ce731813c->leave($__internal_8d35596638f468d0a6922bc5bb6fe0a113b814f579075e4f29ae3e5ce731813c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c287bbf327febdcb84adb3ec29b2f118c00e23eff4242ceaf29325935e3ca739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c287bbf327febdcb84adb3ec29b2f118c00e23eff4242ceaf29325935e3ca739->enter($__internal_c287bbf327febdcb84adb3ec29b2f118c00e23eff4242ceaf29325935e3ca739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c287bbf327febdcb84adb3ec29b2f118c00e23eff4242ceaf29325935e3ca739->leave($__internal_c287bbf327febdcb84adb3ec29b2f118c00e23eff4242ceaf29325935e3ca739_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce54323fc087e424c156637863182bd8e946f071271942ab231481d9c6d32e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce54323fc087e424c156637863182bd8e946f071271942ab231481d9c6d32e25->enter($__internal_ce54323fc087e424c156637863182bd8e946f071271942ab231481d9c6d32e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_ce54323fc087e424c156637863182bd8e946f071271942ab231481d9c6d32e25->leave($__internal_ce54323fc087e424c156637863182bd8e946f071271942ab231481d9c6d32e25_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
