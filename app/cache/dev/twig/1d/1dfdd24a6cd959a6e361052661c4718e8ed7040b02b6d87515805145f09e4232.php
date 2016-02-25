<?php

/* MOOCcommentaireBundle:Commentaire:Affichage.html.twig */
class __TwigTemplate_14ceb7d34ee20664625d492320a47bb6b03f70fe554cca2d00e22153a20b740d extends Twig_Template
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
        echo "        <table border=\"1\" >
        ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) ? $context["commentaires"] : $this->getContext($context, "commentaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "            <tr> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
            echo "<br/>
            <tr> ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "personne", array()), "nom", array()), "html", null, true);
            echo "<br/>
            ";
            // line 5
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "date", array()), "m/d/Y"), "html", null, true);
            echo "<br/>
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "contenu", array()), "html", null, true);
            echo "<br/>
            ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "cours", array()), "id", array()), "html", null, true);
            echo "<br/>
            <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a> <br/>
            <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <br/>
        </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "MOOCcommentaireBundle:Commentaire:Affichage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  31 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/*         <table border="1" >*/
/*         {% for i in commentaires %}*/
/*             <tr> {{i.id}}<br/>*/
/*             <tr> {{i.personne.nom}}<br/>*/
/*             {{i.date|date("m/d/Y")}}<br/>*/
/*             {{i.contenu}}<br/>*/
/*             {{i.cours.id}}<br/>*/
/*             <a href="{{path("supprimer",{'id':i.id})}}">Supprimer</a> <br/>*/
/*             <a href="{{path("modifier",{'id':i.id})}}">Modifier</a> <br/>*/
/*         </tr>*/
/*           {% endfor %}*/
