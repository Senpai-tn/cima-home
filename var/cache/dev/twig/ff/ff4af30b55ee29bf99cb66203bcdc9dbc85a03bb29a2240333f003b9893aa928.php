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

/* user/dashboard.html.twig */
class __TwigTemplate_7e7382367a591b2a3e50f8dd69fceaa6786dd65d454eeedc8350da3cef67bbb7 extends Template
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
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "user/dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Admin
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <section role=\"main\" class=\"content-body\">
    ";
        // line 8
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 9
            echo "        <div class=\"row\">
            <div class=\"col-md-6\">
                <section class=\"panel\">
                    <header class=\"panel-heading\">
                        <div class=\"panel-actions\">
                            <a href=\"#\" class=\"fa fa-caret-down\"></a>
                            <a href=\"#\" class=\"fa fa-times\"></a>
                        </div>

                        <h2 class=\"panel-title\">List of Series</h2>
                    </header>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table mb-none\">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Language</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["series"]) || array_key_exists("series", $context) ? $context["series"] : (function () { throw new RuntimeError('Variable "series" does not exist.', 35, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                echo "<tr>
                                    <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                                    <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "title", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
                                    <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "language", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
                                    <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "price", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                                    <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s"], "getCategory", [], "method", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                                    <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "getDescription", [], "method", false, false, false, 41), "html", null, true);
                echo "</td>
                                    <td class=\"actions\">

                                        <a href=\"/delete/";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 44), "html", null, true);
                echo "\" class=\"delete-row\"><i class=\"fa fa-trash-o\"></i></a>
                                        <a href=\"/update/";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 45), "html", null, true);
                echo "\" ><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/update.png"), "html", null, true);
                echo "\" width=\"15px\" title=\"update\"></a>
                                    </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "

                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            ";
            // line 57
            if (1 === twig_compare(twig_length_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 57, $this->source); })())), 0)) {
                // line 58
                echo "            <div class=\"col-md-6\">
                <section class=\"panel\">
                    <header class=\"panel-heading\">
                        <div class=\"panel-actions\">
                            <a href=\"#\" class=\"fa fa-caret-down\"></a>
                            <a href=\"#\" class=\"fa fa-times\"></a>
                        </div>

                        <h2 class=\"panel-title\">List of Users</h2>
                    </header>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table mb-none\">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Type</th>

                                </tr>
                                </thead>
                                <tbody>
                                ";
                // line 81
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 81, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["us"]) {
                    // line 82
                    echo "                                    <tr>
                                        <td>";
                    // line 83
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["us"], "id", [], "any", false, false, false, 83), "html", null, true);
                    echo "</td>
                                        <td>";
                    // line 84
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["us"], "username", [], "any", false, false, false, 84), "html", null, true);
                    echo "</td>
                                        <td>";
                    // line 85
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["us"], "email", [], "any", false, false, false, 85), "html", null, true);
                    echo "</td>
                                       

                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['us'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </section></div>
        </div>
        ";
            }
            // line 97
            echo "        ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 98
            echo "
                ";
        } else {
            // line 100
            echo "                    Anonymous
                ";
        }
        // line 102
        echo "    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 102,  236 => 100,  232 => 98,  229 => 97,  220 => 90,  209 => 85,  205 => 84,  201 => 83,  198 => 82,  194 => 81,  169 => 58,  167 => 57,  157 => 49,  145 => 45,  141 => 44,  135 => 41,  131 => 40,  127 => 39,  123 => 38,  119 => 37,  115 => 36,  109 => 35,  81 => 9,  79 => 8,  75 => 6,  68 => 5,  60 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}
{% block title %}
    Admin
{% endblock %}
{% block body %}

    <section role=\"main\" class=\"content-body\">
    {% if is_granted('ROLE_USER') %}
        <div class=\"row\">
            <div class=\"col-md-6\">
                <section class=\"panel\">
                    <header class=\"panel-heading\">
                        <div class=\"panel-actions\">
                            <a href=\"#\" class=\"fa fa-caret-down\"></a>
                            <a href=\"#\" class=\"fa fa-times\"></a>
                        </div>

                        <h2 class=\"panel-title\">List of Series</h2>
                    </header>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table mb-none\">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Language</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for s in series %}<tr>
                                    <td>{{ s.id }}</td>
                                    <td>{{ s.title }}</td>
                                    <td>{{ s.language }}</td>
                                    <td>{{ s.price }}</td>
                                    <td>{{ s.getCategory().name }}</td>
                                    <td>{{ s.getDescription() }}</td>
                                    <td class=\"actions\">

                                        <a href=\"/delete/{{ s.id }}\" class=\"delete-row\"><i class=\"fa fa-trash-o\"></i></a>
                                        <a href=\"/update/{{ s.id }}\" ><img src=\"{{ asset('assets/img/update.png') }}\" width=\"15px\" title=\"update\"></a>
                                    </td>
                                    </tr>
                                {% endfor %}


                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            {% if users|length > 0  %}
            <div class=\"col-md-6\">
                <section class=\"panel\">
                    <header class=\"panel-heading\">
                        <div class=\"panel-actions\">
                            <a href=\"#\" class=\"fa fa-caret-down\"></a>
                            <a href=\"#\" class=\"fa fa-times\"></a>
                        </div>

                        <h2 class=\"panel-title\">List of Users</h2>
                    </header>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table mb-none\">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Type</th>

                                </tr>
                                </thead>
                                <tbody>
                                {% for us in users %}
                                    <tr>
                                        <td>{{ us.id }}</td>
                                        <td>{{ us.username }}</td>
                                        <td>{{ us.email }}</td>
                                       

                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section></div>
        </div>
        {% endif %}
        {% elseif is_granted('ROLE_USER') %}

                {% else %}
                    Anonymous
                {% endif %}
    </section>
{% endblock %}", "user/dashboard.html.twig", "C:\\wamp64\\www\\Cima@Home\\templates\\user\\dashboard.html.twig");
    }
}
