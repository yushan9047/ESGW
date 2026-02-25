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

/* esg-digital/template/partial/button.twig */
class __TwigTemplate_c44bf86fdf2eb8f68b0b3ad3ceaa01b2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'button_content' => [$this, 'block_button_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["btn_classes"] = "btn";
        // line 2
        echo "
";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "classes", [], "any", false, false, false, 3)) {
            // line 4
            echo "    ";
            $context["btn_classes"] = ((($context["btn_classes"] ?? null) . " ") . twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "classes", [], "any", false, false, false, 4));
        }
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "style", [], "any", false, false, false, 6)) {
            // line 7
            echo "    ";
            $context["btn_classes"] = ((($context["btn_classes"] ?? null) . " btn-") . twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "style", [], "any", false, false, false, 7));
        }
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "ghost", [], "any", false, false, false, 9)) {
            // line 10
            echo "    ";
            $context["btn_classes"] = (($context["btn_classes"] ?? null) . " btn-ghost");
        }
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "size", [], "any", false, false, false, 12)) {
            // line 13
            echo "    ";
            $context["btn_classes"] = ((($context["btn_classes"] ?? null) . " btn-") . twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "size", [], "any", false, false, false, 13));
        }
        // line 15
        if (($context["data_loading"] ?? null)) {
            // line 16
            echo "    ";
            $context["button"] = twig_array_merge(($context["button"] ?? null), ["text_button" => ($context["data_loading"] ?? null)]);
        }
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "icon", [], "any", false, false, false, 18)) {
            // line 19
            echo "    ";
            $context["button"] = twig_array_merge(($context["button"] ?? null), ["text_button" => (("<i class=\"" . twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "icon", [], "any", false, false, false, 19)) . "\"></i>")]);
        }
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "link", [], "any", false, false, false, 21)) {
            // line 22
            echo "    ";
            $context["button"] = twig_array_merge(($context["button"] ?? null), ["tag" => "a", "type" => false]);
        }
        // line 24
        if ( !twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "type", [], "any", true, true, false, 24)) {
            // line 25
            echo "    ";
            $context["button"] = twig_array_merge(($context["button"] ?? null), ["type" => "button"]);
        }
        // line 27
        if ( !array_key_exists("button", $context)) {
            // line 28
            echo "    please make sure you use this component right.
    use next punctuation
    {button:{
        id:'id',
        style:'primary',
        link: 'extension/aa',
        // or if  if just click
        onclick : 'cart.add(41)'
    }
";
        }
        // line 38
        echo "
<";
        // line 39
        echo ((twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "tag", [], "any", true, true, false, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "tag", [], "any", false, false, false, 39), "button")) : ("button"));
        echo "
class=\"";
        // line 40
        echo ($context["btn_classes"] ?? null);
        echo "\"
";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "id", [], "any", false, false, false, 41)) {
            echo "id='";
            echo twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "id", [], "any", false, false, false, 41);
            echo "'";
        }
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "onclick", [], "any", false, false, false, 42)) {
            echo "onclick=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "onclick", [], "any", false, false, false, 42);
            echo "\"";
        }
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "link", [], "any", false, false, false, 43)) {
            echo "href=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "link", [], "any", false, false, false, 43);
            echo "\"";
        }
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "type", [], "any", false, false, false, 44)) {
            echo " type='";
            echo twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "type", [], "any", false, false, false, 44);
            echo "'";
        }
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "title_button", [], "any", false, false, false, 45)) {
            echo "title=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "title_button", [], "any", false, false, false, 45);
            echo "\"";
        }
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "text_loading", [], "any", false, false, false, 46)) {
            echo "data-loading-text=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "text_loading", [], "any", false, false, false, 46);
            echo "\"";
        }
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "atributest", [], "any", false, false, false, 47)) {
            echo twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "atributest", [], "any", false, false, false, 47);
        }
        echo ">
";
        // line 48
        $this->displayBlock('button_content', $context, $blocks);
        // line 51
        echo "</";
        echo ((twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "tag", [], "any", true, true, false, 51)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "tag", [], "any", false, false, false, 51), "button")) : ("button"));
        echo ">

";
    }

    // line 48
    public function block_button_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "text_button", [], "any", false, false, false, 49);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "esg-digital/template/partial/button.twig";
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
        return array (  172 => 49,  168 => 48,  160 => 51,  158 => 48,  152 => 47,  146 => 46,  140 => 45,  134 => 44,  128 => 43,  122 => 42,  116 => 41,  112 => 40,  108 => 39,  105 => 38,  93 => 28,  91 => 27,  87 => 25,  85 => 24,  81 => 22,  79 => 21,  75 => 19,  73 => 18,  69 => 16,  67 => 15,  63 => 13,  61 => 12,  57 => 10,  55 => 9,  51 => 7,  49 => 6,  45 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "esg-digital/template/partial/button.twig", "C:\\xampp\\htdocs\\catalog\\view\\theme\\esg-digital\\template\\partial\\button.twig");
    }
}
