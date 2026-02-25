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

/* esg-digital/template/information/contact.twig */
class __TwigTemplate_8d08d8afcbf0ece1831ad0647b5ed752 extends Template
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
          <div class=\"col-sm-6 ms-auto\">
            <div class=\"bread-crumb text-end\">
              <h1 class=\"page-title\">聯絡我們</h1>
\t\t\t  
\t\t\t\t<ul class=\"list-unstyled d-flex flex-wrap align-items-center justify-content-end mt-30\">
\t\t\t\t  ";
        // line 21
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
            // line 22
            echo "\t\t\t\t\t<li>
\t\t\t\t\t  <a href=\"";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 23);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 23);
            echo "</a>
\t\t\t\t\t  ";
            // line 24
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 24)) {
                // line 25
                echo "\t\t\t\t\t\t<i class=\"fa-solid fa-chevron-right mx-1\"></i>
\t\t\t\t\t  ";
            }
            // line 27
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
        // line 29
        echo "\t\t\t\t</ul>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Page header section end -->
    <!-- Contact section start  -->
    <section class=\"ep-contact-section pt-120\">
      <div class=\"container\">
        <div class=\"contact-information\">
          <div class=\"row\">
            
\t\t\t<div class=\"col-lg-6 col-xl-6\">
              <div class=\"info-item d-flex align-items-center rounded-20 gap-4\">
                <div class=\"text\">
                  <h4 class=\"title\">台北辦公室</h4>
                  <ul class=\"list-unstyled\">
                    <li><i class=\"fa-solid fa-phone\"></i>&nbsp;&nbsp;TEL：<a href=\"tel:02-27009079\">02-27009079</a></li>
                    <li><i class=\"fa-solid fa-location-dot\"></i>&nbsp;&nbsp;ADDR：<a>台北市松山區南京東路五段188號6樓之5</a></li>
                  </ul>
                </div>
              </div>
            </div>
\t\t\t
\t\t\t<div class=\"col-lg-6 col-xl-6\">
              <div class=\"info-item d-flex align-items-center rounded-20 gap-4\">
                <div class=\"text\">
                  <h4 class=\"title\">台南辦公室</h4>
                  <ul class=\"list-unstyled\">
                    <li><i class=\"fa-solid fa-phone\"></i>&nbsp;&nbsp;TEL：<a href=\"tel:06-2219626\">06-2219626</a></li>
                    <li><i class=\"fa-solid fa-location-dot\"></i>&nbsp;&nbsp;ADDR：<a>台南市中西區西門路一段701號9樓</a></li>
                  </ul>
                </div>
              </div>
            </div>

\t\t\t

          </div>
        </div>
 ";
        // line 124
        echo "
    </section>
    <!-- Contact section end  -->
  </main>
  <!-- Main area end -->


";
        // line 131
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "esg-digital/template/information/contact.twig";
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
        return array (  160 => 131,  151 => 124,  107 => 29,  92 => 27,  88 => 25,  86 => 24,  80 => 23,  77 => 22,  60 => 21,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "esg-digital/template/information/contact.twig", "");
    }
}
