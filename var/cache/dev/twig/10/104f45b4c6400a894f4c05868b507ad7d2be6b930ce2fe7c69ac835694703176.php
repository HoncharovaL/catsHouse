<?php

/* :titles:show.html.twig */
class __TwigTemplate_dce779bc55f9a315f97f0db696e3fbc155436b6899d1abe96c1f8f37420e2fd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":titles:show.html.twig", 1);
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
        $__internal_8d6a57a80db546827503201da1a5798d1b9c346ad89cf2de22f78b7a9c3e406c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6a57a80db546827503201da1a5798d1b9c346ad89cf2de22f78b7a9c3e406c->enter($__internal_8d6a57a80db546827503201da1a5798d1b9c346ad89cf2de22f78b7a9c3e406c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":titles:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d6a57a80db546827503201da1a5798d1b9c346ad89cf2de22f78b7a9c3e406c->leave($__internal_8d6a57a80db546827503201da1a5798d1b9c346ad89cf2de22f78b7a9c3e406c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7167b8b22bd4479f60814791b5b80c81f8e740ba9079fea242914c3cdaf62a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7167b8b22bd4479f60814791b5b80c81f8e740ba9079fea242914c3cdaf62a6b->enter($__internal_7167b8b22bd4479f60814791b5b80c81f8e740ba9079fea242914c3cdaf62a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("titles.list.title"), "html", null, true);
        echo "</h1>

    <table>
        <tbody>
            <tr>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("titles.list.title"), "html", null, true);
        echo "</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 10, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>On English</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 14, $this->getSourceContext()); })()), "titleEng", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("titles_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.back"), "html", null, true);
        echo "</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("titles_edit", array("idTitles" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 24, $this->getSourceContext()); })()), "idTitles", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.edit"), "html", null, true);
        echo "</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 27, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.delete"), "html", null, true);
        echo ">
            ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 29, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7167b8b22bd4479f60814791b5b80c81f8e740ba9079fea242914c3cdaf62a6b->leave($__internal_7167b8b22bd4479f60814791b5b80c81f8e740ba9079fea242914c3cdaf62a6b_prof);

    }

    public function getTemplateName()
    {
        return ":titles:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 29,  90 => 28,  86 => 27,  78 => 24,  70 => 21,  60 => 14,  53 => 10,  49 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>{{'titles.list.title'|trans}}</h1>

    <table>
        <tbody>
            <tr>
                <th>{{'titles.list.title'|trans}}</th>
                <td>{{ title.title }}</td>
            </tr>
            <tr>
                <th>On English</th>
                <td>{{ title.titleEng }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('titles_index') }}\">{{'total.back'|trans}}</a>
        </li>
        <li>
            <a href=\"{{ path('titles_edit', { 'idTitles': title.idTitles }) }}\">{{'total.edit'|trans}}</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value={{'total.delete'|trans}}>
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":titles:show.html.twig", "/var/www/zabava/app/Resources/views/titles/show.html.twig");
    }
}
