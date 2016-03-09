<?php

namespace AutenticationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EntityBundle\Entity\Usuario;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AutenticationBundle:Default:login.html.twig');
    }
    
    public function loginAction() {
        $peticion = $this->getRequest();
        $sesion = $peticion->getSession();
        $this->container->get('security.context');
        $error = $peticion->attributes->get(SecurityContext::AUTHENTICATION_ERROR, $sesion->get(SecurityContext::AUTHENTICATION_ERROR));
        return $this->render('AutenticationBundle:Default:ini.html.twig', array('last_username' => $sesion->get(SecurityContext::LAST_USERNAME), 'error' => $error));
    }
    
    /*public function adduserAction()
    {
        $user = $this->getRequest()->request->get('username');     
        $pass = $this->getRequest()->request->get('pass');
        
        $em = $this->getDoctrine()->getEntityManager();
        $rol_usuario = $em->getRepository('EntityBundle:NRol')->findOneBy(array('nombre' => 'ROLE_MEDICO'));
        
        
        $usuario = new Usuario();
        $usuario->setNombre($user);
        $usuario->setUsername($user);
        $usuario->setRol($rol_usuario);
        $encoder = $this->get('security.encoder_factory')->getEncoder($usuario);
        $usuario->setSalt(md5(time()));
        $passwordCodificado = $encoder->encodePassword($pass, $usuario->getSalt());
        $usuario->setPassword($passwordCodificado);
        $em->persist($usuario);
        $em->flush();
        
        return $this->render('AutenticationBundle:Default:login.html.twig');
    }*/
    
    public function adduserAction()
    {
        $user = $this->getRequest()->request->get('username');     
        $pass = $this->getRequest()->request->get('pass');
        $rol = $this->getRequest()->request->get('rol');        
        $em = $this->getDoctrine()->getEntityManager();
        
        if($rol == 'M'){
             $rol_usuario = $em->getRepository('EntityBundle:NRol')->findOneBy(array('nombre' => 'ROLE_MEDICO'));
                $usuario = new Usuario();
                $usuario->setNombre($user);
                $usuario->setUsername($user);
                $usuario->setRol($rol_usuario);
                $encoder = $this->get('security.encoder_factory')->getEncoder($usuario);
                $usuario->setSalt(md5(time()));
                $passwordCodificado = $encoder->encodePassword($pass, $usuario->getSalt());
                $usuario->setPassword($passwordCodificado);
                $em->persist($usuario);
                $em->flush();      
        }else if ($rol == 'S') {
            $rol_usuario = $em->getRepository('EntityBundle:NRol')->findOneBy(array('nombre' => 'ROLE_SECRETARIA'));
                $usuario = new Usuario();
                $usuario->setNombre($user);
                $usuario->setUsername($user);
                $usuario->setRol($rol_usuario);
                $encoder = $this->get('security.encoder_factory')->getEncoder($usuario);
                $usuario->setSalt(md5(time()));
                $passwordCodificado = $encoder->encodePassword($pass, $usuario->getSalt());
                $usuario->setPassword($passwordCodificado);
                $em->persist($usuario);
                $em->flush(); 
        }   
        
        return $this->loginAction();
    }


    public function iniAction()
    {
        return $this->render('AutenticationBundle:Default:ini.html.twig');
    }
    
    public function dworkAction()
    {
        return $this->redirect('d_w');
    }
    
    public function daworkAction()
    {
        return $this->redirect('d_w/dw');
    }
    
    public function reportesAction()
    {
        return $this->redirect('r');
    }
    public function registerAction()
    {
        return $this->render('AutenticationBundle:Default:register.html.twig');
    }
}
