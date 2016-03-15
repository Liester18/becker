<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TipoPartoType
 *
 * @author liester
 */

namespace DailyWorkBundle\Form\TipoParto;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TipoPartoType extends AbstractType{
    
     public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);

        $builder->add('nTipoParto', 'text',array('label' => false));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => '\EntityBundle\Entity\TipoParto'
        ));
    }

    public function getName() {
        return 'becker_entitybundle_ntipoparto';
    }
    
    
}
