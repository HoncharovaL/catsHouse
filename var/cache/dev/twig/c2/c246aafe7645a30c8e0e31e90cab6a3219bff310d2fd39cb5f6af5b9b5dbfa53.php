<?php

/* :nursery:edit.html.twig */
class __TwigTemplate_4462624848c2b5b33cef6d229457f16523ae617b1db7c25597ea718aa218cc33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":nursery:edit.html.twig", 1);
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
        $__internal_fb5c405c02066e544722eb830307894603ec696960a55ac9eb39cc5031f5fdb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb5c405c02066e544722eb830307894603ec696960a55ac9eb39cc5031f5fdb5->enter($__internal_fb5c405c02066e544722eb830307894603ec696960a55ac9eb39cc5031f5fdb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":nursery:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb5c405c02066e544722eb830307894603ec696960a55ac9eb39cc5031f5fdb5->leave($__internal_fb5c405c02066e544722eb830307894603ec696960a55ac9eb39cc5031f5fdb5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e91b58262a9cfe9ebbbc00aa9b39217120b7dcbef39f0a39004c79dd2a1ef2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e91b58262a9cfe9ebbbc00aa9b39217120b7dcbef39f0a39004c79dd2a1ef2f->enter($__internal_1e91b58262a9cfe9ebbbc00aa9b39217120b7dcbef39f0a39004c79dd2a1ef2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"nursery-edit container\">
        <div class=\"row\">
            <div class=\"button-container left col-4\">
                <a class=\"grey-button\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nursery_show", array("idNursery" => $this->env->getExtension('AppBundle\Twig\Extension\NurseryExtension')->getNurseryId())), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.back"), "html", null, true);
        echo "</a>
            </div>
            <div class=\"button-container col-8\">                
                <input class=\"orange-button\" onclick=\"\$('#main-form').submit();\" type=\"submit\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.save"), "html", null, true);
        echo "\"/>
            </div>
        </div>
        ";
        // line 13
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'form_start', array("attr" => array("id" => "main-form")));
        echo "
        <div class=\"tabs\">
            <ul>
                <li><a href=\"#tab-main-info\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.main_info"), "html", null, true);
        echo "</a></li>
                <li><a href=\"#tab-comments\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.comments"), "html", null, true);
        echo "</a></li>
            </ul>
            <div class=\"nursery-info row\" id=\"tab-main-info\">
                <div class=\"main-photo col-4\">
                    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "photoFile", array()), 'widget');
        echo "
                </div>
                <div class=\"main-info col-6\">
                    ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "nameNur", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "nameNur_en", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), "bdate", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "owner", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), "ownerEn", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "adress", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "adressEn", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "phone", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), "cellphone", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "email", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "about", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), "aboutEn", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "site", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                </div>
            </div>
            <div class=\"nursery-comments row\" id=\"tab-comments\">
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 40, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 41
            echo "                    <div class=\"comment-item\">
                        <div class=\"comment-date\">
                            ";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "cdate", array()), "d/m/Y"), "html", null, true);
            echo "
                        </div>
                        <div class=\"user-name\">
                            <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comments_show", array("idComments" => twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "idComments", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "klname", array()), "html", null, true);
            echo "</a>
                        </div>
                        <div class=\"user-email\">
                            ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "email", array()), "html", null, true);
            echo "
                        </div>
                        <div class=\"user-question\">
                            ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "question", array()), "html", null, true);
            echo "
                        </div>
                        <div class=\"comment-edit\">
                            <a class=\"orange-button\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comments_edit", array("idComments" => twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "idComments", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.edit"), "html", null, true);
            echo "</a>
                        </div>    
                    </div>


                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            </div>

        </div>

        ";
        // line 65
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->getSourceContext()); })()), 'form_end');
        echo "
    </div>

";
        
        $__internal_1e91b58262a9cfe9ebbbc00aa9b39217120b7dcbef39f0a39004c79dd2a1ef2f->leave($__internal_1e91b58262a9cfe9ebbbc00aa9b39217120b7dcbef39f0a39004c79dd2a1ef2f_prof);

    }

    public function getTemplateName()
    {
        return ":nursery:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 65,  185 => 61,  171 => 55,  165 => 52,  159 => 49,  151 => 46,  145 => 43,  141 => 41,  137 => 40,  130 => 36,  126 => 35,  122 => 34,  118 => 33,  114 => 32,  110 => 31,  106 => 30,  102 => 29,  98 => 28,  94 => 27,  90 => 26,  86 => 25,  82 => 24,  76 => 21,  69 => 17,  65 => 16,  59 => 13,  53 => 10,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"nursery-edit container\">
        <div class=\"row\">
            <div class=\"button-container left col-4\">
                <a class=\"grey-button\" href=\"{{ path('nursery_show', { 'idNursery': get_nursery_id()}) }}\">{{'total.back'|trans}}</a>
            </div>
            <div class=\"button-container col-8\">                
                <input class=\"orange-button\" onclick=\"\$('#main-form').submit();\" type=\"submit\" value=\"{{'total.save'|trans}}\"/>
            </div>
        </div>
        {{ form_start(form, {'attr': {'id': 'main-form'} }) }}
        <div class=\"tabs\">
            <ul>
                <li><a href=\"#tab-main-info\">{{'total.main_info'|trans}}</a></li>
                <li><a href=\"#tab-comments\">{{\"total.comments\"|trans}}</a></li>
            </ul>
            <div class=\"nursery-info row\" id=\"tab-main-info\">
                <div class=\"main-photo col-4\">
                    {{ form_widget(form.photoFile)}}
                </div>
                <div class=\"main-info col-6\">
                    {{ form_row(form.nameNur, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.nameNur_en, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.bdate, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.owner, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.ownerEn, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.adress, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.adressEn, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.phone, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.cellphone, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.email, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.about, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.aboutEn, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.site, {'attr': {'class': 'parent-width'} })}}
                </div>
            </div>
            <div class=\"nursery-comments row\" id=\"tab-comments\">
                {% for comment in comments %}
                    <div class=\"comment-item\">
                        <div class=\"comment-date\">
                            {{ comment.cdate|date(\"d/m/Y\") }}
                        </div>
                        <div class=\"user-name\">
                            <a href=\"{{ path('comments_show', { 'idComments': comment.idComments }) }}\">{{ comment.klname }}</a>
                        </div>
                        <div class=\"user-email\">
                            {{ comment.email }}
                        </div>
                        <div class=\"user-question\">
                            {{ comment.question }}
                        </div>
                        <div class=\"comment-edit\">
                            <a class=\"orange-button\" href=\"{{ path('comments_edit', { 'idComments': comment.idComments }) }}\">{{'total.edit'|trans}}</a>
                        </div>    
                    </div>


                {% endfor %}
            </div>

        </div>

        {{ form_end(form) }}
    </div>

{% endblock %}
", ":nursery:edit.html.twig", "/var/www/zabava/app/Resources/views/nursery/edit.html.twig");
    }
}
