<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

require_once ($root . "/Model/orders.php");
require_once("dynamicQuery.php");

class orders_DAO extends dynamicQuery {

    public function __construct(){
        parent::__construct(orders::class);
    }

    public function get(array $filter = []){
        return parent::get($filter);
    }
}