<?php

/* Model/addToCart.html */
class __TwigTemplate_669b20e8dbb6c2c8b88ea583deb7c482e69c33417f5fd35ca44264c3787a43ce extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "Model/addToCart.html", 1);
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
    <p>
        Odabrali ste model: ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "name", array()), "html", null, true);
        echo "
    </p><br>
    <p>
        Unesite dimenzija za taj model:
    </p><br>
</div>
<div>
    <form method=\"post\">
        <div>
            <label for=\"width\">Unesite sirinu koju zelite: </label><br>
            <input type=\"text\" id=\"width\" name=\"width\" required placeholder=\"Unesite sirinu.\">
        </div>
        <div>
            <label for=\"height\">Unesite visinu koju zelite: </label><br>
            <input type=\"text\" id=\"height\" name=\"height\" required placeholder=\"Unesite visinu.\">
        </div>
        <div>
            <button type=\"submit\">Dodajte model u korpu</button>
        </div>

    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "Model/addToCart.html";
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
        return new Twig_Source("", "Model/addToCart.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\Model\\addToCart.html");
    }
}
