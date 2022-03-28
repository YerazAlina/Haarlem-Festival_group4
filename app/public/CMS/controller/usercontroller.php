<?php

require __DIR__. ('../../service/UserService.php');

class UserController
{
    private UserService $service;

    public function __construct()
    {
        $this->service = new UserService();
    }

    public function index()
    {
        $users = $this->service->getAllUsers();
        echo json_encode($users);
    }

    public function createUsers($vars)
    {
        $email = $vars["email"];
        $firstname = $vars["firstname"];
        $lastname = $vars["lastname"];
        $password = $vars["password"];
        //$roleId = $vars["roleId"];
        return $this->service->createUser($email, $firstname, $lastname, $password);
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