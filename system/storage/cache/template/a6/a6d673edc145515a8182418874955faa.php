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
class __TwigTemplate_462f98131281a6f8839f5ae9938e8d3f extends Template
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
\t\t\t\t\t";
            // line 31
            if (twig_get_attribute($this->env, $this->source, $context["service"], "sub_title", [], "any", false, false, false, 31)) {
                // line 32
                echo "                  <h4 class=\"service-title\">";
                echo twig_get_attribute($this->env, $this->source, $context["service"], "sub_title", [], "any", false, false, false, 32);
                echo "</h4>
\t\t\t\t  ";
            } else {
                // line 34
                echo "                  <h4 class=\"service-title\">&nbsp;</h4>
\t\t\t\t  ";
            }
            // line 36
            echo "\t\t\t\t  <p>";
            echo twig_get_attribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 36);
            echo "</p>
                </div>
              </a>
            </div>
          </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </div>
      </div>
    </section>
    <!-- Pricing section end -->

\t";
        // line 47
        echo ($context["content_bottom"] ?? null);
        echo "

";
        // line 92
        echo "
    <!-- Blog section end -->
  </main>
";
        // line 95
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
        return array (  126 => 95,  121 => 92,  116 => 47,  109 => 42,  96 => 36,  92 => 34,  86 => 32,  84 => 31,  78 => 28,  73 => 26,  69 => 24,  65 => 23,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "esg-digital/template/common/home.twig", "");
    }
}
