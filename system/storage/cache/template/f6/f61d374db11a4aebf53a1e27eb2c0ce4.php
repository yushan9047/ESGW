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
class __TwigTemplate_f3624ccaeaa4d4386367d7cfe4af1198 extends Template
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
\t\t\t\t\t\t\t<div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-sort\">Sort Order</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group date\">
                                        <input type=\"text\" name=\"date_published\" value=\"";
        // line 138
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
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
                            <div class=\"form-group ";
        // line 147
        echo ((($context["change_author"] ?? null)) ? ("") : ("hidden"));
        echo "\">
                                <label class=\"col-sm-2 control-label\" for=\"input-author\">";
        // line 148
        echo ($context["entry_author"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select class=\"form-control\" name=\"current_author\">
                                        ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["authors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 152
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["author"], "user_id", [], "any", false, false, false, 152) == ($context["current_author"] ?? null))) {
                // line 153
                echo "                                        <option selected=\"selected\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["author"], "user_id", [], "any", false, false, false, 153);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["author"], "name", [], "any", false, false, false, 153);
                echo "</option>
                                        ";
            } else {
                // line 155
                echo "                                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["author"], "user_id", [], "any", false, false, false, 155);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["author"], "name", [], "any", false, false, false, 155);
                echo "</option>
                                        ";
            }
            // line 157
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-published\"><span data-toggle=\"tooltip\" title=\"";
        // line 162
        echo ($context["help_date_published"] ?? null);
        echo "\">";
        echo ($context["entry_date_published"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group date\">
                                        <input type=\"text\" name=\"date_published\" value=\"";
        // line 165
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
        // line 173
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 176
        if (($context["status"] ?? null)) {
            // line 177
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\">";
            // line 178
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 180
            echo "                                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 181
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 183
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-review-display\">";
        // line 187
        echo ($context["entry_review_display"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"review_display\" id=\"input-review-display\" class=\"form-control\">
                                        ";
        // line 190
        if ((($context["review_display"] ?? null) == 0)) {
            // line 191
            echo "                                        <option value=\"0\" selected=\"selected\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                                        <option value=\"1\">";
            // line 192
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                        <option value=\"2\">";
            // line 193
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        }
        // line 195
        echo "                                        ";
        if ((($context["review_display"] ?? null) == 1)) {
            // line 196
            echo "                                        <option value=\"0\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                                        <option value=\"1\" selected=\"selected\">";
            // line 197
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                        <option value=\"2\">";
            // line 198
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        }
        // line 200
        echo "                                        ";
        if ((($context["review_display"] ?? null) == 2)) {
            // line 201
            echo "                                        <option value=\"0\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                                        <option value=\"1\">";
            // line 202
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                        <option value=\"2\" selected=\"selected\">";
            // line 203
            echo ($context["text_no"] ?? null);
            echo "</option>
                                       ";
        }
        // line 205
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-images-review\">";
        // line 209
        echo ($context["entry_images_review"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"images_review\" id=\"input-images-review\" class=\"form-control\">
                                        ";
        // line 212
        if ((($context["images_review"] ?? null) == 0)) {
            // line 213
            echo "                                        <option value=\"0\" selected=\"selected\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                                        <option value=\"1\">";
            // line 214
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                        <option value=\"2\">";
            // line 215
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        }
        // line 217
        echo "                                        ";
        if ((($context["images_review"] ?? null) == 1)) {
            // line 218
            echo "                                        <option value=\"0\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                                        <option value=\"1\" selected=\"selected\">";
            // line 219
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                        <option value=\"2\">";
            // line 220
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        }
        // line 222
        echo "                                        ";
        if ((($context["images_review"] ?? null) == 2)) {
            // line 223
            echo "                                        <option value=\"0\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                                        <option value=\"1\">";
            // line 224
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                        <option value=\"2\" selected=\"selected\">";
            // line 225
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        }
        // line 227
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-youtube\">
                            <table class=\"table table-bordered\">
                                <thead>
                                    <tr>
                                        <th style=\"width:15%;\">";
        // line 235
        echo ($context["text_youtube_url"] ?? null);
        echo "</th>
                                        <th style=\"width:66%;\">";
        // line 236
        echo ($context["text_youtube_title"] ?? null);
        echo "</th>
                                        <th style=\"width:5%;\">";
        // line 237
        echo ($context["text_youtube_width"] ?? null);
        echo "</th>
                                        <th style=\"width:5%;\">";
        // line 238
        echo ($context["text_youtube_height"] ?? null);
        echo "</th>
                                        <th style=\"width:6%;\">";
        // line 239
        echo ($context["text_youtube_sort_order"] ?? null);
        echo "</th>
                                        <th style=\"width:3%;\">";
        // line 240
        echo ($context["text_youtube_action"] ?? null);
        echo "</th>
                                    </tr>
                                </thead>
                                <tbody id=\"tbody\">
                                    ";
        // line 244
        if (($context["post_videos"] ?? null)) {
            // line 245
            echo "                                    ";
            $context["video_row"] = 0;
            // line 246
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["post_videos"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post_video"]) {
                // line 247
                echo "                                    <tr id=\"video_row_";
                echo ($context["video_row"] ?? null);
                echo "\">
                                        <td><input class=\"form-control\" type=\"text\" value=\"";
                // line 248
                echo twig_get_attribute($this->env, $this->source, $context["post_video"], "video", [], "any", false, false, false, 248);
                echo "\" name=\"post_video[";
                echo ($context["video_row"] ?? null);
                echo "][video]\"></td>
                                        <td>

                                            ";
                // line 251
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 252
                    echo "                                            <div class=\"input-group\">
                                                <span class=\"input-group-addon\"><img src=\"";
                    // line 253
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "flag", [], "any", false, false, false, 253);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 253);
                    echo "\" /></span>
                                                <textarea style=\"min-width: 100%;\" class=\"form-control\" type=\"text\" name=\"post_video[";
                    // line 254
                    echo ($context["video_row"] ?? null);
                    echo "][text][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 254);
                    echo "]\">";
                    echo (($__internal_compile_22 = twig_get_attribute($this->env, $this->source, $context["post_video"], "text", [], "any", false, false, false, 254)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 254)] ?? null) : null);
                    echo "</textarea>
                                            </div>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 257
                echo "                                        </td>
                                        <td><input class=\"form-control\" type=\"text\" value=\"";
                // line 258
                echo twig_get_attribute($this->env, $this->source, $context["post_video"], "width", [], "any", false, false, false, 258);
                echo "\" name=\"post_video[";
                echo ($context["video_row"] ?? null);
                echo "][width]\"></td>
                                        <td><input class=\"form-control\" type=\"text\" value=\"";
                // line 259
                echo twig_get_attribute($this->env, $this->source, $context["post_video"], "height", [], "any", false, false, false, 259);
                echo "\" name=\"post_video[";
                echo ($context["video_row"] ?? null);
                echo "][height]\"></td>
                                        <td><input class=\"form-control\" type=\"text\" value=\"";
                // line 260
                echo twig_get_attribute($this->env, $this->source, $context["post_video"], "sort_order", [], "any", false, false, false, 260);
                echo "\" name=\"post_video[";
                echo ($context["video_row"] ?? null);
                echo "][sort_order]\"></td>
                                        <td><a class=\"btn btn-danger\" onclick=\"RemoveVideo('video_row_";
                // line 261
                echo ($context["video_row"] ?? null);
                echo "');\"><i class=\"fa fa-minus\"></i></a></td>
                                    </tr>
                                    ";
                // line 263
                $context["video_row"] = (($context["video_row"] ?? null) + 1);
                // line 264
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post_video'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 265
            echo "                                    ";
        }
        // line 266
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
        // line 284
        echo ($context["text_yes"] ?? null);
        echo "',
                                        'offText': '";
        // line 285
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
        // line 296
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
        // line 306
        echo ($context["limit_access_user_group"] ?? null);
        echo ");
                                    \$('input[name=\"user\"]').autocomplete({
                                        'source': function (request, response) {
                                            \$.ajax({
                                                url: 'index.php?route=customer/customer/autocomplete&";
        // line 310
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
        // line 336
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
        // line 362
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 364
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
                                    <div id=\"post-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 366
        if ((($__internal_compile_23 = ($context["error_post_category"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 366)] ?? null) : null)) {
            // line 367
            echo "                                        <div class=\"text-danger\">";
            echo (($__internal_compile_24 = ($context["error_post_category"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 367)] ?? null) : null);
            echo "</div>
                                        ";
        }
        // line 369
        echo "                                        ";
        if (($context["post_categories"] ?? null)) {
            // line 370
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["post_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post_category"]) {
                // line 371
                echo "                                        <div id=\"post-category";
                echo twig_get_attribute($this->env, $this->source, $context["post_category"], "category_id", [], "any", false, false, false, 371);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["post_category"], "title", [], "any", false, false, false, 371);
                echo "
                                            <input type=\"hidden\" name=\"post_category[]\" value=\"";
                // line 372
                echo twig_get_attribute($this->env, $this->source, $context["post_category"], "category_id", [], "any", false, false, false, 372);
                echo "\" />
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 375
            echo "                                        ";
        }
        // line 376
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">";
        // line 380
        echo ($context["entry_store"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        <div class=\"checkbox\">
                                            <label>
                                                ";
        // line 385
        if (twig_in_filter(0, ($context["post_store"] ?? null))) {
            // line 386
            echo "                                                <input type=\"checkbox\" name=\"post_store[]\" value=\"0\" checked=\"checked\" />
                                                ";
            // line 387
            echo ($context["text_default"] ?? null);
            echo "
                                                ";
        } else {
            // line 389
            echo "                                                <input type=\"checkbox\" name=\"post_store[]\" value=\"0\" />
                                                ";
            // line 390
            echo ($context["text_default"] ?? null);
            echo "
                                                ";
        }
        // line 392
        echo "                                            </label>
                                        </div>
                                        ";
        // line 394
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 395
            echo "                                        <div class=\"checkbox\">
                                            <label>
                                                ";
            // line 397
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 397), ($context["post_store"] ?? null))) {
                // line 398
                echo "                                                <input type=\"checkbox\" name=\"post_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 398);
                echo "\" checked=\"checked\" />
                                                ";
                // line 399
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 399);
                echo "
                                                ";
            } else {
                // line 401
                echo "                                                <input type=\"checkbox\" name=\"post_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 401);
                echo "\" />
                                                ";
                // line 402
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 402);
                echo "
                                                ";
            }
            // line 404
            echo "                                            </label>
                                        </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 407
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-limit-access-user\">";
        // line 411
        echo ($context["entry_limit_access_user"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"hidden\" name=\"limit_access_user\" value=\"0\" />
                                    <input type=\"checkbox\" name=\"limit_access_user\" class=\"switcher\" data-label-text=\"";
        // line 414
        echo ($context["text_enabled"] ?? null);
        echo "\" id=\"input-limit-access-user\" ";
        echo ((($context["limit_access_user"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " value=\"1\" />
                                </div>
                            </div>
                            <div class=\"form-group\" id=\"users\">
                                <label class=\"col-sm-2 control-label\" for=\"input-user\">";
        // line 418
        echo ($context["entry_user"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"user\" value=\"\" placeholder=\"";
        // line 420
        echo ($context["entry_user"] ?? null);
        echo "\" id=\"input-user\" class=\"form-control\" />
                                    <div id=\"access-user\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 422
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 423
            echo "                                            <div id=\"access-user";
            echo $context["key"];
            echo "\">
                                                <i class=\"fa fa-minus-circle\"></i>
                                                ";
            // line 425
            echo $context["value"];
            echo "
                                                <input type=\"hidden\" name=\"access_user[]\" value=\"";
            // line 426
            echo $context["key"];
            echo "\" />
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 429
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-limit-access-user-group\">";
        // line 433
        echo ($context["entry_limit_access_user_group"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"hidden\" name=\"limit_access_user_group\" value=\"0\" />
                                    <input type=\"checkbox\" name=\"limit_access_user_group\" class=\"switcher\" data-label-text=\"";
        // line 436
        echo ($context["text_enabled"] ?? null);
        echo "\" id=\"input-limit-access-user-group\" ";
        echo ((($context["limit_access_user_group"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " value=\"1\" />
                                </div>
                            </div>
                            <div class=\"form-group\" id=\"user_groups\">
                                <label class=\"col-sm-2 control-label\" for=\"input-user-group\">";
        // line 440
        echo ($context["entry_user_group"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"user_group\" value=\"\" placeholder=\"";
        // line 442
        echo ($context["entry_user_group"] ?? null);
        echo "\" id=\"input-user-group\" class=\"form-control\" />
                                    <div id=\"access-user-group\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 444
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user_groups"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 445
            echo "                                            <div id=\"access-user-group";
            echo $context["key"];
            echo "\">
                                                <i class=\"fa fa-minus-circle\"></i>
                                                ";
            // line 447
            echo $context["value"];
            echo "
                                                <input type=\"hidden\" name=\"access_user_group[]\" value=\"";
            // line 448
            echo $context["key"];
            echo "\" />
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 451
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-related\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 457
        echo ($context["entry_product"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 459
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                                    <div id=\"post_product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 461
        if ((twig_length_filter($this->env, ($context["post_products"] ?? null)) > 0)) {
            // line 462
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["post_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post_product"]) {
                // line 463
                echo "                                        <div id=\"post_product";
                echo twig_get_attribute($this->env, $this->source, $context["post_product"], "product_id", [], "any", false, false, false, 463);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["post_product"], "title", [], "any", false, false, false, 463);
                echo "
                                            <input type=\"hidden\" name=\"post_product[]\" value=\"";
                // line 464
                echo twig_get_attribute($this->env, $this->source, $context["post_product"], "product_id", [], "any", false, false, false, 464);
                echo "\" />
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post_product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 467
            echo "                                        ";
        }
        // line 468
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 472
        echo ($context["entry_post"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"post\" value=\"\" placeholder=\"";
        // line 474
        echo ($context["entry_post"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                                    <div id=\"related_post\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 476
        if ((twig_length_filter($this->env, ($context["related_posts"] ?? null)) > 0)) {
            // line 477
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["related_posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["related_post"]) {
                // line 478
                echo "                                        <div id=\"related_post";
                echo twig_get_attribute($this->env, $this->source, $context["related_post"], "post_id", [], "any", false, false, false, 478);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["related_post"], "title", [], "any", false, false, false, 478);
                echo "
                                            <input type=\"hidden\" name=\"related_post[]\" value=\"";
                // line 479
                echo twig_get_attribute($this->env, $this->source, $context["related_post"], "post_id", [], "any", false, false, false, 479);
                echo "\" />
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related_post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 482
            echo "                                        ";
        }
        // line 483
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
        // line 492
        echo ($context["entry_store"] ?? null);
        echo "</td>
                                            <td class=\"text-left\">";
        // line 493
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class=\"text-left\">";
        // line 498
        echo ($context["text_default"] ?? null);
        echo "</td>
                                            <td class=\"text-left\"><select name=\"post_layout[0]\" class=\"form-control\">
                                                <option value=\"\"></option>
                                                ";
        // line 501
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 502
            echo "                                                ";
            if (((($__internal_compile_25 = ($context["post_layout"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[0] ?? null) : null) && ((($__internal_compile_26 = ($context["post_layout"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[0] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 502)))) {
                // line 503
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 503);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 503);
                echo "</option>
                                                ";
            } else {
                // line 505
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 505);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 505);
                echo "</option>
                                                ";
            }
            // line 507
            echo "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 508
        echo "                                            </select></td>
                                        </tr>
                                        ";
        // line 510
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 511
            echo "                                        <tr>
                                            <td class=\"text-left\">";
            // line 512
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 512);
            echo "</td>
                                            <td class=\"text-left\"><select name=\"post_layout[";
            // line 513
            echo (($__internal_compile_27 = $context["store"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["store_id"] ?? null) : null);
            echo "]\" class=\"form-control\">
                                                <option value=\"\"></option>
                                                ";
            // line 515
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 516
                echo "                                                ";
                if (((($__internal_compile_28 = ($context["post_layout"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 516)] ?? null) : null) && ((($__internal_compile_29 = ($context["post_layout"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 516)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 516)))) {
                    // line 517
                    echo "                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 517);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 517);
                    echo "</option>
                                                ";
                } else {
                    // line 519
                    echo "                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 519);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 519);
                    echo "</option>
                                                ";
                }
                // line 521
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 522
            echo "                                            </select></td>
                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 525
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
        // line 536
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 537
            echo "                ";
            if (($context["style_short_description_display"] ?? null)) {
                // line 538
                echo "                    \$(\"#input-short-description";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 538);
                echo "\").summernote({ height: 100 });
                ";
            }
            // line 540
            echo "                ";
            if ( !($context["store_2302"] ?? null)) {
                // line 541
                echo "                    \$(\"#input-description";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 541);
                echo "\").summernote({ height: 300 });
                ";
            }
            // line 543
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 544
        echo "                //--></script>
                <script type=\"text/javascript\"><!--
\t\t\t\t// Category
                \$('input[name=\\'category\\']').autocomplete({
                    'source': function (request, response) {
                        \$.ajax({
                            url: '";
        // line 550
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
        // line 599
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
        // line 633
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
        // line 669
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 670
            echo "            html += ' <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "flag", [], "any", false, false, false, 670);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 670);
            echo "\" /></span><textarea class=\"form-control\" name=\"post_video['+token+'][text][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 670);
            echo "]\"></textarea></div>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 672
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
        // line 695
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
        return array (  1537 => 695,  1512 => 672,  1499 => 670,  1495 => 669,  1456 => 633,  1419 => 599,  1367 => 550,  1359 => 544,  1353 => 543,  1347 => 541,  1344 => 540,  1338 => 538,  1335 => 537,  1331 => 536,  1318 => 525,  1310 => 522,  1304 => 521,  1296 => 519,  1288 => 517,  1285 => 516,  1281 => 515,  1276 => 513,  1272 => 512,  1269 => 511,  1265 => 510,  1261 => 508,  1255 => 507,  1247 => 505,  1239 => 503,  1236 => 502,  1232 => 501,  1226 => 498,  1218 => 493,  1214 => 492,  1203 => 483,  1200 => 482,  1191 => 479,  1184 => 478,  1179 => 477,  1177 => 476,  1172 => 474,  1167 => 472,  1161 => 468,  1158 => 467,  1149 => 464,  1142 => 463,  1137 => 462,  1135 => 461,  1130 => 459,  1125 => 457,  1117 => 451,  1108 => 448,  1104 => 447,  1098 => 445,  1094 => 444,  1089 => 442,  1084 => 440,  1075 => 436,  1069 => 433,  1063 => 429,  1054 => 426,  1050 => 425,  1044 => 423,  1040 => 422,  1035 => 420,  1030 => 418,  1021 => 414,  1015 => 411,  1009 => 407,  1001 => 404,  996 => 402,  991 => 401,  986 => 399,  981 => 398,  979 => 397,  975 => 395,  971 => 394,  967 => 392,  962 => 390,  959 => 389,  954 => 387,  951 => 386,  949 => 385,  941 => 380,  935 => 376,  932 => 375,  923 => 372,  916 => 371,  911 => 370,  908 => 369,  902 => 367,  900 => 366,  895 => 364,  888 => 362,  859 => 336,  830 => 310,  823 => 306,  810 => 296,  796 => 285,  792 => 284,  772 => 266,  769 => 265,  763 => 264,  761 => 263,  756 => 261,  750 => 260,  744 => 259,  738 => 258,  735 => 257,  722 => 254,  716 => 253,  713 => 252,  709 => 251,  701 => 248,  696 => 247,  691 => 246,  688 => 245,  686 => 244,  679 => 240,  675 => 239,  671 => 238,  667 => 237,  663 => 236,  659 => 235,  649 => 227,  644 => 225,  640 => 224,  635 => 223,  632 => 222,  627 => 220,  623 => 219,  618 => 218,  615 => 217,  610 => 215,  606 => 214,  601 => 213,  599 => 212,  593 => 209,  587 => 205,  582 => 203,  578 => 202,  573 => 201,  570 => 200,  565 => 198,  561 => 197,  556 => 196,  553 => 195,  548 => 193,  544 => 192,  539 => 191,  537 => 190,  531 => 187,  525 => 183,  520 => 181,  515 => 180,  510 => 178,  505 => 177,  503 => 176,  497 => 173,  484 => 165,  476 => 162,  470 => 158,  464 => 157,  456 => 155,  448 => 153,  445 => 152,  441 => 151,  435 => 148,  431 => 147,  417 => 138,  405 => 129,  399 => 128,  389 => 121,  383 => 120,  378 => 118,  368 => 111,  361 => 106,  344 => 101,  335 => 99,  322 => 95,  315 => 93,  302 => 89,  295 => 87,  290 => 84,  284 => 82,  282 => 81,  272 => 80,  265 => 78,  250 => 74,  243 => 72,  230 => 68,  223 => 66,  211 => 61,  206 => 59,  200 => 55,  194 => 53,  192 => 52,  186 => 51,  176 => 50,  169 => 48,  163 => 46,  159 => 45,  155 => 43,  140 => 41,  136 => 40,  128 => 35,  124 => 34,  120 => 33,  116 => 32,  112 => 31,  108 => 30,  103 => 28,  97 => 25,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/d_blog_module/post_form.twig", "");
    }
}
