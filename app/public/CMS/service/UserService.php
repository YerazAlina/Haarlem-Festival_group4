<?php
require_once __DIR__ . ('../../model/User.php');
require_once __DIR__ . ('../../repository/UserRepository.php');

class UserService
{
    private UserRepository $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function getAllUsers()
    {
        return $this->userRepository->findAll();
    }

    public function createUser($email, $firstname, $lastname, $password)
    {
        $data = [
            'email' => $email,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'password' => $password
        ];
        return $this->userRepository->saveOne($data);
    }

    public function deleteUser($id)
    {
        return $this->userRepository->deleteOne($id);
    }

    public function getOneUser($id)
    {
        return $this->userRepository->findById($id);
    }

    public function login()
    {
        $count = "";

        if (isset($_POST["login"])) {
            if (empty($_POST["email"]) || empty($_POST["password"])) {
                $message = '<label>All fields are required</label>';
            } else {
                $query = "SELECT * FROM users WHERE email = :email AND password = :password";
                $statement = $this->userRepository->db->prepare($query);
                $statement->execute(
                    array(
                        'email'     =>     $_POST["email"],
                        'password'     =>     $_POST["password"]
                    )
                );
                $count = $statement->rowCount();
            }
        }

        return $count;
    }

    public function logout()
    {
        session_start();

        // Unset all of the session variables
        $_SESSION = array();

        // Destroy the session
        session_destroy();

        // Redirect to login page
        //go to login page 
        exit;
    }
}
