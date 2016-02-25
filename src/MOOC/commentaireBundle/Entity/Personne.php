<?php

namespace MOOC\commentaireBundle\Entity;
use Doctrine\ORM\Mapping  as ORM;

/**
 * @ORM\Entity
 */
class Personne {
  
    /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    private $id;
    /**
    *@ORM\Column(type="string",length=255)
    */
    private $nom;

 

    function getNom() {
        return $this->nom;
    }



    function setNom($nom) {
        $this->nom = $nom;
    }

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }


}
