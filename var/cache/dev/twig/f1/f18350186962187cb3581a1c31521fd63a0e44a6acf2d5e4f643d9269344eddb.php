<?php

/* :Vich:fields.html.twig */
class __TwigTemplate_a4d387d5d72f1ebbedcdb94bbc8e9a90f356dd372f6fb6839631abcde88fed67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b34b2979af36aaa04bf272f25d253f28ea4b675f0536d1979664318d0daef03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b34b2979af36aaa04bf272f25d253f28ea4b675f0536d1979664318d0daef03->enter($__internal_2b34b2979af36aaa04bf272f25d253f28ea4b675f0536d1979664318d0daef03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Vich:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_2b34b2979af36aaa04bf272f25d253f28ea4b675f0536d1979664318d0daef03->leave($__internal_2b34b2979af36aaa04bf272f25d253f28ea4b675f0536d1979664318d0daef03_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_8cc560679b8bab173822be51d95761b069f0f29938a4d34dec9a0202ee75c685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc560679b8bab173822be51d95761b069f0f29938a4d34dec9a0202ee75c685->enter($__internal_8cc560679b8bab173822be51d95761b069f0f29938a4d34dec9a0202ee75c685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8cc560679b8bab173822be51d95761b069f0f29938a4d34dec9a0202ee75c685->leave($__internal_8cc560679b8bab173822be51d95761b069f0f29938a4d34dec9a0202ee75c685_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_399b96db2af7a043e25a9b4215217b76d6cb9eafe7f35908bc8db65b2ee380b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399b96db2af7a043e25a9b4215217b76d6cb9eafe7f35908bc8db65b2ee380b8->enter($__internal_399b96db2af7a043e25a9b4215217b76d6cb9eafe7f35908bc8db65b2ee380b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        ob_start();
        // line 8
        echo "    <div class=\"vich-file\">
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "file", array()), 'widget');
        echo "
        ";
        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 11
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "delete", array()), 'row');
            echo "
        ";
        }
        // line 13
        echo "
        ";
        // line 14
        if ((array_key_exists("download_uri", $context) && (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 14, $this->getSourceContext()); })()))) {
            // line 15
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 17
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_399b96db2af7a043e25a9b4215217b76d6cb9eafe7f35908bc8db65b2ee380b8->leave($__internal_399b96db2af7a043e25a9b4215217b76d6cb9eafe7f35908bc8db65b2ee380b8_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_ee925c5a939b02178c5e8aa38a75a273e433789b37255f052a67da1f207e75c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee925c5a939b02178c5e8aa38a75a273e433789b37255f052a67da1f207e75c2->enter($__internal_ee925c5a939b02178c5e8aa38a75a273e433789b37255f052a67da1f207e75c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ee925c5a939b02178c5e8aa38a75a273e433789b37255f052a67da1f207e75c2->leave($__internal_ee925c5a939b02178c5e8aa38a75a273e433789b37255f052a67da1f207e75c2_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_7d03f668a10b853f2eae1c06609401ccfc61630fc7a767089094aacad2b56ecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d03f668a10b853f2eae1c06609401ccfc61630fc7a767089094aacad2b56ecc->enter($__internal_7d03f668a10b853f2eae1c06609401ccfc61630fc7a767089094aacad2b56ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        ob_start();
        // line 28
        echo "    <div class=\"vich-image\">
        ";
        // line 29
        if ((array_key_exists("download_uri", $context) && (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 29, $this->getSourceContext()); })()))) {
            // line 30
            echo "        <div>
            <a class=\"colorbox\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 31, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
                <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 32, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"\" />
            </a>
        </div>
        ";
        }
        // line 36
        echo "        <div class=\"upload-button\">
            <label class=\"fileContainer\">
                ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.select_file"), "html", null, true);
        echo "
                ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), "file", array()), 'widget');
        echo "
            </label>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7d03f668a10b853f2eae1c06609401ccfc61630fc7a767089094aacad2b56ecc->leave($__internal_7d03f668a10b853f2eae1c06609401ccfc61630fc7a767089094aacad2b56ecc_prof);

    }

    public function getTemplateName()
    {
        return ":Vich:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  158 => 39,  154 => 38,  150 => 36,  143 => 32,  139 => 31,  136 => 30,  134 => 29,  131 => 28,  129 => 27,  123 => 26,  116 => 23,  114 => 22,  108 => 21,  99 => 17,  91 => 15,  89 => 14,  86 => 13,  80 => 11,  78 => 10,  74 => 9,  71 => 8,  69 => 7,  63 => 6,  56 => 3,  54 => 2,  48 => 1,  41 => 26,  38 => 25,  36 => 21,  33 => 20,  31 => 6,  28 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"vich-file\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"vich-image\">
        {% if download_uri is defined and download_uri %}
        <div>
            <a class=\"colorbox\" href=\"{{ download_uri }}\">
                <img src=\"{{ download_uri }}\" alt=\"\" />
            </a>
        </div>
        {% endif %}
        <div class=\"upload-button\">
            <label class=\"fileContainer\">
                {{'total.select_file'|trans}}
                {{ form_widget(form.file) }}
            </label>
        </div>
    </div>
{% endspaceless %}
{% endblock %}
", ":Vich:fields.html.twig", "/var/www/zabava/app/Resources/views/Vich/fields.html.twig");
    }
}
