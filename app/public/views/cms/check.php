<?php 
//check if user exist 
//session_start();

include_once __DIR__ . '../../../config/config.php';

if (isset($_POST["login"])) {
    if (empty($_POST["email"]) || empty($_POST["password"])) {
        $message = '<label>All fields are required</label>';
    } else {
        $query = "SELECT * FROM users WHERE email = :email AND password = :password";
        $statement = $pdo->prepare($query);
        $statement->execute(
            array(
                'email'     =>     $_POST["email"],
                'password'     =>     $_POST["password"]
            )
        );
        $count = $statement->rowCount();
        if ($count > 0) {
            $_SESSION["email"] = $_POST["email"];
            header("Location: homecms");
            exit;
        } else {
            $message = '<label>Wrong Data</label>';
        }
    }
}
?>