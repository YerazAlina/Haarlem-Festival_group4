<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

require_once ($root . "/Model/restaurant.php");
//require __DIR__ . '/../Model/restaurant.php';
require_once("dynamicQuery.php");

class restaurant_DAO extends dynamicQuery {

    public function __construct(){
        parent::__construct(restaurant::class);
    }

    public function get(array $filter = []){
        return parent::get($filter);
    }
}