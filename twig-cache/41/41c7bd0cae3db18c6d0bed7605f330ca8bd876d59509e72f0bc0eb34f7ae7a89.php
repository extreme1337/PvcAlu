<?php

/* Profile/show.html */
class __TwigTemplate_1791825d80ee271f38ccf04d840cc26a41f5036e967749a19d4732c244e9d9f6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "Profile/show.html", 1);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "name", array()));
        echo "
</h1>
<p>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "description", array()), "html", null, true);
        echo " </p>
<p>Cena po povrsini ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "price_per_unit_area", array()), "html", null, true);
        echo " </p>
";
    }

    // line 7
    public function block_naslov($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "name", array()));
        echo " ";
    }

    public function getTemplateName()
    {
        return "Profile/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  47 => 6,  43 => 5,  38 => 3,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Profile/show.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\Profile\\show.html");
    }
}
