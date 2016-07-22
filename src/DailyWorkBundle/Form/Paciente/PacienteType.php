<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PacienteType
 *
 * @author julio
 */

namespace DailyWorkBundle\Form\Paciente;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use \DailyWorkBundle\Form\Endereco;
use \DailyWorkBundle\Form\Responsavel_F;
use EntityBundle\Entity\Responsavel;
use \DailyWorkBundle\Form\ProblemasSaude;
use \DailyWorkBundle\Form\Cuidado;
use EntityBundle\Entity\NProblemasSaude;
use \DailyWorkBundle\Form\TipoParto;
use EntityBundle\Entity\NTipoParto;

class PacienteType extends AbstractType {

    //private $responsavels = null;

  //  public function __construct(Responsavel $resp = null) {
   //     $this->responsavels = $resp;
 //   }

    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);

        $builder
        ->add('nome', 'text', array('max_length' => 100, 'label' => 'Nome'))
        ->add('data_nascimento', 'date', array('required' => false, 'widget' => 'single_text', 'format' => 'dd/MM/yyyy'))
        ->add('tipoSanguineo', 'entity', array('class' => 'EntityBundle:TipoSanguineo', 'multiple' => false, 'required' => false,
                    'placeholder' => 'SELECIONAR'))
        ->add('problemas_gravidez', 'textarea', array('required' => false))
        ->add('leite_artificial', 'checkbox', array('required' => false))
        ->add('depressao_puerperal', 'textarea', array('required' => false))
        ->add('problemas_posparto', 'textarea', array('required' => false))
        ->add('leite_materno_exclusivo', 'choice', array(
                    'choices' => array(
                        'SELECIONAR' => false,
                        'Artificial' => false,
                        'Materno' => true,
                    ),
                    // *this line is important*
                    'choices_as_values' => true,
                        //'required' => false,
                ))
        ->add('leite_materno_idade', 'number', array('required' => false))
        ->add('sex', 'choice', array('label' => 'Sexo',
                    'choices' => array(                        
                        'M' => false,
                        'F' => true,
                    ),
                    //'data' => 1,
                    'choices_as_values' => true,
                ))
        ->add('active', 'checkbox', array('label'=> 'Ativo'))
        
        ->add('responsavels', 'collection', array(
            'type'  => new Responsavel_F\ResponsavelType(),
            'label' => false,
            'required' => false
            //'mapped' => false
            
           // 'data' => $this->responsavels
        ))
       
       ->add('tipoParto', 'entity', array('class' => 'EntityBundle:TipoParto', 'multiple' => false, 'required' => false,
                     'placeholder' => 'SELECIONAR', 'label'=> 'Tipo parto'))
        
        ->add('paciente_problemasSaude', 'collection', array(
            'type'  => new ProblemasSaude\Paciente_ProblemasSaudeType(),
            'label' => false,
            'required' => false,
            'allow_add' => true,
            'allow_delete' => true,
            'by_reference' => false
            //'mapped' => false

           // 'data' => $this->responsavels
        ))
        /*->add('problemasSaude', 'entity', array('class' => 'EntityBundle:ProblemasSaude',
                    'multiple' => true,
                    'required' => false))*/
        ->add('paciente_cuidados', 'collection', array(
                    'type' => new Cuidado\CuidadoType(),
                    'label'=> false,
                    'allow_add' => true,
                    'allow_delete' => true,
                    'required' => false,
                    'by_reference' => false));
        //        new Responsavel\ResponsavelType(), array('label' => ' '));*/
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => '\EntityBundle\Entity\Paciente'
        ));
    }

    public function getName() {
        return 'paciente_type';
    }

}
