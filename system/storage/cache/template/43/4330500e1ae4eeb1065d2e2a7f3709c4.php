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

/* esg-digital/template/information/about.twig */
class __TwigTemplate_1f11d14bed1dff55a654bea948bae08b extends Template
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
  <!-- Main area start -->
  <main>
    <!-- Page header section start -->
    <section class=\"ep-page-header-section\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-4\">
            <div class=\"header-img\">
              <img src=\"catalog/view/theme/esg-digital/assets/img/images/page-header-img.svg\" alt=\"page-header-img\">
            </div>
          </div>
          <div class=\"col-sm-8 ms-auto\">
            <div class=\"bread-crumb text-end\">
              <h1 class=\"page-title\">";
        // line 15
        echo ($context["heading_title"] ?? null);
        echo "</h1>
              <ul class=\"list-unstyled d-flex flex-wrap align-items-center justify-content-end mt-30\">
\t\t\t\t  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 18
            echo "\t\t\t\t\t<li>
\t\t\t\t\t  <a href=\"";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 19);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 19);
            echo "</a>
\t\t\t\t\t  ";
            // line 20
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 20)) {
                // line 21
                echo "\t\t\t\t\t\t<i class=\"fa-solid fa-chevron-right mx-1\"></i>
\t\t\t\t\t  ";
            }
            // line 23
            echo "\t\t\t\t\t</li>
\t\t\t\t  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Page header section end -->
    <!-- Project details section start -->
    <section class=\"ep-project-details-section pt-120\">
      <div class=\"container\">





        <div class=\"row\">
\t\t\t<style>
\t\t\t\t.video-container {
\t\t\t\t\tposition: relative;
\t\t\t\t\twidth: 100%; /* 寬度填滿容器 */
\t\t\t\t\tpadding-top: 56.25%; /* 高度設定為 16:9 的比例 (9/16*100) */
\t\t\t\t\toverflow: hidden;
\t\t\t\t}

\t\t\t\t.video-container iframe {
\t\t\t\t\tposition: absolute;
\t\t\t\t\ttop: 0;
\t\t\t\t\tleft: 0;
\t\t\t\t\twidth: 100%; /* 讓 iframe 填滿容器 */
\t\t\t\t\theight: 100%; /* 讓 iframe 高度依比例縮放 */
\t\t\t\t\tborder: 0;
\t\t\t\t}

\t\t\t</style>
\t\t\t
\t\t\t";
        // line 60
        if (($context["youtubes"] ?? null)) {
            // line 61
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["youtubes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["youtube"]) {
                // line 62
                echo "\t\t\t<div class=\"video-container\">
\t\t\t\t<iframe 
\t\t\t\t\tsrc=\"";
                // line 64
                echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["youtube"], "video", [], "any", false, false, false, 64), ["watch?v=" => "embed/"]);
                echo "\" 
\t\t\t\t\ttitle=\"YouTube video player\" 
\t\t\t\t\tframeborder=\"0\" 
\t\t\t\t\tallow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" 
\t\t\t\t\treferrerpolicy=\"strict-origin-when-cross-origin\" 
\t\t\t\t\tallowfullscreen>
\t\t\t\t</iframe>
\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['youtube'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "\t\t\t";
        }
        echo "\t\t
\t\t</div>
\t\t
\t\t
        <div class=\"project-description pt-120\">

\t\t\t";
        // line 79
        echo ($context["description"] ?? null);
        echo "

        </div>
      </div>
    </section>
    <!-- Project details section end -->


\t
  </main>
  <!-- Main area end -->  
";
        // line 90
        echo ($context["footer"] ?? null);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "esg-digital/template/information/about.twig";
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
        return array (  193 => 90,  179 => 79,  169 => 73,  154 => 64,  150 => 62,  145 => 61,  143 => 60,  106 => 25,  91 => 23,  87 => 21,  85 => 20,  79 => 19,  76 => 18,  59 => 17,  54 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "esg-digital/template/information/about.twig", "");
    }
}
