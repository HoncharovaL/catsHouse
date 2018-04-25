<?php

/* :services:index.html.twig */
class __TwigTemplate_3a7c0d8c54b7cd60abe52fdf3a7892b6cc7eb38606eb9ffb95383bdf25f2e4a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":services:index.html.twig", 1);
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
        $__internal_c02af2a2b6842483b223b21709e52a4725ad01c67592906ba62530124b94772d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02af2a2b6842483b223b21709e52a4725ad01c67592906ba62530124b94772d->enter($__internal_c02af2a2b6842483b223b21709e52a4725ad01c67592906ba62530124b94772d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":services:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c02af2a2b6842483b223b21709e52a4725ad01c67592906ba62530124b94772d->leave($__internal_c02af2a2b6842483b223b21709e52a4725ad01c67592906ba62530124b94772d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a16db2fb0dfcac10dc0adc5f5a5170dc862e58b9f1e26354d23e831d13e8e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a16db2fb0dfcac10dc0adc5f5a5170dc862e58b9f1e26354d23e831d13e8e08->enter($__internal_6a16db2fb0dfcac10dc0adc5f5a5170dc862e58b9f1e26354d23e831d13e8e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"service-container\">
            <div class=\"services-img\">
                <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/about_breed_img.png"), "html", null, true);
        echo "\">
            </div>
            <div class=\"service-list\">
                ";
        // line 10
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 11
            echo "                    <div class=\"button-container\"> 
                        <a class=\"orange-button\" href=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.create"), "html", null, true);
            echo "</a>
                    </div>

                ";
        }
        // line 16
        echo "                <ul>
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new Twig_Error_Runtime('Variable "services" does not exist.', 17, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 18
            echo "                        <div class=\"service-list-item\">
                            <li>
                                <div class=\"service-name\">
                                    <a onclick=\"\$(this).parents('.service-list-item').find('.service-about').toggleClass('hidden');\" class=\"decorated-href\">
                                        ";
            // line 22
            if (((isset($context["loc"]) || array_key_exists("loc", $context) ? $context["loc"] : (function () { throw new Twig_Error_Runtime('Variable "loc" does not exist.', 22, $this->getSourceContext()); })()) != "en")) {
                // line 23
                echo "                                            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "services", array()), "html", null, true);
                echo "</td>
                                        ";
            } else {
                // line 25
                echo "                                            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "servicesEng", array()), "html", null, true);
                echo "</td>
                                        ";
            }
            // line 27
            echo "                                    </a>
                                </div>

                                <div class=\"service-about hidden\">
                                    <div class=\"service-description\">
                                        ";
            // line 32
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_translated')->getCallable(), array($context["service"], "description")), "html", null, true);
            echo "
                                    </div>
                                    <div class=\"service-price\">
                                        ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "price", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.uah"), "html", null, true);
            echo "
                                    </div>
                                    <div>
                                        <a class=\"orange-button colorbox-ajax-form\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services_comment", array("idServices" => twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "idServices", array()))), "html", null, true);
            echo "\">
                                            ";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.askquestion"), "html", null, true);
            echo "
                                        </a>
                                    </div>
                                    <div>
                                        ";
            // line 43
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 44
                echo "                                            <a class=\"orange-button\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services_edit", array("idServices" => twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "idServices", array()))), "html", null, true);
                echo "\">
                                                ";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.edit"), "html", null, true);
                echo "
                                            </a>
                                        ";
            }
            // line 48
            echo "                                    </div>
                                </div>
                            </li>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                </ul>
            </div>
        </div>
    </div>

";
        
        $__internal_6a16db2fb0dfcac10dc0adc5f5a5170dc862e58b9f1e26354d23e831d13e8e08->leave($__internal_6a16db2fb0dfcac10dc0adc5f5a5170dc862e58b9f1e26354d23e831d13e8e08_prof);

    }

    public function getTemplateName()
    {
        return ":services:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 53,  136 => 48,  130 => 45,  125 => 44,  123 => 43,  116 => 39,  112 => 38,  105 => 35,  99 => 32,  92 => 27,  86 => 25,  80 => 23,  78 => 22,  72 => 18,  68 => 17,  65 => 16,  56 => 12,  53 => 11,  51 => 10,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"service-container\">
            <div class=\"services-img\">
                <img src=\"{{ asset('bundles/app/img/about_breed_img.png') }}\">
            </div>
            <div class=\"service-list\">
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <div class=\"button-container\"> 
                        <a class=\"orange-button\" href=\"{{ path('services_new') }}\">{{'total.create'|trans}}</a>
                    </div>

                {% endif %}
                <ul>
                    {% for service in services %}
                        <div class=\"service-list-item\">
                            <li>
                                <div class=\"service-name\">
                                    <a onclick=\"\$(this).parents('.service-list-item').find('.service-about').toggleClass('hidden');\" class=\"decorated-href\">
                                        {% if loc!='en' %}
                                            <td>{{ service.services }}</td>
                                        {% else %}
                                            <td>{{service.servicesEng}}</td>
                                        {%endif%}
                                    </a>
                                </div>

                                <div class=\"service-about hidden\">
                                    <div class=\"service-description\">
                                        {{ get_translated(service, 'description') }}
                                    </div>
                                    <div class=\"service-price\">
                                        {{ service.price }}{{\"total.uah\"|trans}}
                                    </div>
                                    <div>
                                        <a class=\"orange-button colorbox-ajax-form\" href=\"{{ path('services_comment', { 'idServices': service.idServices }) }}\">
                                            {{'total.askquestion'|trans}}
                                        </a>
                                    </div>
                                    <div>
                                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                            <a class=\"orange-button\" href=\"{{ path('services_edit', { 'idServices': service.idServices }) }}\">
                                                {{'total.edit'|trans}}
                                            </a>
                                        {% endif %}
                                    </div>
                                </div>
                            </li>
                        </div>
                    {% endfor%}
                </ul>
            </div>
        </div>
    </div>

{% endblock %}
", ":services:index.html.twig", "/var/www/zabava/app/Resources/views/services/index.html.twig");
    }
}
