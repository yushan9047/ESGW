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
class __TwigTemplate_30e58cec5ff3ab2ff2664138242f4788 extends Template
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

\t\t<div class=\"row g-4\">
            <div class=\"col-xl-4 col-lg-4 col-md-6\">
              <div class=\"footer-widget footer-about\">
                <div class=\"contact-info\">
                  <!-- <h4 style=\"color: #fff;\">關於數位島 </h4> -->
\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t<img src=\"image/catalog/logo-white.png\" style=\"width: 70%;\" alt=\"logo2\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"short-info\">
\t\t\t\t\t\t<p>數位島永續科技股份有限公司成立於2023年，為客戶提供平台資料彙整及技術服務，致力於在政府、企業之間傳遞信任，保障客戶的品質與安全，推動合規與創新。</p>
\t\t\t\t\t</div>
                </div>
              </div>
            </div>
            <div class=\"col-xl-4 col-lg-4 col-md-6\">
              <div class=\"footer-widget footer-about\">
                <div class=\"contact-info\">
                  <h4 style=\"color: #fff;\">台北辦公室 </h4>
\t\t\t\t  <hr style=\"color: #fff;\"></hr>
\t\t\t\t  <ul class=\"list-unstyled\">
                    <li>
                      <div class=\"d-flex align-items-center gap-2\">
                        <div class=\"icon\">
                          <i class=\"fas fa-map-marker-alt\"></i>
                        </div>
                        <h6 class=\"title\" style=\"font-size: 18px;\">通訊地址: </h6>
                      </div>
                      <p>台北市松山區南京東路五段188號6樓之5</p>
                    </li>
                    <li>
                      <div class=\"d-flex align-items-center gap-2\">
                        <div class=\"icon\">
                          <i class=\"fas fa-phone\"></i>
                        </div>
                        <h4 class=\"title\" style=\"font-size: 18px;\">聯絡電話: </h4>
                      </div>
                      <p>02-27009079</p>
                    </li>
\t\t\t\t\t<li>
                      <div class=\"d-flex align-items-center gap-2\">
                        <div class=\"icon\">
                          <i class=\"fas fa-envelope\"></i>
                        </div>
                        <h4 class=\"title\" style=\"font-size: 18px;\">電子信箱: </h4>
                      </div>
                      <p>esgdigitalmind@esgdigitalmind.com</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class=\"col-xl-4 col-lg-4 col-md-6\">
              <div class=\"footer-widget footer-about\">
                <div class=\"contact-info\">
                  <h4 style=\"color: #fff;\">台南辦公室 </h4>
\t\t\t\t  <hr style=\"color: #fff;\"></hr>
\t\t\t\t  <ul class=\"list-unstyled\">
                    <li>
                      <div class=\"d-flex align-items-center gap-2\">
                        <div class=\"icon\">
                          <i class=\"fas fa-map-marker-alt\"></i>
                        </div>
                        <h4 class=\"title\" style=\"font-size: 18px;\">通訊地址: </h4>
                      </div>
                      <p>台南市中西區西門路一段701號9樓</p>
                    </li>
                    <li>
                      <div class=\"d-flex align-items-center gap-2\">
                        <div class=\"icon\">
                          <i class=\"fas fa-phone\"></i>
                        </div>
                        <h4 class=\"title\" style=\"font-size: 18px;\">聯絡電話: </h4>
                      </div>
                      <p>06-2219626</p>
                    </li>
\t\t\t\t\t<li>
                      <div class=\"d-flex align-items-center gap-2\">
                        <div class=\"icon\">
                          <i class=\"fas fa-envelope\"></i>
                        </div>
                        <h4 class=\"title\" style=\"font-size: 18px;\">電子信箱: </h4>
                      </div>
                      <p>esgdigitalmind@esgdigitalmind.com</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>


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


<!-- Mirrored from elegantpixelstheme.com/netwise/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Oct 2024 14:36:42 GMT -->
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
