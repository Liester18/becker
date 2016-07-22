<?php

namespace ReportsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use EntityBundle\Entity;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\StreamedResponse;

class DefaultController extends Controller {
    
    public function lAction()
    {
        return $this->render('AutenticationBundle:Default:login.html.twig');
    }

    // Controladores de la pagina principal ...
    public function indexAction() {
        
        $peticion = $this->getRequest();
        $sesion = $peticion->getSession();
        $this->container->get('security.context');
        $error = $peticion->attributes->get(SecurityContext::AUTHENTICATION_ERROR, $sesion->get(SecurityContext::AUTHENTICATION_ERROR));
        if ($error){
            return $this->lAction();
        }
        
        //$peticion = $this->getRequest();
        //$sesion = $peticion->getSession();
        //$this->container->get('security.context');
        //$error = $peticion->attributes->get(SecurityContext::AUTHENTICATION_ERROR, $sesion->get(SecurityContext::AUTHENTICATION_ERROR));      
        
        $em = $this->getDoctrine()->getEntityManager();
        $db = $em->getConnection();
 
        $query = "SELECT paciente.nome,responsavel.nome as nome_resp, responsavel.email, orden_responsavel.paciente_id, orden_responsavel.responsavel_id   
            FROM public.orden_responsavel, public.responsavel, public.paciente 
            WHERE orden_responsavel.paciente_id = paciente.id_paciente AND
            orden_responsavel.id = responsavel.id_responsavel;"; //limit 10
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $po=$stmt->fetchAll();      
            
        $final = array();
        $i = 0;
        foreach ($po as $k=>$v) {
            if($k > 0){
                if($po[$k]['nome'] == $po[$k-1]['nome'] && $po[$k]['nome_resp'] != $po[$k-1]['nome_resp']){
                    $final[$i]= array('f' => 's','n' => $po[$k-1]["nome"], 'id_p' => $po[$k-1]["paciente_id"], 'r1'=>$po[$k-1]["nome_resp"], 'id_r1' => $po[$k-1]["responsavel_id"], 'e_r1' => $po[$k-1]["email"],
                        'r2' => $po[$k]["nome_resp"], 'id_r2' => $po[$k]["responsavel_id"], 'e_r2' => $po[$k]["email"]);                   
                    $i++;
                }else if($po[$k]['nome'] == $po[$k-1]['nome'] && $po[$k]['nome_resp'] == $po[$k-1]['nome_resp']){
                    $final[$i]= array('f' => 'n','n' => $po[$k-1]["nome"], 'id_p' => $po[$k-1]["paciente_id"], 'r1'=>$po[$k-1]["nome_resp"], 'id_r1' => $po[$k-1]["responsavel_id"], 'e_r1' => $po[$k-1]["email"]);
                    $i++;
                }
            }            
        }    
        //var_dump($final); die();
        return $this->render('ReportsBundle:Default:dashboard.html.twig', array('last_username' => $sesion->get(SecurityContext::LAST_USERNAME), 'error' => $error, 'p'=> $final));
    }
    
    // Para cargar solo el body de la pagina
    public function deleteJSAction() {              
        $request = $this->getRequest();
        $id = $request->get('id');           
        
        $em = $this->getDoctrine()->getManager();
        $paciente = $em->getRepository('EntityBundle:Paciente')->findOneBy(Array('idPaciente' => $id));
        $em->remove($paciente);
        $em->flush();
        
         return new \Symfony\Component\HttpFoundation\Response(json_encode('OK'), 200, array('Content-Type' => 'application/json'));
    }
    
    public function expAction(){
        $request = $this->getRequest();
        $response = new StreamedResponse(function() use($request) {            
            $responsables = $request->get('responsable');
            $email = $request->get('email');
            $handle = fopen('php://output', 'r+');
            fputs($handle, implode(Array('Email', 'Nome'), ';')."\n");
            foreach ($responsables as $k => $v) {
                fputs($handle, implode(Array($email[$k], $v), ';')."\n");
            }             
            fclose($handle);
        });
        $response->setStatusCode(200);
        $response->headers->set('Content-Type', 'application/force-download');
        $response->headers->set('Content-Disposition', 'attachment; filename="export.csv"');

        return $response;
    }
    
    /*public function expAction11(){
        $request = $this->getRequest();                    
        $responsables = $request->get('responsable');
        $email = $request->get('email');
        
        $response = new StreamedResponse();
        $response->setCallback(function(){

            $handle = fopen('php://output', 'w+');

            // Add the header of the CSV file
            fputcsv($handle, implode(Array('Email', 'Nome'), ';')."\n");
            // Query data from database
            foreach ($responsables as $k => $v) {
                fputcsv($handle, implode(Array($email[$k], $v), ';')."\n");
            }      
            fclose($handle);
        });

        $response->setStatusCode(200);
        $response->headers->set('Content-Type', 'text/csv; charset=utf-8');
        $response->headers->set('Content-Disposition','attachment; filename="export.csv"');

        return $response;
    }*/
    

}
