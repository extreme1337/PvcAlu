<?php

/* Main/home.html */
class __TwigTemplate_a6db7f7b6da8726a3eac32f3cea40895468ad2bf493fa40c9baaad195906392d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "Main/home.html", 1);
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
        echo "

<div id=\"slider\" class=\"carousel slide\" data-ride=\"carousel\">


    <ul class=\"carousel-indicators\">
        <li data-target=\"#slider\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#slider\" data-slide-to=\"1\"></li>
        <li data-target=\"#slider\" data-slide-to=\"2\"></li>
    </ul>


    <div class=\"carousel-inner\">
        <div class=\"carousel-item active\">
            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/images/slide3.png\" alt=\"1\" class=\"img-fluid\">
        </div>
        <div class=\"carousel-item\">
            <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/images/slide2.png\" alt=\"2\" class=\"img-fluid\">
        </div>
        <div class=\"carousel-item\">
            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/images/slide1.png\" alt=\"3\" class=\"img-fluid\">
        </div>
    </div>


    <a class=\"carousel-control-prev\" href=\"#slider\" data-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\"></span>
    </a>
    <a class=\"carousel-control-next\" href=\"#slider\" data-slide=\"next\">
        <span class=\"carousel-control-next-icon\"></span>
    </a>

</div>
<div class=\"container\">
    <div class=\"row dupe\">

        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 39
            echo "        <div class=\"card col-12 col-sm-6 col-md-6 text-center\">
            <div class=\"card-body\">
                <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "category/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category_id", array()), "html", null, true);
            echo "\" class=\"card-title\">
                    <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "picture", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()), "html", null, true);
            echo "\" class=\"img-fluid\">

                </a>
                <p class=\"text-justify\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "description", array()));
            echo "</p>
            </div>


        </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
    </div>
</div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 56
        echo " ";
    }

    public function getTemplateName()
    {
        return "Main/home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 56,  119 => 52,  106 => 45,  97 => 42,  91 => 41,  87 => 39,  83 => 38,  64 => 22,  58 => 19,  52 => 16,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Main/home.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\Main\\home.html");
    }
}
