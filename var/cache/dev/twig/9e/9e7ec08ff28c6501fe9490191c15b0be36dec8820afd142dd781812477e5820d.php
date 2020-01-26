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

/* @KnpPaginator/Pagination/tailwindcss_pagination.html.twig */
class __TwigTemplate_c4a26d13144c3ae624fe14c584d65f7e9aed914ee3466c737a443c340a77fb8f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/tailwindcss_pagination.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (1 === twig_compare((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 3, $this->source); })()), 1)) {
            // line 4
            echo "    <div class=\"inline-block\">
        <div class=\"flex items-baseline flex-row border border-gray-400 rounded-sm w-auto\">
        ";
            // line 6
            if (((isset($context["first"]) || array_key_exists("first", $context)) && 0 !== twig_compare((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 6, $this->source); })()), (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 6, $this->source); })())))) {
                // line 7
                echo "            <span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-r border-gray-400 font-bold\">
                <a href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 8, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 8, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 8, $this->source); })()) => (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 8, $this->source); })())])), "html", null, true);
                echo "\">&lt;&lt;</a>
            </span>
        ";
            }
            // line 11
            echo "
        ";
            // line 12
            if ((isset($context["previous"]) || array_key_exists("previous", $context))) {
                // line 13
                echo "            <span class=\"bg-white text-blue-600 px-3 text-lg py-2 border-r border-gray-400\">
                <a rel=\"prev\" href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 14, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 14, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 14, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 14, $this->source); })())])), "html", null, true);
                echo "\">&lt;</a>
            </span>
        ";
            }
            // line 17
            echo "
        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 19
                echo "            ";
                if (0 !== twig_compare($context["page"], (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 19, $this->source); })()))) {
                    // line 20
                    echo "                <span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-r  border-gray-400\">
                    <a href=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 21, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 21, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 21, $this->source); })()) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </span>
            ";
                } else {
                    // line 24
                    echo "                <span class=\"bg-blue-600 text-white px-3 py-2 text-lg font-bold\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
            ";
                }
                // line 26
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
        ";
            // line 28
            if ((isset($context["next"]) || array_key_exists("next", $context))) {
                // line 29
                echo "            <span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-r border-gray-400\">
                <a rel=\"next\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 30, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 30, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 30, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 30, $this->source); })())])), "html", null, true);
                echo "\">&gt;</a>
            </span>
        ";
            }
            // line 33
            echo "
        ";
            // line 34
            if (((isset($context["last"]) || array_key_exists("last", $context)) && 0 !== twig_compare((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 34, $this->source); })()), (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 34, $this->source); })())))) {
                // line 35
                echo "            <span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-gray-400 font-bold\">
                <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 36, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 36, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 36, $this->source); })()) => (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 36, $this->source); })())])), "html", null, true);
                echo "\">&gt;&gt;</a>
            </span>
        ";
            }
            // line 39
            echo "        </div>
    </div>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/tailwindcss_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 39,  129 => 36,  126 => 35,  124 => 34,  121 => 33,  115 => 30,  112 => 29,  110 => 28,  107 => 27,  101 => 26,  95 => 24,  87 => 21,  84 => 20,  81 => 19,  77 => 18,  74 => 17,  68 => 14,  65 => 13,  63 => 12,  60 => 11,  54 => 8,  51 => 7,  49 => 6,  45 => 4,  43 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# tailwindcss Sliding pagination control implementation #}

{% if pageCount > 1 %}
    <div class=\"inline-block\">
        <div class=\"flex items-baseline flex-row border border-gray-400 rounded-sm w-auto\">
        {% if first is defined and current != first %}
            <span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-r border-gray-400 font-bold\">
                <a href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">&lt;&lt;</a>
            </span>
        {% endif %}

        {% if previous is defined %}
            <span class=\"bg-white text-blue-600 px-3 text-lg py-2 border-r border-gray-400\">
                <a rel=\"prev\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">&lt;</a>
            </span>
        {% endif %}

        {% for page in pagesInRange %}
            {% if page != current %}
                <span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-r  border-gray-400\">
                    <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                </span>
            {% else %}
                <span class=\"bg-blue-600 text-white px-3 py-2 text-lg font-bold\">{{ page }}</span>
            {% endif %}
        {% endfor %}

        {% if next is defined %}
            <span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-r border-gray-400\">
                <a rel=\"next\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">&gt;</a>
            </span>
        {% endif %}

        {% if last is defined and current != last %}
            <span class=\"bg-white text-blue-600 px-3 py-2 text-lg border-gray-400 font-bold\">
                <a href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">&gt;&gt;</a>
            </span>
        {% endif %}
        </div>
    </div>
{% endif %}
", "@KnpPaginator/Pagination/tailwindcss_pagination.html.twig", "C:\\wamp64\\www\\Cima@Home\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\tailwindcss_pagination.html.twig");
    }
}
