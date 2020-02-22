<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_b93860bb061e40defb67bfface45f335e7c6d6391e451aa198c64b68ce250528 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Product/CatalogPage:catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 1);
        $this->blocks = [
            'product_catalog_filters' => [$this, 'block_product_catalog_filters'],
            'product_catalog_form' => [$this, 'block_product_catalog_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Product/CatalogPage:catalog.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_product_catalog_filters($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_filters"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_filters"));

        // line 4
        echo "    <h1>Bienvenus !!!</h1>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_product_catalog_form($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form"));

        // line 8
        echo "    ";
        echo twig_include($this->env, $context, "@Product/CatalogPage/Forms/form_products.html.twig", ["limit" =>         // line 9
($context["limit"] ?? $this->getContext($context, "limit")), "orderBy" =>         // line 10
($context["orderBy"] ?? $this->getContext($context, "orderBy")), "offset" =>         // line 11
($context["offset"] ?? $this->getContext($context, "offset")), "sortOrder" =>         // line 12
($context["sortOrder"] ?? $this->getContext($context, "sortOrder")), "filter_category" =>         // line 13
($context["filter_category"] ?? $this->getContext($context, "filter_category")), "filter_column_id_product" =>         // line 14
($context["filter_column_id_product"] ?? $this->getContext($context, "filter_column_id_product")), "filter_column_name" =>         // line 15
($context["filter_column_name"] ?? $this->getContext($context, "filter_column_name")), "filter_column_reference" =>         // line 16
($context["filter_column_reference"] ?? $this->getContext($context, "filter_column_reference")), "filter_column_name_category" =>         // line 17
($context["filter_column_name_category"] ?? $this->getContext($context, "filter_column_name_category")), "filter_column_price" =>         // line 18
($context["filter_column_price"] ?? $this->getContext($context, "filter_column_price")), "filter_column_sav_quantity" =>         // line 19
($context["filter_column_sav_quantity"] ?? $this->getContext($context, "filter_column_sav_quantity")), "filter_column_active" =>         // line 20
($context["filter_column_active"] ?? $this->getContext($context, "filter_column_active")), "has_category_filter" =>         // line 21
($context["has_category_filter"] ?? $this->getContext($context, "has_category_filter")), "activate_drag_and_drop" =>         // line 22
($context["activate_drag_and_drop"] ?? $this->getContext($context, "activate_drag_and_drop")), "products" =>         // line 23
($context["products"] ?? $this->getContext($context, "products")), "last_sql" =>         // line 24
($context["last_sql"] ?? $this->getContext($context, "last_sql")), "product_count_filtered" =>         // line 25
($context["product_count_filtered"] ?? $this->getContext($context, "product_count_filtered")), "pagination_parameters" =>         // line 26
($context["pagination_parameters"] ?? $this->getContext($context, "pagination_parameters")), "pagination_limit_choices" =>         // line 27
($context["pagination_limit_choices"] ?? $this->getContext($context, "pagination_limit_choices"))]);
        // line 29
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 29,  101 => 27,  100 => 26,  99 => 25,  98 => 24,  97 => 23,  96 => 22,  95 => 21,  94 => 20,  93 => 19,  92 => 18,  91 => 17,  90 => 16,  89 => 15,  88 => 14,  87 => 13,  86 => 12,  85 => 11,  84 => 10,  83 => 9,  81 => 8,  72 => 7,  61 => 4,  52 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'PrestaShopBundle:Admin/Product/CatalogPage:catalog.html.twig' %}

{% block product_catalog_filters %}
    <h1>Bienvenus !!!</h1>
{% endblock %}

{% block product_catalog_form %}
    {{ include('@Product/CatalogPage/Forms/form_products.html.twig', {
        'limit': limit,
        'orderBy': orderBy,
        'offset': offset,
        'sortOrder': sortOrder,
        'filter_category': filter_category,
        'filter_column_id_product': filter_column_id_product,
        'filter_column_name': filter_column_name,
        'filter_column_reference': filter_column_reference,
        'filter_column_name_category': filter_column_name_category,
        'filter_column_price': filter_column_price,
        'filter_column_sav_quantity': filter_column_sav_quantity,
        'filter_column_active': filter_column_active,
        'has_category_filter': has_category_filter,
        'activate_drag_and_drop': activate_drag_and_drop,
        'products': products,
        'last_sql': last_sql,
        'product_count_filtered': product_count_filtered,
        'pagination_parameters': pagination_parameters,
        'pagination_limit_choices': pagination_limit_choices
    })
    }}
{% endblock %}", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/Users/jeanyvesfournet/Desktop/project/preprod_test/modules/Modolo/views/PrestaShop/Admin/Product/CatalogPage/catalog.html.twig");
    }
}
