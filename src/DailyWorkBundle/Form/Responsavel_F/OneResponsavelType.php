<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OneResponsavelType
 *
 * @author julio
 */

namespace DailyWorkBundle\Form\Responsavel_F;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OneResponsavelType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);

       $builder
            ->add('responsavel', new ResponsavelType(), array(
                //'label'          => 'Direcciones',
                //'by_reference'   => false,
                'required'=> false
            ));
        #    ->add('orden', null,array('label' => 'Orden', 'required'=>false));
        #$builder->add('orden', null,array('label' => 'Orden', 'required'=>false));
        

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => '\EntityBundle\Entity\Orden_Responsavel',
            'cascade_validation' => true
            //'data_class' => null
        ));
    }

    public function getName() {
        return 'orden_responsavel';
    }
    

}
