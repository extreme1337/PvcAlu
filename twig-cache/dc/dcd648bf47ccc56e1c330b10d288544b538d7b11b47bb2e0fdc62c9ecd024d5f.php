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
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>

<head>
    <title>Pvc Alu stolarija</title>
    <meta charset=\"utf-8\">
</head>

<body>
    <header>
        Zaglavlje...
    </header>
    <main>
        ";
        // line 14
        $this->displayBlock('main', $context, $blocks);
        // line 15
        echo "    </main>
    <footer> &copy; 2018 Marko Milan</footer>
</body>

</html>";
    }

    // line 14
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
        return array (  49 => 14,  41 => 15,  39 => 14,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_global/index.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\_global\\index.html");
    }
}
