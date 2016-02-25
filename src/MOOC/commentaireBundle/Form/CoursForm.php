<?php

namespace MOOC\commentaireBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;


class CoursForm extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder

                ->add('contenue')

              
         ->add('Commenter','submit');
                
                
                

                
                
                
    }

    public function getName() {
        return 'AjoutMAgaisin';
    }

}
