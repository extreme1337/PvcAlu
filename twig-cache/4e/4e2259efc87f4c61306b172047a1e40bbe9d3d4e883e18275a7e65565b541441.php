<?php

/* Category/show.html */
class __TwigTemplate_770403e8ab37cfb7da7a9e5c4040ac639ead51971572302c48f9e5e4b40a59d0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "Category/show.html", 1);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", array()));
        echo "
</h1>
<p>Spisak profila u ovoj kategoriji je: </p>
<ul>";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["profileInCategory"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
            // line 7
            echo "    <li>
        <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "profile/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "profile_id", array()), "html", null, true);
            echo "\">
                ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "name", array()));
            echo "<br>
            </a> ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "description", array()));
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>
";
    }

    // line 12
    public function block_naslov($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", array()));
        echo " ";
    }

    public function getTemplateName()
    {
        return "Category/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 12,  68 => 11,  61 => 10,  57 => 9,  51 => 8,  48 => 7,  44 => 6,  38 => 3,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Category/show.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\Category\\show.html");
    }
}
