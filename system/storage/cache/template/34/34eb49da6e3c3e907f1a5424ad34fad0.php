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

/* extension/d_blog_module/review_list.twig */
class __TwigTemplate_d3ff1906b40e54715343dae99b1e7746 extends Template
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
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-review').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
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
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 29
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"well\">
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-post\">";
        // line 36
        echo ($context["entry_post"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_post\" value=\"";
        // line 37
        echo ($context["filter_post"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_post"] ?? null);
        echo "\" id=\"input-post\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-author\">";
        // line 40
        echo ($context["entry_author"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_author\" value=\"";
        // line 41
        echo ($context["filter_author"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_author"] ?? null);
        echo "\" id=\"input-author\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-status\">";
        // line 46
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                  <option value=\"*\"></option>
                  ";
        // line 49
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 50
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 52
            echo "                  <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 54
        echo "                  ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 55
            echo "                  <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 57
            echo "                  <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 59
        echo "                </select>
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-date-added\">";
        // line 62
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
                <div class=\"input-group date\">
                  <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 64
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </span></div>
              </div>
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-search\"></i> ";
        // line 69
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
        <form action=\"";
        // line 73
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 79
        if ((($context["sort"] ?? null) == "pd.name")) {
            // line 80
            echo "                    <a href=\"";
            echo ($context["sort_post"] ?? null);
            echo "\" class=\"<?php echo strtolower(\$order)}}\">";
            echo ($context["column_post"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 82
            echo "                    <a href=\"";
            echo ($context["sort_post"] ?? null);
            echo "\">";
            echo ($context["column_post"] ?? null);
            echo "</a>
                    ";
        }
        // line 83
        echo "</td>
                  <td class=\"text-left\">";
        // line 84
        if ((($context["sort"] ?? null) == "r.author")) {
            // line 85
            echo "                    <a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\" class=\"<?php echo strtolower(\$order)}}\">";
            echo ($context["column_author"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 87
            echo "                    <a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a>
                    ";
        }
        // line 88
        echo "</td>
                  <td class=\"text-right\">";
        // line 89
        if ((($context["sort"] ?? null) == "r.rating")) {
            // line 90
            echo "                    <a href=\"";
            echo ($context["sort_rating"] ?? null);
            echo "\" class=\"<?php echo strtolower(\$order)}}\">";
            echo ($context["column_rating"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 92
            echo "                    <a href=\"";
            echo ($context["sort_rating"] ?? null);
            echo "\">";
            echo ($context["column_rating"] ?? null);
            echo "</a>
                    ";
        }
        // line 93
        echo "</td>
                  <td class=\"text-left\">";
        // line 94
        if ((($context["sort"] ?? null) == "r.status")) {
            // line 95
            echo "                    <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"<?php echo strtolower(\$order)}}\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 97
            echo "                    <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        }
        // line 98
        echo "</td>
                  <td class=\"text-left\">";
        // line 99
        if ((($context["sort"] ?? null) == "r.date_added")) {
            // line 100
            echo "                    <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"<?php echo strtolower(\$order)}}\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 102
            echo "                    <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                    ";
        }
        // line 103
        echo "</td>
                  <td class=\"text-right\">";
        // line 104
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 108
        if (($context["reviews"] ?? null)) {
            // line 109
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 110
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 111
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 111), ($context["selected"] ?? null))) {
                    // line 112
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 112);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 114
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 114);
                    echo "\" />
                    ";
                }
                // line 115
                echo "</td>
                  <td class=\"text-left\">";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["review"], "title", [], "any", false, false, false, 116);
                echo "</td>
                  <td class=\"text-left\">";
                // line 117
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 117);
                echo "</td>
                  <td class=\"text-right\">";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 118);
                echo "</td>
                  <td class=\"text-left\">";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["review"], "status", [], "any", false, false, false, 119);
                echo "</td>
                  <td class=\"text-left\">";
                // line 120
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 120);
                echo "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["review"], "edit", [], "any", false, false, false, 121);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "                ";
        } else {
            // line 125
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"7\">";
            // line 126
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 129
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 134
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 135
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = '";
        // line 142
        echo ($context["review_filter"] ?? null);
        echo "';

\tvar filter_post = \$('input[name=\\'filter_post\\']').val();
\t
\tif (filter_post) {
\t\turl += '&filter_post=' + encodeURIComponent(filter_post);
\t}
\t
\tvar filter_author = \$('input[name=\\'filter_author\\']').val();
\t
\tif (filter_author) {
\t\turl += '&filter_author=' + encodeURIComponent(filter_author);
\t}
\t
\tvar filter_status = \$('select[name=\\'filter_status\\']').val();
\t
\tif (filter_status !== '*') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status); 
\t}\t\t
\t\t\t
\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
\t
\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tlocation = url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tpickTime: false
});
//--></script></div>
";
        // line 176
        echo ($context["footer"] ?? null);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "extension/d_blog_module/review_list.twig";
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
        return array (  456 => 176,  419 => 142,  409 => 135,  405 => 134,  398 => 129,  392 => 126,  389 => 125,  386 => 124,  375 => 121,  371 => 120,  367 => 119,  363 => 118,  359 => 117,  355 => 116,  352 => 115,  346 => 114,  340 => 112,  338 => 111,  335 => 110,  330 => 109,  328 => 108,  321 => 104,  318 => 103,  310 => 102,  302 => 100,  300 => 99,  297 => 98,  289 => 97,  281 => 95,  279 => 94,  276 => 93,  268 => 92,  260 => 90,  258 => 89,  255 => 88,  247 => 87,  239 => 85,  237 => 84,  234 => 83,  226 => 82,  218 => 80,  216 => 79,  207 => 73,  200 => 69,  190 => 64,  185 => 62,  180 => 59,  174 => 57,  168 => 55,  165 => 54,  159 => 52,  153 => 50,  151 => 49,  145 => 46,  135 => 41,  131 => 40,  123 => 37,  119 => 36,  109 => 29,  105 => 27,  97 => 23,  94 => 22,  86 => 18,  84 => 17,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/d_blog_module/review_list.twig", "");
    }
}
