<?php

/* MOOCcommentaireBundle:Commentaire:ratingcom.html.twig */
class __TwigTemplate_0bffee817a7fe802c4bd61540dd023dc0807b70d452dd8b41c2651aa8c342b67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MOOCcommentaireBundle::index2.html.twig", "MOOCcommentaireBundle:Commentaire:ratingcom.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MOOCcommentaireBundle::index2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <center>
        <h1>Recherche Liste des commantaire </h1>
        <table border=\"1\" >
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) ? $context["commentaires"] : $this->getContext($context, "commentaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 10
            echo "           
            <td> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "personne", array()), "nom", array()), "html", null, true);
            echo "<br/></td>
           <td> ";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "date", array()), "m/d/Y"), "html", null, true);
            echo "<br/>
            ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "contenu", array()), "html", null, true);
            echo "<br/></td>
      
           <td> <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a> <br/></td>
         <td>   <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\">Modifier</a> <br/></td>
     
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </table>
        <br/>
        <br/>
        <br/>
        <form method=\"POST\" action=\"\"  class=\"btn btn-success\">
            <table alin=\"center\">
                <tr><td>Personne:</td><td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Personne", array()), 'widget');
        echo "</td></tr>
              
                <tr><td>contenu:</td><td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "contenu", array()), 'widget');
        echo "</td></tr>

            </table>
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'rest');
        echo "   
        </form>
    </center>



    <center>
        ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'form');
        echo " 


        <form name=\"stars\" type=\"submit\"method=\"POST\">    
           
            <input type=\"hidden\" name=\"text\" value=\"\"/>



            <input type=\"submit\" value=\"Voter\" class=\"btn btn-success\" onclick=\"show();\" /></p>
        </form>
    </center>
";
    }

    public function getTemplateName()
    {
        return "MOOCcommentaireBundle:Commentaire:ratingcom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 38,  89 => 31,  83 => 28,  78 => 26,  70 => 20,  60 => 16,  56 => 15,  51 => 13,  47 => 12,  43 => 11,  40 => 10,  36 => 9,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends 'MOOCcommentaireBundle::index2.html.twig' %}*/
/* */
/* */
/* */
/* {% block body %}*/
/*     <center>*/
/*         <h1>Recherche Liste des commantaire </h1>*/
/*         <table border="1" >*/
/*         {% for i in commentaires %}*/
/*            */
/*             <td> {{i.personne.nom}}<br/></td>*/
/*            <td> {{i.date|date("m/d/Y")}}<br/>*/
/*             {{i.contenu}}<br/></td>*/
/*       */
/*            <td> <a href="{{path("supprimer",{'id':i.id})}}">Supprimer</a> <br/></td>*/
/*          <td>   <a href="{{path("modifier",{'id':i.id})}}">Modifier</a> <br/></td>*/
/*      */
/*             </tr>*/
/*         {% endfor %}*/
/*         </table>*/
/*         <br/>*/
/*         <br/>*/
/*         <br/>*/
/*         <form method="POST" action=""  class="btn btn-success">*/
/*             <table alin="center">*/
/*                 <tr><td>Personne:</td><td>{{form_widget(f.Personne)}}</td></tr>*/
/*               */
/*                 <tr><td>contenu:</td><td>{{form_widget(f.contenu)}}</td></tr>*/
/* */
/*             </table>*/
/*         {{form_rest(f)}}   */
/*         </form>*/
/*     </center>*/
/* */
/* */
/* */
/*     <center>*/
/*         {{form(form2)  }} */
/* */
/* */
/*         <form name="stars" type="submit"method="POST">    */
/*            */
/*             <input type="hidden" name="text" value=""/>*/
/* */
/* */
/* */
/*             <input type="submit" value="Voter" class="btn btn-success" onclick="show();" /></p>*/
/*         </form>*/
/*     </center>*/
/* {% endblock %}*/
