<?php

/* default/index.html.twig */
class __TwigTemplate_59f4511c0f7654c566d34ee9674c5dda95f8870f4f267c0d3cbf4523263606a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5764ed4ad8458a772bf7adf70cdc5fafa5f201c98ad8f2e0c82a792c13d0bf2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5764ed4ad8458a772bf7adf70cdc5fafa5f201c98ad8f2e0c82a792c13d0bf2c->enter($__internal_5764ed4ad8458a772bf7adf70cdc5fafa5f201c98ad8f2e0c82a792c13d0bf2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5764ed4ad8458a772bf7adf70cdc5fafa5f201c98ad8f2e0c82a792c13d0bf2c->leave($__internal_5764ed4ad8458a772bf7adf70cdc5fafa5f201c98ad8f2e0c82a792c13d0bf2c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6ab3b4680c1c811e23df729dc19930feb883606e0772320dc139ceb854f31cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab3b4680c1c811e23df729dc19930feb883606e0772320dc139ceb854f31cbf->enter($__internal_6ab3b4680c1c811e23df729dc19930feb883606e0772320dc139ceb854f31cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/jcarousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_6ab3b4680c1c811e23df729dc19930feb883606e0772320dc139ceb854f31cbf->leave($__internal_6ab3b4680c1c811e23df729dc19930feb883606e0772320dc139ceb854f31cbf_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ece73681b5a15e7eebb2361cfa7e691fded54c44f702527893472393b76481e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ece73681b5a15e7eebb2361cfa7e691fded54c44f702527893472393b76481e->enter($__internal_7ece73681b5a15e7eebb2361cfa7e691fded54c44f702527893472393b76481e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"home-dogs\">
        <div class=\"container\">
            <div class=\"home-dogs-left-block\">
                <div class=\"home-dogs-left-block-take\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.dogs.take"), "html", null, true);
        echo "</div>
                <div class=\"home-dogs-left-block-for-u\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.dogs.for_you"), "html", null, true);
        echo "</div>
                <div class=\"home-dogs-left-block-tailed\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.dogs.tailed"), "html", null, true);
        echo "</div>
                <div class=\"home-dogs-left-block-zabava\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.dogs.zabava"), "html", null, true);
        echo "</div>
            </div>
            <div class=\"home-dogs-right-block\">
                <div class=\"jcarousel-wrapper\">
                    <div class=\"jcarousel\" data-jcarousel=\"true\">
                        <ul style=\"left: 0px; top: 0px;\">
                            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dogs"]) || array_key_exists("dogs", $context) ? $context["dogs"] : (function () { throw new Twig_Error_Runtime('Variable "dogs" does not exist.', 21, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dog"]) {
            // line 22
            echo "                                <li><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["photo_path"]) || array_key_exists("photo_path", $context) ? $context["photo_path"] : (function () { throw new Twig_Error_Runtime('Variable "photo_path" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dog"], "photo", array()), "html", null, true);
            echo "\"/></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                        </ul>
                    </div>
                    <a href=\"#\" class=\"jcarousel-control-prev inactive\" data-jcarouselcontrol=\"true\">‹</a>
                    <a href=\"#\" class=\"jcarousel-control-next\" data-jcarouselcontrol=\"true\">›</a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"home-about-breed\">
        <div class=\"container\">
            <h3>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.block.about_breed"), "html", null, true);
        echo "</h3>
            <div class=\"home-about-breed-description\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.about_breed.description"), "html", null, true);
        echo "</div>
            <div class=\"home-about-breed-image\">
                <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/about_breed_img.png"), "html", null, true);
        echo "\"/>
            </div>
        </div>
    </div>
    ";
        // line 41
        if (twig_length_filter($this->env, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new Twig_Error_Runtime('Variable "news" does not exist.', 41, $this->getSourceContext()); })()))) {
            // line 42
            echo "        <div class=\"home-news\">
            <div class=\"container\">
                <h3>";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.block.news"), "html", null, true);
            echo "</h3>
                ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["news"]);
            foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
                // line 46
                echo "                    <div class=\"home-news-item\">
                        <div class=\"home-news-item-image\">
                            <img src=\"";
                // line 48
                echo twig_escape_filter($this->env, (isset($context["photo_path"]) || array_key_exists("photo_path", $context) ? $context["photo_path"] : (function () { throw new Twig_Error_Runtime('Variable "photo_path" does not exist.', 48, $this->getSourceContext()); })()), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["news"], "photo", array()), "html", null, true);
                echo "\"/>
                        </div>
                        <div class=\"home-news-item-text\">
                            <div class=\"home-news-item-title\">
                                 <a class='decorated-href' href='";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("news_show", array("idNews" => twig_get_attribute($this->env, $this->getSourceContext(), $context["news"], "idNews", array()))), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_translated')->getCallable(), array($context["news"], "title")), "html", null, true);
                echo "</a>
                            </div>
                            <div class=\"home-news-item-description\">
                                ";
                // line 55
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_translated')->getCallable(), array($context["news"], "newsdesc")), "html", null, true);
                echo "
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "            </div>
        </div>
    ";
        }
        // line 63
        echo "
    ";
        // line 64
        if (twig_length_filter($this->env, (isset($context["partners"]) || array_key_exists("partners", $context) ? $context["partners"] : (function () { throw new Twig_Error_Runtime('Variable "partners" does not exist.', 64, $this->getSourceContext()); })()))) {
            // line 65
            echo "        <div class=\"home-partners\">
            <div class=\"container\">
                <h3>";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.block.partners"), "html", null, true);
            echo "</h3>
                ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["partners"]) || array_key_exists("partners", $context) ? $context["partners"] : (function () { throw new Twig_Error_Runtime('Variable "partners" does not exist.', 68, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
                // line 69
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["partner"], "site", array()), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, (isset($context["photo_path"]) || array_key_exists("photo_path", $context) ? $context["photo_path"] : (function () { throw new Twig_Error_Runtime('Variable "photo_path" does not exist.', 69, $this->getSourceContext()); })()), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["partner"], "photo", array()), "html", null, true);
                echo "\"/></a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "            </div>
        </div>
    ";
        }
        
        $__internal_7ece73681b5a15e7eebb2361cfa7e691fded54c44f702527893472393b76481e->leave($__internal_7ece73681b5a15e7eebb2361cfa7e691fded54c44f702527893472393b76481e_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6c5008f3bfb0653a857eeb23649ad54c25ad1bfbecec57c61998b0b39deeaa0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c5008f3bfb0653a857eeb23649ad54c25ad1bfbecec57c61998b0b39deeaa0f->enter($__internal_6c5008f3bfb0653a857eeb23649ad54c25ad1bfbecec57c61998b0b39deeaa0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.jcarousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(function () {
            \$('.jcarousel').jcarousel({
                wrap: 'circular'
            });

            \$('.jcarousel-control-prev')
            .on('jcarouselcontrol:active', function() {
                \$(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                \$(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '-=1'
            });

        \$('.jcarousel-control-next')
            .on('jcarouselcontrol:active', function() {
                \$(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                \$(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '+=1'
            });

        });
    </script>
";
        
        $__internal_6c5008f3bfb0653a857eeb23649ad54c25ad1bfbecec57c61998b0b39deeaa0f->leave($__internal_6c5008f3bfb0653a857eeb23649ad54c25ad1bfbecec57c61998b0b39deeaa0f_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 78,  225 => 77,  219 => 76,  209 => 71,  197 => 69,  193 => 68,  189 => 67,  185 => 65,  183 => 64,  180 => 63,  175 => 60,  164 => 55,  156 => 52,  148 => 48,  144 => 46,  140 => 45,  136 => 44,  132 => 42,  130 => 41,  123 => 37,  118 => 35,  114 => 34,  102 => 24,  92 => 22,  88 => 21,  79 => 15,  75 => 14,  71 => 13,  67 => 12,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('bundles/app/css/jcarousel.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
    <div class=\"home-dogs\">
        <div class=\"container\">
            <div class=\"home-dogs-left-block\">
                <div class=\"home-dogs-left-block-take\">{{\"main.dogs.take\"|trans}}</div>
                <div class=\"home-dogs-left-block-for-u\">{{\"main.dogs.for_you\"|trans}}</div>
                <div class=\"home-dogs-left-block-tailed\">{{\"main.dogs.tailed\"|trans}}</div>
                <div class=\"home-dogs-left-block-zabava\">{{\"main.dogs.zabava\"|trans}}</div>
            </div>
            <div class=\"home-dogs-right-block\">
                <div class=\"jcarousel-wrapper\">
                    <div class=\"jcarousel\" data-jcarousel=\"true\">
                        <ul style=\"left: 0px; top: 0px;\">
                            {% for dog in dogs %}
                                <li><img src=\"{{photo_path}}{{dog.photo}}\"/></li>
                                {% endfor %}
                        </ul>
                    </div>
                    <a href=\"#\" class=\"jcarousel-control-prev inactive\" data-jcarouselcontrol=\"true\">‹</a>
                    <a href=\"#\" class=\"jcarousel-control-next\" data-jcarouselcontrol=\"true\">›</a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"home-about-breed\">
        <div class=\"container\">
            <h3>{{'main.block.about_breed'|trans}}</h3>
            <div class=\"home-about-breed-description\">{{\"main.about_breed.description\"|trans}}</div>
            <div class=\"home-about-breed-image\">
                <img src=\"{{ asset('bundles/app/img/about_breed_img.png') }}\"/>
            </div>
        </div>
    </div>
    {% if news|length %}
        <div class=\"home-news\">
            <div class=\"container\">
                <h3>{{'main.block.news'|trans}}</h3>
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
                    </div>
                {% endfor %}
            </div>
        </div>
    {% endif %}

    {% if partners|length %}
        <div class=\"home-partners\">
            <div class=\"container\">
                <h3>{{'main.block.partners'|trans}}</h3>
                {% for partner in partners %}
                    <a href=\"{{partner.site}}\"><img src=\"{{photo_path}}{{ partner.photo }}\"/></a>
                    {% endfor %}
            </div>
        </div>
    {% endif%}
{% endblock %}

{% block javascripts %}
    {{parent()}}
    <script type=\"text/javascript\" src=\"{{asset(\"bundles/app/js/jquery.jcarousel.min.js\")}}\"></script>
    <script type=\"text/javascript\">
        \$(function () {
            \$('.jcarousel').jcarousel({
                wrap: 'circular'
            });

            \$('.jcarousel-control-prev')
            .on('jcarouselcontrol:active', function() {
                \$(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                \$(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '-=1'
            });

        \$('.jcarousel-control-next')
            .on('jcarouselcontrol:active', function() {
                \$(this).removeClass('inactive');
            })
            .on('jcarouselcontrol:inactive', function() {
                \$(this).addClass('inactive');
            })
            .jcarouselControl({
                target: '+=1'
            });

        });
    </script>
{% endblock %}
", "default/index.html.twig", "/var/www/zabava/app/Resources/views/default/index.html.twig");
    }
}
