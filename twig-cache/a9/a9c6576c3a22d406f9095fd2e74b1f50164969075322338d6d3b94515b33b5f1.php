<?php

/* Model/show.html */
class __TwigTemplate_3b8ee3c6fc0a66fe49775bca72fa5d6d39a109d1069e2726d592abdaee263b0f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "Model/show.html", 1);
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
        echo "<h1>
    ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "name", array()));
        echo "
</h1>
<div>
    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "picture", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "name", array()), "html", null, true);
        echo "\">
</div>
<div>
    <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "model/add/\">
        <button type=\"submit\">Dodaj u korpu</button>
    </form>
</div>
";
    }

    // line 13
    public function block_naslov($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "name", array()));
        echo " ";
    }

    public function getTemplateName()
    {
        return "Model/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  53 => 9,  44 => 6,  38 => 3,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Model/show.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\Model\\show.html");
    }
}
