<?php

/* UserCategoryManagement/getAdd.html */
class __TwigTemplate_e7409aa749a64573bde28f0480cd63fece87a59d1bdb4ef85c2d76141c5c9fb0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "UserCategoryManagement/getAdd.html", 1);
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
        echo "user/categories\" class=\"col-8 col-sm-8 col-md-8 text-center dash\">Prikazi sve kategorije</a>
    </div>
    <h2 class=\"text-center\">Dodavanje kategorije:</h2>
    <form class=\"category-form\" method=\"POST\" enctype=\"multipart/form-data\">
        <div class=\"form-group\">
            <label for=\"name\">Naziv: </label>
            <input type=\"text\" id=\"name\" name=\"name\" required class=\"form-control\" pattern=\".*[^\\s]{3,}.*\">
        </div>
        <div class=\"form-group\">
            <label for=\"picture\">Slika: </label>
            <input type=\"file\" id=\"picture\" class=\"form-control\" name=\"picture\" accept=\"image/jpeg\">
        </div>
        <div class=\"form-group\">
            <label for=\"description\">Opis: </label>
            <textarea type=\"text\" id=\"description\" name=\"description\" required rows=\"10\" class=\"form-control\" pattern=\".*[^\\s]{3,}.*\"></textarea>
        </div>

        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-primary\">
                Dodaj kategoriju
            </button>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "UserCategoryManagement/getAdd.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 5,  38 => 4,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserCategoryManagement/getAdd.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\UserCategoryManagement\\getAdd.html");
    }
}
