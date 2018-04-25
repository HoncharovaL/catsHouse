<?php

/* titles/index.html.twig */
class __TwigTemplate_371906e786b21a947e3743137ab2c1b1e06fa982796b3cd55b58a7a18a0b0c1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "titles/index.html.twig", 1);
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
        $__internal_f0da02b97478ec0167bdd82eec467a0a553758fe7c7c6a282ca1c62a999f7d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0da02b97478ec0167bdd82eec467a0a553758fe7c7c6a282ca1c62a999f7d1e->enter($__internal_f0da02b97478ec0167bdd82eec467a0a553758fe7c7c6a282ca1c62a999f7d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "titles/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0da02b97478ec0167bdd82eec467a0a553758fe7c7c6a282ca1c62a999f7d1e->leave($__internal_f0da02b97478ec0167bdd82eec467a0a553758fe7c7c6a282ca1c62a999f7d1e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_124c10868daefcc2f69f631e25c6210671089b82fe0409e63ec0b0f1b449da09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124c10868daefcc2f69f631e25c6210671089b82fe0409e63ec0b0f1b449da09->enter($__internal_124c10868daefcc2f69f631e25c6210671089b82fe0409e63ec0b0f1b449da09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "     <div class=\"container\">
        <div class=\"titles-container\">
            <div class=\"button-container\"><a  class=\"orange-button colorbox-ajax-form\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("titles_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.create"), "html", null, true);
        echo "</a></div>
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new Twig_Error_Runtime('Variable "titles" does not exist.', 7, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 8
            echo "                <div class=\"title-item\">     
                    <div class=\"left-col\">
                        <div class=\"title-info\">
                            ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["title"], "title", array()), "html", null, true);
            echo "  
                        </div>
                        <div class=\"title-info\">
                            ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["title"], "titleEng", array()), "html", null, true);
            echo "
                        </div>                                        
                    </div>
                    <div class=\"right-col\">
                        <a class=\"colorbox-ajax-form orange-button\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("titles_edit", array("idTitles" => twig_get_attribute($this->env, $this->getSourceContext(), $context["title"], "idTitles", array()))), "html", null, true);
            echo "\">
                            ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.edit"), "html", null, true);
            echo "
                        </a>
                        <div>
                            <a class=\"orange-button\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("titles_delete_href", array("idTitles" => twig_get_attribute($this->env, $this->getSourceContext(), $context["title"], "idTitles", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.delete"), "html", null, true);
            echo "</a>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            
        </div>
    </div>
    
";
        
        $__internal_124c10868daefcc2f69f631e25c6210671089b82fe0409e63ec0b0f1b449da09->leave($__internal_124c10868daefcc2f69f631e25c6210671089b82fe0409e63ec0b0f1b449da09_prof);

    }

    public function getTemplateName()
    {
        return "titles/index.html.twig";
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
        <div class=\"titles-container\">
            <div class=\"button-container\"><a  class=\"orange-button colorbox-ajax-form\" href=\"{{ path('titles_new') }}\">{{'total.create'|trans}}</a></div>
            {% for title in titles %}
                <div class=\"title-item\">     
                    <div class=\"left-col\">
                        <div class=\"title-info\">
                            {{ title.title }}  
                        </div>
                        <div class=\"title-info\">
                            {{ title.titleEng }}
                        </div>                                        
                    </div>
                    <div class=\"right-col\">
                        <a class=\"colorbox-ajax-form orange-button\" href=\"{{ path('titles_edit', { 'idTitles': title.idTitles }) }}\">
                            {{\"total.edit\"|trans}}
                        </a>
                        <div>
                            <a class=\"orange-button\" href=\"{{path('titles_delete_href', {'idTitles': title.idTitles}) }}\">{{\"total.delete\"|trans}}</a>
                        </div>
                    </div>
                </div>
            {% endfor %}
            
        </div>
    </div>
    
{% endblock %}
", "titles/index.html.twig", "/var/www/zabava/app/Resources/views/titles/index.html.twig");
    }
}
