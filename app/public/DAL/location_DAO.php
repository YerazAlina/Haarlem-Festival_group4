<?php

require_once("../model/location.php");
require_once("dynamicQuery.php");

class location_DAO extends dynamicQuery {
    
    public function __construct(){
        parent::__construct(location::class);
    }

    public function get(array $filter = []){
        return parent::get($filter);
    }
}