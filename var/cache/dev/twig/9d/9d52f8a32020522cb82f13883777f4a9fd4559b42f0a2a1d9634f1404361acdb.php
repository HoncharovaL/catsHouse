<?php

/* :news:new.html.twig */
class __TwigTemplate_8f5bdd9c481b4889f8ff8815224f1ea748f5f543babe390c08ce086fac89e492 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":news:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_567181fcfd6f97928ce7000ef81d30c32b411d9cb59c45520c6b5a275e5c8483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_567181fcfd6f97928ce7000ef81d30c32b411d9cb59c45520c6b5a275e5c8483->enter($__internal_567181fcfd6f97928ce7000ef81d30c32b411d9cb59c45520c6b5a275e5c8483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":news:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_567181fcfd6f97928ce7000ef81d30c32b411d9cb59c45520c6b5a275e5c8483->leave($__internal_567181fcfd6f97928ce7000ef81d30c32b411d9cb59c45520c6b5a275e5c8483_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b558c2f3d4a7b24a366f69d2da99b24b1edc06053c2dead6704e596e0c3d114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b558c2f3d4a7b24a366f69d2da99b24b1edc06053c2dead6704e596e0c3d114->enter($__internal_2b558c2f3d4a7b24a366f69d2da99b24b1edc06053c2dead6704e596e0c3d114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"news-edit container\">
        <div class=\"row\">
            <div class=\"button-container left col-4\">
                <a class=\"grey-button\" href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.back"), "html", null, true);
        echo "</a>
            </div>
            <div class=\"button-container col-8\">
                ";
        // line 10
        if (array_key_exists("delete_form", $context)) {
            // line 11
            echo "                    ";
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 11, $this->getSourceContext()); })()), 'form_start');
            echo "
                    <input class=\"grey-button\" type=\"submit\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.delete"), "html", null, true);
            echo "\">
                    ";
            // line 13
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 13, $this->getSourceContext()); })()), 'form_end');
            echo "
                ";
        }
        // line 15
        echo "                <input class=\"orange-button\" onclick=\"\$('#main-form').submit();\" type=\"submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.save"), "html", null, true);
        echo "\"/>
            </div>
        </div>
        ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), 'form_start', array("attr" => array("id" => "main-form")));
        echo "
        <div class=\"tabs\">
            <ul>
                <li><a href=\"#tab-main-info\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.main_info"), "html", null, true);
        echo "</a></li>
                <li><a href=\"#tab-photos\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.photos"), "html", null, true);
        echo "</a></li>
                <li><a href=\"#tab-videos\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.videos"), "html", null, true);
        echo "</a></li>
            </ul>
            <div class=\"news-info row\" id=\"tab-main-info\">
                <div class=\"main-photo col-4\">
                    ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "photoFile", array()), 'widget');
        echo "
                </div>
                <div class=\"main-info col-6\">
                    ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "ndate", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "title", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), "titleEn", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "newsType", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "newsdesc", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), "newsdescEn", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                </div>
            </div>
            <div class=\"embedded-form photos\" id=\"tab-photos\">
                <ul class=\"form-collection-container\" data-count=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), "dogsPhotos", array())), "html", null, true);
        echo "\"
                    data-prototype=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), "dogsPhotos", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
                    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), "dogsPhotos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["dogsPhoto"]) {
            // line 42
            echo "                        <li>
                            ";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["dogsPhoto"], "photoFile", array()), 'row');
            echo "
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dogsPhoto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </ul>
                <div class=\"add-button-container\">
                    <a href=\"#\" class=\"add-new-element\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.add_photo"), "html", null, true);
        echo "</a>
                </div>
            </div>
            ";
        // line 51
        twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), "dogsPhotos", array()), "setRendered", array());
        // line 52
        echo "
            <div class=\"embedded-form videos\" id=\"tab-videos\">
                <ul class=\"form-collection-container\" data-count=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->getSourceContext()); })()), "videos", array())), "html", null, true);
        echo "\" id=\"videos-fields-list\"
                    data-prototype=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->getSourceContext()); })()), "videos", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
                    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->getSourceContext()); })()), "videos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 57
            echo "                        <li>
                            ";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["video"], "video", array()), 'row');
            echo "
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                </ul>
                <div class=\"add-button-container\">
                    <a href=\"#\" class=\"add-new-element\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.add_video"), "html", null, true);
        echo "</a>
                </div>
            </div>
            ";
        // line 66
        twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->getSourceContext()); })()), "videos", array()), "setRendered", array());
        // line 67
        echo "        </div>

        ";
        // line 69
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 69, $this->getSourceContext()); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_2b558c2f3d4a7b24a366f69d2da99b24b1edc06053c2dead6704e596e0c3d114->leave($__internal_2b558c2f3d4a7b24a366f69d2da99b24b1edc06053c2dead6704e596e0c3d114_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c5cc7ea4c362580732e9da9382f7bb876809006a9189a8db88f96119a0284239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5cc7ea4c362580732e9da9382f7bb876809006a9189a8db88f96119a0284239->enter($__internal_c5cc7ea4c362580732e9da9382f7bb876809006a9189a8db88f96119a0284239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.embedded-form .add-new-element').on('click', function (e) {
                e.preventDefault();

                var list = \$(this).parents('.embedded-form').find('.form-collection-container');

                // grab the prototype template
                var newWidget = list.attr('data-prototype');
                var count = list.data('count');
                newWidget = newWidget.replace(/__name__/g, count);
                count++;
                list.data('count', count);

                // create a new list element and add it to the list
                var newLi = \$('<li></li>').html(newWidget);
                newLi.appendTo(list);
                addDeleteLink(newLi);
            });

            // add a delete link to all of the existing tag form li elements
            \$('.form-collection-container').find('li').each(function () {
                addDeleteLink(\$(this));
            });

            function addDeleteLink(\$formLi) {
                var \$removeLi = \$('<a class=\"delete-icon\" title=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.delete"), "html", null, true);
        echo "\" href=\"#\"></a>');
                \$formLi.append(\$removeLi);

                \$removeLi.on('click', function (e) {
                    e.preventDefault();
                    \$formLi.remove();
                });
            }
        });
    </script>
