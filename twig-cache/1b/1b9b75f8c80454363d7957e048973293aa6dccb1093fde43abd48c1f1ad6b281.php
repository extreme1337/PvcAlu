<?php

/* UserOrderCartManagement/odobravanje.html */
class __TwigTemplate_41f69ecf6b3e0d80f782127512ce3a7a21d5e6b2c9e9f023cb7ab42e2e2d723d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "UserOrderCartManagement/odobravanje.html", 1);
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
        echo "user/profile\" class=\"col-4 col-xs-4 col-md-4  text-center dash\">Nazad na Dashboard</a>
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/orders\" class=\"col-8 col-xs-8 col-md-8 text-center dash\">Prikazi porudzbine</a>
    </div>

    <form method=\"post\" class=\"col col-md-10 offset-md-1 card\">
        <div class=\"card-header\">
            <h2 class=\"text-center\">Porudzbina:</h2>
        </div>


        <div class=\"card-body\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["odobravanje"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["odobri"]) {
            // line 16
            echo "            <div class=\"form-group\">
                <label>Ime:</label> ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["odobri"], "forename", array()), "html", null, true);
            echo "
            </div>
            <div class=\"form-group\">
                <label>Prezime:</label> ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["odobri"], "surname", array()), "html", null, true);
            echo "
            </div>
            <div class=\"form-group\">
                <label>Adresa stanovanja:</label> ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["odobri"], "residential_address", array()), "html", null, true);
            echo "
            </div>
            <div class=\"form-group\">
                <label>Elektronska posta:</label> ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["odobri"], "email", array()), "html", null, true);
            echo "
            </div>
            <div class=\"form-group\">
                <label>Proizvodi: </label>
                <p>";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modeli"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["proizvodi"]) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proizvodi"], "name", array()), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proizvodi'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
            </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['odobri'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
            <select class=\"form-control\" name=\"proces\" id=\"proces\">
                    <option value=\"odobrena\">Odobri</option>
                    <option value=\"odbijena\">Odbij</option>
                </select>

        </div>


        <div class=\"card-footer text-center\"> <button type=\"submit\" class=\"btn btn-primary\">Posalji</button></div>
    </form>
</div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 45
        echo " ";
    }

    public function getTemplateName()
    {
        return "UserOrderCartManagement/odobravanje.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 45,  104 => 32,  89 => 30,  82 => 26,  76 => 23,  70 => 20,  64 => 17,  61 => 16,  57 => 15,  44 => 5,  40 => 4,  36 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserOrderCartManagement/odobravanje.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\UserOrderCartManagement\\odobravanje.html");
    }
}
