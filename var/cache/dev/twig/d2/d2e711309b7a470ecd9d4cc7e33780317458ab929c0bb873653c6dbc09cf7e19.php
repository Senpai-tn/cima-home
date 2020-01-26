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

/* user/dashboardAdmin.html.twig */
class __TwigTemplate_a69c17483ee1107906bfb1b69b8aa3c19ef362d4ce2b5d8c4ff04627d3636132 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/dashboardAdmin.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "user/dashboardAdmin.html.twig", 1);
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
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\" ></script>
    <section role=\"main\" class=\"content-body\">
        ";
        // line 6
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 7
            echo "            <div class=\"row\">
            <div class=\"col-md-6\">
                <section class=\"panel\">
                    <header class=\"panel-heading\">
                        <div class=\"panel-actions\">
                            <a href=\"#\" class=\"fa fa-caret-down\"></a>
                            <a href=\"#\" class=\"fa fa-times\"></a>
                        </div>

                        <h2 class=\"panel-title\">List of Categories</h2>
                    </header>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table mb-none\">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>

                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                echo "<tr>
                                    <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
                                    <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>

                                    <td class=\"actions\">

                                        <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteCategory", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\" class=\"delete-row\"><i class=\"fa fa-trash-o\"></i></a>
                                        <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateCategoryForm", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                echo "\" ><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/update.png"), "html", null, true);
                echo "\" width=\"15px\" title=\"update\"></a>

                                    </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "

                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
            ";
            // line 50
            if (1 === twig_compare(twig_length_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 50, $this->source); })())), 0)) {
                // line 51
                echo "                <div class=\"col-md-6\">
                    <section class=\"panel\">
                        <header class=\"panel-heading\">
                            <div class=\"panel-actions\">
                                <a href=\"#\" class=\"fa fa-caret-down\"></a>
                                <a href=\"#\" class=\"fa fa-times\"></a>
                            </div>

                            <h2 class=\"panel-title\">List of Purchasers</h2>
                        </header>
                        <div class=\"panel-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table mb-none\">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>

                                        <th>Actions</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 75, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["us"]) {
                    // line 76
                    echo "                                        <tr>
                                            <td>";
                    // line 77
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["us"], "id", [], "any", false, false, false, 77), "html", null, true);
                    echo "</td>
                                            <td ";
                    // line 78
                    if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["us"], "enabled", [], "any", false, false, false, 78), 1)) {
                        echo " style=\"text-decoration: line-through;\" ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["us"], "username", [], "any", false, false, false, 78), "html", null, true);
                    echo "</td>
                                            <td ";
                    // line 79
                    if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["us"], "enabled", [], "any", false, false, false, 79), 1)) {
                        echo " style=\"text-decoration: line-through;\" ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["us"], "email", [], "any", false, false, false, 79), "html", null, true);
                    echo "</td>
                                            <td>
                                                <a href=\"/deleteUser/";
                    // line 81
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["us"], "id", [], "any", false, false, false, 81), "html", null, true);
                    echo "\" class=\"delete-row\"><i class=\"fa fa-trash-o\"></i></a>
                                            </td>
                                            <td>
                                                ";
                    // line 84
                    if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["us"], "enabled", [], "any", false, false, false, 84), 1)) {
                        // line 85
                        echo "                                                    <a href=\"/enable/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["us"], "id", [], "any", false, false, false, 85), "html", null, true);
                        echo "\" class=\"btn btn-success\" >enable</a>
                                                ";
                    } else {
                        // line 87
                        echo "                                                    <a href=\"/disable/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["us"], "id", [], "any", false, false, false, 87), "html", null, true);
                        echo "\" class=\"btn btn-danger\" >disable</a>
                                                ";
                    }
                    // line 89
                    echo "

                                            </td>

                                        </tr>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['us'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section></div>
                </div>
        <input type=\"hidden\" id=\"users\" value=\"";
                // line 101
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 101, $this->source); })())), "html", null, true);
                echo "\">
        <input type=\"hidden\" id=\"categories\" value=\"";
                // line 102
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 102, $this->source); })())), "html", null, true);
                echo "\">
        <input type=\"hidden\" id=\"series\" value=\"";
                // line 103
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["series"]) || array_key_exists("series", $context) ? $context["series"] : (function () { throw new RuntimeError('Variable "series" does not exist.', 103, $this->source); })())), "html", null, true);
                echo "\">
            <canvas id=\"myChart\" width=\"auto\" height=\"50%\"></canvas>
            <script>

                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: ['Products', 'Categories', 'Purchasers'],
                        datasets: [{
                            label: '# of Votes',
                            data: [\$(\"#series\").val(),\$(\"#categories\").val(),\$(\"#users\").val()],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)'

                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)'

                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
            </script>

        ";
            }
            // line 143
            echo "        ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 144
            echo "
        ";
        } else {
            // line 146
            echo "            Anonymous
        ";
        }
        // line 148
        echo "    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/dashboardAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 148,  287 => 146,  283 => 144,  280 => 143,  237 => 103,  233 => 102,  229 => 101,  221 => 95,  210 => 89,  204 => 87,  198 => 85,  196 => 84,  190 => 81,  181 => 79,  173 => 78,  169 => 77,  166 => 76,  162 => 75,  136 => 51,  134 => 50,  124 => 42,  111 => 37,  107 => 36,  100 => 32,  96 => 31,  90 => 30,  65 => 7,  63 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block body %}
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\" ></script>
    <section role=\"main\" class=\"content-body\">
        {% if is_granted('ROLE_ADMIN') %}
            <div class=\"row\">
            <div class=\"col-md-6\">
                <section class=\"panel\">
                    <header class=\"panel-heading\">
                        <div class=\"panel-actions\">
                            <a href=\"#\" class=\"fa fa-caret-down\"></a>
                            <a href=\"#\" class=\"fa fa-times\"></a>
                        </div>

                        <h2 class=\"panel-title\">List of Categories</h2>
                    </header>
                    <div class=\"panel-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table mb-none\">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>

                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for c in categories %}<tr>
                                    <td>{{ c.id }}</td>
                                    <td>{{ c.name }}</td>

                                    <td class=\"actions\">

                                        <a href=\"{{ path(\"deleteCategory\",{'id':c.id}) }}\" class=\"delete-row\"><i class=\"fa fa-trash-o\"></i></a>
                                        <a href=\"{{ path(\"updateCategoryForm\",{'id':c.id}) }}\" ><img src=\"{{ asset('assets/img/update.png') }}\" width=\"15px\" title=\"update\"></a>

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

                            <h2 class=\"panel-title\">List of Purchasers</h2>
                        </header>
                        <div class=\"panel-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table mb-none\">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>

                                        <th>Actions</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for us in users %}
                                        <tr>
                                            <td>{{ us.id }}</td>
                                            <td {% if us.enabled != 1 %} style=\"text-decoration: line-through;\" {% endif %}>{{ us.username }}</td>
                                            <td {% if us.enabled != 1 %} style=\"text-decoration: line-through;\" {% endif %}>{{ us.email }}</td>
                                            <td>
                                                <a href=\"/deleteUser/{{ us.id }}\" class=\"delete-row\"><i class=\"fa fa-trash-o\"></i></a>
                                            </td>
                                            <td>
                                                {% if us.enabled != 1 %}
                                                    <a href=\"/enable/{{ us.id }}\" class=\"btn btn-success\" >enable</a>
                                                {% else %}
                                                    <a href=\"/disable/{{ us.id }}\" class=\"btn btn-danger\" >disable</a>
                                                {% endif %}


                                            </td>

                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section></div>
                </div>
        <input type=\"hidden\" id=\"users\" value=\"{{ users|length }}\">
        <input type=\"hidden\" id=\"categories\" value=\"{{ categories|length }}\">
        <input type=\"hidden\" id=\"series\" value=\"{{ series|length }}\">
            <canvas id=\"myChart\" width=\"auto\" height=\"50%\"></canvas>
            <script>

                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: ['Products', 'Categories', 'Purchasers'],
                        datasets: [{
                            label: '# of Votes',
                            data: [\$(\"#series\").val(),\$(\"#categories\").val(),\$(\"#users\").val()],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)'

                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)'

                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
            </script>

        {% endif %}
        {% elseif is_granted('ROLE_USER') %}

        {% else %}
            Anonymous
        {% endif %}
    </section>
{% endblock %}", "user/dashboardAdmin.html.twig", "C:\\wamp64\\www\\Cima@Home\\templates\\user\\dashboardAdmin.html.twig");
    }
}
