<?php

require_once('../db.php');
require_once('Repository.php');
require_once('model/User.php');

class UserRepository extends Repository
{
    private DB $db;
    private $stmt;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    private string $all_users_sql = "SELECT * FROM users";
    private string $create_user_sql = "insert into users (id, firstname, lastname, ) values (null, :firstname, :lastname, )"; //TODO: CHANGE 
    private string $delete_user_sql = "delete from users where id = :id";
    private string $one_user_sql = "SELECT id from users where id = :id"; //TODO: CHANGE 

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

    public function login()
    {
        if (isset($_POST["login"])) {
            if (empty($_POST["username"]) || empty($_POST["password"])) {
                $message = '<label>All fields are required</label>';
                echo $message;
            } else {
                $query = "SELECT * FROM users WHERE username = :username AND password = :password";
                $statement = $pdo->prepare($query);
                $statement->execute(
                    array(
                        'username'     =>     $_POST["username"],
                        'password'     =>     $_POST["password"]
                    )
                );
                $count = $statement->rowCount();
                if ($count > 0) {
                    $_SESSION["username"] = $_POST["username"];
                    header("Location: homecms");
                    exit;
                } else {
                    $message = '<label>Wrong Data</label>';
                }
            }
        }
    }

    public function logout()
    {
        session_start();

        // Unset all of the session variables
        $_SESSION = array();

        // Destroy the session
        session_destroy();

        // Redirect to login page
        header("location: login");
        exit;
    }
}
