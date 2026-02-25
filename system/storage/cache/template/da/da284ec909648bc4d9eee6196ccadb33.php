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

/* esg-digital/template/extension/d_blog_module/category.twig */
class __TwigTemplate_ddcffe31d076ed3df3c0802f99e211f8 extends Template
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
        $this->loadTemplate($this->extensions['Twig_Extension_DTwigManager']->templateFunction("partial/d_breadcrumb"), "esg-digital/template/extension/d_blog_module/category.twig", 5)->display($context);
        // line 6
        echo "    ";
        $this->loadTemplate($this->extensions['Twig_Extension_DTwigManager']->templateFunction("partial/d_layout_open"), "esg-digital/template/extension/d_blog_module/category.twig", 6)->display($context);
        // line 7
        echo "        <div class=\"bm\">
            <div class=\"bm-category-info clearfix\">
                ";
        // line 9
        if (($context["edit"] ?? null)) {
            echo "<div class=\"btn-group btn-group-xs pull-right\" ><a class=\"btn btn-default \" href=\"";
            echo ($context["edit"] ?? null);
            echo "\" target=\"_blank\"><i class=\"fa fa-pencil\"></i> ";
            echo ($context["text_edit"] ?? null);
            echo "</a></div>";
        }
        // line 10
        echo "                <h1 class=\"h1 title\">";
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                ";
        // line 11
        if ((($context["thumb"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "category", [], "any", false, false, false, 11), "image_display", [], "any", false, false, false, 11))) {
            // line 12
            echo "                <div class=\"image\"><img src=\"";
            echo ($context["thumb"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" class=\"img-responsive\" /></div>
                ";
        }
        // line 14
        echo "                ";
        if (($context["description"] ?? null)) {
            // line 15
            echo "                <div class=\"description\">";
            echo ($context["description"] ?? null);
            echo "</div>
                ";
        }
        // line 17
        echo "            </div>

            ";
        // line 19
        if (($context["categories"] ?? null)) {
            // line 20
            echo "            <div class=\"bm-categories\">
                <div class=\"h3\">";
            // line 21
            echo ($context["text_categories"] ?? null);
            echo "</div>

                <div class=\"row auto-clear\">
                    ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 25
                echo "                    <div class=\"col-sm-";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "col", [], "any", false, false, false, 25);
                echo " col-xs-4\">
                        <a class=\"item-cateogry\" href=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 26);
                echo "\">
                            ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "category", [], "any", false, false, false, 27), "sub_category_image", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "                                <div class=\"image\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 28);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 28);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 28);
                    echo "\" /></div>
                            ";
                }
                // line 30
                echo "                            <div class=\"title\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 30);
                echo "</div>
                        </a>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                </div>

            </div>
            ";
        }
        // line 38
        echo "            ";
        if (($context["posts"] ?? null)) {
            // line 39
            echo "                ";
            $this->loadTemplate($this->extensions['Twig_Extension_DTwigManager']->templateFunction(($context["layout_template"] ?? null)), "esg-digital/template/extension/d_blog_module/category.twig", 39)->display(twig_array_merge($context, ($context["posts"] ?? null)));
            // line 40
            echo "            ";
        }
        // line 41
        echo "
            ";
        // line 42
        if (( !($context["posts"] ?? null) && (($context["post_display_on_main"] ?? null) == false))) {
            // line 43
            echo "                <p class=\"bm-empty\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
                <div class=\"buttons\">
                    <div class=\"pull-right\">
                            ";
            // line 46
            $this->loadTemplate($this->extensions['Twig_Extension_DTwigManager']->templateFunction("partial/button"), "esg-digital/template/extension/d_blog_module/category.twig", 46)->display(twig_array_merge($context, ["button" => ["link" =>             // line 47
($context["continue"] ?? null), "style" => "primary", "text_button" =>             // line 49
($context["button_continue"] ?? null)]]));
            // line 51
            echo "                    </div>
                </div>
            ";
        }
        // line 54
        echo "        </div>
    ";
        // line 55
        $this->loadTemplate($this->extensions['Twig_Extension_DTwigManager']->templateFunction("/partial/d_layout_close"), "esg-digital/template/extension/d_blog_module/category.twig", 55)->display($context);
        // line 56
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "esg-digital/template/extension/d_blog_module/category.twig";
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
        return array (  182 => 56,  180 => 55,  177 => 54,  172 => 51,  170 => 49,  169 => 47,  168 => 46,  161 => 43,  159 => 42,  156 => 41,  153 => 40,  150 => 39,  147 => 38,  141 => 34,  130 => 30,  120 => 28,  118 => 27,  114 => 26,  109 => 25,  105 => 24,  99 => 21,  96 => 20,  94 => 19,  90 => 17,  84 => 15,  81 => 14,  71 => 12,  69 => 11,  64 => 10,  56 => 9,  52 => 7,  49 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "esg-digital/template/extension/d_blog_module/category.twig", "");
    }
}
