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

/* esg-digital/template/information/service.twig */
class __TwigTemplate_c91de3bedcbea31ba5abd6b57dc040b4 extends Template
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
    <!-- Service details section start -->
    <section class=\"ep-service-details-section mt-120\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 service-content\">
            <div class=\"service-details\">
\t\t\t
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
        // line 58
        if (($context["youtubes"] ?? null)) {
            // line 59
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["youtubes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["youtube"]) {
                // line 60
                echo "\t\t\t<div class=\"video-container\">
\t\t\t\t<iframe 
\t\t\t\t\tsrc=\"";
                // line 62
                echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["youtube"], "video", [], "any", false, false, false, 62), ["watch?v=" => "embed/"]);
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
            // line 71
            echo "\t\t\t";
        }
        // line 72
        echo "
              <div class=\"service-text mt-30\">

\t\t\t\t";
        // line 75
        echo ($context["description"] ?? null);
        echo "
              </div>
            </div>
          </div>
          <div class=\"col-lg-4\">
            <aside class=\"service-sidebar rounded-20\">
              <h4 class=\"sidebar-title mb-30 position-relative d-inline-block\">數位島平台</h4>
              <ul class=\"list-unstyled category\">
\t\t\t\t";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 84
            echo "                <li>
                  <a class=\"d-flex align-items-center justify-content-between\" href=\"index.php?route=information/service&id=";
            // line 85
            echo twig_get_attribute($this->env, $this->source, $context["service"], "post_id", [], "any", false, false, false, 85);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 85);
            echo "
                    <i class=\"fa-solid fa-arrow-right\"></i></a>
                </li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "\t\t\t\t
\t\t\t\t
              </ul>
            </aside>
          </div>
        </div>
      </div>
    </section>
    <!-- Service details section end -->
  </main>
  <!-- Main area end -->
";
        // line 100
        echo ($context["footer"] ?? null);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "esg-digital/template/information/service.twig";
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
        return array (  218 => 100,  205 => 89,  193 => 85,  190 => 84,  186 => 83,  175 => 75,  170 => 72,  167 => 71,  152 => 62,  148 => 60,  143 => 59,  141 => 58,  106 => 25,  91 => 23,  87 => 21,  85 => 20,  79 => 19,  76 => 18,  59 => 17,  54 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "esg-digital/template/information/service.twig", "");
    }
}
