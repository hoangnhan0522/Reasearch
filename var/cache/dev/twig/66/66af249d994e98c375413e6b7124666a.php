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

/* product/show.html.twig */
class __TwigTemplate_66005c2210c301540b71c226bcc5c267 extends Template
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
        return "base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent = $this->loadTemplate("base_admin.html.twig", "product/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Product";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo " <style>
  body {
    background-color: #aec6cf; 
        }
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        header {
            
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }
        .product-image {
            text-align: center;
        }
        .product-image img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            
        }
        .product-details {
            padding: 1rem;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .product-title {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        .product-price {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 1rem;
        }
        .product-description {
            margin-bottom: 1rem;
        }
        .product-quantity {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        .quantity-label {
            margin-right: 1rem;
            font-size: 1.2rem;
        }
        .quantity-input {
            width: 60px;
            text-align: center;
            font-size: 1.2rem;
        }
        .product-rating {
            margin-bottom: 1rem;
        }
        .product-rating label {
            margin-right: 1rem;
            font-size: 1.2rem;
        }
        .product-button {
            display: inline-block;
            background-color: #333;
            color: #fff;
            padding: 0.5rem 1rem;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 1.2rem;
        }
        .product-button:hover {
            background-color: #555;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }
        .cart{
            text-align: center;
        }
         .table {
        margin-top: 20px;
        width: 100%;
        border-collapse: collapse;
    }
    .table th,
    .table td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
    }
    .table th {
        background-color: #f2f2f2;
    }
        .table{
     width: 100%;
        }
        th {
        height: 70px;
         }
         th, td {
  border-bottom: 1px solid #ddd;
}

    </style>



    <h1>Product</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 125, $this->source); })()), "id", [], "any", false, false, false, 125), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 129, $this->source); })()), "title", [], "any", false, false, false, 129), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 133, $this->source); })()), "price", [], "any", false, false, false, 133), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 137, $this->source); })()), "image", [], "any", false, false, false, 137), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 141, $this->source); })()), "description", [], "any", false, false, false, 141), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        echo "\"class=\"btn btn-light\"
>back to list</a>

    <a href=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 149, $this->source); })()), "id", [], "any", false, false, false, 149)]), "html", null, true);
        echo "\"class=\"btn btn-warning\">edit</a>

    ";
        // line 151
        echo twig_include($this->env, $context, "product/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "product/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  257 => 151,  252 => 149,  246 => 146,  238 => 141,  231 => 137,  224 => 133,  217 => 129,  210 => 125,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_admin.html.twig' %}

{% block title %}Product{% endblock %}
{% block body %}
 <style>
  body {
    background-color: #aec6cf; 
        }
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        header {
            
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }
        .product-image {
            text-align: center;
        }
        .product-image img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            
        }
        .product-details {
            padding: 1rem;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .product-title {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        .product-price {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 1rem;
        }
        .product-description {
            margin-bottom: 1rem;
        }
        .product-quantity {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        .quantity-label {
            margin-right: 1rem;
            font-size: 1.2rem;
        }
        .quantity-input {
            width: 60px;
            text-align: center;
            font-size: 1.2rem;
        }
        .product-rating {
            margin-bottom: 1rem;
        }
        .product-rating label {
            margin-right: 1rem;
            font-size: 1.2rem;
        }
        .product-button {
            display: inline-block;
            background-color: #333;
            color: #fff;
            padding: 0.5rem 1rem;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 1.2rem;
        }
        .product-button:hover {
            background-color: #555;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }
        .cart{
            text-align: center;
        }
         .table {
        margin-top: 20px;
        width: 100%;
        border-collapse: collapse;
    }
    .table th,
    .table td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
    }
    .table th {
        background-color: #f2f2f2;
    }
        .table{
     width: 100%;
        }
        th {
        height: 70px;
         }
         th, td {
  border-bottom: 1px solid #ddd;
}

    </style>



    <h1>Product</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ product.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ product.title }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ product.price }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ product.image }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ product.description }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_product_index') }}\"class=\"btn btn-light\"
>back to list</a>

    <a href=\"{{ path('app_product_edit', {'id': product.id}) }}\"class=\"btn btn-warning\">edit</a>

    {{ include('product/_delete_form.html.twig') }}
{% endblock %}
", "product/show.html.twig", "/Users/hoangnhan/Documents/Reasearch Web/templates/product/show.html.twig");
    }
}
