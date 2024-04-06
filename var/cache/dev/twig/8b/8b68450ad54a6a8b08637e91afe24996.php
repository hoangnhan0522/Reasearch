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

/* base.html.twig */
class __TwigTemplate_30739039a4cb7fa13ef807bedeab821f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/united/bootstrap.min.css\">
     <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id=\"preloader\">
        <div class=\"jumper\">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    ";
        // line 22
        echo "
    ";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 152
        echo "
    
</head>
<body>
    ";
        // line 156
        $this->displayBlock('header', $context, $blocks);
        // line 228
        echo "


    ";
        // line 231
        $this->displayBlock('body', $context, $blocks);
        // line 234
        echo "
    <hr class=\"divider\">
    
    ";
        // line 237
        $this->displayBlock('footer', $context, $blocks);
        // line 258
        echo "    

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 24
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        <style>

            .navbar-nav .nav-item {
                margin-right: 20px;
            }
        
            .navbar-nav .nav-item:last-child {
                margin-right: 0;
            }
        
            /* Style the search form */
            .search-form {
                margin-left: auto;
                display: flex;
                align-items: center;
            }
        
            .search-input {
                margin-right: 10px;
            }
        
            /* Style the cart icon */
            .nav-link-cart {
                display: flex;
                align-items: center;
                margin-left: 10px;
            }
        
            /* Style the login/logout button */
            .login-logout-btn {
                margin-left: 10px;
            }
        
            /* Update the footer styles */
            .footer {
                background-color: #343a40;
                color: white;
                padding: 30px 0;
            }
        
            .footer .row {
                margin-top: 20px;
            }
        
            .footer h5 {
                margin-bottom: 20px;
            }
        
            .footer ul {
                padding-left: 0;
                list-style: none;
            }
        
            .footer li {
                margin-bottom: 10px;
            }
            .nav-link {
               
                padding-right: 20px;
              }
            .collapse navbar-collapse{
                
                    justify-content: center;
                    
                
            }
            .divider {
                margin-top: 2rem;
                margin-bottom: 2rem;
                border: none;
                border-top: 1px solid #eee;

            }

            .badge-cart {
                background-color: orange;
                color: white;
                font-size: 18px;
            }

            .search-form {
                display: flex;
                align-items: center;
            }

            .search-input {
                margin-right: 10px;
            }

            .footer {
                background-color: #f8f9fa;
                padding: 30px 0;
            }

            .footer .row {
                margin-top: 20px;
            }

            .footer h5 {
                margin-bottom: 20px;
            }

            .footer ul {
                padding-left: 0;
                list-style: none;
            }

            .footer li {
                margin-bottom: 10px;
            }
            .body {
            background-color: #f0f0f0; /* Màu nền */
            color: #333; /* Màu chữ */
        }
        /* Thay đổi màu cho các phần tử khác */
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
        }
        .footer {
            background-color: #333;
            color: white;
            padding: 10px;
        }
        </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 156
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 157
        echo "    <nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
        <div class=\"container-fluid\">

         
            
            <div class=\"collapse navbar-collapse justify-content-center\" id=\"navbarColor02\">

                <ul class=\"navbar-nav mx-auto\">
                    
                    <li class=\"nav-item mx-1 \">
                        <a class=\"nav-link\" href=\"http://127.0.0.1:8000\">Home</a>
                    </li>
                   
                    <li class=\"nav-item mx-1\"> 
                        <a class=\"nav-link\" href=\"software-technology\">Software technology</a>
                    </li>
                    
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"optical-relationstch\">Optical relationstch</a>
                    </li>

                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"graphic-design\">Graphic design</a>
                    </li>
                  
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"international-bussines\">International bussiness</a>
                    </li>

                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"contactnew\">Contact</a>
                    </li>
                </ul>
               
                
                <ul class=\"navbar-nav\">
                    <form class=\"d-flex\" action=\"";
        // line 193
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" method=\"GET\" style=\"margin-right: 20px;\">
                        <input class=\"form-control me-sm-0\" type=\"search\" name=\"keyword\" placeholder=\"Search\" required>
                        <button class=\"btn btn-secondary my-2 my-sm-0 mx-2\" type=\"submit\">Search</button>
                    </form>
                </ul>
                  
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item mx-2\">
                    <a class=\"nav-link\" href=\"orderstatus\" >
                    <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABsklEQVR4nO2ZMW7CMBSGXzKkHCEJLBwjiWBi5CyMASamVm1vwRVyAxDpFVgYqXoBhGDAr3JFpTRxVScxdh7NL70pT4o/+/8dWwFo1apVVm8AgJprDYpkGRg8AgBTCmBZFuoQYywLoUT23QEEQYCUMmFnAXIzRCITtgiAkqXsFoDiCpxOJ4zjGD3PQ9/3cTqd4vl8pgMQx3EhiLPZjA6A67oFgG63K+zNb8uDwcA8ALdOHqDX6wl7oyj60TccDptpofl8juRC7Pv+V3H/kwqxKjEKAI0L8W63w/F4XMjAaDTC7Xbb3BAfj0dcLBbY6XR+PZQ5joOTyQQPh4PU6jBdAEmSYL/flz5d8i11uVw2A4BVPGLL5IjpWoG8j2Uq63XjALcSawFA3woouGuvjVlI0V2bVQaoMnuiL26ViWF/5EQKIAzDWrvQ5XIxC1BXdwMA9eufAgQ1Q3xLC1nfDzebDckQW6KXUwox14cugFtkgOuFOoADAM8AsM8280xQsZC2f2Y6AISZUFlpmpYCWK1WpQEKmWhQSUmYiQbUHgzrtSbAo2mAh6s930sOnPc/XZ1xH/oErCZVFJVCYOQAAAAASUVORK5CYII=\">

                    </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item mx-2\">
                        <a class=\"nav-link\" href=\"/cart\" style=\"margin-right: 40px;\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" fill=\"currentColor\" class=\"bi bi-cart3\" viewBox=\"0 0 16 16\">
                                <path d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>
                            </svg>
                        </a>
                    </li>
                </ul>
               
                <form>
                    <a class=\"btn btn-secondary\" href=\"/";
        // line 216
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 216, $this->source); })()), "user", [], "any", false, false, false, 216)) ? ("logout") : ("login"));
        echo "\" @click=\"isOpen = false\">
                        ";
        // line 217
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 217, $this->source); })()), "user", [], "any", false, false, false, 217)) ? ("logout") : ("login"));
        echo "
                    </a>
                </form>
            </div>
        </div>
    </nav>

   


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 231
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 232
        echo "    
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 237
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 238
        echo "    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h5>FPT Education Organization</h5>
                    <p>Company</p>
                    <p>FPT Education Organization, full name is FPT Education Company Limited, established in 1999. Is one of the member units, holding 1 of the 3 cores of FPT Group, operating in the field of education education in Vietnam.</p>
                </div>
                <div class=\"col-md-6\">
                    <h5>Thông tin liên hệ</h5>
                    <ul class=\"list-unstyled\">
                        <li>Địa chỉ: 205 Nguyễn Xí, Phường 26, Bình Thạnh, Thành phố Hồ Chí Minh</li>
                        <li>Điện thoại: 0866251347</li>
                        <li>Email: hoangnhan1122@fpt.edu.vn</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  412 => 238,  402 => 237,  391 => 232,  381 => 231,  360 => 217,  356 => 216,  330 => 193,  292 => 157,  282 => 156,  143 => 24,  133 => 23,  114 => 5,  100 => 258,  98 => 237,  93 => 234,  91 => 231,  86 => 228,  84 => 156,  78 => 152,  76 => 23,  73 => 22,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/united/bootstrap.min.css\">
     <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id=\"preloader\">
        <div class=\"jumper\">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}

    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
        <style>

            .navbar-nav .nav-item {
                margin-right: 20px;
            }
        
            .navbar-nav .nav-item:last-child {
                margin-right: 0;
            }
        
            /* Style the search form */
            .search-form {
                margin-left: auto;
                display: flex;
                align-items: center;
            }
        
            .search-input {
                margin-right: 10px;
            }
        
            /* Style the cart icon */
            .nav-link-cart {
                display: flex;
                align-items: center;
                margin-left: 10px;
            }
        
            /* Style the login/logout button */
            .login-logout-btn {
                margin-left: 10px;
            }
        
            /* Update the footer styles */
            .footer {
                background-color: #343a40;
                color: white;
                padding: 30px 0;
            }
        
            .footer .row {
                margin-top: 20px;
            }
        
            .footer h5 {
                margin-bottom: 20px;
            }
        
            .footer ul {
                padding-left: 0;
                list-style: none;
            }
        
            .footer li {
                margin-bottom: 10px;
            }
            .nav-link {
               
                padding-right: 20px;
              }
            .collapse navbar-collapse{
                
                    justify-content: center;
                    
                
            }
            .divider {
                margin-top: 2rem;
                margin-bottom: 2rem;
                border: none;
                border-top: 1px solid #eee;

            }

            .badge-cart {
                background-color: orange;
                color: white;
                font-size: 18px;
            }

            .search-form {
                display: flex;
                align-items: center;
            }

            .search-input {
                margin-right: 10px;
            }

            .footer {
                background-color: #f8f9fa;
                padding: 30px 0;
            }

            .footer .row {
                margin-top: 20px;
            }

            .footer h5 {
                margin-bottom: 20px;
            }

            .footer ul {
                padding-left: 0;
                list-style: none;
            }

            .footer li {
                margin-bottom: 10px;
            }
            .body {
            background-color: #f0f0f0; /* Màu nền */
            color: #333; /* Màu chữ */
        }
        /* Thay đổi màu cho các phần tử khác */
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
        }
        .footer {
            background-color: #333;
            color: white;
            padding: 10px;
        }
        </style>
    {% endblock %}

    
