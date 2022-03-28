<?php

require __DIR__. ('../../service/UserService.php');

class usercontroller
{
    private UserService $service;

    public function __construct()
    {
        $this->service = new UserService();
    }

    public function index()
    {
        $users = $this->service->getAll();
        echo json_encode($users);
        //the above returns {"name":"John", "surname":"Doe", "username" : "TestJson"}
        //include_once __DIR__. ('../../views/login.php');
    }

    public function createUsers($vars)
    {
        //everything from the model layer except id..
        //$name = $vars["name"];
        //$price = $vars["price"];
        return $this->service->createUser($name, $price);
    }

    public function deleteUser($id)
    {
        return $this->service->deleteUser($id);
    }

    public function getOneUser($path)
    {
        $user = $this->service->getOneUser($path);
        echo json_encode($user); 

    }
}