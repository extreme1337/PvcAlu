<?php

/* UserManufacturerManagement/deleteById.html */
class __TwigTemplate_557f637d056958f51942a7d5e52472d951d53df4dc815e7d1cbb391146c0ef84 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "UserManufacturerManagement/deleteById.html", 1);
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
        <label for=\"manufacturer_id\">Proizvodjac: </label>
        <select class=\"form-control\" name=\"manufacturer_id\" id=\"manufacturer_id\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["manufacturers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
            // line 8
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", array()), "html", null, true);
            echo "\">
                    ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["manufacturer"], "name", array()), "html", null, true);
            echo "
                </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "            </select>
    </div>
    <div>
        <button type=\"submit\">
            Obrisi proizvodjaca
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
        return "UserManufacturerManagement/deleteById.html";
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
        return new Twig_Source("", "UserManufacturerManagement/deleteById.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\UserManufacturerManagement\\deleteById.html");
    }
}
