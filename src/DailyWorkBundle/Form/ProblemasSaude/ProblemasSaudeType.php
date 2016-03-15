<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NProblemasSaudeType
 *
 * @author julio
 */

namespace DailyWorkBundle\Form\ProblemasSaude;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProblemasSaudeType extends AbstractType{
    
     public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);

        $builder
                //->add('nombrePsaude', 'text')
         ->add('nombrePsaude', 'entity', array('class' => 'EntityBundle:ProblemasSaude',
             'multiple' => false,
             'label' => false,
             'required' => false));
                /*->add('paciente_problemassaude', 'collection', array(
                'type'           => new \Paciente_ProblemasSaudeType(),
                //'label'          => 'Orden Responsavels',
                'by_reference'   => false,
                'required'       => false     
                //'prototype_data' => new \EntityBundle\Entity\Orden_Responsavel()
                //'allow_delete'   => true,
                //'allow_add'      => true,
                //'attr'           => array(
                 //   'class' => 'row addresses'
                //)
            ));*/
                //->add('nome1', 'text')
                //->add('ocupacao1')
                //->add('telefContato1', 'text',  array('label' => 'Telef de Contato'))
                //->add('email1', 'email');
                /*->add('ordenresponsavels', 'collection', array(
                    'type'           => new OneResponsavelType(),
                    //'label'          => 'Direcciones',
                    'by_reference'   => false,
                    'allow_delete'   => true,
                    'allow_add'      => true,
                    ))*/
               // ->add('nome1', 'text')
               // ->add('ocupacao1')
               // ->add('telefContato1', 'text',  array('label' => 'Telef de Contato'))
                //->add('email1', 'email');

    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => '\EntityBundle\Entity\ProblemasSaude'
        ));
    }

    public function getName() {
        return 'becker_problemassaude';
    }
    
    
    
    
    
}
