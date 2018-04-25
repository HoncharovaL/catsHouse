<?php

/* LuneticsLocaleBundle:Switcher:switcher_links.html.twig */
class __TwigTemplate_a44883d4bb9210dd0265558e8ef1ad188309a12d3c21ef322bee989de7bd4bb9 extends Twig_Template
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
        $__internal_fadc84a83137512699e20f7025ab5aa38c46b88413bfef867c01655c8d75df43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fadc84a83137512699e20f7025ab5aa38c46b88413bfef867c01655c8d75df43->enter($__internal_fadc84a83137512699e20f7025ab5aa38c46b88413bfef867c01655c8d75df43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LuneticsLocaleBundle:Switcher:switcher_links.html.twig"));

        // line 1
        echo "<p>Switch to :</p>
<ul class=\"locale_chooser\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new Twig_Error_Runtime('Variable "locales" does not exist.', 3, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 4
            echo "        <li";
            if (((isset($context["current_locale"]) || array_key_exists("current_locale", $context) ? $context["current_locale"] : (function () { throw new Twig_Error_Runtime('Variable "current_locale" does not exist.', 4, $this->getSourceContext()); })()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["locale"], "locale", array()))) {
                echo " class=\"locale_current\"";
            }
            echo ">
            <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["locale"], "link", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["locale"], "locale_current_language", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["locale"], "locale_current_language", array()), "html", null, true);
            echo "</a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul>
";
        
        $__internal_fadc84a83137512699e20f7025ab5aa38c46b88413bfef867c01655c8d75df43->leave($__internal_fadc84a83137512699e20f7025ab5aa38c46b88413bfef867c01655c8d75df43_prof);

    }

    public function getTemplateName()
    {
        return "LuneticsLocaleBundle:Switcher:switcher_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  37 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p>Switch to :</p>
<ul class=\"locale_chooser\">
    {% for locale in locales %}
        <li{% if current_locale == locale.locale %} class=\"locale_current\"{% endif %}>
            <a href=\"{{ locale.link }}\" title=\"{{ locale.locale_current_language }}\">{{ locale.locale_current_language }}</a>
        </li>
    {% endfor %}
</ul>
", "LuneticsLocaleBundle:Switcher:switcher_links.html.twig", "/var/www/zabava/vendor/lunetics/locale-bundle/Lunetics/LocaleBundle/Resources/views/Switcher/switcher_links.html.twig");
    }
}
