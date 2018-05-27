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
<p>Spisak modela napravljenih od ovog profila: </p>
<ul>";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modelInProfile"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 7
            echo "    <li>
        <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "profile/model/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "model_id", array()), "html", null, true);
            echo "\">
                ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "name", array()));
            echo "<br>
            </a> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>
";
    }

    // line 12
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
        return array (  70 => 12,  65 => 11,  57 => 9,  51 => 8,  48 => 7,  44 => 6,  38 => 3,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Profile/show.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\Profile\\show.html");
    }
}
