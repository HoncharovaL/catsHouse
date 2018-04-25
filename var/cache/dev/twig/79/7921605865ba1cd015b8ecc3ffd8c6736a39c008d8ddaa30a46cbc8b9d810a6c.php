<?php

/* nursery/show.html.twig */
class __TwigTemplate_70c329b2777ba8dcca961c2c7088a5ff3acfba7923137f1b4228d2aa5e26c461 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "nursery/show.html.twig", 1);
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
        $__internal_a0c89dbed06f51966c09144dd11e3501a0d2221b6e0e835b72f4a7076bd9df66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c89dbed06f51966c09144dd11e3501a0d2221b6e0e835b72f4a7076bd9df66->enter($__internal_a0c89dbed06f51966c09144dd11e3501a0d2221b6e0e835b72f4a7076bd9df66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nursery/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0c89dbed06f51966c09144dd11e3501a0d2221b6e0e835b72f4a7076bd9df66->leave($__internal_a0c89dbed06f51966c09144dd11e3501a0d2221b6e0e835b72f4a7076bd9df66_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_872de6f70c3735657b493f6c50820e393507d0a30f22cc7f9ec4d1c34e2b8cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_872de6f70c3735657b493f6c50820e393507d0a30f22cc7f9ec4d1c34e2b8cff->enter($__internal_872de6f70c3735657b493f6c50820e393507d0a30f22cc7f9ec4d1c34e2b8cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"reviews-about-nursery\">
            <h3>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("nursery.list.about"), "html", null, true);
        echo "</h3>
            ";
        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 8
            echo "                <div class=\"button-container\">
                    <a class=\"orange-button\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nursery_edit", array("idNursery" => $this->env->getExtension('AppBundle\Twig\Extension\NurseryExtension')->getNurseryId())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.edit"), "html", null, true);
            echo "</a>
                </div>
            ";
        }
        // line 12
        echo "            <div class=\"nursery-container\">
                <div class=\"nursery-photo\">
                    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["photo_path"]) || array_key_exists("photo_path", $context) ? $context["photo_path"] : (function () { throw new Twig_Error_Runtime('Variable "photo_path" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["nursery"]) || array_key_exists("nursery", $context) ? $context["nursery"] : (function () { throw new Twig_Error_Runtime('Variable "nursery" does not exist.', 14, $this->getSourceContext()); })()), "photo", array()), "html", null, true);
        echo "\"/>
                </div>
                <div class=\"nursery-description\">
                    <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reviews.nursery.conact_us_via"), "html", null, true);
        echo "</p>
                    <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reviews.nursery.conact_us_via_phones"), "html", null, true);
        echo "</p>
                    <p class=\"important-info\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["nursery"]) || array_key_exists("nursery", $context) ? $context["nursery"] : (function () { throw new Twig_Error_Runtime('Variable "nursery" does not exist.', 19, $this->getSourceContext()); })()), "phone", array()), "html", null, true);
        echo "</p>
                    <p class=\"important-info\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["nursery"]) || array_key_exists("nursery", $context) ? $context["nursery"] : (function () { throw new Twig_Error_Runtime('Variable "nursery" does not exist.', 20, $this->getSourceContext()); })()), "cellphone", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reviews.nursery.conact_us_via_email"), "html", null, true);
        echo "</p>
                    <p class=\"important-info\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["nursery"]) || array_key_exists("nursery", $context) ? $context["nursery"] : (function () { throw new Twig_Error_Runtime('Variable "nursery" does not exist.', 22, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_translated')->getCallable(), array((isset($context["nursery"]) || array_key_exists("nursery", $context) ? $context["nursery"] : (function () { throw new Twig_Error_Runtime('Variable "nursery" does not exist.', 23, $this->getSourceContext()); })()), "adress")), "html", null, true);
        echo "</p>
                    <p class=\"very-important-info\">";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_translated')->getCallable(), array((isset($context["nursery"]) || array_key_exists("nursery", $context) ? $context["nursery"] : (function () { throw new Twig_Error_Runtime('Variable "nursery" does not exist.', 24, $this->getSourceContext()); })()), "owner")), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div style=\"clear: left\"></div>
        </div>
        <div class=\"reviews-comments-list\">
            <h3>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.reviews"), "html", null, true);
        echo "</h3>
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["comments"]);
        foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
            // line 32
            echo "                <div class=\"reviews-comment-item\">
                    <div class=\"date\">";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comments"], "cdate", array()), "m.d.Y"), "html", null, true);
            echo "</div>
                    <div class=\"title\">";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reviews.text.comment_author", array("%name%" => twig_get_attribute($this->env, $this->getSourceContext(), $context["comments"], "klname", array())));
            echo "</div>
                    <div class=\"text\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comments"], "question", array()), "html", null, true);
            echo "</div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </div>
        <div class=\"reviews-add-comment\">
            <div class=\"review-form\">
                ";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), 'form_start');
        echo "
                <div>
                    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), "klname", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reviews.label.name"))));
        echo "
                    ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->getSourceContext()); })()), "email", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reviews.label.email"))));
        echo "
                </div>
                <div>
                    ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()), "question", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reviews.label.comment"), "rows" => 5)));
        echo "
                </div>
                <input class=\"orange-button\" type=\"submit\" value=";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.send"), "html", null, true);
        echo " />
                ";
        // line 50
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), 'form_end');
        echo "
            </div>
            <div class=\"review-disclaimer\">
                <h4>";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reviews.text.pay_attention"), "html", null, true);
        echo "</h4>
                <p>";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reviews.text.comment_disclaimer");
        echo "</p>
            </div>
        </div>
        <div style=\"clear: left\"></div>
    </div>
