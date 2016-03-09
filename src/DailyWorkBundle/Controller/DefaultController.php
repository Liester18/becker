<?php

namespace DailyWorkBundle\Controller;

use EntityBundle\Entity\Paciente;
use EntityBundle\Entity\Paciente_Cuidado;
use EntityBundle\Entity\TipoSanguineo;
use EntityBundle\Entity\TipoParto;
use EntityBundle\Entity\Orden_Responsavel;
use EntityBundle\Entity\ProblemasSaude;
use EntityBundle\Entity\Paciente_ProblemasSaude;
use EntityBundle\Entity\Responsavel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Common\Collections\ArrayCollection;

class DefaultController extends Controller {

    public function indexAction() {
        
        $paciente = new Paciente();

        $ordenR1 = new Orden_Responsavel();
        $ordenR2 = new Orden_Responsavel();

        $resp1 = new Responsavel();
        $resp1->addOrdenResponsavel($ordenR1);


        $resp2 = new Responsavel();
        $resp2->addOrdenResponsavel($ordenR2);

        $paciente->addOrdenResponsavel($ordenR1);
        $paciente->addOrdenResponsavel($ordenR2);


        $request = $this->getRequest();


        $formulario = $this->createForm(new \DailyWorkBundle\Form\Paciente\PacienteType(), $paciente);

        $formulario->handleRequest($request);



        if ($formulario->isValid()) {

            $em = $this->getDoctrine()->getManager();

           /* $nome = $formulario->get('nome')->getData();
            $paciente->setNome($nome);*/

            $data_nascimento = $formulario->get('data_nascimento')->getData();
            //var_dump($data_nascimento);
            //$data = date('Y-m-d', strtotime(str_replace('/', '-', $data_nascimento)));
            //var_dump($data);
            //die();
            //$paciente->setDataNascimento(new \DateTime($data_nascimento));



//            $tipoSanguineo = $formulario->get('tipoSanguineo')->getData();
//            $paciente->setTipoSanguineo($tipoSanguineo);

//            $problemas_gravidez = $formulario->get('problemas_gravidez')->getData();
//            $paciente->setProblemasGravidez($problemas_gravidez);
//
//            $leite_artificial = $formulario->get('leite_artificial')->getData();
//            $paciente->setLeiteArtificial($leite_artificial);
//
//            $depressao_puerperal = $formulario->get('depressao_puerperal')->getData();
//            $paciente->setDepressaoPuerperal($depressao_puerperal);
//
//            $problemas_posparto = $formulario->get('problemas_posparto')->getData();
//            $paciente->setProblemasPosparto($problemas_posparto);
//
//            $leite_materno_exclusivo = $formulario->get('leite_materno_exclusivo')->getData();
//            $paciente->setLeiteMaternoExclusivo($leite_materno_exclusivo);
//
//            $leite_materno_idade = $formulario->get('leite_materno_idade')->getData();
//            $paciente->setLeiteMaternoIdade($leite_materno_idade);*/

            $responsavels =  $formulario->get('responsavels')->getData();
            //var_dump($responsavels);
            //die();

            $ordenR1->setOrden(1);
            $ordenR1->setResponsavel($responsavels[0]);

            $ordenR2->setOrden(2);
            $ordenR2->setResponsavel($responsavels[1]);
            

            /*$endereco1 = $responsavels[0]->getEndereco();
            $endereco2 = $responsavels[1]->getEndereco();*/

//            $tipoParto = $formulario->get('tipoParto')->getData();
//            $paciente->setTipoParto($tipoParto);


//            $problemas = $formulario->get('paciente_problemasSaude')->getData();
            //$paciente_problemasSaude = $formulario->get('paciente_problemasSaude')->getData();

            //$psaude = new ProblemasSaude();
            //$p_psaude = new Paciente_ProblemasSaude();

            //Necesito verificar esto
            //La BD esta modelada de una forma y el formulario de otra.
            //Comportamiento extranno y controvertido que se debe arreglar

             //$psaude = new ProblemasSaude();
            //$nome_ps = [];
            
//            foreach($problemas as $ps){
//                //$nome_ps = $ps->getProblemaSaude()->getNombrePsaude()->getNombrePsaude();
//                $nome_ps = $ps->getProblemaSaude()->getNombrePsaude()->getNombrePsaude();
//                $psaude = $em->getRepository('EntityBundle:ProblemasSaude')->findOneBy(array('nombrePsaude'=> $nome_ps));
//                $edad_diag = $ps->getEdadeDiagnostico();
//                $descipcion = $ps->getDetalhesPsalud();
//                //var_dump($descipcion);
//                
//                if($psaude != null){
//                    $test = new Paciente_ProblemasSaude();
//                    $test->setDetalhesPsalud($descipcion);
//                    $test->setEdadeDiagnostico($edad_diag);
//                    $test->setProblemaSaude($psaude);
//                    $test->setPaciente($paciente);
//                    
//                    $paciente->removePacienteProblemasSaude($p_psaude);
//                    
//                    $em->persist($test);
//                    $em->persist($psaude);
//                    $em->persist($paciente);
//                   
//                    
//                }
//            }
            
            
            //die();

            
            
            //$test->setEdadeDiagnostico(2);

            //$em->persist($psaude);
            //$em->persist($paciente);

//            $em->flush();

            //var_dump($test);
           
            //$nCuidados = $formulario->get('nCuidados')->getData();


           $em->persist($paciente);
           $em->flush();

           return new Response(json_encode('OK'), 200, array('Content-Type' => 'application/json'));
        }

        return $this->render('DailyWorkBundle:Default:ficha.html.twig', array('formulario' => $formulario->createView()));

    }
    
