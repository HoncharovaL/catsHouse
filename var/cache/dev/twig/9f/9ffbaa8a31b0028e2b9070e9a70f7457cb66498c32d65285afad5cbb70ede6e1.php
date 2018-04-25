<?php

/* :titles:edit.html.twig */
class __TwigTemplate_ac77a4f6044a5f16f9b73fa958637cd82bc4d74aab64e73eff40e5c3d713e7dc extends Twig_Template
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
        $__internal_d0ecae39dae0d7f1fa266643bd809b099f8c26afd7c19d4422af94df2cc5c8e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ecae39dae0d7f1fa266643bd809b099f8c26afd7c19d4422af94df2cc5c8e9->enter($__internal_d0ecae39dae0d7f1fa266643bd809b099f8c26afd7c19d4422af94df2cc5c8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":titles:edit.html.twig"));

        // line 1
        echo "<div class=\"edit-head\">
    <h3>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.edit"), "html", null, true);
        echo "</h3>
</div>
<div class=\"edit-content\">


    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("titles_edit", array("idTitles" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "idTitles"), "method")))));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 8, $this->getSourceContext()); })()), "title", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 9, $this->getSourceContext()); })()), "titleEng", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
    <input class=\"orange-button\" type=\"submit\" value=";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.edit"), "html", null, true);
        echo " />
    ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 11, $this->getSourceContext()); })()), 'form_end');
        echo "


</div>";
        
        $__internal_d0ecae39dae0d7f1fa266643bd809b099f8c26afd7c19d4422af94df2cc5c8e9->leave($__internal_d0ecae39dae0d7f1fa266643bd809b099f8c26afd7c19d4422af94df2cc5c8e9_prof);

    }

    public function getTemplateName()
    {
        return ":titles:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  45 => 10,  41 => 9,  37 => 8,  33 => 7,  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"edit-head\">
    <h3>{{'total.edit'|trans}}</h3>
</div>
<div class=\"edit-content\">


    {{ form_start(edit_form, {'action':path('titles_edit',{'idTitles':app.request.get('idTitles')})}) }}
    {{ form_row(edit_form.title, {'attr': {'class': 'parent-width'} })}}
    {{ form_row(edit_form.titleEng, {'attr': {'class': 'parent-width'} })}}
    <input class=\"orange-button\" type=\"submit\" value={{'total.edit'|trans}} />
    {{ form_end(edit_form) }}


</div>", ":titles:edit.html.twig", "/var/www/zabava/app/Resources/views/titles/edit.html.twig");
    }
}
