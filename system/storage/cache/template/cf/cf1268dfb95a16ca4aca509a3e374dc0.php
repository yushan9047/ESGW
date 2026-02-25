<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/d_blog_module/post_form.twig */
class __TwigTemplate_1054524baab15fb3f8d72594317663ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-post\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
            </div>
            <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "                <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "        <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 23
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_form"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-post\" class=\"form-horizontal\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
                        <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 31
        echo ($context["tab_data"] ?? null);
        echo "</a></li>
                        <!-- <li><a href=\"#tab-related\" data-toggle=\"tab\">";
        // line 32
        echo ($context["tab_related"] ?? null);
        echo "</a></li> -->
                        <li><a href=\"#tab-youtube\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_youtube"] ?? null);
        echo "</a></li>
                        <li><a href=\"#tab-links\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_links"] ?? null);
        echo "</a></li>
                        <!-- <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_design"] ?? null);
        echo "</a></li> -->
                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"tab-general\">
                            <ul class=\"nav nav-tabs\" id=\"language\">
                                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 41
            echo "                                <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 41);
            echo "\" data-toggle=\"tab\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "flag", [], "any", false, false, false, 41);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 41);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 41);
            echo "</a></li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                            </ul>
                            <div class=\"tab-content\">
                                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 46
            echo "                                <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 46);
            echo "\">
                                    <div class=\"form-group required\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-title";
            // line 48
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48);
            echo "\">";
            echo ($context["entry_title"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\" name=\"post_description[";
            // line 50
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 50);
            echo "][title]\" value=\"";
            echo (((($__internal_compile_0 = ($context["post_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 50)] ?? null) : null)) ? ((($__internal_compile_1 = (($__internal_compile_2 = ($context["post_description"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 50)] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["title"] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" id=\"input-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 50);
            echo "\" class=\"form-control\" />
                                            <input type=\"hidden\" name=\"post_description[";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51);
            echo "][user_id]\" value=\"";
            echo ((($context["user_id"] ?? null)) ? (($context["user_id"] ?? null)) : (0));
            echo "\" id=\"get-user_id\" class=\"form-control\" />
                                            ";
            // line 52
            if ((($__internal_compile_3 = ($context["error_title"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 52)] ?? null) : null)) {
                // line 53
                echo "                                            <div class=\"text-danger\">";
                echo (($__internal_compile_4 = ($context["error_title"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53)] ?? null) : null);
                echo "</div>
                                            ";
            }
            // line 55
            echo "                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-sub-title";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 59);
            echo "\">Sub Title</label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\" name=\"post_description[";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "][sub_title]\" value=\"";
            echo (((($__internal_compile_5 = ($context["post_description"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61)] ?? null) : null)) ? ((($__internal_compile_6 = (($__internal_compile_7 = ($context["post_description"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61)] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["sub_title"] ?? null) : null)) : (""));
            echo "\" placeholder=\"Sub Title\" id=\"input-sub-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "\" class=\"form-control\" />
                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t\t
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-short-description";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66);
            echo "\">";
            echo ($context["entry_short_description"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <textarea name=\"post_description[";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 68);
            echo "][short_description]\" placeholder=\"";
            echo ($context["entry_short_description"] ?? null);
            echo "\" class=\"form-control summernote\" id=\"input-short-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 68);
            echo "\">";
            echo (((($__internal_compile_8 = ($context["post_description"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 68)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = ($context["post_description"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 68)] ?? null) : null), "short_description", [], "any", false, false, false, 68)) : (""));
            echo "</textarea>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <textarea name=\"post_description[";
            // line 74
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74);
            echo "][description]\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"d_visual_designer summernote\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" data-toggle=\"summernote\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74);
            echo "\">";
            echo (((($__internal_compile_10 = ($context["post_description"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = ($context["post_description"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74)] ?? null) : null), "description", [], "any", false, false, false, 74)) : (""));
            echo "</textarea>
                                        </div>
                                    </div>
                                    <div class=\"form-group required\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 78
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78);
            echo "\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\" name=\"post_description[";
            // line 80
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80);
            echo "][meta_title]\" value=\"";
            echo (((($__internal_compile_12 = ($context["post_description"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = ($context["post_description"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80)] ?? null) : null), "meta_title", [], "any", false, false, false, 80)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80);
            echo "\" class=\"form-control\" />
                                            ";
            // line 81
            if ((($__internal_compile_14 = ($context["error_meta_title"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 81)] ?? null) : null)) {
                // line 82
                echo "                                            <div class=\"text-danger\">";
                echo (($__internal_compile_15 = ($context["error_meta_title"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 82)] ?? null) : null);
                echo "</div>
                                            ";
            }
            // line 84
            echo "                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 87
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87);
            echo "\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <textarea name=\"post_description[";
            // line 89
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89);
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_16 = ($context["post_description"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = ($context["post_description"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89)] ?? null) : null), "meta_description", [], "any", false, false, false, 89)) : (""));
            echo "</textarea>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93);
            echo "\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <textarea name=\"post_description[";
            // line 95
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 95);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 95);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_18 = ($context["post_description"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 95)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = ($context["post_description"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 95)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 95)) : (""));
            echo "</textarea>
                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-tag";
            // line 99
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 99);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_tag"] ?? null);
            echo "\">";
            echo ($context["entry_tag"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"post_description[";
            // line 101
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 101);
            echo "][tag]\" data-role=\"tagsinput\" value=\"";
            echo (((($__internal_compile_20 = ($context["post_description"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 101)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_21 = ($context["post_description"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 101)] ?? null) : null), "tag", [], "any", false, false, false, 101)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_tag"] ?? null);
            echo "\" id=\"input-tag";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 101);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                            </div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-url\">平台網址</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"url\" value=\"";
        // line 111
        echo ($context["url"] ?? null);
        echo "\" placeholder=\"平台網址\" id=\"input-url\" class=\"form-control\" />
                                </div>
                            </div>
\t\t\t\t\t\t\t
                        </div>
                        <div class=\"tab-pane\" id=\"tab-data\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 118
        echo ($context["entry_image"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 120
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                                    <input type=\"hidden\" name=\"image\" value=\"";
        // line 121
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\" />
                                </div>
                            </div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-page-image\">內頁形象圖</label>
                                <div class=\"col-sm-10\">
                                    <a href=\"\" id=\"page-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 128
        echo ($context["thumb_page_image"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                                    <input type=\"hidden\" name=\"page_image\" value=\"";
        // line 129
        echo ($context["page_image"] ?? null);
        echo "\" id=\"input-page-image\" />
                                </div>
                            </div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
                            <div class=\"form-group ";
        // line 134
        echo ((($context["change_author"] ?? null)) ? ("") : ("hidden"));
        echo "\">
                                <label class=\"col-sm-2 control-label\" for=\"input-author\">";
        // line 135
        echo ($context["entry_author"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select class=\"form-control\" name=\"current_author\">
                                        ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["authors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 139
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["author"], "user_id", [], "any", false, false, false, 139) == ($context["current_author"] ?? null))) {
                // line 140
                echo "                                        <option selected=\"selected\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["author"], "user_id", [], "any", false, false, false, 140);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["author"], "name", [], "any", false, false, false, 140);
                echo "</option>
                                        ";
            } else {
                // line 142
                echo "                                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["author"], "user_id", [], "any", false, false, false, 142);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["author"], "name", [], "any", false, false, false, 142);
                echo "</option>
                                        ";
            }
            // line 144
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-published\"><span data-toggle=\"tooltip\" title=\"";
        // line 149
        echo ($context["help_date_published"] ?? null);
        echo "\">";
        echo ($context["entry_date_published"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group date\">
                                        <input type=\"text\" name=\"date_published\" value=\"";
        // line 152
        echo ((($context["date_published"] ?? null)) ? (($context["date_published"] ?? null)) : (""));
        echo "\" placeholder=\"";
        echo ($context["entry_date_published"] ?? null);
        echo "\" id=\"input-published\" class=\"form-control\" data-date-format=\"YYYY-MM-DD\"  />
                                        <span class=\"input-group-btn\">
                                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 160
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 163
        if (($context["status"] ?? null)) {
            // line 164
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\">";
            // line 165
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 167
            echo "                                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 168
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 170
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-review-display\">";
        // line 174
        echo ($context["entry_review_display"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"review_display\" id=\"input-review-display\" class=\"form-control\">
                                        ";
        // line 177
        if ((($context["review_display"] ?? null) == 0)) {
            // line 178
            echo "                                        <option value=\"0\" selected=\"selected\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                                        <option value=\"1\">";
            // line 179
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                        <option value=\"2\">";
            // line 180
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        }
        // line 182
        echo "                                        ";
        if ((($context["review_display"] ?? null) == 1)) {
            // line 183
            echo "                                        <option value=\"0\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                                        <option value=\"1\" selected=\"selected\">";
            // line 184
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                        <option value=\"2\">";
            // line 185
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        }
        // line 187
        echo "                                        ";
        if ((($context["review_display"] ?? null) == 2)) {
            // line 188
            echo "                                        <option value=\"0\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                                        <option value=\"1\">";
            // line 189
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                        <option value=\"2\" selected=\"selected\">";
            // line 190
            echo ($context["text_no"] ?? null);
            echo "</option>
                                       ";
        }
        // line 192
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-images-review\">";
        // line 196
        echo ($context["entry_images_review"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"images_review\" id=\"input-images-review\" class=\"form-control\">
                                        ";
        // line 199
        if ((($context["images_review"] ?? null) == 0)) {
            // line 200
            echo "                                        <option value=\"0\" selected=\"selected\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                                        <option value=\"1\">";
            // line 201
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                        <option value=\"2\">";
            // line 202
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        }
        // line 204
        echo "                                        ";
        if ((($context["images_review"] ?? null) == 1)) {
            // line 205
            echo "                                        <option value=\"0\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                                        <option value=\"1\" selected=\"selected\">";
            // line 206
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                        <option value=\"2\">";
            // line 207
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        }
        // line 209
        echo "                                        ";
        if ((($context["images_review"] ?? null) == 2)) {
            // line 210
            echo "                                        <option value=\"0\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                                        <option value=\"1\">";
            // line 211
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                        <option value=\"2\" selected=\"selected\">";
            // line 212
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        }
        // line 214
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-youtube\">
                            <table class=\"table table-bordered\">
                                <thead>
                                    <tr>
                                        <th style=\"width:15%;\">";
        // line 222
        echo ($context["text_youtube_url"] ?? null);
        echo "</th>
                                        <th style=\"width:66%;\">";
        // line 223
        echo ($context["text_youtube_title"] ?? null);
        echo "</th>
                                        <th style=\"width:5%;\">";
        // line 224
        echo ($context["text_youtube_width"] ?? null);
        echo "</th>
                                        <th style=\"width:5%;\">";
        // line 225
        echo ($context["text_youtube_height"] ?? null);
        echo "</th>
                                        <th style=\"width:6%;\">";
        // line 226
        echo ($context["text_youtube_sort_order"] ?? null);
        echo "</th>
                                        <th style=\"width:3%;\">";
        // line 227
        echo ($context["text_youtube_action"] ?? null);
        echo "</th>
                                    </tr>
                                </thead>
                                <tbody id=\"tbody\">
                                    ";
        // line 231
        if (($context["post_videos"] ?? null)) {
            // line 232
            echo "                                    ";
            $context["video_row"] = 0;
            // line 233
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["post_videos"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post_video"]) {
                // line 234
                echo "                                    <tr id=\"video_row_";
                echo ($context["video_row"] ?? null);
                echo "\">
                                        <td><input class=\"form-control\" type=\"text\" value=\"";
                // line 235
                echo twig_get_attribute($this->env, $this->source, $context["post_video"], "video", [], "any", false, false, false, 235);
                echo "\" name=\"post_video[";
                echo ($context["video_row"] ?? null);
                echo "][video]\"></td>
                                        <td>

                                            ";
                // line 238
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 239
                    echo "                                            <div class=\"input-group\">
                                                <span class=\"input-group-addon\"><img src=\"";
                    // line 240
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "flag", [], "any", false, false, false, 240);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 240);
                    echo "\" /></span>
                                                <textarea style=\"min-width: 100%;\" class=\"form-control\" type=\"text\" name=\"post_video[";
                    // line 241
                    echo ($context["video_row"] ?? null);
                    echo "][text][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 241);
                    echo "]\">";
                    echo (($__internal_compile_22 = twig_get_attribute($this->env, $this->source, $context["post_video"], "text", [], "any", false, false, false, 241)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 241)] ?? null) : null);
                    echo "</textarea>
                                            </div>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 244
                echo "                                        </td>
                                        <td><input class=\"form-control\" type=\"text\" value=\"";
                // line 245
                echo twig_get_attribute($this->env, $this->source, $context["post_video"], "width", [], "any", false, false, false, 245);
                echo "\" name=\"post_video[";
                echo ($context["video_row"] ?? null);
                echo "][width]\"></td>
                                        <td><input class=\"form-control\" type=\"text\" value=\"";
                // line 246
                echo twig_get_attribute($this->env, $this->source, $context["post_video"], "height", [], "any", false, false, false, 246);
                echo "\" name=\"post_video[";
                echo ($context["video_row"] ?? null);
                echo "][height]\"></td>
                                        <td><input class=\"form-control\" type=\"text\" value=\"";
                // line 247
                echo twig_get_attribute($this->env, $this->source, $context["post_video"], "sort_order", [], "any", false, false, false, 247);
                echo "\" name=\"post_video[";
                echo ($context["video_row"] ?? null);
                echo "][sort_order]\"></td>
                                        <td><a class=\"btn btn-danger\" onclick=\"RemoveVideo('video_row_";
                // line 248
                echo ($context["video_row"] ?? null);
                echo "');\"><i class=\"fa fa-minus\"></i></a></td>
                                    </tr>
                                    ";
                // line 250
                $context["video_row"] = (($context["video_row"] ?? null) + 1);
                // line 251
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post_video'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 252
            echo "                                    ";
        }
        // line 253
        echo "                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><a class=\"btn btn-primary\" onclick=\"AddVideo();\"><i class=\"fa fa-plus\"></i></a></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-links\">
                            <script type=\"application/javascript\">
                                \$(document).ready(function() {
                                    \$(\".switcher[type='checkbox']\").bootstrapSwitch({
                                        'onColor': 'success',
                                        'onText': '";
        // line 271
        echo ($context["text_yes"] ?? null);
        echo "',
                                        'offText': '";
        // line 272
        echo ($context["text_no"] ?? null);
        echo "',
                                    });
                                    \$('input[type=checkbox][name\$=\"limit_access_user\"]').on('switchChange.bootstrapSwitch', function (event, state) {
                                        if (state) {
                                            \$('input[type=checkbox][name\$=\"limit_access_user_group\"]').bootstrapSwitch('state', false);
                                            \$('#users').show();
                                        }
                                        else {
                                            \$('#users').hide();
                                        }
                                    });
                                    \$('input[type=checkbox][name\$=\"limit_access_user\"]').trigger('switchChange.bootstrapSwitch', ";
        // line 283
        echo ($context["limit_access_user"] ?? null);
        echo ");
                                    \$('input[type=checkbox][name\$=\"limit_access_user_group\"]').on('switchChange.bootstrapSwitch', function (event, state) {
                                        if (state) {
                                            \$('input[type=checkbox][name\$=\"limit_access_user\"]').bootstrapSwitch('state', false);
                                            \$('#user_groups').show();
                                        }
                                        else {
                                            \$('#user_groups').hide();
                                        }
                                    });
                                    \$('input[type=checkbox][name\$=\"limit_access_user_group\"]').trigger('switchChange.bootstrapSwitch', ";
        // line 293
        echo ($context["limit_access_user_group"] ?? null);
        echo ");
                                    \$('input[name=\"user\"]').autocomplete({
                                        'source': function (request, response) {
                                            \$.ajax({
                                                url: 'index.php?route=customer/customer/autocomplete&";
        // line 297
        echo ($context["url_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                                                dataType: 'json',
                                                success: function (json) {
                                                    response(\$.map(json, function (item) {
                                                        return {
                                                            label: item['firstname'],
                                                            value: item['customer_id']
                                                        }
                                                    }));
                                                }
                                            });
                                        },
                                        'select': function (item) {
                                            \$('input[name=\\'user\\']').val('');

                                            \$('#access-user' + item['value']).remove();

                                            \$('#access-user').append('<div id=\"access-user' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"access_user[]\" value=\"' + item['value'] + '\" /></div>');
                                        }
                                    });
                                    \$('#access-user').delegate('.fa-minus-circle', 'click', function () {
                                        \$(this).parent().remove();
                                    });
                                    \$('input[name=\\'user_group\\']').autocomplete({
                                        'source': function (request, response) {
                                            \$.ajax({
                                                url: 'index.php?route=extension/d_blog_module/post/autocompleteUserGroup&";
        // line 323
        echo ($context["url_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                                                dataType: 'json',
                                                success: function (json) {
                                                    response(\$.map(json, function (item) {
                                                        return {
                                                            label: item['name'],
                                                            value: item['customer_group_id']
                                                        }
                                                    }));
                                                }
                                            });
                                        },
                                        'select': function (item) {
                                            \$('input[name=\\'user_group\\']').val('');

                                            \$('#access-user-group' + item['value']).remove();

                                            \$('#access-user-group').append('<div id=\"access-user-group' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"access_user_group[]\" value=\"' + item['value'] + '\" /></div>');
                                        }
                                    });
                                    \$('#access-user-group').delegate('.fa-minus-circle', 'click', function () {
                                        \$(this).parent().remove();
                                    });
                                });
                            </script>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 349
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 351
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
                                    <div id=\"post-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 353
        if ((($__internal_compile_23 = ($context["error_post_category"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 353)] ?? null) : null)) {
            // line 354
            echo "                                        <div class=\"text-danger\">";
            echo (($__internal_compile_24 = ($context["error_post_category"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 354)] ?? null) : null);
            echo "</div>
                                        ";
        }
        // line 356
        echo "                                        ";
        if (($context["post_categories"] ?? null)) {
            // line 357
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["post_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post_category"]) {
                // line 358
                echo "                                        <div id=\"post-category";
                echo twig_get_attribute($this->env, $this->source, $context["post_category"], "category_id", [], "any", false, false, false, 358);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["post_category"], "title", [], "any", false, false, false, 358);
                echo "
                                            <input type=\"hidden\" name=\"post_category[]\" value=\"";
                // line 359
                echo twig_get_attribute($this->env, $this->source, $context["post_category"], "category_id", [], "any", false, false, false, 359);
                echo "\" />
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 362
            echo "                                        ";
        }
        // line 363
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">";
        // line 367
        echo ($context["entry_store"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        <div class=\"checkbox\">
                                            <label>
                                                ";
        // line 372
        if (twig_in_filter(0, ($context["post_store"] ?? null))) {
            // line 373
            echo "                                                <input type=\"checkbox\" name=\"post_store[]\" value=\"0\" checked=\"checked\" />
                                                ";
            // line 374
            echo ($context["text_default"] ?? null);
            echo "
                                                ";
        } else {
            // line 376
            echo "                                                <input type=\"checkbox\" name=\"post_store[]\" value=\"0\" />
                                                ";
            // line 377
            echo ($context["text_default"] ?? null);
            echo "
                                                ";
        }
        // line 379
        echo "                                            </label>
                                        </div>
                                        ";
        // line 381
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 382
            echo "                                        <div class=\"checkbox\">
                                            <label>
                                                ";
            // line 384
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 384), ($context["post_store"] ?? null))) {
                // line 385
                echo "                                                <input type=\"checkbox\" name=\"post_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 385);
                echo "\" checked=\"checked\" />
                                                ";
                // line 386
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 386);
                echo "
                                                ";
            } else {
                // line 388
                echo "                                                <input type=\"checkbox\" name=\"post_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 388);
                echo "\" />
                                                ";
                // line 389
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 389);
                echo "
                                                ";
            }
            // line 391
            echo "                                            </label>
                                        </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 394
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-limit-access-user\">";
        // line 398
        echo ($context["entry_limit_access_user"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"hidden\" name=\"limit_access_user\" value=\"0\" />
                                    <input type=\"checkbox\" name=\"limit_access_user\" class=\"switcher\" data-label-text=\"";
        // line 401
        echo ($context["text_enabled"] ?? null);
        echo "\" id=\"input-limit-access-user\" ";
        echo ((($context["limit_access_user"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " value=\"1\" />
                                </div>
                            </div>
                            <div class=\"form-group\" id=\"users\">
                                <label class=\"col-sm-2 control-label\" for=\"input-user\">";
        // line 405
        echo ($context["entry_user"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"user\" value=\"\" placeholder=\"";
        // line 407
        echo ($context["entry_user"] ?? null);
        echo "\" id=\"input-user\" class=\"form-control\" />
                                    <div id=\"access-user\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 409
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 410
            echo "                                            <div id=\"access-user";
            echo $context["key"];
            echo "\">
                                                <i class=\"fa fa-minus-circle\"></i>
                                                ";
            // line 412
            echo $context["value"];
            echo "
                                                <input type=\"hidden\" name=\"access_user[]\" value=\"";
            // line 413
            echo $context["key"];
            echo "\" />
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 416
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-limit-access-user-group\">";
        // line 420
        echo ($context["entry_limit_access_user_group"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"hidden\" name=\"limit_access_user_group\" value=\"0\" />
                                    <input type=\"checkbox\" name=\"limit_access_user_group\" class=\"switcher\" data-label-text=\"";
        // line 423
        echo ($context["text_enabled"] ?? null);
        echo "\" id=\"input-limit-access-user-group\" ";
        echo ((($context["limit_access_user_group"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " value=\"1\" />
                                </div>
                            </div>
                            <div class=\"form-group\" id=\"user_groups\">
                                <label class=\"col-sm-2 control-label\" for=\"input-user-group\">";
        // line 427
        echo ($context["entry_user_group"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"user_group\" value=\"\" placeholder=\"";
        // line 429
        echo ($context["entry_user_group"] ?? null);
        echo "\" id=\"input-user-group\" class=\"form-control\" />
                                    <div id=\"access-user-group\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 431
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user_groups"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 432
            echo "                                            <div id=\"access-user-group";
            echo $context["key"];
            echo "\">
                                                <i class=\"fa fa-minus-circle\"></i>
                                                ";
            // line 434
            echo $context["value"];
            echo "
                                                <input type=\"hidden\" name=\"access_user_group[]\" value=\"";
            // line 435
            echo $context["key"];
            echo "\" />
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 438
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-related\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 444
        echo ($context["entry_product"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 446
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                                    <div id=\"post_product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 448
        if ((twig_length_filter($this->env, ($context["post_products"] ?? null)) > 0)) {
            // line 449
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["post_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post_product"]) {
                // line 450
                echo "                                        <div id=\"post_product";
                echo twig_get_attribute($this->env, $this->source, $context["post_product"], "product_id", [], "any", false, false, false, 450);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["post_product"], "title", [], "any", false, false, false, 450);
                echo "
                                            <input type=\"hidden\" name=\"post_product[]\" value=\"";
                // line 451
                echo twig_get_attribute($this->env, $this->source, $context["post_product"], "product_id", [], "any", false, false, false, 451);
                echo "\" />
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post_product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 454
            echo "                                        ";
        }
        // line 455
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 459
        echo ($context["entry_post"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"post\" value=\"\" placeholder=\"";
        // line 461
        echo ($context["entry_post"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                                    <div id=\"related_post\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 463
        if ((twig_length_filter($this->env, ($context["related_posts"] ?? null)) > 0)) {
            // line 464
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["related_posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["related_post"]) {
                // line 465
                echo "                                        <div id=\"related_post";
                echo twig_get_attribute($this->env, $this->source, $context["related_post"], "post_id", [], "any", false, false, false, 465);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["related_post"], "title", [], "any", false, false, false, 465);
                echo "
                                            <input type=\"hidden\" name=\"related_post[]\" value=\"";
                // line 466
                echo twig_get_attribute($this->env, $this->source, $context["related_post"], "post_id", [], "any", false, false, false, 466);
                echo "\" />
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related_post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 469
            echo "                                        ";
        }
        // line 470
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-design\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                        <tr>
                                            <td class=\"text-left\">";
        // line 479
        echo ($context["entry_store"] ?? null);
        echo "</td>
                                            <td class=\"text-left\">";
        // line 480
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class=\"text-left\">";
        // line 485
        echo ($context["text_default"] ?? null);
        echo "</td>
                                            <td class=\"text-left\"><select name=\"post_layout[0]\" class=\"form-control\">
                                                <option value=\"\"></option>
                                                ";
        // line 488
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 489
            echo "                                                ";
            if (((($__internal_compile_25 = ($context["post_layout"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[0] ?? null) : null) && ((($__internal_compile_26 = ($context["post_layout"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[0] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 489)))) {
                // line 490
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 490);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 490);
                echo "</option>
                                                ";
            } else {
                // line 492
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 492);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 492);
                echo "</option>
                                                ";
            }
            // line 494
            echo "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 495
        echo "                                            </select></td>
                                        </tr>
                                        ";
        // line 497
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 498
            echo "                                        <tr>
                                            <td class=\"text-left\">";
            // line 499
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 499);
            echo "</td>
                                            <td class=\"text-left\"><select name=\"post_layout[";
            // line 500
            echo (($__internal_compile_27 = $context["store"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["store_id"] ?? null) : null);
            echo "]\" class=\"form-control\">
                                                <option value=\"\"></option>
                                                ";
            // line 502
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 503
                echo "                                                ";
                if (((($__internal_compile_28 = ($context["post_layout"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 503)] ?? null) : null) && ((($__internal_compile_29 = ($context["post_layout"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 503)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 503)))) {
                    // line 504
                    echo "                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 504);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 504);
                    echo "</option>
                                                ";
                } else {
                    // line 506
                    echo "                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 506);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 506);
                    echo "</option>
                                                ";
                }
                // line 508
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 509
            echo "                                            </select></td>
                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 512
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type=\"text/javascript\"><!--
                ";
        // line 523
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 524
            echo "                ";
            if (($context["style_short_description_display"] ?? null)) {
                // line 525
                echo "                    \$(\"#input-short-description";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 525);
                echo "\").summernote({ height: 100 });
                ";
            }
            // line 527
            echo "                ";
            if ( !($context["store_2302"] ?? null)) {
                // line 528
                echo "                    \$(\"#input-description";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 528);
                echo "\").summernote({ height: 300 });
                ";
            }
            // line 530
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 531
        echo "                //--></script>
                <script type=\"text/javascript\"><!--
\t\t\t\t// Category
                \$('input[name=\\'category\\']').autocomplete({
                    'source': function (request, response) {
                        \$.ajax({
                            url: '";
        // line 537
        echo ($context["category_autocomplete"] ?? null);
        echo "' + '&filter_title=' + encodeURIComponent(request),
                            dataType: 'json',
                            success: function (json) {
                                response(\$.map(json, function (item) {
                                    return {
                                        label: item['title'],
                                        value: item['category_id']
                                    }
                                }));
                            }
                        });
                    },
                    'select': function (item) {
                        \$('input[name=\\'category\\']').val('');

                        \$('#post-category' + item['value']).remove();

                        \$('#post-category').append('<div id=\"post-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"post_category[]\" value=\"' + item['value'] + '\" /></div>');
                    }
                });

\$('#post-category').delegate('.fa-minus-circle', 'click', function () {
    \$(this).parent().remove();
});
//--></script>
<script type=\"text/javascript\"><!--
    \$('.date').datetimepicker({
        pickTime: false
    });

    \$('.time').datetimepicker({
        pickDate: false
    });

    \$('.datetime').datetimepicker({
        pickDate: true,
        pickTime: true
    });
    //--></script>
    <script type=\"text/javascript\"><!--
        \$('#language a:first').tab('show');
        \$('#option a:first').tab('show');
        \$('#related_language a:first').tab('show');

        //--></script>
        <script type=\"text/javascript\"><!--
            \$('input[name=\\'product\\']').autocomplete({
              source: function(request, response) {
                \$.ajax({
                  url: '";
        // line 586
        echo ($context["product_autocomplete"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
                  dataType: 'json',
                  success: function(json) {
                    response(\$.map(json, function(item) {
                      return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
                }
            });
            },
            'select': function(item) {
               \$('input[name=\\'product\\']').val('');

               \$('#post_product' + item['value']).remove();

               \$('#post_product').append('<div id=\"post_product' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"post_product[]\" value=\"' + item['value'] + '\" /></div>');
   /* \$('input[name=\\'subscribers\\']').val('');

    \$('#subscriber' + item['value']).remove();

    \$('#subscriber').append('<div id=\"subscriber' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"subscriber[]\" value=\"' + item['value'] + '\" /></div>'); */
}
});

\$('#post_product').delegate('.fa-minus-circle', 'click', function() {
  \$(this).parent().remove();
});
//--></script>
  <script type=\"text/javascript\"><!--
            \$('input[name=\\'post\\']').autocomplete({
              source: function(request, response) {
                \$.ajax({
                  url: '";
        // line 620
        echo ($context["post_autocomplete"] ?? null);
        echo "&filter_title=' +  encodeURIComponent(request),
                  dataType: 'json',
                  success: function(json) {
                    response(\$.map(json, function(item) {
                      return {
                        label: item['title'],
                        value: item['post_id']
                    }
                }));
                }
            });
            },
            'select': function(item) {
               \$('input[name=\\'post\\']').val('');

               \$('#related_post' + item['value']).remove();

               \$('#related_post').append('<div id=\"related_post' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"related_post[]\" value=\"' + item['value'] + '\" /></div>');
   /* \$('input[name=\\'subscribers\\']').val('');

    \$('#subscriber' + item['value']).remove();

    \$('#subscriber').append('<div id=\"subscriber' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"subscriber[]\" value=\"' + item['value'] + '\" /></div>'); */
}
});

\$('#related_post').delegate('.fa-minus-circle', 'click', function() {
  \$(this).parent().remove();
});
function AddVideo()
{
    var token = Math.random().toString(36).substr(2);
    var html = '';
    html += '<tr id=\"video_row_'+token+'\">';
    html += '<td><input class=\"form-control\" type=\"text\" name=\"post_video['+token+'][video]\"></td>';
    html +='<td>';
    ";
        // line 656
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 657
            echo "            html += ' <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "flag", [], "any", false, false, false, 657);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 657);
            echo "\" /></span><textarea class=\"form-control\" name=\"post_video['+token+'][text][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 657);
            echo "]\"></textarea></div>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 659
        echo "    html +='</td>';

    html += '<td><input class=\"form-control\" type=\"text\" name=\"post_video['+token+'][width]\" value=\"0\"></td>';
    html += '<td><input class=\"form-control\" type=\"text\" name=\"post_video['+token+'][height]\" value=\"0\"></td>';
    html += '<td><input class=\"form-control\" type=\"text\" name=\"post_video['+token+'][sort_order]\" value=\"0\"></td>';
    html += '<td><a class=\"btn btn-danger\" onclick=\"RemoveVideo(\\'video_row_'+token+'\\');\"><i class=\"fa fa-minus\"></i></a></td>';

    html += '</tr>';

    \$('#tbody').append(html);
}
function RemoveVideo(id)
{
    \$('#'+id).remove();
}
//--></script>
<script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
<link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
    pickTime: false
});
//--></script>
";
        // line 682
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "extension/d_blog_module/post_form.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  1519 => 682,  1494 => 659,  1481 => 657,  1477 => 656,  1438 => 620,  1401 => 586,  1349 => 537,  1341 => 531,  1335 => 530,  1329 => 528,  1326 => 527,  1320 => 525,  1317 => 524,  1313 => 523,  1300 => 512,  1292 => 509,  1286 => 508,  1278 => 506,  1270 => 504,  1267 => 503,  1263 => 502,  1258 => 500,  1254 => 499,  1251 => 498,  1247 => 497,  1243 => 495,  1237 => 494,  1229 => 492,  1221 => 490,  1218 => 489,  1214 => 488,  1208 => 485,  1200 => 480,  1196 => 479,  1185 => 470,  1182 => 469,  1173 => 466,  1166 => 465,  1161 => 464,  1159 => 463,  1154 => 461,  1149 => 459,  1143 => 455,  1140 => 454,  1131 => 451,  1124 => 450,  1119 => 449,  1117 => 448,  1112 => 446,  1107 => 444,  1099 => 438,  1090 => 435,  1086 => 434,  1080 => 432,  1076 => 431,  1071 => 429,  1066 => 427,  1057 => 423,  1051 => 420,  1045 => 416,  1036 => 413,  1032 => 412,  1026 => 410,  1022 => 409,  1017 => 407,  1012 => 405,  1003 => 401,  997 => 398,  991 => 394,  983 => 391,  978 => 389,  973 => 388,  968 => 386,  963 => 385,  961 => 384,  957 => 382,  953 => 381,  949 => 379,  944 => 377,  941 => 376,  936 => 374,  933 => 373,  931 => 372,  923 => 367,  917 => 363,  914 => 362,  905 => 359,  898 => 358,  893 => 357,  890 => 356,  884 => 354,  882 => 353,  877 => 351,  870 => 349,  841 => 323,  812 => 297,  805 => 293,  792 => 283,  778 => 272,  774 => 271,  754 => 253,  751 => 252,  745 => 251,  743 => 250,  738 => 248,  732 => 247,  726 => 246,  720 => 245,  717 => 244,  704 => 241,  698 => 240,  695 => 239,  691 => 238,  683 => 235,  678 => 234,  673 => 233,  670 => 232,  668 => 231,  661 => 227,  657 => 226,  653 => 225,  649 => 224,  645 => 223,  641 => 222,  631 => 214,  626 => 212,  622 => 211,  617 => 210,  614 => 209,  609 => 207,  605 => 206,  600 => 205,  597 => 204,  592 => 202,  588 => 201,  583 => 200,  581 => 199,  575 => 196,  569 => 192,  564 => 190,  560 => 189,  555 => 188,  552 => 187,  547 => 185,  543 => 184,  538 => 183,  535 => 182,  530 => 180,  526 => 179,  521 => 178,  519 => 177,  513 => 174,  507 => 170,  502 => 168,  497 => 167,  492 => 165,  487 => 164,  485 => 163,  479 => 160,  466 => 152,  458 => 149,  452 => 145,  446 => 144,  438 => 142,  430 => 140,  427 => 139,  423 => 138,  417 => 135,  413 => 134,  405 => 129,  399 => 128,  389 => 121,  383 => 120,  378 => 118,  368 => 111,  361 => 106,  344 => 101,  335 => 99,  322 => 95,  315 => 93,  302 => 89,  295 => 87,  290 => 84,  284 => 82,  282 => 81,  272 => 80,  265 => 78,  250 => 74,  243 => 72,  230 => 68,  223 => 66,  211 => 61,  206 => 59,  200 => 55,  194 => 53,  192 => 52,  186 => 51,  176 => 50,  169 => 48,  163 => 46,  159 => 45,  155 => 43,  140 => 41,  136 => 40,  128 => 35,  124 => 34,  120 => 33,  116 => 32,  112 => 31,  108 => 30,  103 => 28,  97 => 25,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/d_blog_module/post_form.twig", "");
    }
}