    public function daily_workAction() {
        $em = $this->getDoctrine()->getManager();
        $paciente = $em->getRepository('EntityBundle:Paciente')->findAll();
        //var_dump($paciente);
        return $this->render('DailyWorkBundle:Default:dailywork.html.twig', array('paciente' => $paciente[0]));
    }


    public function consultaAction($id_paciente) {
        $em = $this->getDoctrine()->getManager();
        $paciente = $em->getRepository('EntityBundle:Paciente')->findOneBy(Array('idPaciente' => $id_paciente));

        $request = $this->getRequest();
        $formulario = $this->createForm(new \DailyWorkBundle\Form\Paciente\PacienteDataType(), $paciente);

        $pac_saude = new Paciente_ProblemasSaude();
        $pac_saude->setPaciente($paciente);
        $formModal = $this->createForm(new \DailyWorkBundle\Form\ProblemasSaude\Paciente_ProblemasSaudeType(), $pac_saude);

        if ($request->getMethod() == 'POST') {

            $formulario->handleRequest($request);
            $formModal->handleRequest($request);
            
            if ($formModal->isValid()) {
                $pac_saude->setPaciente($paciente);
                $em->persist($pac_saude);
                $em->flush();
            } else if ($formulario->isValid()) {
                $em->persist($paciente);
                $em->flush();
            } else {
                var_dump($formulario->getErrorsAsString());
                die();
            }
        }
        return $this->render('DailyWorkBundle:Default:consultaPaciente.html.twig', array('formulario' => $formulario->createView(),
                    'nome' => $paciente->getNome(),
                    'id' => $id_paciente,
                    'paciente' => $paciente,
                    'modal' => $formModal->createView()));
    }

    public function actualizarAction($id_paciente) {
        $em = $this->getDoctrine()->getManager();
        $paciente = $em->getRepository('EntityBundle:Paciente')->find($id_paciente);
        if (!$paciente) {
            throw $this->createNotFoundException('No existe paciente');
        }

        $formulario = $this->createForm(new \DailyWorkBundle\Form\Paciente\PacienteType(), $paciente);
        die();
        /* $form->handleRequest($request);
          if ($formulario->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($paciente);
          $em->flush();
          return $this->redirect($this->generateUrl('backend_ciudad'));
          } */
    }
    
