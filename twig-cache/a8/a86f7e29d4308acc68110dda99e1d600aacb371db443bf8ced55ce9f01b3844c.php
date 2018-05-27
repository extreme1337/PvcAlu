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
        echo "<div>
    <div class=\"options\">
        <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/categories\">Prikazi sve kategorije &nbsp;&nbsp;&nbsp;</a>
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/categories/add\">Dodaj novu kategoriju</a>
    </div>

    <form class=\"category-form\" method=\"POST\">
        <div>
            <label for=\"name\">Naziv: </label>
            <input type=\"text\" id=\"name\" name=\"name\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", array()));
        echo "\">
        </div>

        <div>
            <button type=\"submit\">
                Izmjeni kategoriju
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
        return array (  51 => 11,  42 => 5,  38 => 4,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserCategoryManagement/getEdit.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\UserCategoryManagement\\getEdit.html");
    }
}
