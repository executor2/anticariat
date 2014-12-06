<?php

/* base.html.twig */
class __TwigTemplate_96bf7d187f04136fe45ccf78214eb1cf4ee48b1318f3158a513be05dc14e6aa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("header.html.twig");
        // line 15
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."header.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'stylesheets' => array($this, 'block_stylesheets'),
                'body' => array($this, 'block_body'),
                'footer' => array($this, 'block_footer'),
                'javascripts' => array($this, 'block_javascripts'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "\t\t <!-- Bootstrap -->
\t\t<link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">
\t\t
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t\t<div>";
        // line 15
        echo "</div>
        <div>";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
\t\t<div>";
        // line 17
        $this->displayBlock('footer', $context, $blocks);
        echo "</div>
        ";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Anticariat";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        echo "body";
    }

    // line 17
    public function block_footer($context, array $blocks = array())
    {
        echo "footer";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "\t\t\t<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t\t<!-- Include all compiled plugins (below), or include individual files as needed -->
\t\t\t<script src=\"/js/bootstrap.min.js\"></script>
\t\t";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 19,  102 => 18,  96 => 17,  90 => 16,  85 => 8,  79 => 7,  74 => 24,  72 => 18,  68 => 17,  64 => 16,  61 => 15,  55 => 12,  50 => 9,  48 => 8,  44 => 7,  36 => 1,  14 => 15,);
    }
}
