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

/* esg-digital/template/partial/d_layout_close.twig */
class __TwigTemplate_5b89619616ab5c3c972d1d15479908ec extends Template
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
        echo "<!-- > d_layout_close -->
    ";
        // line 2
        echo ($context["content_bottom"] ?? null);
        echo "</main>
";
        // line 3
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<!-- /> d_layout_close -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "esg-digital/template/partial/d_layout_close.twig";
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
        return array (  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "esg-digital/template/partial/d_layout_close.twig", "C:\\xampp\\htdocs\\catalog\\view\\theme\\esg-digital\\template\\partial\\d_layout_close.twig");
    }
}
