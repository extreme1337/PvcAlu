<?php

/* UserDashboard/index.html */
class __TwigTemplate_048917646d7773ec220bf39ea30bbb297c73f72b5144b46c640704a2a3d321e3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "UserDashboard/index.html", 1);
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
        echo "<div>
    <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/categories\">Uredjivanje kategorija<br></a>
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/manufacturers\">Uredjivanje proizvodjaca<br></a>
    <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/profiles\">Uredjivanje profila<br></a>
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/models\">Uredjivanje modela<br></a>
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 8
        echo " ";
    }

    public function getTemplateName()
    {
        return "UserDashboard/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  51 => 6,  47 => 5,  43 => 4,  39 => 3,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserDashboard/index.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\UserDashboard\\index.html");
    }
}
