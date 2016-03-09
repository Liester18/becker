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
class FilterSex extends Filter {

    protected $id;
    protected $session;

    function __construct($session) {
        $this->session = $session;
        if ($this->session->has('filter_sex') && trim($this->session->get('filter_sex')) != '') {
            $this->id = $this->session->get('filter_sex');
        } else {
            $this->id = null;
        }
    }

    public function setID($filter_id) {
        if ($filter_id == null) {
            $this->session->remove('filter_sex');
            $this->id = null;
        } else {
            $this->id = $filter_id;
            $this->session->set('filter_sex', $filter_id);
        }
    }

    public function genActiveFilter() {
        if ($this->id != null) {
            if ($this->id == "Homen") {
                return array(
                    array('name' => 'Homen', 'id' => 's_Homen', 'my_class' => $this->my_class())
                );
            } 
            return array(
                array('name' => 'Female', 'id' => 's_Female', 'my_class' => $this->my_class())
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
        return 'sex_class';
    }

    public function fromDQL($obj) {
        return "";
        # JOIN ...
    }

    public function whereDQL($obj) {
        return $obj . '.' . 'sex = :sex ';
    }

    public function setFilter($query) {
        if ($this->id != null) {
            if($this->id == 'Homen'){
                $query->setParameter('sex', 'true');
            }
            else{
                $query->setParameter('sex', 'false');
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
        $res = Array(Array('text' => 'Homen', 'id'=>'Homen'),
            Array('text' => 'Female', 'id'=>'Female'));
        return $res;
    }

}
