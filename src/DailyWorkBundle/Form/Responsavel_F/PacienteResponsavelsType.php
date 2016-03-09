<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DailyWorkBundle\Form\Responsavel_F;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use DailyWorkBundle\Form\Responsavel_F\OneResponsavelType;

/**
 * Description of PacienteResponsavels
 *
 * @author alain
 */
class PacienteResponsavelsType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);

        $builder
         ->add('ordenResponsavels', 'collection', array(
          'type' => new OneResponsavelType(),
          'label' => false,
          'cascade_validation' => true,
          'required' => false)) ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => '\EntityBundle\Entity\Paciente',
            'cascade_validation' => true
        ));
    }

    public function getName() {
        return 'Paciente';
    }

}
