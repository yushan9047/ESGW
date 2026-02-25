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

/* esg-digital/template/partial/d_layout_open.twig */
class __TwigTemplate_2e63335858908cc8c4413744bcfdb748 extends Template
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
        echo "<!-- > d_layout_open -->
<div class=\"container\" >
    ";
        // line 3
        $this->loadTemplate($this->extensions['Twig_Extension_DTwigManager']->templateFunction("partial/d_notification"), "esg-digital/template/partial/d_layout_open.twig", 3)->display($context);
        // line 4
        echo "    <div class=\"row\">
        ";
        // line 5
        echo ($context["column_left"] ?? null);
        echo "
        ";
        // line 6
        if (($context["column_left"] ?? null)) {
            // line 7
            echo "                ";
            if (($context["column_right"] ?? null)) {
                // line 8
                echo "                    <main id=\"content\" data-route=\"";
                echo ($context["page_route"] ?? null);
                echo "\" class=\"";
                echo ($context["class"] ?? null);
                echo " col-sm-6\">
                ";
            } else {
                // line 10
                echo "                    <main id=\"content\" data-route=\"";
                echo ($context["page_route"] ?? null);
                echo "\" class=\"";
                echo ($context["class"] ?? null);
                echo " col-sm-9\">
                ";
            }
            // line 12
            echo "        ";
        } else {
            // line 13
            echo "            ";
            if (($context["column_right"] ?? null)) {
                // line 14
                echo "                <main id=\"content\" data-route=\"";
                echo ($context["page_route"] ?? null);
                echo "\" class=\"";
                echo ($context["class"] ?? null);
                echo " col-sm-9\">
            ";
            } else {
                // line 16
                echo "                <main id=\"content\" data-route=\"";
                echo ($context["page_route"] ?? null);
                echo "\" class=\"";
                echo ($context["class"] ?? null);
                echo " col-sm-12\">
            ";
            }
            // line 18
            echo "        ";
        }
        // line 19
        echo "        ";
        echo ($context["content_top"] ?? null);
        echo "
<!-- /> d_layout_open -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "esg-digital/template/partial/d_layout_open.twig";
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
        return array (  96 => 19,  93 => 18,  85 => 16,  77 => 14,  74 => 13,  71 => 12,  63 => 10,  55 => 8,  52 => 7,  50 => 6,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "esg-digital/template/partial/d_layout_open.twig", "C:\\xampp\\htdocs\\catalog\\view\\theme\\esg-digital\\template\\partial\\d_layout_open.twig");
    }
}
