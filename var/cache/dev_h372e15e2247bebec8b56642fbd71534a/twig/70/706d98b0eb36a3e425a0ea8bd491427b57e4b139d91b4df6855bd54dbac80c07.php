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

/* @Storefront/storefront/element/cms-element-category-navigation.html.twig */
class __TwigTemplate_96bc539253211d6472204d8af31f45e090875d3bbb87c7dc8a11dd18111e0c09 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-category-navigation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-category-navigation.html.twig"));

        // line 1
        echo "<div class=\"cms-element-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
    ";
        // line 2
        $context["navigationResult1"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 2), "navigation", [], "any", false, false, false, 2), "tree", [], "any", false, false, false, 2);
        // line 3
        echo "    ";
        $context["activeResult1"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 3), "navigation", [], "any", false, false, false, 3), "active", [], "any", false, false, false, 3);
        // line 4
        echo "    <div class=\"category-navigation-box\">
        ";
        // line 5
        $this->loadTemplate("@Storefront/storefront/layout/sidebar/category-navigation.html.twig", "@Storefront/storefront/element/cms-element-category-navigation.html.twig", 5)->display(twig_to_array(["navigationTree" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
($context["page"] ?? null), "header", [], "any", false, false, false, 6), "navigation", [], "any", false, false, false, 6), "tree", [], "any", false, false, false, 6), "activeResult" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 7
($context["page"] ?? null), "header", [], "any", false, false, false, 7), "navigation", [], "any", false, false, false, 7), "active", [], "any", false, false, false, 7)]));
        // line 9
        echo "    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-category-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 9,  58 => 7,  57 => 6,  56 => 5,  53 => 4,  50 => 3,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"cms-element-{{ element.type }}\">
    {% set navigationResult1 = page.header.navigation.tree %}
    {% set activeResult1 = page.header.navigation.active %}
    <div class=\"category-navigation-box\">
        {% sw_include '@Storefront/storefront/layout/sidebar/category-navigation.html.twig' with {
            navigationTree: page.header.navigation.tree,
            activeResult: page.header.navigation.active
        } only %}
    </div>
</div>
", "@Storefront/storefront/element/cms-element-category-navigation.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-category-navigation.html.twig");
    }
}
