<?php

/* TestBlogBundle:Blog:ajouter.html.twig */
class __TwigTemplate_6b4e964b9b84a069e69b46d063c01ad761321c45dd5d3d9b52a6e806b59fa371 extends Twig_Template
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
        echo "\t<h2>Ajouter un article</h2>
\t
\t";
        // line 5
        $this->env->loadTemplate("TestBlogBundle:Blog:formulaire.html.twig")->display($context);
        // line 6
        echo "\t
\t<p>
\t\tAttention cet article sera directement 
\t\tajouté sur la page d'accueil après 
\t\tvalidation de ce formulaire\t
\t</p>

\t<p>
\t\t";
        // line 15
        echo "\t\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("testblog_accueil");
        echo "\" class=\"btn\">
\t\t\t<i class=\"icon-chevron-left\"></i>
\t\t\tRetour à l'accueil
\t\t</a>
\t</p>
";
    }

    public function getTemplateName()
    {
        return "TestBlogBundle:Blog:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 15,  37 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
