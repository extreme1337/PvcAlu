<?php

/* UserProfileManagement/deleteById.html */
class __TwigTemplate_5f77a3dd7ca55e6be9479c4e73ab0f920da37f689369005a6ac1b98e1c1048bd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "UserProfileManagement/deleteById.html", 1);
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
        echo "<div class=\"container\">
        <div class=\"row\">
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/profile\" class=\"col-4 col-sm-4 col-md-4 text-center dash\">Nazad na Dashboard</a>
    <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/profiles\" class=\"col-8 col-sm-8 col-md-8 text-center dash\">Prikazi sve profile</a>
    </div>
    <h2 class=\"text-center\">Brisanje Profila:</h2>
<form class=\"delete-form\" method=\"post\">
    <div class=\"form-group\">
        <label for=\"profile_id\">Profil: </label>
        <select class=\"form-control\" name=\"profile_id\" id=\"profile_id\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["profiles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
            // line 13
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "profile_id", array()), "html", null, true);
            echo "\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "name", array()), "html", null, true);
            echo "
                </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </select>
    </div>
    <div>
        <button type=\"submit\" class=\"btn btn-danger\">
            Obrisi profil
        </button>
    </div>
</form>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 25
        echo " ";
    }

    public function getTemplateName()
    {
        return "UserProfileManagement/deleteById.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  72 => 17,  63 => 14,  58 => 13,  54 => 12,  44 => 5,  40 => 4,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserProfileManagement/deleteById.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\UserProfileManagement\\deleteById.html");
    }
}
