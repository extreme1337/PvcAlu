<?php

/* UserProfileManagement/profiles.html */
class __TwigTemplate_38dc4a15a245c4752a915735e7b6d9c710ac2523924f3fc5fe73bc8238283d22 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "UserProfileManagement/profiles.html", 1);
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
        echo "user/profiles/add\" class=\"col-4 col-sm-4 col-md-4 text-center dash\">Dodaj novi profil</a>
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/profiles/delete\" class=\"col-4 col-sm-4 col-md-4 text-center dash\">Obrisi profil</a>
    </div>

    <h2 class=\"text-center\">Profili:</h2>
    <div class=\"row\">
        
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["profiles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
            // line 13
            echo "           
                <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "user/profiles/edit/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "profile_id", array()), "html", null, true);
            echo "\" class=\"col-6 col-sm-3 col-md-3 text-center dash\">
                    ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "name", array()));
            echo "
                </a> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "      
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "UserProfileManagement/profiles.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 17,  68 => 15,  62 => 14,  59 => 13,  55 => 12,  46 => 6,  42 => 5,  38 => 4,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserProfileManagement/profiles.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\UserProfileManagement\\profiles.html");
    }
}
