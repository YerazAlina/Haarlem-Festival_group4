<?php

require_once("../model/jazzactivity.php");
require_once("dynamicQuery.php");

class jazzactivity_DAO extends dynamicQuery {
    
    public function __construct(){
        parent::__construct(jazzActivity::class);
    }

    public function get(array $filter = []){
        return parent::get($filter);
    }

    public function getArray(array $filter = []) : array {
        return parent::getArray($filter);
    }
}