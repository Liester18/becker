<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ReportsBundle\Classes;

/**
 * Description of Filter
 *
 * @author alain
 */
abstract class Filter {
    abstract protected function fromDQL($obj);
    abstract protected function whereDQL($obj);
    abstract protected function setFilter($query);
    abstract protected function hasMatch();
    abstract protected function genActiveFilter();
    abstract protected function my_class();
}
