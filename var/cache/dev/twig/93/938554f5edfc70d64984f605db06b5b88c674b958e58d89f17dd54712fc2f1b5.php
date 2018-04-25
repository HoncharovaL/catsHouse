<?php

/* :dogvaccinations:index.html.twig */
class __TwigTemplate_186a89bc3054e5965a375b954d47910734939a7582e142331456e7e7d3e002a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":dogvaccinations:index.html.twig", 1);
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
        $__internal_e4f73286cbcfe11f4c5ff5485b79aae07ebc6573d6baccc58cb6246ca66622b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f73286cbcfe11f4c5ff5485b79aae07ebc6573d6baccc58cb6246ca66622b1->enter($__internal_e4f73286cbcfe11f4c5ff5485b79aae07ebc6573d6baccc58cb6246ca66622b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dogvaccinations:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4f73286cbcfe11f4c5ff5485b79aae07ebc6573d6baccc58cb6246ca66622b1->leave($__internal_e4f73286cbcfe11f4c5ff5485b79aae07ebc6573d6baccc58cb6246ca66622b1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_465d09e42e4fe3dc9ba15145f8fa8377164e9e14a525edf2ea915206116d19e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465d09e42e4fe3dc9ba15145f8fa8377164e9e14a525edf2ea915206116d19e8->enter($__internal_465d09e42e4fe3dc9ba15145f8fa8377164e9e14a525edf2ea915206116d19e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Dogvaccinations list</h1>

    <table>
        <thead>
            <tr>
                <th>Iddogvac</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dogVaccinations"]) || array_key_exists("dogVaccinations", $context) ? $context["dogVaccinations"] : (function () { throw new Twig_Error_Runtime('Variable "dogVaccinations" does not exist.', 14, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dogVaccination"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogvaccinations_show", array("idDogVac" => twig_get_attribute($this->env, $this->getSourceContext(), $context["dogVaccination"], "idDogVac", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dogVaccination"], "idDogVac", array()), "html", null, true);
            echo "</a></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogvaccinations_show", array("idDogVac" => twig_get_attribute($this->env, $this->getSourceContext(), $context["dogVaccination"], "idDogVac", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogvaccinations_edit", array("idDogVac" => twig_get_attribute($this->env, $this->getSourceContext(), $context["dogVaccination"], "idDogVac", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dogVaccination'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogvaccinations_new");
        echo "\">Create a new dogVaccination</a>
        </li>
    </ul>
";
        
        $__internal_465d09e42e4fe3dc9ba15145f8fa8377164e9e14a525edf2ea915206116d19e8->leave($__internal_465d09e42e4fe3dc9ba15145f8fa8377164e9e14a525edf2ea915206116d19e8_prof);

    }

    public function getTemplateName()
    {
        return ":dogvaccinations:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 34,  86 => 29,  74 => 23,  68 => 20,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Dogvaccinations list</h1>

    <table>
        <thead>
            <tr>
                <th>Iddogvac</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for dogVaccination in dogVaccinations %}
            <tr>
                <td><a href=\"{{ path('dogvaccinations_show', { 'idDogVac': dogVaccination.idDogVac }) }}\">{{ dogVaccination.idDogVac }}</a></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('dogvaccinations_show', { 'idDogVac': dogVaccination.idDogVac }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('dogvaccinations_edit', { 'idDogVac': dogVaccination.idDogVac }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('dogvaccinations_new') }}\">Create a new dogVaccination</a>
        </li>
    </ul>
{% endblock %}
", ":dogvaccinations:index.html.twig", "/var/www/zabava/app/Resources/views/dogvaccinations/index.html.twig");
    }
}
