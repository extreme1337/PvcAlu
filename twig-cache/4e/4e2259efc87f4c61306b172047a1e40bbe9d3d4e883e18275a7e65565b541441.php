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
        echo "<h1 class=\"text-center\">
    ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", array()));
        echo "
</h1>
<h2 class=\"text-center\">Spisak profila u ovoj kategoriji je: </h2>
<div class=\"row\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["profileInCategory"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
            // line 8
            echo "    <div class=\"card col-12 col-md-6 text-center\">
        <div class=\"card-body\">

            <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "profile/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "profile_id", array()), "html", null, true);
            echo "\">
                <h3>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "name", array()));
            echo "</h3>
                <br>
                <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "picture", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "name", array()), "html", null, true);
            echo "\"><br>
            </a>
            <p> ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "description", array()));
            echo "</p><br>
            <p>Cena po povrsini profila: ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "price_per_unit_area", array()), "html", null, true);
            echo " RSD</p>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</div> ";
    }

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
        return array (  87 => 20,  77 => 17,  73 => 16,  65 => 14,  60 => 12,  54 => 11,  49 => 8,  45 => 7,  38 => 3,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Category/show.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\Category\\show.html");
    }
}
