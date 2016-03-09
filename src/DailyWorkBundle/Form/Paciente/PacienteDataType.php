<?php

namespace DailyWorkBundle\Form\Paciente;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use DailyWorkBundle\Form\Responsavel_F\OneResponsavelType;
use DailyWorkBundle\Form\ProblemasSaude\Paciente_ProblemasSaudeType;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PacienteData
 *
 * @author alain
 */
class PacienteDataType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);

        $builder
                ->add('nome', 'text', array('max_length' => 100, 'label' => 'Nome'))
                ->add('data_nascimento', 'date', array('required' => false,
                    'widget' => 'single_text'))
                ->add('tipoSanguineo')
                /*->add('ordenResponsavels', 'collection', array(
                    'type' => new OneResponsavelType(),
                    'label' => false,
                    'required' => false))*/;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => '\EntityBundle\Entity\Paciente'
        ));
    }

    public function getName() {
        return 'Paciente';
    }

}
