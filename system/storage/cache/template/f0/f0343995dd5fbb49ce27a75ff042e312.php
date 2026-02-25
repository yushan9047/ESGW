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

/* extension/module/d_blog_module.twig */
class __TwigTemplate_e105c931fe8e6fc0dfdbcbde11857e42 extends Template
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
            <div class=\"form-inline pull-right\">
                ";
        // line 6
        if (($context["stores"] ?? null)) {
            // line 7
            echo "                    <select class=\"form-control\" onChange=\"location='";
            echo ($context["module_link"] ?? null);
            echo "&store_id='+\$(this).val()\">
                        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 9
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 9) == ($context["store_id"] ?? null))) {
                    // line 10
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 10);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 10);
                    echo "</option>
                            ";
                } else {
                    // line 12
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 12);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 12);
                    echo "</option>
                            ";
                }
                // line 14
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "                    </select>
                ";
        }
        // line 17
        echo "                <button id=\"save_and_stay\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_save_and_stay"] ?? null);
        echo "\"
                        class=\"btn btn-success\"><i class=\"fa fa-save\"></i></button>
                <button type=\"submit\" form=\"form\" data-toggle=\"tooltip\" title=\"";
        // line 19
        echo ($context["button_save"] ?? null);
        echo "\"
                        class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 21
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i
                            class=\"fa fa-reply\"></i></a>
            </div>
            <h1>";
        // line 24
        echo ($context["heading_title"] ?? null);
        echo " ";
        echo ($context["version"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 27
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 27);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 27);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 33
        if ( !($context["pro"] ?? null)) {
            // line 34
            echo "            <div class=\"notify alert alert-info\">";
            echo ($context["text_pro"] ?? null);
            echo "</div>
        ";
        }
        // line 36
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "warning", [], "any", false, false, false, 36)) {
            // line 37
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "warning", [], "any", false, false, false, 37);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 41
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 42
            echo "            <div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 46
        echo "        ";
        if (($context["d_shopunity"] ?? null)) {
            // line 47
            echo "            <div class=\"d_shopunity_update\"></div>
            <script src=\"view/javascript/d_shopunity/d_shopunity_widget.js\" type=\"text/javascript\"></script>
            <script type=\"text/javascript\">
            var d_shopunity_update = jQuery.extend(true, {}, d_shopunity_widget);
            d_shopunity_update.init({
            class: '.d_shopunity_update',
            token: '";
            // line 53
            echo ($context["token"] ?? null);
            echo "',
            extension_id: 'd_blog_module',
            action: 'loadUpdate'
            });
            </script>
        ";
        }
        // line 59
        echo "        ";
        if (( !($context["pro"] ?? null) && ($context["d_shopunity"] ?? null))) {
            // line 60
            echo "        <div class=\"row\">
            <div class=\"col-md-9\">
        ";
        }
        // line 63
        echo "            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 65
        echo ($context["text_edit"] ?? null);
        echo "</h3>
                </div>
                <div class=\"panel-body\">
                            <form action=\"";
        // line 68
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\"
                                  class=\"form-horizontal\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"active\"><a href=\"#tab_setting\" data-toggle=\"tab\">
                                            <span class=\"fa fa-cog\"></span>
                                            ";
        // line 73
        echo ($context["tab_setting"] ?? null);
        echo "
                                        </a></li>
                                    <li><a href=\"#tab_category\" data-toggle=\"tab\">
                                            <span class=\"fa fa-list\"></span>
                                            ";
        // line 77
        echo ($context["tab_category"] ?? null);
        echo "
                                        </a></li>
                                    <li><a href=\"#tab_post\" data-toggle=\"tab\">
                                            <span class=\"fa fa-file-text-o\"></span>
                                            ";
        // line 81
        echo ($context["tab_post"] ?? null);
        echo "
                                        </a></li>
                                    <li><a href=\"#tab_post_thumb\" data-toggle=\"tab\">
                                            <span class=\"fa fa-files-o\"></span>
                                            ";
        // line 85
        echo ($context["tab_post_thumb"] ?? null);
        echo "
                                        </a></li>
                                    <li><a href=\"#tab_review\" data-toggle=\"tab\">
                                            <span class=\"fa fa-comment\"></span>
                                            ";
        // line 89
        echo ($context["tab_review"] ?? null);
        echo "
                                        </a></li>
                                    <li><a href=\"#tab_review_thumb\" data-toggle=\"tab\">
                                            <span class=\"fa fa-comments\"></span>
                                            ";
        // line 93
        echo ($context["tab_review_thumb"] ?? null);
        echo "
                                        </a></li>
                                    <li><a href=\"#tab_author\" data-toggle=\"tab\">
                                            <span class=\"fa fa-user\"></span>
                                            ";
        // line 97
        echo ($context["tab_author"] ?? null);
        echo "
                                        </a></li>
                                    <li><a href=\"#tab_design\" data-toggle=\"tab\">
                                            <span class=\"fa fa-paint-brush\"></span>
                                            ";
        // line 101
        echo ($context["tab_design"] ?? null);
        echo "
                                        </a></li>
                                        <li><a href=\"#tab_demo\" data-toggle=\"tab\">
                                            <span class=\"fa fa-info-circle\"></span>
                                            ";
        // line 105
        echo ($context["tab_demo"] ?? null);
        echo "
                                        </a></li>
                                    <li class=\"hidden\"><a href=\"#tab_instruction\" data-toggle=\"tab\">
                                            <span class=\"fa fa-graduation-cap\"></span>
                                            ";
        // line 109
        echo ($context["tab_instruction"] ?? null);
        echo "
                                        </a></li>
                                </ul>

                                <div class=\"tab-content\">

                                    <div class=\"tab-pane active\" id=\"tab_setting\">

                                        <div class=\"tab-body\">
                                            ";
        // line 118
        if (($context["d_blog_module_status"] ?? null)) {
            // line 119
            echo "                                                <div class=\"form-group\">
                                                    <div class=\"col-lg-3 col-md-3 col-sm-6\">
                                                        <a href=\"";
            // line 121
            echo ($context["menu_post"] ?? null);
            echo "\">
                                                            <div class=\"tile\">
                                                                <div class=\"tile-body\"><i class=\"fa fa-file-text-o\"></i>
                                                                    <h4 class=\"pull-right\">";
            // line 124
            echo ($context["text_menu_post"] ?? null);
            echo "</h4>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-lg-3 col-md-3 col-sm-6\">
                                                        <a href=\"";
            // line 130
            echo ($context["menu_category"] ?? null);
            echo "\">
                                                            <div class=\"tile\">
                                                                <div class=\"tile-body\"><i class=\"fa fa-list\"></i>
                                                                    <h4 class=\"pull-right\">";
            // line 133
            echo ($context["text_menu_category"] ?? null);
            echo "</h4>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-lg-3 col-md-3 col-sm-6\">
                                                        <a href=\"";
            // line 139
            echo ($context["menu_review"] ?? null);
            echo "\">
                                                            <div class=\"tile\">
                                                                <div class=\"tile-body\"><i class=\"fa fa-comments\"></i>
                                                                    <h4 class=\"pull-right\">";
            // line 142
            echo ($context["text_menu_review"] ?? null);
            echo "</h4>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class=\"col-lg-3 col-md-3 col-sm-6\">
                                                        <a href=\"";
            // line 148
            echo ($context["menu_author"] ?? null);
            echo "\">
                                                            <div class=\"tile\">
                                                                <div class=\"tile-body\">
                                                                    <i class=\"fa fa-user\"></i>
                                                                    <h4 class=\"pull-right\">";
            // line 152
            echo ($context["text_menu_author"] ?? null);
            echo "</h4>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            ";
        }
        // line 159
        echo "
                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_status\">";
        // line 162
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    ";
        // line 164
        if ((($context["twig_support"] ?? null) && ($context["event_support"] ?? null))) {
            // line 165
            echo "                                                        <input type=\"hidden\" name=\"";
            echo ($context["codename"] ?? null);
            echo "_status\" value=\"0\"/>
                                                        <input type=\"checkbox\" class=\"switcher\"
                                                               data-label-text=\"";
            // line 167
            echo ($context["text_enabled"] ?? null);
            echo "\" id=\"input_status\"
                                                               name=\"d_blog_module_status\"
                                                               ";
            // line 169
            if (($context["d_blog_module_status"] ?? null)) {
                echo "checked=\"checked\"";
            }
            // line 170
            echo "                                                               value=\"1\"/>
                                                    ";
        }
        // line 172
        echo "                                                    ";
        if ( !($context["twig_support"] ?? null)) {
            // line 173
            echo "                                                        <div class=\"alert alert-info\">
                                                            <div class=\"row\">
                                                                <div class=\"col-md-10\">";
            // line 175
            echo ($context["help_twig_support"] ?? null);
            echo " </div>
                                                                <div class=\"col-md-2\"><a href=\"";
            // line 176
            echo ($context["install_twig_support"] ?? null);
            echo "\"
                                                                                         class=\"btn btn-info btn-block\">";
            // line 177
            echo ($context["text_install_twig_support"] ?? null);
            echo "</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
        }
        // line 182
        echo "                                                    ";
        if ( !($context["event_support"] ?? null)) {
            // line 183
            echo "                                                        <div class=\"alert alert-info\">
                                                            <div class=\"row\">
                                                                <div class=\"col-md-10\">";
            // line 185
            echo ($context["help_event_support"] ?? null);
            echo " </div>
                                                                <div class=\"col-md-2\"><a href=\"";
            // line 186
            echo ($context["install_event_support"] ?? null);
            echo "\"
                                                                                         class=\"btn btn-info btn-block\">";
            // line 187
            echo ($context["text_install_event_support"] ?? null);
            echo "</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
        }
        // line 192
        echo "                                                </div>
                                            </div><!-- //status -->
                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"button_support_email\">";
        // line 196
        echo ($context["entry_support"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-4\">
                                                    <a href=\"";
        // line 198
        echo ($context["support_url"] ?? null);
        echo "\" class=\"btn btn-success\"
                                                       target=\"_blank\">";
        // line 199
        echo ($context["button_support"] ?? null);
        echo "
                                                    </a>
                                                </div>
                                            </div><!-- //support_email -->
                                            
                                        </div>
                                    </div>
                                    <div class=\"tab-pane \" id=\"tab_category\">
                                        <div class=\"tab-body\">

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_select\">";
        // line 211
        echo ($context["entry_category_main_category_id"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <select name=\"";
        // line 213
        echo ($context["codename"] ?? null);
        echo "_setting[category][main_category_id]\"
                                                            id=\"input_select\" class=\"form-control m-b\">
                                                        ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 216
            echo "                                                            <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 216);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 216) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "category", [], "any", false, false, false, 216), "main_category_id", [], "any", false, false, false, 216))) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 216);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "                                                    </select>
                                                    <div class=\"bs-callout bs-callout-warning\">
                                                        ";
        // line 220
        echo ($context["help_home_category"] ?? null);
        echo "
                                                    </div>
                                                </div>
                                            </div>";
        // line 224
        echo "
                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_category_layout_type\">";
        // line 227
        echo ($context["entry_category_layout_type"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <div class=\"btn-group colors\" data-toggle=\"buttons\">
                                                        ";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_type"]) {
            // line 231
            echo "                                                            <label class=\"btn btn-default ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "category", [], "any", false, false, false, 231), "layout_type", [], "any", false, false, false, 231) && (twig_get_attribute($this->env, $this->source, $context["layout_type"], "id", [], "any", false, false, false, 231) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "category", [], "any", false, false, false, 231), "layout_type", [], "any", false, false, false, 231)))) {
                echo "active";
            }
            echo "\"
                                                                   data-toggle=\"tooltip\" data-html=\"true\"
                                                                   title=\"";
            // line 233
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["layout_type"], "description", [], "any", false, false, false, 233), "html");
            echo "\">
                                                                <input type=\"radio\"
                                                                       name=\"";
            // line 235
            echo ($context["codename"] ?? null);
            echo "_setting[category][layout_type]\"
                                                                       value=\"";
            // line 236
            echo twig_get_attribute($this->env, $this->source, $context["layout_type"], "id", [], "any", false, false, false, 236);
            echo "\" autocomplete=\"off\"
                                                                       ";
            // line 237
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "category", [], "any", false, false, false, 237), "layout_type", [], "any", false, false, false, 237) && (twig_get_attribute($this->env, $this->source, $context["layout_type"], "id", [], "any", false, false, false, 237) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "category", [], "any", false, false, false, 237), "layout_type", [], "any", false, false, false, 237)))) {
                echo "checked";
            }
            echo "> ";
            echo twig_get_attribute($this->env, $this->source, $context["layout_type"], "name", [], "any", false, false, false, 237);
            echo "
                                                            </label>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "                                                    </div>
                                                </div>
                                            </div>";
        // line 243
        echo "

                                            <div class=\"form-group\" id=\"category_layout\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_category_layout\">";
        // line 247
        echo ($context["entry_category_layout"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10 \">
                                                    <div class=\"input\">

                                                        ";
        // line 251
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "category", [], "any", false, false, false, 251), "layout", [], "any", false, false, false, 251));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 252
            echo "
                                                            <div class=\"input-group m-b\">
                                                            <select name=\"";
            // line 254
            echo ($context["codename"] ?? null);
            echo "_setting[category][layout][]\"
                                                                    class=\"form-control\">
                                                                ";
            // line 256
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cols"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                // line 257
                echo "                                                                    <option value=\"";
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
            // line 259
            echo "                                                            </select>
                                                            <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-default remove\">";
            // line 261
            echo ($context["button_remove"] ?? null);
            echo "</button>
                                                </span>
                                                            </div>";
            // line 264
            echo "
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "                                                    </div>
                                                    <button class=\"btn btn-default add m-b\">";
        // line 267
        echo ($context["button_add"] ?? null);
        echo "</button>
                                                    <div class=\"bs-callout bs-callout-warning\">
                                                        ";
        // line 269
        echo ($context["help_layout"] ?? null);
        echo "
                                                    </div>
                                                </div>
                                                <script type=\"text\" id=\"template_input_category_layout\">
                                            <div class=\"input-group m-b\">
                                                    <select name=\"";
        // line 274
        echo ($context["codename"] ?? null);
        echo "_setting[category][layout][]\" class=\"form-control\">
                                                        ";
        // line 275
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cols"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 276
            echo "                                                           <option value=\"";
            echo $context["col"];
            echo "\">";
            echo $context["col"];
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 278
        echo "                                                    </select>

                                                  <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-default remove\" >";
        // line 281
        echo ($context["button_remove"] ?? null);
        echo "</button>
                                                  </span>
                                            </div>

                                                </script>
                                                <script>
                                                    var \$category_layout = \$('#category_layout');
                                                    \$(document).on('click', '#category_layout .add', function (e) {

                                                        var html = \$('#template_input_category_layout').html();
                                                        \$category_layout.find('.input').append(html);
                                                        e.preventDefault();
                                                    })
                                                    \$(document).on('click', '#category_layout .remove', function (e) {
                                                        \$(this).parents('.input-group').remove()
                                                        e.preventDefault();
                                                    })

                                                </script>
                                            </div>


                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_text\">";
        // line 305
        echo ($context["entry_category_post_page_limit"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"text\"
                                                           name=\"";
        // line 308
        echo ($context["codename"] ?? null);
        echo "_setting[category][post_page_limit]\"
                                                           value=\"";
        // line 309
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "category", [], "any", false, false, false, 309), "post_page_limit", [], "any", false, false, false, 309);
        echo "\"
                                                           placeholder=\"";
        // line 310
        echo ($context["entry_category_post_page_limit"] ?? null);
        echo "\"
                                                           class=\"form-control\"/>
                                                </div>
                                            </div><!-- //post_page_limit -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 317
        echo ($context["entry_category_image_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 320
        echo ($context["codename"] ?? null);
        echo "_setting[category][image_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 323
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_category_image_display\"
                                                           name=\"";
        // line 325
        echo ($context["codename"] ?? null);
        echo "_setting[category][image_display]\" ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "category", [], "any", false, false, false, 325), "image_display", [], "any", false, false, false, 325)) {
            echo " checked=\"checked\" ";
        }
        // line 326
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_text\">";
        // line 332
        echo ($context["entry_category_image_size"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-5\">
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">";
        // line 335
        echo ($context["text_width"] ?? null);
        echo "</span>
                                                        <input type=\"text\"
                                                               name=\"";
        // line 337
        echo ($context["codename"] ?? null);
        echo "_setting[category][image_width]\"
                                                               value=\"";
        // line 338
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "category", [], "any", false, false, false, 338), "image_width", [], "any", false, false, false, 338);
        echo "\"
                                                               placeholder=\"";
        // line 339
        echo ($context["text_width"] ?? null);
        echo "\" class=\"form-control\"/>
                                                    </div>


                                                </div>
                                                <div class=\"col-sm-5\">
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">";
        // line 346
        echo ($context["text_height"] ?? null);
        echo "</span>
                                                        <input type=\"text\"
                                                               name=\"";
        // line 348
        echo ($context["codename"] ?? null);
        echo "_setting[category][image_height]\"
                                                               value=\"";
        // line 349
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "category", [], "any", false, false, false, 349), "image_height", [], "any", false, false, false, 349);
        echo "\"
                                                               placeholder=\"";
        // line 350
        echo ($context["text_height"] ?? null);
        echo "\" class=\"form-control\"/>
                                                    </div>
                                                </div>
                                            </div><!-- //category_image -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 357
        echo ($context["entry_category_sub_category_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 360
        echo ($context["codename"] ?? null);
        echo "_setting[category][sub_category_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 363
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_category_sub_category_display\"
                                                           name=\"";
        // line 365
        echo ($context["codename"] ?? null);
        echo "_setting[category][sub_category_display]\" ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "category", [], "any", false, false, false, 365), "sub_category_display", [], "any", false, false, false, 365)) {
            echo " checked=\"checked\" ";
        }
        // line 366
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->


                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_select\">";
        // line 373
        echo ($context["entry_category_sub_category_col"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <select name=\"";
        // line 375
        echo ($context["codename"] ?? null);
        echo "_setting[category][sub_category_col]\"
                                                            id=\"input_category_sub_category_col\" class=\"form-control\">
                                                        ";
        // line 377
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cols"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 378
            echo "                                                            <option value=\"";
            echo $context["col"];
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "category", [], "any", false, false, false, 378), "sub_category_col", [], "any", false, false, false, 378) == $context["col"])) {
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
        // line 380
        echo "                                                    </select>
                                                </div>
                                            </div><!-- //select -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 386
        echo ($context["entry_category_sub_category_image"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 389
        echo ($context["codename"] ?? null);
        echo "_setting[category][sub_category_image]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 392
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_category_sub_category_image\"
                                                           name=\"";
        // line 394
        echo ($context["codename"] ?? null);
        echo "_setting[category][sub_category_image]\" ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "category", [], "any", false, false, false, 394), "sub_category_image", [], "any", false, false, false, 394)) {
            echo " checked=\"checked\" ";
        }
        // line 395
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 401
        echo ($context["entry_category_sub_category_post_count"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 404
        echo ($context["codename"] ?? null);
        echo "_setting[category][sub_category_post_count]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 407
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_category_sub_category_post_count\"
                                                           name=\"";
        // line 409
        echo ($context["codename"] ?? null);
        echo "_setting[category][sub_category_post_count]\" ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "category", [], "any", false, false, false, 409), "sub_category_post_count", [], "any", false, false, false, 409)) {
            echo " checked=\"checked\" ";
        }
        // line 410
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_text\">";
        // line 416
        echo ($context["entry_category_sub_category_image_size"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-5\">
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">";
        // line 419
        echo ($context["text_width"] ?? null);
        echo "</span>
                                                        <input type=\"text\"
                                                               name=\"";
        // line 421
        echo ($context["codename"] ?? null);
        echo "_setting[category][sub_category_image_width]\"
                                                               value=\"";
        // line 422
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "category", [], "any", false, false, false, 422), "sub_category_image_width", [], "any", false, false, false, 422);
        echo "\"
                                                               placeholder=\"";
        // line 423
        echo ($context["text_width"] ?? null);
        echo "\" class=\"form-control\"/>
                                                    </div>


                                                </div>
                                                <div class=\"col-sm-5\">
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">";
        // line 430
        echo ($context["text_height"] ?? null);
        echo "</span>
                                                        <input type=\"text\"
                                                               name=\"";
        // line 432
        echo ($context["codename"] ?? null);
        echo "_setting[category][sub_category_image_height]\"
                                                               value=\"";
        // line 433
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "category", [], "any", false, false, false, 433), "sub_category_image_height", [], "any", false, false, false, 433);
        echo "\"
                                                               placeholder=\"";
        // line 434
        echo ($context["text_height"] ?? null);
        echo "\" class=\"form-control\"/>
                                                    </div>
                                                </div>
                                            </div><!-- //category_image -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 441
        echo ($context["entry_limited_post_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 444
        echo ($context["codename"] ?? null);
        echo "_setting[category][limited_post_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 447
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_limited_post_display\"
                                                           name=\"";
        // line 449
        echo ($context["codename"] ?? null);
        echo "_setting[category][limited_post_display]\" ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "category", [], "any", false, false, false, 449), "limited_post_display", [], "any", false, false, false, 449)) {
            echo " checked=\"checked\" ";
        }
        // line 450
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 456
        echo ($context["entry_main_post_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 459
        echo ($context["codename"] ?? null);
        echo "_setting[category][main_post_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 462
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_main_post_display\"
                                                           name=\"";
        // line 464
        echo ($context["codename"] ?? null);
        echo "_setting[category][main_post_display]\" ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "category", [], "any", false, false, false, 464), "main_post_display", [], "any", false, false, false, 464)) {
            echo " checked=\"checked\" ";
        }
        // line 465
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                        </div>
                                    </div>
                                    <div class=\"tab-pane \" id=\"tab_post\">
                                        <div class=\"tab-body\">

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 476
        echo ($context["entry_post_image_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\" name=\"";
        // line 478
        echo ($context["codename"] ?? null);
        echo "_setting[post][image_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 481
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_post_image_display\"
                                                           name=\"";
        // line 483
        echo ($context["codename"] ?? null);
        echo "_setting[post][image_display]\" ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post", [], "any", false, false, false, 483), "image_display", [], "any", false, false, false, 483) == "1")) {
            echo " checked=\"checked\" ";
        }
        // line 484
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_text\">";
        // line 490
        echo ($context["entry_post_image_size"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-5\">
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">";
        // line 493
        echo ($context["text_width"] ?? null);
        echo "</span>
                                                        <input type=\"text\" name=\"";
        // line 494
        echo ($context["codename"] ?? null);
        echo "_setting[post][image_width]\"
                                                               value=\"";
        // line 495
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post", [], "any", false, false, false, 495), "image_width", [], "any", false, false, false, 495);
        echo "\"
                                                               placeholder=\"";
        // line 496
        echo ($context["text_width"] ?? null);
        echo "\" class=\"form-control\"/>
                                                    </div>


                                                </div>
                                                <div class=\"col-sm-5\">
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">";
        // line 503
        echo ($context["text_height"] ?? null);
        echo "</span>
                                                        <input type=\"text\" name=\"";
        // line 504
        echo ($context["codename"] ?? null);
        echo "_setting[post][image_height]\"
                                                               value=\"";
        // line 505
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post", [], "any", false, false, false, 505), "image_height", [], "any", false, false, false, 505);
        echo "\"
                                                               placeholder=\"";
        // line 506
        echo ($context["text_height"] ?? null);
        echo "\" class=\"form-control\"/>
                                                    </div>
                                                </div>
                                            </div><!-- //category_image -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 513
        echo ($context["entry_post_popup_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\" name=\"";
        // line 515
        echo ($context["codename"] ?? null);
        echo "_setting[post][popup_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 518
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_post_popup_display\"
                                                           name=\"";
        // line 520
        echo ($context["codename"] ?? null);
        echo "_setting[post][popup_display]\" ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post", [], "any", false, false, false, 520), "popup_display", [], "any", false, false, false, 520)) {
            echo " checked=\"checked\" ";
        }
        // line 521
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_text\">";
        // line 527
        echo ($context["entry_post_popup_size"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-5\">
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">";
        // line 530
        echo ($context["text_width"] ?? null);
        echo "</span>
                                                        <input type=\"text\" name=\"";
        // line 531
        echo ($context["codename"] ?? null);
        echo "_setting[post][popup_width]\"
                                                               value=\"";
        // line 532
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post", [], "any", false, false, false, 532), "popup_width", [], "any", false, false, false, 532);
        echo "\"
                                                               placeholder=\"";
        // line 533
        echo ($context["text_width"] ?? null);
        echo "\" class=\"form-control\"/>
                                                    </div>


                                                </div>
                                                <div class=\"col-sm-5\">
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">";
        // line 540
        echo ($context["text_height"] ?? null);
        echo "</span>
                                                        <input type=\"text\" name=\"";
        // line 541
        echo ($context["codename"] ?? null);
        echo "_setting[post][popup_height]\"
                                                               value=\"";
        // line 542
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post", [], "any", false, false, false, 542), "popup_height", [], "any", false, false, false, 542);
        echo "\"
                                                               placeholder=\"";
        // line 543
        echo ($context["text_height"] ?? null);
        echo "\" class=\"form-control\"/>
                                                    </div>
                                                </div>
                                            </div><!-- //category_image -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 550
        echo ($context["entry_post_author_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\" name=\"";
        // line 552
        echo ($context["codename"] ?? null);
        echo "_setting[post][author_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 555
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_post_author_display\"
                                                           name=\"";
        // line 557
        echo ($context["codename"] ?? null);
        echo "_setting[post][author_display]\" ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post", [], "any", false, false, false, 557), "author_display", [], "any", false, false, false, 557)) {
            echo " checked=\"checked\" ";
        }
        // line 558
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 564
        echo ($context["entry_post_date_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\" name=\"";
        // line 566
        echo ($context["codename"] ?? null);
        echo "_setting[post][date_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 569
        echo ($context["text_enabled"] ?? null);
        echo "\" id=\"input_post_date_display\"
                                                           name=\"";
        // line 570
        echo ($context["codename"] ?? null);
        echo "_setting[post][date_display]\" ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post", [], "any", false, false, false, 570), "date_display", [], "any", false, false, false, 570)) {
            echo " checked=\"checked\" ";
        }
        // line 571
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 577
        echo ($context["entry_post_date_format"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    ";
        // line 579
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 580
            echo "                                                        <div id=\"post_date_format";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 580);
            echo "\" class=\"input-group\">
                                                            <label class=\"input-group-addon\"  title=\"";
            // line 581
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 581);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "flag", [], "any", false, false, false, 581);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 581);
            echo "\" /></label>
                                                            <input type=\"text\" name=\"";
            // line 582
            echo ($context["codename"] ?? null);
            echo "_setting[post][date_format][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 582);
            echo "]\" value=\"";
            echo (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post", [], "any", false, false, false, 582), "date_format", [], "any", false, false, false, 582)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 582)] ?? null) : null);
            echo "  \" class=\"form-control\" >
                                                        </div>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 585
        echo "                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 590
        echo ($context["entry_post_review_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\" name=\"";
        // line 592
        echo ($context["codename"] ?? null);
        echo "_setting[post][review_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 595
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_post_review_display\"
                                                           name=\"";
        // line 597
        echo ($context["codename"] ?? null);
        echo "_setting[post][review_display]\" ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post", [], "any", false, false, false, 597), "review_display", [], "any", false, false, false, 597)) {
            echo " checked=\"checked\" ";
        }
        // line 598
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 604
        echo ($context["entry_post_rating_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\" name=\"";
        // line 606
        echo ($context["codename"] ?? null);
        echo "_setting[post][rating_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 609
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_post_rating_display\"
                                                           name=\"";
        // line 611
        echo ($context["codename"] ?? null);
        echo "_setting[post][rating_display]\" ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post", [], "any", false, false, false, 611), "rating_display", [], "any", false, false, false, 611)) {
            echo " checked=\"checked\" ";
        }
        // line 612
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                             <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 618
        echo ($context["entry_post_tag_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 621
        echo ($context["codename"] ?? null);
        echo "_setting[post][tag_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 624
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_post_tag_display\"
                                                           name=\"";
        // line 626
        echo ($context["codename"] ?? null);
        echo "_setting[post][tag_display]\"
                                                           ";
        // line 627
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post", [], "any", false, false, false, 627), "tag_display", [], "any", false, false, false, 627)) {
            echo "checked=\"checked\"";
        }
        // line 628
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div>

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 634
        echo ($context["entry_post_category_label_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 637
        echo ($context["codename"] ?? null);
        echo "_setting[post][category_label_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 640
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_post_category_label_display\"
                                                           name=\"";
        // line 642
        echo ($context["codename"] ?? null);
        echo "_setting[post][category_label_display]\" ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post", [], "any", false, false, false, 642), "category_label_display", [], "any", false, false, false, 642)) {
            echo " checked=\"checked\" ";
        }
        // line 643
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_text\">";
        // line 649
        echo ($context["entry_post_short_description_length"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"text\"
                                                           name=\"";
        // line 652
        echo ($context["codename"] ?? null);
        echo "_setting[post][short_description_length]\"
                                                           value=\"";
        // line 653
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post", [], "any", false, false, false, 653), "short_description_length", [], "any", false, false, false, 653);
        echo "\"
                                                           placeholder=\"";
        // line 654
        echo ($context["entry_post_short_description_length"] ?? null);
        echo "\"
                                                           class=\"form-control\"/>
                                                </div>
                                            </div><!-- //text -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 661
        echo ($context["entry_post_style_short_description_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 664
        echo ($context["codename"] ?? null);
        echo "_setting[post][style_short_description_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 667
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_post_style_short_description_display\"
                                                           name=\"";
        // line 669
        echo ($context["codename"] ?? null);
        echo "_setting[post][style_short_description_display]\"
                                                           ";
        // line 670
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post", [], "any", false, false, false, 670), "style_short_description_display", [], "any", false, false, false, 670)) {
            echo "checked=\"checked\"";
        }
        // line 671
        echo "                                                           value=\"1\"/>
                                                    <div class=\"bs-callout bs-callout-warning m-t\">
                                                        ";
        // line 673
        echo ($context["help_style_short_description_display"] ?? null);
        echo "
                                                    </div>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 680
        echo ($context["entry_post_nav_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\" name=\"";
        // line 682
        echo ($context["codename"] ?? null);
        echo "_setting[post][nav_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 685
        echo ($context["text_enabled"] ?? null);
        echo "\" id=\"input_post_nav_display\"
                                                           name=\"";
        // line 686
        echo ($context["codename"] ?? null);
        echo "_setting[post][nav_display]\"
                                                           ";
        // line 687
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post", [], "any", false, false, false, 687), "nav_display", [], "any", false, false, false, 687)) {
            echo "checked=\"checked\"";
        }
        // line 688
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 694
        echo ($context["entry_post_nav_same_category"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 697
        echo ($context["codename"] ?? null);
        echo "_setting[post][nav_same_category]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 700
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_post_nav_same_category\"
                                                           name=\"";
        // line 702
        echo ($context["codename"] ?? null);
        echo "_setting[post][nav_same_category]\"
                                                           ";
        // line 703
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post", [], "any", false, false, false, 703), "nav_same_category", [], "any", false, false, false, 703)) {
            echo "checked=\"checked\"";
        }
        // line 704
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->
                                        </div>
                                    </div>
                                    <div class=\"tab-pane \" id=\"tab_post_thumb\">
                                        <div class=\"tab-body\">
                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_text\">";
        // line 713
        echo ($context["entry_post_thumb_image_size"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-5\">
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">";
        // line 716
        echo ($context["text_width"] ?? null);
        echo "</span>
                                                        <input type=\"text\"
                                                               name=\"";
        // line 718
        echo ($context["codename"] ?? null);
        echo "_setting[post_thumb][image_width]\"
                                                               value=\"";
        // line 719
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 719), "image_width", [], "any", false, false, false, 719);
        echo "\"
                                                               placeholder=\"";
        // line 720
        echo ($context["text_width"] ?? null);
        echo "\" class=\"form-control\"/>
                                                    </div>


                                                </div>
                                                <div class=\"col-sm-5\">
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">";
        // line 727
        echo ($context["text_height"] ?? null);
        echo "</span>
                                                        <input type=\"text\"
                                                               name=\"";
        // line 729
        echo ($context["codename"] ?? null);
        echo "_setting[post_thumb][image_height]\"
                                                               value=\"";
        // line 730
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 730), "image_height", [], "any", false, false, false, 730);
        echo "\"
                                                               placeholder=\"";
        // line 731
        echo ($context["text_height"] ?? null);
        echo "\" class=\"form-control\"/>
                                                    </div>
                                                </div>
                                            </div><!-- //category_image -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_text\">";
        // line 738
        echo ($context["entry_post_thumb_title_length"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"text\"
                                                           name=\"";
        // line 741
        echo ($context["codename"] ?? null);
        echo "_setting[post_thumb][title_length]\"
                                                           value=\"";
        // line 742
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 742), "title_length", [], "any", false, false, false, 742);
        echo "\"
                                                           placeholder=\"";
        // line 743
        echo ($context["entry_post_thumb_title_length"] ?? null);
        echo "\"
                                                           class=\"form-control\"/>
                                                </div>
                                            </div><!-- //text -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_text\">";
        // line 750
        echo ($context["entry_post_thumb_short_description_length"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"text\"
                                                           name=\"";
        // line 753
        echo ($context["codename"] ?? null);
        echo "_setting[post_thumb][short_description_length]\"
                                                           value=\"";
        // line 754
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 754), "short_description_length", [], "any", false, false, false, 754);
        echo "\"
                                                           placeholder=\"";
        // line 755
        echo ($context["entry_post_thumb_short_description_length"] ?? null);
        echo "\"
                                                           class=\"form-control\"/>
                                                </div>
                                            </div><!-- //text -->

                                            <div class=\"form-group hidden\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_text\">";
        // line 762
        echo ($context["entry_post_thumb_description_length"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"text\"
                                                           name=\"";
        // line 765
        echo ($context["codename"] ?? null);
        echo "_setting[post_thumb][description_length]\"
                                                           value=\"";
        // line 766
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 766), "description_length", [], "any", false, false, false, 766);
        echo "\"
                                                           placeholder=\"";
        // line 767
        echo ($context["entry_post_thumb_description_length"] ?? null);
        echo "\"
                                                           class=\"form-control\"/>
                                                </div>
                                            </div><!-- //text -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 774
        echo ($context["entry_post_thumb_category_label_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 777
        echo ($context["codename"] ?? null);
        echo "_setting[post_thumb][category_label_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 780
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_post_thumb_category_label_display\"
                                                           name=\"";
        // line 782
        echo ($context["codename"] ?? null);
        echo "_setting[post_thumb][category_label_display]\"
                                                           ";
        // line 783
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 783), "category_label_display", [], "any", false, false, false, 783)) {
            echo "checked=\"checked\"";
        }
        // line 784
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 790
        echo ($context["entry_post_thumb_author_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 793
        echo ($context["codename"] ?? null);
        echo "_setting[post_thumb][author_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 796
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_post_thumb_author_display\"
                                                           name=\"";
        // line 798
        echo ($context["codename"] ?? null);
        echo "_setting[post_thumb][author_display]\"
                                                           ";
        // line 799
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 799), "author_display", [], "any", false, false, false, 799)) {
            echo "checked=\"checked\"";
        }
        // line 800
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 806
        echo ($context["entry_post_thumb_date_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 809
        echo ($context["codename"] ?? null);
        echo "_setting[post_thumb][date_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 812
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_post_thumb_date_display\"
                                                           name=\"";
        // line 814
        echo ($context["codename"] ?? null);
        echo "_setting[post_thumb][date_display]\"
                                                           ";
        // line 815
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 815), "date_display", [], "any", false, false, false, 815)) {
            echo "checked=\"checked\"";
        }
        // line 816
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 822
        echo ($context["entry_post_thumb_date_format"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    ";
        // line 824
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 825
            echo "                                                        <div id=\"post_thumb_date_format";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 825);
            echo "\" class=\"input-group\">
                                                            <label class=\"input-group-addon\"  title=\"";
            // line 826
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 826);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "flag", [], "any", false, false, false, 826);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 826);
            echo "\" /></label>
                                                            <input type=\"text\" name=\"";
            // line 827
            echo ($context["codename"] ?? null);
            echo "_setting[post_thumb][date_format][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 827);
            echo "]\" value=\"";
            echo (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 827), "date_format", [], "any", false, false, false, 827)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 827)] ?? null) : null);
            echo "  \" class=\"form-control\" >
                                                        </div>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 830
        echo "                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 835
        echo ($context["entry_post_thumb_rating_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 838
        echo ($context["codename"] ?? null);
        echo "_setting[post_thumb][rating_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 841
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_post_thumb_rating_display\"
                                                           name=\"";
        // line 843
        echo ($context["codename"] ?? null);
        echo "_setting[post_thumb][rating_display]\"
                                                           ";
        // line 844
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 844), "rating_display", [], "any", false, false, false, 844)) {
            echo "checked=\"checked\"";
        }
        // line 845
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 851
        echo ($context["entry_post_thumb_description_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 854
        echo ($context["codename"] ?? null);
        echo "_setting[post_thumb][description_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 857
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_post_thumb_description_display\"
                                                           name=\"";
        // line 859
        echo ($context["codename"] ?? null);
        echo "_setting[post_thumb][description_display]\"
                                                           ";
        // line 860
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 860), "description_display", [], "any", false, false, false, 860)) {
            echo "checked=\"checked\"";
        }
        // line 861
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 867
        echo ($context["entry_post_thumb_tag_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 870
        echo ($context["codename"] ?? null);
        echo "_setting[post_thumb][tag_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 873
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_post_thumb_tag_display\"
                                                           name=\"";
        // line 875
        echo ($context["codename"] ?? null);
        echo "_setting[post_thumb][tag_display]\"
                                                           ";
        // line 876
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 876), "tag_display", [], "any", false, false, false, 876)) {
            echo "checked=\"checked\"";
        }
        // line 877
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 883
        echo ($context["entry_post_thumb_views_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 886
        echo ($context["codename"] ?? null);
        echo "_setting[post_thumb][views_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 889
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_post_thumb_views_display\"
                                                           name=\"";
        // line 891
        echo ($context["codename"] ?? null);
        echo "_setting[post_thumb][views_display]\"
                                                           ";
        // line 892
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 892), "views_display", [], "any", false, false, false, 892)) {
            echo "checked=\"checked\"";
        }
        // line 893
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 899
        echo ($context["entry_post_thumb_review_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 902
        echo ($context["codename"] ?? null);
        echo "_setting[post_thumb][review_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 905
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_post_thumb_review_display\"
                                                           name=\"";
        // line 907
        echo ($context["codename"] ?? null);
        echo "_setting[post_thumb][review_display]\"
                                                           ";
        // line 908
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 908), "review_display", [], "any", false, false, false, 908)) {
            echo "checked=\"checked\"";
        }
        // line 909
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 915
        echo ($context["entry_post_thumb_read_more_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 918
        echo ($context["codename"] ?? null);
        echo "_setting[post_thumb][read_more_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 921
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_post_thumb_read_more_display\"
                                                           name=\"";
        // line 923
        echo ($context["codename"] ?? null);
        echo "_setting[post_thumb][read_more_display]\"
                                                           ";
        // line 924
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 924), "read_more_display", [], "any", false, false, false, 924)) {
            echo "checked=\"checked\"";
        }
        // line 925
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_post_thumb_animate\">";
        // line 931
        echo ($context["entry_post_thumb_animate"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <select name=\"";
        // line 933
        echo ($context["codename"] ?? null);
        echo "_setting[post_thumb][animate]\"
                                                            id=\"input_post_thumb_animate\" class=\"form-control\">
                                                        ";
        // line 935
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["animations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["animate"]) {
            // line 936
            echo "                                                            <option value=\"";
            echo $context["animate"];
            echo "\"
                                                                    ";
            // line 937
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 937), "animate", [], "any", false, false, false, 937) && ($context["animate"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 937), "animate", [], "any", false, false, false, 937)))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo $context["animate"];
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 939
        echo "                                                    </select>
                                                </div>
                                            </div><!-- //status -->
                                        </div>
                                    </div>
                                    <div class=\"tab-pane \" id=\"tab_review\">
                                        <div class=\"tab-body\">
                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 948
        echo ($context["entry_review_guest"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\" name=\"";
        // line 950
        echo ($context["codename"] ?? null);
        echo "_setting[review][guest]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 953
        echo ($context["text_enabled"] ?? null);
        echo "\" id=\"input_review_guest\"
                                                           name=\"";
        // line 954
        echo ($context["codename"] ?? null);
        echo "_setting[review][guest]\"
                                                           ";
        // line 955
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "review", [], "any", false, false, false, 955), "guest", [], "any", false, false, false, 955)) {
            echo "checked=\"checked\"";
        }
        // line 956
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 962
        echo ($context["entry_review_social_login"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\" name=\"";
        // line 964
        echo ($context["codename"] ?? null);
        echo "_setting[review][social_login]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 967
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_review_social_login\"
                                                           name=\"";
        // line 969
        echo ($context["codename"] ?? null);
        echo "_setting[review][social_login]\"
                                                           ";
        // line 970
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "review", [], "any", false, false, false, 970), "social_login", [], "any", false, false, false, 970)) {
            echo "checked=\"checked\"";
        }
        // line 971
        echo "                                                           value=\"1\"/>
                                                    <div class=\"bs-callout bs-callout-warning m-t\">
                                                        ";
        // line 973
        echo ($context["help_review_social_login"] ?? null);
        echo "
                                                    </div>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_text\">";
        // line 980
        echo ($context["entry_review_page_limit"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"text\" name=\"";
        // line 982
        echo ($context["codename"] ?? null);
        echo "_setting[review][page_limit]\"
                                                           value=\"";
        // line 983
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "review", [], "any", false, false, false, 983), "page_limit", [], "any", false, false, false, 983);
        echo "\"
                                                           placeholder=\"";
        // line 984
        echo ($context["entry_review_page_limit"] ?? null);
        echo "\"
                                                           class=\"form-control\"/>
                                                </div>
                                            </div><!-- //text -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 991
        echo ($context["entry_review_rating_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 994
        echo ($context["codename"] ?? null);
        echo "_setting[review][rating_display]\" value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 996
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_review_rating_display\"
                                                           name=\"";
        // line 998
        echo ($context["codename"] ?? null);
        echo "_setting[review][rating_display]\"
                                                           ";
        // line 999
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "review", [], "any", false, false, false, 999), "rating_display", [], "any", false, false, false, 999)) {
            echo "checked=\"checked\"";
        }
        // line 1000
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 1006
        echo ($context["entry_review_customer_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 1009
        echo ($context["codename"] ?? null);
        echo "_setting[review][customer_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 1012
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_review_customer_display\"
                                                           name=\"";
        // line 1014
        echo ($context["codename"] ?? null);
        echo "_setting[review][customer_display]\"
                                                           ";
        // line 1015
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "review", [], "any", false, false, false, 1015), "customer_display", [], "any", false, false, false, 1015)) {
            echo "checked=\"checked\"";
        }
        // line 1016
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 1022
        echo ($context["entry_review_moderate"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\" name=\"";
        // line 1024
        echo ($context["codename"] ?? null);
        echo "_setting[review][moderate]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 1027
        echo ($context["text_enabled"] ?? null);
        echo "\" id=\"input_review_moderate\"
                                                           name=\"";
        // line 1028
        echo ($context["codename"] ?? null);
        echo "_setting[review][moderate]\"
                                                           ";
        // line 1029
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "review", [], "any", false, false, false, 1029), "moderate", [], "any", false, false, false, 1029)) {
            echo "checked=\"checked\"";
        }
        // line 1030
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 1036
        echo ($context["entry_review_image_user_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 1039
        echo ($context["codename"] ?? null);
        echo "_setting[review][image_user_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 1042
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_review_thumb_image_display\"
                                                           name=\"";
        // line 1044
        echo ($context["codename"] ?? null);
        echo "_setting[review][image_user_display]\"
                                                           ";
        // line 1045
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "review", [], "any", false, false, false, 1045), "image_user_display", [], "any", false, false, false, 1045)) {
            echo "checked=\"checked\"";
        }
        // line 1046
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_text\">";
        // line 1052
        echo ($context["entry_review_image_limit"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"text\" name=\"";
        // line 1054
        echo ($context["codename"] ?? null);
        echo "_setting[review][image_limit]\"
                                                           value=\"";
        // line 1055
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "review", [], "any", false, false, false, 1055), "image_limit", [], "any", false, false, false, 1055);
        echo "\"
                                                           placeholder=\"";
        // line 1056
        echo ($context["entry_review_image_limit"] ?? null);
        echo "\"
                                                           class=\"form-control\"/>
                                                </div>
                                            </div><!-- //text -->
                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_text\">";
        // line 1062
        echo ($context["entry_review_upload_image_size"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-5\">
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">";
        // line 1065
        echo ($context["text_width"] ?? null);
        echo "</span>
                                                        <input type=\"text\"
                                                               name=\"";
        // line 1067
        echo ($context["codename"] ?? null);
        echo "_setting[review][image_upload_width]\"
                                                               value=\"";
        // line 1068
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "review", [], "any", false, false, false, 1068), "image_upload_width", [], "any", false, false, false, 1068);
        echo "\"
                                                               placeholder=\"";
        // line 1069
        echo ($context["text_width"] ?? null);
        echo "\" class=\"form-control\"/>
                                                    </div>


                                                </div>
                                                <div class=\"col-sm-5\">
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">";
        // line 1076
        echo ($context["text_height"] ?? null);
        echo "</span>
                                                        <input type=\"text\"
                                                               name=\"";
        // line 1078
        echo ($context["codename"] ?? null);
        echo "_setting[review][image_upload_height]\"
                                                               value=\"";
        // line 1079
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "review", [], "any", false, false, false, 1079), "image_upload_height", [], "any", false, false, false, 1079);
        echo "\"
                                                               placeholder=\"";
        // line 1080
        echo ($context["text_height"] ?? null);
        echo "\" class=\"form-control\"/>
                                                    </div>
                                                </div>
                                            </div><!-- //category_image -->
                                        </div>
                                    </div>
                                    <div class=\"tab-pane \" id=\"tab_review_thumb\">
                                        <div class=\"tab-body\">
                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_text\">";
        // line 1090
        echo ($context["entry_review_thumb_image_size"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-5\">
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">";
        // line 1093
        echo ($context["text_width"] ?? null);
        echo "</span>
                                                        <input type=\"text\"
                                                               name=\"";
        // line 1095
        echo ($context["codename"] ?? null);
        echo "_setting[review_thumb][image_width]\"
                                                               value=\"";
        // line 1096
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "review_thumb", [], "any", false, false, false, 1096), "image_width", [], "any", false, false, false, 1096);
        echo "\"
                                                               placeholder=\"";
        // line 1097
        echo ($context["text_width"] ?? null);
        echo "\" class=\"form-control\"/>
                                                    </div>


                                                </div>
                                                <div class=\"col-sm-5\">
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">";
        // line 1104
        echo ($context["text_height"] ?? null);
        echo "</span>
                                                        <input type=\"text\"
                                                               name=\"";
        // line 1106
        echo ($context["codename"] ?? null);
        echo "_setting[review_thumb][image_height]\"
                                                               value=\"";
        // line 1107
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "review_thumb", [], "any", false, false, false, 1107), "image_height", [], "any", false, false, false, 1107);
        echo "\"
                                                               placeholder=\"";
        // line 1108
        echo ($context["text_height"] ?? null);
        echo "\" class=\"form-control\"/>
                                                    </div>
                                                </div>
                                            </div><!-- //category_image -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_text\">";
        // line 1115
        echo ($context["entry_review_thumb_no_image"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"text\" name=\"";
        // line 1117
        echo ($context["codename"] ?? null);
        echo "_setting[review_thumb][no_image]\"
                                                           value=\"";
        // line 1118
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "review_thumb", [], "any", false, false, false, 1118), "no_image", [], "any", false, false, false, 1118);
        echo "\"
                                                           placeholder=\"";
        // line 1119
        echo ($context["entry_review_thumb_no_image"] ?? null);
        echo "\"
                                                           class=\"form-control\"/>
                                                </div>
                                            </div><!-- //text -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 1126
        echo ($context["entry_review_thumb_date_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 1129
        echo ($context["codename"] ?? null);
        echo "_setting[review_thumb][date_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 1132
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_review_thumb_date_display\"
                                                           name=\"";
        // line 1134
        echo ($context["codename"] ?? null);
        echo "_setting[review_thumb][date_display]\"
                                                           ";
        // line 1135
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "review_thumb", [], "any", false, false, false, 1135), "date_display", [], "any", false, false, false, 1135) == 1)) {
            echo "checked=\"checked\"";
        }
        // line 1136
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 1142
        echo ($context["entry_review_thumb_image_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 1145
        echo ($context["codename"] ?? null);
        echo "_setting[review_thumb][image_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 1148
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_review_thumb_image_display\"
                                                           name=\"";
        // line 1150
        echo ($context["codename"] ?? null);
        echo "_setting[review_thumb][image_display]\"
                                                           ";
        // line 1151
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "review_thumb", [], "any", false, false, false, 1151), "image_display", [], "any", false, false, false, 1151) == 1)) {
            echo "checked=\"checked\"";
        }
        // line 1152
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 1158
        echo ($context["entry_review_thumb_rating_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 1161
        echo ($context["codename"] ?? null);
        echo "_setting[review_thumb][rating_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 1164
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_review_thumb_rating_display\"
                                                           name=\"";
        // line 1166
        echo ($context["codename"] ?? null);
        echo "_setting[review_thumb][rating_display]\"
                                                           ";
        // line 1167
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "review_thumb", [], "any", false, false, false, 1167), "rating_display", [], "any", false, false, false, 1167)) {
            echo "checked=\"checked\"";
        }
        // line 1168
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->


                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 1175
        echo ($context["entry_review_thumb_image_user_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 1178
        echo ($context["codename"] ?? null);
        echo "_setting[review_thumb][image_user_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 1181
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_review_thumb_image_display\"
                                                           name=\"";
        // line 1183
        echo ($context["codename"] ?? null);
        echo "_setting[review_thumb][image_user_display]\"
                                                           ";
        // line 1184
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "review_thumb", [], "any", false, false, false, 1184), "image_user_display", [], "any", false, false, false, 1184)) {
            echo "checked=\"checked\"";
        }
        // line 1185
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->
                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_text\">";
        // line 1190
        echo ($context["entry_review_user_image_size"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-5\">
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">";
        // line 1193
        echo ($context["text_width"] ?? null);
        echo "</span>
                                                        <input type=\"text\"
                                                               name=\"";
        // line 1195
        echo ($context["codename"] ?? null);
        echo "_setting[review_thumb][image_user_width]\"
                                                               value=\"";
        // line 1196
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "review_thumb", [], "any", false, false, false, 1196), "image_user_width", [], "any", false, false, false, 1196);
        echo "\"
                                                               placeholder=\"";
        // line 1197
        echo ($context["text_width"] ?? null);
        echo "\" class=\"form-control\"/>
                                                    </div>


                                                </div>
                                                <div class=\"col-sm-5\">
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">";
        // line 1204
        echo ($context["text_height"] ?? null);
        echo "</span>
                                                        <input type=\"text\"
                                                               name=\"";
        // line 1206
        echo ($context["codename"] ?? null);
        echo "_setting[review_thumb][image_user_height]\"
                                                               value=\"";
        // line 1207
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "review_thumb", [], "any", false, false, false, 1207), "image_user_height", [], "any", false, false, false, 1207);
        echo "\"
                                                               placeholder=\"";
        // line 1208
        echo ($context["text_height"] ?? null);
        echo "\" class=\"form-control\"/>
                                                    </div>
                                                </div>
                                            </div><!-- //category_image -->
                                        </div>
                                    </div>

                                    <div class=\"tab-pane \" id=\"tab_author\">
                                        <div class=\"tab-body\">

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_category_layout_type\">";
        // line 1220
        echo ($context["entry_author_layout_type"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <div class=\"btn-group colors\" data-toggle=\"buttons\">
                                                        ";
        // line 1223
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layout_types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_type"]) {
            // line 1224
            echo "                                                            <label class=\"btn btn-default ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "author", [], "any", false, false, false, 1224), "layout_type", [], "any", false, false, false, 1224) && (twig_get_attribute($this->env, $this->source, $context["layout_type"], "id", [], "any", false, false, false, 1224) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "author", [], "any", false, false, false, 1224), "layout_type", [], "any", false, false, false, 1224)))) {
                echo "active";
            }
            echo "\"
                                                                   data-toggle=\"tooltip\" data-html=\"true\"
                                                                   title=\"";
            // line 1226
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["layout_type"], "description", [], "any", false, false, false, 1226), "html");
            echo "\">
                                                                <input type=\"radio\"
                                                                       name=\"";
            // line 1228
            echo ($context["codename"] ?? null);
            echo "_setting[author][layout_type]\"
                                                                       value=\"";
            // line 1229
            echo twig_get_attribute($this->env, $this->source, $context["layout_type"], "id", [], "any", false, false, false, 1229);
            echo "\" autocomplete=\"off\"
                                                                       ";
            // line 1230
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "author", [], "any", false, false, false, 1230), "layout_type", [], "any", false, false, false, 1230) && (twig_get_attribute($this->env, $this->source, $context["layout_type"], "id", [], "any", false, false, false, 1230) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "author", [], "any", false, false, false, 1230), "layout_type", [], "any", false, false, false, 1230)))) {
                echo "checked";
            }
            echo "> ";
            echo twig_get_attribute($this->env, $this->source, $context["layout_type"], "name", [], "any", false, false, false, 1230);
            echo "
                                                            </label>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1233
        echo "                                                    </div>
                                                </div>
                                            </div><!-- //status -->

                                            <div class=\"form-group\" id=\"author_layout\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_author_layout\">";
        // line 1239
        echo ($context["entry_author_layout"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10 \">
                                                    <div class=\"input\">

                                                        ";
        // line 1243
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "author", [], "any", false, false, false, 1243), "layout", [], "any", false, false, false, 1243));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 1244
            echo "
                                                            <div class=\"input-group m-b\">
                                                                <select name=\"";
            // line 1246
            echo ($context["codename"] ?? null);
            echo "_setting[author][layout][]\"
                                                                        class=\"form-control\">
                                                                    ";
            // line 1248
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cols"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                // line 1249
                echo "                                                                        <option value=\"";
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
            // line 1251
            echo "                                                                </select>
                                                                <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-default remove\">";
            // line 1253
            echo ($context["button_remove"] ?? null);
            echo "</button>
                                                </span>
                                                            </div><!-- /input-group -->

                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1258
        echo "                                                    </div>
                                                    <button class=\"btn btn-default add m-b\">";
        // line 1259
        echo ($context["button_add"] ?? null);
        echo "</button>
                                                    <div class=\"bs-callout bs-callout-warning\">
                                                        ";
        // line 1261
        echo ($context["help_layout"] ?? null);
        echo "
                                                    </div>
                                                </div>
                                                <script type=\"text\" id=\"template_input_author_layout\">
                                            <div class=\"input-group m-b\">
                                                    <select name=\"";
        // line 1266
        echo ($context["codename"] ?? null);
        echo "_setting[author][layout][]\" class=\"form-control\">
                                                        ";
        // line 1267
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cols"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 1268
            echo "                                                        <option value=\"";
            echo $context["col"];
            echo "\">";
            echo $context["col"];
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['col'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1270
        echo "                                                    </select>

                                                  <span class=\"input-group-btn\">
                                                    <button class=\"btn btn-default remove\" >";
        // line 1273
        echo ($context["button_remove"] ?? null);
        echo "</button>
                                                  </span>
                                            </div>

                                                </script>
                                                <script>
                                                    var \$author_layout = \$('#author_layout');
                                                    \$(document).on('click', '#author_layout .add', function (e) {
                                                        var html = \$('#template_input_author_layout').html();
                                                        \$author_layout.find('.input').append(html);
                                                        e.preventDefault();
                                                    })
                                                    \$(document).on('click', '#author_layout .remove', function (e) {
                                                        \$(this).parents('.input-group').remove()
                                                        e.preventDefault();
                                                    })

                                                </script>
                                            </div>


                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_text\">";
        // line 1296
        echo ($context["entry_author_post_page_limit"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"text\"
                                                           name=\"";
        // line 1299
        echo ($context["codename"] ?? null);
        echo "_setting[author][post_page_limit]\"
                                                           value=\"";
        // line 1300
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "author", [], "any", false, false, false, 1300), "post_page_limit", [], "any", false, false, false, 1300);
        echo "\"
                                                           placeholder=\"";
        // line 1301
        echo ($context["entry_author_post_page_limit"] ?? null);
        echo "\"
                                                           class=\"form-control\"/>
                                                </div>
                                            </div><!-- //post_page_limit -->

                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_text\">";
        // line 1308
        echo ($context["entry_author_image_size"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-5\">
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">";
        // line 1311
        echo ($context["text_width"] ?? null);
        echo "</span>
                                                        <input type=\"text\"
                                                               name=\"";
        // line 1313
        echo ($context["codename"] ?? null);
        echo "_setting[author][image_width]\"
                                                               value=\"";
        // line 1314
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "author", [], "any", false, false, false, 1314), "image_width", [], "any", false, false, false, 1314);
        echo "\"
                                                               placeholder=\"";
        // line 1315
        echo ($context["text_width"] ?? null);
        echo "\" class=\"form-control\"/>
                                                    </div>


                                                </div>
                                                <div class=\"col-sm-5\">
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">";
        // line 1322
        echo ($context["text_height"] ?? null);
        echo "</span>
                                                        <input type=\"text\"
                                                               name=\"";
        // line 1324
        echo ($context["codename"] ?? null);
        echo "_setting[author][image_height]\"
                                                               value=\"";
        // line 1325
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "author", [], "any", false, false, false, 1325), "image_height", [], "any", false, false, false, 1325);
        echo "\"
                                                               placeholder=\"";
        // line 1326
        echo ($context["text_height"] ?? null);
        echo "\" class=\"form-control\"/>
                                                    </div>
                                                </div>
                                            </div><!-- //author_image -->

                                            <div class=\"form-group hidden\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 1333
        echo ($context["entry_author_category_display"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 1336
        echo ($context["codename"] ?? null);
        echo "_setting[author][category_display]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 1339
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_author_category_display\"
                                                           name=\"";
        // line 1341
        echo ($context["codename"] ?? null);
        echo "_setting[author][category_display]\"
                                                           ";
        // line 1342
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "author", [], "any", false, false, false, 1342), "category_display", [], "any", false, false, false, 1342)) {
            echo "checked=\"checked\"";
        }
        // line 1343
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->


                                            <div class=\"form-group hidden\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_select\">";
        // line 1350
        echo ($context["entry_author_category_col"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <select name=\"";
        // line 1352
        echo ($context["codename"] ?? null);
        echo "_setting[author][category_col]\"
                                                            id=\"input_author_category_col\" class=\"form-control\">
                                                        ";
        // line 1354
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cols"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
            // line 1355
            echo "                                                            <option value=\"";
            echo $context["col"];
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "author", [], "any", false, false, false, 1355), "category_col", [], "any", false, false, false, 1355) == $context["col"])) {
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
        // line 1357
        echo "                                                    </select>
                                                </div>
                                            </div><!-- //select -->

                                            <div class=\"form-group hidden\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 1363
        echo ($context["entry_author_category_image"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 1366
        echo ($context["codename"] ?? null);
        echo "_setting[author][category_image]\" value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 1368
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_author_category_image\"
                                                           name=\"";
        // line 1370
        echo ($context["codename"] ?? null);
        echo "_setting[author][category_image]\"
                                                           ";
        // line 1371
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "author", [], "any", false, false, false, 1371), "category_image", [], "any", false, false, false, 1371)) {
            echo "checked=\"checked\"";
        }
        // line 1372
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group hidden\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 1378
        echo ($context["entry_author_category_post_count"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"hidden\"
                                                           name=\"";
        // line 1381
        echo ($context["codename"] ?? null);
        echo "_setting[author][category_post_count]\"
                                                           value=\"0\"/>
                                                    <input type=\"checkbox\" class=\"switcher\"
                                                           data-label-text=\"";
        // line 1384
        echo ($context["text_enabled"] ?? null);
        echo "\"
                                                           id=\"input_author_category_post_count\"
                                                           name=\"";
        // line 1386
        echo ($context["codename"] ?? null);
        echo "_setting[author][category_post_count]\"
                                                           ";
        // line 1387
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "author", [], "any", false, false, false, 1387), "category_post_count", [], "any", false, false, false, 1387)) {
            echo "checked=\"checked\"";
        }
        // line 1388
        echo "                                                           value=\"1\"/>
                                                </div>
                                            </div><!-- //checkbox -->

                                            <div class=\"form-group hidden\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_text\">";
        // line 1394
        echo ($context["entry_author_category_image_size"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-5\">
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">";
        // line 1397
        echo ($context["text_width"] ?? null);
        echo "</span>
                                                        <input type=\"text\"
                                                               name=\"";
        // line 1399
        echo ($context["codename"] ?? null);
        echo "_setting[author][category_image_width]\"
                                                               value=\"";
        // line 1400
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "author", [], "any", false, false, false, 1400), "category_image_width", [], "any", false, false, false, 1400);
        echo "\"
                                                               placeholder=\"";
        // line 1401
        echo ($context["text_width"] ?? null);
        echo "\" class=\"form-control\"/>
                                                    </div>


                                                </div>
                                                <div class=\"col-sm-5\">
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">";
        // line 1408
        echo ($context["text_height"] ?? null);
        echo "</span>
                                                        <input type=\"text\"
                                                               name=\"";
        // line 1410
        echo ($context["codename"] ?? null);
        echo "_setting[author][category_image_height]\"
                                                               value=\"";
        // line 1411
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "author", [], "any", false, false, false, 1411), "category_image_height", [], "any", false, false, false, 1411);
        echo "\"
                                                               placeholder=\"";
        // line 1412
        echo ($context["text_height"] ?? null);
        echo "\" class=\"form-control\"/>
                                                    </div>
                                                </div>
                                            </div><!-- //category_image -->
                                        </div>
                                    </div>
                                    <div class=\"tab-pane \" id=\"tab_design\">
                                        <div class=\"tab-body\">
                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_theme\">";
        // line 1422
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <select name=\"";
        // line 1424
        echo ($context["codename"] ?? null);
        echo "_setting[theme]\" id=\"input_theme\"
                                                            class=\"form-control\">
                                                        ";
        // line 1426
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 1427
            echo "                                                            <option value=\"";
            echo $context["theme"];
            echo "\"
                                                                    ";
            // line 1428
            if (($context["theme"] == twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "theme", [], "any", false, false, false, 1428))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo $context["theme"];
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1430
        echo "                                                    </select>
                                                </div>
                                            </div><!-- //status -->
                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_admin_style\">";
        // line 1435
        echo ($context["entry_admin_style"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <select name=\"";
        // line 1437
        echo ($context["codename"] ?? null);
        echo "_setting[admin_style]\"
                                                            id=\"input_select_admin_side\" class=\"form-control m-b\">
                                                        ";
        // line 1439
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["admin_styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 1440
            echo "                                                            <option value=\"";
            echo $context["style"];
            echo "\"
                                                                ";
            // line 1441
            if (($context["style"] == twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "admin_style", [], "any", false, false, false, 1441))) {
                echo " selected=\"selected\" ";
            }
            echo ">
                                                                ";
            // line 1442
            echo $context["style"];
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1444
        echo "                                                    </select>

                                                </div>
                                            </div><!-- //admin_style -->
                                            <div class=\"form-group\">
                                                <label class=\"control-label col-sm-2\">";
        // line 1449
        echo ($context["entry_design_custom_style"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <textarea class=\"form-control\"
                                                              name=\"";
        // line 1452
        echo ($context["codename"] ?? null);
        echo "_setting[design][custom_style]\"
                                                              style=\"height:150px;\">";
        // line 1453
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "design", [], "any", false, false, false, 1453), "custom_style", [], "any", false, false, false, 1453);
        echo "</textarea>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"col-sm-2 control-label\"
                                                       for=\"input_checkbox\">";
        // line 1458
        echo ($context["entry_enabled_ssl_url"] ?? null);
        echo "</label>
                                                <div class=\"col-sm-10\">
                                                    <div class=\"bs-callout bs-callout-warning m-t\">
                                                        ";
        // line 1461
        echo ($context["help_enabled_ssl_url"] ?? null);
        echo "
                                                    </div>
                                                    <div class=\"input-group m-b\">
                                                        <input type=\"text\" class=\"form-control\"
                                                               name=\"";
        // line 1465
        echo ($context["codename"] ?? null);
        echo "_setting[design][ssl_url]\"
                                                               value=\"";
        // line 1466
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "design", [], "any", false, false, false, 1466), "ssl_url", [], "any", false, false, false, 1466);
        echo "\"/>
                                                        <div class=\"input-group-btn\">
                                                            <a class=\"btn btn-primary\"
                                                               id=\"enable_ssl_url\">";
        // line 1469
        echo ($context["button_enabled_ssl"] ?? null);
        echo "</a>
                                                        </div>
                                                    </div>
                                                    <div id=\"notification_enable_ssl_url\"
                                                         class=\"alert alert-success hide\">";
        // line 1473
        echo ($context["success_enabled_ssl"] ?? null);
        echo "</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class=\"tab-pane\" id=\"tab_instruction\" >
                                <div class=\"tab-body\">";
        // line 1479
        echo ($context["text_instruction"] ?? null);
        echo "</div>
                            </div> -->
                            <div class=\"tab-pane\" id=\"tab_demo\" >
                            ";
        // line 1482
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["demos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["demo"]) {
            // line 1483
            echo "                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\"
                                           for=\"install_demo_data\">";
            // line 1485
            echo ($context["entry_install_demo_data"] ?? null);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["demo"], "text", [], "any", false, false, false, 1485);
            echo "</label>
                                    <div class=\"col-sm-10 notification-install-demo-data\">
                                        <div class=\"alert alert-warning\"  style=\"overflow: inherit;\">
                                            <div class=\"row\">
                                                <div class=\"col-md-9\">";
            // line 1489
            echo twig_get_attribute($this->env, $this->source, $context["demo"], "description", [], "any", false, false, false, 1489);
            echo " </div>
                                                <div class=\"col-md-3\"><a data-href=\"";
            // line 1490
            echo twig_get_attribute($this->env, $this->source, $context["demo"], "install", [], "any", false, false, false, 1490);
            echo "\" class=\"btn btn-warning btn-block install-demo-data\">";
            echo ($context["button_install_demo_data"] ?? null);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["demo"], "text", [], "any", false, false, false, 1490);
            echo "</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1497
        echo "                            </div>
                                </div>
                            </form>
                            <div style=\"text-align: center; padding: 30px;\">";
        // line 1500
        echo ($context["text_powered_by"] ?? null);
        echo "</div>
                            ";
        // line 1501
        if (($context["ads"] ?? null)) {
            echo "                   
                    ";
        }
        // line 1502
        echo "                    
                </div>
            </div>
        </div>
        ";
        // line 1506
        if (( !($context["pro"] ?? null) && ($context["d_shopunity"] ?? null))) {
            // line 1507
            echo "        <div class=\"col-md-3\">
            <div class=\"d_shopunity_widget\"></div>
            <script src=\"view/javascript/d_shopunity/d_shopunity_widget.js\" type=\"text/javascript\"></script>
            <script type=\"text/javascript\">
                var d_shopunity_widget = jQuery.extend(true, {}, d_shopunity_widget);
                d_shopunity_widget.init({
                    class: '.d_shopunity_widget',
                    token: '";
            // line 1514
            echo ($context["token"] ?? null);
            echo "',
                    extension_id: '";
            // line 1515
            echo ($context["extension_id"] ?? null);
            echo "'
                    })
            </script>
        </div>
    </div>
    </div>
    ";
        }
        // line 1522
        echo "</div>
