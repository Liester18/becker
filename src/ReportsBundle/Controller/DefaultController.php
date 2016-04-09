<?php

namespace ReportsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use EntityBundle\Entity;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\StreamedResponse;

class DefaultController extends Controller {
    
    // Controladores de la pagina principal ...
    public function indexAction() {        
        $peticion = $this->getRequest();
        $sesion = $peticion->getSession();
        $this->container->get('security.context');
        $error = $peticion->attributes->get(SecurityContext::AUTHENTICATION_ERROR, $sesion->get(SecurityContext::AUTHENTICATION_ERROR));      
        
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
        $p = 0;
        $p_ant = 0;
        foreach ($po as $v) {          
            
            if($p_ant == $v["paciente_id"]){
                $final[$p-1]["responsavel_id"] = $v["responsavel_id"];
                $final[$p-1]["nome_resp2"] = $v["nome_resp"];
                $final[$p-1]["email_resp2"] = $v["email"];
            }else{
                $final[$p]["paciente_id"] = $v["paciente_id"];                        
                $final[$p]["nome"] = $v["nome"];
                $final[$p]["responsavel_id"] = $v["responsavel_id"];
                $final[$p]["nome_resp"] = $v["nome_resp"];
                $final[$p]["email_resp"] = $v["email"];                
            }
            $p++;
            $p_ant = $v["paciente_id"];
        }     
        
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
    //        var_dump($responsable);
    //        var_dump($email);
    //        die();  
            //la casa es bella...
            $handle = fopen('php://output', 'r+');
            fputs($handle, implode(Array('Email', 'Nome'), ';')."\n");
            foreach ($responsables as $k => $v) {
                fputs($handle, implode(Array($email[$k], $v), ';')."\n");
            }             
            fclose($handle);
        });
        $response->headers->set('Content-Type', 'application/force-download');
        $response->headers->set('Content-Disposition', 'attachment; filename="export.csv"');

        return $response;
    }
    

}
