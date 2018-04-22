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
    <header>
        <div class=\"banners\">
            <a href=\"/PvcAlu/\" class=\"banner\">
                <img src=\"/assets/img/banner-1.jpg\" alt=\"Banner-1\">
            </a>
        </div>
        <nav id=\"main-menu\">
            <ul>
                <li><a href=\"/PvcAlu\">Pocetna</a>";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 19
            echo "                    <li>
                        <a href=\"/PvcAlu/category/";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category_id", array()), "html", null, true);
            echo "\">
                            ";
            // line 21
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()))), "html", null, true);
            echo "
                        </a> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                        <li><a href=\"PvcAlu/contact\">Kontakt</a>
                            <li><a href=\"PvcAlu/infos\">O nama</a>
                                <li><a href=\"PvcAlu/log-out\">Odjava</a>
            </ul>
        </nav>
    </header>
    <main>
        ";
        // line 30
        $this->displayBlock('main', $context, $blocks);
        // line 31
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

    // line 30
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
        return array (  91 => 30,  85 => 5,  77 => 31,  75 => 30,  66 => 23,  58 => 21,  54 => 20,  51 => 19,  47 => 18,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_global/index.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\_global\\index.html");
    }
}
