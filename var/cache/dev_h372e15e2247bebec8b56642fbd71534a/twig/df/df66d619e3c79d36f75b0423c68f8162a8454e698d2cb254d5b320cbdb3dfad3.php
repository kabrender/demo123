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

/* @Storefront/storefront/page/product-detail/index.html.twig */
class __TwigTemplate_5fe7861f25d3d8d7d09066e920592924c62f8f212ba1451d2f3920bc61653691 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_head' => [$this, 'block_base_head'],
            'base_content' => [$this, 'block_base_content'],
            'page_product_detail' => [$this, 'block_page_product_detail'],
            'page_product_detail_inner' => [$this, 'block_page_product_detail_inner'],
            'page_product_detail_content' => [$this, 'block_page_product_detail_content'],
            'page_product_detail_breadcrumb' => [$this, 'block_page_product_detail_breadcrumb'],
            'page_product_detail_headline' => [$this, 'block_page_product_detail_headline'],
            'page_product_detail_main' => [$this, 'block_page_product_detail_main'],
            'page_product_detail_media' => [$this, 'block_page_product_detail_media'],
            'page_product_detail_buy' => [$this, 'block_page_product_detail_buy'],
            'page_product_detail_tabs' => [$this, 'block_page_product_detail_tabs'],
            'page_product_detail_cross_selling' => [$this, 'block_page_product_detail_cross_selling'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/index.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/base.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_base_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_head"));

        // line 4
        echo "    ";
        $this->loadTemplate("@Storefront/storefront/page/product-detail/meta.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 4)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_base_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_content"));

        // line 8
        echo "    ";
        $this->displayBlock('page_product_detail', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_page_product_detail($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail"));

        // line 9
        echo "
        <div class=\"product-detail\"
             itemscope
             itemtype=\"https://schema.org/Product\">
            ";
        // line 13
        $this->displayBlock('page_product_detail_inner', $context, $blocks);
        // line 82
        echo "        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_page_product_detail_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_inner"));

        // line 14
        echo "                ";
        $this->displayBlock('page_product_detail_content', $context, $blocks);
        // line 67
        echo "
                ";
        // line 68
        $this->displayBlock('page_product_detail_tabs', $context, $blocks);
        // line 73
        echo "
                ";
        // line 74
        $this->displayBlock('page_product_detail_cross_selling', $context, $blocks);
        // line 81
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_page_product_detail_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_content"));

        // line 15
        echo "                    <div class=\"product-detail-content\">
                        ";
        // line 16
        $this->displayBlock('page_product_detail_breadcrumb', $context, $blocks);
        // line 26
        echo "                        ";
        $this->displayBlock('page_product_detail_headline', $context, $blocks);
        // line 31
        echo "
                        ";
        // line 32
        $context["mediaItems"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 32), "media", [], "any", false, false, false, 32), "media", [], "any", false, false, false, 32);
        // line 33
        echo "
                        ";
        // line 34
        $this->displayBlock('page_product_detail_main', $context, $blocks);
        // line 65
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_page_product_detail_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_breadcrumb"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_breadcrumb"));

        // line 17
        echo "                            ";
        @trigger_error("@deprecated tag:v6.4.0 - Breadcrumb will be handled by \"base_breadcrumb\" in \"storefront/base.html.twig\""." (\"@Storefront/storefront/page/product-detail/index.html.twig\" at line 17).", E_USER_DEPRECATED);
        // line 18
        echo "                            <div class=\"breadcrumb product-breadcrumb container\">
                                ";
        // line 19
        $this->loadTemplate("@Storefront/storefront/component/product/breadcrumb.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 19)->display(twig_to_array(["navigationTree" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 20
($context["page"] ?? null), "header", [], "any", false, false, false, 20), "navigation", [], "any", false, false, false, 20), "tree", [], "any", false, false, false, 20), "categoryTree" => twig_last($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 21
($context["page"] ?? null), "product", [], "any", false, false, false, 21), "categoryTree", [], "any", false, false, false, 21)), "product" => twig_get_attribute($this->env, $this->source,         // line 22
($context["page"] ?? null), "product", [], "any", false, false, false, 22)]));
        // line 24
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_page_product_detail_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_headline"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_headline"));

        // line 27
        echo "                            <div class=\"row align-items-center product-detail-headline\">
                                ";
        // line 28
        $this->loadTemplate("@Storefront/storefront/page/product-detail/headline.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 28)->display($context);
        // line 29
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_page_product_detail_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_main"));

        // line 35
        echo "                            <div class=\"row product-detail-main\">
                                ";
        // line 36
        $this->displayBlock('page_product_detail_media', $context, $blocks);
        // line 57
        echo "
                                ";
        // line 58
        $this->displayBlock('page_product_detail_buy', $context, $blocks);
        // line 63
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_page_product_detail_media($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_media"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_media"));

        // line 37
        echo "                                    <div class=\"col-lg-7 product-detail-media\">
                                        ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 38), "media", [], "any", false, false, false, 38)) {
            // line 39
            echo "                                            ";
            $this->loadTemplate("@Storefront/storefront/element/cms-element-image-gallery.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 39)->display(twig_array_merge($context, ["mediaItems" =>             // line 40
($context["mediaItems"] ?? null), "zoom" => true, "zoomModal" => true, "displayMode" => "contain", "gutter" => 5, "minHeight" => "430px", "navigationArrows" => "inside", "navigationDots" => "inside", "galleryPosition" => "left", "isProduct" => true, "fallbackImageTitle" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 50
($context["page"] ?? null), "product", [], "any", false, false, false, 50), "translated", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), "startIndexThumbnails" => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 51
($context["page"] ?? null), "product", [], "any", false, false, false, 51), "cover", [], "any", false, false, false, 51), "position", [], "any", false, false, false, 51) + 1), "startIndexSlider" => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 52
($context["page"] ?? null), "product", [], "any", false, false, false, 52), "cover", [], "any", false, false, false, 52), "position", [], "any", false, false, false, 52) + 1)]));
            // line 54
            echo "                                        ";
        }
        // line 55
        echo "                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_page_product_detail_buy($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy"));

        // line 59
        echo "                                    <div class=\"col-lg-5 product-detail-buy\">
                                        ";
        // line 60
        $this->loadTemplate("@Storefront/storefront/page/product-detail/buy-widget.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 60)->display($context);
        // line 61
        echo "                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_page_product_detail_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tabs"));

        // line 69
        echo "                    <div class=\"product-detail-tabs\">
                        ";
        // line 70
        $this->loadTemplate("@Storefront/storefront/page/product-detail/tabs.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 70)->display($context);
        // line 71
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_page_product_detail_cross_selling($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_cross_selling"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_cross_selling"));

        // line 75
        echo "                    <div class=\"product-detail-tabs product-detail-cross-selling\">
                        ";
        // line 76
        $this->loadTemplate("@Storefront/storefront/page/product-detail/cross-selling/tabs.html.twig", "@Storefront/storefront/page/product-detail/index.html.twig", 76)->display(twig_to_array(["crossSellings" => twig_get_attribute($this->env, $this->source,         // line 77
($context["page"] ?? null), "crossSellings", [], "any", false, false, false, 77)]));
        // line 79
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 79,  402 => 77,  401 => 76,  398 => 75,  388 => 74,  377 => 71,  375 => 70,  372 => 69,  362 => 68,  351 => 61,  349 => 60,  346 => 59,  336 => 58,  325 => 55,  322 => 54,  320 => 52,  319 => 51,  318 => 50,  317 => 40,  315 => 39,  313 => 38,  310 => 37,  300 => 36,  289 => 63,  287 => 58,  284 => 57,  282 => 36,  279 => 35,  269 => 34,  258 => 29,  256 => 28,  253 => 27,  243 => 26,  232 => 24,  230 => 22,  229 => 21,  228 => 20,  227 => 19,  224 => 18,  221 => 17,  211 => 16,  200 => 65,  198 => 34,  195 => 33,  193 => 32,  190 => 31,  187 => 26,  185 => 16,  182 => 15,  172 => 14,  162 => 81,  160 => 74,  157 => 73,  155 => 68,  152 => 67,  149 => 14,  139 => 13,  128 => 82,  126 => 13,  120 => 9,  100 => 8,  90 => 7,  79 => 4,  69 => 3,  46 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/base.html.twig' %}

