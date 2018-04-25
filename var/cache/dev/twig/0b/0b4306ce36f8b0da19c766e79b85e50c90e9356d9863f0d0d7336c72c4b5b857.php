<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_622d2a31d07da87aa73b084d3c0258856c6cb541b42b3391089d437cf8812094 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbeadd78dd6374f6a930349dea34bb50235e292ef75ad0782f3b821ca9b47449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbeadd78dd6374f6a930349dea34bb50235e292ef75ad0782f3b821ca9b47449->enter($__internal_dbeadd78dd6374f6a930349dea34bb50235e292ef75ad0782f3b821ca9b47449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbeadd78dd6374f6a930349dea34bb50235e292ef75ad0782f3b821ca9b47449->leave($__internal_dbeadd78dd6374f6a930349dea34bb50235e292ef75ad0782f3b821ca9b47449_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b5556591f94ae17b2e08f2407616c30c9d05c62fb8eba8de3e31b00393079e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5556591f94ae17b2e08f2407616c30c9d05c62fb8eba8de3e31b00393079e0f->enter($__internal_b5556591f94ae17b2e08f2407616c30c9d05c62fb8eba8de3e31b00393079e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b5556591f94ae17b2e08f2407616c30c9d05c62fb8eba8de3e31b00393079e0f->leave($__internal_b5556591f94ae17b2e08f2407616c30c9d05c62fb8eba8de3e31b00393079e0f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_18388e934ab9d1e98bbdbade4aac9c85c9d2c98c92698cf25525b3ea28d40640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18388e934ab9d1e98bbdbade4aac9c85c9d2c98c92698cf25525b3ea28d40640->enter($__internal_18388e934ab9d1e98bbdbade4aac9c85c9d2c98c92698cf25525b3ea28d40640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_18388e934ab9d1e98bbdbade4aac9c85c9d2c98c92698cf25525b3ea28d40640->leave($__internal_18388e934ab9d1e98bbdbade4aac9c85c9d2c98c92698cf25525b3ea28d40640_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9af151a0e3c3c78df61d4ba15c9d3f631dbee86e673c793b036c89d7c1b1a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9af151a0e3c3c78df61d4ba15c9d3f631dbee86e673c793b036c89d7c1b1a27->enter($__internal_b9af151a0e3c3c78df61d4ba15c9d3f631dbee86e673c793b036c89d7c1b1a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b9af151a0e3c3c78df61d4ba15c9d3f631dbee86e673c793b036c89d7c1b1a27->leave($__internal_b9af151a0e3c3c78df61d4ba15c9d3f631dbee86e673c793b036c89d7c1b1a27_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
