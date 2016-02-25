<?php

/* MOOCcommentaireBundle::index.html.twig */
class __TwigTemplate_bc604c3a3ed0e86a28d609dbe0bf55c4bd07869145eba06265eb24861ae6870e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<head>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/MOOCcommentaire/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/MOOCcommentaire/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
    ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8bb605b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8bb605b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8bb605b_rating_1.js");
            // line 8
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
      
    ";
        } else {
            // asset "8bb605b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8bb605b") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8bb605b.js");
            echo "      <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
      
    ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "    <script language=\"javascript\" type=\"text/javascript\">
        function show(){var x = \$('.rating-well .star-full').length;
        window.document.stars.text.value=x;
    }
        </script>
    
</head>
<body>
 ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo " </body>";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "MOOCcommentaireBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  68 => 20,  66 => 19,  56 => 11,  40 => 8,  36 => 6,  31 => 4,  27 => 3,  23 => 2,  20 => 1,);
    }
}
/* <head>*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('bundles/starrating/css/rating.css') }}" />*/
/*   <link rel="stylesheet" type="text/css" href="{{asset('bundles/MOOCcommentaire/css/bootstrap.min.css')}}"/>*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('bundles/MOOCcommentaire/css/font-awesome.min.css')}}"/>*/
/* <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>*/
/*     {% javascripts*/
/*       '@StarRatingBundle/Resources/public/js/rating.js' %}*/
/*       <script src="{{ asset_url }}"></script>*/
/*       */
/*     {% endjavascripts %}*/
/*     <script language="javascript" type="text/javascript">*/
/*         function show(){var x = $('.rating-well .star-full').length;*/
/*         window.document.stars.text.value=x;*/
/*     }*/
/*         </script>*/
/*     */
/* </head>*/
/* <body>*/
/*  {% block body %} {% endblock  %}*/
/*  </body>*/