</head>
<body>
    {% block header %}
    <nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
        <div class=\"container-fluid\">

         
            
            <div class=\"collapse navbar-collapse justify-content-center\" id=\"navbarColor02\">

                <ul class=\"navbar-nav mx-auto\">
                    
                    <li class=\"nav-item mx-1 \">
                        <a class=\"nav-link\" href=\"http://127.0.0.1:8000\">Home</a>
                    </li>
                   
                    <li class=\"nav-item mx-1\"> 
                        <a class=\"nav-link\" href=\"software-technology\">Software technology</a>
                    </li>
                    
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"optical-relationstch\">Optical relationstch</a>
                    </li>

                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"graphic-design\">Graphic design</a>
                    </li>
                  
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"international-bussines\">International bussiness</a>
                    </li>

                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"contactnew\">Contact</a>
                    </li>
                </ul>
               
                
                <ul class=\"navbar-nav\">
                    <form class=\"d-flex\" action=\"{{ path('search') }}\" method=\"GET\" style=\"margin-right: 20px;\">
                        <input class=\"form-control me-sm-0\" type=\"search\" name=\"keyword\" placeholder=\"Search\" required>
                        <button class=\"btn btn-secondary my-2 my-sm-0 mx-2\" type=\"submit\">Search</button>
                    </form>
                </ul>
                  
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item mx-2\">
                    <a class=\"nav-link\" href=\"orderstatus\" >
                    <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABsklEQVR4nO2ZMW7CMBSGXzKkHCEJLBwjiWBi5CyMASamVm1vwRVyAxDpFVgYqXoBhGDAr3JFpTRxVScxdh7NL70pT4o/+/8dWwFo1apVVm8AgJprDYpkGRg8AgBTCmBZFuoQYywLoUT23QEEQYCUMmFnAXIzRCITtgiAkqXsFoDiCpxOJ4zjGD3PQ9/3cTqd4vl8pgMQx3EhiLPZjA6A67oFgG63K+zNb8uDwcA8ALdOHqDX6wl7oyj60TccDptpofl8juRC7Pv+V3H/kwqxKjEKAI0L8W63w/F4XMjAaDTC7Xbb3BAfj0dcLBbY6XR+PZQ5joOTyQQPh4PU6jBdAEmSYL/flz5d8i11uVw2A4BVPGLL5IjpWoG8j2Uq63XjALcSawFA3woouGuvjVlI0V2bVQaoMnuiL26ViWF/5EQKIAzDWrvQ5XIxC1BXdwMA9eufAgQ1Q3xLC1nfDzebDckQW6KXUwox14cugFtkgOuFOoADAM8AsM8280xQsZC2f2Y6AISZUFlpmpYCWK1WpQEKmWhQSUmYiQbUHgzrtSbAo2mAh6s930sOnPc/XZ1xH/oErCZVFJVCYOQAAAAASUVORK5CYII=\">

                    </ul>
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item mx-2\">
                        <a class=\"nav-link\" href=\"/cart\" style=\"margin-right: 40px;\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" fill=\"currentColor\" class=\"bi bi-cart3\" viewBox=\"0 0 16 16\">
                                <path d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>
                            </svg>
                        </a>
                    </li>
                </ul>
               
                <form>
                    <a class=\"btn btn-secondary\" href=\"/{{ app.user ? 'logout' : 'login' }}\" @click=\"isOpen = false\">
                        {{ app.user ? 'logout' : 'login'}}
                    </a>
                </form>
            </div>
        </div>
    </nav>

   


{% endblock %}



    {% block body %}
    
    {% endblock %}

    <hr class=\"divider\">
    
    {% block footer %}
    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h5>FPT Education Organization</h5>
                    <p>Company</p>
                    <p>FPT Education Organization, full name is FPT Education Company Limited, established in 1999. Is one of the member units, holding 1 of the 3 cores of FPT Group, operating in the field of education education in Vietnam.</p>
                </div>
                <div class=\"col-md-6\">
                    <h5>Thông tin liên hệ</h5>
                    <ul class=\"list-unstyled\">
                        <li>Địa chỉ: 205 Nguyễn Xí, Phường 26, Bình Thạnh, Thành phố Hồ Chí Minh</li>
                        <li>Điện thoại: 0866251347</li>
                        <li>Email: hoangnhan1122@fpt.edu.vn</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    {% endblock %}
    

</body>
</html>
", "base.html.twig", "/Users/hoangnhan/Documents/Reasearch Web/templates/base.html.twig");
    }
}
