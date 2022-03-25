<?php

require_once("../model/jazzartist.php");
require_once("dynamicQuery.php");

class jazzartist_DAO extends dynamicQuery {

    public function __construct(){
        parent::__construct(artist::class);
    }

    public function get(array $filter = []){
        return parent::get($filter);
    }
}