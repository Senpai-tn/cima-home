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

/* baseAdmin.html.twig */
class __TwigTemplate_2632d949c8148502fbd7faabe1a265a86d0cd34cdb1159244b4fb3c7f4072a67 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

        // line 1
        echo "<!doctype html>
<html class=\"fixed\">
<head>

    <!-- Basic -->
    <meta charset=\"UTF-8\">

    <title>

            ";
        // line 10
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            echo "Admin";
        } else {
            echo "Purchaser";
        }
        // line 11
        echo "
    </title>
    <meta name=\"keywords\" content=\"HTML5 Admin Template\" />
    <meta name=\"description\" content=\"Porto Admin - Responsive HTML5 Template\">
    <meta name=\"author\" content=\"okler.net\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/shop-homepage.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icons/admin.png"), "html", null, true);
        echo "\"/>
    <!-- Mobile Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />

    <!-- Web Fonts  -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Vendor CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/magnific-popup/magnific-popup.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/bootstrap-datepicker/css/datepicker3.css"), "html", null, true);
        echo "\" />

    <!-- Specific Page Vendor CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/morris/morris.css"), "html", null, true);
        echo "\" />

    <!-- Theme CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/stylesheets/theme.css"), "html", null, true);
        echo "\" />

    <!-- Skin CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/stylesheets/skins/default.css"), "html", null, true);
        echo "\" />

    <!-- Theme Custom CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/stylesheets/theme-custom.css"), "html", null, true);
        echo "\">
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js\"></script>
    <link href=\"https://cdn.materialdesignicons.com/1.8.36/css/materialdesignicons.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Head Libs -->
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/modernizr/modernizr.js"), "html", null, true);
        echo "\"></script>

</head>
<body>
<header class=\"header\">
    <div class=\"logo-container\">
        <a href=\"/\" class=\"logo\">
            Cima@Home
        </a>
        <div class=\"visible-xs toggle-sidebar-left\" data-toggle-class=\"sidebar-left-opened\" data-target=\"html\" data-fire-event=\"sidebar-left-opened\">
            <i class=\"fa fa-bars\" aria-label=\"Toggle sidebar\"></i>
        </div>
    </div>

    <!-- start: search & user box -->
    <div class=\"header-right\">

        <span class=\"separator\"></span>


        <div id=\"userbox\" class=\"userbox\">
            <a href=\"#\" data-toggle=\"dropdown\">

                <div class=\"profile-info\" data-lock-name=\"John Doe\" data-lock-email=\"johndoe@okler.com\">
                    
                    <span class=\"role\">";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "username", [], "any", false, false, false, 71), "html", null, true);
        echo " : ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            echo "Admin";
        } else {
            echo "Purchaser";
        }
        echo "</span>
                </div>
                <i class=\"fa custom-caret\"></i>
            </a>

            <div class=\"dropdown-menu\">
                <ul class=\"list-unstyled\">
                    <li class=\"divider\"></li>

                    <li>
                        <a role=\"menuitem\" tabindex=\"-1\" href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\"><i class=\"mdi mdi-account-edit mid-48px\"></i>Profile</a>
                    </li>
                    <li class=\"divider\"></li>

                    <li>
                        <a role=\"menuitem\" tabindex=\"-1\" href=\"/logout\"><i class=\"fa fa-power-off fa-spin \"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end: search & user box -->
</header>
<aside id=\"sidebar-left\" class=\"sidebar-left\">

    <div class=\"sidebar-header\">
        <div class=\"sidebar-title\">
            Navigation
        </div>
        <div class=\"sidebar-toggle hidden-xs\" data-toggle-class=\"sidebar-left-collapsed\" data-target=\"html\" data-fire-event=\"sidebar-left-toggle\">
            <i class=\"fa fa-bars\" aria-label=\"Toggle sidebar\"></i>
        </div>
    </div>

    <div class=\"nano has-scrollbar\">
        <div class=\"nano-content\" tabindex=\"0\" style=\"right: -14px;\">
            <nav id=\"menu\" class=\"nav-main\" role=\"navigation\">
                <ul class=\"nav nav-main\">
                    <li class=\"nav-active\">
                        <a href=\"";
        // line 110
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            echo "/admin ";
        } else {
            echo " /vendeur ";
        }
        echo "\">
                            <i class=\"fa fa-home\" aria-hidden=\"true\"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    ";
        // line 115
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 116
            echo "                        <li class=\"nav-active\">
                            <a href=\"";
            // line 117
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addCategoryForm");
            echo "\">
                                <i class=\"fa fa-home\" aria-hidden=\"true\"></i>
                                <span>Add Category</span>
                            </a>
                        </li>
                    ";
        } else {
            // line 123
            echo "                        <li class=\"nav-active\">
                            <a href=\"/newserie\">
                                <i class=\"fa fa-home\" aria-hidden=\"true\"></i>
                                <span>Add Serie</span>
                            </a>
                        </li>
                    ";
        }
        // line 130
        echo "
                </ul>
            </nav>

            <hr class=\"separator\">






        </div>

        <div class=\"nano-pane\" style=\"opacity: 1; visibility: visible;\"><div class=\"nano-slider\" style=\"height: 70px; transform: translate(0px, 0px);\"></div></div></div>

