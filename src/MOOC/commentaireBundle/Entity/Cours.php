<?php

namespace MOOC\commentaireBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping  as ORM;

/**
 * @ORM\Entity
 */
class Cours {
  
    /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    private $id;
    /**
    *@ORM\Column(type="string",length=255)
    */
    private $contenue;
    
        /**
     * @ORM\OneToMany(targetEntity="Commentaire", mappedBy="Cours")
     */
    protected $comments;
    /**
    * @var float
    *@ORM\Column(name="note",type="float")
    */
    private $note=0;
    /**
    *@ORM\Column(type="integer")
    */
    private $nbreV;

    function getNbreV() {
        return $this->nbreV;
    }

    function setNbreV($nbreV) {
        $this->nbreV = $nbreV;
    }

    
    public function __construct()
    {
        $this->comments = new ArrayCollection();

    }

 
    function getContenue() {
        return $this->contenue;
    }

    function setContenue($contenue) {
        $this->contenue = $contenue;
    }

       

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }



    /**
     * Add comments
     *
     * @param \MOOC\commentaireBundle\Entity\Commentaire $comments
     * @return Cours
     */
    public function addComment(\MOOC\commentaireBundle\Entity\Commentaire $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * Remove comments
     *
     * @param \MOOC\commentaireBundle\Entity\Commentaire $comments
     */
    public function removeComment(\MOOC\commentaireBundle\Entity\Commentaire $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }
    /**
     * Get note
     *
     * @return float
     */
    function getNote() {
        return $this->note;
    }
    /**
     * Set note
     *
     * @param float $note
     * @return entity
     */
    function setNote($note) {
        $this->note = $note;
    }
}
