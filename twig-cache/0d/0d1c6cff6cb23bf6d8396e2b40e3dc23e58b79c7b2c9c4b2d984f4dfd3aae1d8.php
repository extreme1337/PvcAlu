<?php

/* UserProfileManagement/getAdd.html */
class __TwigTemplate_087b5a35e1bda08a6ef9cc854d4d765db42b8dd7c85fe6239626393c9f555056 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "UserProfileManagement/getAdd.html", 1);
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
        echo "user/profiles\">Prikazi sve profile</a>
    </div>

    <form class=\"profile-form\" method=\"POST\">
        <div>
            <label for=\"name\">Naziv: </label>
            <input type=\"text\" id=\"name\" name=\"name\" required>
        </div>
        <div>
            <label for=\"picture\">Slika: </label>
            <input type=\"text\" id=\"picture\" name=\"picture\" required>
        </div>
        <div>
            <label for=\"price_per_unit_area\">Cena po povrsini: </label>
            <input type=\"text\" id=\"price_per_unit_area\" name=\"price_per_unit_area\" required>
        </div>
        <div>
            <label for=\"category\">Kategorija: </label>
            <input type=\"number\" id=\"category\" name=\"category\" required>
        </div>
        <div>
            <label for=\"manufacturer\">Proizvodjac: </label>
            <input type=\"number\" id=\"manufacturer\" name=\"manufacturer\" required>
        </div>
        <div>
            <button type=\"submit\">
                Dodaj profil
            </button>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "UserProfileManagement/getAdd.html";
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
        return new Twig_Source("", "UserProfileManagement/getAdd.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\UserProfileManagement\\getAdd.html");
    }
}
