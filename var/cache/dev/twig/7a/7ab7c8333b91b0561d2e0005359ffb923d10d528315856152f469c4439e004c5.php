<?php

/* vaccinations/index.html.twig */
class __TwigTemplate_eb6a576eda8a5be42ec229b827f759f89f0c946f58e43b7cb9bd67d8b3f70cf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "vaccinations/index.html.twig", 1);
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
        $__internal_f02248a271f0075725bd3a622b00fac2fd59ac337b7be272b818e8c7ae18f527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02248a271f0075725bd3a622b00fac2fd59ac337b7be272b818e8c7ae18f527->enter($__internal_f02248a271f0075725bd3a622b00fac2fd59ac337b7be272b818e8c7ae18f527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vaccinations/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f02248a271f0075725bd3a622b00fac2fd59ac337b7be272b818e8c7ae18f527->leave($__internal_f02248a271f0075725bd3a622b00fac2fd59ac337b7be272b818e8c7ae18f527_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea9aab1f56eba299da73bc08c12ba25b19b549356c9a7770515d92a5a215862c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea9aab1f56eba299da73bc08c12ba25b19b549356c9a7770515d92a5a215862c->enter($__internal_ea9aab1f56eba299da73bc08c12ba25b19b549356c9a7770515d92a5a215862c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"vaccination-container\">
            <div class=\"button-container\"><a  class=\"orange-button colorbox-ajax-form\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vaccinations_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.create"), "html", null, true);
        echo "</a></div>
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vaccinations"]) || array_key_exists("vaccinations", $context) ? $context["vaccinations"] : (function () { throw new Twig_Error_Runtime('Variable "vaccinations" does not exist.', 7, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vaccination"]) {
            // line 8
            echo "                <div class=\"vaccination-item\">     
                    <div class=\"left-col\">
                        <div class=\"vaccination-info\">
                            ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["vaccination"], "vaccinations", array()), "html", null, true);
            echo "      
                        </div>
                        <div class=\"vaccination-info\">
                            ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["vaccination"], "vaccinationsEng", array()), "html", null, true);
            echo "
                        </div>                                        
                    </div>
                    <div class=\"right-col\">
                        <a class=\"colorbox-ajax-form orange-button\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vaccinations_edit", array("idVaccinations" => twig_get_attribute($this->env, $this->getSourceContext(), $context["vaccination"], "idVaccinations", array()))), "html", null, true);
            echo "\">
                            ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.edit"), "html", null, true);
            echo "
                        </a>
                        <div>
                            <a class=\"orange-button\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vaccinations_delete_href", array("idVaccinations" => twig_get_attribute($this->env, $this->getSourceContext(), $context["vaccination"], "idVaccinations", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.delete"), "html", null, true);
            echo "</a>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vaccination'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            
        </div>
    </div>

";
        
        $__internal_ea9aab1f56eba299da73bc08c12ba25b19b549356c9a7770515d92a5a215862c->leave($__internal_ea9aab1f56eba299da73bc08c12ba25b19b549356c9a7770515d92a5a215862c_prof);

    }

    public function getTemplateName()
    {
        return "vaccinations/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 27,  82 => 22,  76 => 19,  72 => 18,  65 => 14,  59 => 11,  54 => 8,  50 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"vaccination-container\">
            <div class=\"button-container\"><a  class=\"orange-button colorbox-ajax-form\" href=\"{{ path('vaccinations_new') }}\">{{'total.create'|trans}}</a></div>
            {% for vaccination in vaccinations %}
                <div class=\"vaccination-item\">     
                    <div class=\"left-col\">
                        <div class=\"vaccination-info\">
                            {{ vaccination.vaccinations }}      
                        </div>
                        <div class=\"vaccination-info\">
                            {{ vaccination.vaccinationsEng }}
                        </div>                                        
                    </div>
                    <div class=\"right-col\">
                        <a class=\"colorbox-ajax-form orange-button\" href=\"{{ path('vaccinations_edit', { 'idVaccinations': vaccination.idVaccinations }) }}\">
                            {{\"total.edit\"|trans}}
                        </a>
                        <div>
                            <a class=\"orange-button\" href=\"{{path('vaccinations_delete_href', {'idVaccinations': vaccination.idVaccinations}) }}\">{{\"total.delete\"|trans}}</a>
                        </div>
                    </div>
                </div>
            {% endfor %}
            
        </div>
    </div>

{% endblock %}
", "vaccinations/index.html.twig", "/var/www/zabava/app/Resources/views/vaccinations/index.html.twig");
    }
}
