<?php

namespace MOOC\commentaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MOOCcommentaireBundle:Commentaire:CommentAfficher.html.twig');
    }
}
