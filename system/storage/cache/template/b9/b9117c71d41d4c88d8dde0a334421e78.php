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

/* esg-digital/template/extension/d_blog_module/post_thumb.twig */
class __TwigTemplate_da15c227b775a0151e39d5c953653a26 extends Template
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
        echo "<article class=\"post-layout post-grid\">
    <div class=\"post-thumb\">
        <div class=\"image\">
            <a href=\"";
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "href", [], "any", false, false, false, 4);
        echo "\">
                ";
        // line 5
        if (($context["access_limit"] ?? null)) {
            // line 6
            echo "                <div style=\"position: absolute; width:100%; height:100%; background-image: url(http://ocinstallerlocal/302/d_blog_module/image/catalog/d_blog_module/lock.svg);  background-color: rgb(0, 0, 0, 0.45); background-repeat: no-repeat; background-position: center;\"></div>
                ";
        }
        // line 8
        echo "                <img src=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "thumb", [], "any", false, false, false, 8);
        echo "\" alt=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "image_alt", [], "any", false, false, false, 8);
        echo "\" title=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "image_title", [], "any", false, false, false, 8);
        echo "\" class=\"img-responsive\"/>
            </a>
        </div>
    
        <div class=\"post-thumb-heading\">            
            ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 13), "category_label_display", [], "any", false, false, false, 13)) {
            // line 14
            echo "                <ul class=\"category list-unstyled\">
                    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 16
                echo "                    <li><a class=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 16), "category_label", [], "any", false, false, false, 16);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 16);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 16);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                </ul>
            ";
        }
        // line 20
        echo "            <h3 class=\"title\"><a href=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "href", [], "any", false, false, false, 20);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 20);
        echo "</a></h3>
            <span class=\"title-divider\"></span>
        </div>
        <div class=\"post-thumb-body\">
            ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 24), "description_display", [], "any", false, false, false, 24)) {
            // line 25
            echo "                <div class=\"short-description\">";
            echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "short_description", [], "any", false, false, false, 25);
            echo "</div>
            ";
        }
        // line 27
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 27), "rating_display", [], "any", false, false, false, 27) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 27), "date_display", [], "any", false, false, false, 27))) {
            // line 28
            echo "            <div class=\"row\">
                <div class=\"";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 29), "rating_display", [], "any", false, false, false, 29) && twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "rating", [], "any", false, false, false, 29))) {
                echo "col-md-6";
            } else {
                echo "col-md-12";
            }
            echo "\">
                    ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 30), "author_display", [], "any", false, false, false, 30)) {
                // line 31
                echo "                    <span class=\"author\"><i class=\"fa fa-user\"></i> ";
                echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "author", [], "any", false, false, false, 31);
                echo "</span>
                    ";
            }
            // line 33
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 33), "date_display", [], "any", false, false, false, 33)) {
                // line 34
                echo "                    <span class=\"date-published\"><i class=\"fa fa-clock-o\"></i> ";
                echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "date_published", [], "any", false, false, false, 34);
                echo "</span>
                    ";
            }
            // line 36
            echo "                </div>
                ";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 37), "rating_display", [], "any", false, false, false, 37) && twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "rating", [], "any", false, false, false, 37))) {
                // line 38
                echo "                <div class=\"col-md-6\">
                    <div class=\"pull-right\">
                        ";
                // line 40
                $this->loadTemplate($this->extensions['Twig_Extension_DTwigManager']->templateFunction("partial/d_rating"), "esg-digital/template/extension/d_blog_module/post_thumb.twig", 40)->display(twig_array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "rating", [], "any", false, false, false, 40), "static_rating" => true]));
                // line 41
                echo "                    </div>
                </div>
                ";
            }
            // line 44
            echo "            </div>
            ";
        }
        // line 46
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 46), "tag_display", [], "any", false, false, false, 46) && twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "tags", [], "any", false, false, false, 46))) {
            // line 47
            echo "                <div class=\"tag\">
                    <span class=\"tag-title\">";
            // line 48
            echo ($context["text_tags"] ?? null);
            echo "</span>
                    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "tags", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 50
                echo "                        <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 50);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "text", [], "any", false, false, false, 50);
                echo "</a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                </div>
            ";
        }
        // line 54
        echo "        </div>
        <div class=\"post-thumb-footer clearfix\">
            ";
        // line 56
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 56), "review_display", [], "any", false, false, false, 56) && twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "review", [], "any", false, false, false, 56))) {
            echo "<a class=\"review\" href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "href", [], "any", false, false, false, 56);
            echo "\"><i class=\"fa fa-comment\"></i> ";
            echo ($context["text_review"] ?? null);
            echo " (";
            echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "review", [], "any", false, false, false, 56);
            echo ")</a>";
        }
        // line 57
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 57), "views_display", [], "any", false, false, false, 57) && twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "views", [], "any", false, false, false, 57))) {
            echo "<span class=\"view\"><i class=\"fa fa-eye\"></i> ";
            echo ($context["text_views"] ?? null);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "views", [], "any", false, false, false, 57);
            echo "</span>";
        }
        // line 58
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["setting"] ?? null), "post_thumb", [], "any", false, false, false, 58), "read_more_display", [], "any", false, false, false, 58)) {
            echo "<a href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "href", [], "any", false, false, false, 58);
            echo "\" class=\"read-more pull-right\">";
            echo ($context["text_read_more"] ?? null);
            echo "</a>";
        }
        // line 59
        echo "        </div>
    
    </div>
</article>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "esg-digital/template/extension/d_blog_module/post_thumb.twig";
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
        return array (  221 => 59,  212 => 58,  203 => 57,  193 => 56,  189 => 54,  185 => 52,  174 => 50,  170 => 49,  166 => 48,  163 => 47,  160 => 46,  156 => 44,  151 => 41,  149 => 40,  145 => 38,  143 => 37,  140 => 36,  134 => 34,  131 => 33,  125 => 31,  123 => 30,  115 => 29,  112 => 28,  109 => 27,  103 => 25,  101 => 24,  91 => 20,  87 => 18,  74 => 16,  70 => 15,  67 => 14,  65 => 13,  52 => 8,  48 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "esg-digital/template/extension/d_blog_module/post_thumb.twig", "C:\\xampp\\htdocs\\catalog\\view\\theme\\esg-digital\\template\\extension\\d_blog_module\\post_thumb.twig");
    }
}
