<?php

/* ::base.html.twig */
class __TwigTemplate_14695b45d61f020352ba18e75e47258b7f068ce62eeda161b04844ab97f71d60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "\t\t";
        $this->env->loadTemplate("stylesheets.html.twig")->display($context);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t\t<div id=\"header\">";
        // line 13
        $this->env->loadTemplate("header.html.twig")->display($context);
        echo "</div>
        <div id=\"body\">";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
\t\t<div id=\"footer\">";
        // line 15
        $this->env->loadTemplate("footer.html.twig")->display($context);
        echo "</div>
        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
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

    // line 14
    public function block_body($context, array $blocks = array())
    {
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
        echo "\t\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 17,  82 => 16,  77 => 14,  72 => 8,  66 => 7,  61 => 19,  59 => 16,  55 => 15,  51 => 14,  47 => 13,  40 => 10,  37 => 9,  35 => 8,  31 => 7,  23 => 1,);
    }
}
