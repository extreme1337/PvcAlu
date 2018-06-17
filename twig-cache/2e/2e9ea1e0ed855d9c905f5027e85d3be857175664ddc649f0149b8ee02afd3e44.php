<?php

/* UserCategoryManagement/categories.html */
class __TwigTemplate_a8678965138f994a57309f0aabba4e747c125e272a5756dd2e6b5e45c1ffa334 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "UserCategoryManagement/categories.html", 1);
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
        echo "user/categories/add\">Dodaj novu kategoriju</a>
    </div>

    <div class=\"categories\">
        <ul>
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "            <li>
                <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "user/categories/edit/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category_id", array()), "html", null, true);
            echo "\">
                    ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()));
            echo "
                </a> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "UserCategoryManagement/categories.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 15,  63 => 13,  57 => 12,  54 => 11,  50 => 10,  42 => 5,  38 => 4,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserCategoryManagement/categories.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\UserCategoryManagement\\categories.html");
    }
}
