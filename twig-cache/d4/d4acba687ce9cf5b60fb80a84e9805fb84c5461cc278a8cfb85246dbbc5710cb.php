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
        echo "<div class=\"container\">
    <div class=\"row\">
        <form method=\"post\" class=\"col col-md-8 offset-md-2 card\">
            <div class=\"card-header\">
                <h4 class=\"text-center\">Proizvodi koje zelite da narucite:</h4>

                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cartModelModel"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "name", array()), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["order"] ?? null), "order_id", array()), "html", null, true);
        echo "
            </div>
            <div class=\"card-body\">

                <div>
                    <label for=\"forename\">Unesite ime: </label><br>
                    <input type=\"text\" id=\"forename\" name=\"forename\" required class=\"form-control\" placeholder=\"Unesite ime.\">
                </div>
                <div>
                    <label for=\"surename\">Unesite prezime: </label><br>
                    <input type=\"text\" id=\"surename\" name=\"surename\" required class=\"form-control\" placeholder=\"Unesite prezime.\">
                </div>
                <div>
                    <label for=\"residential_address\">Unesite adresu na koju da Vam isporucimo proizvode: </label><br>
                    <input type=\"text\" id=\"residential_address\" name=\"residential_address\" required class=\"form-control\" placeholder=\"Unesite adresu.\">
                </div>
                <div>
                    <label for=\"email\">Unesite e-adresu : </label><br>
                    <input type=\"email\" id=\"email\" name=\"email\" required class=\"form-control\" placeholder=\"Unesite adresu.\">
                </div>
            </div>
            <div class=\"card-footer text-center\">
                <button type=\"submit\" class=\"btn btn-primary\">Naruci proizvode</button>
            </div>


        </form>
    </div>
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
        return array (  42 => 8,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Cart/orderFromCart.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\Cart\\orderFromCart.html");
    }
}
