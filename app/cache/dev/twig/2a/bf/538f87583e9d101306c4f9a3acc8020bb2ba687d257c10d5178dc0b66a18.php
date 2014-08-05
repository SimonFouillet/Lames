<?php

/* TestBlogBundle:Blog:voir.html.twig */
class __TwigTemplate_2abf538f87583e9d101306c4f9a3acc8020bb2ba687d257c10d5178dc0b66a18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TestBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "Lecture d'un article";
    }

    // line 3
    public function block_testBlogBody($context, array $blocks = array())
    {
        // line 4
        echo "\t<h2>
\t\t";
        // line 5
        if ((!(null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image")))) {
            // line 6
            echo "\t\t\t<img 
\t\t\t\tsrc=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((((($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "uploadDir") . "/") . $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "id")) . ".") . $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "url"))), "html", null, true);
            echo "\" 
\t\t\t\talt=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "alt"), "html", null, true);
            echo "\"/>
\t\t";
        }
        // line 10
        echo "
\t\t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
        echo "
\t</h2>
\tPar ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "auteur"), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "d/m/Y", "Europe/Paris"), "html", null, true);
        echo ",
\t
\t";
        // line 15
        if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categories"), "count") > 0)) {
            // line 16
            echo "\t\t- Categories :
\t\t";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categories"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 18
                echo "\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "nom"), "html", null, true);
                echo "
\t\t\t";
                // line 19
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                    echo ", ";
                }
                // line 20
                echo "\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "\t";
        }
        // line 22
        echo "\t
\t<br/>
\t
\t";
        // line 25
        if ((twig_length_filter($this->env, (isset($context["listeArticleCompetences"]) ? $context["listeArticleCompetences"] : $this->getContext($context, "listeArticleCompetences"))) > 0)) {
            // line 26
            echo "\t\t-Compétences :
\t\t<ul>
\t\t\t";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeArticleCompetences"]) ? $context["listeArticleCompetences"] : $this->getContext($context, "listeArticleCompetences")));
            foreach ($context['_seq'] as $context["_key"] => $context["articleCompetence"]) {
                // line 29
                echo "\t\t\t\t<li>
\t\t\t\t\t";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["articleCompetence"]) ? $context["articleCompetence"] : $this->getContext($context, "articleCompetence")), "competence"), "nom"), "html", null, true);
                echo "
\t\t\t\t\t";
                // line 32
                echo "\t\t\t\t\t(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articleCompetence"]) ? $context["articleCompetence"] : $this->getContext($context, "articleCompetence")), "niveau"), "html", null, true);
                echo ")
\t\t\t\t</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articleCompetence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t</ul>
\t";
        }
        // line 37
        echo "\t
\t<div class=\"well\">
\t\t";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu"), "html", null, true);
        echo "
\t</div>
\t
\t<h3>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "nbCommentaires"), "html", null, true);
        echo " Commentaires: </h3>
\t<div class=\"well\">
\t\t
\t\t";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "commentaires"));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 46
            echo "\t\t
\t\tLe ";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "date"), "d/m/Y"), "html", null, true);
            echo ", par <b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "auteur"), "html", null, true);
            echo "</b>
\t\t<div class=\"well\">
\t\t\t";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "contenu"), "html", null, true);
            echo "
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t</div>
\t
\t
\t<p>
\t\t";
        // line 57
        echo "\t\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("testblog_accueil");
        echo "\" class=\"btn\">
\t\t\t<i class=\"icon-chevron-left\"></i>
\t\t\tRetour
\t\t</a>
\t\t
\t\t";
        // line 63
        echo "\t\t<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("testblog_modifier", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
\t\t\t<i class=\"icon-edit\"></i>
\t\t\tModifier l'article
\t\t</a>
\t\t
\t\t";
        // line 69
        echo "\t\t<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("testblog_supprimer", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
\t\t\t<i class=\"icon-trash\"></i>
\t\t\tSupprimer l'article
\t\t</a>
\t</p>
";
    }

    public function getTemplateName()
    {
        return "TestBlogBundle:Blog:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 69,  208 => 63,  199 => 57,  193 => 52,  184 => 49,  177 => 47,  174 => 46,  170 => 45,  164 => 42,  158 => 39,  154 => 37,  150 => 35,  140 => 32,  136 => 30,  133 => 29,  129 => 28,  125 => 26,  123 => 25,  118 => 22,  115 => 21,  101 => 20,  97 => 19,  92 => 18,  75 => 17,  72 => 16,  70 => 15,  63 => 13,  58 => 11,  55 => 10,  50 => 8,  46 => 7,  43 => 6,  41 => 5,  38 => 4,  35 => 3,  29 => 2,);
    }
}
