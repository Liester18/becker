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
class FilterActive extends Filter {

    protected $id;
    protected $session;

    function __construct($session) {
        $this->session = $session;
        if ($this->session->has('filter_active') && trim($this->session->get('filter_active')) != '') {
            $this->id = $this->session->get('filter_active');
        } else {
            $this->id = null;
        }
    }

    public function setID($filter_id) {
        if ($filter_id == null) {
            $this->session->remove('filter_active');
            $this->id = null;
        } else {
            $this->id = $filter_id;
            $this->session->set('filter_active', $filter_id);
        }
    }

    public function genActiveFilter() {
        if ($this->id != null) {
            if ($this->id == "active") {
                return array(
                    array('name' => 'Ativo', 'id' => 'a_active', 'my_class' => $this->my_class())
                );
            } 
            return array(
                array('name' => 'Nao Ativo', 'id' => 'a_Nactive', 'my_class' => $this->my_class())
            );
        }

        return Array();
    }

    public function filtercount() {
        if (hasMatch()) {
            return 1;
        }
        return 0;
    }

    public function my_class() {
        return 'active_class';
    }

    public function fromDQL($obj) {
        return "";
        # JOIN ...
    }

    public function whereDQL($obj) {
        return $obj . '.' . 'active = :active ';
    }

    public function setFilter($query) {
        if ($this->id != null) {
            if($this->id == 'active'){
                $query->setParameter('active', 'true');
            }
            else{
                $query->setParameter('active', 'false');
            }
        }
        return $query;
    }

    public function hasMatch() {
        if ($this->id != null && trim($this->id) != '') {
            return true;
        }
        return false;
    }
    
    public function filterValues($doctrine){
        $res = Array(Array('text' => 'Ativo', 'id'=>'active'),
            Array('text' => 'Nao Ativo', 'id'=>'Nactive'));
        return $res;
    }

}
