<?php

require_once 'jazz/model/artist.php';
require_once 'jazz/model/activity.php';
require_once 'jazz/model/jazzActivity.php';
require_once 'jazz/repository/jazzRepository.php';

class jazzService{

    private jazzRepository $jazzrepository ;


    public function __construct(){
        $this->jazzrepository = new jazzRepository();
    }

    public function getEvents(){
        return $this->jazzrepository->findAll();
    }


}