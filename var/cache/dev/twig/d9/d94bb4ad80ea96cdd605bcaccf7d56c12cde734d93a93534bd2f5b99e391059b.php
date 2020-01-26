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

/* serie/show.html.twig */
class __TwigTemplate_ca68ab921babe3e121d4d76fc2e0a64bb0829dfd62b43999f5d8d0141594a6bb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "serie/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "serie/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 2, $this->source); })()), "title", [], "any", false, false, false, 2), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">

        <div class=\"row\">


            <!-- /.col-lg-3 -->

            <div class=\"col-lg-9\">

                <div class=\"card mt-4\">
                    <img class=\"card-img-top img-fluid\"  src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 14, $this->source); })()), "image", [], "any", false, false, false, 14), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</h3>
                        <h4>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 17, $this->source); })()), "price", [], "any", false, false, false, 17), "html", null, true);
        echo " TND</h4>
                        <p class=\"card-text\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 18, $this->source); })()), "description", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>
                    </div>
                    <a href=\"/addcart/";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
        echo "\" class=\"btn btn-info\">
                        <div class=\"card-footer\">
                            <stong class=\"text-muted\">Add to cart</stong>
                        </div>
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
        return "serie/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 20,  99 => 18,  95 => 17,  91 => 16,  85 => 14,  73 => 4,  66 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}{{serie.title}}{% endblock %}
{% block body %}
    <div class=\"container\">

        <div class=\"row\">


            <!-- /.col-lg-3 -->

            <div class=\"col-lg-9\">

                <div class=\"card mt-4\">
                    <img class=\"card-img-top img-fluid\"  src=\"{{asset('assets/img/')}}{{serie.image}}\" alt=\"\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title\">{{serie.title}}</h3>
                        <h4>{{serie.price}} TND</h4>
                        <p class=\"card-text\">{{serie.description}}</p>
                    </div>
                    <a href=\"/addcart/{{serie.id}}\" class=\"btn btn-info\">
                        <div class=\"card-footer\">
                            <stong class=\"text-muted\">Add to cart</stong>
                        </div>
                    </a>
                </div>




            </div>


        </div>

    </div>
{% endblock %}", "serie/show.html.twig", "C:\\wamp64\\www\\Cima@Home\\templates\\serie\\show.html.twig");
    }
}
