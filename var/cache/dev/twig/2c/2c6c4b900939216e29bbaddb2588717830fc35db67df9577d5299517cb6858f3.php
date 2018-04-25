<?php

/* base.html.twig */
class __TwigTemplate_47511789abdcba084549063a6ccc2ac2dc85eb38a67aa134da22d123a8d59c24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'all' => array($this, 'block_all'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81334dc80e8e69500cec2b9fa9c819122b270d76c8d8355508bbad92061d5d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81334dc80e8e69500cec2b9fa9c819122b270d76c8d8355508bbad92061d5d0d->enter($__internal_81334dc80e8e69500cec2b9fa9c819122b270d76c8d8355508bbad92061d5d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"main-container\"> 
            ";
        // line 16
        $this->displayBlock('all', $context, $blocks);
        // line 98
        echo "    </div>
    ";
        // line 99
        $this->displayBlock('javascripts', $context, $blocks);
        // line 113
        echo "</body>
</html>
";
        
        $__internal_81334dc80e8e69500cec2b9fa9c819122b270d76c8d8355508bbad92061d5d0d->leave($__internal_81334dc80e8e69500cec2b9fa9c819122b270d76c8d8355508bbad92061d5d0d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_678cb90566427002a07485b18f48fbde34aae56009d726ec4a1a0a7d15d49379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_678cb90566427002a07485b18f48fbde34aae56009d726ec4a1a0a7d15d49379->enter($__internal_678cb90566427002a07485b18f48fbde34aae56009d726ec4a1a0a7d15d49379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("main.title"), "html", null, true);
        
        $__internal_678cb90566427002a07485b18f48fbde34aae56009d726ec4a1a0a7d15d49379->leave($__internal_678cb90566427002a07485b18f48fbde34aae56009d726ec4a1a0a7d15d49379_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8544405d45b411a87361d976d78a1cf99d1ee627007336dc917094285daab674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8544405d45b411a87361d976d78a1cf99d1ee627007336dc917094285daab674->enter($__internal_8544405d45b411a87361d976d78a1cf99d1ee627007336dc917094285daab674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/colorbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/jquery-ui.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/forms.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_8544405d45b411a87361d976d78a1cf99d1ee627007336dc917094285daab674->leave($__internal_8544405d45b411a87361d976d78a1cf99d1ee627007336dc917094285daab674_prof);

    }

    // line 16
    public function block_all($context, array $blocks = array())
    {
        $__internal_16a5f59a1c8db83239222d26863d5124b37c187674fce16f43eb394d6dfd304c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a5f59a1c8db83239222d26863d5124b37c187674fce16f43eb394d6dfd304c->enter($__internal_16a5f59a1c8db83239222d26863d5124b37c187674fce16f43eb394d6dfd304c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "all"));

        // line 17
        echo "                ";
        $this->displayBlock('header', $context, $blocks);
        // line 74
        echo "
            ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "            ";
        $this->displayBlock('footer', $context, $blocks);
        // line 97
        echo "        ";
        
        $__internal_16a5f59a1c8db83239222d26863d5124b37c187674fce16f43eb394d6dfd304c->leave($__internal_16a5f59a1c8db83239222d26863d5124b37c187674fce16f43eb394d6dfd304c_prof);

    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        $__internal_f20420107c8ee9cc53f05194176893fc9b78fa246cabe3037aadab09bf3377bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f20420107c8ee9cc53f05194176893fc9b78fa246cabe3037aadab09bf3377bb->enter($__internal_f20420107c8ee9cc53f05194176893fc9b78fa246cabe3037aadab09bf3377bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 18
        echo "                    <div class=\"header\">
                        <div class=\"container\">
                            <div class=\"header-top\">
                                <div class=\"logo\">
                                    <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/logo_orange.png"), "html", null, true);
        echo "\"/></a>
                                </div>
                                <div class=\"menu-item\"><a class='decorated-href' href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.link.main"), "html", null, true);
        echo "</a></div>
                                <div class=\"menu-item\"><a class='decorated-href' href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogs_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.link.our_dogs"), "html", null, true);
        echo "</a></div>
                                <div class=\"menu-item\"><a class='decorated-href' href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("litters_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.link.litters"), "html", null, true);
        echo "</a></div>
                                <div class=\"menu-item\"><a class='decorated-href' href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("news_index", array("newsType" => 2));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.link.advices"), "html", null, true);
        echo "</a></div>
                                <div class=\"menu-item\"><a class='decorated-href' href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("news_index", array("newsType" => 1));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.link.exhibitions"), "html", null, true);
        echo "</a></div>
                                <div class=\"menu-item\"><a class='decorated-href' href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.link.services"), "html", null, true);
        echo "</a></div>
                                <div class=\"menu-item\"><a class='decorated-href' href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogsphotos_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.link.gallery"), "html", null, true);
        echo "</a></div>
                                <div class=\"menu-item\"><a class='decorated-href' href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nursery_show", array("idNursery" => $this->env->getExtension('AppBundle\Twig\Extension\NurseryExtension')->getNurseryId())), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.link.reviews"), "html", null, true);
        echo "</a></div>
                                <div class=\"menu-item\">
                                    ";
        // line 33
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 34
            echo "                                        <div class=\" dropdownbtn\">
                                            ";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.admin_panel"), "html", null, true);
            echo "     
                                            <div class=\"dropdown-content\">
                                                <div class=\"dropdown-item\">
                                                    <a class=\"decorated-href\" href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vaccinations_index");
            echo "\" > ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("dogs.about.vaccinations"), "html", null, true);
            echo " </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"decorated-href\" href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("titles_index");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("dogs.about.titles"), "html", null, true);
            echo " </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"decorated-href\" href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comments_index");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.questions"), "html", null, true);
            echo " </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"decorated-href\" href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nursery_index");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.partners"), "html", null, true);
            echo " </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a  class=\"decorated-href\" href=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                                        ";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.link.logout"), "html", null, true);
            echo "
                                                    </a>
                                                </div>
                                            </div>
                                        </div>                                        
                                    ";
        } else {
            // line 57
            echo "                                        <a class=\"colorbox-ajax-form\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.link.login"), "html", null, true);
            echo "</a>
                                    ";
        }
        // line 59
        echo "                                </div>
                                <div class=\"locale-switcher\">";
        // line 60
        echo $this->env->getExtension('Lunetics\LocaleBundle\Twig\Extension\LocaleSwitcherExtension')->renderSwitcher();
        echo "</div>
                            </div>
                            <div class=\"header-bottom\">
                                ";
        // line 63
        $context["phonenumbers"] = $this->env->getExtension('AppBundle\Twig\Extension\NurseryExtension')->getPhoneNumbers();
        // line 64
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["phonenumbers"]) || array_key_exists("phonenumbers", $context) ? $context["phonenumbers"] : (function () { throw new Twig_Error_Runtime('Variable "phonenumbers" does not exist.', 64, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["phonenumber"]) {
            // line 65
            echo "                                    <div class=\"header-bottom-phonenumber\">
                                        <img src=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/call.png"), "html", null, true);
            echo "\"/>
                                        <span>";
            // line 67
            echo twig_escape_filter($this->env, $context["phonenumber"], "html", null, true);
            echo "</span>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phonenumber'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                            </div>
                        </div>
                    </div>
                ";
        
        $__internal_f20420107c8ee9cc53f05194176893fc9b78fa246cabe3037aadab09bf3377bb->leave($__internal_f20420107c8ee9cc53f05194176893fc9b78fa246cabe3037aadab09bf3377bb_prof);

    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        $__internal_b653cc71032749736ad5014d50e1c560288599359a197967ccf631b4ebfb8d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b653cc71032749736ad5014d50e1c560288599359a197967ccf631b4ebfb8d9d->enter($__internal_b653cc71032749736ad5014d50e1c560288599359a197967ccf631b4ebfb8d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b653cc71032749736ad5014d50e1c560288599359a197967ccf631b4ebfb8d9d->leave($__internal_b653cc71032749736ad5014d50e1c560288599359a197967ccf631b4ebfb8d9d_prof);

    }

    // line 76
    public function block_footer($context, array $blocks = array())
    {
        $__internal_65a9962197b167249d3af77195ebf29eb4440bf44dc216eb22011b56c58a7cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65a9962197b167249d3af77195ebf29eb4440bf44dc216eb22011b56c58a7cab->enter($__internal_65a9962197b167249d3af77195ebf29eb4440bf44dc216eb22011b56c58a7cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 77
        echo "                <div class=\"footer\">
                    <div class=\"container\">
                        <div class=\"footer-logo\">
                            <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/img/logo_grey.png"), "html", null, true);
        echo "\"/>
                        </div>
                        <hr/>
                        <div class=\"footer-contacts\">
                            ";
        // line 84
        $context["phonenumbers"] = $this->env->getExtension('AppBundle\Twig\Extension\NurseryExtension')->getPhoneNumbers();
        // line 85
        echo "                            <div class=\"footer-contacts-phone\">
                                ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["phonenumbers"]) || array_key_exists("phonenumbers", $context) ? $context["phonenumbers"] : (function () { throw new Twig_Error_Runtime('Variable "phonenumbers" does not exist.', 86, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["phonenumber"]) {
            // line 87
            echo "                                    <div>";
            echo twig_escape_filter($this->env, $context["phonenumber"], "html", null, true);
            echo "</div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phonenumber'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                            </div>
                            <div>";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\Extension\NurseryExtension')->getEmail(), "html", null, true);
        echo "</div>
                            <div>";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\Extension\NurseryExtension')->getAddress(), "html", null, true);
        echo "</div>
                            <div>";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\Extension\NurseryExtension')->getOwner(), "html", null, true);
        echo "</div>
                        </div>
                    </div>
                </div>
            ";
        
        $__internal_65a9962197b167249d3af77195ebf29eb4440bf44dc216eb22011b56c58a7cab->leave($__internal_65a9962197b167249d3af77195ebf29eb4440bf44dc216eb22011b56c58a7cab_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c78ea240098cad04d0bf62581c72a9f2c00bb90995c18a587b7a2826a3234e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c78ea240098cad04d0bf62581c72a9f2c00bb90995c18a587b7a2826a3234e8a->enter($__internal_c78ea240098cad04d0bf62581c72a9f2c00bb90995c18a587b7a2826a3234e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <script type='text/javascript'>
            \$('a.colorbox').colorbox({rel: 'group1', maxWidth: '95%', maxHeight: '95%'});
            \$('a.colorbox-form').each(function () {
                var html = \$('#' + \$(this).data('formId')).html();
                \$(this).colorbox({html: html, closeButton: false});
            });
            \$('a.colorbox-ajax-form').colorbox({closeButton: false});
            \$(\".tabs\").tabs();
        </script>
    ";
        
        $__internal_c78ea240098cad04d0bf62581c72a9f2c00bb90995c18a587b7a2826a3234e8a->leave($__internal_c78ea240098cad04d0bf62581c72a9f2c00bb90995c18a587b7a2826a3234e8a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 102,  384 => 101,  379 => 100,  373 => 99,  361 => 92,  357 => 91,  353 => 90,  350 => 89,  341 => 87,  337 => 86,  334 => 85,  332 => 84,  325 => 80,  320 => 77,  314 => 76,  303 => 75,  293 => 70,  284 => 67,  280 => 66,  277 => 65,  272 => 64,  270 => 63,  264 => 60,  261 => 59,  253 => 57,  244 => 51,  240 => 50,  232 => 47,  224 => 44,  216 => 41,  208 => 38,  202 => 35,  199 => 34,  197 => 33,  190 => 31,  184 => 30,  178 => 29,  172 => 28,  166 => 27,  160 => 26,  154 => 25,  148 => 24,  141 => 22,  135 => 18,  129 => 17,  122 => 97,  119 => 76,  117 => 75,  114 => 74,  111 => 17,  105 => 16,  96 => 10,  92 => 9,  88 => 8,  83 => 7,  77 => 6,  65 => 5,  56 => 113,  54 => 99,  51 => 98,  49 => 16,  41 => 12,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}{{\"main.title\"|trans}}{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"{{ asset('bundles/app/css/colorbox.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('bundles/app/css/jquery-ui.min.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('bundles/app/css/main.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('bundles/app/css/forms.css') }}\" rel=\"stylesheet\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div class=\"main-container\"> 
            {% block all %}
                {% block header %}
                    <div class=\"header\">
                        <div class=\"container\">
                            <div class=\"header-top\">
                                <div class=\"logo\">
                                    <a href=\"{{path(\"homepage\")}}\"><img src=\"{{ asset('bundles/app/img/logo_orange.png') }}\"/></a>
                                </div>
                                <div class=\"menu-item\"><a class='decorated-href' href=\"{{path(\"homepage\")}}\">{{\"header.link.main\"|trans}}</a></div>
                                <div class=\"menu-item\"><a class='decorated-href' href=\"{{path(\"dogs_index\")}}\">{{\"header.link.our_dogs\"|trans}}</a></div>
                                <div class=\"menu-item\"><a class='decorated-href' href=\"{{path(\"litters_index\")}}\">{{\"header.link.litters\"|trans}}</a></div>
                                <div class=\"menu-item\"><a class='decorated-href' href=\"{{path(\"news_index\", { 'newsType': 2})}}\">{{\"header.link.advices\"|trans}}</a></div>
                                <div class=\"menu-item\"><a class='decorated-href' href=\"{{path(\"news_index\", { 'newsType': 1})}}\">{{\"header.link.exhibitions\"|trans}}</a></div>
                                <div class=\"menu-item\"><a class='decorated-href' href=\"{{path(\"services_index\")}}\">{{\"header.link.services\"|trans}}</a></div>
                                <div class=\"menu-item\"><a class='decorated-href' href=\"{{path('dogsphotos_index')}}\">{{\"header.link.gallery\"|trans}}</a></div>
                                <div class=\"menu-item\"><a class='decorated-href' href=\"{{ path('nursery_show', { 'idNursery': get_nursery_id()}) }}\">{{\"header.link.reviews\"|trans}}</a></div>
                                <div class=\"menu-item\">
                                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                        <div class=\" dropdownbtn\">
                                            {{\"total.admin_panel\"|trans}}     
                                            <div class=\"dropdown-content\">
                                                <div class=\"dropdown-item\">
                                                    <a class=\"decorated-href\" href=\"{{path('vaccinations_index')}}\" > {{\"dogs.about.vaccinations\"|trans}} </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"decorated-href\" href=\"{{path('titles_index')}}\"> {{\"dogs.about.titles\"|trans}} </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"decorated-href\" href=\"{{path('comments_index')}}\"> {{\"total.questions\"|trans}} </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a class=\"decorated-href\" href=\"{{path('nursery_index')}}\"> {{\"total.partners\"|trans}} </a>
                                                </div>
                                                <div class=\"dropdown-item\">
                                                    <a  class=\"decorated-href\" href=\"{{path('fos_user_security_logout')}}\">
                                                        {{\"header.link.logout\"|trans}}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>                                        
                                    {% else %}
                                        <a class=\"colorbox-ajax-form\" href=\"{{path('fos_user_security_login')}}\">{{\"header.link.login\"|trans}}</a>
                                    {% endif %}
                                </div>
                                <div class=\"locale-switcher\">{{locale_switcher()}}</div>
                            </div>
                            <div class=\"header-bottom\">
                                {% set phonenumbers = get_nursery_phonenumbers() %}
                                {% for phonenumber in phonenumbers %}
                                    <div class=\"header-bottom-phonenumber\">
                                        <img src=\"{{ asset('bundles/app/img/call.png') }}\"/>
                                        <span>{{phonenumber}}</span>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                {% endblock %}

            {% block body %}{% endblock %}
            {% block footer %}
                <div class=\"footer\">
                    <div class=\"container\">
                        <div class=\"footer-logo\">
                            <img src=\"{{ asset('bundles/app/img/logo_grey.png') }}\"/>
                        </div>
                        <hr/>
                        <div class=\"footer-contacts\">
                            {% set phonenumbers = get_nursery_phonenumbers() %}
                            <div class=\"footer-contacts-phone\">
                                {% for phonenumber in phonenumbers %}
                                    <div>{{phonenumber}}</div>
                                {% endfor %}
                            </div>
                            <div>{{ get_nursery_email() }}</div>
                            <div>{{ get_nursery_address() }}</div>
                            <div>{{ get_nursery_owner() }}</div>
                        </div>
                    </div>
                </div>
            {% endblock %}
        {% endblock %}
    </div>
    {% block javascripts %}
        <script type=\"text/javascript\" src=\"{{asset(\"bundles/app/js/jquery-3.2.1.min.js\")}}\"></script>
        <script type=\"text/javascript\" src=\"{{asset(\"bundles/app/js/jquery.colorbox-min.js\")}}\"></script>
        <script type=\"text/javascript\" src=\"{{asset(\"bundles/app/js/jquery-ui.min.js\")}}\"></script>
        <script type='text/javascript'>
            \$('a.colorbox').colorbox({rel: 'group1', maxWidth: '95%', maxHeight: '95%'});
            \$('a.colorbox-form').each(function () {
                var html = \$('#' + \$(this).data('formId')).html();
                \$(this).colorbox({html: html, closeButton: false});
            });
            \$('a.colorbox-ajax-form').colorbox({closeButton: false});
            \$(\".tabs\").tabs();
        </script>
    {% endblock %}
</body>
</html>
", "base.html.twig", "/var/www/zabava/app/Resources/views/base.html.twig");
    }
}
