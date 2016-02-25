<?php

namespace MOOC\commentaireBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;


class CommentaireForm extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('Personne','entity', array('class' => 'MOOCcommentaireBundle:Personne', 'property' => 'nom'))
               
                ->add('contenu')
              
         ->add('Commenter','submit');
                
                
                
    }

    public function getName() {
        return 'AjoutMAgaisin';
    }

}
