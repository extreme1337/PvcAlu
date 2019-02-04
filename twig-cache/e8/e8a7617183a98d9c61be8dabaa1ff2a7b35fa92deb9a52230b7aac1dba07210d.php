<?php

/* Cart/deleteById.html */
class __TwigTemplate_c1d77f8611d5199fd9055fd58aa5bf6f6ffaf2ba579f0af22a38ca24b68dfda8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "Cart/deleteById.html", 1);
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
    <h4 class=\"text-center\">";
        // line 3
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "</h4>

    <h4 class=\"text-center\">Klikni <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/login\"><i class=\"fa fa-backward \"></i></a> da se vratiš nazad.</h4>
</div>
";
    }

    public function getTemplateName()
    {
        return "Cart/deleteById.html";
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
        return new Twig_Source("", "Cart/deleteById.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\Cart\\deleteById.html");
    }
}
