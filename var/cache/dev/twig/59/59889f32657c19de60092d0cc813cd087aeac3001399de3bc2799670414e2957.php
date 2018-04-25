<?php

/* :dogsphotos:index.html.twig */
class __TwigTemplate_567e163161a875409b8e4776ec9bc08b4d3f437b19d36392f5c5e45708000100 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":dogsphotos:index.html.twig", 1);
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
        $__internal_8458005077516e885b9e3c0049afbf400c5e3de20b4d7bf916e249d1f0c388fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8458005077516e885b9e3c0049afbf400c5e3de20b4d7bf916e249d1f0c388fc->enter($__internal_8458005077516e885b9e3c0049afbf400c5e3de20b4d7bf916e249d1f0c388fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dogsphotos:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8458005077516e885b9e3c0049afbf400c5e3de20b4d7bf916e249d1f0c388fc->leave($__internal_8458005077516e885b9e3c0049afbf400c5e3de20b4d7bf916e249d1f0c388fc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_98bfb9d8c887bbb08cfef55d37e7b8f9ab663be308dc4b786b690540fbb0820b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98bfb9d8c887bbb08cfef55d37e7b8f9ab663be308dc4b786b690540fbb0820b->enter($__internal_98bfb9d8c887bbb08cfef55d37e7b8f9ab663be308dc4b786b690540fbb0820b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class='container'>
        <div class='photos'>
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dogsPhotos"]) || array_key_exists("dogsPhotos", $context) ? $context["dogsPhotos"] : (function () { throw new Twig_Error_Runtime('Variable "dogsPhotos" does not exist.', 6, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 7
            echo "                <div class='photo-item'><a class='colorbox group1' href='";
            echo twig_escape_filter($this->env, (isset($context["photo_path"]) || array_key_exists("photo_path", $context) ? $context["photo_path"] : (function () { throw new Twig_Error_Runtime('Variable "photo_path" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["photo"], "photo", array()), "html", null, true);
            echo "'><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["photo_path"]) || array_key_exists("photo_path", $context) ? $context["photo_path"] : (function () { throw new Twig_Error_Runtime('Variable "photo_path" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["photo"], "photo", array()), "html", null, true);
            echo "\"/></a></div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </div>
        <div class='videos'>
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new Twig_Error_Runtime('Variable "videos" does not exist.', 11, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 12
            echo "                <div class='video-item'>";
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["video"], "video", array());
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </div>
    </div>
";
        
        $__internal_98bfb9d8c887bbb08cfef55d37e7b8f9ab663be308dc4b786b690540fbb0820b->leave($__internal_98bfb9d8c887bbb08cfef55d37e7b8f9ab663be308dc4b786b690540fbb0820b_prof);

    }

    public function getTemplateName()
    {
        return ":dogsphotos:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 14,  69 => 12,  65 => 11,  61 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class='container'>
        <div class='photos'>
            {% for photo in dogsPhotos %}
                <div class='photo-item'><a class='colorbox group1' href='{{photo_path}}{{photo.photo}}'><img src=\"{{photo_path}}{{photo.photo}}\"/></a></div>
                    {% endfor %}
        </div>
        <div class='videos'>
            {% for video in videos %}
                <div class='video-item'>{{video.video|raw}}</div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", ":dogsphotos:index.html.twig", "/var/www/zabava/app/Resources/views/dogsphotos/index.html.twig");
    }
}
