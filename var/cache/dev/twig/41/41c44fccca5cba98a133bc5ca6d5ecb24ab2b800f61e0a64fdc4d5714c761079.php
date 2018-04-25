<?php

/* dogsphotos/index.html.twig */
class __TwigTemplate_e33d398f92854437c58279b374b96c40f1fdce27b4851c3d783efab1a95b7aaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "dogsphotos/index.html.twig", 1);
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
        $__internal_4dce4f7558598bab97f8f34f340d9f7d8fa1fa5869cc8f25e4fbba190606f582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dce4f7558598bab97f8f34f340d9f7d8fa1fa5869cc8f25e4fbba190606f582->enter($__internal_4dce4f7558598bab97f8f34f340d9f7d8fa1fa5869cc8f25e4fbba190606f582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dogsphotos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dce4f7558598bab97f8f34f340d9f7d8fa1fa5869cc8f25e4fbba190606f582->leave($__internal_4dce4f7558598bab97f8f34f340d9f7d8fa1fa5869cc8f25e4fbba190606f582_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_630f64b1d154cea0542cf07ae18c5b6f08d39ccb6b305ffea9a109392f8a04c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_630f64b1d154cea0542cf07ae18c5b6f08d39ccb6b305ffea9a109392f8a04c6->enter($__internal_630f64b1d154cea0542cf07ae18c5b6f08d39ccb6b305ffea9a109392f8a04c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_630f64b1d154cea0542cf07ae18c5b6f08d39ccb6b305ffea9a109392f8a04c6->leave($__internal_630f64b1d154cea0542cf07ae18c5b6f08d39ccb6b305ffea9a109392f8a04c6_prof);

    }

    public function getTemplateName()
    {
        return "dogsphotos/index.html.twig";
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
", "dogsphotos/index.html.twig", "/var/www/zabava/app/Resources/views/dogsphotos/index.html.twig");
    }
}
