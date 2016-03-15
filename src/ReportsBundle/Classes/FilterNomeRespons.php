<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ReportsBundle\Classes;

use ReportsBundle\Classes\Filter;


/**
 * Description of FilterNome
 *
 * @author alain
 */
class FilterNomeRespons extends Filter{
    protected $name;
    protected $session;
    function __construct($session) {
        $this->session = $session;
        if($this->session->has('filter_name_respons') && trim($this->session->get('filter_name_respons')) != ''){
            $this->name = $this->session->get('filter_name_respons');
        }
        else{
            $this->name = null;
        }
    }
    public function setName($filter_name){
        if($filter_name == null){
            $this->session->remove('filter_name_respons');
            $this->name = null;
        }
        else{
            $this->name = $filter_name;
            $this->session->set('filter_name_respons', $filter_name);
        }
    }
    public function genActiveFilter(){
        if($this->name != null){
            $points = '...';
            $num = 10;
            
            if(strlen($this->name)< $num){
                $num = strlen($this->name);
                $points = '';
            }
            $name = substr($this->name,0,$num).$points;
            return array (
                array ('name' => $name,'id' => 'filtNameResp','my_class' => $this->my_class())
            );
        }
         
        return Array();
    }
    public function filtercount(){
        if(hasMatch()){
            return 1;
        }
        return 0;
    }
    public function my_class(){
        return 'resp_class';
    }
    public function fromDQL($obj){
        return " JOIN p.ordenResponsavels orr JOIN orr.responsavel r ";
        # JOIN ...
    }
    public function whereDQL($obj){
        return 'r.'.'nome LIKE :name ';
    }
    public function setFilter($query){                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
        if($this->name != null){
            $query->setParameter('name', '%'.$this->name.'%');
        }
        return $query;
    }
    public function hasMatch(){
        if($this->name != null && trim($this->name)!=''){
            return true;
        }
        return false;
    }                                                                                                                                                                                                                                                                                                                                                               
}
