<?php

/* MOOCcommentaireBundle:Commentaire:Affichage.html.twig */
class __TwigTemplate_464f8ce495164b07f78a11e1b841c2660bf31c4544dfdcee6cf56a8a50a9e5a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MOOCcommentaireBundle:Commentaire:Affichage.html.twig", 1);
        $this->blocks = array(
            'stars' => array($this, 'block_stars'),
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

    // line 4
    public function block_stars($context, array $blocks = array())
    {
        echo " 
    <center>
        ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'form');
        echo " 


        <form name=\"stars\" type=\"submit\"method=\"POST\">    
           
            <input type=\"hidden\" name=\"text\" value=\"\"/>



            <input type=\"submit\" value=\"Voter\" class=\"btn btn-success\" onclick=\"show();\" /></p>
        </form>
    </center>    
    
   ";
    }

    // line 23
    public function block_hn($context, array $blocks = array())
    {
        // line 24
        echo "

    
    
<h2 class=\"section_title comments_list_title\"> Comments</h2>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) ? $context["commentaires"] : $this->getContext($context, "commentaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 30
            echo "
      
          
    <div id=\"comments\" class=\"comments_list_wrap\">
         </br>      
                                  </br>  
                                
                                <ul class=\"comments_list\">
                                    <li id=\"comment-1\" class=\"comment even thread-even depth-1 comment_item\">
                                        <div class=\"comment_author_avatar\">
\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://1.gravatar.com/avatar/d2700afddcd9c659ff78183408184c6c?s=75&d=mm&r=g"), "html", null, true);
            echo "\" srcset=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://1.gravatar.com/avatar/d2700afddcd9c659ff78183408184c6c?s=150&amp;d=mm&amp;r=g 2x"), "html", null, true);
            echo "\"  class=\"avatar avatar-75 photo\" height=\"75\" width=\"75\">
\t\t\t\t\t\t\t\t\t\t</div>
                                        <div class=\"comment_content\">
                                            <div class=\"comment_info\">
                                                <span class=\"comment_author\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "personne", array()), "nom", array()), "html", null, true);
            echo "</span>
                                                <span class=\"comment_date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comment_date_label\">Posted</span> 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comment_date_value\">";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["i"], "date", array()), "m/d/Y"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                
                                            </div>
                                            <div class=\"comment_text_wrap\">
                                                <div class=\"comment_text\">
                                                    <p>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "contenu", array()), "html", null, true);
            echo "</p>
                                                </div>
                                            </div>
                                            <div class=\"comment_reply\"><a rel=\"nofollow\" class=\"comment-reply-link\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></div> <div class=\"comment_reply\"><a rel=\"nofollow\" class=\"comment-reply-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></div>
                                        
                                        </div>
                                    </li>
                                </ul>
                                             </br>      
                                  </br>  
                                <div class=\"comments_pagination\"></div>
                            </div>          
          

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                   
      
        <br/>
        <br/>
        <br/>
       
          
        
     
       
    
        
        
        <center> 
        <div class=\"comments_form_wrap\">
                                <h2 class=\"section_title comments_form_title\">Add Comment</h2>
                                <div class=\"comments_form\">
                                    <div id=\"respond\" class=\"comment-respond\">
                                        <form method=\"POST\" action=\"\" class=\"comment-form\">
                                            <div class=\"comments_notes\">";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Personne", array()), 'widget');
        echo "</div>
                                            
                                            <div class=\"comments_field comments_message\">
                                                <label for=\"comment\" class=\"required\" placeholder=\"Comment\">";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "contenu", array()), 'widget');
        echo "</label>
                                               
                                            </div>
                                            
                                               ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'rest');
        echo " 
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
        
        </center>
        
        
        
        
        
            

            ";
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
        return array (  163 => 94,  156 => 90,  150 => 87,  129 => 68,  109 => 56,  103 => 53,  94 => 47,  88 => 44,  79 => 40,  67 => 30,  63 => 29,  56 => 24,  53 => 23,  35 => 6,  29 => 4,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* */
/* {% block stars %} */
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
/*     </center>    */
/*     */
/*    {% endblock  %} */
/* */
/* */
/* */
/* {% block hn %}*/
/* */
/* */
/*     */
/*     */
/* <h2 class="section_title comments_list_title"> Comments</h2>*/
/*         {% for i in commentaires %}*/
/* */
/*       */
/*           */
/*     <div id="comments" class="comments_list_wrap">*/
/*          </br>      */
/*                                   </br>  */
/*                                 */
/*                                 <ul class="comments_list">*/
/*                                     <li id="comment-1" class="comment even thread-even depth-1 comment_item">*/
/*                                         <div class="comment_author_avatar">*/
/* 											<img alt="" src="{{ asset('http://1.gravatar.com/avatar/d2700afddcd9c659ff78183408184c6c?s=75&d=mm&r=g') }}" srcset="{{ asset('http://1.gravatar.com/avatar/d2700afddcd9c659ff78183408184c6c?s=150&amp;d=mm&amp;r=g 2x') }}"  class="avatar avatar-75 photo" height="75" width="75">*/
/* 										</div>*/
/*                                         <div class="comment_content">*/
/*                                             <div class="comment_info">*/
/*                                                 <span class="comment_author">{{i.personne.nom}}</span>*/
/*                                                 <span class="comment_date">*/
/* 													<span class="comment_date_label">Posted</span> */
/* 													<span class="comment_date_value">{{i.date|date("m/d/Y")}}</span>*/
/* 												</span>*/
/*                                                 */
/*                                             </div>*/
/*                                             <div class="comment_text_wrap">*/
/*                                                 <div class="comment_text">*/
/*                                                     <p>{{i.contenu}}</p>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="comment_reply"><a rel="nofollow" class="comment-reply-link" href="{{path("modifier",{'id':i.id})}}">Modifier</a></div> <div class="comment_reply"><a rel="nofollow" class="comment-reply-link" href="{{path("supprimer",{'id':i.id})}}">Supprimer</a></div>*/
/*                                         */
/*                                         </div>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                                              </br>      */
/*                                   </br>  */
/*                                 <div class="comments_pagination"></div>*/
/*                             </div>          */
/*           */
/* */
/*             {% endfor %}*/
/*                    */
/*       */
/*         <br/>*/
/*         <br/>*/
/*         <br/>*/
/*        */
/*           */
/*         */
/*      */
/*        */
/*     */
/*         */
/*         */
/*         <center> */
/*         <div class="comments_form_wrap">*/
/*                                 <h2 class="section_title comments_form_title">Add Comment</h2>*/
/*                                 <div class="comments_form">*/
/*                                     <div id="respond" class="comment-respond">*/
/*                                         <form method="POST" action="" class="comment-form">*/
/*                                             <div class="comments_notes">{{form_widget(f.Personne)}}</div>*/
/*                                             */
/*                                             <div class="comments_field comments_message">*/
/*                                                 <label for="comment" class="required" placeholder="Comment">{{form_widget(f.contenu)}}</label>*/
/*                                                */
/*                                             </div>*/
/*                                             */
/*                                                {{form_rest(f)}} */
/*                                             */
/*                                         </form>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*         */
/*         </center>*/
/*         */
/*         */
/*         */
/*         */
/*         */
/*             */
/* */
/*             {%endblock%}      */
