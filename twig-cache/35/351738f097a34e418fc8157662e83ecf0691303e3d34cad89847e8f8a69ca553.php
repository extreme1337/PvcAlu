<?php

/* UserManufacturerManagement/getAdd.html */
class __TwigTemplate_08abe0aba1f228e31740c97a1a94d8f989e5a7a6da4de59a8dce04fed4c0a1d4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "UserManufacturerManagement/getAdd.html", 1);
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
        echo "user/manufacturers\">Prikazi sve proizvodjace</a>
    </div>

    <form class=\"manufacturer-form\" method=\"POST\">
        <div>
            <label for=\"name\">Naziv: </label>
            <input type=\"text\" id=\"name\" name=\"name\" required>
        </div>

        <div>
            <button type=\"submit\">
                Dodaj proizvodjaca
            </button>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "UserManufacturerManagement/getAdd.html";
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
        return new Twig_Source("", "UserManufacturerManagement/getAdd.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\UserManufacturerManagement\\getAdd.html");
    }
}
