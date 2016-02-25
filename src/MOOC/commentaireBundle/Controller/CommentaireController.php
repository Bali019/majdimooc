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
class CommentaireController extends Controller {

    //put your code here

    public function commenterAction($id) {
        $em = $this->container->get('doctrine')->getEntityManager();
        $commentaires = $em->getRepository('MOOCcommentaireBundle:Commentaire')->findBy(array ('cours'=>$id));
        return $this->render('MOOCcommentaireBundle:Commentaire:Affichage.html.twig', array('commentaires' => $commentaires));
    }

    public function ajoutAction($id) {
        
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
        return $this->render('MOOCcommentaireBundle:Commentaire:ratingcom.html.twig', array('commentaires' => $commentaire, 'f' => $form->createView(), 'form2' => $form2->createView(), 'entity' => $entity));
    }

    public function ratingAction($id) {
        $ems = $this->getDoctrine()->getManager();
        $Request = $this->getRequest();
        $entity = $ems->getRepository("MOOCcommentaireBundle:Cours")->find($id);
        $form = $this->createForm(new \MOOC\commentaireBundle\Form\modForm());
        if ($Request->getMethod() == 'POST') {

            $entity->setNote($Request->get("text"));
            $ems = $this->getDoctrine()->getManager();
            $ems->persist($entity);
            $ems->flush();
        }
        return $this->render('MOOCcommentaireBundle:Commentaire:rate.html.twig', array('form' => $form->createView(), 'entity' => $entity));
    }

      public function deleteAction($id){
     $em2=$this->getDoctrine()->getManager();
     $comq=$em2->getRepository("MOOCcommentaireBundle:Commentaire")->find($id);
     $em2->remove($comq);
     $em2->flush();
//     $id2=get($com.cours.id);
    $id2=$comq->getCours()->getId();
    //  return $this->get('router')->generate('Commentaireaff', $id2);
    
    return $this->redirect($this->generateUrl('Commentaire', array('id' => $id2)), 301);
    //return CommentaireController::ajoutAction($id2);

      } 
    public function coursRatingAction() {
        $em = $this->container->get('doctrine')->getEntityManager();
        $commentaires = $em->getRepository('MOOCcommentaireBundle:Cours')->findAll();
        return $this->render('MOOCcommentaireBundle:Commentaire:Commentaire.html.twig', array('commentaires' => $commentaires));
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

        if ($editForm->isValid()) {
            $em2->flush();
                    $id2=$entity->getCours()->getId();
    return $this->redirect($this->generateUrl('Commentaireaff', array('id' => $id2)), 301);
            
        }

   
     return $this->render('MOOCcommentaireBundle:Commentaire:Modifier.html.twig', array(
            'entity'      => $entity,
            'f'   => $editForm->createView()
            
        ));
    
        }


  





}
