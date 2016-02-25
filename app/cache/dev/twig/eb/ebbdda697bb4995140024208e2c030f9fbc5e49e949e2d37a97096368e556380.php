<?php

/* MOOCcommentaireBundle:Commentaire:CommentAfficher.html.twig */
class __TwigTemplate_9fb402e0c0adaf0eebedb2435d41613e0fcbe111364c6313254f2e2c6ddaf489 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MOOCcommentaireBundle:Commentaire:CommentAfficher.html.twig", 1);
        $this->blocks = array(
            'commentaire' => array($this, 'block_commentaire'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_commentaire($context, array $blocks = array())
    {
        // line 3
        echo "    
    kjjlkj
    ilkj
    ljk
    l
";
    }

    public function getTemplateName()
    {
        return "MOOCcommentaireBundle:Commentaire:CommentAfficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block commentaire %}*/
/*     */
/*     kjjlkj*/
/*     ilkj*/
/*     ljk*/
/*     l*/
/* {%endblock%}*/
