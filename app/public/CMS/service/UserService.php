<?php
require_once __DIR__.('../../model/User.php');
require_once __DIR__.('../../repository/UserRepository.php');

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
}