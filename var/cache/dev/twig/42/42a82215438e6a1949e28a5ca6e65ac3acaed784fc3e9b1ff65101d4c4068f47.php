<?php

/* :dogs:edit.html.twig */
class __TwigTemplate_1c8d252585adb0489c2d7e6bf8853015f6a53fee8f4a1bdae3749e9788030ee8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":dogs:edit.html.twig", 1);
        $this->blocks = array(
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
        $__internal_f6de76cfe2a3bba815ca3fcd72731e40cb75f26026cac90dab841c030ccbe922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6de76cfe2a3bba815ca3fcd72731e40cb75f26026cac90dab841c030ccbe922->enter($__internal_f6de76cfe2a3bba815ca3fcd72731e40cb75f26026cac90dab841c030ccbe922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":dogs:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6de76cfe2a3bba815ca3fcd72731e40cb75f26026cac90dab841c030ccbe922->leave($__internal_f6de76cfe2a3bba815ca3fcd72731e40cb75f26026cac90dab841c030ccbe922_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_866a0cc23dc8ced614078f78399340b2f14777eb3c74264f10a6a4d23a57af53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866a0cc23dc8ced614078f78399340b2f14777eb3c74264f10a6a4d23a57af53->enter($__internal_866a0cc23dc8ced614078f78399340b2f14777eb3c74264f10a6a4d23a57af53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"dogs-edit container\">
        <div class=\"row\">
            <div class=\"button-container left col-4\">
                <a class=\"grey-button\" href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dogs_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.back"), "html", null, true);
        echo "</a>
            </div>
            <div class=\"button-container col-8\">
                ";
        // line 10
        if (array_key_exists("delete_form", $context)) {
            // line 11
            echo "                    ";
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 11, $this->getSourceContext()); })()), 'form_start');
            echo "
                    <input class=\"grey-button\" type=\"submit\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.delete"), "html", null, true);
            echo "\">
                    ";
            // line 13
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 13, $this->getSourceContext()); })()), 'form_end');
            echo "
                ";
        }
        // line 15
        echo "                <input class=\"orange-button\" onclick=\"\$('#main-form').submit();\" type=\"submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.save"), "html", null, true);
        echo "\"/>
            </div>
        </div>
        ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), 'form_start', array("attr" => array("id" => "main-form")));
        echo "
        <div class=\"tabs\">
            <ul>
                <li><a href=\"#tab-main-info\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.main_info"), "html", null, true);
        echo "</a></li>
                <li><a href=\"#tab-titles\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "dogTitles", array()), "vars", array()), "label", array())), "html", null, true);
        echo "</a></li>
                <li><a href=\"#tab-vaccinations\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "dogVaccinations", array()), "vars", array()), "label", array())), "html", null, true);
        echo "</a></li>
                <li><a href=\"#tab-photos\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "dogsPhotos", array()), "vars", array()), "label", array())), "html", null, true);
        echo "</a></li>
                <li><a href=\"#tab-videos\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), "videos", array()), "vars", array()), "label", array())), "html", null, true);
        echo "</a></li>
            </ul>
            <div class=\"dog-info row\" id=\"tab-main-info\">
                <div class=\"main-photo col-4\">
                    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "photoFile", array()), 'widget');
        echo "
                </div>
                <div class=\"main-info col-6\">
                    ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), "name", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "nameEn", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "description", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), "descriptionEn", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "bdate", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), "sex", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), "state", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), "quality", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                    ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), "litters", array()), 'row', array("attr" => array("class" => "parent-width")));
        echo "
                </div>
            </div>
            <div class=\"embedded-form titles\" id=\"tab-titles\">
                <ul class=\"form-collection-container\" data-count=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->getSourceContext()); })()), "dogTitles", array())), "html", null, true);
        echo "\" id=\"titles-fields-list\"
                    data-prototype=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->getSourceContext()); })()), "dogTitles", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->getSourceContext()); })()), "dogTitles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["dogTitle"]) {
            // line 47
            echo "                        <li>
                            ";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["dogTitle"], "titles", array()), 'row');
            echo "
                            ";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["dogTitle"], "description", array()), 'row');
            echo "
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dogTitle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                </ul>
                <div class=\"add-button-container\">
                    <a href=\"#\" class=\"add-new-element\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.add_title"), "html", null, true);
        echo "</a>
                </div>
            </div>
            ";
        // line 57
        twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 57, $this->getSourceContext()); })()), "dogTitles", array()), "setRendered", array());
        // line 58
        echo "
            <div class=\"embedded-form vaccinations\" id=\"tab-vaccinations\">
                <ul class=\"form-collection-container\" data-count=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->getSourceContext()); })()), "dogVaccinations", array())), "html", null, true);
        echo "\" id=\"vaccinations-fields-list\"
                    data-prototype=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), "dogVaccinations", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
                    ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), "dogVaccinations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["dogVaccination"]) {
            // line 63
            echo "                        <li>
                            ";
            // line 64
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["dogVaccination"], "vaccinations", array()), 'row');
            echo "
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dogVaccination'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                </ul>
                <div class=\"add-button-container\">
                    <a href=\"#\" class=\"add-new-element\" >";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.add_vaccination"), "html", null, true);
        echo "</a>
                </div>
            </div>
            ";
        // line 72
        twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->getSourceContext()); })()), "dogVaccinations", array()), "setRendered", array());
        // line 73
        echo "
            <div class=\"embedded-form photos\" id=\"tab-photos\">
                <ul class=\"form-collection-container\" data-count=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), "dogsPhotos", array())), "html", null, true);
        echo "\"
                    data-prototype=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), "dogsPhotos", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
                    ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->getSourceContext()); })()), "dogsPhotos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["dogsPhoto"]) {
            // line 78
            echo "                        <li>
                            ";
            // line 79
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["dogsPhoto"], "photoFile", array()), 'row');
            echo "
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dogsPhoto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                </ul>
                <div class=\"add-button-container\">
                    <a href=\"#\" class=\"add-new-element\">";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.add_photo"), "html", null, true);
        echo "</a>
                </div>
            </div>
            ";
        // line 87
        twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 87, $this->getSourceContext()); })()), "dogsPhotos", array()), "setRendered", array());
        // line 88
        echo "
            <div class=\"embedded-form videos\" id=\"tab-videos\">
                <ul class=\"form-collection-container\" data-count=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 90, $this->getSourceContext()); })()), "videos", array())), "html", null, true);
        echo "\" id=\"videos-fields-list\"
                    data-prototype=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 91, $this->getSourceContext()); })()), "videos", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
                    ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 92, $this->getSourceContext()); })()), "videos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 93
            echo "                        <li>
                            ";
            // line 94
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["video"], "video", array()), 'row');
            echo "
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                </ul>
                <div class=\"add-button-container\">
                    <a href=\"#\" class=\"add-new-element\">";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.add_video"), "html", null, true);
        echo "</a>
                </div>
            </div>
            ";
        // line 102
        twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()), "videos", array()), "setRendered", array());
        // line 103
        echo "        </div>

        ";
        // line 105
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 105, $this->getSourceContext()); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_866a0cc23dc8ced614078f78399340b2f14777eb3c74264f10a6a4d23a57af53->leave($__internal_866a0cc23dc8ced614078f78399340b2f14777eb3c74264f10a6a4d23a57af53_prof);

    }

    // line 109
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_33d8ecffcdf40cc05212dc8e70bbe0688b942537cf88513f0b195c8afd77b6e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d8ecffcdf40cc05212dc8e70bbe0688b942537cf88513f0b195c8afd77b6e5->enter($__internal_33d8ecffcdf40cc05212dc8e70bbe0688b942537cf88513f0b195c8afd77b6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 110
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.embedded-form .add-new-element').on('click', function (e) {
                e.preventDefault();

                var list = \$(this).parents('.embedded-form').find('.form-collection-container');

                // grab the prototype template
                var newWidget = list.attr('data-prototype');
                var count = list.data('count');
                newWidget = newWidget.replace(/__name__/g, count);
                count++;
                list.data('count', count);

                // create a new list element and add it to the list
                var newLi = \$('<li></li>').html(newWidget);
                newLi.appendTo(list);
                addDeleteLink(newLi);
            });

            // add a delete link to all of the existing tag form li elements
            \$('.form-collection-container').find('li').each(function () {
                addDeleteLink(\$(this));
            });

            function addDeleteLink(\$formLi) {
                var \$removeLi = \$('<a class=\"delete-icon\" title=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("total.delete"), "html", null, true);
        echo "\" href=\"#\"></a>');
                \$formLi.append(\$removeLi);

                \$removeLi.on('click', function (e) {
                    e.preventDefault();
                    \$formLi.remove();
                });
            }
        });
    </script>
