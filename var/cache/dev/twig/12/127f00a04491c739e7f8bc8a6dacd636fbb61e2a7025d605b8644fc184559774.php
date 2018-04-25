<?php

/* :services:show.html.twig */
class __TwigTemplate_1d1188e02e1259aa74d7ea0e407752d040dbb13eaaf49624c10e93bfa8bb3cc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":services:show.html.twig", 1);
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
        $__internal_7ed16fba82f5135649fd2a2b8efb15e07828c31cb659eeb0e84add6ab6d6debd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed16fba82f5135649fd2a2b8efb15e07828c31cb659eeb0e84add6ab6d6debd->enter($__internal_7ed16fba82f5135649fd2a2b8efb15e07828c31cb659eeb0e84add6ab6d6debd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":services:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ed16fba82f5135649fd2a2b8efb15e07828c31cb659eeb0e84add6ab6d6debd->leave($__internal_7ed16fba82f5135649fd2a2b8efb15e07828c31cb659eeb0e84add6ab6d6debd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b986e35a3c3852455360729d11e78a02c24399d08dcd39bee5d3b1d0f8077d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b986e35a3c3852455360729d11e78a02c24399d08dcd39bee5d3b1d0f8077d75->enter($__internal_b986e35a3c3852455360729d11e78a02c24399d08dcd39bee5d3b1d0f8077d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("services.list.services"), "html", null, true);
        echo "</h1>

    <table>
        <tbody>
            <tr>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("services.list.services"), "html", null, true);
        echo "</th>
                    ";
        // line 10
        if (((isset($context["loc"]) || array_key_exists("loc", $context) ? $context["loc"] : (function () { throw new Twig_Error_Runtime('Variable "loc" does not exist.', 10, $this->getSourceContext()); })()) != "en")) {
            // line 11
            echo "                    <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new Twig_Error_Runtime('Variable "service" does not exist.', 11, $this->getSourceContext()); })()), "services", array()), "html", null, true);
            echo "</td>
                ";
        } else {
            // line 13
            echo "                    <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new Twig_Error_Runtime('Variable "service" does not exist.', 13, $this->getSourceContext()); })()), "servicesEng", array()), "html", null, true);
            echo "</td>
                ";
        }
        // line 15
        echo "            </tr>
            <tr>
                <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("services.list.description"), "html", null, true);
        echo "</th>
                    ";
        // line 18
        if (((isset($context["loc"]) || array_key_exists("loc", $context) ? $context["loc"] : (function () { throw new Twig_Error_Runtime('Variable "loc" does not exist.', 18, $this->getSourceContext()); })()) != "en")) {
            // line 19
            echo "                    <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new Twig_Error_Runtime('Variable "service" does not exist.', 19, $this->getSourceContext()); })()), "description", array()), "html", null, true);
            echo "</td>
                ";
        } else {
            // line 21
            echo "                    <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new Twig_Error_Runtime('Variable "service" does not exist.', 21, $this->getSourceContext()); })()), "descriptionEn", array()), "html", null, true);
            echo "</td>
                ";
        }
        // line 23
        echo "            </tr>
            <tr>
                <th>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("services.list.price"), "html", null, true);
        echo "</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new Twig_Error_Runtime('Variable "service" does not exist.', 26, $this->getSourceContext()); })()), "price", array()), "html", null, true);
        echo "</td>
            </tr>
        
    </tbody>
</table>

<ul>
    <li>
        <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.back"), "html", null, true);
        echo "</a>
    </li>
</ul>
<h1>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.yourquestion"), "html", null, true);
        echo "</h1>

";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'form_start');
        echo "
";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'widget');
        echo "
<input type=\"submit\" value=";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.save"), "html", null, true);
        echo " />
";
        // line 42
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_b986e35a3c3852455360729d11e78a02c24399d08dcd39bee5d3b1d0f8077d75->leave($__internal_b986e35a3c3852455360729d11e78a02c24399d08dcd39bee5d3b1d0f8077d75_prof);

    }

    public function getTemplateName()
    {
        return ":services:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 42,  129 => 41,  125 => 40,  121 => 39,  116 => 37,  108 => 34,  97 => 26,  93 => 25,  89 => 23,  83 => 21,  77 => 19,  75 => 18,  71 => 17,  67 => 15,  61 => 13,  55 => 11,  53 => 10,  49 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>{{'services.list.services'|trans}}</h1>

    <table>
        <tbody>
            <tr>
                <th>{{'services.list.services'|trans}}</th>
                    {% if loc!='en' %}
                    <td>{{ service.services }}</td>
                {% else %}
                    <td>{{service.servicesEng}}</td>
                {%endif%}
            </tr>
            <tr>
                <th>{{'services.list.description'|trans}}</th>
                    {% if loc!='en' %}
                    <td>{{ service.description }}</td>
                {% else %}
                    <td>{{service.descriptionEn}}</td>
                {%endif%}
            </tr>
            <tr>
                <th>{{'services.list.price'|trans}}</th>
                <td>{{ service.price }}</td>
            </tr>
        
    </tbody>
</table>

<ul>
    <li>
        <a href=\"{{ path('services_index') }}\">{{'total.back'|trans}}</a>
    </li>
</ul>
<h1>{{'total.yourquestion'|trans}}</h1>

{{ form_start(form) }}
{{ form_widget(form) }}
<input type=\"submit\" value={{'total.save'|trans}} />
{{ form_end(form) }}
{% endblock %}
", ":services:show.html.twig", "/var/www/zabava/app/Resources/views/services/show.html.twig");
    }
}
