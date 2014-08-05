<?php

/* TestBlogBundle:Blog:index.html.twig */
class __TwigTemplate_6fad49cb3100a19257c142dc8aaa714728d1ed8dde24f2ee46e6bdc02191f948 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TestBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
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
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $this->displayParentBlock("header", $context, $blocks);
        echo "Blog";
    }

    // line 4
    public function block_testBlogBody($context, array $blocks = array())
    {
        // line 5
        echo "\t<h2>Liste des articles du blog</h2>
\t
\t<ul>
\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeArticles"]) ? $context["listeArticles"] : $this->getContext($context, "listeArticles")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 9
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("testblog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "</a>
\t\t\t\tpar ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "auteur"), "html", null, true);
            echo ",
\t\t\t\tle ";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "d/m/Y", "Europe/Paris"), "html", null, true);
            echo "
\t\t\t</li>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "\t\t\tPas d'article pour le moment!!
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t
\t</ul>
\t<div class=\"pagination\">
\t\t<ul>
\t\t\t";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nombrePage"]) ? $context["nombrePage"] : $this->getContext($context, "nombrePage"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 21
            echo "\t\t  \t\t<li ";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\" ";
            }
            echo "> 
\t\t  \t\t\t<a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("testblog_accueil", array("page" => (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</a> 
\t\t  \t\t</li>
\t\t  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t</ul>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "TestBlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 25,  102 => 22,  95 => 21,  91 => 20,  85 => 16,  78 => 15,  70 => 12,  66 => 11,  60 => 10,  57 => 9,  52 => 8,  47 => 5,  44 => 4,  37 => 3,  30 => 2,);
    }
}
