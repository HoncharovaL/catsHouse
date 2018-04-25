<?php

/* :comments:index.html.twig */
class __TwigTemplate_d056fd7d674f019dfc2a057216d80f919308e54f81560aece5c1fd5c8b5acd65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comments:index.html.twig", 1);
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
        $__internal_9bfee5b15b519d9283d49bc213cd327edf9f10fc38ec15eb41fc322ecf74fc00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bfee5b15b519d9283d49bc213cd327edf9f10fc38ec15eb41fc322ecf74fc00->enter($__internal_9bfee5b15b519d9283d49bc213cd327edf9f10fc38ec15eb41fc322ecf74fc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comments:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bfee5b15b519d9283d49bc213cd327edf9f10fc38ec15eb41fc322ecf74fc00->leave($__internal_9bfee5b15b519d9283d49bc213cd327edf9f10fc38ec15eb41fc322ecf74fc00_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9437dd6a9b181f5823f779e770027922fecc8e763eb92c872626e79a2badba60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9437dd6a9b181f5823f779e770027922fecc8e763eb92c872626e79a2badba60->enter($__internal_9437dd6a9b181f5823f779e770027922fecc8e763eb92c872626e79a2badba60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"comments container\">
        <div>
            ";
        // line 6
        if (twig_length_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 6, $this->getSourceContext()); })()))) {
            // line 7
            echo "                <h3>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.question_about.services"), "html", null, true);
            echo "</h3>
                ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 8, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 9
                echo "                    <div class=\"comment-item\">
                        <div class=\"comment-date\">
                            ";
                // line 11
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "cdate", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "cdate", array()), "d-m-Y"), "html", null, true);
                }
                // line 12
                echo "                        </div>
                        <div class=\"user-name\">
                            ";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "klname", array()), "html", null, true);
                echo "
                        </div>
                        <div class=\"user-phone\">
                            ";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "phone", array()), "html", null, true);
                echo "
                        </div>
                        <div class=\"user-email\">
                            ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "email", array()), "html", null, true);
                echo "
                        </div>
                        <div class=\"comment-theme\">
                            ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.subject"), "html", null, true);
                echo "
                            ";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "services", array()), "html", null, true);
                echo "
                        </div>
                        <div class=\"user-question\">
                            ";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "question", array()), "html", null, true);
                echo "
                        </div>                    
                        <div class=\"comment-delete\">
                            <a class=\"orange-button\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_route_name", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "idComments", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.delete"), "html", null, true);
                echo "</a>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "            ";
        }
        // line 35
        echo "        </div>
        <div>
            ";
        // line 37
        if (twig_length_filter($this->env, (isset($context["commentsdogs"]) || array_key_exists("commentsdogs", $context) ? $context["commentsdogs"] : (function () { throw new Twig_Error_Runtime('Variable "commentsdogs" does not exist.', 37, $this->getSourceContext()); })()))) {
            // line 38
            echo "                <h3>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.question_about.dogs"), "html", null, true);
            echo "</h3>
                ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commentsdogs"]) || array_key_exists("commentsdogs", $context) ? $context["commentsdogs"] : (function () { throw new Twig_Error_Runtime('Variable "commentsdogs" does not exist.', 39, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 40
                echo "                    <div class=\"comment-item\">
                        <div class=\"comment-date\">
                            ";
                // line 42
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "cdate", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "cdate", array()), "Y-m-d"), "html", null, true);
                }
                // line 43
                echo "                        </div>
                        <div class=\"user-name\">
                            ";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "klname", array()), "html", null, true);
                echo "
                        </div>
                        <div class=\"user-phone\">
                            ";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "phone", array()), "html", null, true);
                echo "
                        </div>
                        <div class=\"user-email\">
                            ";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "email", array()), "html", null, true);
                echo "
                        </div>
                        <div class=\"comment-theme\">
                            ";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.subject"), "html", null, true);
                echo "
                            ";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "name", array()), "html", null, true);
                echo "
                        </div>
                        <div class=\"user-question\">
                            ";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "question", array()), "html", null, true);
                echo "
                        </div>                    
                        <div class=\"comment-delete\">
                            <a class=\"orange-button\" href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_route_name", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "idComments", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.delete"), "html", null, true);
                echo "</a>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "
            ";
        }
        // line 67
        echo "        </div>
    </div>
";
        
        $__internal_9437dd6a9b181f5823f779e770027922fecc8e763eb92c872626e79a2badba60->leave($__internal_9437dd6a9b181f5823f779e770027922fecc8e763eb92c872626e79a2badba60_prof);

    }

    public function getTemplateName()
    {
        return ":comments:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 67,  189 => 65,  177 => 61,  171 => 58,  165 => 55,  161 => 54,  155 => 51,  149 => 48,  143 => 45,  139 => 43,  135 => 42,  131 => 40,  127 => 39,  122 => 38,  120 => 37,  116 => 35,  113 => 34,  101 => 30,  95 => 27,  89 => 24,  85 => 23,  79 => 20,  73 => 17,  67 => 14,  63 => 12,  59 => 11,  55 => 9,  51 => 8,  46 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"comments container\">
        <div>
            {% if comments | length %}
                <h3>{{\"total.question_about.services\"|trans}}</h3>
                {% for comment in comments %}
                    <div class=\"comment-item\">
                        <div class=\"comment-date\">
                            {% if comment.cdate %}{{ comment.cdate|date('d-m-Y') }}{% endif %}
                        </div>
                        <div class=\"user-name\">
                            {{ comment.klname }}
                        </div>
                        <div class=\"user-phone\">
                            {{ comment.phone }}
                        </div>
                        <div class=\"user-email\">
                            {{ comment.email }}
                        </div>
                        <div class=\"comment-theme\">
                            {{\"total.subject\"|trans}}
                            {{ comment.services}}
                        </div>
                        <div class=\"user-question\">
                            {{ comment.question }}
                        </div>                    
                        <div class=\"comment-delete\">
                            <a class=\"orange-button\" href=\"{{ path('delete_route_name', {'id': comment.idComments }) }}\">{{'total.delete'|trans}}</a>
                        </div>
                    </div>
                {% endfor %}
            {% endif %}
        </div>
        <div>
            {% if commentsdogs | length %}
                <h3>{{\"total.question_about.dogs\"|trans}}</h3>
                {% for comment in commentsdogs %}
                    <div class=\"comment-item\">
                        <div class=\"comment-date\">
                            {% if comment.cdate %}{{ comment.cdate|date('Y-m-d') }}{% endif %}
                        </div>
                        <div class=\"user-name\">
                            {{ comment.klname }}
                        </div>
                        <div class=\"user-phone\">
                            {{ comment.phone }}
                        </div>
                        <div class=\"user-email\">
                            {{ comment.email }}
                        </div>
                        <div class=\"comment-theme\">
                            {{\"total.subject\"|trans}}
                            {{ comment.name}}
                        </div>
                        <div class=\"user-question\">
                            {{ comment.question }}
                        </div>                    
                        <div class=\"comment-delete\">
                            <a class=\"orange-button\" href=\"{{ path('delete_route_name', {'id': comment.idComments }) }}\">{{'total.delete'|trans}}</a>
                        </div>
                    </div>
                {% endfor %}

            {% endif %}
        </div>
    </div>
{% endblock %}
", ":comments:index.html.twig", "/var/www/zabava/app/Resources/views/comments/index.html.twig");
    }
}
