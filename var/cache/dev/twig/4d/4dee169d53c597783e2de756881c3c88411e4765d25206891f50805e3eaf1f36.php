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

/* logged.html.twig */
class __TwigTemplate_c3c4093f87cb07580794329a990996e033ab955224773798fac8040697353e86 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logged.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "logged.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@9\"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src=\"https://cdn.jsdelivr.net/npm/promise-polyfill\"></script>
    <script>
        Swal.fire({
            title: 'You are logged in !',
            text: \"Are you sure to logout ?\",
            icon: 'error',
            showCancelButton: false,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#d33',
            confirmButtonText: '<a class=\"text-white\" href=\"/logout\">Logout</a> '
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "logged.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@9\"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src=\"https://cdn.jsdelivr.net/npm/promise-polyfill\"></script>
    <script>
        Swal.fire({
            title: 'You are logged in !',
            text: \"Are you sure to logout ?\",
            icon: 'error',
            showCancelButton: false,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#d33',
            confirmButtonText: '<a class=\"text-white\" href=\"/logout\">Logout</a> '
        })
    </script>
{% endblock %}", "logged.html.twig", "C:\\wamp64\\www\\Cima@Home\\templates\\logged.html.twig");
    }
}
