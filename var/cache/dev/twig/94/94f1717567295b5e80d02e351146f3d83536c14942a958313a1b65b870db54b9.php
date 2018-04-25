<?php

/* :Switcher:switcher_links.html.twig */
class __TwigTemplate_567f78837d52476db99eecee98c8f6b108b3823b6ff2ad65cd52d7e52450c794 extends Twig_Template
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
        $__internal_af17dc6fc9932527d1e0f707354e018db843a4f4f9a1777ee2c0d8729a724b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af17dc6fc9932527d1e0f707354e018db843a4f4f9a1777ee2c0d8729a724b2d->enter($__internal_af17dc6fc9932527d1e0f707354e018db843a4f4f9a1777ee2c0d8729a724b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Switcher:switcher_links.html.twig"));

        // line 1
        echo "<img class=\"current-locale\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/app/img/locale/" . (isset($context["current_locale"]) || array_key_exists("current_locale", $context) ? $context["current_locale"] : (function () { throw new Twig_Error_Runtime('Variable "current_locale" does not exist.', 1, $this->getSourceContext()); })())) . ".png")), "html", null, true);
        echo "\">
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new Twig_Error_Runtime('Variable "locales" does not exist.', 2, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 3
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["locale"], "link", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["locale"], "locale_current_language", array()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/app/img/locale/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["locale"], "locale", array())) . ".png")), "html", null, true);
            echo "\"></a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_af17dc6fc9932527d1e0f707354e018db843a4f4f9a1777ee2c0d8729a724b2d->leave($__internal_af17dc6fc9932527d1e0f707354e018db843a4f4f9a1777ee2c0d8729a724b2d_prof);

    }

    public function getTemplateName()
    {
        return ":Switcher:switcher_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  27 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<img class=\"current-locale\" src=\"{{ asset('bundles/app/img/locale/'~current_locale~'.png') }}\">
{% for locale in locales %}
    <a href=\"{{ locale.link }}\" title=\"{{ locale.locale_current_language }}\"><img src=\"{{ asset('bundles/app/img/locale/'~locale.locale~'.png') }}\"></a>
{% endfor %}", ":Switcher:switcher_links.html.twig", "/var/www/zabava/app/Resources/views/Switcher/switcher_links.html.twig");
    }
}
