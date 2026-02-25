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

/* esg-digital/template/common/footer.twig */
class __TwigTemplate_4f3ab57aa293e4867b41eb786474cfc3 extends Template
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
        echo "  <!-- Back to top button start -->
  <button class=\"scroll-to-top position-fixed\">
    <i class=\"fas fa-chevron-up\"></i>
  </button>
  <!-- Back to top button end -->
  <!-- Footer section start -->
  <footer class=\"ep-footer-section pt-120\">
    <div class=\"footer-bg\" data-background=\"catalog/view/theme/esg-digital/assets/img/bg/footer-bg-1.svg\">
      <div class=\"container\">

        <div class=\"footer-main\">




          <div class=\"footer-bottom\">
            <div class=\"row g-2\">
              <div class=\"col-lg-6\">
                <div class=\"footer-copyright text-center text-lg-start\">
                  <p>© 數位島永續科技股份有限公司 2024 | All Rights Reserved</p>
                </div>
              </div>
              <div class=\"col-lg-6\">
                <div class=\"footer-menu text-center text-lg-end\">
                  <ul class=\"list-unstyled\">
                    <li class=\"d-inline-block\"><a href=\"index.php?route=information/contact\">聯絡我們</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer section end -->

  <!-- JS start here -->
  <script src=\"catalog/view/theme/esg-digital/assets/js/vendor/jquery-3.6.0.min.js\"></script>
  <script src=\"catalog/view/theme/esg-digital/assets/js/bootstrap.bundle.min.js\"></script>
  <script src=\"catalog/view/theme/esg-digital/assets/js/gsap.js\"></script>
  <script src=\"catalog/view/theme/esg-digital/assets/js/gsap-scroll-trigger.js\"></script>
  <script src=\"catalog/view/theme/esg-digital/assets/js/gsap-split-text.js\"></script>
  <script src=\"catalog/view/theme/esg-digital/assets/js/jquery.appear.js\"></script>
  <script src=\"catalog/view/theme/esg-digital/assets/js/jquery.odometer.min.js\"></script>
  <script src=\"catalog/view/theme/esg-digital/assets/js/jquery.magnific-popup.min.js\"></script>
  <script src=\"catalog/view/theme/esg-digital/assets/js/ajax-form.js\"></script>
  <script src=\"catalog/view/theme/esg-digital/assets/js/slick.min.js\"></script>
  <script src=\"catalog/view/theme/esg-digital/assets/js/script.js\"></script>
  <!-- JS end here -->
</body>


</html>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "esg-digital/template/common/footer.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "esg-digital/template/common/footer.twig", "");
    }
}
