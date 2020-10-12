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

/* @Storefront/storefront/page/product-detail/buy-widget.html.twig */
class __TwigTemplate_5405017fa239b8eb06ba9b4ce4fd4c000f34d520ffc271f54d062d9f4582f8a4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_product_detail_buy_inner' => [$this, 'block_page_product_detail_buy_inner'],
            'page_product_detail_rich_snippets' => [$this, 'block_page_product_detail_rich_snippets'],
            'page_product_detail_rich_snippets_brand' => [$this, 'block_page_product_detail_rich_snippets_brand'],
            'page_product_detail_rich_snippets_gtin13' => [$this, 'block_page_product_detail_rich_snippets_gtin13'],
            'page_product_detail_rich_snippets_mpn' => [$this, 'block_page_product_detail_rich_snippets_mpn'],
            'page_product_detail_rich_snippets_weight' => [$this, 'block_page_product_detail_rich_snippets_weight'],
            'page_product_detail_rich_snippets_height' => [$this, 'block_page_product_detail_rich_snippets_height'],
            'page_product_detail_rich_snippets_width' => [$this, 'block_page_product_detail_rich_snippets_width'],
            'page_product_detail_rich_snippets_depth' => [$this, 'block_page_product_detail_rich_snippets_depth'],
            'page_product_detail_rich_snippets_release_date' => [$this, 'block_page_product_detail_rich_snippets_release_date'],
            'page_product_detail_not_available' => [$this, 'block_page_product_detail_not_available'],
            'page_product_detail_buy_container' => [$this, 'block_page_product_detail_buy_container'],
            'page_product_detail_data' => [$this, 'block_page_product_detail_data'],
            'page_product_detail_data_rich_snippet_url' => [$this, 'block_page_product_detail_data_rich_snippet_url'],
            'page_product_detail_data_rich_snippet_price_range' => [$this, 'block_page_product_detail_data_rich_snippet_price_range'],
            'page_product_detail_data_rich_snippet_price_currency' => [$this, 'block_page_product_detail_data_rich_snippet_price_currency'],
            'page_product_detail_price' => [$this, 'block_page_product_detail_price'],
            'page_product_detail_tax' => [$this, 'block_page_product_detail_tax'],
            'page_product_detail_tax_link' => [$this, 'block_page_product_detail_tax_link'],
            'page_product_detail_reviews' => [$this, 'block_page_product_detail_reviews'],
            'page_product_detail_delivery_informations' => [$this, 'block_page_product_detail_delivery_informations'],
            'page_product_detail_configurator_include' => [$this, 'block_page_product_detail_configurator_include'],
            'page_product_detail_buy_form' => [$this, 'block_page_product_detail_buy_form'],
            'page_product_detail_ordernumber_container' => [$this, 'block_page_product_detail_ordernumber_container'],
            'page_product_detail_ordernumber_label' => [$this, 'block_page_product_detail_ordernumber_label'],
            'page_product_detail_ordernumber' => [$this, 'block_page_product_detail_ordernumber'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/buy-widget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/product-detail/buy-widget.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('page_product_detail_buy_inner', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_page_product_detail_buy_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_inner"));

        // line 3
        echo "    <div class=\"product-detail-buy js-magnifier-zoom-image-container\">
        ";
        // line 4
        $this->displayBlock('page_product_detail_rich_snippets', $context, $blocks);
        // line 57
        echo "
        ";
        // line 58
        $this->displayBlock('page_product_detail_not_available', $context, $blocks);
        // line 61
        echo "
        ";
        // line 62
        $this->displayBlock('page_product_detail_buy_container', $context, $blocks);
        // line 176
        echo "
        ";
        // line 177
        $this->displayBlock('page_product_detail_ordernumber_container', $context, $blocks);
        // line 197
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_page_product_detail_rich_snippets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets"));

        // line 5
        echo "            ";
        $this->displayBlock('page_product_detail_rich_snippets_brand', $context, $blocks);
        // line 11
        echo "
            ";
        // line 12
        $this->displayBlock('page_product_detail_rich_snippets_gtin13', $context, $blocks);
        // line 18
        echo "
            ";
        // line 19
        $this->displayBlock('page_product_detail_rich_snippets_mpn', $context, $blocks);
        // line 23
        echo "
            ";
        // line 24
        $this->displayBlock('page_product_detail_rich_snippets_weight', $context, $blocks);
        // line 30
        echo "
            ";
        // line 31
        $this->displayBlock('page_product_detail_rich_snippets_height', $context, $blocks);
        // line 37
        echo "
            ";
        // line 38
        $this->displayBlock('page_product_detail_rich_snippets_width', $context, $blocks);
        // line 44
        echo "
            ";
        // line 45
        $this->displayBlock('page_product_detail_rich_snippets_depth', $context, $blocks);
        // line 51
        echo "
            ";
        // line 52
        $this->displayBlock('page_product_detail_rich_snippets_release_date', $context, $blocks);
        // line 56
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_page_product_detail_rich_snippets_brand($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_brand"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_brand"));

        // line 6
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 6), "manufacturer", [], "any", false, false, false, 6)) {
            // line 7
            echo "                    <meta itemprop=\"brand\"
                          content=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 8), "manufacturer", [], "any", false, false, false, 8), "translated", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8), "html", null, true);
            echo "\"/>
                ";
        }
        // line 10
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_page_product_detail_rich_snippets_gtin13($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_gtin13"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_gtin13"));

        // line 13
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 13), "ean", [], "any", false, false, false, 13)) {
            // line 14
            echo "                    <meta itemprop=\"gtin13\"
                          content=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 15), "ean", [], "any", false, false, false, 15), "html", null, true);
            echo "\"/>
                ";
        }
        // line 17
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_page_product_detail_rich_snippets_mpn($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_mpn"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_mpn"));

        // line 20
        echo "                <meta itemprop=\"mpn\"
                      content=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 21), "productNumber", [], "any", false, false, false, 21), "html", null, true);
        echo "\"/>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_page_product_detail_rich_snippets_weight($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_weight"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_weight"));

        // line 25
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 25), "weight", [], "any", false, false, false, 25)) {
            // line 26
            echo "                    <meta itemprop=\"weight\"
                          content=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 27), "weight", [], "any", false, false, false, 27), "html", null, true);
            echo " kg\"/>
                ";
        }
        // line 29
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_page_product_detail_rich_snippets_height($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_height"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_height"));

        // line 32
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 32), "height", [], "any", false, false, false, 32)) {
            // line 33
            echo "                    <meta itemprop=\"height\"
                          content=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 34), "height", [], "any", false, false, false, 34), "html", null, true);
            echo " mm\"/>
                ";
        }
        // line 36
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_page_product_detail_rich_snippets_width($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_width"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_width"));

        // line 39
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 39), "width", [], "any", false, false, false, 39)) {
            // line 40
            echo "                    <meta itemprop=\"width\"
                          content=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 41), "width", [], "any", false, false, false, 41), "html", null, true);
            echo " mm\"/>
                ";
        }
        // line 43
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_page_product_detail_rich_snippets_depth($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_depth"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_depth"));

        // line 46
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 46), "length", [], "any", false, false, false, 46)) {
            // line 47
            echo "                    <meta itemprop=\"depth\"
                          content=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 48), "length", [], "any", false, false, false, 48), "html", null, true);
            echo " mm\"/>
                ";
        }
        // line 50
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_page_product_detail_rich_snippets_release_date($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_release_date"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_rich_snippets_release_date"));

        // line 53
        echo "                <meta itemprop=\"releaseDate\"
                      content=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 54), "releaseDate", [], "any", false, false, false, 54), "medium", "Y-MM-dd", null, "gregorian", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 54), "locale", [], "any", false, false, false, 54)), "html", null, true);
        echo "\"/>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_page_product_detail_not_available($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_not_available"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_not_available"));

        // line 59
        echo "            ";
        // line 60
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_page_product_detail_buy_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_container"));

        // line 63
        echo "            <div itemprop=\"offers\"
                 itemscope
                 itemtype=\"";
        // line 65
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 65), "calculatedPrices", [], "any", false, false, false, 65)) > 1)) {
            echo "http://schema.org/AggregateOffer";
        } else {
            echo "http://schema.org/Offer";
        }
        echo "\">
                ";
        // line 66
        $this->displayBlock('page_product_detail_data', $context, $blocks);
        // line 158
        echo "
                ";
        // line 159
        $this->displayBlock('page_product_detail_configurator_include', $context, $blocks);
        // line 166
        echo "
                ";
        // line 167
        $this->displayBlock('page_product_detail_buy_form', $context, $blocks);
        // line 174
        echo "            </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_page_product_detail_data($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data"));

        // line 67
        echo "                    ";
        $this->displayBlock('page_product_detail_data_rich_snippet_url', $context, $blocks);
        // line 71
        echo "
                    ";
        // line 72
        $this->displayBlock('page_product_detail_data_rich_snippet_price_range', $context, $blocks);
        // line 91
        echo "
                    ";
        // line 92
        $this->displayBlock('page_product_detail_data_rich_snippet_price_currency', $context, $blocks);
        // line 96
        echo "
                    ";
        // line 97
        $this->displayBlock('page_product_detail_price', $context, $blocks);
        // line 102
        echo "
                    ";
        // line 103
        $this->displayBlock('page_product_detail_tax', $context, $blocks);
        // line 124
        echo "
                    ";
        // line 125
        $context["remoteClickOptions"] = ["selector" => "#review-tab", "scrollToElement" => true];
        // line 129
        echo "
                    ";
        // line 130
        $this->displayBlock('page_product_detail_reviews', $context, $blocks);
        // line 151
        echo "
                    ";
        // line 152
        $this->displayBlock('page_product_detail_delivery_informations', $context, $blocks);
        // line 157
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_page_product_detail_data_rich_snippet_url($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data_rich_snippet_url"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data_rich_snippet_url"));

        // line 68
        echo "                        <meta itemprop=\"url\"
                              content=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69)]), "html", null, true);
        echo "\"/>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_page_product_detail_data_rich_snippet_price_range($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data_rich_snippet_price_range"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data_rich_snippet_price_range"));

        // line 73
        echo "                        ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 73), "calculatedPrices", [], "any", false, false, false, 73)) > 1)) {
            // line 74
            echo "                            ";
            $context["lowestPrice"] = false;
            // line 75
            echo "                            ";
            $context["highestPrice"] = false;
            // line 76
            echo "
                            ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 77), "calculatedPrices", [], "any", false, false, false, 77));
            foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
                // line 78
                echo "                                ";
                if (( !($context["lowestPrice"] ?? null) || (twig_get_attribute($this->env, $this->source, $context["price"], "unitPrice", [], "any", false, false, false, 78) < ($context["lowestPrice"] ?? null)))) {
                    // line 79
                    echo "                                    ";
                    $context["lowestPrice"] = twig_get_attribute($this->env, $this->source, $context["price"], "unitPrice", [], "any", false, false, false, 79);
                    // line 80
                    echo "                                ";
                }
                // line 81
                echo "                                ";
                if (( !($context["highestPrice"] ?? null) || (twig_get_attribute($this->env, $this->source, $context["price"], "unitPrice", [], "any", false, false, false, 81) > ($context["highestPrice"] ?? null)))) {
                    // line 82
                    echo "                                    ";
                    $context["highestPrice"] = twig_get_attribute($this->env, $this->source, $context["price"], "unitPrice", [], "any", false, false, false, 82);
                    // line 83
                    echo "                                ";
                }
                // line 84
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "
                            <meta itemprop=\"lowPrice\" content=\"";
            // line 86
            echo twig_escape_filter($this->env, ($context["lowestPrice"] ?? null), "html", null, true);
            echo "\"/>
                            <meta itemprop=\"highPrice\" content=\"";
            // line 87
            echo twig_escape_filter($this->env, ($context["highestPrice"] ?? null), "html", null, true);
            echo "\"/>
                            <meta itemprop=\"offerCount\" content=\"";
            // line 88
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 88), "calculatedPrices", [], "any", false, false, false, 88)), "html", null, true);
            echo "\"/>
                        ";
        }
        // line 90
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_page_product_detail_data_rich_snippet_price_currency($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data_rich_snippet_price_currency"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_data_rich_snippet_price_currency"));

        // line 93
        echo "                        <meta itemprop=\"priceCurrency\"
                              content=\"";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "currency", [], "any", false, false, false, 94), "translated", [], "any", false, false, false, 94), "shortName", [], "any", false, false, false, 94), "html", null, true);
        echo "\"/>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 97
    public function block_page_product_detail_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_price"));

        // line 98
        echo "                        <div class=\"product-detail-price-container\">
                            ";
        // line 99
        $this->loadTemplate("@Storefront/storefront/page/product-detail/buy-widget-price.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 99)->display($context);
        // line 100
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 103
    public function block_page_product_detail_tax($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tax"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tax"));

        // line 104
        echo "                        <div class=\"product-detail-tax-container\">
                            ";
        // line 105
        if ((twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "taxState", [], "any", false, false, false, 105) == "gross")) {
            // line 106
            echo "                                ";
            $context["taxText"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.grossTaxInformation"));
            // line 107
            echo "                            ";
        } else {
            // line 108
            echo "                                ";
            $context["taxText"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.netTaxInformation"));
            // line 109
            echo "                            ";
        }
        // line 110
        echo "
                            <p class=\"product-detail-tax\">
                                ";
        // line 112
        $this->displayBlock('page_product_detail_tax_link', $context, $blocks);
        // line 121
        echo "                            </p>
                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_page_product_detail_tax_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tax_link"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_tax_link"));

        // line 113
        echo "                                    <a class=\"product-detail-tax-link\"
                                       href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 114), "core", [], "any", false, false, false, 114), "basicInformation", [], "any", false, false, false, 114), "shippingPaymentInfoPage", [], "any", false, false, false, 114)]), "html", null, true);
        echo "\"
                                       title=\"";
        // line 115
        echo twig_escape_filter($this->env, ($context["taxText"] ?? null), "html", null, true);
        echo "\"
                                       data-toggle=\"modal\"
                                       data-url=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 117), "core", [], "any", false, false, false, 117), "basicInformation", [], "any", false, false, false, 117), "shippingPaymentInfoPage", [], "any", false, false, false, 117)]), "html", null, true);
        echo "\">
                                        ";
        // line 118
        echo twig_escape_filter($this->env, ($context["taxText"] ?? null), "html", null, true);
        echo "
                                    </a>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 130
    public function block_page_product_detail_reviews($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_reviews"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_reviews"));

        // line 131
        echo "                        ";
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 131), "ratingAverage", [], "any", false, false, false, 131) > 0) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "reviews", [], "any", false, false, false, 131), "totalReviews", [], "any", false, false, false, 131) > 0)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 131), "core", [], "any", false, false, false, 131), "listing", [], "any", false, false, false, 131), "showReview", [], "any", false, false, false, 131))) {
            // line 132
            echo "                            <div class=\"product-detail-reviews\">

                                ";
            // line 134
            $this->loadTemplate("@Storefront/storefront/component/review/rating.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 134)->display(twig_array_merge($context, ["points" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 135
($context["page"] ?? null), "product", [], "any", false, false, false, 135), "ratingAverage", [], "any", false, false, false, 135), "style" => "text-primary"]));
            // line 138
            echo "                                <a data-toggle=\"tab\"
                                   class=\"product-detail-reviews-link\"
                                   data-offcanvas-tabs=\"true\"
                                   data-remote-click=\"true\"
                                   data-remote-click-options='";
            // line 142
            echo twig_escape_filter($this->env, json_encode(($context["remoteClickOptions"] ?? null)), "html", null, true);
            echo "'
                                   href=\"#review-tab-pane\"
                                   aria-controls=\"review-tab-pane\">
                                    ";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "reviews", [], "any", false, false, false, 145), "totalReviews", [], "any", false, false, false, 145), "html", null, true);
            echo "
                                    ";
            // line 146
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.reviewLinkText", ["%count%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "reviews", [], "any", false, false, false, 146), "totalReviews", [], "any", false, false, false, 146)]));
            echo "
                                </a>
                            </div>
                        ";
        }
        // line 150
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 152
    public function block_page_product_detail_delivery_informations($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_delivery_informations"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_delivery_informations"));

        // line 153
        echo "                        <div class=\"product-detail-delivery-information\">
                            ";
        // line 154
        $this->loadTemplate("@Storefront/storefront/component/delivery-information.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 154)->display($context);
        // line 155
        echo "                        </div>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 159
    public function block_page_product_detail_configurator_include($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_include"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_configurator_include"));

        // line 160
        echo "                    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 160), "parentId", [], "any", false, false, false, 160) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "configuratorSettings", [], "any", false, false, false, 160)) > 0))) {
            // line 161
            echo "                        <div class=\"product-detail-configurator-container\">
                            ";
            // line 162
            $this->loadTemplate("@Storefront/storefront/page/product-detail/configurator.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 162)->display($context);
            // line 163
            echo "                        </div>
                    ";
        }
        // line 165
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 167
    public function block_page_product_detail_buy_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_buy_form"));

        // line 168
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 168), "active", [], "any", false, false, false, 168)) {
            // line 169
            echo "                        <div class=\"product-detail-form-container\">
                            ";
            // line 170
            $this->loadTemplate("@Storefront/storefront/page/product-detail/buy-widget-form.html.twig", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", 170)->display($context);
            // line 171
            echo "                        </div>
                    ";
        }
        // line 173
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 177
    public function block_page_product_detail_ordernumber_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_ordernumber_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_ordernumber_container"));

        // line 178
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 178), "productNumber", [], "any", false, false, false, 178)) {
            // line 179
            echo "                <div class=\"product-detail-ordernumber-container\">
                    ";
            // line 180
            $this->displayBlock('page_product_detail_ordernumber_label', $context, $blocks);
            // line 185
            echo "
                    ";
            // line 186
            $this->displayBlock('page_product_detail_ordernumber', $context, $blocks);
            // line 194
            echo "                </div>
            ";
        }
        // line 196
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 180
    public function block_page_product_detail_ordernumber_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_ordernumber_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_ordernumber_label"));

        // line 181
        echo "                        <span class=\"product-detail-ordernumber-label\">
                            ";
        // line 182
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detail.productNumberLabel"));
        echo "
                        </span>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 186
    public function block_page_product_detail_ordernumber($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_ordernumber"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_product_detail_ordernumber"));

        // line 187
        echo "                        <meta itemprop=\"productID\"
                              content=\"";
        // line 188
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 188), "id", [], "any", false, false, false, 188), "html", null, true);
        echo "\"/>
                        <span class=\"product-detail-ordernumber\"
                              itemprop=\"sku\">
                            ";
        // line 191
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "product", [], "any", false, false, false, 191), "productNumber", [], "any", false, false, false, 191), "html", null, true);
        echo "
                        </span>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/product-detail/buy-widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1002 => 191,  996 => 188,  993 => 187,  983 => 186,  970 => 182,  967 => 181,  957 => 180,  947 => 196,  943 => 194,  941 => 186,  938 => 185,  936 => 180,  933 => 179,  930 => 178,  920 => 177,  910 => 173,  906 => 171,  904 => 170,  901 => 169,  898 => 168,  888 => 167,  878 => 165,  874 => 163,  872 => 162,  869 => 161,  866 => 160,  856 => 159,  845 => 155,  843 => 154,  840 => 153,  830 => 152,  820 => 150,  813 => 146,  809 => 145,  803 => 142,  797 => 138,  795 => 135,  794 => 134,  790 => 132,  787 => 131,  777 => 130,  764 => 118,  760 => 117,  755 => 115,  751 => 114,  748 => 113,  738 => 112,  726 => 121,  724 => 112,  720 => 110,  717 => 109,  714 => 108,  711 => 107,  708 => 106,  706 => 105,  703 => 104,  693 => 103,  682 => 100,  680 => 99,  677 => 98,  667 => 97,  655 => 94,  652 => 93,  642 => 92,  632 => 90,  627 => 88,  623 => 87,  619 => 86,  616 => 85,  610 => 84,  607 => 83,  604 => 82,  601 => 81,  598 => 80,  595 => 79,  592 => 78,  588 => 77,  585 => 76,  582 => 75,  579 => 74,  576 => 73,  566 => 72,  554 => 69,  551 => 68,  541 => 67,  531 => 157,  529 => 152,  526 => 151,  524 => 130,  521 => 129,  519 => 125,  516 => 124,  514 => 103,  511 => 102,  509 => 97,  506 => 96,  504 => 92,  501 => 91,  499 => 72,  496 => 71,  493 => 67,  483 => 66,  472 => 174,  470 => 167,  467 => 166,  465 => 159,  462 => 158,  460 => 66,  452 => 65,  448 => 63,  438 => 62,  428 => 60,  426 => 59,  416 => 58,  404 => 54,  401 => 53,  391 => 52,  381 => 50,  376 => 48,  373 => 47,  370 => 46,  360 => 45,  350 => 43,  345 => 41,  342 => 40,  339 => 39,  329 => 38,  319 => 36,  314 => 34,  311 => 33,  308 => 32,  298 => 31,  288 => 29,  283 => 27,  280 => 26,  277 => 25,  267 => 24,  255 => 21,  252 => 20,  242 => 19,  232 => 17,  227 => 15,  224 => 14,  221 => 13,  211 => 12,  201 => 10,  196 => 8,  193 => 7,  190 => 6,  180 => 5,  170 => 56,  168 => 52,  165 => 51,  163 => 45,  160 => 44,  158 => 38,  155 => 37,  153 => 31,  150 => 30,  148 => 24,  145 => 23,  143 => 19,  140 => 18,  138 => 12,  135 => 11,  132 => 5,  122 => 4,  111 => 197,  109 => 177,  106 => 176,  104 => 62,  101 => 61,  99 => 58,  96 => 57,  94 => 4,  91 => 3,  72 => 2,  69 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block page_product_detail_buy_inner %}
    <div class=\"product-detail-buy js-magnifier-zoom-image-container\">
        {% block page_product_detail_rich_snippets %}
            {% block page_product_detail_rich_snippets_brand %}
                {% if page.product.manufacturer %}
                    <meta itemprop=\"brand\"
                          content=\"{{ page.product.manufacturer.translated.name }}\"/>
                {% endif %}
            {% endblock %}

            {% block page_product_detail_rich_snippets_gtin13 %}
                {% if page.product.ean %}
                    <meta itemprop=\"gtin13\"
                          content=\"{{ page.product.ean }}\"/>
                {% endif %}
            {% endblock %}

            {% block page_product_detail_rich_snippets_mpn %}
                <meta itemprop=\"mpn\"
                      content=\"{{ page.product.productNumber }}\"/>
            {% endblock %}

            {% block page_product_detail_rich_snippets_weight %}
                {% if page.product.weight %}
                    <meta itemprop=\"weight\"
                          content=\"{{ page.product.weight }} kg\"/>
                {% endif %}
            {% endblock %}

            {% block page_product_detail_rich_snippets_height %}
                {% if page.product.height %}
                    <meta itemprop=\"height\"
                          content=\"{{ page.product.height }} mm\"/>
                {% endif %}
            {% endblock %}

            {% block page_product_detail_rich_snippets_width %}
                {% if page.product.width %}
                    <meta itemprop=\"width\"
                          content=\"{{ page.product.width }} mm\"/>
                {% endif %}
            {% endblock %}

            {% block page_product_detail_rich_snippets_depth %}
                {% if page.product.length %}
                    <meta itemprop=\"depth\"
                          content=\"{{ page.product.length }} mm\"/>
                {% endif %}
            {% endblock %}

            {% block page_product_detail_rich_snippets_release_date %}
                <meta itemprop=\"releaseDate\"
                      content=\"{{ page.product.releaseDate|format_date(pattern=\"Y-MM-dd\", locale=app.request.locale) }}\"/>
            {% endblock %}
        {% endblock %}

        {% block page_product_detail_not_available %}
            {#TODO: NEXT-2784 - product not available message#}
        {% endblock %}

        {% block page_product_detail_buy_container %}
            <div itemprop=\"offers\"
                 itemscope
                 itemtype=\"{% if page.product.calculatedPrices|length > 1 %}http://schema.org/AggregateOffer{% else %}http://schema.org/Offer{% endif %}\">
                {% block page_product_detail_data %}
                    {% block page_product_detail_data_rich_snippet_url %}
                        <meta itemprop=\"url\"
                              content=\"{{ seoUrl('frontend.detail.page', { productId: page.product.id }) }}\"/>
                    {% endblock %}

                    {% block page_product_detail_data_rich_snippet_price_range %}
                        {% if page.product.calculatedPrices|length > 1 %}
                            {% set lowestPrice = false %}
                            {% set highestPrice = false %}

                            {% for price in page.product.calculatedPrices %}
                                {% if not lowestPrice or price.unitPrice < lowestPrice %}
                                    {% set lowestPrice = price.unitPrice %}
                                {% endif %}
                                {% if not highestPrice or price.unitPrice > highestPrice %}
                                    {% set highestPrice = price.unitPrice %}
                                {% endif %}
                            {% endfor %}

                            <meta itemprop=\"lowPrice\" content=\"{{ lowestPrice }}\"/>
                            <meta itemprop=\"highPrice\" content=\"{{ highestPrice }}\"/>
                            <meta itemprop=\"offerCount\" content=\"{{ page.product.calculatedPrices|length }}\"/>
                        {% endif %}
                    {% endblock %}

                    {% block page_product_detail_data_rich_snippet_price_currency %}
                        <meta itemprop=\"priceCurrency\"
                              content=\"{{ context.currency.translated.shortName }}\"/>
                    {% endblock %}

                    {% block page_product_detail_price %}
                        <div class=\"product-detail-price-container\">
                            {% sw_include '@Storefront/storefront/page/product-detail/buy-widget-price.html.twig' %}
                        </div>
                    {% endblock %}

                    {% block page_product_detail_tax %}
                        <div class=\"product-detail-tax-container\">
                            {% if context.taxState == \"gross\" %}
                                {% set taxText = \"general.grossTaxInformation\"|trans|sw_sanitize %}
                            {% else %}
                                {% set taxText = \"general.netTaxInformation\"|trans|sw_sanitize %}
                            {% endif %}

                            <p class=\"product-detail-tax\">
                                {% block page_product_detail_tax_link %}
                                    <a class=\"product-detail-tax-link\"
                                       href=\"{{ path('frontend.cms.page',{ id: shopware.config.core.basicInformation.shippingPaymentInfoPage }) }}\"
                                       title=\"{{ taxText }}\"
                                       data-toggle=\"modal\"
                                       data-url=\"{{ path('frontend.cms.page',{ id: shopware.config.core.basicInformation.shippingPaymentInfoPage }) }}\">
                                        {{ taxText }}
                                    </a>
                                {% endblock %}
                            </p>
                        </div>
                    {% endblock %}

                    {% set remoteClickOptions = {
                        selector: \"#review-tab\",
                        scrollToElement: true
                    } %}

                    {% block page_product_detail_reviews %}
                        {% if page.product.ratingAverage > 0 and page.reviews.totalReviews > 0 and shopware.config.core.listing.showReview %}
                            <div class=\"product-detail-reviews\">

                                {% sw_include '@Storefront/storefront/component/review/rating.html.twig' with {
                                    points: page.product.ratingAverage,
                                    style: 'text-primary'
                                } %}
                                <a data-toggle=\"tab\"
                                   class=\"product-detail-reviews-link\"
                                   data-offcanvas-tabs=\"true\"
                                   data-remote-click=\"true\"
                                   data-remote-click-options='{{ remoteClickOptions|json_encode }}'
                                   href=\"#review-tab-pane\"
                                   aria-controls=\"review-tab-pane\">
                                    {{ page.reviews.totalReviews }}
                                    {{ \"detail.reviewLinkText\"|trans({'%count%': page.reviews.totalReviews})|sw_sanitize }}
                                </a>
                            </div>
                        {% endif %}
                    {% endblock %}

                    {% block page_product_detail_delivery_informations %}
                        <div class=\"product-detail-delivery-information\">
                            {% sw_include '@Storefront/storefront/component/delivery-information.html.twig' %}
                        </div>
                    {% endblock %}
                {% endblock %}

                {% block page_product_detail_configurator_include %}
                    {% if page.product.parentId and page.configuratorSettings|length > 0 %}
                        <div class=\"product-detail-configurator-container\">
                            {% sw_include '@Storefront/storefront/page/product-detail/configurator.html.twig' %}
                        </div>
                    {% endif %}
                {% endblock %}

                {% block page_product_detail_buy_form %}
                    {% if page.product.active %}
                        <div class=\"product-detail-form-container\">
                            {% sw_include '@Storefront/storefront/page/product-detail/buy-widget-form.html.twig' %}
                        </div>
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}

        {% block page_product_detail_ordernumber_container %}
            {% if page.product.productNumber %}
                <div class=\"product-detail-ordernumber-container\">
                    {% block page_product_detail_ordernumber_label %}
                        <span class=\"product-detail-ordernumber-label\">
                            {{ \"detail.productNumberLabel\"|trans|sw_sanitize }}
                        </span>
                    {% endblock %}

                    {% block page_product_detail_ordernumber %}
                        <meta itemprop=\"productID\"
                              content=\"{{ page.product.id }}\"/>
                        <span class=\"product-detail-ordernumber\"
                              itemprop=\"sku\">
                            {{ page.product.productNumber }}
                        </span>
                    {% endblock %}
                </div>
            {% endif %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/page/product-detail/buy-widget.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/page/product-detail/buy-widget.html.twig");
    }
}
