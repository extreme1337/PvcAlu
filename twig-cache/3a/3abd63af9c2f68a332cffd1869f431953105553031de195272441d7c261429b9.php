<?php

/* Main/getLogin.html */
class __TwigTemplate_e54a8b01bacd137b31b5388dac0cff522762fdb2c6e748ab4ebeed71c644d2fc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "Main/getLogin.html", 1);
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
    <form action=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/login\" method=\"POST\" class=\"col col-md-8 offset-md-2 card\">
        <div class=\"card-header\">
           <h4 class=\"text-center\">User Login</h4>
        </div>
        <div class=\"card-body\">
        <div class=\"form-group\">
            <label for=\"email\">Email:</label>
            <input type=\"text\" id=\"email\" name=\"email\" required class=\"form-control\"
            placeholder=\"Unesite svoj email.\">
        </div>

        <div class=\"form-group\">
            <label for=\"password\">Password:</label>
            <input type=\"password\" id=\"password\" name=\"password\" required class=\"form-control\" 
            placeholder=\"Unesite svoju lozinku.\">
        </div>
    </div>

        <div class=\"card-footer text-center\">
            <button class=\"btn btn-primary \" type=\"submit\">
                Log in
            </button>
        </div>
    </form>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "Main/getLogin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  34 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Main/getLogin.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\Main\\getLogin.html");
    }
}
