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

/* extension/d_blog_module/category_form.twig */
class __TwigTemplate_8aa0094638948ed708cf8fb86aa52852 extends Template
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
        <button type=\"submit\" form=\"form-category\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-category\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 29
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_data"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-setting\" data-toggle=\"tab\">";
        // line 31
        echo ($context["tab_setting"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-links\" data-toggle=\"tab\">";
        // line 32
        echo ($context["tab_links"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_design"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active in\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 39
            echo "                <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 39);
            echo "\" data-toggle=\"tab\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "flag", [], "any", false, false, false, 39);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 39);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 39);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "              </ul>
              <div class=\"tab-content\">
                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 44
            echo "                <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44);
            echo "\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 46);
            echo "\">";
            echo ($context["entry_title"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_description[";
            // line 48
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48);
            echo "][title]\" value=\"";
            echo (((($__internal_compile_0 = ($context["category_description"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["category_description"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48)] ?? null) : null), "title", [], "any", false, false, false, 48)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" id=\"input-name";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48);
            echo "\" class=\"form-control\" />
                      ";
            // line 49
            if ((($__internal_compile_2 = ($context["error_name"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 49)] ?? null) : null)) {
                // line 50
                echo "                      <div class=\"text-danger\">";
                echo (($__internal_compile_3 = ($context["error_name"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 50)] ?? null) : null);
                echo "</div>
                      ";
            }
            // line 52
            echo "                    </div>
                  </div>
\t\t\t\t  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-short-description";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55);
            echo "\">";
            echo ($context["entry_short_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                        <textarea name=\"category_description[";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57);
            echo "][short_description]\" placeholder=\"";
            echo ($context["entry_short_description"] ?? null);
            echo "\" class=\"form-control summernote\" id=\"input-short-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57);
            echo "\">";
            echo (((($__internal_compile_4 = ($context["category_description"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["category_description"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57)] ?? null) : null), "short_description", [], "any", false, false, false, 57)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"category_description[";
            // line 63
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"d_visual_designer form-control summernote\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63);
            echo "\" data-toggle=\"summernote\" >";
            echo (((($__internal_compile_6 = ($context["category_description"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["category_description"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63)] ?? null) : null), "description", [], "any", false, false, false, 63)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67);
            echo "\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_description[";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69);
            echo "][meta_title]\" value=\"";
            echo (((($__internal_compile_8 = ($context["category_description"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = ($context["category_description"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69)] ?? null) : null), "meta_title", [], "any", false, false, false, 69)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69);
            echo "\" class=\"form-control\" />
                      ";
            // line 70
            if ((($__internal_compile_10 = ($context["error_meta_title"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 70)] ?? null) : null)) {
                // line 71
                echo "                      <div class=\"text-danger\">";
                echo (($__internal_compile_11 = ($context["error_meta_title"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 71)] ?? null) : null);
                echo "</div>
                      ";
            }
            // line 73
            echo "                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76);
            echo "\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"category_description[";
            // line 78
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78);
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_12 = ($context["category_description"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = ($context["category_description"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 78)] ?? null) : null), "meta_description", [], "any", false, false, false, 78)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 82
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 82);
            echo "\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"category_description[";
            // line 84
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 84);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 84);
            echo "\" class=\"form-control\">";
            echo (((($__internal_compile_14 = ($context["category_description"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 84)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = ($context["category_description"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 84)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 84)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "              </div>
            </div>
            <div class=\"tab-pane fade\" id=\"tab-data\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-parent\">";
        // line 93
        echo ($context["entry_parent"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"path\" value=\"";
        // line 95
        echo ($context["path"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_parent"] ?? null);
        echo "\" id=\"input-parent\" class=\"form-control\" />
                  <input type=\"hidden\" name=\"parent_id\" value=\"";
        // line 96
        echo ($context["parent_id"] ?? null);
        echo "\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 100
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    <div class=\"checkbox\">
                      <label>
                        ";
        // line 105
        if (twig_in_filter(0, ($context["category_store"] ?? null))) {
            // line 106
            echo "                        <input type=\"checkbox\" name=\"category_store[]\" value=\"0\" checked=\"checked\" />
                        ";
            // line 107
            echo ($context["text_default"] ?? null);
            echo "
                        ";
        } else {
            // line 109
            echo "                        <input type=\"checkbox\" name=\"category_store[]\" value=\"0\" />
                        ";
            // line 110
            echo ($context["text_default"] ?? null);
            echo "
                        ";
        }
        // line 112
        echo "                      </label>
                    </div>
                    ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 115
            echo "                    <div class=\"checkbox\">
                      <label>
                        ";
            // line 117
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 117), ($context["category_store"] ?? null))) {
                // line 118
                echo "                        <input type=\"checkbox\" name=\"category_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 118);
                echo "\" checked=\"checked\" />
                        ";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 119);
                echo "
                        ";
            } else {
                // line 121
                echo "                        <input type=\"checkbox\" name=\"category_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 121);
                echo "\" />
                        ";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 122);
                echo "
                        ";
            }
            // line 124
            echo "                      </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                  </div>
                </div>
              </div>
              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 132
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 133
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"image\" value=\"";
        // line 134
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 138
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 140
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 144
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 147
        if (($context["status"] ?? null)) {
            // line 148
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 149
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 151
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 152
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 154
        echo "                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-setting\">
                <div class=\"tab-body\">

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input_category_custom\">";
        // line 162
        echo ($context["entry_category_custom"] ?? null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"hidden\" name=\"custom\" value=\"0\" />
                            <input type=\"checkbox\" class=\"switcher\" data-label-text=\"";
        // line 165
        echo ($context["text_enabled"] ?? null);
        echo "\" id=\"input_category_custom\" name=\"custom\" ";
        echo ((($context["custom"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " value=\"1\" />
                        </div>
                    </div><!-- //checkbox -->
                    <div id=\"input_category_custom_form\" ";
        // line 168
        echo ((($context["custom"] ?? null)) ? ("") : ("class=\"hide\""));
        echo " >
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input_category_layout_type\">";
        // line 170
        echo ($context["entry_category_layout_type"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <div class=\"btn-group colors\" data-toggle=\"buttons\">
                                    ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_type"]) {
            // line 174
            echo "                                    <label class=\"btn btn-default ";
            if ((twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "layout_type", [], "any", false, false, false, 174) && (twig_get_attribute($this->env, $this->source, $context["layout_type"], "id", [], "any", false, false, false, 174) == twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "layout_type", [], "any", false, false, false, 174)))) {
                echo "active";
            }
            echo "\"
                                     data-toggle=\"tooltip\" data-html=\"true\" title=\"";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["layout_type"], "description", [], "any", false, false, false, 175), "html");
            echo "\">
                                        <input type=\"radio\" name=\"setting[layout_type]\" value=\"";
            // line 176
            echo twig_get_attribute($this->env, $this->source, $context["layout_type"], "id", [], "any", false, false, false, 176);
            echo "\" autocomplete=\"off\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "layout_type", [], "any", false, false, false, 176) && (twig_get_attribute($this->env, $this->source, $context["layout_type"], "id", [], "any", false, false, false, 176) == twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "layout_type", [], "any", false, false, false, 176)))) {
                echo "checked";
            }
            echo "> ";
            echo twig_get_attribute($this->env, $this->source, $context["layout_type"], "name", [], "any", false, false, false, 176);
            echo "
                                    </label>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                                </div>
                            </div>
                        </div><!-- //status -->



                        <div class=\"form-group\" id=\"category_layout\">
                            <label class=\"col-sm-2 control-label\" for=\"input_category_layout\">";
        // line 186
        echo ($context["entry_category_layout"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10 \">
                                <div class=\"input\">

                                ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "layout", [], "any", false, false, false, 190));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 191
            echo "
                                <div class=\"input-group m-b\">
                                    <select name=\"setting[layout][]\"  class=\"form-control\">
                                        ";
            // line 194
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cols"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                // line 195
                echo "                                        <option value=\"";
                echo $context["col"];
                echo "\" ";
                if (($context["layout"] == $context["col"])) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo $context["col"];
                echo "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "                                    </select>
                                    <span class=\"input-group-btn\">
                                        <button class=\"btn btn-default remove\" >";
            // line 199
            echo ($context["button_remove"] ?? null);
            echo "</button>
                                    </span>
                                </div><!-- /input-group -->

                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "                                </div>
                                <button class=\"btn btn-default add m-b\">";
        // line 205
        echo ($context["button_add"] ?? null);
        echo "</button>
                                <div class=\"bs-callout bs-callout-warning\">
                                    ";
        // line 207
        echo ($context["help_layout"] ?? null);
        echo "
                                </div>
                            </div>
                            <script type=\"text\" id=\"template_input_category_layout\">
                                <div class=\"input-group m-b\">
                                        <select name=\"setting[layout][]\" class=\"form-control\">
                                            ";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cols"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 214
            echo "                                               <option value=\"";
            echo $context["col"];
            echo "\">";
            echo $context["col"];
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "                                        </select>

                                      <span class=\"input-group-btn\">
                                        <button class=\"btn btn-default remove\" >";
        // line 219
        echo ($context["button_remove"] ?? null);
        echo "</button>
                                      </span>
                                </div>
                            </script>
                            <script>
                            var \$category_layout = \$('#category_layout');
                            \$(document).on('click', '#category_layout .add', function(e){

                                var html = \$('#template_input_category_layout').html();
                                \$category_layout.find('.input').append(html);
                                e.preventDefault();
                            })
                            \$(document).on('click', '#category_layout .remove', function(e){
                                \$(this).parents('.input-group').remove()
                                e.preventDefault();
                            })

                            </script>
                        </div>


                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input_text\">";
        // line 241
        echo ($context["entry_category_post_page_limit"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"setting[post_page_limit]\" value=\"";
        // line 243
        echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_page_limit", [], "any", false, false, false, 243);
        echo "\" placeholder=\"";
        echo ($context["entry_category_post_page_limit"] ?? null);
        echo "\"  class=\"form-control\" />
                            </div>
                        </div><!-- //post_page_limit -->
                        
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input_checkbox\">";
        // line 248
        echo ($context["entry_category_image_display"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"hidden\" name=\"setting[image_display]\" value=\"0\" />
                                <input type=\"checkbox\" class=\"switcher\" data-label-text=\"";
        // line 251
        echo ($context["text_enabled"] ?? null);
        echo "\" id=\"input_category_image_display\" name=\"setting[image_display]\" ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "image_display", [], "any", false, false, false, 251)) ? ("checked=\"checked\"") : (""));
        echo " value=\"1\" />
                            </div>
                        </div><!-- //checkbox -->

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input_text\">";
        // line 256
        echo ($context["entry_category_image_size"] ?? null);
        echo "</label>
                            <div class=\"col-sm-5\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">";
        // line 259
        echo ($context["text_width"] ?? null);
        echo "</span>
                                    <input type=\"text\" name=\"setting[image_width]\" value=\"";
        // line 260
        echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "image_width", [], "any", false, false, false, 260);
        echo "\" placeholder=\"";
        echo ($context["text_width"] ?? null);
        echo "\"  class=\"form-control\" />
                                </div>


                            </div>
                            <div class=\"col-sm-5\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">";
        // line 267
        echo ($context["text_height"] ?? null);
        echo "</span>
                                    <input type=\"text\" name=\"setting[image_height]\" value=\"";
        // line 268
        echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "image_height", [], "any", false, false, false, 268);
        echo "\" placeholder=\"";
        echo ($context["text_height"] ?? null);
        echo "\"  class=\"form-control\" />
                                </div>
                            </div>
                        </div><!-- //category_image -->

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input_checkbox\">";
        // line 274
        echo ($context["entry_category_sub_category_display"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"hidden\" name=\"setting[sub_category_display]\" value=\"0\" />
                                <input type=\"checkbox\" class=\"switcher\" data-label-text=\"";
        // line 277
        echo ($context["text_enabled"] ?? null);
        echo "\" id=\"input_category_sub_category_display\" name=\"setting[sub_category_display]\" ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "sub_category_display", [], "any", false, false, false, 277)) ? ("checked=\"checked\"") : (""));
        echo " value=\"1\" />
                            </div>
                        </div><!-- //checkbox -->


                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input_select\">";
        // line 283
        echo ($context["entry_category_sub_category_col"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"setting[sub_category_col]\" id=\"input_category_sub_category_col\" class=\"form-control\">
                                    ";
        // line 286
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cols"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 287
            echo "                                    <option value=\"";
            echo $context["col"];
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "sub_category_col", [], "any", false, false, false, 287) == $context["col"])) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo $context["col"];
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        echo "                                </select>
                            </div>
                        </div><!-- //select -->

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input_checkbox\">";
        // line 294
        echo ($context["entry_category_sub_category_image"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"hidden\" name=\"setting[sub_category_image]\" value=\"0\" />
                                <input type=\"checkbox\" class=\"switcher\" data-label-text=\"";
        // line 297
        echo ($context["text_enabled"] ?? null);
        echo "\"id=\"input_category_sub_category_image\" name=\"setting[sub_category_image]\" ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "sub_category_image", [], "any", false, false, false, 297)) ? ("checked=\"checked\"") : (""));
        echo " value=\"1\" />
                            </div>
                        </div><!-- //checkbox -->

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input_checkbox\">";
        // line 302
        echo ($context["entry_category_sub_category_post_count"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"hidden\" name=\"setting[sub_category_post_count]\" value=\"0\" />
                                <input type=\"checkbox\" class=\"switcher\" data-label-text=\"";
        // line 305
        echo ($context["text_enabled"] ?? null);
        echo "\" id=\"input_category_sub_category_post_count\" name=\"setting[sub_category_post_count]\" ";
        echo ((twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "sub_category_post_count", [], "any", false, false, false, 305)) ? ("checked=\"checked\"") : (""));
        echo " value=\"1\" />
                            </div>
                        </div><!-- //checkbox -->

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input_text\">";
        // line 310
        echo ($context["entry_category_sub_category_image_size"] ?? null);
        echo "</label>
                            <div class=\"col-sm-5\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">";
        // line 313
        echo ($context["text_width"] ?? null);
        echo "</span>
                                    <input type=\"text\" name=\"setting[sub_category_image_width]\" value=\"";
        // line 314
        echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "sub_category_image_width", [], "any", false, false, false, 314);
        echo "\" placeholder=\"";
        echo ($context["text_width"] ?? null);
        echo "\" class=\"form-control\" />
                                </div>


                            </div>
                            <div class=\"col-sm-5\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\">";
        // line 321
        echo ($context["text_height"] ?? null);
        echo "</span>
                                    <input type=\"text\" name=\"setting[sub_category_image_height]\" value=\"";
        // line 322
        echo twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "sub_category_image_height", [], "any", false, false, false, 322);
        echo "\" placeholder=\"";
        echo ($context["text_height"] ?? null);
        echo "\"  class=\"form-control\" />
                                </div>
                            </div>
                        </div><!-- //category_image -->
                    </div>
                </div>
            </div>

            <div class=\"tab-pane\" id=\"tab-links\">
              <script type=\"application/javascript\">
                  \$(document).ready(function() {
                      \$(\".switcher[type='checkbox']\").bootstrapSwitch({
                          'onColor': 'success',
                          'onText': '";
        // line 335
        echo ($context["text_yes"] ?? null);
        echo "',
                          'offText': '";
        // line 336
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
        // line 347
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
        // line 357
        echo ($context["limit_access_user_group"] ?? null);
        echo ");
                      \$('input[name=\"user\"]').autocomplete({
                          'source': function (request, response) {
                              \$.ajax({
                                  url: 'index.php?route=customer/customer/autocomplete&";
        // line 361
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
        // line 387
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
              <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-limit-access-user\">";
        // line 413
        echo ($context["entry_limit_access_user"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                      <input type=\"hidden\" name=\"limit_access_user\" value=\"0\" />
                      <input type=\"checkbox\" name=\"limit_access_user\" class=\"switcher\" data-label-text=\"";
        // line 416
        echo ($context["text_enabled"] ?? null);
        echo "\" id=\"input-limit-access-user\" ";
        echo ((($context["limit_access_user"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " value=\"1\" />
                  </div>
              </div>
              <div class=\"form-group\" id=\"users\">
                  <label class=\"col-sm-2 control-label\" for=\"input-user\">";
        // line 420
        echo ($context["entry_user"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"user\" value=\"\" placeholder=\"";
        // line 422
        echo ($context["entry_user"] ?? null);
        echo "\" id=\"input-user\" class=\"form-control\" />
                      <div id=\"access-user\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                          ";
        // line 424
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 425
            echo "                              <div id=\"access-user";
            echo $context["key"];
            echo "\">
                                  <i class=\"fa fa-minus-circle\"></i>
                                  ";
            // line 427
            echo $context["value"];
            echo "
                                  <input type=\"hidden\" name=\"access_user[]\" value=\"";
            // line 428
            echo $context["key"];
            echo "\" />
                              </div>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 431
        echo "                      </div>
                  </div>
              </div>
              <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-limit-access-user-group\">";
        // line 435
        echo ($context["entry_limit_access_user_group"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                      <input type=\"hidden\" name=\"limit_access_user_group\" value=\"0\" />
                      <input type=\"checkbox\" name=\"limit_access_user_group\" class=\"switcher\" data-label-text=\"";
        // line 438
        echo ($context["text_enabled"] ?? null);
        echo "\" id=\"input-limit-access-user-group\" ";
        echo ((($context["limit_access_user_group"] ?? null)) ? ("checked=\"checked\"") : (""));
        echo " value=\"1\" />
                  </div>
              </div>
              <div class=\"form-group\" id=\"user_groups\">
                  <label class=\"col-sm-2 control-label\" for=\"input-user-group\">";
        // line 442
        echo ($context["entry_user_group"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"user_group\" value=\"\" placeholder=\"";
        // line 444
        echo ($context["entry_user_group"] ?? null);
        echo "\" id=\"input-user-group\" class=\"form-control\" />
                      <div id=\"access-user-group\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                          ";
        // line 446
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user_groups"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 447
            echo "                              <div id=\"access-user-group";
            echo $context["key"];
            echo "\">
                                  <i class=\"fa fa-minus-circle\"></i>
                                  ";
            // line 449
            echo $context["value"];
            echo "
                                  <input type=\"hidden\" name=\"access_user_group[]\" value=\"";
            // line 450
            echo $context["key"];
            echo "\" />
                              </div>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 453
        echo "                      </div>
                  </div>
              </div>
          </div>
            <div class=\"tab-pane\" id=\"tab-design\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 462
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 463
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"text-left\">";
        // line 468
        echo ($context["text_default"] ?? null);
        echo "</td>
                      <td class=\"text-left\"><select name=\"category_layout[0]\" class=\"form-control\">
                          <option value=\"\"></option>
                          ";
        // line 471
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 472
            echo "                          ";
            if (((($__internal_compile_16 = ($context["category_layout"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[0] ?? null) : null) && ((($__internal_compile_17 = ($context["category_layout"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[0] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 472)))) {
                // line 473
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 473);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 473);
                echo "</option>
                          ";
            } else {
                // line 475
                echo "                          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 475);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 475);
                echo "</option>
                          ";
            }
            // line 477
            echo "                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 478
        echo "                        </select></td>
                    </tr>
                    ";
        // line 480
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 481
            echo "                    <tr>
                      <td class=\"text-left\">";
            // line 482
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 482);
            echo "</td>
                      <td class=\"text-left\"><select name=\"category_layout[";
            // line 483
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 483);
            echo "]\" class=\"form-control\">
                          <option value=\"\"></option>
                          ";
            // line 485
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 486
                echo "                          ";
                if (((($__internal_compile_18 = ($context["category_layout"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 486)] ?? null) : null) && ((($__internal_compile_19 = ($context["category_layout"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 486)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 486)))) {
                    // line 487
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 487);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 487);
                    echo "</option>
                          ";
                } else {
                    // line 489
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 489);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 489);
                    echo "</option>
                          ";
                }
                // line 491
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 492
            echo "                        </select></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 495
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
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
            if ( !($context["store_2302"] ?? null)) {
                // line 507
                echo "\$('#input-description";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 507);
                echo "').summernote({
\theight: 300
});
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 512
        echo "
//checkbox
    \$(\".switcher[type='checkbox']\").bootstrapSwitch({
        'onColor': 'success',
        'labelWidth': '50',
        'onText': '";
        // line 517
        echo ($context["text_yes"] ?? null);
        echo "',
        'offText': '";
        // line 518
        echo ($context["text_no"] ?? null);
        echo "',
    }).on('switchChange.bootstrapSwitch', function(event, state) {

        if(\$(this).attr('id') == 'input_category_custom'){
            if(state){
                \$('#input_category_custom_form').removeClass('hide')
            }else{
                 \$('#input_category_custom_form').addClass('hide')
            }
        }
    });

\$('input[name=\\'path\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: '";
        // line 533
        echo ($context["category_autocomplete"] ?? null);
        echo "&filter_title=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\tcategory_id: 0,
\t\t\t\t\tname: '";
        // line 538
        echo ($context["text_none"] ?? null);
        echo "'
\t\t\t\t});

\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['title'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'path\\']').val(item['label']);
\t\t\$('input[name=\\'parent_id\\']').val(item['value']);
\t}
});
//--></script>

  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script></div>
";
        // line 560
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "extension/d_blog_module/category_form.twig";
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
        return array (  1252 => 560,  1227 => 538,  1219 => 533,  1201 => 518,  1197 => 517,  1190 => 512,  1178 => 507,  1176 => 506,  1172 => 505,  1160 => 495,  1152 => 492,  1146 => 491,  1138 => 489,  1130 => 487,  1127 => 486,  1123 => 485,  1118 => 483,  1114 => 482,  1111 => 481,  1107 => 480,  1103 => 478,  1097 => 477,  1089 => 475,  1081 => 473,  1078 => 472,  1074 => 471,  1068 => 468,  1060 => 463,  1056 => 462,  1045 => 453,  1036 => 450,  1032 => 449,  1026 => 447,  1022 => 446,  1017 => 444,  1012 => 442,  1003 => 438,  997 => 435,  991 => 431,  982 => 428,  978 => 427,  972 => 425,  968 => 424,  963 => 422,  958 => 420,  949 => 416,  943 => 413,  914 => 387,  885 => 361,  878 => 357,  865 => 347,  851 => 336,  847 => 335,  829 => 322,  825 => 321,  813 => 314,  809 => 313,  803 => 310,  793 => 305,  787 => 302,  777 => 297,  771 => 294,  764 => 289,  749 => 287,  745 => 286,  739 => 283,  728 => 277,  722 => 274,  711 => 268,  707 => 267,  695 => 260,  691 => 259,  685 => 256,  675 => 251,  669 => 248,  659 => 243,  654 => 241,  629 => 219,  624 => 216,  613 => 214,  609 => 213,  600 => 207,  595 => 205,  592 => 204,  581 => 199,  577 => 197,  562 => 195,  558 => 194,  553 => 191,  549 => 190,  542 => 186,  533 => 179,  518 => 176,  514 => 175,  507 => 174,  503 => 173,  497 => 170,  492 => 168,  484 => 165,  478 => 162,  468 => 154,  463 => 152,  458 => 151,  453 => 149,  448 => 148,  446 => 147,  440 => 144,  431 => 140,  426 => 138,  419 => 134,  413 => 133,  409 => 132,  402 => 127,  394 => 124,  389 => 122,  384 => 121,  379 => 119,  374 => 118,  372 => 117,  368 => 115,  364 => 114,  360 => 112,  355 => 110,  352 => 109,  347 => 107,  344 => 106,  342 => 105,  334 => 100,  327 => 96,  321 => 95,  316 => 93,  310 => 89,  293 => 84,  286 => 82,  273 => 78,  266 => 76,  261 => 73,  255 => 71,  253 => 70,  243 => 69,  236 => 67,  221 => 63,  214 => 61,  201 => 57,  194 => 55,  189 => 52,  183 => 50,  181 => 49,  171 => 48,  164 => 46,  158 => 44,  154 => 43,  150 => 41,  135 => 39,  131 => 38,  123 => 33,  119 => 32,  115 => 31,  111 => 30,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/d_blog_module/category_form.twig", "");
    }
}
