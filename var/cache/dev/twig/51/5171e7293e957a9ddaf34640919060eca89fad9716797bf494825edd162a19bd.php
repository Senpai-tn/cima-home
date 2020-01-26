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

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_1715e26b7f54f16af9598c0c0fc90b9432cfb89b8311a5b779ad6f3cae7bb1d8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@FOSUser/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent = $this->loadTemplate("@FOSUser/base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
   ";
        // line 6
        echo "
";
        // line 7
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), "messageKey", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), "messageData", [], "any", false, false, false, 8), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 10
        echo "

    <div class=\"limiter\">
        <div class=\"container-login100\">
            <div class=\"wrap-login100\">
                <div class=\"login100-pic js-tilt\" data-tilt>
                    <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/img-01.png"), "html", null, true);
        echo "\" alt=\"IMG\">
                </div>

                <form class=\"login100-form validate-form\" action=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">

                    ";
        // line 21
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "\" />
                    ";
        }
        // line 24
        echo "\t\t\t\t\t<span class=\"login100-form-title\">
\t\t\t\t\t\tMember Login
\t\t\t\t\t</span>

                    <div class=\"wrap-input100 validate-input\" data-validate = \"Valid email is required: ex@abc.xyz\">
                        <input class=\"input100\" id=\"username\" name=\"_username\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\" required=\"required\" autocomplete=\"username\" >
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate = \"Password is required\">
                        <input type=\"password\" class=\"input100\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
                    </div>

                    <div class=\"container-login100-form-btn\">
                        <button class=\"login100-form-btn\">
                            Login
                        </button>
                    </div>

                    <div class=\"text-center p-t-12\">
\t\t\t\t\t\t<span class=\"txt1\">
\t\t\t\t\t\t\tForgot
\t\t\t\t\t\t</span>
                        <a class=\"txt2\" href=\"#\">
                            Username / Password?
                        </a>
                    </div>

                    <div class=\"text-center p-t-136\">
                        <a class=\"txt2\" href=\"/register\">
                            Create your Account
                            <i class=\"fa fa-long-arrow-right m-l-5\" aria-hidden=\"true\"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!--===============================================================================================-->\t
\t<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/popper.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
<!--===============================================================================================-->
\t<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tilt/tilt.jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script >
\t\t\$('.js-tilt').tilt({
\t\t\tscale: 1.1
\t\t})
\t</script>
<!--===============================================================================================-->
\t<script src=\"js/main.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 78,  166 => 76,  161 => 74,  157 => 73,  152 => 71,  107 => 29,  100 => 24,  94 => 22,  92 => 21,  87 => 19,  81 => 16,  73 => 10,  67 => 8,  65 => 7,  62 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@FOSUser/base.html.twig\" %}

{% block body %}

   {% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}


    <div class=\"limiter\">
        <div class=\"container-login100\">
            <div class=\"wrap-login100\">
                <div class=\"login100-pic js-tilt\" data-tilt>
                    <img src=\"{{ asset('assets/img/img-01.png') }}\" alt=\"IMG\">
                </div>

                <form class=\"login100-form validate-form\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">

                    {% if csrf_token %}
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                    {% endif %}
\t\t\t\t\t<span class=\"login100-form-title\">
\t\t\t\t\t\tMember Login
\t\t\t\t\t</span>

                    <div class=\"wrap-input100 validate-input\" data-validate = \"Valid email is required: ex@abc.xyz\">
                        <input class=\"input100\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" autocomplete=\"username\" >
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate = \"Password is required\">
                        <input type=\"password\" class=\"input100\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
\t\t\t\t\t\t\t<i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</span>
                    </div>

                    <div class=\"container-login100-form-btn\">
                        <button class=\"login100-form-btn\">
                            Login
                        </button>
                    </div>

                    <div class=\"text-center p-t-12\">
\t\t\t\t\t\t<span class=\"txt1\">
\t\t\t\t\t\t\tForgot
\t\t\t\t\t\t</span>
                        <a class=\"txt2\" href=\"#\">
                            Username / Password?
                        </a>
                    </div>

                    <div class=\"text-center p-t-136\">
                        <a class=\"txt2\" href=\"/register\">
                            Create your Account
                            <i class=\"fa fa-long-arrow-right m-l-5\" aria-hidden=\"true\"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!--===============================================================================================-->\t
\t<script src=\"{{ asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}\"></script>
<!--===============================================================================================-->
\t<script src=\"{{ asset('assets/vendor/bootstrap/js/popper.js') }}\"></script>
\t<script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}\"></script>
<!--===============================================================================================-->
\t<script src=\"{{ asset('assets/vendor/select2/select2.min.js') }}\"></script>
<!--===============================================================================================-->
\t<script src=\"{{ asset('assets/vendor/tilt/tilt.jquery.min.js') }}\"></script>
\t<script >
\t\t\$('.js-tilt').tilt({
\t\t\tscale: 1.1
\t\t})
\t</script>
<!--===============================================================================================-->
\t<script src=\"js/main.js\"></script>
{% endblock %}




", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\Cima@Home\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
