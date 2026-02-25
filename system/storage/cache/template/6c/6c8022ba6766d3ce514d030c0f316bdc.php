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
class __TwigTemplate_489c544c95d673f54c8ea84ca1749b1b extends Template
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

.ep-page-header-section.with-bg {
  background-image: url('image/";
        // line 7
        echo ($context["page_image"] ?? null);
        echo "');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  width: 100%;
  height: 450px; /* 預設高度，可依需求調整 */
  display: flex;
  align-items: center;
}

@media (min-width: 768px) {
  .ep-page-header-section.with-bg {
    height: 300px;
  }
}

@media (min-width: 1200px) {
  .ep-page-header-section.with-bg {
    height: 570px;
  }
}

.bread-crumb .page-title {
  font-size: 2rem;
  font-weight: bold;
  margin-bottom: 10px;
}

.bread-crumb ul {
  margin: 0;
  padding: 0;
}

.bread-crumb li {
  font-size: 1rem;
  color: #fff;
}

.bread-crumb a {
  color: #fff;
  text-decoration: underline;
}


</style>  


  <!-- Main area start -->
  <main>
    <!-- Page header section start -->
<section class=\"ep-page-header-section with-bg\">
  <div class=\"container\">
    <div class=\"row align-items-center\">
      <div class=\"col-sm-12\">
        <div class=\"bread-crumb text-center text-white\">
          <h1 class=\"page-title\">";
        // line 62
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          <ul class=\"list-unstyled d-flex flex-wrap align-items-center justify-content-center mt-30\">
            <li>
              <a href=\"index.php\" class=\"text-white\">首頁</a>
              <i class=\"fa-solid fa-chevron-right mx-2\"></i>
            </li>
            <li>";
        // line 68
        echo ($context["heading_title"] ?? null);
        echo " 簡介</li>
          </ul>
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
        // line 102
        if (($context["youtubes"] ?? null)) {
            // line 103
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["youtubes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["youtube"]) {
                // line 104
                echo "\t\t\t<div class=\"video-container\">
\t\t\t\t<iframe 
\t\t\t\t\tsrc=\"";
                // line 106
                echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["youtube"], "video", [], "any", false, false, false, 106), ["watch?v=" => "embed/"]);
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
            // line 115
            echo "\t\t\t";
        }
        // line 116
        echo "
              <div class=\"service-text mt-30\">

\t\t\t\t";
        // line 119
        echo ($context["description"] ?? null);
        echo "
              </div>
            </div>
          </div>
          <div class=\"col-lg-4\">
            <aside class=\"service-sidebar rounded-20\" style=\"position: sticky;
\t\t\ttop: 120px;
\t\t\tpadding: 3px; /* 邊框寬度 */
\t\t\tbackground: linear-gradient(45deg, #2196F3, #8BC34A); /* 漸層框線 */
\t\t\tborder-radius: 25px; /* 邊框圓角 */\">
\t\t\t<div class=\"content\" style=\"background: var(--bs-body-bg);border-radius: 25px;padding: 25px;\">
              <h4 class=\"sidebar-title mb-30 position-relative d-inline-block\">數位島平台</h4>
              <ul class=\"list-unstyled category\">
\t\t\t\t";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 133
            echo "                <li>
                  <a class=\"d-flex align-items-center justify-content-between\" href=\"index.php?route=information/service&id=";
            // line 134
            echo twig_get_attribute($this->env, $this->source, $context["service"], "post_id", [], "any", false, false, false, 134);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 134);
            echo "</a>
                </li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "\t\t\t\t
\t\t\t\t
              </ul>
\t\t\t</div>
            </aside>
          </div>
        </div>
      </div>
    </section>
    <!-- Service details section end -->
  </main>
  <!-- Main area end -->
";
        // line 149
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
        return array (  232 => 149,  218 => 137,  207 => 134,  204 => 133,  200 => 132,  184 => 119,  179 => 116,  176 => 115,  161 => 106,  157 => 104,  152 => 103,  150 => 102,  113 => 68,  104 => 62,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "esg-digital/template/information/service.twig", "");
    }
}
