<?php

/* :dogtitles:index.html.twig */
class __TwigTemplate_814682109d01574a798584f5abaa234639eda507382e4788e01d31a7a2bdb20c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":dogtitles:index.html.twig", 1);
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
        $__internal_b635057f8218639e1ce53d8f3eca534bbd47e065feeafab43c901dd844866336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b635057f8218639e1ce53d8f3eca534bbd47e065feeafab43c901dd844866336->enter($__internal_b635057f8218639e1ce53d8f3eca534bbd47e065feeafab43c901dd844866336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dogtitles:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b635057f8218639e1ce53d8f3eca534bbd47e065feeafab43c901dd844866336->leave($__internal_b635057f8218639e1ce53d8f3eca534bbd47e065feeafab43c901dd844866336_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_25733477b5dbcea7ebeb9875da42fdbbd471eabf247fc9424f359abf3a50fccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25733477b5dbcea7ebeb9875da42fdbbd471eabf247fc9424f359abf3a50fccc->enter($__internal_25733477b5dbcea7ebeb9875da42fdbbd471eabf247fc9424f359abf3a50fccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Dogtitles list</h1>

    <table>
        <thead>
            <tr>
                <th>Description</th>
                <th>Iddogtit</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dogTitles"]) || array_key_exists("dogTitles", $context) ? $context["dogTitles"] : (function () { throw new Twig_Error_Runtime('Variable "dogTitles" does not exist.', 15, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dogTitle"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogtitles_show", array("idDogTit" => twig_get_attribute($this->env, $this->getSourceContext(), $context["dogTitle"], "idDogTit", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dogTitle"], "description", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["dogTitle"], "idDogTit", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogtitles_show", array("idDogTit" => twig_get_attribute($this->env, $this->getSourceContext(), $context["dogTitle"], "idDogTit", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogtitles_edit", array("idDogTit" => twig_get_attribute($this->env, $this->getSourceContext(), $context["dogTitle"], "idDogTit", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dogTitle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogtitles_new");
        echo "\">Create a new dogTitle</a>
        </li>
    </ul>
";
        
        $__internal_25733477b5dbcea7ebeb9875da42fdbbd471eabf247fc9424f359abf3a50fccc->leave($__internal_25733477b5dbcea7ebeb9875da42fdbbd471eabf247fc9424f359abf3a50fccc_prof);

    }

    public function getTemplateName()
    {
        return ":dogtitles:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Dogtitles list</h1>

    <table>
        <thead>
            <tr>
                <th>Description</th>
                <th>Iddogtit</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for dogTitle in dogTitles %}
            <tr>
                <td><a href=\"{{ path('dogtitles_show', { 'idDogTit': dogTitle.idDogTit }) }}\">{{ dogTitle.description }}</a></td>
                <td>{{ dogTitle.idDogTit }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('dogtitles_show', { 'idDogTit': dogTitle.idDogTit }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('dogtitles_edit', { 'idDogTit': dogTitle.idDogTit }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('dogtitles_new') }}\">Create a new dogTitle</a>
        </li>
    </ul>
{% endblock %}
", ":dogtitles:index.html.twig", "/var/www/zabava/app/Resources/views/dogtitles/index.html.twig");
    }
}
