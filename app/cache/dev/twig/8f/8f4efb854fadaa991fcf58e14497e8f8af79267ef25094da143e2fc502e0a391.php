<?php

/* MOOCcommentaireBundle:Commentaire:Commentaire.html.twig */
class __TwigTemplate_555a509cd161950e1e0428601dbe955c3a04db9f8b6ff3fffeb86928bc08f4fc extends Twig_Template
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
        echo "
";
        // line 2
        echo $this->env->getExtension('star_rating_extension')->rating(10);
        echo "
<table border=\"1\">
<h1>Recherche Liste des commantaire </h1>
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) ? $context["commentaires"] : $this->getContext($context, "commentaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "personne", array()), "nom", array()), "html", null, true);
            echo "
    ";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "date", array()), "m/d/Y"), "html", null, true);
            echo "<br/>
    ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "contenu", array()), "html", null, true);
            echo "
    <br/>
    <br/>
    <br/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "<br/>
<br/>
<br/>
<form method=\"POST\" action=\"\" >
<table>
    <tr><td>Personne:</td><td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Personne", array()), 'widget');
        echo "</td></tr>
     <tr><td>Cours:</td><td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Cours", array()), 'widget');
        echo "</td></tr>
 <tr><td>contenu:</td><td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "contenu", array()), 'widget');
        echo "</td></tr>
     <tr><td>date:</td><td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "date", array()), 'widget');
        echo "</td></tr>    
</table>
      ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'rest');
        echo "
</form>
</table>

";
    }

    public function getTemplateName()
    {
        return "MOOCcommentaireBundle:Commentaire:Commentaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  52 => 13,  41 => 8,  37 => 7,  32 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }
}
/* */
/* {{ 10|rating }}*/
/* <table border="1">*/
/* <h1>Recherche Liste des commantaire </h1>*/
/* {% for i in commentaires %}*/
/*     {{i.personne.nom}}*/
/*     {{i.date|date("m/d/Y")}}<br/>*/
/*     {{i.contenu}}*/
/*     <br/>*/
/*     <br/>*/
/*     <br/>*/
/* {% endfor %}*/
/* <br/>*/
/* <br/>*/
/* <br/>*/
/* <form method="POST" action="" >*/
/* <table>*/
/*     <tr><td>Personne:</td><td>{{form_widget(f.Personne)}}</td></tr>*/
/*      <tr><td>Cours:</td><td>{{form_widget(f.Cours)}}</td></tr>*/
/*  <tr><td>contenu:</td><td>{{form_widget(f.contenu)}}</td></tr>*/
/*      <tr><td>date:</td><td>{{form_widget(f.date)}}</td></tr>    */
/* </table>*/
/*       {{form_rest(f)}}*/
/* </form>*/
/* </table>*/
/* */
/* */
