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

/* home/index.html.twig */
class __TwigTemplate_a2fd6bbe087263df3074a61ccd9ec065 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Role index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "   
    <style>
    body {
    background-color: #aec6cf; 
        }
        .product-card {
            transition: transform 0.9s;
            border-radius: 10px;
            overflow: hidden;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            object-fit: cover;
        }

        .product-card .card-body {
            padding: 10px;
        }

        .product-card .card-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
        }

        .product-card .card-text {
            font-size: 14px;
            margin-bottom: 10px;
            text-align: center;
        }

        .product-card .card-footer {
            padding: 10px;
            background-color: #f5f5f5;
        }

        .addToCartBtn {
            display: block;
            margin: 0 auto;
            background-color: black; /* Set the button background color to black */
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }

        .addToCartBtn:hover {
            background-color: #333; /* Darken the button on hover */
        }

        /* Additional styles for grid layout */
        .product-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-gap: 20px;
        }

        .product-card .card-img-top {
            height: 150px;
            object-fit: contain;
            max-width: 100%;
        }
        .slider {
          width: 100%;
          height: 500px;
          overflow: hidden;
          position: relative;
        }
    body {
    background-color: #aec6cf; 
        }
        .image1 {
  display: flex;
  justify-content: center; /* căn giữa theo chiều ngang */
  align-items: center; /* căn giữa theo chiều dọc */
  
}

