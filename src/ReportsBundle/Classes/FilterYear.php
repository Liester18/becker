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
class FilterYear extends Filter {

    protected $filters;

    function __construct($session) {
        $this->session = $session;
        if ($this->session->has('year')) {
            $this->filters = json_decode($this->session->get('year'), true);
            if (!is_array($this->filters)) {
                die();
            }
        } else {
            $this->filters = null;
        }
    }

    public function addFilter($id, $begin, $end) {

        if ($id == null) {
            $this->session->remove('year');
            $this->filters = null;
        } else if ($this->filters == null) {

            $this->filters = Array(Array('id' => $id, 'begin' => $begin, 'end' => $end));
            $this->session->set('year', json_encode($this->filters));
        } else {
                        var_dump($this->filters);
                                                var_dump($id);
            foreach ($this->filters as $f) {
                if ($f['id'] == $id) {
                    return false;
                }
            }
            array_push($this->filters, Array('id' => $id, 'begin' => $begin, 'end' => $end));
            $this->session->set('year', json_encode($this->filters));
        }
        return true;
    }

    public function remFilter($id) {
        if ($this->filters != null) {
            $i = 0;
            foreach ($this->filters as $f) {
                if ('yr_' . $f['id'] == $id) {
                    array_splice($this->filters, $i, 1);
                    break;
                }
                $i = $i + 1;
            }
            if (count($this->filters) == 0) {
                $this->session->remove('year');
                $this->filters = null;
            } else {
                $this->session->set('year', json_encode($this->filters));
            }
        }
    }

    # Para uso de quitar filtro

    public function genActiveFilter() {
        if ($this->filters != null) {
            $result = Array();
            #var_dump($this->filters);
            #die();
            foreach ($this->filters as $f) {
                $n = '[ ' . $f['begin'] . ' ' . $f['end'] . ']';
                array_push($result, Array('name' => $n, 'id' => 'yr_' . $f['id'], 'my_class' => $this->my_class()));
            }
            return $result;
        }

        return Array();
    }

    public function hasMatch() {
        if ($this->filters != null) {
            return true;
        }
        return false;
    }

    public function fromDQL($obj) {
        return "";
        # JOIN ...
    }

    public function whereDQL($obj) {
        $result = '';
        $i = 0;
        foreach ($this->filters as $f) {
            if ($i == 0) {
                $result = '( ' . $obj . '.' . 'edad > :begin' . $i . ' AND '
                        . $obj . '.' . 'edad <= :end' . $i . ' )';
            } else {
                $result = $result . ' OR ' . '( ' . $obj . '.' . 'edad > :begin' . $i . ' AND '
                        . $obj . '.' . 'edad <= :end' . $i . ' ) ';
            }
            $i = $i + 1;
        }
        return $result;
    }

    public function setFilter($query) {
        if ($this->filters != null) {
            $i = 0;
            foreach ($this->filters as $f) {
                $query->setParameter('begin' . $i, $f['begin']);
                $query->setParameter('end' . $i, $f['end']);
                $i = $i + 1;
            }
        }
        return $query;
    }

    public function filtercount() {
        if (hasMatch()) {
            return count($this->filters);
        }
        return 0;
    }

    public function my_class() {
        return 'year_class';
    }

    public function filterValues($doctrine) {
        $res = Array(Array('begin' => '0', 'end' => '1', 'id' => '1_yr'),
            Array('begin' => '1', 'end' => '2', 'id' => '2_yr'),
            Array('begin' => '2', 'end' => '3', 'id' => '3_yr'),
            Array('begin' => '3', 'end' => '4', 'id' => '4_yr'),
            Array('begin' => '4', 'end' => '5', 'id' => '5_yr'),
            Array('begin' => '5', 'end' => '6', 'id' => '6_yr'),
            Array('begin' => '6', 'end' => '7', 'id' => '7_yr'),
            Array('begin' => '7', 'end' => '8', 'id' => '8_yr'),
            Array('begin' => '8', 'end' => '9', 'id' => '9_yr'),
            Array('begin' => '9', 'end' => '10', 'id' => '10_yr'),
            Array('begin' => '10', 'end' => '11', 'id' => '11_yr'));
        return $res;
    }

}
