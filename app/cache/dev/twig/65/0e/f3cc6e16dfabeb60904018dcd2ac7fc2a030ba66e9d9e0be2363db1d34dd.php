<?php

/* TestBlogBundle:Blog:menu.html.twig */
class __TwigTemplate_650ef3cc6e16dfabeb60904018dcd2ac7fc2a030ba66e9d9e0be2363db1d34dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ul class=\"nav nav-pills nav-stacked\">
\t";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_articles"]) ? $context["liste_articles"] : $this->getContext($context, "liste_articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 3
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("testblog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "</a>
\t\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TestBlogBundle:Blog:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  29 => 4,  26 => 3,  22 => 2,  19 => 1,  124 => 43,  120 => 41,  116 => 39,  110 => 37,  104 => 34,  96 => 8,  88 => 6,  82 => 45,  80 => 39,  75 => 37,  69 => 34,  64 => 32,  59 => 30,  55 => 29,  35 => 11,  31 => 6,  24 => 1,  48 => 6,  41 => 5,  38 => 4,  113 => 25,  102 => 22,  95 => 21,  91 => 20,  85 => 16,  78 => 15,  70 => 12,  66 => 11,  60 => 10,  57 => 9,  52 => 8,  47 => 5,  44 => 4,  37 => 3,  30 => 3,);
    }
}
