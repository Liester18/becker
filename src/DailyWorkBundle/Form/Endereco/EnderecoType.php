<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EnderecoType
 *
 * @author julio
 */

namespace DailyWorkBundle\Form\Endereco;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EnderecoType extends AbstractType{
  
    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);

        $builder
                ->add('cep','number', array('label' => 'CEP'))
                //->add('complemento','text', array('label' => 'Complemento'))
                ->add('logradouro','text', array('label' => 'Logradouro'))
                ->add('barrio','text', array('label' => 'Bairro'))
                ->add('cidade','text', array('label' => 'Cidade'))
                ->add('estado');
            
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => '\EntityBundle\Entity\Endereco'
        ));
    }

    public function getName() {
        return 'becker_entitybundle_enderecotype';
    }

}
