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

/* esg-digital/template/extension/d_blog_module/layout_grid.twig */
class __TwigTemplate_259ab20cf93b4b59826eefc7df68d112 extends Template
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
        echo "<div class=\"bm-posts\">
    <div class=\"bm-grid bm-grid\">
        <div class=\"row\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["post"], "row", [], "any", false, false, false, 5)) {
                // line 6
                echo "                        </div><div class=\"row\">
                    ";
            }
            // line 8
            echo "                    <div class=\"bm-grid-item col-sm-";
            echo twig_get_attribute($this->env, $this->source, $context["post"], "col", [], "any", false, false, false, 8);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["post"], "animate", [], "any", false, false, false, 8)) {
                echo "animate=\"";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "animate", [], "any", false, false, false, 8);
                echo "\"";
            }
            echo ">
                        <div class=\"bm-grid-item-body animated\">
                            ";
            // line 10
            $this->loadTemplate($this->extensions['Twig_Extension_DTwigManager']->templateFunction("extension/d_blog_module/post_thumb"), "esg-digital/template/extension/d_blog_module/layout_grid.twig", 10)->display(twig_array_merge($context, $context["post"]));
            // line 11
            echo "                        </div>
                    </div>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </div>
    </div>
    <div class=\"bm-pagination\">
        <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
        // line 18
        echo ($context["pagination"] ?? null);
        echo "</div>
            <div class=\"col-sm-6 text-right\">";
        // line 19
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
    </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "esg-digital/template/extension/d_blog_module/layout_grid.twig";
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
        return array (  106 => 19,  102 => 18,  96 => 14,  80 => 11,  78 => 10,  66 => 8,  62 => 6,  59 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "esg-digital/template/extension/d_blog_module/layout_grid.twig", "C:\\xampp\\htdocs\\catalog\\view\\theme\\esg-digital\\template\\extension\\d_blog_module\\layout_grid.twig");
    }
}
