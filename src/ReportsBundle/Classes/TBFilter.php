<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ReportsBundle\Classes;

use ReportsBundle\Classes\Filter;

/**
 * Description of TBFilter
 *
 * @author alain
 */
class TBFilter extends Filter{
    
    protected $filters;
    function __construct($session) {
        $this->session = $session;
        if($this->session->has('blood')){
            $this->filters = json_decode( $this->session->get('blood'), true);
            if(!is_array($this->filters)){
                die();
            }
        }
        else{
            $this->filters = null;
        }
    }
    public function addFilter($id, $name){
        if($id == null){
            $this->session->remove('blood');
            $this->filters = null;
        }
        else if($this->filters == null){
            
            $this->filters = Array(Array('id'=>$id, 'name'=>$name));
            $this->session->set('blood', json_encode($this->filters));
        }
        else{
            array_push($this->filters, Array('id'=>$id, 'name'=>$name));
            $this->session->set('blood', json_encode($this->filters));
        }
    } 
    public function remFilter($id){
        if($this->filters != null){
            $i=0;
            foreach($this->filters as $f){
                if('bl_'.$f['id'] == $id){
                    array_splice($this->filters, $i,1);
                    break;
                }
                $i = $i+1;
            }
            if(count($this->filters) == 0){
                $this->session->remove('blood');
                $this->filters = null;
            }
            else{
                $this->session->set('blood', json_encode($this->filters));
            }
        }
    }
    # Para uso de quitar filtro
    public function genActiveFilter(){
        if($this->filters != null){
            $result = Array();
            #var_dump($this->filters);
            #die();
            foreach($this->filters as $f){
                array_push($result,Array('name' => $f['name'],'id' => 'bl_'.$f['id'],'my_class' => $this->my_class()));
            }
            return $result;
        }
         
        return Array();
    }
    public function hasMatch(){
        if($this->filters != null){
            return true;
        }
        return false;
    } 
    public function fromDQL($obj){
        return "";
        # JOIN ...
    }
    public function whereDQL($obj){
        $result = '';
        $i = 0;
        foreach($this->filters as $f){
            if($i == 0){
                $result = $obj.'.'.'tipoSanguineo = :id'.$i.' ';
            }
            else{
                $result = $result.' OR '.$obj.'.'.'tipoSanguineo = :id'.$i.' ';
            }
            $i = $i +1;
        }
        return $result;
    }
    public function setFilter($query){                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
        if($this->filters != null){
            $i = 0;
            foreach($this->filters as $f){
                $query->setParameter('id'.$i, $f['id']);
                $i = $i+1; 
            }
        }
        return $query;
    }
    public function filtercount(){
        if(hasMatch()){
            return count($this->filters);
        }
        return 0;
    }
    public function my_class(){
        return 'blood_class';
    }
    public function filterValues($doctrine){
        //$repositoryP = $doctrine->getManager()->getRepository('EntityBundle:Paciente');
        
        $repositoryTB = $doctrine->getManager()->getRepository('EntityBundle:TipoSanguineo');
        
        $tblood = $repositoryTB->findAll();
        $res = Array();
        foreach ($tblood as $tb){
            $elem = Array('id' => $tb->getIdTipoSanguineo(), 'text' => $tb->getNome());
            array_push($res, $elem);
        }
        
        return $res;
    }
}