<script type=\"text/javascript\"><!--
    // sorting fields


    \$(function () {

        //checkbox
        \$(\".switcher[type='checkbox\").bootstrapSwitch({
            'onColor': 'success',
            'labelWidth': '50',
            'onText': '";
        // line 1533
        echo ($context["text_yes"] ?? null);
        echo "',
            'offText': '";
        // line 1534
        echo ($context["text_no"] ?? null);
        echo "',
        });


        \$(document).on('click', '#save_and_stay', function () {


            \$.ajax({
                type: 'post',
                url: \$('#form').attr('action') + '&save',
                data: \$('#form').serialize(),
                beforeSend: function () {
                    \$('#form').fadeTo('slow', 0.5);
                },
                complete: function () {
                    \$('#form').fadeTo('slow', 1);
                },
                success: function (response) {
                    console.log(response);
                }
            });
        });

        \$('body').on('click', '.install-demo-data', function () {
            var install = \$(this).data('href');
            var \$notification = \$(this).parents('.notification-install-demo-data');
            bootbox.confirm(\"";
        // line 1560
        echo ($context["warning_install_demo_data"] ?? null);
        echo "\", function (result) {
                console.log('');

                if (result) {
                    \$.ajax({
                        url: install,
                        type: 'post',
                        dataType: 'json',

                        beforeSend: function () {
                            \$('#form').fadeTo('slow', 0.5);
                        },

                        complete: function () {
                            \$('#form').fadeTo('slow', 1);
                        },

                        success: function (json) {
                            \$notification.find('.alert').remove();

                            if (json.error) {
                                \$notification.html('<div class=\"alert alert-danger\">' + json.error + '</div>')
                            }

                            if (json.success) {
                                \$notification.html('<div class=\"alert alert-success\">' + json.success + '</div>')
                            }
                        }
                    });
                }
            });

        });

        \$('body').on('click', '#enable_ssl_url', function () {
            var ssl_url = \$(this).parents('.input-group').find('input[name\$=\\'[ssl_url]\\']').val();
            \$.ajax({
                url: '";
        // line 1597
        echo ($context["enabled_ssl_url"] ?? null);
        echo "',
                type: 'post',
                dataType: 'json',
                data: 'ssl_url=' + ssl_url,

                beforeSend: function () {
                    \$('#form').fadeTo('slow', 0.5);
                },

                complete: function () {
                    \$('#form').fadeTo('slow', 1);
                },

                success: function (json) {
                    \$('#notification_enable_ssl_url').removeClass('hide')
                }
            });
            return 0;
        });
    });
    //--></script>


