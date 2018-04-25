<?php

/* :dogs:index.html.twig */
class __TwigTemplate_fb10d42dee95673a6ca82fee58d4d1d8b820884f66dad398a0cd17151619fbfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":dogs:index.html.twig", 1);
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
        $__internal_a2e6169e7e520c705c07131b799eda4e11d8a49701c52806a2851acbda272491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2e6169e7e520c705c07131b799eda4e11d8a49701c52806a2851acbda272491->enter($__internal_a2e6169e7e520c705c07131b799eda4e11d8a49701c52806a2851acbda272491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dogs:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2e6169e7e520c705c07131b799eda4e11d8a49701c52806a2851acbda272491->leave($__internal_a2e6169e7e520c705c07131b799eda4e11d8a49701c52806a2851acbda272491_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ced72bb10ecb7918127f07cc77a06e1cc7b445cad1d68170cf28d0f9da7d478f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced72bb10ecb7918127f07cc77a06e1cc7b445cad1d68170cf28d0f9da7d478f->enter($__internal_ced72bb10ecb7918127f07cc77a06e1cc7b445cad1d68170cf28d0f9da7d478f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class='container'>
        <h3>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("dogs.ourdogs"), "html", null, true);
        echo "</h3>
                    ";
        // line 6
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 7
            echo "                <div class='button-container'>
                    <a class=\"orange-button\" href=\"";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogs_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.create"), "html", null, true);
            echo "</a>
                </div>
            ";
        }
        // line 11
        echo "        <div class=\"dogs-list\">

            <div class=\"dogs-list-item\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dogs"]) || array_key_exists("dogs", $context) ? $context["dogs"] : (function () { throw new Twig_Error_Runtime('Variable "dogs" does not exist.', 14, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dog"]) {
            // line 15
            echo "                    <div class=\"dogs-photo-container\">
                        <img class='dogs-photo' src=\"";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["photo_path"]) || array_key_exists("photo_path", $context) ? $context["photo_path"] : (function () { throw new Twig_Error_Runtime('Variable "photo_path" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dog"], "photo", array()), "html", null, true);
            echo "\" >
                    </div>
                    <div class=\"dogs-about-container\">
                        <div class='sex-img'>
                            <img src='";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/app/img/sex/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["dog"], "sex", array())) . ".png")), "html", null, true);
            echo "'>
                        </div>
                        <div class='dog-name'>
                            ";
            // line 23
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_translated')->getCallable(), array($context["dog"], "name")), "html", null, true);
            echo "
                        </div>
                        <div>
                            ";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("dogs.about.dogage"), "html", null, true);
            echo "
                            ";
            // line 27
            $context["age"] = $this->env->getExtension('AppBundle\Twig\Extension\AgeCalculatorExtension')->calculateAge(twig_get_attribute($this->env, $this->getSourceContext(), $context["dog"], "bdate", array()));
            // line 28
            echo "                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("dogs.about.age", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["age"]) || array_key_exists("age", $context) ? $context["age"] : (function () { throw new Twig_Error_Runtime('Variable "age" does not exist.', 28, $this->getSourceContext()); })()), "y", array()), array("%month%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["age"]) || array_key_exists("age", $context) ? $context["age"] : (function () { throw new Twig_Error_Runtime('Variable "age" does not exist.', 28, $this->getSourceContext()); })()), "m", array()), "%year%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["age"]) || array_key_exists("age", $context) ? $context["age"] : (function () { throw new Twig_Error_Runtime('Variable "age" does not exist.', 28, $this->getSourceContext()); })()), "y", array())), "messages");
            // line 31
            echo "                        </div>
                        <div>
                            ";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("dogs.about.quality"), "html", null, true);
            echo "
                            ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("dogs.about.quality_" . twig_get_attribute($this->env, $this->getSourceContext(), $context["dog"], "quality", array()))), "html", null, true);
            echo "
                        </div>
                        <div>
                            ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("dogs.about.state"), "html", null, true);
            echo "
                            ";
            // line 38
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["dog"], "state", array())) {
                // line 39
                echo "                                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("dogs.about.forsale"), "html", null, true);
                echo "
                            ";
            } else {
                // line 41
                echo "                                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("dogs.about.soldout"), "html", null, true);
                echo "    
                            ";
            }
            // line 43
            echo "                        </div>
                        <div class='dogs-description'>
                            ";
            // line 45
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_translated')->getCallable(), array($context["dog"], "description")), "html", null, true);
            echo "
                        </div>

                        
                            ";
            // line 49
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 50
                echo "                                <a class=\"orange-button\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogs_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["dog"], "idDogs", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.edit"), "html", null, true);
                echo "</a>
                            ";
            }
            // line 52
            echo "                            <a class=\"orange-button\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogs_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["dog"], "idDogs", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.show"), "html", null, true);
            echo "</a>   
                        

                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "            </div>
        </div>    
    </div>
