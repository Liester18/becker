<?php

namespace DailyWorkBundle\Controller;

use EntityBundle\Entity\Paciente_ProblemasSaude;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DailyWorkBundle\Form\Paciente\PacienteDataType;
use DailyWorkBundle\Form\Consulta\ConsultaType;
use DailyWorkBundle\Form\ProblemasSaude\Paciente_ProblemasSaudeType;
use DailyWorkBundle\Form\Responsavel_F\PacienteResponsavelsType;
use Symfony\Component\HttpFoundation\Response;

class MedicalConsultationController extends Controller {

    public function consultaAction($id_paciente) {
        $em = $this->getDoctrine()->getManager();
        $paciente = $em->getRepository('EntityBundle:Paciente')->findOneBy(Array('idPaciente' => $id_paciente));

        $request = $this->getRequest();

        $consulta = new \EntityBundle\Entity\Consulta();

        $formulario = $this->createForm(new ConsultaType(), $consulta);

        if ($request->getMethod() == 'POST') {
            $formulario->handleRequest($request);

            if ($formulario->isValid()) {
                $consulta->setPaciente($paciente);

                $em->persist($consulta);
                $em->flush();

                $consulta = new \EntityBundle\Entity\Consulta();

                $formulario = $this->createForm(new ConsultaType(), $consulta);

                $html = $this->renderView('DailyWorkBundle:Default:diagnostico.html.twig', array(
                    'formulario' => $formulario->createView(),
                    'paciente' => $paciente
                ));
                

                $response = array('status' => 'OK', 'html' => $html);
                $resp = json_encode($response);
                return new Response($resp, 200);
            } else {
                $html = $this->render('DailyWorkBundle:Default:consultaPaciente.html.twig', array(
                    'formulario' => $formulario->createView(),
                    'paciente' => $paciente
                ));
                $response = array('status' => 'ERROR', 'html' => $html);
                $resp = json_encode($response);
                return new Response($resp, 200);
            }
        }
        return $this->render('DailyWorkBundle:Default:consultaPaciente.html.twig', array(
                    'formulario' => $formulario->createView(),
                    'paciente' => $paciente
        ));
    }

    public function newProbSaudeAction($idPaciente) {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();

        $pac_saude = new Paciente_ProblemasSaude();

        $paciente = $em->getRepository('EntityBundle:Paciente')->findOneBy(Array('idPaciente' => $idPaciente));

        $formModal = $this->createForm(new Paciente_ProblemasSaudeType($paciente->getProbSaudeArray()), $pac_saude);

        if ($request->getMethod() == 'POST') {
            $formModal->handleRequest($request);
            if ($formModal->isValid()) {

                $pac_saude->setPaciente($paciente);
                $em->persist($pac_saude);
                $em->flush();

                $html = $this->renderView('DailyWorkBundle:Default:problemasDeSaude.html.twig', array(
                    'paciente' => $paciente
                ));

                $response = array('status' => 'OK', 'html' => $html);
                $resp = json_encode($response);
                return new Response($resp, 200);
            } else {
                $html = $this->renderView('DailyWorkBundle:Default:modalProbSaude.html.twig', array(
                    'pac_probSaude' => $pac_saude,
                    'modal' => $formModal->createView(),
                    'idpaciente' => $paciente->getIdPaciente(),
                    'new' => true));
                $title = $this->renderView('DailyWorkBundle:Default:titleModalProbSaude.html.twig', array(
                    'action' => 'Novo',
                    'paciente' => $paciente
                ));
                $response = array('status' => 'ERROR', 'title' => $title, 'html' => $html);
                $resp = json_encode($response);
                return new \Symfony\Component\HttpFoundation\Response($resp, 200);
            }
        }
        $html = $this->renderView('DailyWorkBundle:Default:modalProbSaude.html.twig', array(
            'pac_probSaude' => $pac_saude,
            'modal' => $formModal->createView(),
            'idpaciente' => $paciente->getIdPaciente(),
            'new' => true));
        $title = $this->renderView('DailyWorkBundle:Default:titleModalProbSaude.html.twig', array(
            'action' => 'Novo',
            'paciente' => $paciente
        ));
        $response = array('title' => $title, 'html' => $html);
        $resp = json_encode($response);
        return new \Symfony\Component\HttpFoundation\Response($resp, 200);
    }

    public function deleteProbSaudeAction() {
        $request = $this->getRequest();
        $idPacienteProbSaude = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $pac_saude = $em->getRepository('EntityBundle:Paciente_ProblemasSaude')->findOneBy(Array('id' => $idPacienteProbSaude));
        $em->remove($pac_saude);
        $em->flush();

        $response = array('status' => 'OK');
        $resp = json_encode($response);
        return new Response($resp, 200);
    }

