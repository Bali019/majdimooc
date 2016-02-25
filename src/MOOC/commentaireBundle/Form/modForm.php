<?php

 namespace MOOC\commentaireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use blackknight467\StarRatingBundle\StarRatingBundle;

/**
 * Description of ModForm
 *
 * @author Majdi Bali
 */
class modForm extends AbstractType {
    public function buildForm( FormBuilderInterface $builder, array $options) {
        $builder->add('rating', 'rating', array('label' => 'Noter'));
    }
     public function getName() {
        return 'mod';
    }
}