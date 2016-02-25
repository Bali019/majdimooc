<?php

namespace MOOC\commentaireBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Commentaire{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     *@ORM\Column(type="text",length=2049)
     */
    private $contenu;
    /**
     *@ORM\Column(type="date")
     */
    private $date;
     /**
     * @ORM\ManyToOne(targetEntity="Personne")
     */
    private $personne;
         /**
     * @ORM\ManyToOne(targetEntity="Cours")
     */
    private $cours;
    function getCours() {
        return $this->cours;
    }

    function setCours($cours) {
        $this->cours = $cours;
    }

       
    function getId() {
        return $this->id;
    }

    function getPersonne() {
        return $this->personne;
    }

    function setPersonne($personne) {
        $this->personne = $personne;
    }

    
    function getContenu() {
        return $this->contenu;
    }

    function getDate() {
        return $this->date;
    }



    function setId($id) {
        $this->id = $id;
    }

    function setContenu($contenu) {
        $this->contenu = $contenu;
    }

    function setDate($date) {
        $this->date = $date;
    }



}
