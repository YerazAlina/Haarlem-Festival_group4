<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

require_once ($root . "/Model/restaurantType.php");
require_once("dynamicQuery.php");

class restaurantType_DAO extends dynamicQuery {
    
    public function __construct(){
        parent::__construct(restaurantType::class);
    }

    public function get(array $filter = []){
        return parent::get($filter);
    }
}