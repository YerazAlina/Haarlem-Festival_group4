<?php

class User implements \JsonSerializable
{
    private int $id;
    private string $email;
    private string $firstname;
    private string $lastname;
    private string $password;
    private int $roleId;

    public function jsonSerialize() {
        return [
            'email' => $this->email,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'password' => $this->password,
            'roleId' => $this->roleId,
        ];
    }
}