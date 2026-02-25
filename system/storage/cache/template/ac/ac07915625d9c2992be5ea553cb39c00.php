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

/* esg-digital/template/extension/d_blog_module/search.twig */
class __TwigTemplate_6aa8f20a5ce85cfd6bb87c00bf23e548 extends Template
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
    ";
        // line 3
        echo ($context["custom_style"] ?? null);
        echo "
</style>
";
        // line 5
        $this->loadTemplate($this->extensions['Twig_Extension_DTwigManager']->templateFunction("partial/d_breadcrumb"), "esg-digital/template/extension/d_blog_module/search.twig", 5)->display($context);
        // line 6
        echo "    ";
        $this->loadTemplate($this->extensions['Twig_Extension_DTwigManager']->templateFunction("partial/d_layout_open"), "esg-digital/template/extension/d_blog_module/search.twig", 6)->display($context);
        // line 7
        echo "        <div class=\"bm\">
            <div class=\"bm-search-info clearfix\">
                 <h1 class=\"h1 title\">";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            </div>
            ";
        // line 11
        if (($context["posts"] ?? null)) {
            // line 12
            echo "                ";
            $this->loadTemplate($this->extensions['Twig_Extension_DTwigManager']->templateFunction("extension/d_blog_module/layout_grid"), "esg-digital/template/extension/d_blog_module/search.twig", 12)->display(twig_array_merge($context, ($context["posts"] ?? null)));
            // line 13
            echo "            ";
        }
        // line 14
        echo "            ";
        if ( !($context["posts"] ?? null)) {
            // line 15
            echo "                <p class=\"bm-empty\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
                <div class=\"buttons\">
                    <div class=\"pull-right\">
                            ";
            // line 18
            $this->loadTemplate($this->extensions['Twig_Extension_DTwigManager']->templateFunction("partial/button"), "esg-digital/template/extension/d_blog_module/search.twig", 18)->display(twig_array_merge($context, ["button" => ["link" =>             // line 19
($context["continue"] ?? null), "style" => "primary", "text_button" =>             // line 21
($context["button_continue"] ?? null)]]));
            // line 23
            echo "                    </div>
                </div>
            ";
        }
        // line 26
        echo "        </div>
    ";
        // line 27
        $this->loadTemplate($this->extensions['Twig_Extension_DTwigManager']->templateFunction("partial/d_layout_close"), "esg-digital/template/extension/d_blog_module/search.twig", 27)->display($context);
        // line 28
        echo ($context["footer"] ?? null);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "esg-digital/template/extension/d_blog_module/search.twig";
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
        return array (  93 => 28,  91 => 27,  88 => 26,  83 => 23,  81 => 21,  80 => 19,  79 => 18,  72 => 15,  69 => 14,  66 => 13,  63 => 12,  61 => 11,  56 => 9,  52 => 7,  49 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "esg-digital/template/extension/d_blog_module/search.twig", "");
    }
}
