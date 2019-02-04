<?php

/* Cart/show.html */
class __TwigTemplate_2ed7326df0cb6b7aa2f535c97a24cdee5cd145c461247f5797141afa85f55d19 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "Cart/show.html", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'naslov' => array($this, 'block_naslov'),
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
        echo "<h4 class=\"text-center\">Spisak u korpi je: </h4>

<div class=\"container\">
    <div class=\"row\">


        <table class=\"table table-bordered table-hover text-center table-responsive w-100 d-block d-md-table\">
            <thead>
                <tr>

                    <th scope=\"col\">Opis proizvoda</th>
                    <th scope=\"col\">Cena</th>
                    <th scope=\"col\">Ukloniti</th>
                </tr>
            </thead>

            <tbody> ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cartModelModel"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 19
            echo "                <tr>

                    <td>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "profile/model/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "model_id", array()), "html", null, true);
            echo "\">
                            ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "name", array()), "html", null, true);
            echo "
                        </a></td>
                    <td>
                        <p>Cena po povrsini: ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "price_for_model", array()), "html", null, true);
            echo " RSD </p>
                    </td>
                    <td>
                        <form action=\"";
            // line 29
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "cart/\" method=\"POST\">
                            <button type=\"submit\" for=\"cart_model_id\" name=\"cart_model_id\" id=\"cart_model_id\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "cart_model_id", array()), "html", null, true);
            echo "\" class=\"cart_model_id btn btn-danger\"><i class=\"fa fa-trash\"></i></button>
                        </form>
                    </td>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "

                </tr>

            </tbody>
        </table>





    </div>
</div>
<form action=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "cart/order/\" class=\"text-center\">
    <button type=\"submit\" class=\"btn btn-primary\">Naruci proizvode</button>
</form>

";
    }

    // line 51
    public function block_naslov($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", array()));
        echo " ";
    }

    public function getTemplateName()
    {
        return "Cart/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 51,  109 => 47,  94 => 34,  84 => 30,  80 => 29,  74 => 26,  68 => 23,  62 => 22,  57 => 19,  53 => 18,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Cart/show.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\Cart\\show.html");
    }
}
