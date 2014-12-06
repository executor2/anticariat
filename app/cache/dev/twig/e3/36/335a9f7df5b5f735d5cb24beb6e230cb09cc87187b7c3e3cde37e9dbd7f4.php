<?php

/* ::header.html.twig */
class __TwigTemplate_e336335a9f7df5b5f735d5cb24beb6e230cb09cc87187b7c3e3cde37e9dbd7f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = array())
    {
        // line 2
        echo "\t<h1>Header</h1>
";
    }

    public function getTemplateName()
    {
        return "::header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }
}
