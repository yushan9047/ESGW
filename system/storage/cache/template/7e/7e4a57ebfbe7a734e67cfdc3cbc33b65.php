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
class __TwigTemplate_4edae0382841079982ade98139cedfe4 extends Template
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
                        <li><a href=\"#tab-related\" data-toggle=\"tab\">";
        // line 32
        echo ($context["tab_related"] ?? null);
        echo "</a></li>
                        <li><a href=\"#tab-youtube\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_youtube"] ?? null);
        echo "</a></li>
                        <li><a href=\"#tab-links\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_links"] ?? null);
        echo "</a></li>
                        <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_design"] ?? null);
        echo "</a></li>
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
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-short-description";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58);
            echo "\">";
            echo ($context["entry_short_description"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <textarea name=\"post_description[";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60);
            echo "][short_description]\" placeholder=\"";
            echo ($context["entry_short_description"] ?? null);
            echo "\" class=\"form-control summernote\" id=\"input-short-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60);
            echo "\">";
            echo (((($__internal_compile_5 = ($context["post_description"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = ($context["post_description"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60)] ?? null) : null), "short_description", [], "any", false, false, false, 60)) : (""));
            echo "</textarea>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 64);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <textarea name=\"post_description[";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66);
            echo "][description]\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"d_visual_designer summernote\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" data-toggle=\"summernote\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66);
            echo "\">";
            echo (((($__internal_compile_7 = ($context["post_description"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = ($context["post_description"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 66)] ?? null) : null), "description", [], "any", false, false, false, 66)) : (""));
            echo "</textarea>
                                        </div>
                                    </div>
                                    <div class=\"form-group required\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 70
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 70);
            echo "\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"text\" name=\"post_description[";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72);
            echo "][meta_title]\" value=\"";
            echo (((($__internal_compile_9 = ($context["post_description"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = ($context["post_description"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72)] ?? null) : null), "meta_title", [], "any", false, false, false, 72)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 72);
            echo "\" class=\"form-control\" />
                                            ";
            // line 73
            if ((($__internal_compile_11 = ($context["error_meta_title"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73)] ?? null) : null)) {
                // line 74
                echo "                                            <div class=\"text-danger\">";
                echo (($__internal_compile_12 = ($context["error_meta_title"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74)] ?? null) : null);
                echo "</div>
                                            ";
            }
            // line 76
            echo "                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 79
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 79);
            echo "\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <textarea name=\"post_description[";
            // line 81
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 81);
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 81);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_13 = ($context["post_description"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 81)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = ($context["post_description"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 81)] ?? null) : null), "meta_description", [], "any", false, false, false, 81)) : (""));
            echo "</textarea>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 85
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85);
            echo "\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <textarea name=\"post_description[";
            // line 87
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_15 = ($context["post_description"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_16 = ($context["post_description"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 87)) : (""));
            echo "</textarea>
                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-tag";
            // line 91
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_tag"] ?? null);
            echo "\">";
            echo ($context["entry_tag"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"post_description[";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93);
            echo "][tag]\" data-role=\"tagsinput\" value=\"";
            echo (((($__internal_compile_17 = ($context["post_description"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_18 = ($context["post_description"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93)] ?? null) : null), "tag", [], "any", false, false, false, 93)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_tag"] ?? null);
            echo "\" id=\"input-tag";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                            </div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-url\">平台網址</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"url\" value=\"";
        // line 103
        echo ($context["url"] ?? null);
        echo "\" placeholder=\"平台網址\" id=\"input-url\" class=\"form-control\" />
                                </div>
                            </div>
\t\t\t\t\t\t\t
                        </div>
                        <div class=\"tab-pane\" id=\"tab-data\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 110
        echo ($context["entry_image"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 112
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                                    <input type=\"hidden\" name=\"image\" value=\"";
        // line 113
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\" />
                                </div>
                            </div>
                            <div class=\"form-group ";
        // line 116
        echo ((($context["change_author"] ?? null)) ? ("") : ("hidden"));
        echo "\">
                                <label class=\"col-sm-2 control-label\" for=\"input-author\">";
        // line 117
        echo ($context["entry_author"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select class=\"form-control\" name=\"current_author\">
                                        ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["authors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 121
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["author"], "user_id", [], "any", false, false, false, 121) == ($context["current_author"] ?? null))) {
                // line 122
                echo "                                        <option selected=\"selected\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["author"], "user_id", [], "any", false, false, false, 122);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["author"], "name", [], "any", false, false, false, 122);
                echo "</option>
                                        ";
            } else {
                // line 124
                echo "                                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["author"], "user_id", [], "any", false, false, false, 124);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["author"], "name", [], "any", false, false, false, 124);
                echo "</option>
                                        ";
            }
            // line 126
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-published\"><span data-toggle=\"tooltip\" title=\"";
        // line 131
        echo ($context["help_date_published"] ?? null);
        echo "\">";
        echo ($context["entry_date_published"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <div class=\"input-group date\">
                                        <input type=\"text\" name=\"date_published\" value=\"";
        // line 134
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
        // line 142
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"status\" id=\"input-status\" class=\"form-control\">
                                        ";
        // line 145
        if (($context["status"] ?? null)) {
            // line 146
            echo "                                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\">";
            // line 147
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        } else {
            // line 149
            echo "                                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 150
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                        ";
        }
        // line 152
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-review-display\">";
        // line 156
        echo ($context["entry_review_display"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"review_display\" id=\"input-review-display\" class=\"form-control\">
                                        ";
        // line 159
        if ((($context["review_display"] ?? null) == 0)) {
            // line 160
            echo "                                        <option value=\"0\" selected=\"selected\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                                        <option value=\"1\">";
            // line 161
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                        <option value=\"2\">";
            // line 162
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        }
        // line 164
        echo "                                        ";
        if ((($context["review_display"] ?? null) == 1)) {
            // line 165
            echo "                                        <option value=\"0\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                                        <option value=\"1\" selected=\"selected\">";
            // line 166
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                        <option value=\"2\">";
            // line 167
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        }
        // line 169
        echo "                                        ";
        if ((($context["review_display"] ?? null) == 2)) {
            // line 170
            echo "                                        <option value=\"0\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                                        <option value=\"1\">";
            // line 171
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                        <option value=\"2\" selected=\"selected\">";
            // line 172
            echo ($context["text_no"] ?? null);
            echo "</option>
                                       ";
        }
        // line 174
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-images-review\">";
        // line 178
        echo ($context["entry_images_review"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"images_review\" id=\"input-images-review\" class=\"form-control\">
                                        ";
        // line 181
        if ((($context["images_review"] ?? null) == 0)) {
            // line 182
            echo "                                        <option value=\"0\" selected=\"selected\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                                        <option value=\"1\">";
            // line 183
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                        <option value=\"2\">";
            // line 184
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        }
        // line 186
        echo "                                        ";
        if ((($context["images_review"] ?? null) == 1)) {
            // line 187
            echo "                                        <option value=\"0\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                                        <option value=\"1\" selected=\"selected\">";
            // line 188
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                        <option value=\"2\">";
            // line 189
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        }
        // line 191
        echo "                                        ";
        if ((($context["images_review"] ?? null) == 2)) {
            // line 192
            echo "                                        <option value=\"0\">";
            echo ($context["text_default"] ?? null);
            echo "</option>
                                        <option value=\"1\">";
            // line 193
            echo ($context["text_yes"] ?? null);
            echo "</option>
                                        <option value=\"2\" selected=\"selected\">";
            // line 194
            echo ($context["text_no"] ?? null);
            echo "</option>
                                        ";
        }
        // line 196
        echo "                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-youtube\">
                            <table class=\"table table-bordered\">
                                <thead>
                                    <tr>
                                        <th style=\"width:15%;\">";
        // line 204
        echo ($context["text_youtube_url"] ?? null);
        echo "</th>
                                        <th style=\"width:66%;\">";
        // line 205
        echo ($context["text_youtube_title"] ?? null);
        echo "</th>
                                        <th style=\"width:5%;\">";
        // line 206
        echo ($context["text_youtube_width"] ?? null);
        echo "</th>
                                        <th style=\"width:5%;\">";
        // line 207
        echo ($context["text_youtube_height"] ?? null);
        echo "</th>
                                        <th style=\"width:6%;\">";
        // line 208
        echo ($context["text_youtube_sort_order"] ?? null);
        echo "</th>
                                        <th style=\"width:3%;\">";
        // line 209
        echo ($context["text_youtube_action"] ?? null);
        echo "</th>
                                    </tr>
                                </thead>
                                <tbody id=\"tbody\">
                                    ";
        // line 213
        if (($context["post_videos"] ?? null)) {
            // line 214
            echo "                                    ";
            $context["video_row"] = 0;
            // line 215
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["post_videos"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post_video"]) {
                // line 216
                echo "                                    <tr id=\"video_row_";
                echo ($context["video_row"] ?? null);
                echo "\">
                                        <td><input class=\"form-control\" type=\"text\" value=\"";
                // line 217
                echo twig_get_attribute($this->env, $this->source, $context["post_video"], "video", [], "any", false, false, false, 217);
                echo "\" name=\"post_video[";
                echo ($context["video_row"] ?? null);
                echo "][video]\"></td>
                                        <td>

                                            ";
                // line 220
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 221
                    echo "                                            <div class=\"input-group\">
                                                <span class=\"input-group-addon\"><img src=\"";
                    // line 222
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "flag", [], "any", false, false, false, 222);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 222);
                    echo "\" /></span>
                                                <textarea style=\"min-width: 100%;\" class=\"form-control\" type=\"text\" name=\"post_video[";
                    // line 223
                    echo ($context["video_row"] ?? null);
                    echo "][text][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 223);
                    echo "]\">";
                    echo (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, $context["post_video"], "text", [], "any", false, false, false, 223)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 223)] ?? null) : null);
                    echo "</textarea>
                                            </div>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 226
                echo "                                        </td>
                                        <td><input class=\"form-control\" type=\"text\" value=\"";
                // line 227
                echo twig_get_attribute($this->env, $this->source, $context["post_video"], "width", [], "any", false, false, false, 227);
                echo "\" name=\"post_video[";
                echo ($context["video_row"] ?? null);
                echo "][width]\"></td>
                                        <td><input class=\"form-control\" type=\"text\" value=\"";
                // line 228
                echo twig_get_attribute($this->env, $this->source, $context["post_video"], "height", [], "any", false, false, false, 228);
                echo "\" name=\"post_video[";
                echo ($context["video_row"] ?? null);
                echo "][height]\"></td>
                                        <td><input class=\"form-control\" type=\"text\" value=\"";
                // line 229
                echo twig_get_attribute($this->env, $this->source, $context["post_video"], "sort_order", [], "any", false, false, false, 229);
                echo "\" name=\"post_video[";
                echo ($context["video_row"] ?? null);
                echo "][sort_order]\"></td>
                                        <td><a class=\"btn btn-danger\" onclick=\"RemoveVideo('video_row_";
                // line 230
                echo ($context["video_row"] ?? null);
                echo "');\"><i class=\"fa fa-minus\"></i></a></td>
                                    </tr>
                                    ";
                // line 232
                $context["video_row"] = (($context["video_row"] ?? null) + 1);
                // line 233
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post_video'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            echo "                                    ";
        }
        // line 235
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
        // line 253
        echo ($context["text_yes"] ?? null);
        echo "',
                                        'offText': '";
        // line 254
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
        // line 265
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
        // line 275
        echo ($context["limit_access_user_group"] ?? null);
        echo ");
                                    \$('input[name=\"user\"]').autocomplete({
                                        'source': function (request, response) {
                                            \$.ajax({
                                                url: 'index.php?route=customer/customer/autocomplete&";
        // line 279
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
        // line 305
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
        // line 331
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 333
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
                                    <div id=\"post-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 335
        if ((($__internal_compile_20 = ($context["error_post_category"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 335)] ?? null) : null)) {
            // line 336
            echo "                                        <div class=\"text-danger\">";
            echo (($__internal_compile_21 = ($context["error_post_category"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[twig_get_attribute($this->env, $this->source, ($context["language"] ?? null), "language_id", [], "any", false, false, false, 336)] ?? null) : null);
            echo "</div>
                                        ";
        }
        // line 338
        echo "                                        ";
        if (($context["post_categories"] ?? null)) {
            // line 339
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["post_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post_category"]) {
                // line 340
                echo "                                        <div id=\"post-category";
                echo twig_get_attribute($this->env, $this->source, $context["post_category"], "category_id", [], "any", false, false, false, 340);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["post_category"], "title", [], "any", false, false, false, 340);
                echo "
                                            <input type=\"hidden\" name=\"post_category[]\" value=\"";
                // line 341
                echo twig_get_attribute($this->env, $this->source, $context["post_category"], "category_id", [], "any", false, false, false, 341);
                echo "\" />
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 344
            echo "                                        ";
        }
        // line 345
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">";
        // line 349
        echo ($context["entry_store"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        <div class=\"checkbox\">
                                            <label>
                                                ";
        // line 354
        if (twig_in_filter(0, ($context["post_store"] ?? null))) {
            // line 355
            echo "                                                <input type=\"checkbox\" name=\"post_store[]\" value=\"0\" checked=\"checked\" />
                                                ";
            // line 356
            echo ($context["text_default"] ?? null);
            echo "
                                                ";
        } else {
            // line 358
            echo "                                                <input type=\"checkbox\" name=\"post_store[]\" value=\"0\" />
                                                ";
            // line 359
            echo ($context["text_default"] ?? null);
            echo "
                                                ";
        }
        // line 361
        echo "                                            </label>
                                        </div>
                                        ";
        // line 363
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 364
            echo "                                        <div class=\"checkbox\">
                                            <label>
                                                ";
            // line 366
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 366), ($context["post_store"] ?? null))) {
                // line 367
                echo "                                                <input type=\"checkbox\" name=\"post_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 367);
                echo "\" checked=\"checked\" />
                                                ";
                // line 368
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 368);
                echo "
                                                ";
            } else {
                // line 370
                echo "                                                <input type=\"checkbox\" name=\"post_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 370);
                echo "\" />
                                                ";
                // line 371
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 371);
                echo "
                                                ";
            }
            // line 373
            echo "                                            </label>
                                        </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 376
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-limit-access-user\">";
        // line 380
        echo ($context["entry_limit_access_user"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"hidden\" name=\"limit_access_user\" value=\"0\" />
                                    <input type=\"checkbox\" name=\"limit_access_user\" class=\"switcher\" data-label-text=\"";
        // line 383
        echo ($context["text_enabled"] ?? null);
        echo "\" id=\"input-limit-access-user\" ";
        echo ((($context["limit_access_user"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " value=\"1\" />
                                </div>
                            </div>
                            <div class=\"form-group\" id=\"users\">
                                <label class=\"col-sm-2 control-label\" for=\"input-user\">";
        // line 387
        echo ($context["entry_user"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"user\" value=\"\" placeholder=\"";
        // line 389
        echo ($context["entry_user"] ?? null);
        echo "\" id=\"input-user\" class=\"form-control\" />
                                    <div id=\"access-user\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 391
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 392
            echo "                                            <div id=\"access-user";
            echo $context["key"];
            echo "\">
                                                <i class=\"fa fa-minus-circle\"></i>
                                                ";
            // line 394
            echo $context["value"];
            echo "
                                                <input type=\"hidden\" name=\"access_user[]\" value=\"";
            // line 395
            echo $context["key"];
            echo "\" />
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 398
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-limit-access-user-group\">";
        // line 402
        echo ($context["entry_limit_access_user_group"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"hidden\" name=\"limit_access_user_group\" value=\"0\" />
                                    <input type=\"checkbox\" name=\"limit_access_user_group\" class=\"switcher\" data-label-text=\"";
        // line 405
        echo ($context["text_enabled"] ?? null);
        echo "\" id=\"input-limit-access-user-group\" ";
        echo ((($context["limit_access_user_group"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " value=\"1\" />
                                </div>
                            </div>
                            <div class=\"form-group\" id=\"user_groups\">
                                <label class=\"col-sm-2 control-label\" for=\"input-user-group\">";
        // line 409
        echo ($context["entry_user_group"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"user_group\" value=\"\" placeholder=\"";
        // line 411
        echo ($context["entry_user_group"] ?? null);
        echo "\" id=\"input-user-group\" class=\"form-control\" />
                                    <div id=\"access-user-group\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 413
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user_groups"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 414
            echo "                                            <div id=\"access-user-group";
            echo $context["key"];
            echo "\">
                                                <i class=\"fa fa-minus-circle\"></i>
                                                ";
            // line 416
            echo $context["value"];
            echo "
                                                <input type=\"hidden\" name=\"access_user_group[]\" value=\"";
            // line 417
            echo $context["key"];
            echo "\" />
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 420
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-related\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 426
        echo ($context["entry_product"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"product\" value=\"\" placeholder=\"";
        // line 428
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                                    <div id=\"post_product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 430
        if ((twig_length_filter($this->env, ($context["post_products"] ?? null)) > 0)) {
            // line 431
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["post_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post_product"]) {
                // line 432
                echo "                                        <div id=\"post_product";
                echo twig_get_attribute($this->env, $this->source, $context["post_product"], "product_id", [], "any", false, false, false, 432);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["post_product"], "title", [], "any", false, false, false, 432);
                echo "
                                            <input type=\"hidden\" name=\"post_product[]\" value=\"";
                // line 433
                echo twig_get_attribute($this->env, $this->source, $context["post_product"], "product_id", [], "any", false, false, false, 433);
                echo "\" />
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post_product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 436
            echo "                                        ";
        }
        // line 437
        echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 441
        echo ($context["entry_post"] ?? null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" name=\"post\" value=\"\" placeholder=\"";
        // line 443
        echo ($context["entry_post"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
                                    <div id=\"related_post\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                        ";
        // line 445
        if ((twig_length_filter($this->env, ($context["related_posts"] ?? null)) > 0)) {
            // line 446
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["related_posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["related_post"]) {
                // line 447
                echo "                                        <div id=\"related_post";
                echo twig_get_attribute($this->env, $this->source, $context["related_post"], "post_id", [], "any", false, false, false, 447);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["related_post"], "title", [], "any", false, false, false, 447);
                echo "
                                            <input type=\"hidden\" name=\"related_post[]\" value=\"";
                // line 448
                echo twig_get_attribute($this->env, $this->source, $context["related_post"], "post_id", [], "any", false, false, false, 448);
                echo "\" />
                                        </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related_post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 451
            echo "                                        ";
        }
        // line 452
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
        // line 461
        echo ($context["entry_store"] ?? null);
        echo "</td>
                                            <td class=\"text-left\">";
        // line 462
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class=\"text-left\">";
        // line 467
        echo ($context["text_default"] ?? null);
        echo "</td>
                                            <td class=\"text-left\"><select name=\"post_layout[0]\" class=\"form-control\">
                                                <option value=\"\"></option>
                                                ";
        // line 470
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 471
            echo "                                                ";
            if (((($__internal_compile_22 = ($context["post_layout"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[0] ?? null) : null) && ((($__internal_compile_23 = ($context["post_layout"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[0] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 471)))) {
                // line 472
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 472);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 472);
                echo "</option>
                                                ";
            } else {
                // line 474
                echo "                                                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 474);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 474);
                echo "</option>
                                                ";
            }
            // line 476
            echo "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 477
        echo "                                            </select></td>
                                        </tr>
                                        ";
        // line 479
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 480
            echo "                                        <tr>
                                            <td class=\"text-left\">";
            // line 481
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 481);
            echo "</td>
                                            <td class=\"text-left\"><select name=\"post_layout[";
            // line 482
            echo (($__internal_compile_24 = $context["store"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["store_id"] ?? null) : null);
            echo "]\" class=\"form-control\">
                                                <option value=\"\"></option>
                                                ";
            // line 484
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 485
                echo "                                                ";
                if (((($__internal_compile_25 = ($context["post_layout"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 485)] ?? null) : null) && ((($__internal_compile_26 = ($context["post_layout"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 485)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 485)))) {
                    // line 486
                    echo "                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 486);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 486);
                    echo "</option>
                                                ";
                } else {
                    // line 488
                    echo "                                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 488);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 488);
                    echo "</option>
                                                ";
                }
                // line 490
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 491
            echo "                                            </select></td>
                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 494
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
        // line 505
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 506
            echo "                ";
            if (($context["style_short_description_display"] ?? null)) {
                // line 507
                echo "                    \$(\"#input-short-description";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 507);
                echo "\").summernote({ height: 100 });
                ";
            }
            // line 509
            echo "                ";
            if ( !($context["store_2302"] ?? null)) {
                // line 510
                echo "                    \$(\"#input-description";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 510);
                echo "\").summernote({ height: 300 });
                ";
            }
            // line 512
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 513
        echo "                //--></script>
                <script type=\"text/javascript\"><!--
\t\t\t\t// Category
                \$('input[name=\\'category\\']').autocomplete({
                    'source': function (request, response) {
                        \$.ajax({
                            url: '";
        // line 519
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
        // line 568
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
        // line 602
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
        // line 638
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 639
            echo "            html += ' <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "flag", [], "any", false, false, false, 639);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 639);
            echo "\" /></span><textarea class=\"form-control\" name=\"post_video['+token+'][text][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 639);
            echo "]\"></textarea></div>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 641
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
        // line 664
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
        return array (  1483 => 664,  1458 => 641,  1445 => 639,  1441 => 638,  1402 => 602,  1365 => 568,  1313 => 519,  1305 => 513,  1299 => 512,  1293 => 510,  1290 => 509,  1284 => 507,  1281 => 506,  1277 => 505,  1264 => 494,  1256 => 491,  1250 => 490,  1242 => 488,  1234 => 486,  1231 => 485,  1227 => 484,  1222 => 482,  1218 => 481,  1215 => 480,  1211 => 479,  1207 => 477,  1201 => 476,  1193 => 474,  1185 => 472,  1182 => 471,  1178 => 470,  1172 => 467,  1164 => 462,  1160 => 461,  1149 => 452,  1146 => 451,  1137 => 448,  1130 => 447,  1125 => 446,  1123 => 445,  1118 => 443,  1113 => 441,  1107 => 437,  1104 => 436,  1095 => 433,  1088 => 432,  1083 => 431,  1081 => 430,  1076 => 428,  1071 => 426,  1063 => 420,  1054 => 417,  1050 => 416,  1044 => 414,  1040 => 413,  1035 => 411,  1030 => 409,  1021 => 405,  1015 => 402,  1009 => 398,  1000 => 395,  996 => 394,  990 => 392,  986 => 391,  981 => 389,  976 => 387,  967 => 383,  961 => 380,  955 => 376,  947 => 373,  942 => 371,  937 => 370,  932 => 368,  927 => 367,  925 => 366,  921 => 364,  917 => 363,  913 => 361,  908 => 359,  905 => 358,  900 => 356,  897 => 355,  895 => 354,  887 => 349,  881 => 345,  878 => 344,  869 => 341,  862 => 340,  857 => 339,  854 => 338,  848 => 336,  846 => 335,  841 => 333,  834 => 331,  805 => 305,  776 => 279,  769 => 275,  756 => 265,  742 => 254,  738 => 253,  718 => 235,  715 => 234,  709 => 233,  707 => 232,  702 => 230,  696 => 229,  690 => 228,  684 => 227,  681 => 226,  668 => 223,  662 => 222,  659 => 221,  655 => 220,  647 => 217,  642 => 216,  637 => 215,  634 => 214,  632 => 213,  625 => 209,  621 => 208,  617 => 207,  613 => 206,  609 => 205,  605 => 204,  595 => 196,  590 => 194,  586 => 193,  581 => 192,  578 => 191,  573 => 189,  569 => 188,  564 => 187,  561 => 186,  556 => 184,  552 => 183,  547 => 182,  545 => 181,  539 => 178,  533 => 174,  528 => 172,  524 => 171,  519 => 170,  516 => 169,  511 => 167,  507 => 166,  502 => 165,  499 => 164,  494 => 162,  490 => 161,  485 => 160,  483 => 159,  477 => 156,  471 => 152,  466 => 150,  461 => 149,  456 => 147,  451 => 146,  449 => 145,  443 => 142,  430 => 134,  422 => 131,  416 => 127,  410 => 126,  402 => 124,  394 => 122,  391 => 121,  387 => 120,  381 => 117,  377 => 116,  371 => 113,  365 => 112,  360 => 110,  350 => 103,  343 => 98,  326 => 93,  317 => 91,  304 => 87,  297 => 85,  284 => 81,  277 => 79,  272 => 76,  266 => 74,  264 => 73,  254 => 72,  247 => 70,  232 => 66,  225 => 64,  212 => 60,  205 => 58,  200 => 55,  194 => 53,  192 => 52,  186 => 51,  176 => 50,  169 => 48,  163 => 46,  159 => 45,  155 => 43,  140 => 41,  136 => 40,  128 => 35,  124 => 34,  120 => 33,  116 => 32,  112 => 31,  108 => 30,  103 => 28,  97 => 25,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/d_blog_module/post_form.twig", "");
    }
}
