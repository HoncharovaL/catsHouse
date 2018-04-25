<?php

/* :dogsphotos:show.html.twig */
class __TwigTemplate_057491067629fc675fff2671cfa45dfa22664a48327c24dcd52d2deb79616abb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":dogsphotos:show.html.twig", 1);
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
        $__internal_c196ff3e1cb40e5a5e2e43f842a9b2bdff28624e5071a45f5570bc800bb519ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c196ff3e1cb40e5a5e2e43f842a9b2bdff28624e5071a45f5570bc800bb519ce->enter($__internal_c196ff3e1cb40e5a5e2e43f842a9b2bdff28624e5071a45f5570bc800bb519ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dogsphotos:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c196ff3e1cb40e5a5e2e43f842a9b2bdff28624e5071a45f5570bc800bb519ce->leave($__internal_c196ff3e1cb40e5a5e2e43f842a9b2bdff28624e5071a45f5570bc800bb519ce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a36bb305f815105ca7638983f54e3a0df16d769ba44f607e3e836a41e81a596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a36bb305f815105ca7638983f54e3a0df16d769ba44f607e3e836a41e81a596->enter($__internal_8a36bb305f815105ca7638983f54e3a0df16d769ba44f607e3e836a41e81a596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Dogsphoto</h1>

    <table>
        <tbody>
            <tr>
                <th>Updatedat</th>
                <td>";
        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dogsPhoto"]) || array_key_exists("dogsPhoto", $context) ? $context["dogsPhoto"] : (function () { throw new Twig_Error_Runtime('Variable "dogsPhoto" does not exist.', 10, $this->getSourceContext()); })()), "updatedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dogsPhoto"]) || array_key_exists("dogsPhoto", $context) ? $context["dogsPhoto"] : (function () { throw new Twig_Error_Runtime('Variable "dogsPhoto" does not exist.', 10, $this->getSourceContext()); })()), "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dogsPhoto"]) || array_key_exists("dogsPhoto", $context) ? $context["dogsPhoto"] : (function () { throw new Twig_Error_Runtime('Variable "dogsPhoto" does not exist.', 14, $this->getSourceContext()); })()), "photo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Iddogph</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dogsPhoto"]) || array_key_exists("dogsPhoto", $context) ? $context["dogsPhoto"] : (function () { throw new Twig_Error_Runtime('Variable "dogsPhoto" does not exist.', 18, $this->getSourceContext()); })()), "idDogPh", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogsphotos_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogsphotos_edit", array("idDogPh" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dogsPhoto"]) || array_key_exists("dogsPhoto", $context) ? $context["dogsPhoto"] : (function () { throw new Twig_Error_Runtime('Variable "dogsPhoto" does not exist.', 28, $this->getSourceContext()); })()), "idDogPh", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 31, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 33, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8a36bb305f815105ca7638983f54e3a0df16d769ba44f607e3e836a41e81a596->leave($__internal_8a36bb305f815105ca7638983f54e3a0df16d769ba44f607e3e836a41e81a596_prof);

    }

    public function getTemplateName()
    {
        return ":dogsphotos:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  86 => 31,  80 => 28,  74 => 25,  64 => 18,  57 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Dogsphoto</h1>

    <table>
        <tbody>
            <tr>
                <th>Updatedat</th>
                <td>{% if dogsPhoto.updatedAt %}{{ dogsPhoto.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>{{ dogsPhoto.photo }}</td>
            </tr>
            <tr>
                <th>Iddogph</th>
                <td>{{ dogsPhoto.idDogPh }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('dogsphotos_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('dogsphotos_edit', { 'idDogPh': dogsPhoto.idDogPh }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":dogsphotos:show.html.twig", "/var/www/zabava/app/Resources/views/dogsphotos/show.html.twig");
    }
}
