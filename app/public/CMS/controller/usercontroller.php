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
        include_once __DIR__. ('../../views/login.php');
    }
}