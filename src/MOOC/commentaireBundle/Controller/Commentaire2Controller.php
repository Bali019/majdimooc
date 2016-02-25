<?php

namespace MOOC\commentaireBundle\Controller;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MOOC\commentaireBundle\Entity\Commentaire;
use MOOC\commentaireBundle\Entity\Cours;
use MOOC\commentaireBundle\Entity\Personne;
use Doctrine\Common\Collections\ArrayCollection;
use MOOC\commentaireBundle\Form\CommentaireForm;
use MOOC\commentaireBundle\Form\modForm;

/**
 * Description of CommentaireController
 *
 * @author Bali Majdi
 */
class Commentaire2Controller extends Controller {

    //put your code here

    public function commenter1Action($id) {
        $em = $this->container->get('doctrine')->getEntityManager();
        $commentaires = $em->getRepository('MOOCcommentaireBundle:Commentaire')->findBy(array ('cours'=>$id));
        return $this->render('MOOCcommentaireBundle:Commentaire:Affichage.html.twig', array('commentaires' => $commentaires));
    }

    public function commenterAction($id) {
        
//Ajout d'un commentaire        

        $commentaires = new Commentaire();
       // $cour=new Cours();
        $form = $this->createForm(new CommentaireForm(), $commentaires);
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $form->bind($request);
            if ($form->isValid()) {
                $emss = $this->container->get('doctrine')->getEntityManager();
               // $courss = $emss->getRepository('MOOCcommentaireBundle:Cours')->findBy(array ('id'=>$id));
                $commentaires->setDate(new \Datetime());
                
                $em = $this->get('Doctrine')->getManager();
                $commentaires->setCours($emss->getRepository('MOOCcommentaireBundle:Cours')->find($id));
                $em->persist($commentaires);
                $em->flush();
            }
        }
//Fin ajout d'un commentaire           

//Affichage de tous les commentaires
         $em = $this->container->get('doctrine')->getEntityManager();
        $commentaire = $em->getRepository('MOOCcommentaireBundle:Commentaire')->findBy(array ('cours'=>$id));
//fin affichage
        
//Rating * * * * * * * * * *

        $ems = $this->getDoctrine()->getManager();
        $Request = $this->getRequest();
        $entity = $ems->getRepository("MOOCcommentaireBundle:Cours")->find($id);
        $form2 = $this->createForm(new \MOOC\commentaireBundle\Form\modForm());
        if ($Request->getMethod() == 'POST') {
            $entity->setNote(($entity->getNote()*$entity->getNbreV())/($entity->getNbreV()+1)+$Request->get("text")/($entity->getNbreV()+1));
            $ems = $this->getDoctrine()->getManager();
            $entity->setNbreV($entity->getNbreV()+1);
            $ems->persist($entity);
            $ems->flush();
        }
        return $this->render('MOOCcommentaireBundle:Commentaire:Affichage.html.twig', array('commentaires' => $commentaire, 'f' => $form->createView(), 'form2' => $form2->createView(), 'entity' => $entity));
    }




    

    
         public function modifierAction($id)
     {
             
             
            
             
             
             
             
             
             
             
             
             
        $em2 = $this->getDoctrine()->getManager();

        $entity = $em2->getRepository("MOOCcommentaireBundle:Commentaire")->find($id);

  
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comment entity.');
        }

        $editForm = $this->createForm(new CommentaireForm(), $entity);
        //$editForm = $this->createEditForm($entity);
            $request = $this->get('request');
        $editForm->handleRequest($request);
         $id3=$entity->getCours()->getId();
$em = $this->container->get('doctrine')->getEntityManager();
        $commentaires = $em->getRepository('MOOCcommentaireBundle:Commentaire')->findBy(array ('cours'=>$id3)); 
        if ($editForm->isValid()) {
            $em2->flush();
                    $id2=$entity->getCours()->getId();
                     
    return $this->redirect($this->generateUrl('Commentaire', array('id' => $id2)), 301);
            
        }

   
     return $this->render('MOOCcommentaireBundle:Commentaire:Modifier.html.twig', array(
            'entity'      => $entity,
            'f'   => $editForm->createView(),
         'commentaires' => $commentaires
            
        ));
    
        }


  





}
