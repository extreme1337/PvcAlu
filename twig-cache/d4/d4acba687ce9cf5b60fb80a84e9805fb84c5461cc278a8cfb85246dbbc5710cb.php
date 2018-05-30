<?php

/* Cart/orderFromCart.html */
class __TwigTemplate_1d36d480a8c99b0c21ef1db9af08d13b850a1c6b84e05894de32724e3e00c79e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "Cart/orderFromCart.html", 1);
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
    <p>Proizvodi koje zelite da narucite:</p>
    ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "order_id", array()), "html", null, true);
        echo "
</div>
<div>
    <form method=\"post\">
        <div>
            <label for=\"forename\">Unesite ime: </label><br>
            <input type=\"text\" id=\"forename\" name=\"forename\" required placeholder=\"Unesite ime.\">
        </div>
        <div>
            <label for=\"surename\">Unesite prezime: </label><br>
            <input type=\"text\" id=\"surename\" name=\"surename\" required placeholder=\"Unesite prezime.\">
        </div>
        <div>
            <label for=\"residential_address\">Unesite adresu na koju da Vam isporucimo proizvode: </label><br>
            <input type=\"text\" id=\"residential_address\" name=\"residential_address\" required placeholder=\"Unesite adresu.\">
        </div>
        <div>
            <button type=\"submit\">Naruci proizvode</button>
        </div>

    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "Cart/orderFromCart.html";
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
        return new Twig_Source("", "Cart/orderFromCart.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\Cart\\orderFromCart.html");
    }
}
