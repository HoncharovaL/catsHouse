<?php

/* :videos:index.html.twig */
class __TwigTemplate_1b82dc99d4fbf6bb9748543e5c62702dd640bf2c678930a6735837374347e2e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":videos:index.html.twig", 1);
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
        $__internal_c41e9c258275d34bcc18da5238cc225c19630e4a3d4c033c2035dfc514765e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c41e9c258275d34bcc18da5238cc225c19630e4a3d4c033c2035dfc514765e9e->enter($__internal_c41e9c258275d34bcc18da5238cc225c19630e4a3d4c033c2035dfc514765e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":videos:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c41e9c258275d34bcc18da5238cc225c19630e4a3d4c033c2035dfc514765e9e->leave($__internal_c41e9c258275d34bcc18da5238cc225c19630e4a3d4c033c2035dfc514765e9e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9eee86f53fbace9db4883c02cdc9ea7389ab9ccca24020df069846d92f5088bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eee86f53fbace9db4883c02cdc9ea7389ab9ccca24020df069846d92f5088bb->enter($__internal_9eee86f53fbace9db4883c02cdc9ea7389ab9ccca24020df069846d92f5088bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Videos list</h1>

    <table>
        <thead>
            <tr>
                <th>Video</th>
                <th>Idvideo</th>
                <th>Iddogs</th>
                <th>Idnews</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new Twig_Error_Runtime('Variable "videos" does not exist.', 17, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("videos_show", array("idVideo" => twig_get_attribute($this->env, $this->getSourceContext(), $context["video"], "idVideo", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["video"], "video", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["video"], "idVideo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["video"], "idDogs", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["video"], "idNews", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("videos_show", array("idVideo" => twig_get_attribute($this->env, $this->getSourceContext(), $context["video"], "idVideo", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("videos_edit", array("idVideo" => twig_get_attribute($this->env, $this->getSourceContext(), $context["video"], "idVideo", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("videos_new");
        echo "\">Create a new video</a>
        </li>
    </ul>
";
        
        $__internal_9eee86f53fbace9db4883c02cdc9ea7389ab9ccca24020df069846d92f5088bb->leave($__internal_9eee86f53fbace9db4883c02cdc9ea7389ab9ccca24020df069846d92f5088bb_prof);

    }

    public function getTemplateName()
    {
        return ":videos:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Videos list</h1>

    <table>
        <thead>
            <tr>
                <th>Video</th>
                <th>Idvideo</th>
                <th>Iddogs</th>
                <th>Idnews</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for video in videos %}
            <tr>
                <td><a href=\"{{ path('videos_show', { 'idVideo': video.idVideo }) }}\">{{ video.video }}</a></td>
                <td>{{ video.idVideo }}</td>
                <td>{{ video.idDogs }}</td>
                <td>{{ video.idNews }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('videos_show', { 'idVideo': video.idVideo }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('videos_edit', { 'idVideo': video.idVideo }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('videos_new') }}\">Create a new video</a>
        </li>
    </ul>
{% endblock %}
", ":videos:index.html.twig", "/var/www/zabava/app/Resources/views/videos/index.html.twig");
    }
}
