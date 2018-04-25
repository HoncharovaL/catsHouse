<?php

/* :dogs:show.html.twig */
class __TwigTemplate_d620d4dc358e0b28f058ffb3d336f6fd8c4d7e0016ccc690e5e2a60edc950f22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":dogs:show.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_e2e16fdd64fa20478264140046676e1793ae5a50352f30de6afff190836e5284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e16fdd64fa20478264140046676e1793ae5a50352f30de6afff190836e5284->enter($__internal_e2e16fdd64fa20478264140046676e1793ae5a50352f30de6afff190836e5284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dogs:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2e16fdd64fa20478264140046676e1793ae5a50352f30de6afff190836e5284->leave($__internal_e2e16fdd64fa20478264140046676e1793ae5a50352f30de6afff190836e5284_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d3765ce4f62fcf3d7fe42e77605fa4bcfe7267469ae4647651cc0d7c73ae3ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3765ce4f62fcf3d7fe42e77605fa4bcfe7267469ae4647651cc0d7c73ae3ec8->enter($__internal_d3765ce4f62fcf3d7fe42e77605fa4bcfe7267469ae4647651cc0d7c73ae3ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/jcarousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_d3765ce4f62fcf3d7fe42e77605fa4bcfe7267469ae4647651cc0d7c73ae3ec8->leave($__internal_d3765ce4f62fcf3d7fe42e77605fa4bcfe7267469ae4647651cc0d7c73ae3ec8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_47bfd34a59dad3e2ffaa20a8ac335870addd784d3c7390d203ecfeaa32994bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47bfd34a59dad3e2ffaa20a8ac335870addd784d3c7390d203ecfeaa32994bfb->enter($__internal_47bfd34a59dad3e2ffaa20a8ac335870addd784d3c7390d203ecfeaa32994bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class='container'>
        <div class='dogs-show-container'>

            <div class=\"dogs_photos\">
                <div class='dogs-photo-container'>
                    <a class='colorbox group1' href='";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["photo_path"]) || array_key_exists("photo_path", $context) ? $context["photo_path"] : (function () { throw new Twig_Error_Runtime('Variable "photo_path" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dog"]) || array_key_exists("dog", $context) ? $context["dog"] : (function () { throw new Twig_Error_Runtime('Variable "dog" does not exist.', 13, $this->getSourceContext()); })()), "photo", array()), "html", null, true);
        echo "'><img class='dogs-photo' src=\"";
        echo twig_escape_filter($this->env, (isset($context["photo_path"]) || array_key_exists("photo_path", $context) ? $context["photo_path"] : (function () { throw new Twig_Error_Runtime('Variable "photo_path" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dog"]) || array_key_exists("dog", $context) ? $context["dog"] : (function () { throw new Twig_Error_Runtime('Variable "dog" does not exist.', 13, $this->getSourceContext()); })()), "photo", array()), "html", null, true);
        echo "\" ></a>
                </div>

                ";
        // line 16
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dog"]) || array_key_exists("dog", $context) ? $context["dog"] : (function () { throw new Twig_Error_Runtime('Variable "dog" does not exist.', 16, $this->getSourceContext()); })()), "dogsPhotos", array()))) {
            // line 17
            echo "                    <div class=\"dogs-other-photos-container\">
                        <div class=\"dogs-other-photos-wrapper\">
                            <div class=\"dogs-photo-jcarousel\" data-jcarousel=\"true\">
                                <ul style=\"left: 0px; top: 0px;\">
                                    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dog"]) || array_key_exists("dog", $context) ? $context["dog"] : (function () { throw new Twig_Error_Runtime('Variable "dog" does not exist.', 21, $this->getSourceContext()); })()), "dogsPhotos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 22
                echo "                                        <li><a class='colorbox group1' href='";
                echo twig_escape_filter($this->env, (isset($context["photo_path"]) || array_key_exists("photo_path", $context) ? $context["photo_path"] : (function () { throw new Twig_Error_Runtime('Variable "photo_path" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["photo"], "photo", array()), "html", null, true);
                echo "'><img src=\"";
                echo twig_escape_filter($this->env, (isset($context["photo_path"]) || array_key_exists("photo_path", $context) ? $context["photo_path"] : (function () { throw new Twig_Error_Runtime('Variable "photo_path" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["photo"], "photo", array()), "html", null, true);
                echo "\"/></a></li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                                </ul>
                            </div>
                            <a href=\"#\" class=\"jcarousel-control-prev inactive\" data-jcarouselcontrol=\"true\">‹</a>
                            <a href=\"#\" class=\"jcarousel-control-next\" data-jcarouselcontrol=\"true\">›</a>
                        </div>
                    </div>
                ";
        }
        // line 31
        echo "
            </div>
            <div class='dogs-about-container'>
                <div class='sex-img'>
                    <img src='";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/app/img/sex/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dog"]) || array_key_exists("dog", $context) ? $context["dog"] : (function () { throw new Twig_Error_Runtime('Variable "dog" does not exist.', 35, $this->getSourceContext()); })()), "sex", array())) . ".png")), "html", null, true);
        echo "'>
                </div>
                <div class='dog-name'>
                    ";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_translated')->getCallable(), array((isset($context["dog"]) || array_key_exists("dog", $context) ? $context["dog"] : (function () { throw new Twig_Error_Runtime('Variable "dog" does not exist.', 38, $this->getSourceContext()); })()), "name")), "html", null, true);
        echo "
                </div>
                <div class='dogs-description'>
                    ";
        // line 41
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_translated')->getCallable(), array((isset($context["dog"]) || array_key_exists("dog", $context) ? $context["dog"] : (function () { throw new Twig_Error_Runtime('Variable "dog" does not exist.', 41, $this->getSourceContext()); })()), "description")), "html", null, true);
        echo "
                </div>
                <div>
                    ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("dogs.about.dogage"), "html", null, true);
        echo "
                    ";
        // line 45
        $context["age"] = $this->env->getExtension('AppBundle\Twig\Extension\AgeCalculatorExtension')->calculateAge(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dog"]) || array_key_exists("dog", $context) ? $context["dog"] : (function () { throw new Twig_Error_Runtime('Variable "dog" does not exist.', 45, $this->getSourceContext()); })()), "bdate", array()));
        // line 46
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("dogs.about.age", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["age"]) || array_key_exists("age", $context) ? $context["age"] : (function () { throw new Twig_Error_Runtime('Variable "age" does not exist.', 46, $this->getSourceContext()); })()), "y", array()), array("%month%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["age"]) || array_key_exists("age", $context) ? $context["age"] : (function () { throw new Twig_Error_Runtime('Variable "age" does not exist.', 46, $this->getSourceContext()); })()), "m", array()), "%year%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["age"]) || array_key_exists("age", $context) ? $context["age"] : (function () { throw new Twig_Error_Runtime('Variable "age" does not exist.', 46, $this->getSourceContext()); })()), "y", array())), "messages");
        // line 49
        echo "                </div>
                <div>
                    ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("dogs.about.birthday"), "html", null, true);
        echo "
                    ";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dog"]) || array_key_exists("dog", $context) ? $context["dog"] : (function () { throw new Twig_Error_Runtime('Variable "dog" does not exist.', 52, $this->getSourceContext()); })()), "bdate", array()), "d.m.Y"), "html", null, true);
        echo "
                </div>

                <div>
                    ";
        // line 56
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dog"]) || array_key_exists("dog", $context) ? $context["dog"] : (function () { throw new Twig_Error_Runtime('Variable "dog" does not exist.', 56, $this->getSourceContext()); })()), "dogTitles", array()))) {
            // line 57
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("dogs.about.titles"), "html", null, true);
            echo "

                        ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dog"]) || array_key_exists("dog", $context) ? $context["dog"] : (function () { throw new Twig_Error_Runtime('Variable "dog" does not exist.', 59, $this->getSourceContext()); })()), "dogTitles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
                // line 60
                echo "                            <div>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["title"], "titles", array()), "html", null, true);
                echo "</div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                    ";
        }
        // line 63
        echo "                </div>
                <div>
                    ";
        // line 65
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dog"]) || array_key_exists("dog", $context) ? $context["dog"] : (function () { throw new Twig_Error_Runtime('Variable "dog" does not exist.', 65, $this->getSourceContext()); })()), "dogVaccinations", array()))) {
            // line 66
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("dogs.about.vaccinations"), "html", null, true);
            echo "
                        ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dog"]) || array_key_exists("dog", $context) ? $context["dog"] : (function () { throw new Twig_Error_Runtime('Variable "dog" does not exist.', 67, $this->getSourceContext()); })()), "dogVaccinations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["vacc"]) {
                // line 68
                echo "                            <div>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["vacc"], "vaccinations", array()), "html", null, true);
                echo "</div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vacc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                    ";
        }
        // line 71
        echo "                </div>
                <div>
                    <a class=\"colorbox-form orange-button\" data-form-id=\"ask-question-form\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.askquestion"), "html", null, true);
        echo "</a>
                ";
        // line 74
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 75
            echo "                    
                        <a class=\"orange-button\" href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogs_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dog"]) || array_key_exists("dog", $context) ? $context["dog"] : (function () { throw new Twig_Error_Runtime('Variable "dog" does not exist.', 76, $this->getSourceContext()); })()), "idDogs", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.edit"), "html", null, true);
            echo "</a>
                        ";
            // line 77
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 77, $this->getSourceContext()); })()), 'form_start');
            echo "
                        <input class=\"grey-button\" type=\"submit\" value=";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.delete"), "html", null, true);
            echo ">
                        ";
            // line 79
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 79, $this->getSourceContext()); })()), 'form_end');
            echo "
                    
                ";
        }
        // line 82
        echo "                </div>
                
                <div class=\"popup-form\" id=\"ask-question-form\">
                    <div class=\"ask-question\">
                        <h3>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.askquestion"), "html", null, true);
        echo "</h3>
                    </div>
                    <div class=\"dogs-add-question\">
                        ";
        // line 89
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 89, $this->getSourceContext()); })()), 'form_start');
        echo "
                        <div>
                            ";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 91, $this->getSourceContext()); })()), "klname", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reviews.label.name"))));
        echo "
                            ";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 92, $this->getSourceContext()); })()), "email", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reviews.label.email"))));
        echo "
                            ";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->getSourceContext()); })()), "phone", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reviews.label.phone"))));
        echo "
                        </div>
                        <div class=\"question-form\">
                            ";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 96, $this->getSourceContext()); })()), "question", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reviews.label.comment"), "rows" => 5)));
        echo "
                        </div>

                        <input class=\"orange-button\" type=\"submit\" value=";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.send"), "html", null, true);
        echo " />
                        ";
        // line 100
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->getSourceContext()); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_47bfd34a59dad3e2ffaa20a8ac335870addd784d3c7390d203ecfeaa32994bfb->leave($__internal_47bfd34a59dad3e2ffaa20a8ac335870addd784d3c7390d203ecfeaa32994bfb_prof);

    }

    // line 107
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8dd5dc1bf6eb1f75f50d45b5654282198cbfe53a5c996aba99fb0c446a869d19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd5dc1bf6eb1f75f50d45b5654282198cbfe53a5c996aba99fb0c446a869d19->enter($__internal_8dd5dc1bf6eb1f75f50d45b5654282198cbfe53a5c996aba99fb0c446a869d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 108
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/jquery.jcarousel.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(function () {
            \$('.dogs-photo-jcarousel').jcarousel({
                wrap: 'circular'
            });

            \$('.jcarousel-control-prev')
                    .on('jcarouselcontrol:active', function () {
                        \$(this).removeClass('inactive');
                    })
                    .on('jcarouselcontrol:inactive', function () {
                        \$(this).addClass('inactive');
                    })
                    .jcarouselControl({
                        target: '-=1'
                    });

            \$('.jcarousel-control-next')
                    .on('jcarouselcontrol:active', function () {
                        \$(this).removeClass('inactive');
                    })
                    .on('jcarouselcontrol:inactive', function () {
                        \$(this).addClass('inactive');
                    })
                    .jcarouselControl({
                        target: '+=1'
                    });
        });
    </script>
";
        
        $__internal_8dd5dc1bf6eb1f75f50d45b5654282198cbfe53a5c996aba99fb0c446a869d19->leave($__internal_8dd5dc1bf6eb1f75f50d45b5654282198cbfe53a5c996aba99fb0c446a869d19_prof);

    }

    public function getTemplateName()
    {
        return ":dogs:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 109,  306 => 108,  300 => 107,  286 => 100,  282 => 99,  276 => 96,  270 => 93,  266 => 92,  262 => 91,  257 => 89,  251 => 86,  245 => 82,  239 => 79,  235 => 78,  231 => 77,  225 => 76,  222 => 75,  220 => 74,  216 => 73,  212 => 71,  209 => 70,  200 => 68,  196 => 67,  191 => 66,  189 => 65,  185 => 63,  182 => 62,  173 => 60,  169 => 59,  163 => 57,  161 => 56,  154 => 52,  150 => 51,  146 => 49,  143 => 46,  141 => 45,  137 => 44,  131 => 41,  125 => 38,  119 => 35,  113 => 31,  104 => 24,  91 => 22,  87 => 21,  81 => 17,  79 => 16,  69 => 13,  62 => 8,  56 => 7,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('bundles/app/css/jcarousel.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
    <div class='container'>
        <div class='dogs-show-container'>

            <div class=\"dogs_photos\">
                <div class='dogs-photo-container'>
                    <a class='colorbox group1' href='{{photo_path}}{{dog.photo}}'><img class='dogs-photo' src=\"{{photo_path}}{{dog.photo}}\" ></a>
                </div>

                {% if dog.dogsPhotos|length %}
                    <div class=\"dogs-other-photos-container\">
                        <div class=\"dogs-other-photos-wrapper\">
                            <div class=\"dogs-photo-jcarousel\" data-jcarousel=\"true\">
                                <ul style=\"left: 0px; top: 0px;\">
                                    {% for photo in dog.dogsPhotos %}
                                        <li><a class='colorbox group1' href='{{photo_path}}{{photo.photo}}'><img src=\"{{photo_path}}{{photo.photo}}\"/></a></li>
                                            {% endfor %}
                                </ul>
                            </div>
                            <a href=\"#\" class=\"jcarousel-control-prev inactive\" data-jcarouselcontrol=\"true\">‹</a>
                            <a href=\"#\" class=\"jcarousel-control-next\" data-jcarouselcontrol=\"true\">›</a>
                        </div>
                    </div>
                {% endif %}

            </div>
            <div class='dogs-about-container'>
                <div class='sex-img'>
                    <img src='{{ asset('bundles/app/img/sex/'~dog.sex~'.png') }}'>
                </div>
                <div class='dog-name'>
                    {{ get_translated(dog, 'name') }}
                </div>
                <div class='dogs-description'>
                    {{ get_translated(dog, 'description') }}
                </div>
                <div>
                    {{\"dogs.about.dogage\"|trans}}
                    {% set age = calculate_age(dog.bdate) %}
                    {% transchoice age.y with {'%month%': age.m, '%year%': age.y} %}
                    dogs.about.age
                    {% endtranschoice %}
                </div>
                <div>
                    {{\"dogs.about.birthday\"|trans}}
                    {{ dog.bdate |date('d.m.Y') }}
                </div>

                <div>
                    {% if dog.dogTitles | length %}
                        {{\"dogs.about.titles\"|trans}}

                        {% for title in dog.dogTitles %}
                            <div>{{title.titles}}</div>
                        {% endfor %}
                    {% endif%}
                </div>
                <div>
                    {% if dog.dogVaccinations | length %}
                        {{\"dogs.about.vaccinations\"|trans}}
                        {% for vacc in dog.dogVaccinations %}
                            <div>{{vacc.vaccinations}}</div>
                        {% endfor %}
                    {% endif %}
                </div>
                <div>
                    <a class=\"colorbox-form orange-button\" data-form-id=\"ask-question-form\">{{'total.askquestion'|trans}}</a>
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    
                        <a class=\"orange-button\" href=\"{{ path('dogs_edit', { 'id': dog.idDogs }) }}\">{{\"total.edit\"|trans}}</a>
                        {{ form_start(delete_form) }}
                        <input class=\"grey-button\" type=\"submit\" value={{\"total.delete\"|trans}}>
                        {{ form_end(delete_form) }}
                    
                {% endif %}
                </div>
                
                <div class=\"popup-form\" id=\"ask-question-form\">
                    <div class=\"ask-question\">
                        <h3>{{'total.askquestion'|trans}}</h3>
                    </div>
                    <div class=\"dogs-add-question\">
                        {{ form_start(form) }}
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
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    {{parent()}}
    <script type=\"text/javascript\" src=\"{{asset(\"bundles/app/js/jquery.jcarousel.min.js\")}}\"></script>
    <script type=\"text/javascript\">
        \$(function () {
            \$('.dogs-photo-jcarousel').jcarousel({
                wrap: 'circular'
            });

            \$('.jcarousel-control-prev')
                    .on('jcarouselcontrol:active', function () {
                        \$(this).removeClass('inactive');
                    })
                    .on('jcarouselcontrol:inactive', function () {
                        \$(this).addClass('inactive');
                    })
                    .jcarouselControl({
                        target: '-=1'
                    });

            \$('.jcarousel-control-next')
                    .on('jcarouselcontrol:active', function () {
                        \$(this).removeClass('inactive');
                    })
                    .on('jcarouselcontrol:inactive', function () {
                        \$(this).addClass('inactive');
                    })
                    .jcarouselControl({
                        target: '+=1'
                    });
        });
    </script>
{% endblock %}
", ":dogs:show.html.twig", "/var/www/zabava/app/Resources/views/dogs/show.html.twig");
    }
}
