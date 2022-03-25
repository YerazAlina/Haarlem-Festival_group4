<?php
require __DIR__.('../../db.php');
require __DIR__.('../../model/User.php');

class UserService
{
    private DB $db;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    public function getAll()
    {
        $stmt = $this->db->prepare("select * from users");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        $stmt->execute();

        $users = $stmt->fetchAll();
        return $users;
    }
}