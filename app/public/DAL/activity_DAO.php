<?php

require_once("../model/activity.php");
require_once("dynamicQuery.php");

class activity_DAO extends dynamicQuery {
    
    public function __construct(){
        parent::__construct(activity::class);
    }

    public function get(array $filter = []){
        return parent::get($filter);
    }

    public function getActivityById(array $ids) {
        return $this->get([ "id" => $ids]);
    }
}