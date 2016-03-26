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
 
        $query = "SELECT paciente.nome,responsavel.nome as nome_resp,orden_responsavel.orden 
            FROM public.orden_responsavel, public.responsavel, public.paciente 
            WHERE orden_responsavel.paciente_id = paciente.id_paciente AND
            orden_responsavel.id = responsavel.id_responsavel;"; //limit 10
        $stmt = $db->prepare($query);
        $params = array();
        $stmt->execute($params);
        $po=$stmt->fetchAll();
 
        // Mostrar todo
//        foreach ($po as $p) {
//            echo $p["nome"];
//            echo "<br/>";
//            echo $p["nome_resp"];
//            echo "<hr/>";
//            echo $p["orden"];
//            echo "<hr/>";
//        }
       // var_dump($po); die();
        
        return $this->render('ReportsBundle:Default:dashboard.html.twig', array('last_username' => $sesion->get(SecurityContext::LAST_USERNAME), 'error' => $error, 'p'=> $po));
    }
    

}
