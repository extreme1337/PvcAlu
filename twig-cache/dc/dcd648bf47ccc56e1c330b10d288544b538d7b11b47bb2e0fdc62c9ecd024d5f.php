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
            <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "\" class=\"banner\">
                <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/img/banner-1.jpg\" alt=\"Banner-1\">
            </a>
        </div>
        <div class=\"top-right-side\">
            <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/login/\" method=\"get\">
                <button type=\"submit\">Login</button>
            </form>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "cart/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart_model"] ?? null), "cart_model_id", array()), "html", null, true);
        echo "\">
                <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/img/cart.jpg\" alt=\"korpa\">

            </a>
        </div>
        <nav id=\"main-menu\">
            <ul>
                <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "\">Pocetna</a>";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 28
            echo "                    <li>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "category/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category_id", array()), "html", null, true);
            echo "\">
                            ";
            // line 30
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()))), "html", null, true);
            echo "
                        </a> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                        <li><a href=\"";
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "contact\">Kontakt</a>
                            <li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "infos\">O nama</a>
                                <li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "log-out\">Odjava</a>
            </ul>
        </nav>
    </div>
    <main>
        ";
        // line 39
        $this->displayBlock('main', $context, $blocks);
        // line 40
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

    // line 39
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
        return array (  129 => 39,  123 => 5,  115 => 40,  113 => 39,  105 => 34,  101 => 33,  96 => 32,  88 => 30,  82 => 29,  79 => 28,  73 => 27,  64 => 21,  58 => 20,  52 => 17,  45 => 13,  41 => 12,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_global/index.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\_global\\index.html");
    }
}
