<?php

/* UserCategoryManagement/deleteById.html */
class __TwigTemplate_09076d666e7344cea1000ba4628c94bb036c0d2da4097afd080580a8e8219a1e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "UserCategoryManagement/deleteById.html", 1);
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/profile\">Dashboard</a>
<form class=\"delete-form\" method=\"post\">
    <div class=\"form-group\">
        <label for=\"category_id\">Kategorija: </label>
        <select class=\"form-control\" name=\"category_id\" id=\"category_id\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 8
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category_id", array()), "html", null, true);
            echo "\">
                    ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()), "html", null, true);
            echo "
                </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "            </select>
    </div>
    <div>
        <button type=\"submit\">
            Obrisi kategoriju
        </button>
    </div>
</form>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 20
        echo " ";
    }

    public function getTemplateName()
    {
        return "UserCategoryManagement/deleteById.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  63 => 12,  54 => 9,  49 => 8,  45 => 7,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserCategoryManagement/deleteById.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\UserCategoryManagement\\deleteById.html");
    }
}
