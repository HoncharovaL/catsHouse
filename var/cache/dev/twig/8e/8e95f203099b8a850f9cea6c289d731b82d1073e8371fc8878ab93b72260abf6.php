<?php

/* :comments:show.html.twig */
class __TwigTemplate_3bc5786b178253b30a8c1b042ccecb0262d9499b9116c53cde5be7f5d8bfcf62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comments:show.html.twig", 1);
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
        $__internal_f27810d9f1f9eeb955612e8b2a14828a48e0bfaf58b409a63467e14b5e104887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27810d9f1f9eeb955612e8b2a14828a48e0bfaf58b409a63467e14b5e104887->enter($__internal_f27810d9f1f9eeb955612e8b2a14828a48e0bfaf58b409a63467e14b5e104887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comments:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f27810d9f1f9eeb955612e8b2a14828a48e0bfaf58b409a63467e14b5e104887->leave($__internal_f27810d9f1f9eeb955612e8b2a14828a48e0bfaf58b409a63467e14b5e104887_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_50f91f2677a18bd0ef5fd7e071b597cc418f13239c64d58fa283abbe50baa5cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f91f2677a18bd0ef5fd7e071b597cc418f13239c64d58fa283abbe50baa5cd->enter($__internal_50f91f2677a18bd0ef5fd7e071b597cc418f13239c64d58fa283abbe50baa5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comment</h1>

    <table>
        <tbody>
            <tr>
                <th>Klname</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 10, $this->getSourceContext()); })()), "klname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 14, $this->getSourceContext()); })()), "phone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 18, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Question</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 22, $this->getSourceContext()); })()), "question", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idcomments</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 26, $this->getSourceContext()); })()), "idComments", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comments_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comments_edit", array("idComments" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 36, $this->getSourceContext()); })()), "idComments", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 39, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 41, $this->getSourceContext()); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_50f91f2677a18bd0ef5fd7e071b597cc418f13239c64d58fa283abbe50baa5cd->leave($__internal_50f91f2677a18bd0ef5fd7e071b597cc418f13239c64d58fa283abbe50baa5cd_prof);

    }

    public function getTemplateName()
    {
        return ":comments:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 41,  98 => 39,  92 => 36,  86 => 33,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Comment</h1>

    <table>
        <tbody>
            <tr>
                <th>Klname</th>
                <td>{{ comment.klname }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ comment.phone }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ comment.email }}</td>
            </tr>
            <tr>
                <th>Question</th>
                <td>{{ comment.question }}</td>
            </tr>
            <tr>
                <th>Idcomments</th>
                <td>{{ comment.idComments }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('comments_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('comments_edit', { 'idComments': comment.idComments }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":comments:show.html.twig", "/var/www/zabava/app/Resources/views/comments/show.html.twig");
    }
}
