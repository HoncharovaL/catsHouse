<?php

/* dogs/show.html.twig */
class __TwigTemplate_e224ebd3490e215c20ff09d9bde0fa829ffd973941c42398022f4dbe02c6c7d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "dogs/show.html.twig", 1);
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
        $__internal_5e4bcd41dc99ab40824c7d1e689353645223779dcbdbe2a5c57a674110d59f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e4bcd41dc99ab40824c7d1e689353645223779dcbdbe2a5c57a674110d59f27->enter($__internal_5e4bcd41dc99ab40824c7d1e689353645223779dcbdbe2a5c57a674110d59f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "dogs/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e4bcd41dc99ab40824c7d1e689353645223779dcbdbe2a5c57a674110d59f27->leave($__internal_5e4bcd41dc99ab40824c7d1e689353645223779dcbdbe2a5c57a674110d59f27_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_43a11cecef3d6a3825aef1763438a5a8487367bfb0aa2800e4daeee58263dfc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a11cecef3d6a3825aef1763438a5a8487367bfb0aa2800e4daeee58263dfc6->enter($__internal_43a11cecef3d6a3825aef1763438a5a8487367bfb0aa2800e4daeee58263dfc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/jcarousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_43a11cecef3d6a3825aef1763438a5a8487367bfb0aa2800e4daeee58263dfc6->leave($__internal_43a11cecef3d6a3825aef1763438a5a8487367bfb0aa2800e4daeee58263dfc6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b41d299c01a6ae1257f011340a73bf98de697bbbf175ba6d4f8db279fb808741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b41d299c01a6ae1257f011340a73bf98de697bbbf175ba6d4f8db279fb808741->enter($__internal_b41d299c01a6ae1257f011340a73bf98de697bbbf175ba6d4f8db279fb808741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class='container'>
        <div class='dogs-show-container'>

            <div class=\"dogs_photos row\">
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
        echo "            </div>
            <div class='dogs-about-container'>
                <div class='sex-img'>
                    <img src='";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/app/img/sex/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dog"]) || array_key_exists("dog", $context) ? $context["dog"] : (function () { throw new Twig_Error_Runtime('Variable "dog" does not exist.', 34, $this->getSourceContext()); })()), "sex", array())) . ".png")), "html", null, true);
        echo "'>
                </div>
                <div class='dog-name'>
                    ";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_translated')->getCallable(), array((isset($context["dog"]) || array_key_exists("dog", $context) ? $context["dog"] : (function () { throw new Twig_Error_Runtime('Variable "dog" does not exist.', 37, $this->getSourceContext()); })()), "name")), "html", null, true);
        echo "
                </div>
                <div class='dogs-description'>
                    ";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_translated')->getCallable(), array((isset($context["dog"]) || array_key_exists("dog", $context) ? $context["dog"] : (function () { throw new Twig_Error_Runtime('Variable "dog" does not exist.', 40, $this->getSourceContext()); })()), "description")), "html", null, true);
        echo "
                </div>
                <div>
                    ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("dogs.about.dogage"), "html", null, true);
        echo "
                    ";
        // line 44
        $context["age"] = $this->env->getExtension('AppBundle\Twig\Extension\AgeCalculatorExtension')->calculateAge(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dog"]) || array_key_exists("dog", $context) ? $context["dog"] : (function () { throw new Twig_Error_Runtime('Variable "dog" does not exist.', 44, $this->getSourceContext()); })()), "bdate", array()));
        // line 45
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("dogs.about.age", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["age"]) || array_key_exists("age", $context) ? $context["age"] : (function () { throw new Twig_Error_Runtime('Variable "age" does not exist.', 45, $this->getSourceContext()); })()), "y", array()), array("%month%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["age"]) || array_key_exists("age", $context) ? $context["age"] : (function () { throw new Twig_Error_Runtime('Variable "age" does not exist.', 45, $this->getSourceContext()); })()), "m", array()), "%year%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["age"]) || array_key_exists("age", $context) ? $context["age"] : (function () { throw new Twig_Error_Runtime('Variable "age" does not exist.', 45, $this->getSourceContext()); })()), "y", array())), "messages");
        // line 48
        echo "                </div>
                <div>
                    ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("dogs.about.birthday"), "html", null, true);
        echo "
                    ";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dog"]) || array_key_exists("dog", $context) ? $context["dog"] : (function () { throw new Twig_Error_Runtime('Variable "dog" does not exist.', 51, $this->getSourceContext()); })()), "bdate", array()), "d.m.Y"), "html", null, true);
        echo "
                </div>

                <div>
                    ";
        // line 55
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dog"]) || array_key_exists("dog", $context) ? $context["dog"] : (function () { throw new Twig_Error_Runtime('Variable "dog" does not exist.', 55, $this->getSourceContext()); })()), "dogTitles", array()))) {
            // line 56
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("dogs.about.titles"), "html", null, true);
            echo "

                        ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dog"]) || array_key_exists("dog", $context) ? $context["dog"] : (function () { throw new Twig_Error_Runtime('Variable "dog" does not exist.', 58, $this->getSourceContext()); })()), "dogTitles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
                // line 59
                echo "                            <div>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["title"], "titles", array()), "html", null, true);
                echo "</div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                    ";
        }
        // line 62
        echo "                </div>
                <div>
                    ";
        // line 64
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dog"]) || array_key_exists("dog", $context) ? $context["dog"] : (function () { throw new Twig_Error_Runtime('Variable "dog" does not exist.', 64, $this->getSourceContext()); })()), "dogVaccinations", array()))) {
            // line 65
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("dogs.about.vaccinations"), "html", null, true);
            echo "
                        ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dog"]) || array_key_exists("dog", $context) ? $context["dog"] : (function () { throw new Twig_Error_Runtime('Variable "dog" does not exist.', 66, $this->getSourceContext()); })()), "dogVaccinations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["vacc"]) {
                // line 67
                echo "                            <div>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["vacc"], "vaccinations", array()), "html", null, true);
                echo "</div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vacc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                    ";
        }
        // line 70
        echo "                </div>
                <div>
                    <a class=\"colorbox-form orange-button\" data-form-id=\"ask-question-form\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.askquestion"), "html", null, true);
        echo "</a>
                    ";
        // line 73
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 74
            echo "
                        <a class=\"orange-button\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogs_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dog"]) || array_key_exists("dog", $context) ? $context["dog"] : (function () { throw new Twig_Error_Runtime('Variable "dog" does not exist.', 75, $this->getSourceContext()); })()), "idDogs", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.edit"), "html", null, true);
            echo "</a>
                        ";
            // line 76
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 76, $this->getSourceContext()); })()), 'form_start');
            echo "
                        <input class=\"grey-button\" type=\"submit\" value=";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.delete"), "html", null, true);
            echo ">
                        ";
            // line 78
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 78, $this->getSourceContext()); })()), 'form_end');
            echo "

                    ";
        }
        // line 81
        echo "                </div>


            </div>
            ";
        // line 85
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dog"]) || array_key_exists("dog", $context) ? $context["dog"] : (function () { throw new Twig_Error_Runtime('Variable "dog" does not exist.', 85, $this->getSourceContext()); })()), "videos", array()))) {
            // line 86
            echo "                <div class='videos'>
                    ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dog"]) || array_key_exists("dog", $context) ? $context["dog"] : (function () { throw new Twig_Error_Runtime('Variable "dog" does not exist.', 87, $this->getSourceContext()); })()), "videos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
                // line 88
                echo "                        <div class='video-item'>";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["video"], "video", array());
                echo "</div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "                </div>
            ";
        }
        // line 92
        echo "        </div>
    </div>
    <div class=\"popup-form\" id=\"ask-question-form\">
        <div class=\"ask-question\">
            <h3>";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.askquestion"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"dogs-add-question\">
            ";
        // line 99
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 99, $this->getSourceContext()); })()), 'form_start');
        echo "
            <div>
                ";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), "klname", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reviews.label.name"))));
        echo "
                ";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()), "email", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reviews.label.email"))));
        echo "
                ";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->getSourceContext()); })()), "phone", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reviews.label.phone"))));
        echo "
            </div>
            <div class=\"question-form\">
                ";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 106, $this->getSourceContext()); })()), "question", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reviews.label.comment"), "rows" => 5)));
        echo "
            </div>

            <input class=\"orange-button\" type=\"submit\" value=";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.send"), "html", null, true);
        echo " />
            ";
        // line 110
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 110, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_b41d299c01a6ae1257f011340a73bf98de697bbbf175ba6d4f8db279fb808741->leave($__internal_b41d299c01a6ae1257f011340a73bf98de697bbbf175ba6d4f8db279fb808741_prof);

    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4307c64e95aed57a860546bdc6b44267813f47d7598b1929accce9c48c86b4c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4307c64e95aed57a860546bdc6b44267813f47d7598b1929accce9c48c86b4c8->enter($__internal_4307c64e95aed57a860546bdc6b44267813f47d7598b1929accce9c48c86b4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 115
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 116
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
        
        $__internal_4307c64e95aed57a860546bdc6b44267813f47d7598b1929accce9c48c86b4c8->leave($__internal_4307c64e95aed57a860546bdc6b44267813f47d7598b1929accce9c48c86b4c8_prof);

    }

    public function getTemplateName()
    {
        return "dogs/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 116,  330 => 115,  324 => 114,  313 => 110,  309 => 109,  303 => 106,  297 => 103,  293 => 102,  289 => 101,  284 => 99,  278 => 96,  272 => 92,  268 => 90,  259 => 88,  255 => 87,  252 => 86,  250 => 85,  244 => 81,  238 => 78,  234 => 77,  230 => 76,  224 => 75,  221 => 74,  219 => 73,  215 => 72,  211 => 70,  208 => 69,  199 => 67,  195 => 66,  190 => 65,  188 => 64,  184 => 62,  181 => 61,  172 => 59,  168 => 58,  162 => 56,  160 => 55,  153 => 51,  149 => 50,  145 => 48,  142 => 45,  140 => 44,  136 => 43,  130 => 40,  124 => 37,  118 => 34,  113 => 31,  104 => 24,  91 => 22,  87 => 21,  81 => 17,  79 => 16,  69 => 13,  62 => 8,  56 => 7,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
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

            <div class=\"dogs_photos row\">
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


            </div>
            {% if dog.videos|length %}
                <div class='videos'>
                    {% for video in dog.videos %}
                        <div class='video-item'>{{video.video|raw}}</div>
                    {% endfor %}
                </div>
            {% endif %}
        </div>
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
", "dogs/show.html.twig", "/var/www/zabava/app/Resources/views/dogs/show.html.twig");
    }
}
