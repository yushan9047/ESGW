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

/* extension/d_blog_module/post_list.twig */
class __TwigTemplate_57bde98a9b7e81bdc4fc0c8fd88fedef extends Template
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
            <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_copy"] ?? null);
        echo "\" class=\"btn btn-default\" onclick=\"\$('#form-post').attr('action', '";
        echo ($context["copy"] ?? null);
        echo "').submit();\"><i class=\"fa fa-copy\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-post').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
            echo (($__internal_compile_0 = $context["breadcrumb"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["href"] ?? null) : null);
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
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "        <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 28
        echo "        <div class=\"panel panel-default\" style=\"display: none;\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 30
        echo ($context["text_list"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <div class=\"well\">
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-title\">";
        // line 37
        echo ($context["entry_title"] ?? null);
        echo "</label>
                                <input type=\"text\" name=\"filter_title\" value=\"";
        // line 38
        echo ($context["filter_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_title"] ?? null);
        echo "\" id=\"input-title\" class=\"form-control\" />
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-status\">";
        // line 41
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                                    <option value=\"*\"></option>
                                    ";
        // line 44
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 45
            echo "                                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                    ";
        } else {
            // line 47
            echo "                                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                                    ";
        }
        // line 49
        echo "                                    ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 50
            echo "                                    <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                    ";
        } else {
            // line 52
            echo "                                    <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                                    ";
        }
        // line 54
        echo "                                </select>
                            </div>                                                                                                              
                        </div>
                        <div class=\"col-sm-4\">                            
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-category\">";
        // line 59
        echo ($context["entry_category"] ?? null);
        echo "</label>

                                <select name=\"filter_category\" id=\"input-category\" class=\"form-control\">
                                    <option value=\"*\"></option>                                                                                                                                             
                                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["post_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post_category"]) {
            // line 64
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["post_category"], "category_id", [], "any", false, false, false, 64) == ($context["filter_category"] ?? null))) {
                // line 65
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["post_category"], "category_id", [], "any", false, false, false, 65);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["post_category"], "title", [], "any", false, false, false, 65);
                echo "</option>
                                    ";
            } else {
                // line 67
                echo "                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["post_category"], "category_id", [], "any", false, false, false, 67);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["post_category"], "title", [], "any", false, false, false, 67);
                echo "</option>
                                    ";
            }
            // line 69
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                                </select>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-tag\">";
        // line 73
        echo ($context["entry_tag"] ?? null);
        echo "</label>
                                <input type=\"text\" name=\"filter_tag\" value=\"";
        // line 74
        echo ($context["filter_tag"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_tag"] ?? null);
        echo "\" id=\"input-tag\" class=\"form-control\" />
                            </div>
                        </div>
                        <div class=\"col-sm-4\">                                                                                                              
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-date-published\">";
        // line 79
        echo ($context["entry_date_published"] ?? null);
        echo "</label>
                                <div class=\"input-group date\">
                                    <input type=\"text\" name=\"filter_date_published\" value=\"";
        // line 81
        echo ($context["filter_date_published"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_published"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-published\" class=\"form-control\" />
                                    <span class=\"input-group-btn\">
                                        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                    </span>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"input-date-modified\">";
        // line 88
        echo ($context["entry_date_modified"] ?? null);
        echo "</label>
                                <div class=\"input-group date\">
                                    <input type=\"text\" name=\"filter_date_modified\" value=\"";
        // line 90
        echo ($context["filter_date_modified"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_modified"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-modified\" class=\"form-control\" />
                                    <span class=\"input-group-btn\">
                                        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                    </span>
                                </div>
                            </div>
                            <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-search\"></i> ";
        // line 96
        echo ($context["button_filter"] ?? null);
        echo "</button>
                        </div>                                                                                              

                    </div>
                </div>
            </div>
        </div>
        <form action=\"";
        // line 103
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-post\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                    <thead>
                        <tr>
                            <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                            <td class=\"text-center\">";
        // line 109
        echo ($context["column_image"] ?? null);
        echo "</td>
                            <td class=\"text-left\">";
        // line 110
        if ((($context["sort"] ?? null) == "pd.title")) {
            // line 111
            echo "                                <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                                ";
        } else {
            // line 113
            echo "                                <a href=\"";
            echo ($context["sort_title"] ?? null);
            echo "\">";
            echo ($context["column_title"] ?? null);
            echo "</a>
                                ";
        }
        // line 115
        echo "                            </td>                            
                            <td class=\"text-left\">Sort Order</td>                            
                            <td class=\"text-left\">";
        // line 117
        if ((($context["sort"] ?? null) == "p2c.category_id")) {
            // line 118
            echo "                                <a href=\"";
            echo ($context["sort_category_id"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_categores"] ?? null);
            echo "</a>
                                ";
        } else {
            // line 120
            echo "                                <a href=\"";
            echo ($context["sort_category_id"] ?? null);
            echo "\">";
            echo ($context["column_categores"] ?? null);
            echo "</a>
                                ";
        }
        // line 122
        echo "                            </td>                            
                            <td class=\"text-left\">";
        // line 123
        if ((($context["sort"] ?? null) == "p.status")) {
            // line 124
            echo "                                <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                                ";
        } else {
            // line 126
            echo "                                <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                                ";
        }
        // line 128
        echo "                            </td>
                            <td class=\"text-left\">";
        // line 129
        if ((($context["sort"] ?? null) == "p.date_published")) {
            // line 130
            echo "                                <a href=\"";
            echo ($context["sort_date_published"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_published"] ?? null);
            echo "</a>
                                ";
        } else {
            // line 132
            echo "                                <a href=\"";
            echo ($context["sort_date_published"] ?? null);
            echo "\">";
            echo ($context["column_date_published"] ?? null);
            echo "</a>
                                ";
        }
        // line 134
        echo "                            </td>
                            <td class=\"text-left\">";
        // line 135
        if ((($context["sort"] ?? null) == "p.date_modified")) {
            // line 136
            echo "                                <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a>
                                ";
        } else {
            // line 138
            echo "                                <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a>
                                ";
        }
        // line 140
        echo "                            </td>
                            <td class=\"text-right\">";
        // line 141
        echo ($context["column_action"] ?? null);
        echo "</td>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 145
        if (($context["posts"] ?? null)) {
            // line 146
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 147
                echo "                        <tr>
                            <td class=\"text-center\">";
                // line 148
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["post"], "post_id", [], "any", false, false, false, 148), ($context["selected"] ?? null))) {
                    // line 149
                    echo "                                <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "post_id", [], "any", false, false, false, 149);
                    echo "\" checked=\"checked\" />
                                ";
                } else {
                    // line 151
                    echo "                                <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "post_id", [], "any", false, false, false, 151);
                    echo "\" />
                                ";
                }
                // line 153
                echo "                            </td>
                            <td class=\"text-center\">";
                // line 154
                if (twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 154)) {
                    // line 155
                    echo "                                <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 155);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 155);
                    echo "\" class=\"img-thumbnail\" />
                                ";
                } else {
                    // line 157
                    echo "                                <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span>
                                ";
                }
                // line 159
                echo "                            </td>
                            <td class=\"text-left\">";
                // line 160
                echo twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 160);
                echo "</td>                            
                            <td class=\"text-left\">";
                // line 161
                echo twig_get_attribute($this->env, $this->source, $context["post"], "tag", [], "any", false, false, false, 161);
                echo "</td>                            
                            <td class=\"text-left\">                                                                                                                      
                                ";
                // line 163
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "category", [], "any", false, false, false, 163));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 164
                    echo "                                ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_title", [], "any", false, false, false, 164);
                    echo "</br>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 165
                echo "                                                                                                                                
                            </td>                            
                            <td class=\"text-left\">";
                // line 167
                echo twig_get_attribute($this->env, $this->source, $context["post"], "status", [], "any", false, false, false, 167);
                echo "</td>
                            <td class=\"text-left\">";
                // line 168
                echo twig_get_attribute($this->env, $this->source, $context["post"], "date_published", [], "any", false, false, false, 168);
                echo "</td>
                            <td class=\"text-left\">";
                // line 169
                echo twig_get_attribute($this->env, $this->source, $context["post"], "date_modified", [], "any", false, false, false, 169);
                echo "</td>
                            <td class=\"text-right\"><a href=\"";
                // line 170
                echo twig_get_attribute($this->env, $this->source, $context["post"], "edit", [], "any", false, false, false, 170);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "                        ";
        } else {
            // line 174
            echo "                        <tr>
                            <td class=\"text-center\" colspan=\"9\">";
            // line 175
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                        </tr>
                        ";
        }
        // line 178
        echo "                    </tbody>
                </table>
            </div>
        </form>
        <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
        // line 183
        echo ($context["pagination"] ?? null);
        echo "</div>
            <div class=\"col-sm-6 text-right\">";
        // line 184
        echo ((($context["results"] ?? null)) ? (($context["results"] ?? null)) : (""));
        echo "</div>
        </div>
    </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function () {
    var url = '";
        // line 190
        echo ($context["post_search"] ?? null);
        echo "';

    var filter_title = \$('input[name=\\'filter_title\\']').val();

    if (filter_title) {
        url += '&filter_title=' + encodeURIComponent(filter_title);
    }
    var filter_tag = \$('input[name=\\'filter_tag\\']').val();

    if (filter_tag) {
        url += '&filter_tag=' + encodeURIComponent(filter_tag);
    }

    var filter_category = \$('select[name=\\'filter_category\\']').val();

    if (filter_category !== '*') {
        url += '&filter_category=' + encodeURIComponent(filter_category);
    }

    var filter_status = \$('select[name=\\'filter_status\\']').val();

    if (filter_status !== '*') {
        url += '&filter_status=' + encodeURIComponent(filter_status);
    }

    var filter_date_published = \$('input[name=\\'filter_date_published\\']').val();

    if (filter_date_published) {
        url += '&filter_date_published=' + encodeURIComponent(filter_date_published);
    }

    var filter_date_modified = \$('input[name=\\'filter_date_modified\\']').val();

    if (filter_date_modified) {
        url += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
    }

    location = url;
});
//--></script>
<script type=\"text/javascript\"><!--
//              Posts
\$('input[name=\\'filter_title\\']').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: '";
        // line 235
        echo ($context["post_autocomplete"] ?? null);
        echo "&filter_title=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['title'],
                        value: item['post_id']
                    };
                }));
            }
        });
    },
    'select': function (item) {
        \$('input[name=\\'filter_title\\']').val(item['label']);
    }
});