.image1 img {
  max-width: 55%; /* Đảm bảo ảnh không vượt quá kích thước của container */
  max-height: 55%; /* Đảm bảo ảnh không vượt quá kích thước của container */
  
}
         
                
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 101
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 102
        echo "    <div class=\"container\">
            <body>
              <div class=\"image1\">
               
                <img src=\"image/Anhthuvien.jpeg\">
                
              </div>
            
            </body>
            </html>
            
            
        
       
        <hr class=\"divider\">

        <h2 class=\"text-center mt-5\">International bussines</h2>
        <div class=\"product-container\">
            ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["macbookProducts"]) || array_key_exists("macbookProducts", $context) ? $context["macbookProducts"] : (function () { throw new RuntimeError('Variable "macbookProducts" does not exist.', 120, $this->source); })()), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 121
            echo "                <!-- Remove the extra div with class=\"card product-card\" -->
                <a href=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detail_show", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 122)]), "html", null, true);
            echo "\" class=\"card product-card\">
                    <img src=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/" . twig_get_attribute($this->env, $this->source, $context["product"], "getImage", [], "method", false, false, false, 123))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 123), "html", null, true);
            echo "\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 125), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">Giá: ";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "method", false, false, false, 126), "html", null, true);
            echo ".000.000.VND</p>
                        <div class=\"action\">
                            <form action=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_to_cart", ["productId" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 128)]), "html", null, true);
            echo "\" method=\"POST\">
                                <button class=\"btn btn-primary mt-4 addToCartBtn\" type=\"submit\">Thêm vào giỏ hàng</button>
                            </form>
                        </div>
                    </div>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo " 
        </div>
        <div class=\"text-center mt-4\">
          <a href=\"software-technology\" class=\"btn btn-outline-primary\">Xem tất cả sản phẩm</a>
      </div>

        <hr class=\"divider\">

        <h2 class=\"text-center mt-5\">Optical relationstch</h2>
        <div class=\"product-container\">
            ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["ipadProducts"]) || array_key_exists("ipadProducts", $context) ? $context["ipadProducts"] : (function () { throw new RuntimeError('Variable "ipadProducts" does not exist.', 144, $this->source); })()), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 145
            echo "                <!-- Remove the extra div with class=\"card product-card\" -->
                <a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detail_show", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 146)]), "html", null, true);
            echo "\" class=\"card product-card\">
                    <img src=\"";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/" . twig_get_attribute($this->env, $this->source, $context["product"], "getImage", [], "method", false, false, false, 147))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 147), "html", null, true);
            echo "\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 149), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">Giá: ";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "method", false, false, false, 150), "html", null, true);
            echo ".000.000.VND</p>
                        <div class=\"action\">
                            <form action=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_to_cart", ["productId" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 152)]), "html", null, true);
            echo "\" method=\"POST\">
                                <button class=\"btn btn-primary mt-4 addToCartBtn\" type=\"submit\">Thêm vào giỏ hàng</button>
                            </form>
                        </div>
                    </div>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "        </div>
        <div class=\"text-center mt-4\">
          <a href=\"optical-relationstch\" class=\"btn btn-outline-primary\">Xem tất cả sản phẩm</a>
      </div>

        <hr class=\"divider\">

        <h2 class=\"text-center mt-5\">Software technology</h2>
        <div class=\"product-container\">
            ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["iphoneProducts"]) || array_key_exists("iphoneProducts", $context) ? $context["iphoneProducts"] : (function () { throw new RuntimeError('Variable "iphoneProducts" does not exist.', 168, $this->source); })()), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 169
            echo "                <!-- Remove the extra div with class=\"card product-card\" -->
                <a href=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detail_show", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 170)]), "html", null, true);
            echo "\" class=\"card product-card\">
                    <img src=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/" . twig_get_attribute($this->env, $this->source, $context["product"], "getImage", [], "method", false, false, false, 171))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 171), "html", null, true);
            echo "\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 173), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">Giá: ";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "method", false, false, false, 174), "html", null, true);
            echo ".000.000.VND</p>
                        <div class=\"action\">
                            <form action=\"";
            // line 176
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_to_cart", ["productId" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 176)]), "html", null, true);
            echo "\" method=\"POST\">
                                <button class=\"btn btn-primary mt-4 addToCartBtn\" type=\"submit\">Thêm vào giỏ hàng</button>
                            </form>
                        </div>
                    </div>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "        </div>
        <div class=\"text-center mt-4\">
          <a href=\"graphic-design\" class=\"btn btn-outline-primary\">Xem tất cả sản phẩm</a>
      </div>

        <hr class=\"divider\">

        <h2 class=\"text-center mt-5\">Graphic design</h2>
        <div class=\"product-container\">
            ";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["aProducts"]) || array_key_exists("aProducts", $context) ? $context["aProducts"] : (function () { throw new RuntimeError('Variable "aProducts" does not exist.', 192, $this->source); })()), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 193
            echo "                <!-- Remove the extra div with class=\"card product-card\" -->
                <a href=\"";
            // line 194
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detail_show", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 194)]), "html", null, true);
            echo "\" class=\"card product-card\">
                    <img src=\"";
            // line 195
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/" . twig_get_attribute($this->env, $this->source, $context["product"], "getImage", [], "method", false, false, false, 195))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 195), "html", null, true);
            echo "\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 197), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">Giá: ";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "method", false, false, false, 198), "html", null, true);
            echo ".000.000.VND</p>
                        <div class=\"action\">
                            <form action=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_to_cart", ["productId" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 200)]), "html", null, true);
            echo "\" method=\"POST\">
                                <button class=\"btn btn-primary mt-4 addToCartBtn\" type=\"submit\">Thêm vào giỏ hàng</button>
                            </form>
                        </div>
                    </div>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "        </div>
        <div class=\"text-center mt-4\">
          <a href=\"international-bussines\" class=\"btn btn-outline-primary\">Xem tất cả sản phẩm</a>
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
        return "home/index.html.twig";
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
        return array (  416 => 207,  403 => 200,  398 => 198,  394 => 197,  387 => 195,  383 => 194,  380 => 193,  376 => 192,  365 => 183,  352 => 176,  347 => 174,  343 => 173,  336 => 171,  332 => 170,  329 => 169,  325 => 168,  314 => 159,  301 => 152,  296 => 150,  292 => 149,  285 => 147,  281 => 146,  278 => 145,  274 => 144,  262 => 134,  249 => 128,  244 => 126,  240 => 125,  233 => 123,  229 => 122,  226 => 121,  222 => 120,  202 => 102,  192 => 101,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Role index{% endblock %}

{% block stylesheets %}
   
    <style>
    body {
    background-color: #aec6cf; 
        }
        .product-card {
            transition: transform 0.9s;
            border-radius: 10px;
            overflow: hidden;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            object-fit: cover;
        }

        .product-card .card-body {
            padding: 10px;
        }

        .product-card .card-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
        }

        .product-card .card-text {
            font-size: 14px;
            margin-bottom: 10px;
            text-align: center;
        }

        .product-card .card-footer {
            padding: 10px;
            background-color: #f5f5f5;
        }

        .addToCartBtn {
            display: block;
            margin: 0 auto;
            background-color: black; /* Set the button background color to black */
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }

        .addToCartBtn:hover {
            background-color: #333; /* Darken the button on hover */
        }

        /* Additional styles for grid layout */
        .product-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-gap: 20px;
        }

        .product-card .card-img-top {
            height: 150px;
            object-fit: contain;
            max-width: 100%;
        }
        .slider {
          width: 100%;
          height: 500px;
          overflow: hidden;
          position: relative;
        }
    body {
    background-color: #aec6cf; 
        }
        .image1 {
  display: flex;
  justify-content: center; /* căn giữa theo chiều ngang */
  align-items: center; /* căn giữa theo chiều dọc */
  
}

.image1 img {
  max-width: 55%; /* Đảm bảo ảnh không vượt quá kích thước của container */
  max-height: 55%; /* Đảm bảo ảnh không vượt quá kích thước của container */
  
}
         
                
    </style>
{% endblock %}