";
        
        $__internal_ced72bb10ecb7918127f07cc77a06e1cc7b445cad1d68170cf28d0f9da7d478f->leave($__internal_ced72bb10ecb7918127f07cc77a06e1cc7b445cad1d68170cf28d0f9da7d478f_prof);

    }

    public function getTemplateName()
    {
        return ":dogs:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 57,  154 => 52,  146 => 50,  144 => 49,  137 => 45,  133 => 43,  127 => 41,  121 => 39,  119 => 38,  115 => 37,  109 => 34,  105 => 33,  101 => 31,  98 => 28,  96 => 27,  92 => 26,  86 => 23,  80 => 20,  72 => 16,  69 => 15,  65 => 14,  60 => 11,  52 => 8,  49 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class='container'>
        <h3>{{\"dogs.ourdogs\"|trans}}</h3>
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <div class='button-container'>
                    <a class=\"orange-button\" href=\"{{ path('dogs_new') }}\">{{ \"total.create\"|trans }}</a>
                </div>
            {% endif %}
        <div class=\"dogs-list\">

            <div class=\"dogs-list-item\">
                {% for dog in dogs %}
                    <div class=\"dogs-photo-container\">
                        <img class='dogs-photo' src=\"{{photo_path}}{{dog.photo}}\" >
                    </div>
                    <div class=\"dogs-about-container\">
                        <div class='sex-img'>
                            <img src='{{ asset('bundles/app/img/sex/'~dog.sex~'.png') }}'>
                        </div>
                        <div class='dog-name'>
                            {{ get_translated(dog, 'name') }}
                        </div>
                        <div>
                            {{\"dogs.about.dogage\"|trans}}
                            {% set age = calculate_age(dog.bdate) %}
                            {% transchoice age.y with {'%month%': age.m, '%year%': age.y} %}
                            dogs.about.age
                            {% endtranschoice %}
                        </div>
                        <div>
                            {{\"dogs.about.quality\"|trans}}
                            {{(\"dogs.about.quality_\"~dog.quality)|trans}}
                        </div>
                        <div>
                            {{\"dogs.about.state\"|trans}}
                            {% if dog.state %}
                                {{\"dogs.about.forsale\"|trans}}
                            {% else %}
                                {{\"dogs.about.soldout\"|trans}}    
                            {%endif%}
                        </div>
                        <div class='dogs-description'>
                            {{ get_translated(dog, 'description') }}
                        </div>

                        
                            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                <a class=\"orange-button\" href=\"{{ path('dogs_edit', { 'id': dog.idDogs }) }}\">{{ \"total.edit\"|trans }}</a>
                            {% endif %}
                            <a class=\"orange-button\" href=\"{{ path('dogs_show', { 'id': dog.idDogs }) }}\">{{ \"total.show\"|trans }}</a>   
                        

                    </div>
                {% endfor %}
            </div>
        </div>    
    </div>
{% endblock %}
", ":dogs:index.html.twig", "/var/www/zabava/app/Resources/views/dogs/index.html.twig");
    }
}
