<?php

/* MOOCcommentaireBundle:Commentaire:CommentAfficher.html.twig */
class __TwigTemplate_fc7cae564e5d7de1698ac68eb767466d9b8d4a2329ead2aceed346018039bfda extends Twig_Template
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
        echo "<section class=\"comments_wrap\">
                            <div id=\"comments\" class=\"comments_list_wrap\">
                                <h2 class=\"section_title comments_list_title\">1 Comment</h2>
                                <ul class=\"comments_list\">
                                    <li id=\"comment-1\" class=\"comment even thread-even depth-1 comment_item\">
                                        <div class=\"comment_author_avatar\">
\t\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"http://1.gravatar.com/avatar/d2700afddcd9c659ff78183408184c6c?s=75&amp;d=mm&amp;r=g\" srcset=\"http://1.gravatar.com/avatar/d2700afddcd9c659ff78183408184c6c?s=150&amp;d=mm&amp;r=g 2x\" class=\"avatar avatar-75 photo\" height=\"75\" width=\"75\" />
\t\t\t\t\t\t\t\t\t\t</div>
                                        <div class=\"comment_content\">
                                            <div class=\"comment_info\">
                                                <span class=\"comment_author\">TRX_admin</span>
                                                <span class=\"comment_date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comment_date_label\">Posted</span> 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comment_date_value\">January 2, 2015</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                <span class=\"comment_time\">2:00 pm</span>
                                            </div>
                                            <div class=\"comment_text_wrap\">
                                                <div class=\"comment_text\">
                                                    <p>This is a great design! I love ThemeREX</p>
                                                </div>
                                            </div>
                                            <div class=\"comment_reply\"><a rel=\"nofollow\" class=\"comment-reply-link\" href=\"#\">Reply</a></div>
                                        </div>
                                    </li>
                                </ul>
                                <div class=\"comments_pagination\"></div>
                            </div>
                            <div class=\"comments_form_wrap\">
                                <h2 class=\"section_title comments_form_title\">Add Comment</h2>
                                <div class=\"comments_form\">
                                    <div id=\"respond\" class=\"comment-respond\">
                                        <form action=\"#\" method=\"post\" id=\"commentform\" class=\"comment-form\">
                                            <p class=\"comments_notes\">Your email address will not be published. Required fields are marked *</p>
                                            <div class=\"columns_wrap\">
                                                <div class=\"comments_field comments_author column-1_2\">
                                                    <label for=\"author\" class=\"required\">Name</label>
                                                    <input id=\"author\" name=\"author\" type=\"text\" placeholder=\"Name *\" value=\"\" size=\"30\" aria-required=\"true\" />
                                                </div>
                                                <div class=\"comments_field comments_email column-1_2\">
                                                    <label for=\"email\" class=\"required\">Email</label>
                                                    <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"Email *\" value=\"\" size=\"30\" aria-required=\"true\" />
                                                </div>
                                                <div class=\"comments_field comments_site column-1_1\">
                                                    <label for=\"url\" class=\"optional\">Website</label>
                                                    <input id=\"url\" name=\"url\" type=\"text\" placeholder=\"Website\" value=\"\" size=\"30\" aria-required=\"true\" />
                                                </div>
                                            </div>
                                            <div class=\"comments_field comments_message\">
                                                <label for=\"comment\" class=\"required\">Your Message</label>
                                                <textarea id=\"comment\" name=\"comment\" placeholder=\"Comment\" aria-required=\"true\"></textarea>
                                            </div>
                                            <p class=\"form-submit\">
                                                <input name=\"submit\" type=\"submit\" id=\"send_comment\" class=\"submit\" value=\"Post Comment\" />
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
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
/* <section class="comments_wrap">*/
/*                             <div id="comments" class="comments_list_wrap">*/
/*                                 <h2 class="section_title comments_list_title">1 Comment</h2>*/
/*                                 <ul class="comments_list">*/
/*                                     <li id="comment-1" class="comment even thread-even depth-1 comment_item">*/
/*                                         <div class="comment_author_avatar">*/
/* 											<img alt="" src="http://1.gravatar.com/avatar/d2700afddcd9c659ff78183408184c6c?s=75&amp;d=mm&amp;r=g" srcset="http://1.gravatar.com/avatar/d2700afddcd9c659ff78183408184c6c?s=150&amp;d=mm&amp;r=g 2x" class="avatar avatar-75 photo" height="75" width="75" />*/
/* 										</div>*/
/*                                         <div class="comment_content">*/
/*                                             <div class="comment_info">*/
/*                                                 <span class="comment_author">TRX_admin</span>*/
/*                                                 <span class="comment_date">*/
/* 													<span class="comment_date_label">Posted</span> */
/* 													<span class="comment_date_value">January 2, 2015</span>*/
/* 												</span>*/
/*                                                 <span class="comment_time">2:00 pm</span>*/
/*                                             </div>*/
/*                                             <div class="comment_text_wrap">*/
/*                                                 <div class="comment_text">*/
/*                                                     <p>This is a great design! I love ThemeREX</p>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="comment_reply"><a rel="nofollow" class="comment-reply-link" href="#">Reply</a></div>*/
/*                                         </div>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                                 <div class="comments_pagination"></div>*/
/*                             </div>*/
/*                             <div class="comments_form_wrap">*/
/*                                 <h2 class="section_title comments_form_title">Add Comment</h2>*/
/*                                 <div class="comments_form">*/
/*                                     <div id="respond" class="comment-respond">*/
/*                                         <form action="#" method="post" id="commentform" class="comment-form">*/
/*                                             <p class="comments_notes">Your email address will not be published. Required fields are marked *</p>*/
/*                                             <div class="columns_wrap">*/
/*                                                 <div class="comments_field comments_author column-1_2">*/
/*                                                     <label for="author" class="required">Name</label>*/
/*                                                     <input id="author" name="author" type="text" placeholder="Name *" value="" size="30" aria-required="true" />*/
/*                                                 </div>*/
/*                                                 <div class="comments_field comments_email column-1_2">*/
/*                                                     <label for="email" class="required">Email</label>*/
/*                                                     <input id="email" name="email" type="text" placeholder="Email *" value="" size="30" aria-required="true" />*/
/*                                                 </div>*/
/*                                                 <div class="comments_field comments_site column-1_1">*/
/*                                                     <label for="url" class="optional">Website</label>*/
/*                                                     <input id="url" name="url" type="text" placeholder="Website" value="" size="30" aria-required="true" />*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="comments_field comments_message">*/
/*                                                 <label for="comment" class="required">Your Message</label>*/
/*                                                 <textarea id="comment" name="comment" placeholder="Comment" aria-required="true"></textarea>*/
/*                                             </div>*/
/*                                             <p class="form-submit">*/
/*                                                 <input name="submit" type="submit" id="send_comment" class="submit" value="Post Comment" />*/
/*                                             </p>*/
/*                                         </form>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </section>*/
/* {%endblock%}*/
