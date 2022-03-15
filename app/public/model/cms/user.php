<?php
require_once("model.php");
require_once("location.php");

class user extends model
{
    private int $id;
    private string $email;
    private string $firstname;
    private string $lastmame;
    private string $password;
    private role $role;
}

protected const sqlTableName = "users";
protected const sqlFields = ["id", "email", "firstname", "lastname", "password", "roleId"];
protected const sqlLinks = ["roleId" => role::class];


    public function constructor(int $id, string $email, string $firstname, string $lastmame, string $password, Role $role){
        
        $this->id = $id;
        $this->email = $email;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->password = $password;
        $this->role = $role;
        return $this;
    }

    public function getSqlFields() {
        return [
            "id" => $this->id,
            "email" => $this->email,
            "firstname" => $this->firstname,
            "lastname" => $this->lastname,
            "password" => $this->password,
            "roleId" => $this->role->getId()
        ];
    }

    public static function sqlParse(array $sqlRes): self
    {
        return (new self())->constructor(
            $sqlRes[self::sqlTableName . "id"],
            $sqlRes[self::sqlTableName . "email"],
            $sqlRes[self::sqlTableName . "firstname"],
            $sqlRes[self::sqlTableName . "lastname"],
            $sqlRes[self::sqlTableName . "password"],
            role::sqlParse($sqlRes),
        );
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getRole()
    {
        return $this->role;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function setLastname($lastmame)
    {
        $this->lastname = $lastmame;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }
   
}