    public function updateProbSaudeAction($id_pac_prob) {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();
        $pac_saude = $em->getRepository('EntityBundle:Paciente_ProblemasSaude')->findOneBy(Array('id' => $id_pac_prob));
        $formModal = $this->createForm(new Paciente_ProblemasSaudeType(Array()), $pac_saude);

        if ($request->getMethod() == 'POST') {
            $formModal->handleRequest($request);
            if ($formModal->isValid()) {
                $em->persist($pac_saude);
                $em->flush();

                $paciente = $pac_saude->getPaciente();
                $pac_saude = new Paciente_ProblemasSaude();
                $pac_saude->setPaciente($paciente);
                $formModal_empty = $this->createForm(new Paciente_ProblemasSaudeType(Array()), $pac_saude);
                $html = $this->renderView('DailyWorkBundle:Default:problemasDeSaude.html.twig', array(
                    'paciente' => $paciente,
                    'action' => 'Novo',
                    'modal' => $formModal_empty->createView(),
                    'idpaciente' => $paciente->getIdPaciente()
                ));

                $response = array('status' => 'OK', 'html' => $html);
                $resp = json_encode($response);
                return new Response($resp, 200);
            } else {
                $html = $this->renderView('DailyWorkBundle:Default:modalProbSaude.html.twig', array(
                    'pac_probSaude' => $pac_saude,
                    'modal' => $formModal->createView(),
                    'idpaciente' => $pac_saude->getPaciente()->getIdPaciente(),
                    'new' => false));
                $title = $this->renderView('DailyWorkBundle:Default:titleModalProbSaude.html.twig', array(
                    'action' => 'Editar',
                    'paciente' => $pac_saude->getPaciente()
                ));
                $response = array('status' => 'ERROR', 'title' => $title, 'html' => $html);
                $resp = json_encode($response);
                return new \Symfony\Component\HttpFoundation\Response($resp, 200);
            }
        }

        $html = $this->renderView('DailyWorkBundle:Default:modalProbSaude.html.twig', array(
            'pac_probSaude' => $pac_saude,
            'modal' => $formModal->createView(),
            'idpaciente' => $pac_saude->getPaciente()->getIdPaciente(),
            'new' => false));
        $title = $this->renderView('DailyWorkBundle:Default:titleModalProbSaude.html.twig', array(
            'action' => 'Editar',
            'paciente' => $pac_saude->getPaciente()
        ));
        $response = array('title' => $title, 'html' => $html);
        $resp = json_encode($response);
        return new \Symfony\Component\HttpFoundation\Response($resp, 200);
    }

    public function updateDadosPacienteAction($id_paciente) {
        $em = $this->getDoctrine()->getManager();
        $paciente = $em->getRepository('EntityBundle:Paciente')->findOneBy(Array('idPaciente' => $id_paciente));

        $request = $this->getRequest();
        $formModal = $this->createForm(new PacienteDataType(), $paciente);

        if ($request->getMethod() == 'POST') {
            $formModal->handleRequest($request);

            if ($formModal->isValid()) {
                $em->persist($paciente);
                $em->flush();

                $html = $this->renderView('DailyWorkBundle:Default:dadosPaciente.html.twig', array(
                    'paciente' => $paciente
                ));

                $response = array('status' => 'OK', 'html' => $html, 'name' => strtoupper($paciente->getNome()));
                $resp = json_encode($response);
                return new Response($resp, 200);
            } else {
                $html = $this->renderView('DailyWorkBundle:Default:modalDadosPaciente.html.twig', array(
                    'modal' => $formModal->createView()));
                $title = $this->renderView('DailyWorkBundle:Default:titleModalDadosPaciente.html.twig', array(
                    'paciente' => $paciente
                ));
                $response = array('status' => 'ERROR', 'title' => $title, 'html' => $html);
                $resp = json_encode($response);
                return new \Symfony\Component\HttpFoundation\Response($resp, 200);
            }
        }
        $html = $this->renderView('DailyWorkBundle:Default:modalDadosPaciente.html.twig', array(
            'modal' => $formModal->createView()));
        $title = $this->renderView('DailyWorkBundle:Default:titleModalDadosPaciente.html.twig', array(
            'paciente' => $paciente
        ));
        $response = array('title' => $title, 'html' => $html);
        $resp = json_encode($response);
        return new \Symfony\Component\HttpFoundation\Response($resp, 200);
    }

