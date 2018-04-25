<?php

/* :dogvaccinations:show.html.twig */
class __TwigTemplate_ad91eeab838341d36c22293247b6256a2cc2aea94908fcc52f0b329b03944611 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":dogvaccinations:show.html.twig", 1);
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
        $__internal_084292ac1b9d4b37dc3b8a2921c8214aaa9eb27898418be153ad99e62890adb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_084292ac1b9d4b37dc3b8a2921c8214aaa9eb27898418be153ad99e62890adb6->enter($__internal_084292ac1b9d4b37dc3b8a2921c8214aaa9eb27898418be153ad99e62890adb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dogvaccinations:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_084292ac1b9d4b37dc3b8a2921c8214aaa9eb27898418be153ad99e62890adb6->leave($__internal_084292ac1b9d4b37dc3b8a2921c8214aaa9eb27898418be153ad99e62890adb6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7326ae1123e2f55ea16b0255c649a1ae08f94947f1b74e1aa9f249d6913acd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7326ae1123e2f55ea16b0255c649a1ae08f94947f1b74e1aa9f249d6913acd8->enter($__internal_b7326ae1123e2f55ea16b0255c649a1ae08f94947f1b74e1aa9f249d6913acd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Dogvaccination</h1>

    <table>
        <tbody>
            <tr>
                <th>Iddogvac</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dogVaccination"]) || array_key_exists("dogVaccination", $context) ? $context["dogVaccination"] : (function () { throw new Twig_Error_Runtime('Variable "dogVaccination" does not exist.', 10, $this->getSourceContext()); })()), "idDogVac", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogvaccinations_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogvaccinations_edit", array("idDogVac" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dogVaccination"]) || array_key_exists("dogVaccination", $context) ? $context["dogVaccination"] : (function () { throw new Twig_Error_Runtime('Variable "dogVaccination" does not exist.', 20, $this->getSourceContext()); })()), "idDogVac", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 23, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 25
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 25, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b7326ae1123e2f55ea16b0255c649a1ae08f94947f1b74e1aa9f249d6913acd8->leave($__internal_b7326ae1123e2f55ea16b0255c649a1ae08f94947f1b74e1aa9f249d6913acd8_prof);

    }

    public function getTemplateName()
    {
        return ":dogvaccinations:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  70 => 23,  64 => 20,  58 => 17,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Dogvaccination</h1>

    <table>
        <tbody>
            <tr>
                <th>Iddogvac</th>
                <td>{{ dogVaccination.idDogVac }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('dogvaccinations_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('dogvaccinations_edit', { 'idDogVac': dogVaccination.idDogVac }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":dogvaccinations:show.html.twig", "/var/www/zabava/app/Resources/views/dogvaccinations/show.html.twig");
    }
}
