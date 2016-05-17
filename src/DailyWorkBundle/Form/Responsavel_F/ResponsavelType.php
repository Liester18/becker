<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ResponsavelType
 *
 * @author julio
 */

namespace DailyWorkBundle\Form\Responsavel_F;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use DailyWorkBundle\Form\Endereco\EnderecoType;

class ResponsavelType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);

        $builder
                ->add('nome', 'text')
                ->add('ocupacao')
                ->add('telefContato', 'text',  array('label' => 'Telef de Contato'))
                ->add('email', 'email')
                ->add('endereco', new EnderecoType(), array(
                    'label' => false,
                    'by_reference' => false,
                    'required' => false
                ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => '\EntityBundle\Entity\Responsavel'
        ));
    }

    public function getName() {
        return 'becker_entitybundle_responsaveltype';
    }
    

}
