<?php

/* ShopAnticariatBundle:Default:index.html.twig */
class __TwigTemplate_1d3f70dd2dabb8cc7a234f0fe3eb1066784d93d9a8b9b34e688a67eec9a81cba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<h1>Hello !</h1>

\t<a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("book");
        echo "\">Books</a>
";
    }

    public function getTemplateName()
    {
        return "ShopAnticariatBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,);
    }
}
