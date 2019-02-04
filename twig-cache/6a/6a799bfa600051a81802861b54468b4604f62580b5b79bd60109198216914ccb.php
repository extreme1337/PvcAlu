<?php

/* UserManufacturerManagement/manufacturers.html */
class __TwigTemplate_fff1d18b3550e4bb1254f01d2278489a5842a4465a1f67234d36a171e0dd1a4b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "UserManufacturerManagement/manufacturers.html", 1);
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
        echo "user/manufacturers/add\" class=\"col-4 col-sm-4 col-md-4 text-center dash\">Dodaj novog proizvodjaca</a>
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/manufacturers/delete\" class=\"col-4 col-sm-4 col-md-4 text-center dash\">Obrisi proizvodjaca</a>
    </div>
    <h2 class=\"text-center\">Proizvodjaci:</h2>
    <div class=\"row\">
       
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["manufacturers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
            // line 12
            echo "           
                <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "user/manufacturers/edit/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", array()), "html", null, true);
            echo "\" class=\"col-12 col-sm-4 col-md-4 text-center dash\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", array()));
            echo "
                </a>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "UserManufacturerManagement/manufacturers.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 17,  67 => 14,  61 => 13,  58 => 12,  54 => 11,  46 => 6,  42 => 5,  38 => 4,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserManufacturerManagement/manufacturers.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\UserManufacturerManagement\\manufacturers.html");
    }
}
