<?php 
//check if user exist 
session_start();

include_once __DIR__ . '../../../model/config.php';

if (isset($_POST["login"])) {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        $message = '<label>All fields are required</label>';
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
?>