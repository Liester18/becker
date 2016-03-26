<?php

namespace ReportsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use EntityBundle\Entity;

class DefaultController extends Controller {
    
    // Controladores de la pagina principal ...
    public function indexAction() {        
        $peticion = $this->getRequest();
        $sesion = $peticion->getSession();
        $this->container->get('security.context');
        $error = $peticion->attributes->get(SecurityContext::AUTHENTICATION_ERROR, $sesion->get(SecurityContext::AUTHENTICATION_ERROR));      
        
        $em = $this->getDoctrine()->getEntityManager();
        $db = $em->getConnection();
 
        $query = "SELECT paciente.nome,responsavel.nome as nome_resp, orden_responsavel.paciente_id, orden_responsavel.responsavel_id, orden_responsavel.orden   
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
                $final[$p-1]["orden"] = $v["orden"];                
            }else{
                $final[$p]["paciente_id"] = $v["paciente_id"];                        
                $final[$p]["nome"] = $v["nome"];
                $final[$p]["responsavel_id"] = $v["responsavel_id"];
                $final[$p]["nome_resp"] = $v["nome_resp"];
                $final[$p]["orden"] = $v["orden"];
            }
            $p++;
            $p_ant = $v["paciente_id"];
        }     
        
        return $this->render('ReportsBundle:Default:dashboard.html.twig', array('last_username' => $sesion->get(SecurityContext::LAST_USERNAME), 'error' => $error, 'p'=> $final));
    }
    

}
