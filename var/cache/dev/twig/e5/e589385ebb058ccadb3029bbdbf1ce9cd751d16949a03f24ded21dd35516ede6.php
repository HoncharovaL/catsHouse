<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_388a2dc9214bc0f46d521d3dcf089db93b75557caa40ae389dd140415d7e920f extends Twig_Template
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
        $__internal_9293cc49df5bf10cc2e5eafe6ab5aec0e4988a8f81f5f8f314b1e2002a030cb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9293cc49df5bf10cc2e5eafe6ab5aec0e4988a8f81f5f8f314b1e2002a030cb4->enter($__internal_9293cc49df5bf10cc2e5eafe6ab5aec0e4988a8f81f5f8f314b1e2002a030cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_9293cc49df5bf10cc2e5eafe6ab5aec0e4988a8f81f5f8f314b1e2002a030cb4->leave($__internal_9293cc49df5bf10cc2e5eafe6ab5aec0e4988a8f81f5f8f314b1e2002a030cb4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
