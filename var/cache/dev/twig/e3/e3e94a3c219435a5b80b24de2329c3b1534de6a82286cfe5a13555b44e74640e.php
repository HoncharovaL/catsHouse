<?php

/* :litters:edit.html.twig */
class __TwigTemplate_8216551d13ed7a799b8207b02038ac435cbc8135539ab4edd28d97e9d0ac7b38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":litters:edit.html.twig", 1);
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
        $__internal_d7abf5307e1c2c26db7d8f3789b6f072a4dad65668133a6b3482df89f2d69405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7abf5307e1c2c26db7d8f3789b6f072a4dad65668133a6b3482df89f2d69405->enter($__internal_d7abf5307e1c2c26db7d8f3789b6f072a4dad65668133a6b3482df89f2d69405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":litters:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7abf5307e1c2c26db7d8f3789b6f072a4dad65668133a6b3482df89f2d69405->leave($__internal_d7abf5307e1c2c26db7d8f3789b6f072a4dad65668133a6b3482df89f2d69405_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d637ca0a1bd2d51e2e218c8cfd6069b204a8e6c872689201ef5b02e1c79ddc9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d637ca0a1bd2d51e2e218c8cfd6069b204a8e6c872689201ef5b02e1c79ddc9b->enter($__internal_d637ca0a1bd2d51e2e218c8cfd6069b204a8e6c872689201ef5b02e1c79ddc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"button-container left col-4\">
                <a class=\"grey-button\" href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("litters_index");
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
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.main_info"), "html", null, true);
        echo "</a></li>
                <li><a href=\"#tab-dogs\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "dogs", array()), "vars", array()), "label", array())), "html", null, true);
        echo "</a></li>
            </ul>
            <div class=\"row\" id=\"tab-main-info\">
                <div class=\"main-info col-6\">
                    ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "ldate", array()), 'row');
        echo "
                    ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), "mother", array()), 'row');
        echo "
                    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "father", array()), 'row');
        echo "

                </div>
            </div>
            <div class=\"embedded-form dogs\" id=\"tab-dogs\">
                <ul class=\"form-collection-container\" data-count=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "dogs", array())), "html", null, true);
        echo "\" id=\"titles-fields-list\"
                    data-prototype=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), "dogs", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "dogs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["dog"]) {
            // line 37
            echo "                        <li>
                            ";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["dog"], "name", array()), 'row');
            echo "
                            ";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["dog"], "nameEn", array()), 'row');
            echo "
                            ";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["dog"], "description", array()), 'row');
            echo "
                            ";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["dog"], "descriptionEn", array()), 'row');
            echo "
                            ";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["dog"], "sex", array()), 'row');
            echo "
                            ";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["dog"], "photoFile", array()), 'row');
            echo "
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </ul>
                <div class=\"add-button-container\">
                    <a href=\"#\" class=\"add-new-element\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.add_dog"), "html", null, true);
        echo "</a>
                </div>
            </div>
            ";
        // line 51
        twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), "dogs", array()), "setRendered", array());
        // line 52
        echo "        </div>
        ";
        // line 53
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_d637ca0a1bd2d51e2e218c8cfd6069b204a8e6c872689201ef5b02e1c79ddc9b->leave($__internal_d637ca0a1bd2d51e2e218c8cfd6069b204a8e6c872689201ef5b02e1c79ddc9b_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ef1d38673002dc490ba95e54996c4299a91c93abcb4fbf59412c1713922b1de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef1d38673002dc490ba95e54996c4299a91c93abcb4fbf59412c1713922b1de3->enter($__internal_ef1d38673002dc490ba95e54996c4299a91c93abcb4fbf59412c1713922b1de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
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
        // line 86
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
        
        $__internal_ef1d38673002dc490ba95e54996c4299a91c93abcb4fbf59412c1713922b1de3->leave($__internal_ef1d38673002dc490ba95e54996c4299a91c93abcb4fbf59412c1713922b1de3_prof);

    }

    public function getTemplateName()
    {
        return ":litters:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 86,  186 => 58,  180 => 57,  170 => 53,  167 => 52,  165 => 51,  159 => 48,  155 => 46,  146 => 43,  142 => 42,  138 => 41,  134 => 40,  130 => 39,  126 => 38,  123 => 37,  119 => 36,  115 => 35,  111 => 34,  103 => 29,  99 => 28,  95 => 27,  88 => 23,  84 => 22,  77 => 18,  70 => 15,  65 => 13,  61 => 12,  56 => 11,  54 => 10,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"button-container left col-4\">
                <a class=\"grey-button\" href=\"{{ path('litters_index') }}\">{{'total.back'|trans}}</a>
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
                <li><a href=\"#tab-dogs\">{{form.dogs.vars.label|trans}}</a></li>
            </ul>
            <div class=\"row\" id=\"tab-main-info\">
                <div class=\"main-info col-6\">
                    {{ form_row(form.ldate)}}
                    {{ form_row(form.mother)}}
                    {{ form_row(form.father)}}

                </div>
            </div>
            <div class=\"embedded-form dogs\" id=\"tab-dogs\">
                <ul class=\"form-collection-container\" data-count=\"{{ form.dogs|length }}\" id=\"titles-fields-list\"
                    data-prototype=\"{{ form_widget(form.dogs.vars.prototype)|e }}\">
                    {% for dog in form.dogs %}
                        <li>
                            {{ form_row(dog.name) }}
                            {{ form_row(dog.nameEn) }}
                            {{ form_row(dog.description) }}
                            {{ form_row(dog.descriptionEn) }}
                            {{ form_row(dog.sex) }}
                            {{ form_row(dog.photoFile) }}
                        </li>
                    {% endfor %}
                </ul>
                <div class=\"add-button-container\">
                    <a href=\"#\" class=\"add-new-element\">{{\"total.add_dog\"|trans}}</a>
                </div>
            </div>
            {% do form.dogs.setRendered %}
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
{% endblock %}", ":litters:edit.html.twig", "/var/www/zabava/app/Resources/views/litters/edit.html.twig");
    }
}
