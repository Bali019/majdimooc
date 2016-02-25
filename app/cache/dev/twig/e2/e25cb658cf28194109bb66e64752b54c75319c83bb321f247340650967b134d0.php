<?php

/* MOOCcommentaireBundle:Commentaire:rate.html.twig */
class __TwigTemplate_e1d2d13305485524e72cd67e9cde948ba7fe92224391eede33a306aaa2c5b318 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MOOCcommentaireBundle::index.html.twig", "MOOCcommentaireBundle:Commentaire:rate.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MOOCcommentaireBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    

        <center>
                ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

    <form name=\"firas\" method=\"POST\">    
    <strong>voter</strong></p>
    <input type=\"hidden\" name=\"text\" value=\"\"/>
    <input type=\"text\" name=\"ville\" value=\"\"/>


<input type=\"submit\" value=\"Valider\" class=\"btn btn-success\" onclick=\"show();\" /></p>
    </form>
        </center>
    ";
    }

    public function getTemplateName()
    {
        return "MOOCcommentaireBundle:Commentaire:rate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends 'MOOCcommentaireBundle::index.html.twig' %}*/
/*   */
/* */
/* */
/*     {% block body %}*/
/*     */
/* */
/*         <center>*/
/*                 {{form(form)  }}*/
/* */
/*     <form name="firas" method="POST">    */
/*     <strong>voter</strong></p>*/
/*     <input type="hidden" name="text" value=""/>*/
/*     <input type="text" name="ville" value=""/>*/
/* */
/* */
/* <input type="submit" value="Valider" class="btn btn-success" onclick="show();" /></p>*/
/*     </form>*/
/*         </center>*/
/*     {% endblock %}*/
