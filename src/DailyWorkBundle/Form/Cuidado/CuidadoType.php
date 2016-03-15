<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CuidadoType
 *
 * @author julio
 */

namespace DailyWorkBundle\Form\Cuidado;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CuidadoType extends AbstractType{
   
    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);

        $builder->add('horas')
                ->add('cuidado');
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => '\EntityBundle\Entity\Paciente_Cuidado'
        ));
    }

    public function getName() {
        
        return 'becker_cuidadostype';
    }
}