";
        
        $__internal_872de6f70c3735657b493f6c50820e393507d0a30f22cc7f9ec4d1c34e2b8cff->leave($__internal_872de6f70c3735657b493f6c50820e393507d0a30f22cc7f9ec4d1c34e2b8cff_prof);

    }

    public function getTemplateName()
    {
        return "nursery/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 54,  172 => 53,  166 => 50,  162 => 49,  157 => 47,  151 => 44,  147 => 43,  142 => 41,  137 => 38,  128 => 35,  124 => 34,  120 => 33,  117 => 32,  113 => 31,  109 => 30,  100 => 24,  96 => 23,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  76 => 18,  72 => 17,  65 => 14,  61 => 12,  53 => 9,  50 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"reviews-about-nursery\">
            <h3>{{'nursery.list.about'|trans}}</h3>
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <div class=\"button-container\">
                    <a class=\"orange-button\" href=\"{{ path('nursery_edit', { 'idNursery': get_nursery_id()}) }}\">{{\"total.edit\"|trans}}</a>
                </div>
            {% endif %}
            <div class=\"nursery-container\">
                <div class=\"nursery-photo\">
                    <img src=\"{{photo_path}}{{nursery.photo}}\"/>
                </div>
                <div class=\"nursery-description\">
                    <p>{{'reviews.nursery.conact_us_via'|trans}}</p>
                    <p>{{'reviews.nursery.conact_us_via_phones'|trans}}</p>
                    <p class=\"important-info\">{{ nursery.phone }}</p>
                    <p class=\"important-info\">{{ nursery.cellphone }}</p>
                    <p>{{'reviews.nursery.conact_us_via_email'|trans}}</p>
                    <p class=\"important-info\">{{ nursery.email }}</p>
                    <p>{{ get_translated(nursery, 'adress') }}</p>
                    <p class=\"very-important-info\">{{ get_translated(nursery, 'owner') }}</p>
                </div>
            </div>
            <div style=\"clear: left\"></div>
        </div>
        <div class=\"reviews-comments-list\">
            <h3>{{'total.reviews'|trans}}</h3>
            {% for comments in comments %}
                <div class=\"reviews-comment-item\">
                    <div class=\"date\">{{ comments.cdate|date(\"m.d.Y\")}}</div>
                    <div class=\"title\">{{\"reviews.text.comment_author\"|trans({\"%name%\": comments.klname})|raw}}</div>
                    <div class=\"text\">{{comments.question}}</div>
                </div>
            {% endfor %}
        </div>
        <div class=\"reviews-add-comment\">
            <div class=\"review-form\">
                {{ form_start(form) }}
                <div>
                    {{ form_widget(form.klname, {'attr': {'placeholder': 'reviews.label.name'|trans} })}}
                    {{ form_widget(form.email, {'attr': {'placeholder': 'reviews.label.email'|trans} })}}
                </div>
                <div>
                    {{ form_widget(form.question, {'attr': {'placeholder': 'reviews.label.comment'|trans, 'rows': 5} }) }}
                </div>
                <input class=\"orange-button\" type=\"submit\" value={{'total.send'|trans}} />
                {{ form_end(form) }}
            </div>
            <div class=\"review-disclaimer\">
                <h4>{{'reviews.text.pay_attention'|trans}}</h4>
                <p>{{'reviews.text.comment_disclaimer'|trans|raw}}</p>
            </div>
        </div>
        <div style=\"clear: left\"></div>
    </div>
{% endblock %}
", "nursery/show.html.twig", "/var/www/zabava/app/Resources/views/nursery/show.html.twig");
    }
}
