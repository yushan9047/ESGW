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
class __TwigTemplate_1444d2268154a60b8e1aa8bd5f4287b7 extends Template
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
        echo "

<style>
#extension > .text-center {
  display: none;
}

</style>

";
        // line 10
        echo ($context["column_left"] ?? null);
        echo "

<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <h1>";
        // line 15
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 18
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 18);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 18);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-puzzle-piece\"></i> ";
        // line 26
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <fieldset>
          <legend>";
        // line 30
        echo ($context["text_type"] ?? null);
        echo "</legend>
          <div class=\"well\">
            <div class=\"input-group\">
              <select name=\"type\" class=\"form-control\">
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 35
            echo "                ";
            if ((($context["type"] ?? null) == twig_get_attribute($this->env, $this->source, $context["category"], "code", [], "any", false, false, false, 35))) {
                // line 36
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 36);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "text", [], "any", false, false, false, 36);
                echo "</option>
                ";
            } else {
                // line 38
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 38);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "text", [], "any", false, false, false, 38);
                echo "</option>
                ";
            }
            // line 40
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "              </select>
              <span class=\"input-group-addon\"><i class=\"fa fa-filter\"></i> ";
        // line 42
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
        // line 50
        if (($context["categories"] ?? null)) {
            // line 51
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
            // line 103
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
            // line 118
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
        // line 141
        echo "  <script>
  document.querySelector('#extension > .text-center').style.display = 'none';
</script>
<script>
  \$('#extension > .text-center').hide();
</script>

</div>
";
        // line 149
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
        return array (  252 => 149,  242 => 141,  216 => 118,  198 => 103,  144 => 51,  142 => 50,  131 => 42,  128 => 41,  122 => 40,  114 => 38,  106 => 36,  103 => 35,  99 => 34,  92 => 30,  85 => 26,  77 => 20,  66 => 18,  62 => 17,  57 => 15,  49 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketplace/extension.twig", "");
    }
}
