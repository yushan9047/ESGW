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

/* esg-digital/template/common/header.twig */
class __TwigTemplate_e1d5315ff8e6ca482d3aa99fe0e00e6e extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <!-- Required meta tags -->
  <meta charset=\"UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <!-- title -->
  
\t<title>";
        // line 9
        echo ($context["title"] ?? null);
        echo "</title>
\t<base href=\"";
        // line 10
        echo ($context["base"] ?? null);
        echo "\" />
\t";
        // line 11
        if (($context["description"] ?? null)) {
            // line 12
            echo "\t<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
\t";
        }
        // line 14
        echo "\t";
        if (($context["keywords"] ?? null)) {
            // line 15
            echo "\t<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
\t";
        }
        // line 16
        echo " 
  
  <meta name=\"viewport\"
    content=\"width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0, user-scalable=yes\">
  <!-- Favicon -->
  <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"assets/img/fevicon.svg\">
  <!-- Place favicon.ico in the root directory -->

";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 25
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 25);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 25);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
  <!-- CSS start here -->
  <link rel=\"stylesheet\" href=\"catalog/view/theme/esg-digital/assets/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"catalog/view/theme/esg-digital/assets/fontawsome/css/fontawesome.css\">
  <link rel=\"stylesheet\" href=\"catalog/view/theme/esg-digital/assets/css/slick.css\">
  <link rel=\"stylesheet\" href=\"catalog/view/theme/esg-digital/assets/css/magnific-popup.css\">
  <link rel=\"stylesheet\" href=\"catalog/view/theme/esg-digital/assets/css/animate.min.css\">
  <link rel=\"stylesheet\" href=\"catalog/view/theme/esg-digital/assets/css/odometer.css\">
  <link rel=\"stylesheet\" href=\"catalog/view/theme/esg-digital/assets/css/style.css\">
  <!-- CSS end here -->
</head>

<body class=\"section-bg\">
  <!-- Header section start -->
  <header class=\"ep-header-section w-100\" id=\"sticky-header\">
    <nav class=\"navbar p-0 navbar-expand-xl d-none d-xl-flex\">
      <div class=\"container header-one-container\">
\t  ";
        // line 44
        if (($context["logo"] ?? null)) {
            // line 45
            echo "        <a class=\"navbar-brand\" href=\"";
            echo ($context["home"] ?? null);
            echo "\">
          <img src=\"";
            // line 46
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" style=\"height: 58px;\">
        </a>
\t\t";
        } else {
            // line 49
            echo "\t\t<a class=\"navbar-brand\" href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a>
\t\t";
        }
        // line 51
        echo "\t\t
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\"
          aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav mx-auto mb-lg-0\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"index.php\">首頁</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"index.php?route=information/about\">關於數位島</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"index.php?route=information/solution\">永續解方</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">
                平台登入 <i class=\"fas fa-chevron-down\"></i>
              </a>
              <ul class=\"sub-menu list-unstyled\">
\t\t\t  ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 73
            echo "\t\t\t  ";
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["service"], "url", [], "any", false, false, false, 73))) {
                // line 74
                echo "                <li><a href=\"#\" onclick=\"alert('平台尚未開放使用'); return false;\">";
                echo twig_get_attribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 74);
                echo "</a></li>
              ";
            } else {
                // line 76
                echo "\t\t\t\t<li><a target=\"_blank\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["service"], "url", [], "any", false, false, false, 76);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["service"], "sub_title", [], "any", false, false, false, 76);
                echo twig_get_attribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 76);
                echo "</a></li>
              ";
            }
            // line 77
            echo "  
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "  
\t\t\t  </ul>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"index.php?route=information/contact\">聯絡我們</a>
            </li>
          </ul>
          <div class=\"call-us\" style=\"display: none;\">
            <a href=\"tel:06-2219626\" class=\"call-us-btn d-flex align-items-center gap-3\">
              <span class=\"icon d-flex justify-content-center
               align-items-center\">
                <i class=\"fa-solid fa-phone\"></i>
              </span>
              <div class=\"info\">
                <span class=\"title\">需要協助嗎?</span>
                <h5 class=\"number\">06-2219626</h5>
              </div>
            </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- mobile navbar part start -->
    <div class=\"mobile-menu-area d-block d-xl-none\">
      <div class=\"container\">
        <div class=\"mobile-topbar\">
          <div class=\"d-flex justify-content-between align-items-center\">
            <div class=\"logo\">";
        // line 105
        if (($context["logo"] ?? null)) {
            // line 106
            echo "              <a href=\"";
            echo ($context["home"] ?? null);
            echo "\"> <img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" style=\"height: 58px;\"></a>
              ";
        } else {
            // line 108
            echo "\t\t\t  <a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a>
\t\t\t\t";
        }
        // line 110
        echo "\t\t\t</div>
            <div class=\"bars\">
              <i class=\"fas fa-bars\"></i>
            </div>
          </div>
        </div>
      </div>
      <div class=\"mobile-menu-overlay\"></div>
      <div class=\"mobile-menu-main\">
        <div class=\"logo\">
