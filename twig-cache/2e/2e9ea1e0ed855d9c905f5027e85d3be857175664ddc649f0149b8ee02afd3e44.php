<?php

/* UserCategoryManagement/categories.html */
class __TwigTemplate_a8678965138f994a57309f0aabba4e747c125e272a5756dd2e6b5e45c1ffa334 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "UserCategoryManagement/categories.html", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_global/index.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_main($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"container\">
    <div class=\"row\">
        <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/profile\" class=\"col-4 col-sm-4 col-md-4 text-center dash\">Nazad na Dashboard</a>
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/categories/add\" class=\"col-4 col-sm-4 col-md-4 text-center dash\">Dodaj novu kategoriju</a>
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/categories/delete\" class=\"col-4 col-sm-4 col-md-4 text-center dash\">Obrisi kategoriju</a>
    </div>

    <h2 class=\"text-center\">Kategorije:</h2>
<div class=\"row\">
        
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 13
            echo "           
                <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "user/categories/edit/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category_id", array()), "html", null, true);
            echo "\" class=\"col-12 col-sm-6 col-md-6 text-center dash\">
                    ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()));
            echo "
                </a> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "UserCategoryManagement/categories.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 17,  68 => 15,  62 => 14,  59 => 13,  55 => 12,  46 => 6,  42 => 5,  38 => 4,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserCategoryManagement/categories.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\UserCategoryManagement\\categories.html");
    }
}
