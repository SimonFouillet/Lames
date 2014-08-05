<?php

/* TestBlogBundle:Blog:modifier.html.twig */
class __TwigTemplate_6870533230981e1c98021f201428505522234affb0465fbe7f57a2d7e657dbf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TestBlogBundle::layout.html.twig");

        $this->blocks = array(
            'testBlogBody' => array($this, 'block_testBlogBody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TestBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_testBlogBody($context, array $blocks = array())
    {
        // line 3
        echo "\t<h2>Modifier un article</h2>
\t
\t";
        // line 5
        $this->env->loadTemplate("TestBlogBundle:Blog:formulaire.html.twig")->display($context);
        // line 6
        echo "\t
\t<p>
\t\tAttention!! Cet article sera directement modifié sur la page d'accueil après validation de ce formulaire\t
\t</p>
\t
\t<p>
\t\t<a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("testblog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\" class='btn'>
\t\t\t<i class='icon-chevron-left'></i>
\t\t\tRetour à l'article
\t\t</a>
\t</p>
\t
";
    }

    public function getTemplateName()
    {
        return "TestBlogBundle:Blog:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  37 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
