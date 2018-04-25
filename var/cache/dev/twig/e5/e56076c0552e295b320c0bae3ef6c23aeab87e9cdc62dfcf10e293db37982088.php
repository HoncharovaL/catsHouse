<?php

/* news/show.html.twig */
class __TwigTemplate_1561643edfac84a9df4741e522bbe2795fbd1c60f51fcba4276967fbb0eb6fad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "news/show.html.twig", 1);
        $this->blocks = array(
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
        $__internal_31dc4e17d4d969fd7e810cad80e771674eff75cdbcf2c0aa9b2b0ea81e20403a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31dc4e17d4d969fd7e810cad80e771674eff75cdbcf2c0aa9b2b0ea81e20403a->enter($__internal_31dc4e17d4d969fd7e810cad80e771674eff75cdbcf2c0aa9b2b0ea81e20403a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "news/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31dc4e17d4d969fd7e810cad80e771674eff75cdbcf2c0aa9b2b0ea81e20403a->leave($__internal_31dc4e17d4d969fd7e810cad80e771674eff75cdbcf2c0aa9b2b0ea81e20403a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_42ba520808a4fd96b20d9524a774d475b98aadd49c788c004db7f0a01058b921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ba520808a4fd96b20d9524a774d475b98aadd49c788c004db7f0a01058b921->enter($__internal_42ba520808a4fd96b20d9524a774d475b98aadd49c788c004db7f0a01058b921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class='container'>
        <div class='news-page'>
            ";
        // line 6
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 7
            echo "                <div class='button-container'>
                    <a class=\"orange-button\" href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("news_edit", array("idNews" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new Twig_Error_Runtime('Variable "news" does not exist.', 8, $this->getSourceContext()); })()), "idNews", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.edit"), "html", null, true);
            echo "</a>
                    ";
            // line 9
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 9, $this->getSourceContext()); })()), 'form_start');
            echo "
                    <input class=\"orange-button\" type=\"submit\" value=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.delete"), "html", null, true);
            echo "\">
                    ";
            // line 11
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 11, $this->getSourceContext()); })()), 'form_end');
            echo "
                </div>
            ";
        }
        // line 14
        echo "            <div class=\"image\">
                <a class='colorbox group1' href='";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["photo_path"]) || array_key_exists("photo_path", $context) ? $context["photo_path"] : (function () { throw new Twig_Error_Runtime('Variable "photo_path" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new Twig_Error_Runtime('Variable "news" does not exist.', 15, $this->getSourceContext()); })()), "photo", array()), "html", null, true);
        echo "'><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["photo_path"]) || array_key_exists("photo_path", $context) ? $context["photo_path"] : (function () { throw new Twig_Error_Runtime('Variable "photo_path" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new Twig_Error_Runtime('Variable "news" does not exist.', 15, $this->getSourceContext()); })()), "photo", array()), "html", null, true);
        echo "\"/></a>
            </div>
            <div class=\"text\">
                <div class=\"title\">
                    <a class='decorated-href' href='";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("news_show", array("idNews" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new Twig_Error_Runtime('Variable "news" does not exist.', 19, $this->getSourceContext()); })()), "idNews", array()))), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_translated')->getCallable(), array((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new Twig_Error_Runtime('Variable "news" does not exist.', 19, $this->getSourceContext()); })()), "title")), "html", null, true);
        echo "</a>
                </div>
                <div class=\"description\">
                    ";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_translated')->getCallable(), array((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new Twig_Error_Runtime('Variable "news" does not exist.', 22, $this->getSourceContext()); })()), "newsdesc")), "html", null, true);
        echo "
                </div>
                <div class='photos'>
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new Twig_Error_Runtime('Variable "photos" does not exist.', 25, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 26
            echo "                        <div class='photo-item'><a class='colorbox group1' href='";
            echo twig_escape_filter($this->env, (isset($context["photo_path"]) || array_key_exists("photo_path", $context) ? $context["photo_path"] : (function () { throw new Twig_Error_Runtime('Variable "photo_path" does not exist.', 26, $this->getSourceContext()); })()), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["photo"], "photo", array()), "html", null, true);
            echo "'><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["photo_path"]) || array_key_exists("photo_path", $context) ? $context["photo_path"] : (function () { throw new Twig_Error_Runtime('Variable "photo_path" does not exist.', 26, $this->getSourceContext()); })()), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["photo"], "photo", array()), "html", null, true);
            echo "\"/></a></div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                </div>
                <div class='videos'>
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new Twig_Error_Runtime('Variable "videos" does not exist.', 30, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 31
            echo "                        <div class='video-item'>";
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["video"], "video", array());
            echo "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_42ba520808a4fd96b20d9524a774d475b98aadd49c788c004db7f0a01058b921->leave($__internal_42ba520808a4fd96b20d9524a774d475b98aadd49c788c004db7f0a01058b921_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1c4c3c229b3180bad7c479eec025941b593d45fafa56b2da366cda3370a470e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4c3c229b3180bad7c479eec025941b593d45fafa56b2da366cda3370a470e2->enter($__internal_1c4c3c229b3180bad7c479eec025941b593d45fafa56b2da366cda3370a470e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type='text/javascript'>
        \$('a.colorbox').colorbox({rel: 'group1'});
    </script>
";
        
        $__internal_1c4c3c229b3180bad7c479eec025941b593d45fafa56b2da366cda3370a470e2->leave($__internal_1c4c3c229b3180bad7c479eec025941b593d45fafa56b2da366cda3370a470e2_prof);

    }

    public function getTemplateName()
    {
        return "news/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 39,  143 => 38,  132 => 33,  123 => 31,  119 => 30,  115 => 28,  102 => 26,  98 => 25,  92 => 22,  84 => 19,  73 => 15,  70 => 14,  64 => 11,  60 => 10,  56 => 9,  50 => 8,  47 => 7,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class='container'>
        <div class='news-page'>
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <div class='button-container'>
                    <a class=\"orange-button\" href=\"{{ path('news_edit', { 'idNews': news.idNews }) }}\">{{\"total.edit\"|trans}}</a>
                    {{ form_start(delete_form) }}
                    <input class=\"orange-button\" type=\"submit\" value=\"{{'total.delete'|trans}}\">
                    {{ form_end(delete_form) }}
                </div>
            {% endif %}
            <div class=\"image\">
                <a class='colorbox group1' href='{{photo_path}}{{news.photo}}'><img src=\"{{photo_path}}{{news.photo}}\"/></a>
            </div>
            <div class=\"text\">
                <div class=\"title\">
                    <a class='decorated-href' href='{{path('news_show', {'idNews': news.idNews})}}'>{{ get_translated(news, 'title') }}</a>
                </div>
                <div class=\"description\">
                    {{ get_translated(news, 'newsdesc') }}
                </div>
                <div class='photos'>
                    {% for photo in photos %}
                        <div class='photo-item'><a class='colorbox group1' href='{{photo_path}}{{photo.photo}}'><img src=\"{{photo_path}}{{photo.photo}}\"/></a></div>
                    {% endfor %}
                </div>
                <div class='videos'>
                    {% for video in videos %}
                        <div class='video-item'>{{video.video|raw}}</div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script type='text/javascript'>
        \$('a.colorbox').colorbox({rel: 'group1'});
    </script>
{% endblock %}
", "news/show.html.twig", "/var/www/zabava/app/Resources/views/news/show.html.twig");
    }
}
