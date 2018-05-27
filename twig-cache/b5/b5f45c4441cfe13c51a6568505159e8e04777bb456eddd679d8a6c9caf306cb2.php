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
        echo "<div>
    <div class=\"options\">
        <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/categories\">Prikazi sve kategorije</a>
    </div>

    <form class=\"category-form\" method=\"POST\">
        <div>
            <label for=\"name\">Naziv: </label>
            <input type=\"text\" id=\"name\" name=\"name\" required>
        </div>

        <div>
            <button type=\"submit\">
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
        return array (  38 => 4,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserCategoryManagement/getAdd.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\UserCategoryManagement\\getAdd.html");
    }
}
