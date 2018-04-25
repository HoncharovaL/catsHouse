<?php

/* :news:edit.html.twig */
class __TwigTemplate_659fedf8801805df55ab8e2467cbb9bc8239a3babda88744bc0aff319c6e28f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":news:edit.html.twig", 1);
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
        $__internal_10bc13b4698237b9dc762661756d582f93912f78c84a268f03431b6768555079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10bc13b4698237b9dc762661756d582f93912f78c84a268f03431b6768555079->enter($__internal_10bc13b4698237b9dc762661756d582f93912f78c84a268f03431b6768555079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":news:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10bc13b4698237b9dc762661756d582f93912f78c84a268f03431b6768555079->leave($__internal_10bc13b4698237b9dc762661756d582f93912f78c84a268f03431b6768555079_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e493f47a2348b8175f783df38d24a1212460bf3016a25b092a02bbbdbdb61dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e493f47a2348b8175f783df38d24a1212460bf3016a25b092a02bbbdbdb61dbd->enter($__internal_e493f47a2348b8175f783df38d24a1212460bf3016a25b092a02bbbdbdb61dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    <h1>News edit</h1>

    ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 8, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), 'widget');
        echo "
    <input type=\"submit\" value=\"Edit\" />
    ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 11, $this->getSourceContext()); })()), 'form_end');
        echo "


    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) || array_key_exists("photos", $context) ? $context["photos"] : (function () { throw new Twig_Error_Runtime('Variable "photos" does not exist.', 14, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 15
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["photo_path"]) || array_key_exists("photo_path", $context) ? $context["photo_path"] : (function () { throw new Twig_Error_Runtime('Variable "photo_path" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["photo"], "photo", array()), "html", null, true);
            echo "\" 
             style=\"width:304px;height:228px;\">
        <ul>
            ";
            // line 19
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_route_name", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["photo"], "idDogPh", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.delete"), "html", null, true);
            echo "</a>
            ";
            // line 21
            echo "        </ul>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
    <ul>
        <li>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("news_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 29, $this->getSourceContext()); })()), 'form_start');
        echo "
            <input type=\"submit\" value=\"Delete\">
            ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 31, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>

";
        
        $__internal_e493f47a2348b8175f783df38d24a1212460bf3016a25b092a02bbbdbdb61dbd->leave($__internal_e493f47a2348b8175f783df38d24a1212460bf3016a25b092a02bbbdbdb61dbd_prof);

    }

    public function getTemplateName()
    {
        return ":news:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 31,  98 => 29,  92 => 26,  87 => 23,  80 => 21,  73 => 19,  65 => 15,  61 => 14,  55 => 11,  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}


    <h1>News edit</h1>

    {{ form_start(edit_form) }}
    {{ form_widget(edit_form) }}
    <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}


    {% for photo in photos %}
        <img src=\"{{photo_path}}{{photo.photo}}\" 
             style=\"width:304px;height:228px;\">
        <ul>
            {#  {% if is_granted('IS_AUTHENTICATED_FULLY') %}#}
            <a href=\"{{ path('delete_route_name', {'id': photo.idDogPh }) }}\">{{'total.delete'|trans}}</a>
            {# {% endif %}#}
        </ul>
    {% endfor %}

    <ul>
        <li>
            <a href=\"{{ path('news_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
            <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>

{% endblock %}
", ":news:edit.html.twig", "/var/www/zabava/app/Resources/views/news/edit.html.twig");
    }
}
