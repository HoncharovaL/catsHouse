<?php

/* :videos:show.html.twig */
class __TwigTemplate_12a811b5bfdaaa1c6996eaf4e9fde2725be4e69ff4ac9e3f2765cd661575d98d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":videos:show.html.twig", 1);
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
        $__internal_d501faa5d23b43c4521d2ed7cb4b77fad3129465e76444f45c296017e219ee54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d501faa5d23b43c4521d2ed7cb4b77fad3129465e76444f45c296017e219ee54->enter($__internal_d501faa5d23b43c4521d2ed7cb4b77fad3129465e76444f45c296017e219ee54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":videos:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d501faa5d23b43c4521d2ed7cb4b77fad3129465e76444f45c296017e219ee54->leave($__internal_d501faa5d23b43c4521d2ed7cb4b77fad3129465e76444f45c296017e219ee54_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbb400facae264805092784b25ce3aa9e74b95cd023ae146e2241bd3e29e2ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb400facae264805092784b25ce3aa9e74b95cd023ae146e2241bd3e29e2ef3->enter($__internal_dbb400facae264805092784b25ce3aa9e74b95cd023ae146e2241bd3e29e2ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Video</h1>

    <table>
        <tbody>
            <tr>
                <th>Video</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new Twig_Error_Runtime('Variable "video" does not exist.', 10, $this->getSourceContext()); })()), "video", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idvideo</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new Twig_Error_Runtime('Variable "video" does not exist.', 14, $this->getSourceContext()); })()), "idVideo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Iddogs</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new Twig_Error_Runtime('Variable "video" does not exist.', 18, $this->getSourceContext()); })()), "idDogs", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idnews</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new Twig_Error_Runtime('Variable "video" does not exist.', 22, $this->getSourceContext()); })()), "idNews", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("videos_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("videos_edit", array("idVideo" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new Twig_Error_Runtime('Variable "video" does not exist.', 32, $this->getSourceContext()); })()), "idVideo", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 35, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 37, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_dbb400facae264805092784b25ce3aa9e74b95cd023ae146e2241bd3e29e2ef3->leave($__internal_dbb400facae264805092784b25ce3aa9e74b95cd023ae146e2241bd3e29e2ef3_prof);

    }

    public function getTemplateName()
    {
        return ":videos:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  91 => 35,  85 => 32,  79 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Video</h1>

    <table>
        <tbody>
            <tr>
                <th>Video</th>
                <td>{{ video.video }}</td>
            </tr>
            <tr>
                <th>Idvideo</th>
                <td>{{ video.idVideo }}</td>
            </tr>
            <tr>
                <th>Iddogs</th>
                <td>{{ video.idDogs }}</td>
            </tr>
            <tr>
                <th>Idnews</th>
                <td>{{ video.idNews }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('videos_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('videos_edit', { 'idVideo': video.idVideo }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":videos:show.html.twig", "/var/www/zabava/app/Resources/views/videos/show.html.twig");
    }
}
