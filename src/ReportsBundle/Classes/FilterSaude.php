<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ReportsBundle\Classes;

use ReportsBundle\Classes\Filter;

/**
 * Description of FilterSaude
 *
 * @author alain
 */
class FilterSaude extends Filter {

    protected $filters;

    function __construct($session) {
        $this->session = $session;
        if ($this->session->has('filter_saude')) {
            $this->filters = json_decode($this->session->get('filter_saude'), true);
            if (!is_array($this->filters)) {
                die();
            }
        } else {
            $this->filters = null;
        }
    }

    public function addFilter($id, $name) {

        if ($id == null) {
            $this->session->remove('filter_saude');
            $this->filters = null;
        } else if ($this->filters == null) {
            $this->filters = Array(Array('id' => $id, 'name' => $name));
            $this->session->set('filter_saude', json_encode($this->filters));
        } else {
            foreach ($this->filters as $f) {
                if ($f['id'] == $id) {
                    return false;
                }
            }
            array_push($this->filters, Array('id' => $id, 'name' => $name));
            $this->session->set('filter_saude', json_encode($this->filters));
        }
        return true;
    }

    public function remFilter($id) {
        if ($this->filters != null) {
            $i = 0;
            foreach ($this->filters as $f) {
                if ('sa_' . $f['id'] == $id) {
                    array_splice($this->filters, $i, 1);
                    break;
                }
                $i = $i + 1;
            }
            if (count($this->filters) == 0) {
                $this->session->remove('filter_saude');
                $this->filters = null;
            } else {
                $this->session->set('filter_saude', json_encode($this->filters));
            }
        }
    }

    public function genActiveFilter() {
        if ($this->filters != null) {
            $result = Array();
            foreach ($this->filters as $f) {
                array_push($result, Array('name' => $f['name'], 'id' => 'sa_' . $f['id'], 'my_class' => $this->my_class()));
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
        return " JOIN p.pacienteproblemasSaude ps JOIN ps.problemaSaude s ";
        # JOIN ...
    }

    public function whereDQL($obj) {
        $result = '';
        $i = 0;
        foreach ($this->filters as $f) {
            if ($i == 0) {
                $result = ' s.idProblemasSaude = :id' . $i . ' ';
            } else {
                $result = $result . ' OR s.idProblemasSaude = :id' . $i . ' ';
            }
            $i = $i + 1;
        }
        return $result;
    }

    public function setFilter($query) {
        if ($this->filters != null) {
            $i = 0;
            foreach ($this->filters as $f) {
                $query->setParameter('id' . $i, $f['id']);
                $i = $i + 1;
            }
        }
        return $query;
    }

    public function my_class() {
        return 'saude_class';
    }

    public function filterValues($doctrine) {
        $repositoryTB = $doctrine->getManager()->getRepository('EntityBundle:ProblemasSaude');

        $saude = $repositoryTB->findAll();
        $res = Array();
        foreach ($saude as $sa) {
            $elem = Array('id' => $sa->getIdProblemasSaude(), 'text' => $sa->getNombrePsaude());
            array_push($res, $elem);
        }

        return $res;
    }

}
