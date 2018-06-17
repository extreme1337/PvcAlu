<?php

/* Model/addToCart.html */
class __TwigTemplate_669b20e8dbb6c2c8b88ea583deb7c482e69c33417f5fd35ca44264c3787a43ce extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "Model/addToCart.html", 1);
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
        <form method=\"post\" class=\"col col-md-8 offset-md-2 card\">
            <div class=\"card-header \">
                <h3 class=\"text-center\">Odabrali ste model: ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "name", array()), "html", null, true);
        echo "</h3>

            </div>
            <div class=\"card-body\">
                <h4 class=\"text-center\">Unesite dimenzija za taj model:</h4><br>
                <!--<h5 class=\"text-center\">Sirina mora da bude u okviru ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "min_width", array()), "html", null, true);
        echo " cm i ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "max_width", array()), "html", null, true);
        echo " cm</h5>-->
                <label for=\"width\">Unesite sirinu koju zelite: </label><br>
                <input type=\"text\" id=\"width\" name=\"width\" required class=\"form-control\" placeholder=\"Sirina mora da bude u okviru ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "min_width", array()), "html", null, true);
        echo " cm i ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "max_width", array()), "html", null, true);
        echo " cm\">
            </div>
            <div class=\"card-body\">
                <!--<h5 class=\"text-center\">Visina mora da bude u okviru ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "min_height", array()), "html", null, true);
        echo " cm i ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "max_height", array()), "html", null, true);
        echo " cm</h5>-->
                <label for=\"height\">Unesite visinu koju zelite: </label><br>
                <input type=\"text\" id=\"height\" name=\"height\" required class=\"form-control\" placeholder=\"Visina mora da bude u okviru ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "min_height", array()), "html", null, true);
        echo " cm i ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "max_height", array()), "html", null, true);
        echo " cm.\">
            </div>
            <div class=\"card-footer text-center\">
                <button type=\"submit\" class=\"btn btn-primary\">Dodajte model u korpu</button>
            </div>

        </form>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "Model/addToCart.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 18,  63 => 16,  55 => 13,  48 => 11,  40 => 6,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Model/addToCart.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\Model\\addToCart.html");
    }
}
