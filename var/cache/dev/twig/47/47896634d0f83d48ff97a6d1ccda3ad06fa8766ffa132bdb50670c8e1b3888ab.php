<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_7d1d500b15fc23bd463e8d90a6176a2d0563ef1abe8b54bf35b5e32ef39aeaca extends Twig_Template
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
        $__internal_b7d1afa5ea41f7bf9eb5031fd0dd51eb934ad28f84be575499c4cdd4fb37427e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d1afa5ea41f7bf9eb5031fd0dd51eb934ad28f84be575499c4cdd4fb37427e->enter($__internal_b7d1afa5ea41f7bf9eb5031fd0dd51eb934ad28f84be575499c4cdd4fb37427e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_b7d1afa5ea41f7bf9eb5031fd0dd51eb934ad28f84be575499c4cdd4fb37427e->leave($__internal_b7d1afa5ea41f7bf9eb5031fd0dd51eb934ad28f84be575499c4cdd4fb37427e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/zabava/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
