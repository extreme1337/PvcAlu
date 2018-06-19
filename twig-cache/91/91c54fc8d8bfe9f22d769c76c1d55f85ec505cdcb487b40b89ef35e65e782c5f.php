<?php

/* UserCategoryManagement/postEdit.html */
class __TwigTemplate_9674e5b81caab9c8ae1fbb7550cae7c9b7144868181ccfe4ec13442025eb0b73 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "UserCategoryManagement/postEdit.html", 1);
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
        // line 2
        echo "<div>
    <div class=\"options\">
        <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/profile\">Dashboard</a>
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/categories\">Prikazi sve kategorije</a>
    </div>

    <p>";
        // line 8
        echo twig_escape_filter($this->env, ($context["message"] ?? null));
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "UserCategoryManagement/postEdit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  42 => 5,  38 => 4,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserCategoryManagement/postEdit.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\UserCategoryManagement\\postEdit.html");
    }
}
