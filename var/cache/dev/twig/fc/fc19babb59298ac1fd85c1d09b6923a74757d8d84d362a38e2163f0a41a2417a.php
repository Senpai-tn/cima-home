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

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_988a1e93b85213d81900606c5a89395fc4e12941f653f81fdc37b23f9a19f14b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "<div class=\"limiter\">
    <div class=\"container-login100\">
        <div class=\"wrap-login100\">
            <div class=\"login100-pic js-tilt\" data-tilt>
                <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/img-01.png"), "html", null, true);
        echo "\" alt=\"IMG\">
            </div>


";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register"), "attr" => ["class" => "login100-form validate-form"]]);
        echo "
            <span class=\"login100-form-title\">
\t\t\t\t\t\tRegister
\t\t\t</span>
            <div class=\"wrap-input100 validate-input\" data-validate = \"Valid email is required: ex@abc.xyz\">
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Type the email"]]);
        echo "
                <span class=\"focus-input100\"></span>
                <span class=\"symbol-input100\">
                    <i class=\"fa fa-at\" aria-hidden=\"true\"></i>
                </span>
            </div>

            <div class=\"wrap-input100 validate-input\">
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "username", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Type your username"]]);
        echo "
                <span class=\"focus-input100\"></span>
                <span class=\"symbol-input100\">
                    <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                </span>
            </div>
            <div class=\"wrap-input100 validate-input\">
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "plainPassword", [], "any", false, false, false, 30), "first", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Type the password"]]);
        echo "
                <span class=\"focus-input100\"></span>
                <span class=\"symbol-input100\">
                        <i class=\"fa fa-key\" aria-hidden=\"true\"></i>
                    </span>
            </div>
            <div class=\"wrap-input100 validate-input\">
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "plainPassword", [], "any", false, false, false, 37), "second", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "input100", "placeholder" => "Confirm your password"]]);
        echo "
                <span class=\"focus-input100\"></span>
                <span class=\"symbol-input100\">
                            <i class=\"fa fa-key\" aria-hidden=\"true\"></i>
                        </span>
            </div>
<div>
    <input type=\"submit\" class=\"login100-form-btn\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" />
</div>
";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_end');
        echo "
            <div class=\"text-center p-t-136\">
                <a class=\"txt2\" href=\"/login\">
                    You're a member
                    <i class=\"fa fa-long-arrow-right m-l-5\" aria-hidden=\"true\"></i>
                </a>
            </div>
        </div>

    </div>


</div>






";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 46,  102 => 44,  92 => 37,  82 => 30,  72 => 23,  61 => 15,  53 => 10,  46 => 6,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}
<div class=\"limiter\">
    <div class=\"container-login100\">
        <div class=\"wrap-login100\">
            <div class=\"login100-pic js-tilt\" data-tilt>
                <img src=\"{{ asset('assets/img/img-01.png') }}\" alt=\"IMG\">
            </div>


{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'login100-form validate-form'}}) }}
            <span class=\"login100-form-title\">
\t\t\t\t\t\tRegister
\t\t\t</span>
            <div class=\"wrap-input100 validate-input\" data-validate = \"Valid email is required: ex@abc.xyz\">
                {{ form_widget(form.email,{'attr': {'class': 'input100','placeholder':'Type the email'}}) }}
                <span class=\"focus-input100\"></span>
                <span class=\"symbol-input100\">
                    <i class=\"fa fa-at\" aria-hidden=\"true\"></i>
                </span>
            </div>

            <div class=\"wrap-input100 validate-input\">
                {{ form_widget(form.username,{'attr': {'class': 'input100','placeholder':'Type your username'}}) }}
                <span class=\"focus-input100\"></span>
                <span class=\"symbol-input100\">
                    <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                </span>
            </div>
            <div class=\"wrap-input100 validate-input\">
                {{ form_widget(form.plainPassword.first,{'attr': {'class': 'input100','placeholder':'Type the password'}}) }}
                <span class=\"focus-input100\"></span>
                <span class=\"symbol-input100\">
                        <i class=\"fa fa-key\" aria-hidden=\"true\"></i>
                    </span>
            </div>
            <div class=\"wrap-input100 validate-input\">
                {{ form_widget(form.plainPassword.second,{'attr': {'class': 'input100','placeholder':'Confirm your password'}}) }}
                <span class=\"focus-input100\"></span>
                <span class=\"symbol-input100\">
                            <i class=\"fa fa-key\" aria-hidden=\"true\"></i>
                        </span>
            </div>
<div>
    <input type=\"submit\" class=\"login100-form-btn\" value=\"{{ 'registration.submit'|trans }}\" />
</div>
{{ form_end(form) }}
            <div class=\"text-center p-t-136\">
                <a class=\"txt2\" href=\"/login\">
                    You're a member
                    <i class=\"fa fa-long-arrow-right m-l-5\" aria-hidden=\"true\"></i>
                </a>
            </div>
        </div>

    </div>


</div>






", "FOSUserBundle:Registration:register_content.html.twig", "C:\\wamp64\\www\\Cima@Home\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register_content.html.twig");
    }
}
