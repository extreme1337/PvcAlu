<?php

/* _global/index.html */
class __TwigTemplate_434838722bd9aaead6a86a9539effc512a288434396f9ea2109db4c2563eacf1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'naslov' => array($this, 'block_naslov'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>

<head>
    <title>Pvc Alu stolarija - ";
        // line 5
        $this->displayBlock('naslov', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\">
</head>

<body>
    <div class=\"container\">
        <div class=\"banners\">
            <a href=\"/PvcAlu/\" class=\"banner\">
                <img src=\"/assets/img/banner-1.jpg\" alt=\"Banner-1\">
            </a>
        </div>
        <div class=\"top-right-side\">
            <button type=\"button\">Login</button>
            <a href=\"/PvcAlu/cart/";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart_model"] ?? null), "cart_model_id", array()), "html", null, true);
        echo "\">
                <img src=\"/assets/img/cart.jpg\" alt=\"korpa\">

            </a>
        </div>
        <nav id=\"main-menu\">
            <ul>
                <li><a href=\"/PvcAlu\">Pocetna</a>";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 26
            echo "                    <li>
                        <a href=\"/PvcAlu/category/";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category_id", array()), "html", null, true);
            echo "\">
                            ";
            // line 28
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()))), "html", null, true);
            echo "
                        </a> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                        <li><a href=\"PvcAlu/contact\">Kontakt</a>
                            <li><a href=\"PvcAlu/infos\">O nama</a>
                                <li><a href=\"PvcAlu/log-out\">Odjava</a>
            </ul>
        </nav>
    </div>
    <main>
        ";
        // line 37
        $this->displayBlock('main', $context, $blocks);
        // line 38
        echo "    </main>
    <footer> &copy; 2018 - Pvc Alu prodavnica Milan&amp;Marko</footer>
</body>

</html>";
    }

    // line 5
    public function block_naslov($context, array $blocks = array())
    {
        echo "Pocetna";
    }

    // line 37
    public function block_main($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "_global/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 37,  95 => 5,  87 => 38,  85 => 37,  76 => 30,  68 => 28,  64 => 27,  61 => 26,  57 => 25,  47 => 18,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_global/index.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\_global\\index.html");
    }
}