{% block body %}
    <div class=\"container\">
            <body>
              <div class=\"image1\">
               
                <img src=\"image/Anhthuvien.jpeg\">
                
              </div>
            
            </body>
            </html>
            
            
        
       
        <hr class=\"divider\">

        <h2 class=\"text-center mt-5\">International bussines</h2>
        <div class=\"product-container\">
            {% for product in macbookProducts|slice(0, 4) %}
                <!-- Remove the extra div with class=\"card product-card\" -->
                <a href=\"{{ path('app_detail_show', {'id': product.getId()}) }}\" class=\"card product-card\">
                    <img src=\"{{ asset('image/' ~ product.getImage()) }}\" class=\"card-img-top\" alt=\"{{ product.getTitle() }}\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ product.getTitle() }}</h5>
                        <p class=\"card-text\">Giá: {{ product.getPrice() }}.000.000.VND</p>
                        <div class=\"action\">
                            <form action=\"{{ path('app_add_to_cart', {'productId': product.id}) }}\" method=\"POST\">
                                <button class=\"btn btn-primary mt-4 addToCartBtn\" type=\"submit\">Thêm vào giỏ hàng</button>
                            </form>
                        </div>
                    </div>
                </a>
            {% endfor %} 
        </div>
        <div class=\"text-center mt-4\">
          <a href=\"software-technology\" class=\"btn btn-outline-primary\">Xem tất cả sản phẩm</a>
      </div>

        <hr class=\"divider\">

        <h2 class=\"text-center mt-5\">Optical relationstch</h2>
        <div class=\"product-container\">
            {% for product in ipadProducts|slice(0, 4) %}
                <!-- Remove the extra div with class=\"card product-card\" -->
                <a href=\"{{ path('app_detail_show', {'id': product.getId()}) }}\" class=\"card product-card\">
                    <img src=\"{{ asset('image/' ~ product.getImage()) }}\" class=\"card-img-top\" alt=\"{{ product.getTitle() }}\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ product.getTitle() }}</h5>
                        <p class=\"card-text\">Giá: {{ product.getPrice() }}.000.000.VND</p>
                        <div class=\"action\">
                            <form action=\"{{ path('app_add_to_cart', {'productId': product.id}) }}\" method=\"POST\">
                                <button class=\"btn btn-primary mt-4 addToCartBtn\" type=\"submit\">Thêm vào giỏ hàng</button>
                            </form>
                        </div>
                    </div>
                </a>
            {% endfor %}
        </div>
        <div class=\"text-center mt-4\">
          <a href=\"optical-relationstch\" class=\"btn btn-outline-primary\">Xem tất cả sản phẩm</a>
      </div>

        <hr class=\"divider\">

        <h2 class=\"text-center mt-5\">Software technology</h2>
        <div class=\"product-container\">
            {% for product in iphoneProducts|slice(0, 4) %}
                <!-- Remove the extra div with class=\"card product-card\" -->
                <a href=\"{{ path('app_detail_show', {'id': product.getId()}) }}\" class=\"card product-card\">
                    <img src=\"{{ asset('image/' ~ product.getImage()) }}\" class=\"card-img-top\" alt=\"{{ product.getTitle() }}\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ product.getTitle() }}</h5>
                        <p class=\"card-text\">Giá: {{ product.getPrice() }}.000.000.VND</p>
                        <div class=\"action\">
                            <form action=\"{{ path('app_add_to_cart', {'productId': product.id}) }}\" method=\"POST\">
                                <button class=\"btn btn-primary mt-4 addToCartBtn\" type=\"submit\">Thêm vào giỏ hàng</button>
                            </form>
                        </div>
                    </div>
                </a>
            {% endfor %}
        </div>
        <div class=\"text-center mt-4\">
          <a href=\"graphic-design\" class=\"btn btn-outline-primary\">Xem tất cả sản phẩm</a>
      </div>

        <hr class=\"divider\">

        <h2 class=\"text-center mt-5\">Graphic design</h2>
        <div class=\"product-container\">
            {% for product in aProducts|slice(0, 4) %}
                <!-- Remove the extra div with class=\"card product-card\" -->
                <a href=\"{{ path('app_detail_show', {'id': product.getId()}) }}\" class=\"card product-card\">
                    <img src=\"{{ asset('image/' ~ product.getImage()) }}\" class=\"card-img-top\" alt=\"{{ product.getTitle() }}\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ product.getTitle() }}</h5>
                        <p class=\"card-text\">Giá: {{ product.getPrice() }}.000.000.VND</p>
                        <div class=\"action\">
                            <form action=\"{{ path('app_add_to_cart', {'productId': product.id}) }}\" method=\"POST\">
                                <button class=\"btn btn-primary mt-4 addToCartBtn\" type=\"submit\">Thêm vào giỏ hàng</button>
                            </form>
                        </div>
                    </div>
                </a>
            {% endfor %}
        </div>
        <div class=\"text-center mt-4\">
          <a href=\"international-bussines\" class=\"btn btn-outline-primary\">Xem tất cả sản phẩm</a>
      </div>

 
  </div>
    
{% endblock %}


", "home/index.html.twig", "/Users/hoangnhan/Documents/Reasearch Web/templates/home/index.html.twig");
    }
}
