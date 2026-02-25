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
class __TwigTemplate_4ce319539b37495779978517ba9071ba extends Template
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
                                    <div class=\"input-group\">
                                        <input type=\"text\" name=\"sort_order\" value=\"";
        // line 138
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"Sort Order\" id=\"input-sort-order\" class=\"form-control\" />
                                    </div>
                                </div>
                            </div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
                            <div class=\"form-group ";
        // line 144
        echo ((($context["change_author"] ?? null)) ? ("") : ("hidden"));
        echo "\">
                                <label class=\"col-sm-2 control-label\" for=\"input-author\">";
        // line 145
        echo ($context["entry_author"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select class=\"form-control\" name=\"current_author\">
                                        ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["authors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 149
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["author"], "user_id", [], "any", false, false, false, 149) == ($context["current_author"] ?? null))) {
                // line 150
                echo "                                        <option selected=\"selected\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["author"], "user_id", [], "any", false, false, false, 150);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["author"], "name", [], "any", false, false, false, 150);
                echo "</option>
                                        ";
            } else {
                // line 152
                echo "                                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["author"], "user_id", [], "any", false, false, false, 152);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["author"], "name", [], "any", false, false, false, 152);
                echo "</option>
                                        ";
            }
            // line 154
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-published\"><span data-toggle=\"tooltip\" title=\"";
        // line 159
        echo ($context["help_date_published"] ?? null);
        echo "\">";
        echo ($context["entry_date_published"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group date\">
                                        <input type=\"text\" name=\"date_published\" value=\"";
        // line 162
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
        // line 170
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 173
        if (($context["status"] ?? null)) {
            // line 174
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\">";
            // line 175
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 177
            echo "                                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 178
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 180
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-review-display\">";
        // line 184
        echo ($context["entry_review_display"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"review_display\" id=\"input-review-display\" class=\"form-control\">
                                        ";
        // line 187
        if ((($context["review_display"] ?? null) == 0)) {
            // line 188
            echo "                                        <option value=\"0\" selected=\"selected\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                                        <option value=\"1\">";
            // line 189
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                        <option value=\"2\">";
            // line 190
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        }
        // line 192
        echo "                                        ";
        if ((($context["review_display"] ?? null) == 1)) {
            // line 193
            echo "                                        <option value=\"0\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                                        <option value=\"1\" selected=\"selected\">";
            // line 194
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                        <option value=\"2\">";
            // line 195
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        }
        // line 197
        echo "                                        ";
        if ((($context["review_display"] ?? null) == 2)) {
            // line 198
            echo "                                        <option value=\"0\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                                        <option value=\"1\">";
            // line 199
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                        <option value=\"2\" selected=\"selected\">";
            // line 200
            echo ($context["text_no"] ?? null);
            echo "</option>
                                       ";
        }
        // line 202
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-images-review\">";
        // line 206
        echo ($context["entry_images_review"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"images_review\" id=\"input-images-review\" class=\"form-control\">
                                        ";
        // line 209
        if ((($context["images_review"] ?? null) == 0)) {
            // line 210
            echo "                                        <option value=\"0\" selected=\"selected\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                                        <option value=\"1\">";
            // line 211
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                        <option value=\"2\">";
            // line 212
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        }
        // line 214
        echo "                                        ";
        if ((($context["images_review"] ?? null) == 1)) {
            // line 215
            echo "                                        <option value=\"0\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                                        <option value=\"1\" selected=\"selected\">";
            // line 216
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                        <option value=\"2\">";
            // line 217
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        }
        // line 219
        echo "                                        ";
        if ((($context["images_review"] ?? null) == 2)) {
            // line 220
            echo "                                        <option value=\"0\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                                        <option value=\"1\">";
            // line 221
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                        <option value=\"2\" selected=\"selected\">";
            // line 222
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        }
        // line 224
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-youtube\">
                            <table class=\"table table-bordered\">
                                <thead>
                                    <tr>
                                        <th style=\"width:15%;\">";
        // line 232
        echo ($context["text_youtube_url"] ?? null);
        echo "</th>
                                        <th style=\"width:66%;\">";
        // line 233
        echo ($context["text_youtube_title"] ?? null);
        echo "</th>
                                        <th style=\"width:5%;\">";
        // line 234
        echo ($context["text_youtube_width"] ?? null);
        echo "</th>
                                        <th style=\"width:5%;\">";
        // line 235
        echo ($context["text_youtube_height"] ?? null);
        echo "</th>
                                        <th style=\"width:6%;\">";
        // line 236
        echo ($context["text_youtube_sort_order"] ?? null);
        echo "</th>
                                        <th style=\"width:3%;\">";
        // line 237
        echo ($context["text_youtube_action"] ?? null);
        echo "</th>
                                    </tr>
                                </thead>
                                <tbody id=\"tbody\">
                                    ";
        // line 241
        if (($context["post_videos"] ?? null)) {
            // line 242
            echo "                                    ";
            $context["video_row"] = 0;
            // line 243
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["post_videos"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post_video"]) {
                // line 244
                echo "                                    <tr id=\"video_row_";
                echo ($context["video_row"] ?? null);
                echo "\">
                                        <td><input class=\"form-control\" type=\"text\" value=\"";
                // line 245
                echo twig_get_attribute($this->env, $this->source, $context["post_video"], "video", [], "any", false, false, false, 245);
                echo "\" name=\"post_video[";
                echo ($context["video_row"] ?? null);
                echo "][video]\"></td>
                                        <td>

                                            ";
                // line 248
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 249
                    echo "                                            <div class=\"input-group\">
                                                <span class=\"input-group-addon\"><img src=\"";
                    // line 250
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "flag", [], "any", false, false, false, 250);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 250);
                    echo "\" /></span>
                                                <textarea style=\"min-width: 100%;\" class=\"form-control\" type=\"text\" name=\"post_video[";
                    // line 251
                    echo ($context["video_row"] ?? null);
                    echo "][text][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 251);
                    echo "]\">";
                    echo (($__internal_compile_22 = twig_get_attribute($this->env, $this->source, $context["post_video"], "text", [], "any", false, false, false, 251)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 251)] ?? null) : null);
                    echo "</textarea>
                                            </div>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 254
                echo "                                        </td>
                                        <td><input class=\"form-control\" type=\"text\" value=\"";
                // line 255
                echo twig_get_attribute($this->env, $this->source, $context["post_video"], "width", [], "any", false, false, false, 255);
                echo "\" name=\"post_video[";
                echo ($context["video_row"] ?? null);
                echo "][width]\"></td>
                                        <td><input class=\"form-control\" type=\"text\" value=\"";
                // line 256
                echo twig_get_attribute($this->env, $this->source, $context["post_video"], "height", [], "any", false, false, false, 256);
                echo "\" name=\"post_video[";
                echo ($context["video_row"] ?? null);
                echo "][height]\"></td>
                                        <td><input class=\"form-control\" type=\"text\" value=\"";
                // line 257
                echo twig_get_attribute($this->env, $this->source, $context["post_video"], "sort_order", [], "any", false, false, false, 257);
                echo "\" name=\"post_video[";
                echo ($context["video_row"] ?? null);
                echo "][sort_order]\"></td>
                                        <td><a class=\"btn btn-danger\" onclick=\"RemoveVideo('video_row_";
                // line 258
                echo ($context["video_row"] ?? null);
                echo "');\"><i class=\"fa fa-minus\"></i></a></td>
                                    </tr>
                                    ";
                // line 260
                $context["video_row"] = (($context["video_row"] ?? null) + 1);
                // line 261
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post_video'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 262
            echo "                                    ";
        }
        // line 263
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
        // line 281
        echo ($context["text_yes"] ?? null);
        echo "',
                                        'offText': '";
        // line 282
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
        // line 293
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
        // line 303
        echo ($context["limit_access_user_group"] ?? null);
        echo ");
                                    \$('input[name=\"user\"]').autocomplete({
                                        'source': function (request, response) {
                                            \$.ajax({
                                                url: 'index.php?route=customer/customer/autocomplete&";
        // line 307
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
        // line 333
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
        // line 359
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 361
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
                                    <div id=\"post-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 363
        if ((($__internal_compile_23 = ($context["error_post_category"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 363)] ?? null) : null)) {
            // line 364
            echo "                                        <div class=\"text-danger\">";
            echo (($__internal_compile_24 = ($context["error_post_category"] ?? null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 364)] ?? null) : null);
            echo "</div>
                                        ";
        }
        // line 366
        echo "                                        ";
        if (($context["post_categories"] ?? null)) {
            // line 367
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["post_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post_category"]) {
                // line 368
                echo "                                        <div id=\"post-category";
                echo twig_get_attribute($this->env, $this->source, $context["post_category"], "category_id", [], "any", false, false, false, 368);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["post_category"], "title", [], "any", false, false, false, 368);
                echo "
                                            <input type=\"hidden\" name=\"post_category[]\" value=\"";
                // line 369
                echo twig_get_attribute($this->env, $this->source, $context["post_category"], "category_id", [], "any", false, false, false, 369);
                echo "\" />
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 372
            echo "                                        ";
        }
        // line 373
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">";
        // line 377
        echo ($context["entry_store"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        <div class=\"checkbox\">
                                            <label>
                                                ";
        // line 382
        if (twig_in_filter(0, ($context["post_store"] ?? null))) {
            // line 383
            echo "                                                <input type=\"checkbox\" name=\"post_store[]\" value=\"0\" checked=\"checked\" />
                                                ";
            // line 384
            echo ($context["text_default"] ?? null);
            echo "
                                                ";
        } else {
            // line 386
            echo "                                                <input type=\"checkbox\" name=\"post_store[]\" value=\"0\" />
                                                ";
            // line 387
            echo ($context["text_default"] ?? null);
            echo "
                                                ";
        }
        // line 389
        echo "                                            </label>
                                        </div>
                                        ";
        // line 391
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 392
            echo "                                        <div class=\"checkbox\">
                                            <label>
                                                ";
            // line 394
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 394), ($context["post_store"] ?? null))) {
                // line 395
                echo "                                                <input type=\"checkbox\" name=\"post_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 395);
                echo "\" checked=\"checked\" />
                                                ";
                // line 396
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 396);
                echo "
                                                ";
            } else {
                // line 398
                echo "                                                <input type=\"checkbox\" name=\"post_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 398);
                echo "\" />
                                                ";
                // line 399
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 399);
                echo "
                                                ";
            }
            // line 401
            echo "                                            </label>
                                        </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 404
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-limit-access-user\">";
        // line 408
        echo ($context["entry_limit_access_user"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"hidden\" name=\"limit_access_user\" value=\"0\" />
                                    <input type=\"checkbox\" name=\"limit_access_user\" class=\"switcher\" data-label-text=\"";
        // line 411
        echo ($context["text_enabled"] ?? null);
        echo "\" id=\"input-limit-access-user\" ";
        echo ((($context["limit_access_user"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " value=\"1\" />
                                </div>
                            </div>
                            <div class=\"form-group\" id=\"users\">
                                <label class=\"col-sm-2 control-label\" for=\"input-user\">";
        // line 415
        echo ($context["entry_user"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"user\" value=\"\" placeholder=\"";
        // line 417
        echo ($context["entry_user"] ?? null);
        echo "\" id=\"input-user\" class=\"form-control\" />
                                    <div id=\"access-user\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 419
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 420
            echo "                                            <div id=\"access-user";
            echo $context["key"];
            echo "\">
                                                <i class=\"fa fa-minus-circle\"></i>
                                                ";
            // line 422
            echo $context["value"];
            echo "
                                                <input type=\"hidden\" name=\"access_user[]\" value=\"";
            // line 423
            echo $context["key"];
            echo "\" />
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 426
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-limit-access-user-group\">";
        // line 430
        echo ($context["entry_limit_access_user_group"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"hidden\" name=\"limit_access_user_group\" value=\"0\" />
                                    <input type=\"checkbox\" name=\"limit_access_user_group\" class=\"switcher\" data-label-text=\"";
        // line 433
        echo ($context["text_enabled"] ?? null);
        echo "\" id=\"input-limit-access-user-group\" ";
        echo ((($context["limit_access_user_group"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " value=\"1\" />
                                </div>
                            </div>
                            <div class=\"form-group\" id=\"user_groups\">
                                <label class=\"col-sm-2 control-label\" for=\"input-user-group\">";
        // line 437
        echo ($context["entry_user_group"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"user_group\" value=\"\" placeholder=\"";
        // line 439
        echo ($context["entry_user_group"] ?? null);
        echo "\" id=\"input-user-group\" class=\"form-control\" />
                                    <div id=\"access-user-group\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 441
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user_groups"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 442
            echo "                                            <div id=\"access-user-group";
            echo $context["key"];
            echo "\">
                                                <i class=\"fa fa-minus-circle\"></i>
                                                ";
            // line 444
            echo $context["value"];
            echo "
                                                <input type=\"hidden\" name=\"access_user_group[]\" value=\"";
            // line 445
            echo $context["key"];
            echo "\" />
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 448
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-related\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 454
        echo ($context["entry_product"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 456
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                                    <div id=\"post_product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 458
        if ((twig_length_filter($this->env, ($context["post_products"] ?? null)) > 0)) {
            // line 459
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["post_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post_product"]) {
                // line 460
                echo "                                        <div id=\"post_product";
                echo twig_get_attribute($this->env, $this->source, $context["post_product"], "product_id", [], "any", false, false, false, 460);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["post_product"], "title", [], "any", false, false, false, 460);
                echo "
                                            <input type=\"hidden\" name=\"post_product[]\" value=\"";
                // line 461
                echo twig_get_attribute($this->env, $this->source, $context["post_product"], "product_id", [], "any", false, false, false, 461);
                echo "\" />
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post_product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 464
            echo "                                        ";
        }
        // line 465
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 469
        echo ($context["entry_post"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"post\" value=\"\" placeholder=\"";
        // line 471
        echo ($context["entry_post"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                                    <div id=\"related_post\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 473
        if ((twig_length_filter($this->env, ($context["related_posts"] ?? null)) > 0)) {
            // line 474
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["related_posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["related_post"]) {
                // line 475
                echo "                                        <div id=\"related_post";
                echo twig_get_attribute($this->env, $this->source, $context["related_post"], "post_id", [], "any", false, false, false, 475);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["related_post"], "title", [], "any", false, false, false, 475);
                echo "
                                            <input type=\"hidden\" name=\"related_post[]\" value=\"";
                // line 476
                echo twig_get_attribute($this->env, $this->source, $context["related_post"], "post_id", [], "any", false, false, false, 476);
                echo "\" />
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related_post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 479
            echo "                                        ";
        }
        // line 480
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
        // line 489
        echo ($context["entry_store"] ?? null);
        echo "</td>
                                            <td class=\"text-left\">";
        // line 490
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class=\"text-left\">";
        // line 495
        echo ($context["text_default"] ?? null);
        echo "</td>
                                            <td class=\"text-left\"><select name=\"post_layout[0]\" class=\"form-control\">
                                                <option value=\"\"></option>
                                                ";
        // line 498
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 499
            echo "                                                ";
            if (((($__internal_compile_25 = ($context["post_layout"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[0] ?? null) : null) && ((($__internal_compile_26 = ($context["post_layout"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[0] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 499)))) {
                // line 500
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 500);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 500);
                echo "</option>
                                                ";
            } else {
                // line 502
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 502);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 502);
                echo "</option>
                                                ";
            }
            // line 504
            echo "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 505
        echo "                                            </select></td>
                                        </tr>
                                        ";
        // line 507
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 508
            echo "                                        <tr>
                                            <td class=\"text-left\">";
            // line 509
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 509);
            echo "</td>
                                            <td class=\"text-left\"><select name=\"post_layout[";
            // line 510
            echo (($__internal_compile_27 = $context["store"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["store_id"] ?? null) : null);
            echo "]\" class=\"form-control\">
                                                <option value=\"\"></option>
                                                ";
            // line 512
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 513
                echo "                                                ";
                if (((($__internal_compile_28 = ($context["post_layout"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 513)] ?? null) : null) && ((($__internal_compile_29 = ($context["post_layout"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 513)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 513)))) {
                    // line 514
                    echo "                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 514);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 514);
                    echo "</option>
                                                ";
                } else {
                    // line 516
                    echo "                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 516);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 516);
                    echo "</option>
                                                ";
                }
                // line 518
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 519
            echo "                                            </select></td>
                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 522
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
        // line 533
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 534
            echo "                ";
            if (($context["style_short_description_display"] ?? null)) {
                // line 535
                echo "                    \$(\"#input-short-description";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 535);
                echo "\").summernote({ height: 100 });
                ";
            }
            // line 537
            echo "                ";
            if ( !($context["store_2302"] ?? null)) {
                // line 538
                echo "                    \$(\"#input-description";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 538);
                echo "\").summernote({ height: 300 });
                ";
            }
            // line 540
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 541
        echo "                //--></script>
                <script type=\"text/javascript\"><!--
\t\t\t\t// Category
                \$('input[name=\\'category\\']').autocomplete({
                    'source': function (request, response) {
                        \$.ajax({
                            url: '";
        // line 547
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
        // line 596
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
        // line 630
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
        // line 666
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 667
            echo "            html += ' <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "flag", [], "any", false, false, false, 667);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 667);
            echo "\" /></span><textarea class=\"form-control\" name=\"post_video['+token+'][text][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 667);
            echo "]\"></textarea></div>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 669
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
        // line 692
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
        return array (  1532 => 692,  1507 => 669,  1494 => 667,  1490 => 666,  1451 => 630,  1414 => 596,  1362 => 547,  1354 => 541,  1348 => 540,  1342 => 538,  1339 => 537,  1333 => 535,  1330 => 534,  1326 => 533,  1313 => 522,  1305 => 519,  1299 => 518,  1291 => 516,  1283 => 514,  1280 => 513,  1276 => 512,  1271 => 510,  1267 => 509,  1264 => 508,  1260 => 507,  1256 => 505,  1250 => 504,  1242 => 502,  1234 => 500,  1231 => 499,  1227 => 498,  1221 => 495,  1213 => 490,  1209 => 489,  1198 => 480,  1195 => 479,  1186 => 476,  1179 => 475,  1174 => 474,  1172 => 473,  1167 => 471,  1162 => 469,  1156 => 465,  1153 => 464,  1144 => 461,  1137 => 460,  1132 => 459,  1130 => 458,  1125 => 456,  1120 => 454,  1112 => 448,  1103 => 445,  1099 => 444,  1093 => 442,  1089 => 441,  1084 => 439,  1079 => 437,  1070 => 433,  1064 => 430,  1058 => 426,  1049 => 423,  1045 => 422,  1039 => 420,  1035 => 419,  1030 => 417,  1025 => 415,  1016 => 411,  1010 => 408,  1004 => 404,  996 => 401,  991 => 399,  986 => 398,  981 => 396,  976 => 395,  974 => 394,  970 => 392,  966 => 391,  962 => 389,  957 => 387,  954 => 386,  949 => 384,  946 => 383,  944 => 382,  936 => 377,  930 => 373,  927 => 372,  918 => 369,  911 => 368,  906 => 367,  903 => 366,  897 => 364,  895 => 363,  890 => 361,  883 => 359,  854 => 333,  825 => 307,  818 => 303,  805 => 293,  791 => 282,  787 => 281,  767 => 263,  764 => 262,  758 => 261,  756 => 260,  751 => 258,  745 => 257,  739 => 256,  733 => 255,  730 => 254,  717 => 251,  711 => 250,  708 => 249,  704 => 248,  696 => 245,  691 => 244,  686 => 243,  683 => 242,  681 => 241,  674 => 237,  670 => 236,  666 => 235,  662 => 234,  658 => 233,  654 => 232,  644 => 224,  639 => 222,  635 => 221,  630 => 220,  627 => 219,  622 => 217,  618 => 216,  613 => 215,  610 => 214,  605 => 212,  601 => 211,  596 => 210,  594 => 209,  588 => 206,  582 => 202,  577 => 200,  573 => 199,  568 => 198,  565 => 197,  560 => 195,  556 => 194,  551 => 193,  548 => 192,  543 => 190,  539 => 189,  534 => 188,  532 => 187,  526 => 184,  520 => 180,  515 => 178,  510 => 177,  505 => 175,  500 => 174,  498 => 173,  492 => 170,  479 => 162,  471 => 159,  465 => 155,  459 => 154,  451 => 152,  443 => 150,  440 => 149,  436 => 148,  430 => 145,  426 => 144,  417 => 138,  405 => 129,  399 => 128,  389 => 121,  383 => 120,  378 => 118,  368 => 111,  361 => 106,  344 => 101,  335 => 99,  322 => 95,  315 => 93,  302 => 89,  295 => 87,  290 => 84,  284 => 82,  282 => 81,  272 => 80,  265 => 78,  250 => 74,  243 => 72,  230 => 68,  223 => 66,  211 => 61,  206 => 59,  200 => 55,  194 => 53,  192 => 52,  186 => 51,  176 => 50,  169 => 48,  163 => 46,  159 => 45,  155 => 43,  140 => 41,  136 => 40,  128 => 35,  124 => 34,  120 => 33,  116 => 32,  112 => 31,  108 => 30,  103 => 28,  97 => 25,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/d_blog_module/post_form.twig", "");
    }
}
