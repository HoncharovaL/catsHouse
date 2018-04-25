<?php

/* :dogtitles:show.html.twig */
class __TwigTemplate_68dcbf113da06d41929536260e4d0cb084798a534ba39e327489af77ffc1ac1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":dogtitles:show.html.twig", 1);
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
        $__internal_d95b076015181b4f4c70fa6fc0c1c508edcb55eb3e10a4f8ad7cc1a7159d9112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95b076015181b4f4c70fa6fc0c1c508edcb55eb3e10a4f8ad7cc1a7159d9112->enter($__internal_d95b076015181b4f4c70fa6fc0c1c508edcb55eb3e10a4f8ad7cc1a7159d9112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dogtitles:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d95b076015181b4f4c70fa6fc0c1c508edcb55eb3e10a4f8ad7cc1a7159d9112->leave($__internal_d95b076015181b4f4c70fa6fc0c1c508edcb55eb3e10a4f8ad7cc1a7159d9112_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a4e8bd63be6db5ed85e9f320ab19195264ebd93cff82bdcb661b763e3ae23cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a4e8bd63be6db5ed85e9f320ab19195264ebd93cff82bdcb661b763e3ae23cd->enter($__internal_2a4e8bd63be6db5ed85e9f320ab19195264ebd93cff82bdcb661b763e3ae23cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Dogtitle</h1>

    <table>
        <tbody>
            <tr>
                <th>Description</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dogTitle"]) || array_key_exists("dogTitle", $context) ? $context["dogTitle"] : (function () { throw new Twig_Error_Runtime('Variable "dogTitle" does not exist.', 10, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Iddogtit</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dogTitle"]) || array_key_exists("dogTitle", $context) ? $context["dogTitle"] : (function () { throw new Twig_Error_Runtime('Variable "dogTitle" does not exist.', 14, $this->getSourceContext()); })()), "idDogTit", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogtitles_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogtitles_edit", array("idDogTit" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dogTitle"]) || array_key_exists("dogTitle", $context) ? $context["dogTitle"] : (function () { throw new Twig_Error_Runtime('Variable "dogTitle" does not exist.', 24, $this->getSourceContext()); })()), "idDogTit", array()))), "html", null, true);
        echo "\">Edit</a>
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
        
        $__internal_2a4e8bd63be6db5ed85e9f320ab19195264ebd93cff82bdcb661b763e3ae23cd->leave($__internal_2a4e8bd63be6db5ed85e9f320ab19195264ebd93cff82bdcb661b763e3ae23cd_prof);

    }

    public function getTemplateName()
    {
        return ":dogtitles:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Dogtitle</h1>

    <table>
        <tbody>
            <tr>
                <th>Description</th>
                <td>{{ dogTitle.description }}</td>
            </tr>
            <tr>
                <th>Iddogtit</th>
                <td>{{ dogTitle.idDogTit }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('dogtitles_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('dogtitles_edit', { 'idDogTit': dogTitle.idDogTit }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":dogtitles:show.html.twig", "/var/www/zabava/app/Resources/views/dogtitles/show.html.twig");
    }
}
