<?php

require_once("../Model/foodactivity.php");
require_once("dynamicQuery.php");

class foodactivity_DAO extends dynamicQuery {
    
    public function __construct(){
        parent::__construct(foodactivity::class);
    }

    public function get(array $filter = []){
        return parent::get($filter);
    }

    public function getArray(array $filter = []) : array {
        return parent::getArray($filter);
    }
}