</aside>
";
        // line 146
        $this->displayBlock('body', $context, $blocks);
        // line 149
        echo "</body>
</html>


<!-- Vendor -->
<script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/nanoscroller/nanoscroller.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/magnific-popup/magnific-popup.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/jquery-placeholder/jquery.placeholder.js"), "html", null, true);
        echo "\"></script>

<!-- Specific Page Vendor -->
<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/jquery-appear/jquery.appear.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/jquery-easypiechart/jquery.easypiechart.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/flot-tooltip/jquery.flot.tooltip.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/flot/jquery.flot.categories.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/jquery-sparkline/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/raphael/raphael.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/morris/morris.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/gauge/gauge.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/snap-svg/snap.svg.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/liquid-meter/liquid.meter.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/jqvmap/jquery.vmap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/jqvmap/maps/jquery.vmap.world.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"), "html", null, true);
        echo "\"></script>

<!-- Theme Base, Components and Settings -->
<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/javascripts/theme.js"), "html", null, true);
        echo "\"></script>

<!-- Theme Custom -->
<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/javascripts/theme.custom.js"), "html", null, true);
        echo "\"></script>

<!-- Theme Initialization Files -->
<script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/javascripts/theme.init.js"), "html", null, true);
        echo "\"></script>



<!-- Examples -->
<script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Admin/assets/javascripts/dashboard/examples.dashboard.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 146
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 147
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "baseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 147,  432 => 146,  424 => 201,  416 => 196,  410 => 193,  404 => 190,  398 => 187,  394 => 186,  390 => 185,  386 => 184,  382 => 183,  378 => 182,  374 => 181,  370 => 180,  366 => 179,  362 => 178,  358 => 177,  354 => 176,  350 => 175,  346 => 174,  342 => 173,  338 => 172,  334 => 171,  330 => 170,  326 => 169,  322 => 168,  318 => 167,  314 => 166,  310 => 165,  306 => 164,  302 => 163,  296 => 160,  292 => 159,  288 => 158,  284 => 157,  280 => 156,  276 => 155,  272 => 154,  265 => 149,  263 => 146,  245 => 130,  236 => 123,  227 => 117,  224 => 116,  222 => 115,  210 => 110,  178 => 81,  159 => 71,  131 => 46,  124 => 42,  118 => 39,  112 => 36,  106 => 33,  102 => 32,  98 => 31,  92 => 28,  88 => 27,  84 => 26,  80 => 25,  69 => 17,  65 => 16,  58 => 11,  52 => 10,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=\"fixed\">
<head>

    <!-- Basic -->
    <meta charset=\"UTF-8\">

    <title>

            {% if is_granted('ROLE_ADMIN') %}Admin{% else %}Purchaser{% endif %}

    </title>
    <meta name=\"keywords\" content=\"HTML5 Admin Template\" />
    <meta name=\"description\" content=\"Porto Admin - Responsive HTML5 Template\">
    <meta name=\"author\" content=\"okler.net\">
    <link href=\"{{asset('assets/css/shop-homepage.css')}}\" rel=\"stylesheet\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{asset('assets/img/icons/admin.png') }}\"/>
    <!-- Mobile Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />

    <!-- Web Fonts  -->
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Vendor CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('Admin/assets/vendor/bootstrap/css/bootstrap.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('Admin/assets/vendor/font-awesome/css/font-awesome.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('Admin/assets/vendor/magnific-popup/magnific-popup.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('Admin/assets/vendor/bootstrap-datepicker/css/datepicker3.css') }}\" />

    <!-- Specific Page Vendor CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('Admin/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('Admin/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('Admin/assets/vendor/morris/morris.css') }}\" />

    <!-- Theme CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('Admin/assets/stylesheets/theme.css') }}\" />

    <!-- Skin CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('Admin/assets/stylesheets/skins/default.css') }}\" />

    <!-- Theme Custom CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('Admin/assets/stylesheets/theme-custom.css') }}\">
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js\"></script>
    <link href=\"https://cdn.materialdesignicons.com/1.8.36/css/materialdesignicons.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <!-- Head Libs -->
    <script src=\"{{ asset('Admin/assets/vendor/modernizr/modernizr.js') }}\"></script>

