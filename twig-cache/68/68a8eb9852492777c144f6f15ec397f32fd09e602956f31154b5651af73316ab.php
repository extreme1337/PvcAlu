<?php

/* Model/postAddToCart.html */
class __TwigTemplate_ae4c69f70e2eff280713bd67c0faa6d2fec4b1f780b90e0e8cf731aae9564efa extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "Model/postAddToCart.html", 1);
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
    <h5 class=\"text-center\">Vratite se <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "model/add/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "model_id", array()), "html", null, true);
        echo "\">na model</a></h5>
    <h5 class=\"text-center\">Klikni <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "cart\">ovde</a> odete na korpu.</h5>
    <h5 class=\"text-center\">Klikni <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "\">ovde</a> sa se vratite na pocetnu.</h5>

</div>
";
    }

    public function getTemplateName()
    {
        return "Model/postAddToCart.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 6,  47 => 5,  41 => 4,  37 => 3,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Model/postAddToCart.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\Model\\postAddToCart.html");
    }
}