    public function updateResponsavelsAction($id_paciente) {
        $em = $this->getDoctrine()->getManager();
        $paciente = $em->getRepository('EntityBundle:Paciente')->findOneBy(Array('idPaciente' => $id_paciente));

        $request = $this->getRequest();
        $formulario = $this->createForm(new PacienteResponsavelsType(), $paciente);
        if ($request->getMethod() == 'POST') {
            $formulario->handleRequest($request);

            if ($formulario->isValid()) {

                $em->persist($paciente);
                $em->flush();

                $html = $this->renderView('DailyWorkBundle:Default:dadosResponsavel.html.twig', array(
                    'paciente' => $paciente
                ));

                $response = array('status' => 'OK', 'html' => $html);
                $resp = json_encode($response);
                return new Response($resp, 200);
            } else {
                $html = $this->renderView('DailyWorkBundle:Default:dadosResponsavelEdit.html.twig', array(
                    'formulario' => $formulario->createView(),
                    'paciente' => $paciente));
                $response = array('status' => 'ERROR', 'html' => $html);
                $resp = json_encode($response);
                return new \Symfony\Component\HttpFoundation\Response($resp, 200);
            }
        }
        $html = $this->renderView('DailyWorkBundle:Default:dadosResponsavelEdit.html.twig', array(
            'formulario' => $formulario->createView(),
            'paciente' => $paciente));
        $response = array('html' => $html);
        $resp = json_encode($response);
        return new \Symfony\Component\HttpFoundation\Response($resp, 200);
    }

    public function cancelResposavelsAction($id_paciente) {
        $em = $this->getDoctrine()->getManager();
        $paciente = $em->getRepository('EntityBundle:Paciente')->findOneBy(Array('idPaciente' => $id_paciente));

        $html = $this->renderView('DailyWorkBundle:Default:dadosResponsavel.html.twig', array(
            'paciente' => $paciente));
        $response = array('html' => $html);
        $resp = json_encode($response);
        return new \Symfony\Component\HttpFoundation\Response($resp, 200);
    }

    public function consultasViewAction($id_paciente, $page) {
        $em = $this->getDoctrine()->getManager();
        $docQuery = $em->createQuery('SELECT c FROM EntityBundle:Consulta c JOIN c.paciente p WHERE p.idPaciente = ' . $id_paciente .
                ' ORDER BY c.data DESC');
        $docQuery->setFirstResult($page * 10 - 10);
        $docQuery->setMaxResults(10);
        #$docQuery->addOrderBy("c.data", "ASC");
        $consultas = $docQuery->getResult();

        $html = $this->renderView('DailyWorkBundle:Default:modalConsultasPacientes.html.twig', array(
            'consultas' => $consultas));

        $paciente = $em->getRepository('EntityBundle:Paciente')->findOneBy(Array('idPaciente' => $id_paciente));
        $title = $this->renderView('DailyWorkBundle:Default:titleModalConsultasPacientes.html.twig', array(
            'paciente' => $paciente
        ));

        $response = array('html' => $html, 'title' => $title);
        $resp = json_encode($response);
        return new \Symfony\Component\HttpFoundation\Response($resp, 200);
    }

    public function oneConsultaAction($id_consulta) {
        $em = $this->getDoctrine()->getManager();
        $consulta = $em->getRepository('EntityBundle:Consulta')->findOneBy(Array('idConsulta' => $id_consulta));

        $request = $this->getRequest();
        $formModal = $this->createForm(new ConsultaType(), $consulta);

        if ($request->getMethod() == 'POST') {
            $formModal->handleRequest($request);

            if ($formModal->isValid()) {
                $em->persist($consulta);
                $em->flush();

                $response = array('status' => 'OK');
                $resp = json_encode($response);
                return new Response($resp, 200);
            } else {
                $html = $this->renderView('DailyWorkBundle:Default:modalOneConsultaPaciente.html.twig', array(
                    'modal' => $formModal->createView(), 
                    'consulta' => $consulta));
                $title = $this->renderView('DailyWorkBundle:Default:titleModalOneConsultaPaciente.html.twig', array(
                    'consulta' => $consulta
                ));
                $response = array('status' => 'ERROR', 'title' => $title, 'html' => $html);
                $resp = json_encode($response);
                return new \Symfony\Component\HttpFoundation\Response($resp, 200);
            }
        }
        $html = $this->renderView('DailyWorkBundle:Default:modalOneConsultaPaciente.html.twig', array(
            'modal' => $formModal->createView(), 
            'consulta' => $consulta));
        $title = $this->renderView('DailyWorkBundle:Default:titleModalOneConsultaPaciente.html.twig', array(
            'consulta' => $consulta
        ));
        $response = array('title' => $title, 'html' => $html);
        $resp = json_encode($response);
        return new \Symfony\Component\HttpFoundation\Response($resp, 200);
    }

}
