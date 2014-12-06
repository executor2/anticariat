<?php

/* ShopAnticariatBundle:Default:footer.html.twig */
class __TwigTemplate_9bcbae9c22b6a8d94f1fd05365105177eeadc5c05809b537fe9d5d8f7e32c8d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'bb' => array($this, 'block_bb'),
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
    public function block_bb($context, array $blocks = array())
    {
        // line 4
        echo "dsadasdasdasd
";
    }

    public function getTemplateName()
    {
        return "ShopAnticariatBundle:Default:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
