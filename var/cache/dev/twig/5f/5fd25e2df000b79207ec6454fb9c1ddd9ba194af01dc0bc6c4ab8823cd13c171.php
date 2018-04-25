<?php

/* :litters:index.html.twig */
class __TwigTemplate_f52e608b2d4cb6878ff0ff974e5d28edb6d187b3c6734ece5feeeaa68b4fc228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":litters:index.html.twig", 1);
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
        $__internal_1d218bd8bb815323e176bde9f394b857f2b2bf1f40cd52c88ac8dd936d03a6d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d218bd8bb815323e176bde9f394b857f2b2bf1f40cd52c88ac8dd936d03a6d1->enter($__internal_1d218bd8bb815323e176bde9f394b857f2b2bf1f40cd52c88ac8dd936d03a6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":litters:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d218bd8bb815323e176bde9f394b857f2b2bf1f40cd52c88ac8dd936d03a6d1->leave($__internal_1d218bd8bb815323e176bde9f394b857f2b2bf1f40cd52c88ac8dd936d03a6d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_db30ad046a37100e6c015d0baeaa71680708e76b86412e3f6cd83e6817fe9c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db30ad046a37100e6c015d0baeaa71680708e76b86412e3f6cd83e6817fe9c46->enter($__internal_db30ad046a37100e6c015d0baeaa71680708e76b86412e3f6cd83e6817fe9c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"litters_container\">
            ";
        // line 6
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 7
            echo "                <div class=\" button-container\">
                    <a class=\"orange-button\" href=\"";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("litters_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.create"), "html", null, true);
            echo "</a>
                </div>
            ";
        }
        // line 11
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["litters"]) || array_key_exists("litters", $context) ? $context["litters"] : (function () { throw new Twig_Error_Runtime('Variable "litters" does not exist.', 11, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["litter"]) {
            // line 12
            echo "                <div class = \"litter-item\">
                    
                    ";
            // line 14
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["litter"], "mother", array())) {
                // line 15
                echo "                        <div class=\"parent-container\">
                            <div class=\"parents-img\">
                                <img  src=\"";
                // line 17
                echo twig_escape_filter($this->env, (isset($context["photo_path"]) || array_key_exists("photo_path", $context) ? $context["photo_path"] : (function () { throw new Twig_Error_Runtime('Variable "photo_path" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["litter"], "mother", array()), "photo", array()), "html", null, true);
                echo "\" alt=\"dog\" > 
                            </div>
                            <a class=\"decorated-href\" href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogs_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["litter"], "mother", array()), "idDogs", array()))), "html", null, true);
                echo "\">
                                ";
                // line 20
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_translated')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["litter"], "mother", array()), "name")), "html", null, true);
                echo "
                            </a>
                        </div>
                    ";
            }
            // line 24
            echo "                    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["litter"], "father", array())) {
                // line 25
                echo "                        <div class=\"parent-container\">
                            <div class=\"parents-img\">
                                <img src=\"";
                // line 27
                echo twig_escape_filter($this->env, (isset($context["photo_path"]) || array_key_exists("photo_path", $context) ? $context["photo_path"] : (function () { throw new Twig_Error_Runtime('Variable "photo_path" does not exist.', 27, $this->getSourceContext()); })()), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["litter"], "father", array()), "photo", array()), "html", null, true);
                echo "\" alt=\"dog\" > 
                            </div>
                            <a class=\"decorated-href\" href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogs_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["litter"], "father", array()), "idDogs", array()))), "html", null, true);
                echo "\">
                                ";
                // line 30
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_translated')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["litter"], "father", array()), "name")), "html", null, true);
                echo "
                            </a>
                        </div>
                    ";
            }
            // line 34
            echo "                    <div class=\"litter-date\">
                        ";
            // line 35
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["litter"], "ldate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["litter"], "ldate", array()), "d-m-Y"), "html", null, true);
            }
            // line 36
            echo "                    </div>
                    <div class=\"litter-item-child-list\">
                        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["litter"], "dogs", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 39
                echo "                            <div class=\"child-list-item\">
                                <div class=\"child-sex\"><img src='";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/app/img/sex/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "sex", array())) . ".png")), "html", null, true);
                echo "'></div>
                                <div class=\"child-name\">
                                    <a class=\"decorated-href\" href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogs_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "idDogs", array()))), "html", null, true);
                echo "\">
                                        ";
                // line 43
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_translated')->getCallable(), array($context["child"], "name")), "html", null, true);
                echo "
                                    </a>
                                </div>
                                <div class=\"child-state\"><img src='";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/app/img/state/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "state", array())) . ".png")), "html", null, true);
                echo "'></div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                    </div>  
                    ";
            // line 50
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 51
                echo "                        
                            <a class=\"orange-button\" href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("litters_edit", array("idLitters" => twig_get_attribute($this->env, $this->getSourceContext(), $context["litter"], "idLitters", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.edit"), "html", null, true);
                echo "</a>
                        
                    ";
            }
            // line 55
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['litter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </div>
    </div>
";
        
        $__internal_db30ad046a37100e6c015d0baeaa71680708e76b86412e3f6cd83e6817fe9c46->leave($__internal_db30ad046a37100e6c015d0baeaa71680708e76b86412e3f6cd83e6817fe9c46_prof);

    }

    public function getTemplateName()
    {
        return ":litters:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 57,  171 => 55,  163 => 52,  160 => 51,  158 => 50,  155 => 49,  146 => 46,  140 => 43,  136 => 42,  131 => 40,  128 => 39,  124 => 38,  120 => 36,  116 => 35,  113 => 34,  106 => 30,  102 => 29,  96 => 27,  92 => 25,  89 => 24,  82 => 20,  78 => 19,  72 => 17,  68 => 15,  66 => 14,  62 => 12,  57 => 11,  49 => 8,  46 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"litters_container\">
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <div class=\" button-container\">
                    <a class=\"orange-button\" href=\"{{ path('litters_new') }}\">{{\"total.create\"|trans}}</a>
                </div>
            {%endif%}
            {% for litter in litters %}
                <div class = \"litter-item\">
                    
                    {% if litter.mother %}
                        <div class=\"parent-container\">
                            <div class=\"parents-img\">
                                <img  src=\"{{photo_path}}{{litter.mother.photo}}\" alt=\"dog\" > 
                            </div>
                            <a class=\"decorated-href\" href=\"{{ path('dogs_show', { 'id': litter.mother.idDogs }) }}\">
                                {{ get_translated(litter.mother, 'name') }}
                            </a>
                        </div>
                    {% endif %}
                    {% if litter.father %}
                        <div class=\"parent-container\">
                            <div class=\"parents-img\">
                                <img src=\"{{photo_path}}{{litter.father.photo}}\" alt=\"dog\" > 
                            </div>
                            <a class=\"decorated-href\" href=\"{{ path('dogs_show', { 'id': litter.father.idDogs }) }}\">
                                {{ get_translated(litter.father, 'name') }}
                            </a>
                        </div>
                    {% endif %}
                    <div class=\"litter-date\">
                        {% if litter.ldate  %}{{ litter.ldate |date('d-m-Y') }}{% endif %}
                    </div>
                    <div class=\"litter-item-child-list\">
                        {% for child in litter.dogs %}
                            <div class=\"child-list-item\">
                                <div class=\"child-sex\"><img src='{{ asset('bundles/app/img/sex/'~child.sex~'.png') }}'></div>
                                <div class=\"child-name\">
                                    <a class=\"decorated-href\" href=\"{{ path('dogs_show', { 'id': child.idDogs }) }}\">
                                        {{ get_translated(child, 'name') }}
                                    </a>
                                </div>
                                <div class=\"child-state\"><img src='{{ asset('bundles/app/img/state/'~child.state~'.png') }}'></div>
                            </div>
                        {% endfor %}
                    </div>  
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        
                            <a class=\"orange-button\" href=\"{{ path('litters_edit', { 'idLitters': litter.idLitters }) }}\">{{\"total.edit\"|trans}}</a>
                        
                    {% endif %}
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", ":litters:index.html.twig", "/var/www/zabava/app/Resources/views/litters/index.html.twig");
    }
}
