<?php

require_once("../Model/restaurantTypeLink.php");
require_once("dynamicQuery.php");

class restaurantType_DAO extends dynamicQuery {
    
    public function __construct(){
        parent::__construct(restaurantTypeLink::class);
    }

    public function get(array $filter = []){
        return parent::get($filter);
    }
}