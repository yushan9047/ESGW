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

/* esg-digital/template/common/home.twig */
class __TwigTemplate_92eaab6ada8842959bfe423a0a93120a extends Template
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
  <main>
  
\t";
        // line 4
        echo ($context["content_top"] ?? null);
        echo "
  
  



    <!-- Pricing section start -->
    <section class=\"ep-pricing-section pt-120\">
\t<!-- <section class=\"ep-services-section py-120\" data-background=\"assets/img/services/service-bg.png\"> -->
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-6 mx-auto\">
            <div class=\"section-title-block text-center\">
              <h6 class=\"section-sub-title position-relative d-inline-block text-uppercase\">Our Services</h6>
              <h2 class=\"section-title split-text right\">數位島平台系統</h2>
            </div>
          </div>
        </div>
        <div class=\"row\">
\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 24
            echo "          <div class=\"col-lg-4 col-md-6 mx-auto mx-lg-0\">
            <div class=\"pricing-item rounded-30\">
              <a href=\"index.php?route=information/service&id=";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["service"], "post_id", [], "any", false, false, false, 26);
            echo "\" class=\"d-block w-100\">
                <div>
\t\t\t\t\t<img src=\"image/";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["service"], "image", [], "any", false, false, false, 28);
            echo "\" alt=\"service-icon\" class=\"img-fluid w-100 rounded-20\">
                </div>
                <div class=\"text-service\">
                  <h4 class=\"service-title\">";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 31);
            echo "</h4>
                </div>
              </a>
            </div>
          </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </div>
      </div>
    </section>
    <!-- Pricing section end -->

\t";
        // line 42
        echo ($context["content_bottom"] ?? null);
        echo "

    <!-- Blog section start -->
    <section class=\"ep-blog-section pt-120\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-7 mx-auto\">
            <div class=\"section-title-block text-center\">
              <h6 class=\"section-sub-title position-relative d-inline-block text-uppercase\">blog & News</h6>
              <h2 class=\"section-title split-text right\">數位島永續新聞</h2>
            </div>
          </div>
        </div>
        <div class=\"row\">
\t\t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 57
            echo "          <div class=\"col-lg-4 col-md-6\">
            <div class=\"blog-item rounded-20\">
              <div class=\"img overflow-hidden\">
                <a href=\"blog-details.html\" class=\"d-block w-100\">
                  <img src=\"image/";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 61);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 61);
            echo "\" class=\"img-fluid w-100\">
                </a>
              </div>
              <div class=\"text\">
                <div class=\"blog-meta d-flex align-items-center justify-content-between gap-2\">
                  <a href=\"#\" class=\"d-flex align-items-center\">
                    <i class=\"fas fa-calendar-alt\"></i>
                    ";
            // line 68
            echo twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "date_published", [], "any", false, false, false, 68), "Y-m-d");
            echo "
                  </a>
                </div>
                <h4 class=\"blog-title\">
                  <a href=\"index.php?route=information/blog&id=";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "post_id", [], "any", false, false, false, 72);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 72);
            echo "</a>
                </h4>
                <a href=\"index.php?route=information/blog&id=";
            // line 74
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "post_id", [], "any", false, false, false, 74);
            echo "\"
                  class=\"theme-btn theme-btn-border position-relative d-inline-flex align-items-center\">
                  閱讀更多
                </a>
              </div>
            </div>
          </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        </div>
      </div>
    </section>

    <!-- Blog section end -->
  </main>
";
        // line 88
        echo ($context["footer"] ?? null);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "esg-digital/template/common/home.twig";
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
        return array (  178 => 88,  170 => 82,  156 => 74,  149 => 72,  142 => 68,  130 => 61,  124 => 57,  120 => 56,  103 => 42,  96 => 37,  84 => 31,  78 => 28,  73 => 26,  69 => 24,  65 => 23,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "esg-digital/template/common/home.twig", "");
    }
}
