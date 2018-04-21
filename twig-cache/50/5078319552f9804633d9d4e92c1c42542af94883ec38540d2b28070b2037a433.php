<?php

/* Main/home.php */
class __TwigTemplate_f717cb360beeabbca67783ce5e243edf241881b071d874a46ac6c5b8cdda5f52 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav>
    <ul>
        <?php foreach (\$categories as \$category) : ?>
        <li>
            <a href=\"/category/<?php echo \$category->category_id; ?>\">
                <?php echo \$category->name; ?>
            </a>
        <?php endforeach; ?>
    </ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "Main/home.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Main/home.php", "C:\\xampp\\htdocs\\PvcAlu\\views\\Main\\home.php");
    }
}
