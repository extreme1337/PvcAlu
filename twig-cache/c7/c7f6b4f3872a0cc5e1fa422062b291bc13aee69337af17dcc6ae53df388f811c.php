<?php

/* UserModelManagement/getEdit.html */
class __TwigTemplate_e2ebcdcfb3356e81e7c9fd9b36f2b9c22a449449364ab9b4be8369458a1ce0ac extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "UserModelManagement/getEdit.html", 1);
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
        echo "user/models\">Prikazi sve modele &nbsp;&nbsp;&nbsp;</a>
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/models/add\">Dodaj novi model</a>
    </div>

    <form class=\"model-form\" method=\"POST\">
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
            <label for=\"picture\">Kategorija: </label>
            <input type=\"text\" id=\"picture\" name=\"picture\" required>
        </div>
        <div>
            <label for=\"profile_id\">Proizvodjac: </label>
            <input type=\"number\" id=\"profile\" name=\"profile\" required>
        </div>
        <div>
            <button type=\"submit\">
                Izmeni model
            </button>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "UserModelManagement/getEdit.html";
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
        return new Twig_Source("", "UserModelManagement/getEdit.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\UserModelManagement\\getEdit.html");
    }
}
