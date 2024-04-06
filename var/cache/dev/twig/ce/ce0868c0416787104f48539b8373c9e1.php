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

/* contact/index.html.twig */
class __TwigTemplate_3ec361e3022bd7194e8e4cf13b33a8c6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base_admin.html.twig", "contact/index.html.twig", 1);
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

        echo "Contact index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
 body {
    background-color: #aec6cf; 
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
    .no-records {
        text-align: center;
        padding: 20px;
        font-style: italic;
        color: #888;
    }
      .cart-item-image {
        width: 100px;
        height: 100px;
        object-fit: cover;
        margin-right: 20px;
    }
    .btn-center {
        display: flex;
        justify-content: center;
        align-items: center;
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
    .no-records {
        text-align: center;
        padding: 20px;
        font-style: italic;
        color: #888;
    }
    .create-btn {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    .create-btn a {
        padding: 10px 20px;
        background-color: #4caf50;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
    }
</style>

<div class=\"btn-center\">
   <h1>Contact index</h1>
</div>


<table class=\"table\">
    <thead>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Title</th>
            <th>Note</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 94, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 95
            echo "        <tr>
            <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 96), "html", null, true);
            echo "</td>
            <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "firstName", [], "any", false, false, false, 97), "html", null, true);
            echo "</td>
            <td>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "lastName", [], "any", false, false, false, 98), "html", null, true);
            echo "</td>
            <td>";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 99), "html", null, true);
            echo "</td>
            <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "phoneNumber", [], "any", false, false, false, 100), "html", null, true);
            echo "</td>
            <td>";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "titleName", [], "any", false, false, false, 101), "html", null, true);
            echo "</td>
            <td>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "note", [], "any", false, false, false, 102), "html", null, true);
            echo "</td>
            <td>
                <a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_show", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 104)]), "html", null, true);
            echo "\">show</a>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 108
            echo "        <tr>
            <td colspan=\"8\" class=\"no-records\">No records found</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "    </tbody>
</table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "contact/index.html.twig";
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
        return array (  233 => 112,  224 => 108,  215 => 104,  210 => 102,  206 => 101,  202 => 100,  198 => 99,  194 => 98,  190 => 97,  186 => 96,  183 => 95,  178 => 94,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_admin.html.twig' %}

{% block title %}Contact index{% endblock %}

{% block body %}
<style>
 body {
    background-color: #aec6cf; 
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
    .no-records {
        text-align: center;
        padding: 20px;
        font-style: italic;
        color: #888;
    }
      .cart-item-image {
        width: 100px;
        height: 100px;
        object-fit: cover;
        margin-right: 20px;
    }
    .btn-center {
        display: flex;
        justify-content: center;
        align-items: center;
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
    .no-records {
        text-align: center;
        padding: 20px;
        font-style: italic;
        color: #888;
    }
    .create-btn {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    .create-btn a {
        padding: 10px 20px;
        background-color: #4caf50;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
    }
</style>

<div class=\"btn-center\">
   <h1>Contact index</h1>
</div>


<table class=\"table\">
    <thead>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Title</th>
            <th>Note</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    {% for contact in contacts %}
        <tr>
            <td>{{ contact.id }}</td>
            <td>{{ contact.firstName }}</td>
            <td>{{ contact.lastName }}</td>
            <td>{{ contact.email }}</td>
            <td>{{ contact.phoneNumber }}</td>
            <td>{{ contact.titleName }}</td>
            <td>{{ contact.note }}</td>
            <td>
                <a href=\"{{ path('app_contact_show', {'id': contact.id}) }}\">show</a>
            </td>
        </tr>
    {% else %}
        <tr>
            <td colspan=\"8\" class=\"no-records\">No records found</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
{% endblock %}
", "contact/index.html.twig", "/Users/hoangnhan/Documents/Reasearch Web/templates/contact/index.html.twig");
    }
}
