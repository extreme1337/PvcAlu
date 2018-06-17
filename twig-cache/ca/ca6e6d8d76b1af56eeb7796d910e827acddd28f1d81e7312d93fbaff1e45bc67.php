<?php

/* UserModelManagement/getAdd.html */
class __TwigTemplate_09688caa0a1896f53e9ed6ebf0fd56bf62f4059cdc60ba8b8d2114ffb7205543 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "UserModelManagement/getAdd.html", 1);
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
        echo "user/profile\">Dashboard</a>
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/profile\">Dashboard</a>
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/models\">Prikazi sve modele</a>
    </div>

    <form class=\"models-form\" method=\"POST\">
        <div>
            <label for=\"name\">Naziv: </label>
            <input type=\"text\" id=\"name\" name=\"name\" required>
        </div>
        <div>
            <label for=\"min_width\">Minimalna sirina: </label>
            <input type=\"text\" id=\"min_width\" name=\"min_width\" required>
        </div>
        <div>
            <label for=\"max_width\">Maksimalna sirina: </label>
            <input type=\"text\" id=\"max_width\" name=\"max_width\" required>
        </div>
        <div>
            <label for=\"min_height\">Minimalna visina: </label>
            <input type=\"text\" id=\"min_height\" name=\"min_height\" required>
        </div>
        <div>
            <label for=\"max_height\">Maksimalna visina: </label>
            <input type=\"text\" id=\"max_height\" name=\"max_height\" required>
        </div>
        <div class=\"form-group\">
            <label for=\"picture\">Slika: </label>
            <input type=\"file\" id=\"picture\" class=\"form-control\" name=\"picture\" accept=\"image/png\">
        </div>
        <div>
            <label for=\"profile\">Profil: </label>
            <input type=\"number\" id=\"profile\" name=\"profile\" required>
        </div>
        <div>
            <button type=\"submit\">
                Dodaj model
            </button>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "UserModelManagement/getAdd.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  42 => 5,  38 => 4,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserModelManagement/getAdd.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\UserModelManagement\\getAdd.html");
    }
}
