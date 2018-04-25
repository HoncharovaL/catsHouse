<?php

/* services/comment.html.twig */
class __TwigTemplate_54ec6f79453b69d52f702b68ff70d0c2cdc098704913d8b296597632c44f2973 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d104088fad09f799945b212a6f5859081f2d066b8d7206a801530eefdf3d710b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d104088fad09f799945b212a6f5859081f2d066b8d7206a801530eefdf3d710b->enter($__internal_d104088fad09f799945b212a6f5859081f2d066b8d7206a801530eefdf3d710b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "services/comment.html.twig"));

        // line 1
        echo "<div class=\"ask-question\">
    <h3>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.askquestion"), "html", null, true);
        echo "</h3>
</div>
<div class=\"dogs-add-question\">
    ";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services_comment", array("idServices" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "idServices"), "method")))));
        echo "
    <div>
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "klname", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reviews.label.name"))));
        echo "
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "email", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reviews.label.email"))));
        echo "
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "phone", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reviews.label.phone"))));
        echo "
    </div>
    <div class=\"question-form\">
        ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "question", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reviews.label.comment"), "rows" => 5)));
        echo "
    </div>
    <input class=\"orange-button\" type=\"submit\" value=";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.send"), "html", null, true);
        echo " />
    ";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), 'form_end');
        echo "
</div>";
        
        $__internal_d104088fad09f799945b212a6f5859081f2d066b8d7206a801530eefdf3d710b->leave($__internal_d104088fad09f799945b212a6f5859081f2d066b8d7206a801530eefdf3d710b_prof);

    }

    public function getTemplateName()
    {
        return "services/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  55 => 14,  50 => 12,  44 => 9,  40 => 8,  36 => 7,  31 => 5,  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ask-question\">
    <h3>{{'total.askquestion'|trans}}</h3>
</div>
<div class=\"dogs-add-question\">
    {{ form_start(form , {'action':path('services_comment',{'idServices':app.request.get('idServices')})}) }}
    <div>
        {{ form_widget(form.klname, {'attr': {'placeholder': 'reviews.label.name'|trans} })}}
        {{ form_widget(form.email, {'attr': {'placeholder': 'reviews.label.email'|trans} })}}
        {{ form_widget(form.phone, {'attr': {'placeholder': 'reviews.label.phone'|trans} })}}
    </div>
    <div class=\"question-form\">
        {{ form_widget(form.question, {'attr': {'placeholder': 'reviews.label.comment'|trans, 'rows': 5} }) }}
    </div>
    <input class=\"orange-button\" type=\"submit\" value={{'total.send'|trans}} />
    {{ form_end(form) }}
</div>", "services/comment.html.twig", "/var/www/zabava/app/Resources/views/services/comment.html.twig");
    }
}
