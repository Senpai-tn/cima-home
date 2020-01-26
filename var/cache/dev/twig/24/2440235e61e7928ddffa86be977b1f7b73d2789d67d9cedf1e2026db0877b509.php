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

/* serie/index.html.twig */
class __TwigTemplate_1caea0ff40ec3111d0f5249973444335436820ba4e368480155516bce21cc22d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "serie/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "serie/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Cima@Home";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "        <center>
            <div class=\"alert alert-success\">
                ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        </center>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
    <div class=\"container\">

        <div class=\"row\">

            <div class=\"col-lg-3\">

                <h1 class=\"my-4\">Cima@Home</h1>
                <div class=\"list-group\">
                    <form action=\"/search\" method=\"post\">
                            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 24
            echo "                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" name=\"category\" type=\"radio\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\" >
                                    <label class=\"form-check-label\" for=\"defaultCheck1\">
                                        ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 27), "html", null, true);
            echo "
                                    </label>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                        Price :
                        <input type=\"range\" name=\"price\" min=\"0\" max=\"1000\" step=\"10\" value=\"0\" onchange=\"ShowPrice()\" id=\"priceVal\" >
                        <span id=\"price\"></span>
                        <input type=\"text\" class=\"form-control\" name=\"title\" placeholder=\"Title\">
                        <br>
                        <input type=\"submit\"  class=\"btn btn-info\" value=\"Search\">
                    </form>

                </div>

            </div>
            <!-- /.col-lg-3 -->

            <div class=\"col-lg-9\">

                <div id=\"carouselExampleIndicators\" class=\"carousel slide my-4\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                    </ol>
                    ";
        // line 52
        if (0 <= twig_compare(twig_length_filter($this->env, (isset($context["banner"]) || array_key_exists("banner", $context) ? $context["banner"] : (function () { throw new RuntimeError('Variable "banner" does not exist.', 52, $this->source); })())), 3)) {
            // line 53
            echo "                    <div class=\"carousel-inner\" role=\"listbox\">
                        <div class=\"carousel-item active\">
                            <img src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["banner"]) || array_key_exists("banner", $context) ? $context["banner"] : (function () { throw new RuntimeError('Variable "banner" does not exist.', 55, $this->source); })()), 0, [], "array", false, false, false, 55), "image", [], "any", false, false, false, 55), "html", null, true);
            echo "\" width=900px height=350px alt=\"First slide\">
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["banner"]) || array_key_exists("banner", $context) ? $context["banner"] : (function () { throw new RuntimeError('Variable "banner" does not exist.', 58, $this->source); })()), 1, [], "array", false, false, false, 58), "image", [], "any", false, false, false, 58), "html", null, true);
            echo "\" width=900px height=350px alt=\"Second slide\">
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["banner"]) || array_key_exists("banner", $context) ? $context["banner"] : (function () { throw new RuntimeError('Variable "banner" does not exist.', 61, $this->source); })()), 2, [], "array", false, false, false, 61), "image", [], "any", false, false, false, 61), "html", null, true);
            echo "\" width=900px height=350px alt=\"Third slide\">
                        </div>
                    </div>
                    ";
        }
        // line 65
        echo "                    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>
                <div class=\"navigation\">
                    ";
        // line 75
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["series"]) || array_key_exists("series", $context) ? $context["series"] : (function () { throw new RuntimeError('Variable "series" does not exist.', 75, $this->source); })()));
        echo "
                </div>
                <div class=\"row\">

                    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["series"]) || array_key_exists("series", $context) ? $context["series"] : (function () { throw new RuntimeError('Variable "series" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 80
            echo "                        <div class=\"col-lg-4 col-md-6 mb-4\">
                            <div class=\"card h-100\">
                                <a href=\"/";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 82), "html", null, true);
            echo "\"><img class=\"card-img-top\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "image", [], "any", false, false, false, 82), "html", null, true);
            echo "\" width=700px height=400px alt=\"\"></a>
                                <div class=\"card-body\">
                                    <h4 class=\"card-title\">
                                        <a href=\"/";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 85), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "title", [], "any", false, false, false, 85), "html", null, true);
            echo "</a>
                                    </h4>
                                    <h5>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "price", [], "any", false, false, false, 87), "html", null, true);
            echo " TND</h5>
                                    <p class=\"card-text\">";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "getCategory", [], "method", false, false, false, 88), "name", [], "any", false, false, false, 88), "html", null, true);
            echo "</p>
                                    <p class=\"card-text\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "description", [], "any", false, false, false, 89), "html", null, true);
            echo "</p>
                                </div>
                                <a href=\"/addcart/";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 91), "html", null, true);
            echo "\" class=\"btn btn-info\">
                                    <div class=\"card-footer\" >
                                        <stong class=\"text-white\">Add to cart</stong>
                                    </div>
                                </a>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "
                </div>
                <div class=\"navigation\">
                    ";
        // line 102
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["series"]) || array_key_exists("series", $context) ? $context["series"] : (function () { throw new RuntimeError('Variable "series" does not exist.', 102, $this->source); })()));
        echo "
                </div>

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>

    <script>
        function ShowPrice()
        {
            \$('#price').html(\$('#priceVal').val());
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "serie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 102,  247 => 99,  233 => 91,  228 => 89,  224 => 88,  220 => 87,  213 => 85,  204 => 82,  200 => 80,  196 => 79,  189 => 75,  177 => 65,  169 => 61,  162 => 58,  155 => 55,  151 => 53,  149 => 52,  126 => 31,  116 => 27,  111 => 25,  108 => 24,  104 => 23,  92 => 13,  82 => 9,  78 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cima@Home{% endblock %}

{% block body %}
    {% for message in app.flashes('success') %}
        <center>
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        </center>
    {% endfor %}

    <div class=\"container\">

        <div class=\"row\">

            <div class=\"col-lg-3\">

                <h1 class=\"my-4\">Cima@Home</h1>
                <div class=\"list-group\">
                    <form action=\"/search\" method=\"post\">
                            {% for c in categories %}
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" name=\"category\" type=\"radio\" value=\"{{ c.id }}\" >
                                    <label class=\"form-check-label\" for=\"defaultCheck1\">
                                        {{ c.name }}
                                    </label>
                                </div>
                            {% endfor %}
                        Price :
                        <input type=\"range\" name=\"price\" min=\"0\" max=\"1000\" step=\"10\" value=\"0\" onchange=\"ShowPrice()\" id=\"priceVal\" >
                        <span id=\"price\"></span>
                        <input type=\"text\" class=\"form-control\" name=\"title\" placeholder=\"Title\">
                        <br>
                        <input type=\"submit\"  class=\"btn btn-info\" value=\"Search\">
                    </form>

                </div>

            </div>
            <!-- /.col-lg-3 -->

            <div class=\"col-lg-9\">

                <div id=\"carouselExampleIndicators\" class=\"carousel slide my-4\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                    </ol>
                    {% if banner|length >=3 %}
                    <div class=\"carousel-inner\" role=\"listbox\">
                        <div class=\"carousel-item active\">
                            <img src=\"{{asset('assets/img/')}}{{banner[0].image}}\" width=900px height=350px alt=\"First slide\">
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"{{asset('assets/img/')}}{{banner[1].image}}\" width=900px height=350px alt=\"Second slide\">
                        </div>
                        <div class=\"carousel-item\">
                            <img src=\"{{asset('assets/img/')}}{{banner[2].image}}\" width=900px height=350px alt=\"Third slide\">
                        </div>
                    </div>
                    {% endif %}
                    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>
                <div class=\"navigation\">
                    {{ knp_pagination_render(series) }}
                </div>
                <div class=\"row\">

                    {% for s in series %}
                        <div class=\"col-lg-4 col-md-6 mb-4\">
                            <div class=\"card h-100\">
                                <a href=\"/{{s.id}}\"><img class=\"card-img-top\" src=\"{{asset('assets/img/')}}{{s.image}}\" width=700px height=400px alt=\"\"></a>
                                <div class=\"card-body\">
                                    <h4 class=\"card-title\">
                                        <a href=\"/{{s.id}}\">{{ s.title }}</a>
                                    </h4>
                                    <h5>{{s.price}} TND</h5>
                                    <p class=\"card-text\">{{s.getCategory().name}}</p>
                                    <p class=\"card-text\">{{s.description}}</p>
                                </div>
                                <a href=\"/addcart/{{s.id}}\" class=\"btn btn-info\">
                                    <div class=\"card-footer\" >
                                        <stong class=\"text-white\">Add to cart</stong>
                                    </div>
                                </a>
                            </div>
                        </div>
                    {% endfor %}

                </div>
                <div class=\"navigation\">
                    {{ knp_pagination_render(series) }}
                </div>

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>

    <script>
        function ShowPrice()
        {
            \$('#price').html(\$('#priceVal').val());
        }
    </script>
{% endblock %}
", "serie/index.html.twig", "C:\\wamp64\\www\\Cima@Home\\templates\\serie\\index.html.twig");
    }
}
