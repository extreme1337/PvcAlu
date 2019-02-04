<?php

/* UserModelManagement/getAdd.html */
class __TwigTemplate_09688caa0a1896f53e9ed6ebf0fd56bf62f4059cdc60ba8b8d2114ffb7205543 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "UserModelManagement/getAdd.html", 1);
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/profile\" class=\"col-4 col-sm-4 col-md-4 text-center dash\">Nazad na Dashboard</a>
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/models\" class=\"col-8 col-sm-8 col-md-8 text-center dash\">Prikazi sve modele</a>
    </div>
    <h2 class=\"text-center\">Dodavanje Modela:</h2>
    <form class=\"models-form\" method=\"POST\" enctype=\"multipart/form-data\">
        <div>
            <label for=\"name\">Naziv: </label>
            <input type=\"text\" id=\"name\" name=\"name\" required class=\"form-control\" pattern=\".*[^\\s]{3,}.*\">
        </div>
        <div>
            <label for=\"min_width\">Minimalna sirina: </label>
            <input type=\"text\" min=\"1\" id=\"min_width\" name=\"min_width\" required class=\"form-control\">
        </div>
        <div>
            <label for=\"max_width\">Maksimalna sirina: </label>
            <input type=\"text\" min=\"1\" id=\"max_width\" name=\"max_width\" required class=\"form-control\">
        </div>
        <div>
            <label for=\"min_height\">Minimalna visina: </label>
            <input type=\"text\" min=\"1\" id=\"min_height\" name=\"min_height\" required class=\"form-control\">
        </div>
        <div>
            <label for=\"max_height\">Maksimalna visina: </label>
            <input type=\"text\" min=\"1\" id=\"max_height\" name=\"max_height\" required class=\"form-control\">
        </div>
        <div class=\"form-group\">
            <label for=\"picture\">Slika: </label>
            <input type=\"file\" id=\"picture\" class=\"form-control\" name=\"picture\" accept=\"image/jpeg\">
        </div>
        <div class=\"form-group\">
            <label for=\"profile\">Profil: </label>
            <select class=\"form-control\" name=\"profile_id\" id=\"profile_id\">
                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["profiles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
            // line 37
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "profile_id", array()), "html", null, true);
            echo "\">
                        ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "name", array()), "html", null, true);
            echo "
                    </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </select>
        </div>
        <div>
            <button type=\"submit\" class=\"btn btn-primary\">
                Dodaj model
            </button>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "UserModelManagement/getAdd.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 41,  85 => 38,  80 => 37,  76 => 36,  42 => 5,  38 => 4,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserModelManagement/getAdd.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\UserModelManagement\\getAdd.html");
    }
}
