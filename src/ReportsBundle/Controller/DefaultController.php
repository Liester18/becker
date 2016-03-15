<?php

namespace ReportsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\StreamedResponse;
use ReportsBundle\Classes\FilterNome;
use ReportsBundle\Classes\FilterYear;
use ReportsBundle\Classes\FilterSex;
use ReportsBundle\Classes\FilterActive;
use ReportsBundle\Classes\FilterNomeRespons;
use ReportsBundle\Classes\FilterSaude;

class DefaultController extends Controller {

    // Para la pagina principal
    private $rows = 10;

    // Controladores de la pagina principal ...
    public function indexPageAction(Request $request, $actualPage) {
        # $data = $this->makeQuery($request, $actualPage);

        return $this->render('ReportsBundle:Default:index.html.twig', array(
                    'actPage' => $actualPage
        ));
    }

    public function indexAction(Request $request) {
        //echo 'aaaaaaaa';
        return $this->indexPageAction($request, 1);
    }

    // Para cargar solo el body de la pagina
    public function deleteJSAction(Request $request) {
        $page = $request->request->get('page');
        $id = (int)$request->request->get('id');
                //var_dump($id);die();
        
        $em = $this->getDoctrine()->getManager();
        $paciente = $em->getRepository('EntityBundle:Paciente')->findOneBy(Array('idPaciente' => $id));
        $em->remove($paciente);
        $em->flush();
        
        return $this->dataPageAction($request, $page);
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
                        'pages' => $arr, 'pageNumber' => $pageNumber, 'my_page'=>$activepage
            ));
        }
        return $this->render('ReportsBundle:Default:page.html.twig', array(
                    'pages' => $arr, 'pageNumber' => $pageNumber, 'my_page'=>$activepage
        ));
    }

    // Obtiene la pagina page de datos desde la base de datos -- Aca deben de ser manejados 
    // os distintos filtros ...
    public function makeQuery(Request $request, $page) {
        $session = $request->getSession();
        $filter_name = new FilterNome($session);
        $filter_year = new FilterYear($session);
        $filter_sex = new FilterSex($session);
        $filter_active = new FilterActive($session);
        $filter_resp = new FilterNomeRespons($session);
        $filter_saude = new FilterSaude($session);

        $arr = Array($filter_name, $filter_year, $filter_sex,
            $filter_active, $filter_resp, $filter_saude);
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
        /* $res = $docQuery->getResult();
          foreach ($res as $r) {
          var_dump(count($r->getResponsavel()));

          } */
        return $docQuery->getResult();
    }

    // Genera los datos de la pagina page 
    public function dataPageAction(Request $request, $page) {

        $data = $this->makeQuery($request, $page);

        if ($request->getMethod() == 'POST') {           
            /*$html = $this->renderView('ReportsBundle:Default:data.html.twig', array(
                'data' => $data
            ));*/
            /*$pag = $this->pageAction($request, $page);
            $response = array('status' => 'success');
            $resp = json_encode($response);
            return new \Symfony\Component\HttpFoundation\Response($resp, 200);*/
            return new \Symfony\Component\HttpFoundation\Response(json_encode('OK'), 200, array('Content-Type' => 'application/json'));
        }
        //printf("aaaaaaaaaaaaaaaaaaaaaassii"); die();
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
        $filter_year = new FilterYear($session);
        $filter_sex = new FilterSex($session);
        $filter_active = new FilterActive($session);
        $filter_resp = new FilterNomeRespons($session);
        $filter_saude = new FilterSaude($session);

        $filters = array_merge($filter_name->genActiveFilter(), $filter_year->genActiveFilter());
        $filters = array_merge($filters, $filter_sex->genActiveFilter());
        $filters = array_merge($filters, $filter_active->genActiveFilter());
        $filters = array_merge($filters, $filter_resp->genActiveFilter());
        $filters = array_merge($filters, $filter_saude->genActiveFilter());
        return $this->render('ReportsBundle:Default:filterElements.html.twig', array(
                    'filters' => $filters
        ));
    }

    // Para ser llamado con AJAX para manipular los filtros 
    public function filterAction(Request $request) {
        $session = $request->getSession();$c = 1;
        if ($request->request->has('filter')) {

            switch ($request->request->get('filter')) {
                case 'NM':
                    $filter_name = new FilterNome($session);
                    if ($request->request->get('action') == 'add') {
                        $filter_name->setName($request->request->get('name'));
                    } else if ($request->request->get('action') == 'del') {
                        $filter_name->setName(null);
                    }
                    break;
                case 'NMR':
                    $filter_resp = new FilterNomeRespons($session);
                    if ($request->request->get('action') == 'add') {
                        $filter_resp->setName($request->request->get('name'));
                    } else if ($request->request->get('action') == 'del') {
                        $filter_resp->setName(null);
                    }
                    break;
                case 'SE':
                    $filter_sex = new FilterSex($session);
                    if ($request->request->get('action') == 'add') {
                        $filter_sex->setID($request->request->get('id'));
                    } else if ($request->request->get('action') == 'del') {
                        $filter_sex->setID(null);
                    }
                    break;
                case 'AC':
                    $filter_active = new FilterActive($session);
                    if ($request->request->get('action') == 'add') {
                        $filter_active->setID($request->request->get('id'));
                    } else if ($request->request->get('action') == 'del') {
                        $filter_active->setID(null);
                    }
                    break;
                case 'SA':
                    $filter_saude = new FilterSaude($session);
                    if ($request->request->get('action') == 'add') {
                        if (!$filter_saude->addFilter($request->request->get('id'), $request->request->get('name'))) {
                            $response = array('result' => 'Error2', 'status' => 'ERROR');
                            $resp = json_encode($response);
                            return new \Symfony\Component\HttpFoundation\Response($resp, 200);
                        }
                    } else if ($request->request->get('action') == 'del') {
                        $filter_saude->remFilter($request->request->get('id'));
                    }
                    break;
                case 'YE':
                    $filter_year = new FilterYear($session);
                    if ($request->request->get('action') == 'add') {
                        $_id = $request->request->get('id');
                        $_b = $request->request->get('begin');
                        $_end = $request->request->get('end');
                        if (!$filter_year->addFilter($_id, $_b, $_end)) {
                            $response = array('result' => 'Error3', 'status' => 'ERROR');
                            $resp = json_encode($response);                            
                            return new \Symfony\Component\HttpFoundation\Response($resp, 200);
                        }
                    } else if ($request->request->get('action') == 'del') {
                        $filter_year->remFilter($request->request->get('id'));
                    }
                    break;
                default:
                    $response = array('result' => 'Error4', 'status' => 'ERROR');
                    $resp = json_encode($response);
                    return new \Symfony\Component\HttpFoundation\Response($resp, 200);
            }            
            return $this->dataAction($request);
        }
        $response = array('result' => 'Error1', 'status' => 'ERROR');
        $resp = json_encode($response);
        return new \Symfony\Component\HttpFoundation\Response($resp, 200);
    }

    // Redirecciona cuando es seleccionado un paciente  ....
    public function patientRedirectAction($id) {
        return new RedirectResponse($this->generateUrl('inicio'));
        # return new RedirectResponse($this->generateUrl('-----').$id);
    }

    // Genera los elementos del filtro de sangre 
    public function yearFilterAction(Request $request) {
        $session = $request->getSession();
        $filter_year = new FilterYear($session);

        $elems = $filter_year->filterValues($this->getDoctrine());
        return $this->render('ReportsBundle:Default:yearFilter.html.twig', array(
                    'elems' => $elems
        ));
    }

    // Genera los elementos del filtro sexo
    public function sexFilterAction(Request $request) {
        $session = $request->getSession();
        $filter_sex = new FilterSex($session);

        $elems = $filter_sex->filterValues($this->getDoctrine());
        return $this->render('ReportsBundle:Default:sexFilter.html.twig', array(
                    'elems' => $elems
        ));
    }

    public function activeFilterAction(Request $request) {
        $session = $request->getSession();
        $filter_active = new FilterActive($session);

        $elems = $filter_active->filterValues($this->getDoctrine());
        return $this->render('ReportsBundle:Default:activeFilter.html.twig', array(
                    'elems' => $elems
        ));
    }

    public function respFilterAction(Request $request) {
        $session = $request->getSession();
        $filter_resp = new FilterNomeRespons($session);

        $elems = $filter_resp->filterValues($this->getDoctrine());
        return $this->render('ReportsBundle:Default:respFilter.html.twig', array(
                    'elems' => $elems
        ));
    }

    public function saudeFilterAction(Request $request) {
        $session = $request->getSession();
        $filter_saude = new FilterSaude($session);

        $elems = $filter_saude->filterValues($this->getDoctrine());
        return $this->render('ReportsBundle:Default:saudeFilter.html.twig', array(
                    'elems' => $elems
        ));
    }

    // Genera la lista de correos ...
   /* public function exportAction(Request $request) {
        $response = new StreamedResponse(function() use($request) {
            $pacientes = $this->makeQuery($request, -1);
            $handle = fopen('php://output', 'r+');
            fputcsv($handle, Array('Email', 'Nome'), ';'); //Email;Nome
            foreach ($pacientes as $paciente) {
                foreach ($paciente->getResponsavels() as $resp) {
                    fputcsv($handle, Array($resp->getEmail(), $resp->getNome()), ';');
                }
            }
            fclose($handle);
        });
        $response->headers->set('Content-Type', 'application/force-download');
        $response->headers->set('Content-Disposition', 'attachment; filename="export.csv"');

        return $response;
    }*/
    
     public function exportAction(Request $request) {
        $response = new StreamedResponse(function() use($request) {
            $pacientes = $this->makeQuery($request, -1);
            $handle = fopen('php://output', 'r+');
            fputs($handle, implode(Array('Email', 'Nome'), ';')."\n"); //Email;Nome
            foreach ($pacientes as $paciente) {
                foreach ($paciente->getResponsavels() as $resp) {
                    fputs($handle, implode(Array($resp->getEmail(), $resp->getNome()), ';')."\n");
                }
            }
            fclose($handle);
        });
        $response->headers->set('Content-Type', 'application/force-download');
        $response->headers->set('Content-Disposition', 'attachment; filename="export.csv"');

        return $response;
    }

}
