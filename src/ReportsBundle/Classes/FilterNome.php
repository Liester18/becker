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
class FilterNome extends Filter{
    protected $name;
    protected $match;
    protected $session;
    function __construct($session) {
        $this->session = $session;
        if($this->session->has('filter_name') && trim($this->session->get('filter_name')) != ''){
            $this->name = $this->session->get('filter_name');
        }
        else{
            $this->name = null;
        }
        if($this->session->has('match')){
            $this->match = $this->session->get('match');
        }
        else{
            $this->match = null;
        }
    }
    public function getName(){
        return $this->name;
    }
    public function getMatch(){
        return $this->match;
    }
    
    public function setName($filter_name){
        if($filter_name == null){
            $this->session->remove('filter_name');
            $this->name = null;
        }
        else{
            $this->name = $filter_name;
            $this->session->set('filter_name', $filter_name);
        }
    }
    public function setMatch($match){
        if($match == null){
            $this->match = null;
            $this->session->remove('match');
        }
        else{
            $this->match = $match;
            $this->session->set('match', $match);
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
                array ('name' => $name,'id' => 'filtName','my_class' => $this->my_class())
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
        return 'nome_class';
    }
    public function fromDQL($obj){
        return "";
        # JOIN ...
    }
    public function whereDQL($obj){
        return $obj.'.'.'nome LIKE :name ';
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
