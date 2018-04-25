<?php

/* :litters:show.html.twig */
class __TwigTemplate_5f71b0fc04db3f8e0703ace7cbabe880990fd779c8f8bdccb9e117d4493f4cbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":litters:show.html.twig", 1);
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
        $__internal_da69d68a4a138ecea45d84006c5addd8cfc74fd72608222f7835a3b6fee867ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da69d68a4a138ecea45d84006c5addd8cfc74fd72608222f7835a3b6fee867ad->enter($__internal_da69d68a4a138ecea45d84006c5addd8cfc74fd72608222f7835a3b6fee867ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":litters:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da69d68a4a138ecea45d84006c5addd8cfc74fd72608222f7835a3b6fee867ad->leave($__internal_da69d68a4a138ecea45d84006c5addd8cfc74fd72608222f7835a3b6fee867ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_13a631e21364b0440573e73309040d9cb0bc73cf71e78d9ce5abe1531096cf15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a631e21364b0440573e73309040d9cb0bc73cf71e78d9ce5abe1531096cf15->enter($__internal_13a631e21364b0440573e73309040d9cb0bc73cf71e78d9ce5abe1531096cf15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Litter</h1>

    <table>
        <tbody>
            <tr>
                <th>Ldate</th>
                <td>";
        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["litter"]) || array_key_exists("litter", $context) ? $context["litter"] : (function () { throw new Twig_Error_Runtime('Variable "litter" does not exist.', 10, $this->getSourceContext()); })()), "ldate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["litter"]) || array_key_exists("litter", $context) ? $context["litter"] : (function () { throw new Twig_Error_Runtime('Variable "litter" does not exist.', 10, $this->getSourceContext()); })()), "ldate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Mother</th>
                <td><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogs_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["litter"]) || array_key_exists("litter", $context) ? $context["litter"] : (function () { throw new Twig_Error_Runtime('Variable "litter" does not exist.', 14, $this->getSourceContext()); })()), "mother", array()), "idDogs", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["litter"]) || array_key_exists("litter", $context) ? $context["litter"] : (function () { throw new Twig_Error_Runtime('Variable "litter" does not exist.', 14, $this->getSourceContext()); })()), "mother", array()), "name", array()), "html", null, true);
        echo "</a></td>
            </tr>
            <tr>
                <th>Father</th>
                <td><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogs_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["litter"]) || array_key_exists("litter", $context) ? $context["litter"] : (function () { throw new Twig_Error_Runtime('Variable "litter" does not exist.', 18, $this->getSourceContext()); })()), "father", array()), "idDogs", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["litter"]) || array_key_exists("litter", $context) ? $context["litter"] : (function () { throw new Twig_Error_Runtime('Variable "litter" does not exist.', 18, $this->getSourceContext()); })()), "father", array()), "name", array()), "html", null, true);
        echo "</a></td>
            </tr>
        </tbody>
    </table>
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["litter"]) || array_key_exists("litter", $context) ? $context["litter"] : (function () { throw new Twig_Error_Runtime('Variable "litter" does not exist.', 22, $this->getSourceContext()); })()), "dogs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 23
            echo "     <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogs_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "idDogs", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "name", array()), "html", null, true);
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    <ul>
        <li>
            <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("litters_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("litters_edit", array("idLitters" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["litter"]) || array_key_exists("litter", $context) ? $context["litter"] : (function () { throw new Twig_Error_Runtime('Variable "litter" does not exist.', 30, $this->getSourceContext()); })()), "idLitters", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 33, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 35
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 35, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_13a631e21364b0440573e73309040d9cb0bc73cf71e78d9ce5abe1531096cf15->leave($__internal_13a631e21364b0440573e73309040d9cb0bc73cf71e78d9ce5abe1531096cf15_prof);

    }

    public function getTemplateName()
    {
        return ":litters:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 35,  106 => 33,  100 => 30,  94 => 27,  90 => 25,  79 => 23,  75 => 22,  66 => 18,  57 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Litter</h1>

    <table>
        <tbody>
            <tr>
                <th>Ldate</th>
                <td>{% if litter.ldate %}{{ litter.ldate|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Mother</th>
                <td><a href=\"{{ path('dogs_show', { 'id': litter.mother.idDogs }) }}\">{{ litter.mother.name }}</a></td>
            </tr>
            <tr>
                <th>Father</th>
                <td><a href=\"{{ path('dogs_show', { 'id': litter.father.idDogs }) }}\">{{ litter.father.name }}</a></td>
            </tr>
        </tbody>
    </table>
{% for child in litter.dogs %}
     <a href=\"{{ path('dogs_show', { 'id': child.idDogs }) }}\">{{ child.name }}</a>
{% endfor %}
    <ul>
        <li>
            <a href=\"{{ path('litters_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('litters_edit', { 'idLitters': litter.idLitters }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":litters:show.html.twig", "/var/www/zabava/app/Resources/views/litters/show.html.twig");
    }
}
