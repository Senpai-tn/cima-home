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

/* serie/update.html.twig */
class __TwigTemplate_56c2981d35dac12634e78bc78433214a1f3dfe47e1ec7b19b422fcbf74c938d9 extends Template
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
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "serie/update.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "serie/update.html.twig", 1);
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
        echo "    <section role=\"main\" class=\"content-body\">
        <div class=\"form-group\">
            <form action=\"/save/";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
        echo "\" method=\"post\">
                Title :<input type=\"text\" class=\"form-control\" name=\"title\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
                Price :<input type=\"text\" class=\"form-control\" name=\"price\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 7, $this->source); })()), "price", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
                Description :<input type=\"text\" class=\"form-control\" name=\"description\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 8, $this->source); })()), "description", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
                <input type=\"submit\" value=\"Save\" class=\"btn btn-success\">
            </form>
        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "serie/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 8,  71 => 7,  67 => 6,  63 => 5,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}
{% block body %}
    <section role=\"main\" class=\"content-body\">
        <div class=\"form-group\">
            <form action=\"/save/{{ serie.id }}\" method=\"post\">
                Title :<input type=\"text\" class=\"form-control\" name=\"title\" value=\"{{ serie.title }}\">
                Price :<input type=\"text\" class=\"form-control\" name=\"price\" value=\"{{ serie.price }}\">
                Description :<input type=\"text\" class=\"form-control\" name=\"description\" value=\"{{ serie.description }}\">
                <input type=\"submit\" value=\"Save\" class=\"btn btn-success\">
            </form>
        </div>
    </section>

{% endblock %}", "serie/update.html.twig", "C:\\wamp64\\www\\Cima@Home\\templates\\serie\\update.html.twig");
    }
}
