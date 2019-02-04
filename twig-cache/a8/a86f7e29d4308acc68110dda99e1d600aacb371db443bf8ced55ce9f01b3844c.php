<?php

/* UserCategoryManagement/getEdit.html */
class __TwigTemplate_1cbdcbff0f5f482a65c9d6971ebb2ace5359b18e9b140ba2cac957517f6ebde8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "UserCategoryManagement/getEdit.html", 1);
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
        echo "user/categories\" class=\"col-4 col-sm-4 col-md-4 text-center dash\">Prikazi sve kategorije &nbsp;&nbsp;&nbsp;</a>
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/categories/add\" class=\"col-4 col-sm-4 col-md-4 text-center dash\">Dodaj novu kategoriju</a>
    </div>
    <h2 class=\"text-center\">Izmena kategorije:</h2>
    <form class=\"category-form\" method=\"POST\" enctype=\"multipart/form-data\">
        <div class=\"form-group\">
            <label for=\"name\">Naziv: </label>
            <input type=\"text\" id=\"name\" name=\"name\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", array()));
        echo "\" required class=\"form-control\" pattern=\".*[^\\s]{3,}.*\">
        </div>
        <div class=\"form-group\">
            <label for=\"picture\">Slika: </label>
            <input type=\"file\" id=\"picture\" class=\"form-control\" name=\"picture\" accept=\"image/jpeg\">
        </div>
        <div class=\"form-group\">
            <label for=\"description\">Opis: </label>
            <textarea type=\"text\" id=\"description\" name=\"description\" required rows=\"10\" class=\"form-control\" pattern=\".*[^\\s]{3,}.*\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "description", array()), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-primary\">
                Izmeni kategoriju
            </button>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "UserCategoryManagement/getEdit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 20,  55 => 12,  46 => 6,  42 => 5,  38 => 4,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserCategoryManagement/getEdit.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\UserCategoryManagement\\getEdit.html");
    }
}