\t\t";
        // line 120
        if (($context["logo"] ?? null)) {
            // line 121
            echo "          <a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" style=\"height: 58px;\"></a>
\t\t  ";
        } else {
            // line 123
            echo "\t\t\t<a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a>
\t\t  ";
        }
        // line 125
        echo "        </div>
        <div class=\"close-mobile-menu\"><i class=\"fas fa-times\"></i></div>
        <div class=\"menu-body\">
          <div class=\"menu-list\">
            <ul class=\"list-unstyled\">
              <li class=\"sub-mobile-menu\"><a href=\"index.html\">首頁</a></li>
              <li class=\"sub-mobile-menu\"><a href=\"\">關於數位島</a></li>
              <li class=\"sub-mobile-menu\">
                <a href=\"#\">協作平台 <i class=\"fas fa-chevron-down float-end\"></i></a>
                <ul class=\"list-unstyled\">
                  <li><a href=\"service-detail.html\">ESG永續報告協作平台</a></li>
                  <li><a href=\"service-detail.html\">TCFD氣候相關財務揭露協作平台</a></li>
                  <li><a href=\"service-detail.html\">CDP碳揭露專案協作平台</a></li>
                  <li><a href=\"service-detail.html\">ISO 14064-1溫室氣體盤查協作平台</a></li>
                  <li><a href=\"service-detail.html\">GHG Protocol溫室氣體盤查協作平台</a></li>
                  <li><a href=\"service-detail.html\">工程碳足跡協作平台</a></li>
                  <li><a href=\"service-detail.html\">ISO 14067產品碳足跡協作平台</a></li>
                  <li><a href=\"service-detail.html\">EMS能源管理可視化平台</a></li>
                  <li><a href=\"service-detail.html\">減碳策略SBTi協作平台</a></li>
                  <li><a href=\"service-detail.html\">人權盡職管理輔導</a></li>
                </ul>
              </li>
              <li class=\"sub-mobile-menu\"><a href=\"contact.html\">聯絡我們</a></li>
            </ul>
          </div>
        </div>
        <div class=\"call-us p-4\">
          <a href=\"tel:06-2219626\" class=\"call-us-btn d-flex align-items-center gap-3\">
            <div class=\"info\">
              <span class=\"title\">台北辦公室：</span>
              <h5 class=\"number\" style=\"display: inline;\">02-27009079</h5>
            </div>
          </a>
\t\t  
\t\t  <a href=\"tel:06-2219626\" class=\"call-us-btn d-flex align-items-center gap-3\">
            <div class=\"info\">
              <span class=\"title\">台南辦公室：</span>
              <h5 class=\"number\" style=\"display: inline;\">06-2219626</h5>
            </div>
          </a>
\t\t  
        </div>
      </div>
    </div>
    <!-- mobile navbar part end -->
  </header>
  <!-- Header section end -->";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "esg-digital/template/common/header.twig";
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
        return array (  278 => 125,  270 => 123,  258 => 121,  256 => 120,  244 => 110,  236 => 108,  224 => 106,  222 => 105,  193 => 78,  186 => 77,  177 => 76,  171 => 74,  168 => 73,  164 => 72,  141 => 51,  133 => 49,  123 => 46,  118 => 45,  116 => 44,  97 => 27,  86 => 25,  82 => 24,  72 => 16,  66 => 15,  63 => 14,  57 => 12,  55 => 11,  51 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "esg-digital/template/common/header.twig", "");
    }
}
