<?php

/* UserOrderCartManagement/index.html */
class __TwigTemplate_48cfec5181f21fc455f0717b02c2c9363864786be2ada10456cf83ac3a42318b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "UserOrderCartManagement/index.html", 1);
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
        echo " ";
        ob_start();
        // line 2
        echo "<div class=\"container\">
    <div class=\"row\">
        <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/profile\" class=\"col-12 text-center dash\">Nazad na Dashboard</a>
    </div>
    <form method=\"post\">


        <div class=\"card-body\">
            <div class=\"form-group\">
                <label for=\"order_cart_id\">Porudzbine: </label>
                <select class=\"form-control\" name=\"order_cart_id\" id=\"order_cart_id\">
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order1"]) {
            // line 14
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order1"], "order_cart_id", array()), "html", null, true);
            echo "\">
                        ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order1"], "order_cart_id", array()), "html", null, true);
            echo "
                    </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                </select>
            </div>

            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-primary\">
                        Odobri / Odbij porudzbinu
                    </button>
            </div>
        </div>
    </form>

</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 30
        echo " ";
    }

    public function getTemplateName()
    {
        return "UserOrderCartManagement/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  70 => 18,  61 => 15,  56 => 14,  52 => 13,  40 => 4,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserOrderCartManagement/index.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\UserOrderCartManagement\\index.html");
    }
}
