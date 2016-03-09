<?php

namespace ReportsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use ReportsBundle\Classes\FilterNome;
use ReportsBundle\Classes\TBFilter;

class DefaultController extends Controller {

    // Para la pagina principal
    private $rows = 10;
    
    // Controladores de la pagina principal ...
    public function indexPageAction(Request $request, $actualPage) {
       # $data = $this->makeQuery($request, $actualPage);
        
        return $this->render('ReportsBundle:Default:dashboard.html.twig', array(
                    'actPage' => $actualPage
        ));
    }
    public function indexAction(Request $request) {
        //echo 'aaaaaaaa';
        return $this->indexPageAction($request, 1);
    }

    
    
    // Para elaborar la barra de paginado -- Necesita la pagina actual 
    public function pageAction(Request $request, $activepage) {
        $numrows = count($this->makeQuery($request, -1));
        #var_dump($numrows);
        #die();
        $pageNumber = (int) ($numrows / $this->rows) + 1;
        $arr = Array();
        for ($i = 0; $i < 3; $i++) {
            if ($activepage - 3 + $i >= 0) {
                if ($activepage == $activepage - 3 + $i) {
                    $elem = Array('pos' => $activepage - 2 + $i, 'act' => 'true');
                    array_push($arr, $elem);
                } else {
                    $elem = Array('pos' => $activepage - 2 + $i, 'act' => 'false');
                    array_push($arr, $elem);
                }
            }
        }
        for ($i = $activepage; $i < $pageNumber; $i++) {
            $elem = Array('pos' => $i + 1, 'act' => 'false');
            array_push($arr, $elem);
        }
        if ($request->getMethod() == 'POST') {
            return $this->renderView('ReportsBundle:Default:page.html.twig', array(
                        'pages' => $arr, 'pageNumber' => $pageNumber
            ));
        }
        return $this->render('ReportsBundle:Default:page.html.twig', array(
                    'pages' => $arr, 'pageNumber' => $pageNumber
        ));
    }
    
    
    
    
    

    // Obtiene la pagina page de datos desde la base de datos -- Aca deben de ser manejados 
    // os distintos filtros ...
    public function makeQuery(Request $request, $page) {
        $session = $request->getSession();
        $filter_name = new FilterNome($session);
        $filter_blood = new TBFilter($session);
        $arr = Array($filter_name,$filter_blood);
        return $this->filterResultAction($arr, $page);
    }
    public function filterResultAction($filters, $page) {
        $querySelect = 'SELECT p ';
        $queryFROM = 'FROM EntityBundle:Paciente p ';
        $queryWhere = "WHERE ";

        $first = true;
        foreach ($filters as $filter) {
            if ($filter->hasMatch()) {
                #$querySelect = $querySelect.'';
                $queryFROM = $queryFROM . $filter->fromDQL('p') . ' ';
                if ($first) {
                    $first = false;
                    $queryWhere = $queryWhere . $filter->whereDQL('p') . ' ';
                } else {
                    $queryWhere = $queryWhere . ' AND ' . $filter->whereDQL('p') . ' ';
                }
            }
        }
        if ($first) {
            $queryWhere = '';
        }

        $query = $querySelect . ' ' . $queryFROM . ' ' . $queryWhere . ' ' . ' ORDER BY p.nome ASC';
        $em = $this->getDoctrine()->getManager();
        $docQuery = $em->createQuery($query);

        foreach ($filters as $filter) {
            #$querySelect = $querySelect.'';
            $docQuery = $filter->setFilter($docQuery);
        }
        
        if ($page >= 1) {
            $docQuery->setMaxResults($this->rows);
            $docQuery->setFirstResult(((int) ($page - 1)) * $this->rows);
        }
        return $docQuery->getResult();
    }
    
    
    
    
    // Genera los datos de la pagina page 
    public function dataPageAction(Request $request, $page) {

        $data = $this->makeQuery($request, $page);

        if ($request->getMethod() == 'POST') {
            $html = $this->renderView('ReportsBundle:Default:data.html.twig', array(
                'data' => $data
            ));
            $pag = $this->pageAction($request, $page);
            $response = array('result' => $html, 'paginator' => $pag, 'status' => 'OK');
            $resp = json_encode($response);
            return new \Symfony\Component\HttpFoundation\Response($resp, 200);
        }
        return $this->render('ReportsBundle:Default:data.html.twig', array(
                    'data' => $data
        ));
    }
    public function dataAction(Request $request) {
        return $this->dataPageAction($request, 1);
    }

    



    // Genera los botones de los filtros puestos hasta el momento ...
    public function filterPageAction(Request $request) {
        $session = $request->getSession();
        $filter_name = new FilterNome($session);
        $filter_blood = new TBFilter($session);
        $filters = array_merge($filter_name->genActiveFilter(),$filter_blood->genActiveFilter());
        return $this->render('ReportsBundle:Default:filterElements.html.twig', array(
                    'filters' => $filters
        ));
    }

    
    


 
    // Para ser llamado con AJAX para manipular los filtros 
    public function filterAction(Request $request) {
        $session = $request->getSession();
        if ($request->request->has('filter')) {

            switch ($request->request->get('filter')) {
                case 'NM':
                    $filter_name = new FilterNome($session);
                    if ($request->request->get('action') == 'add') {
                        $filter_name->setName($request->request->get('name'));
                        $filter_name->setMatch($request->request->get('match'));
              
                    } else if ($request->request->get('action') == 'del') {
                        $filter_name->setName(null);
                    }
                    break;
                case 'TB':  
                    $filter_blood = new TBFilter($session);
                    if ($request->request->get('action') == 'add') {
                        $filter_blood->addFilter($request->request->get('id'), $request->request->get('name'));
                    } else if ($request->request->get('action') == 'del') {
                        $filter_blood->remFilter($request->request->get('id'));
                    }
                    break;
                default:
                    $response = array('result' => 'Error', 'status' => 'ERROR');
                    $resp = json_encode($response);
                    return new \Symfony\Component\HttpFoundation\Response($resp, 200);
            }
            return $this->dataAction($request);
        }
        $response = array('result' => 'Error', 'status' => 'ERROR');
        $resp = json_encode($response);
        return new \Symfony\Component\HttpFoundation\Response($resp, 200);
    }

    
    
    
    // Redirecciona cuando es seleccionado un paciente  ....
    public function patientRedirectAction($id){
        return new RedirectResponse($this->generateUrl('inicio'));
        # return new RedirectResponse($this->generateUrl('-----').$id);
    }
    
    
    
    // Genera los elementos del filtro de sangre 
    public  function bloodFilterAction(Request $request){
        $session = $request->getSession();
        $filter_blood = new TBFilter($session);
        
        $elems = $filter_blood->filterValues($this->getDoctrine());
        return $this->render('ReportsBundle:Default:bloodFilter.html.twig', array(
                    'elems' => $elems
        ));
    }

}