";
        // line 1620
        echo ($context["footer"] ?? null);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "extension/module/d_blog_module.twig";
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
        return array (  3393 => 1620,  3367 => 1597,  3327 => 1560,  3298 => 1534,  3294 => 1533,  3281 => 1522,  3271 => 1515,  3267 => 1514,  3258 => 1507,  3256 => 1506,  3250 => 1502,  3245 => 1501,  3241 => 1500,  3236 => 1497,  3219 => 1490,  3215 => 1489,  3206 => 1485,  3202 => 1483,  3198 => 1482,  3192 => 1479,  3183 => 1473,  3176 => 1469,  3170 => 1466,  3166 => 1465,  3159 => 1461,  3153 => 1458,  3145 => 1453,  3141 => 1452,  3135 => 1449,  3128 => 1444,  3120 => 1442,  3114 => 1441,  3109 => 1440,  3105 => 1439,  3100 => 1437,  3095 => 1435,  3088 => 1430,  3076 => 1428,  3071 => 1427,  3067 => 1426,  3062 => 1424,  3057 => 1422,  3044 => 1412,  3040 => 1411,  3036 => 1410,  3031 => 1408,  3021 => 1401,  3017 => 1400,  3013 => 1399,  3008 => 1397,  3002 => 1394,  2994 => 1388,  2990 => 1387,  2986 => 1386,  2981 => 1384,  2975 => 1381,  2969 => 1378,  2961 => 1372,  2957 => 1371,  2953 => 1370,  2948 => 1368,  2943 => 1366,  2937 => 1363,  2929 => 1357,  2914 => 1355,  2910 => 1354,  2905 => 1352,  2900 => 1350,  2891 => 1343,  2887 => 1342,  2883 => 1341,  2878 => 1339,  2872 => 1336,  2866 => 1333,  2856 => 1326,  2852 => 1325,  2848 => 1324,  2843 => 1322,  2833 => 1315,  2829 => 1314,  2825 => 1313,  2820 => 1311,  2814 => 1308,  2804 => 1301,  2800 => 1300,  2796 => 1299,  2790 => 1296,  2764 => 1273,  2759 => 1270,  2748 => 1268,  2744 => 1267,  2740 => 1266,  2732 => 1261,  2727 => 1259,  2724 => 1258,  2713 => 1253,  2709 => 1251,  2694 => 1249,  2690 => 1248,  2685 => 1246,  2681 => 1244,  2677 => 1243,  2670 => 1239,  2662 => 1233,  2649 => 1230,  2645 => 1229,  2641 => 1228,  2636 => 1226,  2628 => 1224,  2624 => 1223,  2618 => 1220,  2603 => 1208,  2599 => 1207,  2595 => 1206,  2590 => 1204,  2580 => 1197,  2576 => 1196,  2572 => 1195,  2567 => 1193,  2561 => 1190,  2554 => 1185,  2550 => 1184,  2546 => 1183,  2541 => 1181,  2535 => 1178,  2529 => 1175,  2520 => 1168,  2516 => 1167,  2512 => 1166,  2507 => 1164,  2501 => 1161,  2495 => 1158,  2487 => 1152,  2483 => 1151,  2479 => 1150,  2474 => 1148,  2468 => 1145,  2462 => 1142,  2454 => 1136,  2450 => 1135,  2446 => 1134,  2441 => 1132,  2435 => 1129,  2429 => 1126,  2419 => 1119,  2415 => 1118,  2411 => 1117,  2406 => 1115,  2396 => 1108,  2392 => 1107,  2388 => 1106,  2383 => 1104,  2373 => 1097,  2369 => 1096,  2365 => 1095,  2360 => 1093,  2354 => 1090,  2341 => 1080,  2337 => 1079,  2333 => 1078,  2328 => 1076,  2318 => 1069,  2314 => 1068,  2310 => 1067,  2305 => 1065,  2299 => 1062,  2290 => 1056,  2286 => 1055,  2282 => 1054,  2277 => 1052,  2269 => 1046,  2265 => 1045,  2261 => 1044,  2256 => 1042,  2250 => 1039,  2244 => 1036,  2236 => 1030,  2232 => 1029,  2228 => 1028,  2224 => 1027,  2218 => 1024,  2213 => 1022,  2205 => 1016,  2201 => 1015,  2197 => 1014,  2192 => 1012,  2186 => 1009,  2180 => 1006,  2172 => 1000,  2168 => 999,  2164 => 998,  2159 => 996,  2154 => 994,  2148 => 991,  2138 => 984,  2134 => 983,  2130 => 982,  2125 => 980,  2115 => 973,  2111 => 971,  2107 => 970,  2103 => 969,  2098 => 967,  2092 => 964,  2087 => 962,  2079 => 956,  2075 => 955,  2071 => 954,  2067 => 953,  2061 => 950,  2056 => 948,  2045 => 939,  2033 => 937,  2028 => 936,  2024 => 935,  2019 => 933,  2014 => 931,  2006 => 925,  2002 => 924,  1998 => 923,  1993 => 921,  1987 => 918,  1981 => 915,  1973 => 909,  1969 => 908,  1965 => 907,  1960 => 905,  1954 => 902,  1948 => 899,  1940 => 893,  1936 => 892,  1932 => 891,  1927 => 889,  1921 => 886,  1915 => 883,  1907 => 877,  1903 => 876,  1899 => 875,  1894 => 873,  1888 => 870,  1882 => 867,  1874 => 861,  1870 => 860,  1866 => 859,  1861 => 857,  1855 => 854,  1849 => 851,  1841 => 845,  1837 => 844,  1833 => 843,  1828 => 841,  1822 => 838,  1816 => 835,  1809 => 830,  1796 => 827,  1788 => 826,  1783 => 825,  1779 => 824,  1774 => 822,  1766 => 816,  1762 => 815,  1758 => 814,  1753 => 812,  1747 => 809,  1741 => 806,  1733 => 800,  1729 => 799,  1725 => 798,  1720 => 796,  1714 => 793,  1708 => 790,  1700 => 784,  1696 => 783,  1692 => 782,  1687 => 780,  1681 => 777,  1675 => 774,  1665 => 767,  1661 => 766,  1657 => 765,  1651 => 762,  1641 => 755,  1637 => 754,  1633 => 753,  1627 => 750,  1617 => 743,  1613 => 742,  1609 => 741,  1603 => 738,  1593 => 731,  1589 => 730,  1585 => 729,  1580 => 727,  1570 => 720,  1566 => 719,  1562 => 718,  1557 => 716,  1551 => 713,  1540 => 704,  1536 => 703,  1532 => 702,  1527 => 700,  1521 => 697,  1515 => 694,  1507 => 688,  1503 => 687,  1499 => 686,  1495 => 685,  1489 => 682,  1484 => 680,  1474 => 673,  1470 => 671,  1466 => 670,  1462 => 669,  1457 => 667,  1451 => 664,  1445 => 661,  1435 => 654,  1431 => 653,  1427 => 652,  1421 => 649,  1413 => 643,  1407 => 642,  1402 => 640,  1396 => 637,  1390 => 634,  1382 => 628,  1378 => 627,  1374 => 626,  1369 => 624,  1363 => 621,  1357 => 618,  1349 => 612,  1343 => 611,  1338 => 609,  1332 => 606,  1327 => 604,  1319 => 598,  1313 => 597,  1308 => 595,  1302 => 592,  1297 => 590,  1290 => 585,  1277 => 582,  1269 => 581,  1264 => 580,  1260 => 579,  1255 => 577,  1247 => 571,  1241 => 570,  1237 => 569,  1231 => 566,  1226 => 564,  1218 => 558,  1212 => 557,  1207 => 555,  1201 => 552,  1196 => 550,  1186 => 543,  1182 => 542,  1178 => 541,  1174 => 540,  1164 => 533,  1160 => 532,  1156 => 531,  1152 => 530,  1146 => 527,  1138 => 521,  1132 => 520,  1127 => 518,  1121 => 515,  1116 => 513,  1106 => 506,  1102 => 505,  1098 => 504,  1094 => 503,  1084 => 496,  1080 => 495,  1076 => 494,  1072 => 493,  1066 => 490,  1058 => 484,  1052 => 483,  1047 => 481,  1041 => 478,  1036 => 476,  1023 => 465,  1017 => 464,  1012 => 462,  1006 => 459,  1000 => 456,  992 => 450,  986 => 449,  981 => 447,  975 => 444,  969 => 441,  959 => 434,  955 => 433,  951 => 432,  946 => 430,  936 => 423,  932 => 422,  928 => 421,  923 => 419,  917 => 416,  909 => 410,  903 => 409,  898 => 407,  892 => 404,  886 => 401,  878 => 395,  872 => 394,  867 => 392,  861 => 389,  855 => 386,  847 => 380,  832 => 378,  828 => 377,  823 => 375,  818 => 373,  809 => 366,  803 => 365,  798 => 363,  792 => 360,  786 => 357,  776 => 350,  772 => 349,  768 => 348,  763 => 346,  753 => 339,  749 => 338,  745 => 337,  740 => 335,  734 => 332,  726 => 326,  720 => 325,  715 => 323,  709 => 320,  703 => 317,  693 => 310,  689 => 309,  685 => 308,  679 => 305,  652 => 281,  647 => 278,  636 => 276,  632 => 275,  628 => 274,  620 => 269,  615 => 267,  612 => 266,  605 => 264,  600 => 261,  596 => 259,  581 => 257,  577 => 256,  572 => 254,  568 => 252,  564 => 251,  557 => 247,  551 => 243,  547 => 240,  534 => 237,  530 => 236,  526 => 235,  521 => 233,  513 => 231,  509 => 230,  503 => 227,  498 => 224,  492 => 220,  488 => 218,  473 => 216,  469 => 215,  464 => 213,  459 => 211,  444 => 199,  440 => 198,  435 => 196,  429 => 192,  421 => 187,  417 => 186,  413 => 185,  409 => 183,  406 => 182,  398 => 177,  394 => 176,  390 => 175,  386 => 173,  383 => 172,  379 => 170,  375 => 169,  370 => 167,  364 => 165,  362 => 164,  357 => 162,  352 => 159,  342 => 152,  335 => 148,  326 => 142,  320 => 139,  311 => 133,  305 => 130,  296 => 124,  290 => 121,  286 => 119,  284 => 118,  272 => 109,  265 => 105,  258 => 101,  251 => 97,  244 => 93,  237 => 89,  230 => 85,  223 => 81,  216 => 77,  209 => 73,  201 => 68,  195 => 65,  191 => 63,  186 => 60,  183 => 59,  174 => 53,  166 => 47,  163 => 46,  155 => 42,  152 => 41,  144 => 37,  141 => 36,  135 => 34,  133 => 33,  127 => 29,  116 => 27,  112 => 26,  105 => 24,  97 => 21,  92 => 19,  86 => 17,  82 => 15,  76 => 14,  68 => 12,  60 => 10,  57 => 9,  53 => 8,  48 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/d_blog_module.twig", "");
    }
}
