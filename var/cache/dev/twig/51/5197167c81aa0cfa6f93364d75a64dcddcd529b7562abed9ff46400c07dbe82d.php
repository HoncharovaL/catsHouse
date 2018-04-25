<?php

/* news/index.html.twig */
class __TwigTemplate_1c018ed60e9513513f7b6f458b084107dffd71d7fba2e481bd7d978acae78c2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "news/index.html.twig", 1);
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
        $__internal_18ac59ee457e11298ab0c7c9768ba613510ba9a8fdfd60ce95a2f81c5c09d7f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18ac59ee457e11298ab0c7c9768ba613510ba9a8fdfd60ce95a2f81c5c09d7f8->enter($__internal_18ac59ee457e11298ab0c7c9768ba613510ba9a8fdfd60ce95a2f81c5c09d7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "news/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18ac59ee457e11298ab0c7c9768ba613510ba9a8fdfd60ce95a2f81c5c09d7f8->leave($__internal_18ac59ee457e11298ab0c7c9768ba613510ba9a8fdfd60ce95a2f81c5c09d7f8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d0956dfe1339b77692d0936b6f17585f12b36411ab0a200411f8c8279c88034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d0956dfe1339b77692d0936b6f17585f12b36411ab0a200411f8c8279c88034->enter($__internal_2d0956dfe1339b77692d0936b6f17585f12b36411ab0a200411f8c8279c88034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class='container'>
        <div class='news-container'>
            <h3>
                ";
        // line 7
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "newsType"), "method") == 1)) {
            // line 8
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.link.exhibitions"), "html", null, true);
            echo "
                ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 9
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "newsType"), "method") == 2)) {
            // line 10
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.link.advices"), "html", null, true);
            echo "
                ";
        } else {
            // line 12
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.block.news"), "html", null, true);
            echo "
                ";
        }
        // line 14
        echo "            </h3>

            ";
        // line 16
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 17
            echo "                <div class='button-container'>
                    <a class=\"orange-button\" href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("news_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.create"), "html", null, true);
            echo "</a>
                </div>
            ";
        }
        // line 21
        echo "            <div class='news-list'>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["news"]);
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 23
            echo "                    <div class=\"home-news-item\">
                        <div class=\"home-news-item-image\">
                            <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["photo_path"]) || array_key_exists("photo_path", $context) ? $context["photo_path"] : (function () { throw new Twig_Error_Runtime('Variable "photo_path" does not exist.', 25, $this->getSourceContext()); })()), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["news"], "photo", array()), "html", null, true);
            echo "\"/>
                        </div>
                        <div class=\"home-news-item-text\">
                            <div class=\"home-news-item-title\">
                                <a class='decorated-href' href='";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("news_show", array("idNews" => twig_get_attribute($this->env, $this->getSourceContext(), $context["news"], "idNews", array()))), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_translated')->getCallable(), array($context["news"], "title")), "html", null, true);
            echo "</a>
                            </div>
                            <div class=\"home-news-item-description\">
                                ";
            // line 32
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_translated')->getCallable(), array($context["news"], "newsdesc")), "html", null, true);
            echo "
                            </div>
                        </div>

                        ";
            // line 36
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 37
                echo "                            <div class=\"button-container\">
                                <a class=\"orange-button\" href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("news_edit", array("idNews" => twig_get_attribute($this->env, $this->getSourceContext(), $context["news"], "idNews", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.edit"), "html", null, true);
                echo "</a>
                            </div>
                        ";
            }
            // line 41
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_2d0956dfe1339b77692d0936b6f17585f12b36411ab0a200411f8c8279c88034->leave($__internal_2d0956dfe1339b77692d0936b6f17585f12b36411ab0a200411f8c8279c88034_prof);

    }

    public function getTemplateName()
    {
        return "news/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 43,  130 => 41,  122 => 38,  119 => 37,  117 => 36,  110 => 32,  102 => 29,  94 => 25,  90 => 23,  86 => 22,  83 => 21,  75 => 18,  72 => 17,  70 => 16,  66 => 14,  60 => 12,  54 => 10,  52 => 9,  47 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class='container'>
        <div class='news-container'>
            <h3>
                {% if app.request.get('newsType') == 1 %}
                    {{ 'header.link.exhibitions'|trans }}
                {% elseif app.request.get('newsType') == 2 %}
                    {{ 'header.link.advices'|trans }}
                {% else%}
                    {{ 'main.block.news'|trans }}
                {% endif %}
            </h3>

            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <div class='button-container'>
                    <a class=\"orange-button\" href=\"{{ path('news_new') }}\">{{ \"total.create\"|trans }}</a>
                </div>
            {% endif %}
            <div class='news-list'>
                {% for news in news %}
                    <div class=\"home-news-item\">
                        <div class=\"home-news-item-image\">
                            <img src=\"{{photo_path}}{{news.photo}}\"/>
                        </div>
                        <div class=\"home-news-item-text\">
                            <div class=\"home-news-item-title\">
                                <a class='decorated-href' href='{{path('news_show', {'idNews': news.idNews})}}'>{{ get_translated(news, 'title') }}</a>
                            </div>
                            <div class=\"home-news-item-description\">
                                {{ get_translated(news, 'newsdesc') }}
                            </div>
                        </div>

                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                            <div class=\"button-container\">
                                <a class=\"orange-button\" href=\"{{ path('news_edit', { 'idNews': news.idNews }) }}\">{{\"total.edit\"|trans}}</a>
                            </div>
                        {% endif %}
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}
", "news/index.html.twig", "/var/www/zabava/app/Resources/views/news/index.html.twig");
    }
}