</head>
<body>
<header class=\"header\">
    <div class=\"logo-container\">
        <a href=\"/\" class=\"logo\">
            Cima@Home
        </a>
        <div class=\"visible-xs toggle-sidebar-left\" data-toggle-class=\"sidebar-left-opened\" data-target=\"html\" data-fire-event=\"sidebar-left-opened\">
            <i class=\"fa fa-bars\" aria-label=\"Toggle sidebar\"></i>
        </div>
    </div>

    <!-- start: search & user box -->
    <div class=\"header-right\">

        <span class=\"separator\"></span>


        <div id=\"userbox\" class=\"userbox\">
            <a href=\"#\" data-toggle=\"dropdown\">

                <div class=\"profile-info\" data-lock-name=\"John Doe\" data-lock-email=\"johndoe@okler.com\">
                    
                    <span class=\"role\">{{ app.user.username }} : {% if is_granted('ROLE_ADMIN') %}Admin{% else %}Purchaser{% endif %}</span>
                </div>
                <i class=\"fa custom-caret\"></i>
            </a>

            <div class=\"dropdown-menu\">
                <ul class=\"list-unstyled\">
                    <li class=\"divider\"></li>

                    <li>
                        <a role=\"menuitem\" tabindex=\"-1\" href=\"{{ path('profile') }}\"><i class=\"mdi mdi-account-edit mid-48px\"></i>Profile</a>
                    </li>
                    <li class=\"divider\"></li>

                    <li>
                        <a role=\"menuitem\" tabindex=\"-1\" href=\"/logout\"><i class=\"fa fa-power-off fa-spin \"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end: search & user box -->
</header>
<aside id=\"sidebar-left\" class=\"sidebar-left\">

    <div class=\"sidebar-header\">
        <div class=\"sidebar-title\">
            Navigation
        </div>
        <div class=\"sidebar-toggle hidden-xs\" data-toggle-class=\"sidebar-left-collapsed\" data-target=\"html\" data-fire-event=\"sidebar-left-toggle\">
            <i class=\"fa fa-bars\" aria-label=\"Toggle sidebar\"></i>
        </div>
    </div>

    <div class=\"nano has-scrollbar\">
        <div class=\"nano-content\" tabindex=\"0\" style=\"right: -14px;\">
            <nav id=\"menu\" class=\"nav-main\" role=\"navigation\">
                <ul class=\"nav nav-main\">
                    <li class=\"nav-active\">
                        <a href=\"{% if is_granted('ROLE_ADMIN') %}/admin {% else %} /vendeur {% endif %}\">
                            <i class=\"fa fa-home\" aria-hidden=\"true\"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"nav-active\">
                            <a href=\"{{ path('addCategoryForm') }}\">
                                <i class=\"fa fa-home\" aria-hidden=\"true\"></i>
                                <span>Add Category</span>
                            </a>
                        </li>
                    {% else %}
                        <li class=\"nav-active\">
                            <a href=\"/newserie\">
                                <i class=\"fa fa-home\" aria-hidden=\"true\"></i>
                                <span>Add Serie</span>
                            </a>
                        </li>
                    {% endif %}

                </ul>
            </nav>

            <hr class=\"separator\">






        </div>

        <div class=\"nano-pane\" style=\"opacity: 1; visibility: visible;\"><div class=\"nano-slider\" style=\"height: 70px; transform: translate(0px, 0px);\"></div></div></div>

</aside>
{%  block body %}

{% endblock %}
</body>
</html>


<!-- Vendor -->
<script src=\"{{ asset('Admin/assets/vendor/jquery/jquery.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/bootstrap/js/bootstrap.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/nanoscroller/nanoscroller.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/magnific-popup/magnific-popup.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/jquery-placeholder/jquery.placeholder.js') }}\"></script>

<!-- Specific Page Vendor -->
<script src=\"{{ asset('Admin/assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/jquery-appear/jquery.appear.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/jquery-easypiechart/jquery.easypiechart.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/flot/jquery.flot.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/flot-tooltip/jquery.flot.tooltip.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/flot/jquery.flot.pie.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/flot/jquery.flot.categories.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/flot/jquery.flot.resize.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/jquery-sparkline/jquery.sparkline.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/raphael/raphael.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/morris/morris.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/gauge/gauge.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/snap-svg/snap.svg.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/liquid-meter/liquid.meter.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/jqvmap/jquery.vmap.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/jqvmap/data/jquery.vmap.sampledata.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/jqvmap/maps/jquery.vmap.world.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js') }}\"></script>
<script src=\"{{ asset('Admin/assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js') }}\"></script>

<!-- Theme Base, Components and Settings -->
<script src=\"{{ asset('Admin/assets/javascripts/theme.js') }}\"></script>

<!-- Theme Custom -->
<script src=\"{{ asset('Admin/assets/javascripts/theme.custom.js') }}\"></script>

<!-- Theme Initialization Files -->
<script src=\"{{ asset('Admin/assets/javascripts/theme.init.js') }}\"></script>



<!-- Examples -->
<script src=\"{{ asset('Admin/assets/javascripts/dashboard/examples.dashboard.js') }}\"></script>", "baseAdmin.html.twig", "C:\\wamp64\\www\\Cima@Home\\templates\\baseAdmin.html.twig");
    }
}
