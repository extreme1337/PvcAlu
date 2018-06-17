<?php

/* _global/index.html */
class __TwigTemplate_434838722bd9aaead6a86a9539effc512a288434396f9ea2109db4c2563eacf1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'naslov' => array($this, 'block_naslov'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"sr\">

<head>
    <title>Pvc Alu stolarija - ";
        // line 5
        $this->displayBlock('naslov', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/images/favicon.png\" type=\"image/x-icon\" />
    <meta charset=\"utf-8\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/libs/font-awesome/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/libs/bootstrap/dist/css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/css/main.css\">
</head>

<body>


    <div class=\"container\">
        <header>

            <div class=\"row\">
                <div class=\"col col-sm\">
                    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/images/logo.png\" alt=\"logo\">
                    </a>
                </div>
                <div class=\"col col-sm\">
                    <div class=\"social-icons\">
                        <a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                        <a href=\"#\"><i class=\"fa fa-linkedin\"></i> </a>
                        <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "cart/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart_model"] ?? null), "cart_model_id", array()), "html", null, true);
        echo "\">
                            <i class=\"fa fa-shopping-cart\"></i></a>

                    </div>
                </div>



            </div>
            <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                    </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
                    <div class=\"navbar-nav\">
                        <a class=\"nav-item nav-link\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "\"><i class=\"fa fa-home\"></i> Pocetna</a> ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 47
            echo "                        <a class=\"nav-item nav-link\" href=\"";
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "category/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category_id", array()), "html", null, true);
            echo "\"><i class=\"fa fa-list\"></i> ";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()))), "html", null, true);
            echo "</a> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                        <!--  <a class=\"nav-item nav-link\" href=\"";
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "contact\"><i class=\"fa fa-phone\"></i>Kontakt</a>
                                <a class=\"nav-item nav-link\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "log-out\"><i class=\"fa fa-sign-out\"></i>Odjava</a>    -->

                    </div>
                </div>
                <form action=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "user/login/\" method=\"get\">
                    <button type=\"submit\" class=\"btn btn-primary navbar-btn\">Login</button>
                </form>
            </nav>


        </header>



        <main>
            ";
        // line 64
        $this->displayBlock('main', $context, $blocks);
        // line 65
        echo "        </main>


        <footer>

            <div class=\"row\">
                <div class=\"footer-top col col-sm-12 col-md-12\">

                    <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "\">
                        <img class=\"slika\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/images/logo.png\" alt=\"logo\">
                    </a>


                    <p class=\"text\">Kontakt</p>
                    <p class=\"text\">Put za Mojsilovo bb</p>
                    <p class=\"text\">11000, Beograd</p>
                    <p class=\"text\">Tel: 011-654-321</p>
                    <p class=\"text\">office@invisible.rs</p>





                </div>
            </div>
            <div class=\"footer-lower\">
                <div class=\"col-sm-12\">
                    <hr>
                </div>
                <div class=\"col-sm-12\">
                    <p class=\"text-center\">Sva prava zadržana &copy; 2018 | Milan&amp;Marko</p>
                </div>
            </div>

        </footer>
    </div>



    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/libs/jquery/dist/jquery.min.js\"></script>
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/libs/bootstrap/dist/js/bootstrap.min.js\"></script>

</body>

</html>";
    }

    // line 5
    public function block_naslov($context, array $blocks = array())
    {
        echo "Pocetna";
    }

    // line 64
    public function block_main($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "_global/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 64,  204 => 5,  195 => 105,  191 => 104,  158 => 74,  154 => 73,  144 => 65,  142 => 64,  128 => 53,  121 => 49,  116 => 48,  104 => 47,  98 => 46,  78 => 31,  66 => 22,  62 => 21,  48 => 10,  44 => 9,  40 => 8,  35 => 6,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_global/index.html", "C:\\xampp\\htdocs\\PvcAlu\\views\\_global\\index.html");
    }
}
