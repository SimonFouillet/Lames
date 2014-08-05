<?php

/* TestBlogBundle::layout.html.twig */
class __TwigTemplate_4a96657862da32f5e67765f06afbd2c30984462aa797a34a11f0b60a05ba4748 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'testBlogBody' => array($this, 'block_testBlogBody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil Blog ";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayBlock('testBlogBody', $context, $blocks);
    }

    public function block_testBlogBody($context, array $blocks = array())
    {
        // line 6
        echo "\t
\t";
    }

    public function getTemplateName()
    {
        return "TestBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  41 => 5,  38 => 4,  113 => 25,  102 => 22,  95 => 21,  91 => 20,  85 => 16,  78 => 15,  70 => 12,  66 => 11,  60 => 10,  57 => 9,  52 => 8,  47 => 5,  44 => 4,  37 => 3,  30 => 3,);
    }
}
