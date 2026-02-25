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
class __TwigTemplate_00e92853f7c0716b23fba4151be75969 extends Template
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
                    <li><i class=\"fa-solid fa-location-dot\"></i>&nbsp;&nbsp;ADDR：<a href=\"#\">台北市松山區南京東路五段188號6樓之5</a></li>
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
                    <li><i class=\"fa-solid fa-location-dot\"></i>&nbsp;&nbsp;ADDR：<a href=\"#\">台南市中西區西門路一段701號9樓</a></li>
                  </ul>
                </div>
              </div>
            </div>

\t\t\t

          </div>
        </div>
        <div class=\"contact-form position-relative section-bg\">
          <h3 class=\"title text-center\">留言表單</h3>
          <form action=\"";
        // line 73
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"contact-form\">
            <div class=\"row g-4\">
              <div class=\"col-lg-6\">
                <div class=\"input-group\">
\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
        // line 77
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control form-field shadow-none\" />
\t\t\t\t\t";
        // line 78
        if (($context["error_name"] ?? null)) {
            // line 79
            echo "\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
\t\t\t\t\t";
        }
        // line 81
        echo "\t\t\t\t</div>
              </div>
              <div class=\"col-lg-6\">
                <div class=\"input-group\">
\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"";
        // line 85
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control form-field shadow-none\" />
\t\t\t\t\t";
        // line 86
        if (($context["error_email"] ?? null)) {
            // line 87
            echo "\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
\t\t\t\t\t";
        }
        // line 89
        echo "                </div>
              </div>
              <div class=\"col-lg-6\">
                <div class=\"input-group\">
                  <input type=\"text\" name=\"number\" required class=\"form-control form-field shadow-none\"
                    placeholder=\"您的聯絡電話\">
                </div>
              </div>
              <div class=\"col-lg-6\">
                <div class=\"input-group\">
                  <input type=\"text\" name=\"subject\" required class=\"form-control form-field shadow-none\"
                    placeholder=\"主旨\">
                </div>
              </div>
              <div class=\"col-lg-12\">
                <div class=\"input-group\">
\t\t\t\t\t<textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-field textarea-control\" placeholder=\"請在此填寫您的留言..\" required>";
        // line 105
        echo ($context["enquiry"] ?? null);
        echo "</textarea>
\t\t\t\t\t";
        // line 106
        if (($context["error_enquiry"] ?? null)) {
            // line 107
            echo "\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_enquiry"] ?? null);
            echo "</div>
\t\t\t\t\t";
        }
        // line 109
        echo "                </div>
              </div>
              <div class=\"col-lg-12\">
                <div class=\"text-center\">
                  <button type=\"submit\" class=\"theme-btn position-relative\">";
        // line 113
        echo ($context["button_submit"] ?? null);
        echo "</button>
\t\t\t\t  <!-- <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 114
        echo ($context["button_submit"] ?? null);
        echo "\" /> -->
                </div>
              </div>
            </div>
          </form>
          <p class=\"ajax-response mb-0\"></p>
        </div>
      </div>

    </section>
    <!-- Contact section end  -->
  </main>
  <!-- Main area end -->


";
        // line 129
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
        return array (  252 => 129,  234 => 114,  230 => 113,  224 => 109,  218 => 107,  216 => 106,  212 => 105,  194 => 89,  188 => 87,  186 => 86,  180 => 85,  174 => 81,  168 => 79,  166 => 78,  160 => 77,  153 => 73,  107 => 29,  92 => 27,  88 => 25,  86 => 24,  80 => 23,  77 => 22,  60 => 21,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "esg-digital/template/information/contact.twig", "");
    }
}