";
        
        $__internal_33d8ecffcdf40cc05212dc8e70bbe0688b942537cf88513f0b195c8afd77b6e5->leave($__internal_33d8ecffcdf40cc05212dc8e70bbe0688b942537cf88513f0b195c8afd77b6e5_prof);

    }

    public function getTemplateName()
    {
        return ":dogs:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 138,  331 => 110,  325 => 109,  315 => 105,  311 => 103,  309 => 102,  303 => 99,  299 => 97,  290 => 94,  287 => 93,  283 => 92,  279 => 91,  275 => 90,  271 => 88,  269 => 87,  263 => 84,  259 => 82,  250 => 79,  247 => 78,  243 => 77,  239 => 76,  235 => 75,  231 => 73,  229 => 72,  223 => 69,  219 => 67,  210 => 64,  207 => 63,  203 => 62,  199 => 61,  195 => 60,  191 => 58,  189 => 57,  183 => 54,  179 => 52,  170 => 49,  166 => 48,  163 => 47,  159 => 46,  155 => 45,  151 => 44,  144 => 40,  140 => 39,  136 => 38,  132 => 37,  128 => 36,  124 => 35,  120 => 34,  116 => 33,  112 => 32,  106 => 29,  99 => 25,  95 => 24,  91 => 23,  87 => 22,  83 => 21,  77 => 18,  70 => 15,  65 => 13,  61 => 12,  56 => 11,  54 => 10,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"dogs-edit container\">
        <div class=\"row\">
            <div class=\"button-container left col-4\">
                <a class=\"grey-button\" href=\"{{ path('dogs_index') }}\">{{'total.back'|trans}}</a>
            </div>
            <div class=\"button-container col-8\">
                {% if delete_form is defined %}
                    {{ form_start(delete_form) }}
                    <input class=\"grey-button\" type=\"submit\" value=\"{{\"total.delete\"|trans}}\">
                    {{ form_end(delete_form) }}
                {% endif %}
                <input class=\"orange-button\" onclick=\"\$('#main-form').submit();\" type=\"submit\" value=\"{{'total.save'|trans}}\"/>
            </div>
        </div>
        {{ form_start(form, {'attr': {'id': 'main-form'} }) }}
        <div class=\"tabs\">
            <ul>
                <li><a href=\"#tab-main-info\">{{'total.main_info'|trans}}</a></li>
                <li><a href=\"#tab-titles\">{{form.dogTitles.vars.label|trans}}</a></li>
                <li><a href=\"#tab-vaccinations\">{{form.dogVaccinations.vars.label|trans}}</a></li>
                <li><a href=\"#tab-photos\">{{form.dogsPhotos.vars.label|trans}}</a></li>
                <li><a href=\"#tab-videos\">{{form.videos.vars.label|trans}}</a></li>
            </ul>
            <div class=\"dog-info row\" id=\"tab-main-info\">
                <div class=\"main-photo col-4\">
                    {{ form_widget(form.photoFile)}}
                </div>
                <div class=\"main-info col-6\">
                    {{ form_row(form.name, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.nameEn, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.description, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.descriptionEn, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.bdate, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.sex, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.state, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.quality, {'attr': {'class': 'parent-width'} })}}
                    {{ form_row(form.litters, {'attr': {'class': 'parent-width'} })}}
                </div>
            </div>
            <div class=\"embedded-form titles\" id=\"tab-titles\">
                <ul class=\"form-collection-container\" data-count=\"{{ form.dogTitles|length }}\" id=\"titles-fields-list\"
                    data-prototype=\"{{ form_widget(form.dogTitles.vars.prototype)|e }}\">
                    {% for dogTitle in form.dogTitles %}
                        <li>
                            {{ form_row(dogTitle.titles) }}
                            {{ form_row(dogTitle.description) }}
                        </li>
                    {% endfor %}
                </ul>
                <div class=\"add-button-container\">
                    <a href=\"#\" class=\"add-new-element\">{{\"total.add_title\"|trans}}</a>
                </div>
            </div>
            {% do form.dogTitles.setRendered %}

            <div class=\"embedded-form vaccinations\" id=\"tab-vaccinations\">
                <ul class=\"form-collection-container\" data-count=\"{{ form.dogVaccinations|length }}\" id=\"vaccinations-fields-list\"
                    data-prototype=\"{{ form_widget(form.dogVaccinations.vars.prototype)|e }}\">
                    {% for dogVaccination in form.dogVaccinations %}
                        <li>
                            {{ form_row(dogVaccination.vaccinations) }}
                        </li>
                    {% endfor %}
                </ul>
                <div class=\"add-button-container\">
                    <a href=\"#\" class=\"add-new-element\" >{{\"total.add_vaccination\"|trans}}</a>
                </div>
            </div>
            {% do form.dogVaccinations.setRendered %}

            <div class=\"embedded-form photos\" id=\"tab-photos\">
                <ul class=\"form-collection-container\" data-count=\"{{form.dogsPhotos|length}}\"
                    data-prototype=\"{{ form_widget(form.dogsPhotos.vars.prototype)|e }}\">
                    {% for dogsPhoto in form.dogsPhotos %}
                        <li>
                            {{ form_row(dogsPhoto.photoFile) }}
                        </li>
                    {% endfor %}
                </ul>
                <div class=\"add-button-container\">
                    <a href=\"#\" class=\"add-new-element\">{{\"total.add_photo\"|trans}}</a>
                </div>
            </div>
            {% do form.dogsPhotos.setRendered %}

            <div class=\"embedded-form videos\" id=\"tab-videos\">
                <ul class=\"form-collection-container\" data-count=\"{{ form.videos|length }}\" id=\"videos-fields-list\"
                    data-prototype=\"{{ form_widget(form.videos.vars.prototype)|e }}\">
                    {% for video in form.videos %}
                        <li>
                            {{ form_row(video.video) }}
                        </li>
                    {% endfor %}
                </ul>
                <div class=\"add-button-container\">
                    <a href=\"#\" class=\"add-new-element\">{{\"total.add_video\"|trans}}</a>
                </div>
            </div>
            {% do form.videos.setRendered %}
        </div>

        {{ form_end(form) }}
    </div>
{% endblock %}

{% block javascripts %}
    {{parent()}}

    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.embedded-form .add-new-element').on('click', function (e) {
                e.preventDefault();

                var list = \$(this).parents('.embedded-form').find('.form-collection-container');

                // grab the prototype template
                var newWidget = list.attr('data-prototype');
                var count = list.data('count');
                newWidget = newWidget.replace(/__name__/g, count);
                count++;
                list.data('count', count);

                // create a new list element and add it to the list
                var newLi = \$('<li></li>').html(newWidget);
                newLi.appendTo(list);
                addDeleteLink(newLi);
            });

            // add a delete link to all of the existing tag form li elements
            \$('.form-collection-container').find('li').each(function () {
                addDeleteLink(\$(this));
            });

            function addDeleteLink(\$formLi) {
                var \$removeLi = \$('<a class=\"delete-icon\" title=\"{{\"total.delete\"|trans}}\" href=\"#\"></a>');
                \$formLi.append(\$removeLi);

                \$removeLi.on('click', function (e) {
                    e.preventDefault();
                    \$formLi.remove();
                });
            }
        });
    </script>
{% endblock %}", ":dogs:edit.html.twig", "/var/www/zabava/app/Resources/views/dogs/edit.html.twig");
    }
}
