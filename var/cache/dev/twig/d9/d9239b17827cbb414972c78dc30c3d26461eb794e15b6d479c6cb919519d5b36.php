<?php

/* nursery/index.html.twig */
class __TwigTemplate_30ba6f020d09c397fca3220eb0c2bf9475d1774b091f26da45e0e3e9ad77955d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "nursery/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8f9603d290e75b4bd64a981a1098c0d4bc7d66ca972a121337fcbff6719ce43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f9603d290e75b4bd64a981a1098c0d4bc7d66ca972a121337fcbff6719ce43->enter($__internal_a8f9603d290e75b4bd64a981a1098c0d4bc7d66ca972a121337fcbff6719ce43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nursery/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8f9603d290e75b4bd64a981a1098c0d4bc7d66ca972a121337fcbff6719ce43->leave($__internal_a8f9603d290e75b4bd64a981a1098c0d4bc7d66ca972a121337fcbff6719ce43_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b39416c6b8f0e9dc15791600ce2960a1995618486f414a68b175dee420dccc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b39416c6b8f0e9dc15791600ce2960a1995618486f414a68b175dee420dccc2->enter($__internal_9b39416c6b8f0e9dc15791600ce2960a1995618486f414a68b175dee420dccc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class='container'>
        <div class='partner-container'>
            <div class=\"button-container\">
                <a class=\"orange-button\" href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nursery_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.create"), "html", null, true);
        echo "</a>
            </div>
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nurseries"]) || array_key_exists("nurseries", $context) ? $context["nurseries"] : (function () { throw new Twig_Error_Runtime('Variable "nurseries" does not exist.', 9, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["nursery"]) {
            // line 10
            echo "                <div class='partner-item'>
                    <div class='partner-img'>
                        <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["photo_path"]) || array_key_exists("photo_path", $context) ? $context["photo_path"] : (function () { throw new Twig_Error_Runtime('Variable "photo_path" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["nursery"], "photo", array()), "html", null, true);
            echo "\" 
                             style=\"width:304px;height:228px;\">
                    </div>
                    <div class='partner-info'>
                        <div>
                            ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("nursery.list.name"), "html", null, true);
            echo "
                            ";
            // line 18
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_translated')->getCallable(), array($context["nursery"], "nameNur")), "html", null, true);
            echo "
                        </div>
                        <div>
                            ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("nursery.list.owner"), "html", null, true);
            echo "
                            ";
            // line 22
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_translated')->getCallable(), array($context["nursery"], "owner")), "html", null, true);
            echo "
                        </div>                 
                        
                        <a class=\"orange-button\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nursery_editPar", array("idNursery" => twig_get_attribute($this->env, $this->getSourceContext(), $context["nursery"], "idNursery", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.edit"), "html", null, true);
            echo "</a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nursery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>  
";
        
        $__internal_9b39416c6b8f0e9dc15791600ce2960a1995618486f414a68b175dee420dccc2->leave($__internal_9b39416c6b8f0e9dc15791600ce2960a1995618486f414a68b175dee420dccc2_prof);

    }

    public function getTemplateName()
    {
        return "nursery/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 29,  89 => 25,  83 => 22,  79 => 21,  73 => 18,  69 => 17,  60 => 12,  56 => 10,  52 => 9,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class='container'>
        <div class='partner-container'>
            <div class=\"button-container\">
                <a class=\"orange-button\" href=\"{{ path('nursery_new') }}\">{{'total.create'|trans}}</a>
            </div>
            {% for nursery in nurseries %}
                <div class='partner-item'>
                    <div class='partner-img'>
                        <img src=\"{{photo_path}}{{nursery.photo}}\" 
                             style=\"width:304px;height:228px;\">
                    </div>
                    <div class='partner-info'>
                        <div>
                            {{'nursery.list.name'|trans}}
                            {{ get_translated(nursery, 'nameNur') }}
                        </div>
                        <div>
                            {{'nursery.list.owner'|trans}}
                            {{ get_translated(nursery, 'owner') }}
                        </div>                 
                        
                        <a class=\"orange-button\" href=\"{{ path('nursery_editPar', { 'idNursery': nursery.idNursery }) }}\">{{'total.edit'|trans}}</a>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>  
{% endblock %}
", "nursery/index.html.twig", "/var/www/zabava/app/Resources/views/nursery/index.html.twig");
    }
}
