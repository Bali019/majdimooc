<?php

/* MOOCcommentaireBundle:Commentaire:Modifier.html.twig */
class __TwigTemplate_97c7af2ecb5a81abb4d8470b18baaf00be2fa735f8f6a16d0184b9ce6dfce2c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MOOCcommentaireBundle:Commentaire:Modifier.html.twig", 1);
        $this->blocks = array(
            'hn' => array($this, 'block_hn'),
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
    public function block_hn($context, array $blocks = array())
    {
        // line 3
        echo "
<form method=\"POST\" action=\"\"  class=\"btn btn-success\">
            <table alin=\"center\">
                <tr><td>Personne:</td><td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Personne", array()), 'widget');
        echo "</td></tr>
 
                <tr><td>contenu:</td><td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "contenu", array()), 'widget');
        echo "</td></tr>

            </table>
                 ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'rest');
        echo "
                 
";
    }

    public function getTemplateName()
    {
        return "MOOCcommentaireBundle:Commentaire:Modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  41 => 8,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block hn %}*/
/* */
/* <form method="POST" action=""  class="btn btn-success">*/
/*             <table alin="center">*/
/*                 <tr><td>Personne:</td><td>{{form_widget(f.Personne)}}</td></tr>*/
/*  */
/*                 <tr><td>contenu:</td><td>{{form_widget(f.contenu)}}</td></tr>*/
/* */
/*             </table>*/
/*                  {{form_rest(f)}}*/
/*                  */
/* {%endblock%}          */
/*                  */
/*                  */
