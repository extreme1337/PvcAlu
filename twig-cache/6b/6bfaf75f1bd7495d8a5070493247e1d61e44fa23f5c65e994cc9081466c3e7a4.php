<?php

/* Cart/postOrderFromCart.html */
class __TwigTemplate_d556e64882df394f53e77cf48dd7839f3660f66265fd3bfbe4e36467f31ad968 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "Cart/postOrderFromCart.html", 1);
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
    <p>";
        // line 3
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "</p>

    <p>Klikni <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "\">ovde</a> da se vratiš nazad.</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "Cart/postOrderFromCart.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 5,  37 => 3,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Cart/postOrderFromCart.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\Cart\\postOrderFromCart.html");
    }
}
