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
        echo "<div class=\"container\">
    <h1 class=\"text-center\">
        ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "name", array()));
        echo "
    </h1>
    <h3 class=\"text-center\">Spisak modela napravljenih od ovog profila: </h3>
    <div class=\"row\">

        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modelInProfile"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 10
            echo "        <div class=\"card col-12 col-sm-12 col-md-6 text-center\">

            <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "profile/model/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "model_id", array()), "html", null, true);
            echo "\">
                <h3>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "name", array()));
            echo "</h3>
                <br>
                <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "picture", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "name", array()), "html", null, true);
            echo "\">
            </a>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
</div>
";
    }

    // line 21
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
        return array (  85 => 21,  79 => 19,  66 => 15,  61 => 13,  55 => 12,  51 => 10,  47 => 9,  39 => 4,  35 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Profile/show.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\Profile\\show.html");
    }
}
