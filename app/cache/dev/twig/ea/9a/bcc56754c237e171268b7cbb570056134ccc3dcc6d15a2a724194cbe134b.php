<?php

/* ::layout.html.twig */
class __TwigTemplate_ea9abcc56754c237e171268b7cbb570056134ccc3dcc6d15a2a724194cbe134b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "'
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title> ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "</head>
<body>
\t<div class=\"container\">
\t\t<div id=\"header\" class=\"hero-unit\">
\t\t\t<h1>Mon Projet Symfony2</h1>
\t\t\t<p>Ce projet est propulsé par Symfony2, et construit grâce au
\t\t\t\ttutoriel du siteduzero.</p>
\t\t\t<p>
\t\t\t\t<a class=\"btn btn-primary btn-large\"
\t\t\t\t\thref=\"http://www.siteduzero.com/informatique/tutoriels/developpez-votre-site-web-avec-le-framework-symfony2\">
\t\t\t\t\tLire le tutoriel » </a>
\t\t\t</p>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div id=\"menu\" class=\"span3\">
\t\t\t\t<h3>Le blog</h3>
\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t<li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("testblog_accueil");
        echo "\">Accueil du blog</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("testblog_ajouter");
        echo "\">Ajouter un article</a></li>
\t\t\t\t</ul>
\t\t\t\t";
        // line 32
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TestBlogBundle:Blog:menu", array("nbMaxArticles" => "3")));
        echo "
\t\t\t</div>
\t\t\t<div id=\"content\" class=\"span9\">";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
\t\t</div>
\t\t
\t\t<footer>";
        // line 37
        $this->displayBlock('footer', $context, $blocks);
        echo "</footer>
\t</div>
\t";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "</body>

</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Site de test";
    }

    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"
\ttype=\"text/css\" />
";
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["webmaster"]) ? $context["webmaster"] : $this->getContext($context, "webmaster")), "html", null, true);
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        echo " ";
        // line 41
        echo "\t<script
\t\tsrc=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 43,  120 => 41,  116 => 39,  110 => 37,  104 => 34,  96 => 8,  88 => 6,  82 => 45,  80 => 39,  75 => 37,  69 => 34,  64 => 32,  59 => 30,  55 => 29,  35 => 11,  31 => 6,  24 => 1,  48 => 6,  41 => 5,  38 => 4,  113 => 25,  102 => 22,  95 => 21,  91 => 20,  85 => 16,  78 => 15,  70 => 12,  66 => 11,  60 => 10,  57 => 9,  52 => 8,  47 => 5,  44 => 4,  37 => 3,  30 => 3,);
    }
}
