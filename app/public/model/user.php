<?php
require_once ("model.php");

class user extends model {

    private int $id;
    private string $email;
    private string $firstname;
    private string $lastname;
    private string $password;
    private role $roleId;

    protected const sqlTableName = "users";
    protected const sqlFields = ["id", "email", "firstname", "lastname", "password", "roleId"];
    protected const sqlLinks = ["roleId" => role::class];

    public function __construct(){}


    public function constructor(int $id, string $email, string $firstname, string $lastname, string $password, role $roleId){
        
        $this->id = $id;
        $this->email = $email;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->password = $password;
        $this->roleId = $roleId;

        return $this;
    }

    public function getSqlFields() {
        return [
            "id" => $this->id,
            "email" => $this->email,
            "firstname" => $this->firstname,
            "lastname" => $this->lastname,
            "password" => $this->password,
            "roleId" => $this->roleId->getId()
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

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getRole(): role
    {
        return $this->roleId;
    }
}