//--></script>
<script type=\"text/javascript\"><!--
//              Tags
\$('input[name=\\'filter_tag\\']').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: '";
        // line 258
        echo ($context["post_autocomplete"] ?? null);
        echo "&filter_tag=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['tag'],
                        value: item['post_id']
                    };
                }));
            }
        });
    },
    'select': function (item) {
        \$('input[name=\\'filter_tag\\']').val(item['label']);
    }
});

//--></script>
<script type=\"text/javascript\"><!--
// Category
\$('select[name=\\'filter_category\\']').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: '";
        // line 281
        echo ($context["category_autocomplete"] ?? null);
        echo "&filter_category=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['title'],
                        value: item['category_id']
                    };
                }));
            }
        });
    },
    'select': function (item) {
        \$('select[name=\\'filter_category\\']').val('');

        \$('#post-category' + item['value']).remove();

        \$('#post-category').append('<div id=\"post-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"post_category[]\" value=\"' + item['value'] + '\" /></div>');
    }
});

\$('#post-category').delegate('.fa-minus-circle', 'click', function () {
    \$(this).parent().remove();
});

\$('#post-filter').delegate('.fa-minus-circle', 'click', function () {
    \$(this).parent().remove();
});
//--></script>
<script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
<link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
    pickTime: false
});
//--></script>
";
        // line 317
        echo ($context["footer"] ?? null);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "extension/d_blog_module/post_list.twig";
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
        return array (  677 => 317,  638 => 281,  612 => 258,  586 => 235,  538 => 190,  529 => 184,  525 => 183,  518 => 178,  512 => 175,  509 => 174,  506 => 173,  495 => 170,  491 => 169,  487 => 168,  483 => 167,  479 => 165,  470 => 164,  466 => 163,  461 => 161,  457 => 160,  454 => 159,  450 => 157,  442 => 155,  440 => 154,  437 => 153,  431 => 151,  425 => 149,  423 => 148,  420 => 147,  415 => 146,  413 => 145,  406 => 141,  403 => 140,  395 => 138,  385 => 136,  383 => 135,  380 => 134,  372 => 132,  362 => 130,  360 => 129,  357 => 128,  349 => 126,  339 => 124,  337 => 123,  334 => 122,  326 => 120,  316 => 118,  314 => 117,  310 => 115,  302 => 113,  292 => 111,  290 => 110,  286 => 109,  277 => 103,  267 => 96,  256 => 90,  251 => 88,  239 => 81,  234 => 79,  224 => 74,  220 => 73,  215 => 70,  209 => 69,  201 => 67,  193 => 65,  190 => 64,  186 => 63,  179 => 59,  172 => 54,  166 => 52,  160 => 50,  157 => 49,  151 => 47,  145 => 45,  143 => 44,  137 => 41,  129 => 38,  125 => 37,  115 => 30,  111 => 28,  103 => 24,  100 => 23,  92 => 19,  90 => 18,  84 => 14,  73 => 12,  69 => 11,  64 => 9,  57 => 7,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/d_blog_module/post_list.twig", "");
    }
}