";
        
        $__internal_c5cc7ea4c362580732e9da9382f7bb876809006a9189a8db88f96119a0284239->leave($__internal_c5cc7ea4c362580732e9da9382f7bb876809006a9189a8db88f96119a0284239_prof);

    }

    public function getTemplateName()
    {
        return ":news:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 102,  227 => 74,  221 => 73,  211 => 69,  207 => 67,  205 => 66,  199 => 63,  195 => 61,  186 => 58,  183 => 57,  179 => 56,  175 => 55,  171 => 54,  167 => 52,  165 => 51,  159 => 48,  155 => 46,  146 => 43,  143 => 42,  139 => 41,  135 => 40,  131 => 39,  124 => 35,  120 => 34,  116 => 33,  112 => 32,  108 => 31,  104 => 30,  98 => 27,  91 => 23,  87 => 22,  83 => 21,  77 => 18,  70 => 15,  65 => 13,  61 => 12,  56 => 11,  54 => 10,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"news-edit container\">
        <div class=\"row\">
            <div class=\"button-container left col-4\">
                <a class=\"grey-button\" href=\"{{ path('homepage') }}\">{{'total.back'|trans}}</a>
            </div>
            <div class=\"button-container col-8\">
                {% if delete_form is defined %}
                    {{ form_start(delete_form) }}
                    <input class=\"grey-button\" type=\"submit\" value=\"{{\"total.delete\"|trans}}\">
                    {{ form_end(delete_form) }}
                {% endif %}
                <input class=\"orange-button\" onclick=\"\$('#main-form').submit();\" type=\"submit\" value=\"{{'total.save'|trans}}\"/>
            </div>
        </div>
        {{ form_start(form, {'attr': {'id': 'main-form'} }) }}
        <div class=\"tabs\">
            <ul>
                <li><a href=\"#tab-main-info\">{{'total.main_info'|trans}}</a></li>
                <li><a href=\"#tab-photos\">{{\"total.photos\"|trans}}</a></li>
                <li><a href=\"#tab-videos\">{{\"total.videos\"|trans}}</a></li>
            </ul>
            <div class=\"news-info row\" id=\"tab-main-info\">
                <div class=\"main-photo col-4\">
                    {{ form_widget(form.photoFile)}}
                </div>
                <div class=\"main-info col-6\">
                    {{ form_row(form.ndate, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.title, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.titleEn, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.newsType, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.newsdesc, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.newsdescEn, {'attr': {'class': 'parent-width'} })}}
                </div>
            </div>
            <div class=\"embedded-form photos\" id=\"tab-photos\">
                <ul class=\"form-collection-container\" data-count=\"{{form.dogsPhotos|length}}\"
                    data-prototype=\"{{ form_widget(form.dogsPhotos.vars.prototype)|e }}\">
                    {% for dogsPhoto in form.dogsPhotos %}
                        <li>
                            {{ form_row(dogsPhoto.photoFile) }}
                        </li>
                    {% endfor %}
                </ul>
                <div class=\"add-button-container\">
                    <a href=\"#\" class=\"add-new-element\">{{\"total.add_photo\"|trans}}</a>
                </div>
            </div>
            {% do form.dogsPhotos.setRendered %}

            <div class=\"embedded-form videos\" id=\"tab-videos\">
                <ul class=\"form-collection-container\" data-count=\"{{ form.videos|length }}\" id=\"videos-fields-list\"
                    data-prototype=\"{{ form_widget(form.videos.vars.prototype)|e }}\">
                    {% for video in form.videos %}
                        <li>
                            {{ form_row(video.video) }}
                        </li>
                    {% endfor %}
                </ul>
                <div class=\"add-button-container\">
                    <a href=\"#\" class=\"add-new-element\">{{\"total.add_video\"|trans}}</a>
                </div>
            </div>
            {% do form.videos.setRendered %}
        </div>

        {{ form_end(form) }}
    </div>
{% endblock %}

{% block javascripts %}
    {{parent()}}

    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.embedded-form .add-new-element').on('click', function (e) {
                e.preventDefault();

                var list = \$(this).parents('.embedded-form').find('.form-collection-container');

                // grab the prototype template
                var newWidget = list.attr('data-prototype');
                var count = list.data('count');
                newWidget = newWidget.replace(/__name__/g, count);
                count++;
                list.data('count', count);

                // create a new list element and add it to the list
                var newLi = \$('<li></li>').html(newWidget);
                newLi.appendTo(list);
                addDeleteLink(newLi);
            });

            // add a delete link to all of the existing tag form li elements
            \$('.form-collection-container').find('li').each(function () {
                addDeleteLink(\$(this));
            });

            function addDeleteLink(\$formLi) {
                var \$removeLi = \$('<a class=\"delete-icon\" title=\"{{\"total.delete\"|trans}}\" href=\"#\"></a>');
                \$formLi.append(\$removeLi);

                \$removeLi.on('click', function (e) {
                    e.preventDefault();
                    \$formLi.remove();
                });
            }
        });
    </script>
{% endblock %}", ":news:new.html.twig", "/var/www/zabava/app/Resources/views/news/new.html.twig");
    }
}
