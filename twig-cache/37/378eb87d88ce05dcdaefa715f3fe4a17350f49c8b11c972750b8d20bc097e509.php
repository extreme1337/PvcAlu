<?php

/* UserManufacturerManagement/getEdit.html */
class __TwigTemplate_95459c2fc37ef2e57ba311f7260a1dd662631668155c6f74e303fe9b385cc750 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "UserManufacturerManagement/getEdit.html", 1);
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
        echo "user/manufacturers\">Prikazi sve proizvodjace &nbsp;&nbsp;&nbsp;</a>
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/manufacturers/add\">Dodaj novog proizvodjaca</a>
    </div>

    <form class=\"manufacturer-form\" method=\"POST\">
        <div>
            <label for=\"name\">Naziv: </label>
            <input type=\"text\" id=\"name\" name=\"name\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["manufacturer"] ?? null), "name", array()));
        echo "\">
        </div>

        <div>
            <button type=\"submit\">
                Izmeni proizvodjaca
            </button>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "UserManufacturerManagement/getEdit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 12,  46 => 6,  42 => 5,  38 => 4,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserManufacturerManagement/getEdit.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\UserManufacturerManagement\\getEdit.html");
    }
}
