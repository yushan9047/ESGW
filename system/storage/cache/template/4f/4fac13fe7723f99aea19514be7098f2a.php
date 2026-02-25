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

/* marketplace/extension.twig */
class __TwigTemplate_4b51401adea6e3efa96839fe0842f643 extends Template
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
<style>

</style>
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
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
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-puzzle-piece\"></i> ";
        // line 19
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <fieldset>
          <legend>";
        // line 23
        echo ($context["text_type"] ?? null);
        echo "</legend>
          <div class=\"well\">
            <div class=\"input-group\">
              <select name=\"type\" class=\"form-control\">
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 28
            echo "                ";
            if ((($context["type"] ?? null) == twig_get_attribute($this->env, $this->source, $context["category"], "code", [], "any", false, false, false, 28))) {
                // line 29
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 29);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "text", [], "any", false, false, false, 29);
                echo "</option>
                ";
            } else {
                // line 31
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 31);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "text", [], "any", false, false, false, 31);
                echo "</option>
                ";
            }
            // line 33
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "              </select>
              <span class=\"input-group-addon\"><i class=\"fa fa-filter\"></i> ";
        // line 35
        echo ($context["text_filter"] ?? null);
        echo "</span>
            </div>
          </div>
        </fieldset>
        <div id=\"extension\"></div>
      </div>
    </div>
  </div>
  ";
        // line 43
        if (($context["categories"] ?? null)) {
            // line 44
            echo "  <script type=\"text/javascript\"><!--
\$('select[name=\"type\"]').on('change', function() {
\t\$.ajax({
\t\turl: \$('select[name=\"type\"]').val(),
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('.fa-filter').addClass('fa-circle-o-notch fa-spin');
\t\t\t\$('.fa-filter').removeClass('fa-filter');
\t\t\t\$('select[name=\\'type\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('.fa-circle-o-notch').addClass('fa-filter');
\t\t\t\$('.fa-circle-o-notch').removeClass('fa-circle-o-notch fa-spin');
\t\t\t\$('select[name=\\'type\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#extension').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\"type\"]').trigger('change');

\$('#extension').on('click', '.btn-success', function(e) {
\te.preventDefault();
\t
\tvar element = this;

\t\$.ajax({
\t\turl: \$(element).attr('href'),
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#extension').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#extension').on('click', '.btn-danger, .btn-warning', function(e) {
\te.preventDefault();
\t
\tif (confirm('";
            // line 96
            echo ($context["text_confirm"] ?? null);
            echo "')) {
\t\tvar element = this;
\t
\t\t\$.ajax({
\t\t\turl: \$(element).attr('href'),
\t\t\tdataType: 'html',
\t\t\tbeforeSend: function() {
\t\t\t\t\$(element).button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$(element).button('reset');
\t\t\t},
\t\t\tsuccess: function(html) {
\t\t\t\t// refresh menu and extension list
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=marketplace/extension/refreshMenu&user_token=";
            // line 111
            echo ($context["user_token"] ?? null);
            echo "',
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\tif (html) {
\t\t\t\t\t\t\t\$('#column-left').replaceWith(html);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\$('select[name=\"type\"]').trigger('change');
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
});
//--></script>
  ";
        }
        // line 134
        echo "</div>
";
        // line 135
        echo ($context["footer"] ?? null);
        echo " ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "marketplace/extension.twig";
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
        return array (  236 => 135,  233 => 134,  207 => 111,  189 => 96,  135 => 44,  133 => 43,  122 => 35,  119 => 34,  113 => 33,  105 => 31,  97 => 29,  94 => 28,  90 => 27,  83 => 23,  76 => 19,  68 => 13,  57 => 11,  53 => 10,  48 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketplace/extension.twig", "");
    }
}
