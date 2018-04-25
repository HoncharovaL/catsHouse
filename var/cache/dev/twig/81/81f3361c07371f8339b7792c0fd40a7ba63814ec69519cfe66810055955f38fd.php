<?php

/* :vaccinations:show.html.twig */
class __TwigTemplate_ce8b40cff412b0b3692b57d7cf35fdcc32246e26b146dfa85eb8a05deda0781c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":vaccinations:show.html.twig", 1);
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
        $__internal_08fb25882481eed260672fdec7fd276257613e714b091000fb9f36fb4d7daa19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08fb25882481eed260672fdec7fd276257613e714b091000fb9f36fb4d7daa19->enter($__internal_08fb25882481eed260672fdec7fd276257613e714b091000fb9f36fb4d7daa19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":vaccinations:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08fb25882481eed260672fdec7fd276257613e714b091000fb9f36fb4d7daa19->leave($__internal_08fb25882481eed260672fdec7fd276257613e714b091000fb9f36fb4d7daa19_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ae974198b767f98764e93087381746bf5facd2cbbe5ee39123da03d931d8649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae974198b767f98764e93087381746bf5facd2cbbe5ee39123da03d931d8649->enter($__internal_0ae974198b767f98764e93087381746bf5facd2cbbe5ee39123da03d931d8649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("vaccinations.list.vaccinations"), "html", null, true);
        echo "</h1>

    <table>
        <tbody>
            <tr>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("vaccinations.list.vaccinations"), "html", null, true);
        echo "</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["vaccination"]) || array_key_exists("vaccination", $context) ? $context["vaccination"] : (function () { throw new Twig_Error_Runtime('Variable "vaccination" does not exist.', 10, $this->getSourceContext()); })()), "vaccinations", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>On English</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["vaccination"]) || array_key_exists("vaccination", $context) ? $context["vaccination"] : (function () { throw new Twig_Error_Runtime('Variable "vaccination" does not exist.', 14, $this->getSourceContext()); })()), "vaccinationsEng", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vaccinations_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.back"), "html", null, true);
        echo "</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vaccinations_edit", array("idVaccinations" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["vaccination"]) || array_key_exists("vaccination", $context) ? $context["vaccination"] : (function () { throw new Twig_Error_Runtime('Variable "vaccination" does not exist.', 24, $this->getSourceContext()); })()), "idVaccinations", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.edit"), "html", null, true);
        echo "</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 27, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 29, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0ae974198b767f98764e93087381746bf5facd2cbbe5ee39123da03d931d8649->leave($__internal_0ae974198b767f98764e93087381746bf5facd2cbbe5ee39123da03d931d8649_prof);

    }

    public function getTemplateName()
    {
        return ":vaccinations:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  86 => 27,  78 => 24,  70 => 21,  60 => 14,  53 => 10,  49 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>{{'vaccinations.list.vaccinations'|trans}}</h1>

    <table>
        <tbody>
            <tr>
                <th>{{'vaccinations.list.vaccinations'|trans}}</th>
                <td>{{ vaccination.vaccinations }}</td>
            </tr>
            <tr>
                <th>On English</th>
                <td>{{ vaccination.vaccinationsEng }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('vaccinations_index') }}\">{{'total.back'|trans}}</a>
        </li>
        <li>
            <a href=\"{{ path('vaccinations_edit', { 'idVaccinations': vaccination.idVaccinations }) }}\">{{'total.edit'|trans}}</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":vaccinations:show.html.twig", "/var/www/zabava/app/Resources/views/vaccinations/show.html.twig");
    }
}
