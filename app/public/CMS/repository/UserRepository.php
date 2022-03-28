<?php

require_once __DIR__ . ('../../db.php');
require_once __DIR__ . ('../../repository/Repository.php');
require_once __DIR__ . ('../../model/User.php');

class UserRepository extends Repository
{
    public DB $db;
    public $stmt;

    //sql statements 
    private string $all_users_sql = "SELECT * FROM users";
    private string $create_user_sql = "insert into users (id, email, firstname, lastname, password, roleId) values (null, :email, :firstname, :lastname, :password, 1)"; //TODO: CHANGE ROLE?
    private string $delete_user_sql = "delete from users where id = :id";
    private string $one_user_sql = "SELECT id from users where id = :id"; //TODO: CHANGE 

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    public function findAll()
    {
        $this->stmt = $this->db->prepare($this->all_users_sql);
        $this->stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        $this->stmt->execute();

        return $this->stmt->fetchAll();
    }

    public function findById($id)
    {
        $this->stmt = $this->db->prepare($this->one_user_sql);
        $this->stmt->bindParam(':id', $id);
        $this->stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        $this->stmt->execute();

        return $this->stmt->fetch();
    }

    public function saveOne($data)
    {
        $this->stmt = $this->db->prepare($this->create_user_sql);

        return $this->stmt->execute($data) ?? false;
    }

    public function deleteOne($id)
    {
        $this->stmt = $this->db->prepare($this->delete_user_sql);
        $this->stmt->bindParam(':id', $id);

        return $this->stmt->execute();
    }
}
