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
        
        return $this->render('DailyWorkBundle:Default:ficha.html.twig', array('formulario' => $formulario->createView()));
     }

    public function index2Action() {
        
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



        //if ($formulario->isValid()) {
                        

            $em = $this->getDoctrine()->getManager();

            $data_nascimento = $formulario->get('data_nascimento')->getData();
            

            $responsavels =  $formulario->get('responsavels')->getData();
            //var_dump($responsavels);
            //die();

            $ordenR1->setOrden(1);
            $ordenR1->setResponsavel($responsavels[0]);

            $ordenR2->setOrden(2);
            $ordenR2->setResponsavel($responsavels[1]);
            
            
           $em->persist($paciente);
           $em->flush();

           return new Response(json_encode('OK'), 200, array('Content-Type' => 'application/json'));
       // }       

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