    public function atendimentoAction()
    {        
        //$id_paciente = 17;
        $request = $this->getRequest();
        $id_paciente = $request->get('id_paciente');
        $em = $this->getDoctrine()->getManager();
        $paciente = $em->getRepository('EntityBundle:Paciente')->findOneBy(array('idPaciente' => $id_paciente));
                

        if (!$paciente) {
            throw $this->createNotFoundException('No existe paciente');
        }

        $originalPacienteProblemasSaude = new ArrayCollection();

        foreach ($paciente->getPacienteProblemasSaude() as $ps) {
            $originalPacienteProblemasSaude->add($ps);
        }       
        

        $originalPacienteCuidado = new ArrayCollection();

        foreach ($paciente->getPacienteCuidados() as $pc) {
            $originalPacienteCuidado->add($pc);
        }       

        
        if( $originalPacienteProblemasSaude->count() == 0)
            $paciente->addPacienteProblemasSaude(new Paciente_ProblemasSaude());       
        
        
        if($originalPacienteCuidado->count() == 0)
            $paciente->addPacienteCuidado(new Paciente_Cuidado());

       
        $formulario = $this->createForm(new \DailyWorkBundle\Form\Paciente\PacienteType(), $paciente);

        $formulario->handleRequest($request);
        
        return $this->render('DailyWorkBundle:Default:atendimento1.html.twig', array('formulario' => $formulario->createView(), 'paciente' => $paciente));
    }
    
    public function atendimentoSegAction(){
        $request = $this->getRequest();
        $id_paciente = $request->get('id_paciente');
        $em = $this->getDoctrine()->getManager();
        $paciente = $em->getRepository('EntityBundle:Paciente')->findOneBy(array('idPaciente' => $id_paciente));
                

        if (!$paciente) {
            throw $this->createNotFoundException('No existe paciente');
        }

        $originalPacienteProblemasSaude = new ArrayCollection();

        foreach ($paciente->getPacienteProblemasSaude() as $ps) {
            $originalPacienteProblemasSaude->add($ps);
        }
        
        

        $originalPacienteCuidado = new ArrayCollection();

        foreach ($paciente->getPacienteCuidados() as $pc) {
            $originalPacienteCuidado->add($pc);
        }

        

        
        if( $originalPacienteProblemasSaude->count() == 0)
            $paciente->addPacienteProblemasSaude(new Paciente_ProblemasSaude());
        
        
        
        if($originalPacienteCuidado->count() == 0)
            $paciente->addPacienteCuidado(new Paciente_Cuidado());

       
        $formulario = $this->createForm(new \DailyWorkBundle\Form\Paciente\PacienteType(), $paciente);

        $formulario->handleRequest($request);
        
        if ($formulario->isValid()) {

            foreach($originalPacienteProblemasSaude as $paciente_problemas_saude){


                if(false == $paciente->getPacienteProblemasSaude()->contains($paciente_problemas_saude)){

                    $paciente->removePacienteProblemasSaude($paciente_problemas_saude);
                    $em->persist($paciente_problemas_saude);
                    $em->remove($paciente_problemas_saude);
                }
            }

            foreach($originalPacienteCuidado as $paciente_c){


                if(false == $paciente->getPacienteCuidados()->contains($paciente_c)){

                    $paciente->removePacienteCuidados($paciente_c);
                    $em->persist($paciente_c);
                    $em->remove($paciente_c);
                }
            }
            $paciente->getOrdenResponsavels()[0]->setOrden(1);
            $paciente->getOrdenResponsavels()[1]->setOrden(2);


            $em->persist($paciente);
            $em->flush();
            return new Response(json_encode('OK'), 200, array('Content-Type' => 'application/json'));
        }
    }
    
    public function toRepAction(){        
        return $this->forward('ReportsBundle:Default:index');
    }

}
