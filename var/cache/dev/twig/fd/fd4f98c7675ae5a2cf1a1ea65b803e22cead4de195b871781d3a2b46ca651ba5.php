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

/* cart/index.html.twig */
class __TwigTemplate_8508e7345a07e2bcb0dbe46b3fdcf00c002e6c6f3347c8fe73ed76911b5e56c6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Cart";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context["m"] = 0;
        // line 5
        echo "    <center>
        <div class=\"table-responsive-lg\">
            <table class=\"table\">
                <tr>
                    <th>
                        Quantity
                    </th>

                    <th>
                        Title
                    </th>
                    <th>
                        Unit price (TND)
                    </th>
                    <th>
                        price (TND)
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["series"]) || array_key_exists("series", $context) ? $context["series"] : (function () { throw new RuntimeError('Variable "series" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 27
            echo "                    <tr>
                        <td>
                            
                            <div class=\"col-4\">
                            <!--  onchange=\"Substract('s.id',' s.price')\" -->
                                ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 32, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 32), [], "array", false, false, false, 32), "html", null, true);
            echo "
                            </div>
                        </td>
                        <td>
                            ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "title", [], "any", false, false, false, 36), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "price", [], "any", false, false, false, 39), "html", null, true);
            echo "
                        </td>
                        <td>
                            <div class=\"col-4\">
                                <span id=\"p";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["s"], "price", [], "any", false, false, false, 43) * twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 43, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 43), [], "array", false, false, false, 43)), "html", null, true);
            echo "</span> 
                            </div>
                            ";
            // line 45
            $context["m"] = ((isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 45, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["s"], "price", [], "any", false, false, false, 45) * twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 45, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 45), [], "array", false, false, false, 45)));
            // line 46
            echo "                        </td>
                        <td>
                            <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteFromCart", ["id" => twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" class=\"btn btn-danger\"><img src=";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icons8-remove-100.png"), "html", null, true);
            echo " width=35px></a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </table>
            <strong>Total :</strong> ";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["m"]) || array_key_exists("m", $context) ? $context["m"] : (function () { throw new RuntimeError('Variable "m" does not exist.', 53, $this->source); })()), "html", null, true);
        echo " TND
            <br>

            ";
        // line 56
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["series"]) || array_key_exists("series", $context) ? $context["series"] : (function () { throw new RuntimeError('Variable "series" does not exist.', 56, $this->source); })())), 0)) {
            // line 57
            echo "                <a href=\"/check_out\" class=\"btn btn-success\">
                    Check Out
                </a>
                <br>
                <br>
                <a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteCart");
            echo "\" class=\"btn btn-danger\">
                    <strong>Delete Cart</strong>
                </a>

            ";
        }
        // line 67
        echo "        </div>
    </center>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 67,  173 => 62,  166 => 57,  164 => 56,  158 => 53,  155 => 52,  143 => 48,  139 => 46,  137 => 45,  130 => 43,  123 => 39,  117 => 36,  110 => 32,  103 => 27,  99 => 26,  76 => 5,  73 => 4,  66 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Cart{% endblock %}
{% block body %}
    {% set m = 0 %}
    <center>
        <div class=\"table-responsive-lg\">
            <table class=\"table\">
                <tr>
                    <th>
                        Quantity
                    </th>

                    <th>
                        Title
                    </th>
                    <th>
                        Unit price (TND)
                    </th>
                    <th>
                        price (TND)
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
                {% for s in series %}
                    <tr>
                        <td>
                            
                            <div class=\"col-4\">
                            <!--  onchange=\"Substract('s.id',' s.price')\" -->
                                {{ cart[s.id] }}
                            </div>
                        </td>
                        <td>
                            {{ s.title }}
                        </td>
                        <td>
                            {{ s.price }}
                        </td>
                        <td>
                            <div class=\"col-4\">
                                <span id=\"p{{ s.id }}\">{{ s.price   * cart[s.id] }}</span> 
                            </div>
                            {% set m = m+( s.price * cart[s.id])  %}
                        </td>
                        <td>
                            <a href=\"{{ path('deleteFromCart',{'id':s.id}) }}\" class=\"btn btn-danger\"><img src={{ asset('assets/img/icons8-remove-100.png') }} width=35px></a>
                        </td>
                    </tr>
                {% endfor %}
            </table>
            <strong>Total :</strong> {{ m }} TND
            <br>

            {% if series|length > 0 %}
                <a href=\"/check_out\" class=\"btn btn-success\">
                    Check Out
                </a>
                <br>
                <br>
                <a href=\"{{ path('deleteCart') }}\" class=\"btn btn-danger\">
                    <strong>Delete Cart</strong>
                </a>

            {% endif %}
        </div>
    </center>

{% endblock %}", "cart/index.html.twig", "C:\\wamp64\\www\\Cima@Home\\templates\\cart\\index.html.twig");
    }
}
