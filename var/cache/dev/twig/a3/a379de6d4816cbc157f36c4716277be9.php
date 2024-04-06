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

/* cart/order/new.html.twig */
class __TwigTemplate_98af6582d45888d5f74e6db4941308db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/order/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/order/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/order/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "   
    <style>
        /* Custom CSS for the order page */
         body {
    background-color: #aec6cf; 
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        .order-title {
            text-align: center;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .form-container {
            width: 50%;
            margin-right: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f7f7f7;
        }

        .form-container h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form-control {
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            width: 100%;
        }

        .form-control:focus {
            outline: none;
            border-color: #8b5e3c;
        }

        .product-container {
            width: 50%;
            display: flex;
            flex-wrap: wrap;
        }

        .product-item {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f7f7f7;
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .product-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            margin-right: 20px;
        }

        .product-item-details {
            flex: 1;
        }

        .product-item-details h3 {
            margin: 0;
            font-size: 18px;
            font-weight: bold;
        }

        .product-item-details p {
            margin: 0;
            margin-bottom: 5px;
        }

        .order-form {
            display: flex;
            flex-direction: column;
        }

        .btn-block {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .back-link {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        .locked-form-row {
            display: none;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 117
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 118
        echo "    <h1 class=\"order-title\">Order</h1>
    <div class=\"container\">
        <div class=\"product-container\">
            ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 121, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cartItem"]) {
            // line 122
            echo "                <div class=\"product-item\">
                    <img src=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartItem"], "product", [], "any", false, false, false, 123), "image", [], "any", false, false, false, 123))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartItem"], "product", [], "any", false, false, false, 123), "title", [], "any", false, false, false, 123), "html", null, true);
            echo "\">
                    <div class=\"product-item-details\">
                        <h3>";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartItem"], "product", [], "any", false, false, false, 125), "title", [], "any", false, false, false, 125), "html", null, true);
            echo "</h3>
                        <p>Price: ";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartItem"], "product", [], "any", false, false, false, 126), "price", [], "any", false, false, false, 126), "html", null, true);
            echo ".000.000.VND</p>
                        <p>Quantity: ";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cartItem"], "quantity", [], "any", false, false, false, 127), "html", null, true);
            echo "</p>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cartItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "        </div>
        <div class=\"form-container\">
            <h2>Customer Details</h2>
            <div class=\"order-form\">
                ";
        // line 135
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), 'form_start');
        echo "
                ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "name", [], "any", false, false, false, 136), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Name"]]);
        echo "
                ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "mobile", [], "any", false, false, false, 137), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Mobile"]]);
        echo "
                ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "address", [], "any", false, false, false, 138), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Address"]]);
        echo "
                ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "dateAt", [], "any", false, false, false, 139), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Date"]]);
        echo "
               
                ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "user", [], "any", false, false, false, 141), 'row', ["attr" => ["class" => "form-control", "placeholder" => "User"]]);
        echo "
                 ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "total", [], "any", false, false, false, 142), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Total"]]);
        echo "
              
                 <p>Total Price: ";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 144, $this->source); })()), "html", null, true);
        echo ".000.000.VND</p>
                <div class=\"btn-block\">
                    <button class=\"btn btn-primary\" type=\"submit\">Order</button>
                </div>
                ";
        // line 148
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "cart/order/new.html.twig";
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
        return array (  280 => 148,  273 => 144,  268 => 142,  264 => 141,  259 => 139,  255 => 138,  251 => 137,  247 => 136,  243 => 135,  237 => 131,  227 => 127,  223 => 126,  219 => 125,  212 => 123,  209 => 122,  205 => 121,  200 => 118,  190 => 117,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
   
    <style>
        /* Custom CSS for the order page */
         body {
    background-color: #aec6cf; 
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        .order-title {
            text-align: center;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .form-container {
            width: 50%;
            margin-right: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f7f7f7;
        }

        .form-container h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form-control {
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            width: 100%;
        }

        .form-control:focus {
            outline: none;
            border-color: #8b5e3c;
        }

        .product-container {
            width: 50%;
            display: flex;
            flex-wrap: wrap;
        }

        .product-item {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f7f7f7;
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .product-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            margin-right: 20px;
        }

        .product-item-details {
            flex: 1;
        }

        .product-item-details h3 {
            margin: 0;
            font-size: 18px;
            font-weight: bold;
        }

        .product-item-details p {
            margin: 0;
            margin-bottom: 5px;
        }

        .order-form {
            display: flex;
            flex-direction: column;
        }

        .btn-block {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .back-link {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        .locked-form-row {
            display: none;
        }
    </style>
{% endblock %}

{% block body %}
    <h1 class=\"order-title\">Order</h1>
    <div class=\"container\">
        <div class=\"product-container\">
            {% for cartItem in cartItems %}
                <div class=\"product-item\">
                    <img src=\"{{ asset('image/' ~ cartItem.product.image) }}\" alt=\"{{ cartItem.product.title }}\">
                    <div class=\"product-item-details\">
                        <h3>{{ cartItem.product.title }}</h3>
                        <p>Price: {{ cartItem.product.price }}.000.000.VND</p>
                        <p>Quantity: {{ cartItem.quantity }}</p>
                    </div>
                </div>
            {% endfor %}
        </div>
        <div class=\"form-container\">
            <h2>Customer Details</h2>
            <div class=\"order-form\">
                {{ form_start(form) }}
                {{ form_row(form.name, { 'attr': {'class': 'form-control', 'placeholder': 'Name'} }) }}
                {{ form_row(form.mobile, { 'attr': {'class': 'form-control', 'placeholder': 'Mobile'} }) }}
                {{ form_row(form.address, { 'attr': {'class': 'form-control', 'placeholder': 'Address'} }) }}
                {{ form_row(form.dateAt, { 'attr': {'class': 'form-control', 'placeholder': 'Date'} }) }}
               
                {{ form_row(form.user, { 'attr': {'class': 'form-control', 'placeholder': 'User'} }) }}
                 {{ form_row(form.total, { 'attr': {'class': 'form-control', 'placeholder': 'Total'} }) }}
              
                 <p>Total Price: {{ totalPrice }}.000.000.VND</p>
                <div class=\"btn-block\">
                    <button class=\"btn btn-primary\" type=\"submit\">Order</button>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}
", "cart/order/new.html.twig", "/Users/hoangnhan/Documents/Reasearch Web/templates/cart/order/new.html.twig");
    }
}
