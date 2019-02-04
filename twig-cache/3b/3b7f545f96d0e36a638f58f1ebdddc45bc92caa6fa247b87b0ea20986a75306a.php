<?php

/* UserProfileManagement/getEdit.html */
class __TwigTemplate_47f80d8278bbcf142a4ad289ef8f6b5c305e78adffcb516c076dc341ef1721a4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "UserProfileManagement/getEdit.html", 1);
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
        echo "user/profiles\" class=\"col-4 col-sm-4 col-md-4 text-center dash\">Prikazi sve profile &nbsp;&nbsp;&nbsp;</a>
            <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/profiles/add\" class=\"col-4 col-sm-4 col-md-4 text-center dash\">Dodaj novi profil</a>
        </div>
        <h2 class=\"text-center\">Izmena profila: </h2>
        <form class=\"profile-form\" method=\"POST\" enctype=\"multipart/form-data\">
            <div>
                <label for=\"name\">Naziv: </label>
                <input type=\"text\" id=\"name\" name=\"name\" required class=\"form-control\" pattern=\".*[^\\s]{3,}.*\">
            </div>
            <div class=\"form-group\">
                <label for=\"picture\">Slika: </label>
                <input type=\"file\" id=\"picture\" class=\"form-control\" name=\"picture\" accept=\"image/jpeg\">
            </div>
            <div>
                <label for=\"price_per_unit_area\">Cena po povrsini: </label>
                <input type=\"number\" min=\"1\" id=\"price_per_unit_area\" name=\"price_per_unit_area\" required class=\"form-control\">
            </div>
            <div class=\"form-group\">
                <label for=\"category_id\">Profil: </label>
                <select class=\"form-control\" name=\"category_id\" id=\"category_id\">
                            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 26
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category_id", array()), "html", null, true);
            echo "\">
                                ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()), "html", null, true);
            echo "
                            </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                        </select>
            </div>
            <div class=\"form-group\">
                <label for=\"manufacturer_id\">Proizvodjac: </label>
                <select class=\"form-control\" name=\"manufacturer_id\" id=\"manufacturer_id\">
                                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["manufacturers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
            // line 36
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", array()), "html", null, true);
            echo "\">
                                    ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", array()), "html", null, true);
            echo "
                                </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                            </select>
            </div>
            <div>
                <button type=\"submit\" class=\"btn btn-primary\">
                    Izmeni profil
                </button>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "UserProfileManagement/getEdit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 40,  102 => 37,  97 => 36,  93 => 35,  86 => 30,  77 => 27,  72 => 26,  68 => 25,  46 => 6,  42 => 5,  38 => 4,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserProfileManagement/getEdit.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\UserProfileManagement\\getEdit.html");
    }
}
