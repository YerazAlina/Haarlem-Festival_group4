<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

require_once($root . "/Model/location.php");
//require __DIR__ . '/../Model/location.php';
require_once("dynamicQuery.php");

class location_DAO extends dynamicQuery {
    
    public function __construct(){
        parent::__construct(location::class);
    }

    public function get(array $filter = []){
        return parent::get($filter);
    }
}