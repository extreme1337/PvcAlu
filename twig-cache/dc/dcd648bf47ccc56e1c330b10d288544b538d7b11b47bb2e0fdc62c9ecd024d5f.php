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
                <li><a href=\"/PvcAlu\">Pocetna</a>
                    <li><a href=\"PvcAlu/categories\">Kategorije</a>
                        <li><a href=\"PvcAlu/profile\">Profil</a>
                            <li><a href=\"PvcAlu/contact\">Kontakt</a>
                                <li><a href=\"PvcAlu/log-out\">Odjava</a>
            </ul>
        </nav>
    </header>
    <main>
        ";
        // line 27
        $this->displayBlock('main', $context, $blocks);
        // line 28
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

    // line 27
    public function block_main($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "_global/index.html";
    }

    public function getDebugInfo()
    {
        return array (  72 => 27,  66 => 5,  58 => 28,  56 => 27,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_global/index.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\_global\\index.html");
    }
}