{% block base_head %}
    {% sw_include '@Storefront/storefront/page/product-detail/meta.html.twig' %}
{% endblock %}

{% block base_content %}
    {% block page_product_detail %}

        <div class=\"product-detail\"
             itemscope
             itemtype=\"https://schema.org/Product\">
            {% block page_product_detail_inner %}
                {% block page_product_detail_content %}
                    <div class=\"product-detail-content\">
                        {% block page_product_detail_breadcrumb %}
                            {% deprecated '@deprecated tag:v6.4.0 - Breadcrumb will be handled by \"base_breadcrumb\" in \"storefront/base.html.twig\"' %}
                            <div class=\"breadcrumb product-breadcrumb container\">
                                {% sw_include '@Storefront/storefront/component/product/breadcrumb.html.twig' with {
                                    navigationTree: page.header.navigation.tree,
                                    categoryTree: page.product.categoryTree|last,
                                    product: page.product
                                } only %}
                            </div>
                        {% endblock %}
                        {% block page_product_detail_headline %}
                            <div class=\"row align-items-center product-detail-headline\">
                                {% sw_include '@Storefront/storefront/page/product-detail/headline.html.twig' %}
                            </div>
                        {% endblock %}

                        {% set mediaItems = page.product.media.media %}

                        {% block page_product_detail_main %}
                            <div class=\"row product-detail-main\">
                                {% block page_product_detail_media %}
                                    <div class=\"col-lg-7 product-detail-media\">
                                        {% if page.product.media %}
                                            {% sw_include '@Storefront/storefront/element/cms-element-image-gallery.html.twig' with {
                                                'mediaItems': mediaItems,
                                                'zoom': true,
                                                'zoomModal': true,
                                                'displayMode': 'contain',
                                                'gutter': 5,
                                                'minHeight': '430px',
                                                'navigationArrows': 'inside',
                                                'navigationDots': 'inside',
                                                'galleryPosition': 'left',
                                                'isProduct': true,
                                                'fallbackImageTitle': page.product.translated.name,
                                                'startIndexThumbnails': page.product.cover.position + 1,
                                                'startIndexSlider': page.product.cover.position + 1
                                            } %}
                                        {% endif %}
                                    </div>
                                {% endblock %}

                                {% block page_product_detail_buy %}
                                    <div class=\"col-lg-5 product-detail-buy\">
                                        {% sw_include '@Storefront/storefront/page/product-detail/buy-widget.html.twig' %}
                                    </div>
                                {% endblock %}
                            </div>
                        {% endblock %}
                    </div>
                {% endblock %}

                {% block page_product_detail_tabs %}
                    <div class=\"product-detail-tabs\">
                        {% sw_include '@Storefront/storefront/page/product-detail/tabs.html.twig' %}
                    </div>
                {% endblock %}

                {% block page_product_detail_cross_selling %}
                    <div class=\"product-detail-tabs product-detail-cross-selling\">
                        {% sw_include '@Storefront/storefront/page/product-detail/cross-selling/tabs.html.twig' with {
                            crossSellings: page.crossSellings
                        } only %}
                    </div>
                {% endblock %}
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/page/product-detail/index.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/index.html.twig");
    }
}
