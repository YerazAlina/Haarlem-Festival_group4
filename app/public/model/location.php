<?php
require_once("model.php");



class location extends model {
    
    private int $id;
    private string $name;
    private string $address;
    private string $postalCode;
    private string $city;

    protected const sqlTableName = "location";
    protected const sqlFields = ["id", "name", "postalCode", "city"];

    public function __construct(){}

    public function constructor(int $id, string $name, string $address, string $pCode, string $city){
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->postalCode = $pCode;
        $this->city = $city;

        return $this;
    }

    public function getSqlFields()
    {
        return[
            "id" => $this->id,
            "name" => $this->name,
            "address" => $this->address,
            "postalCode" => $this->postalCode,
            "city" => $this->city
        ];
    }

    public static function sqlParse(array $sqlRes): self
    {
        return (new self())->constructor(
            $sqlRes[self::sqlTableName . "id"],
            $sqlRes[self::sqlTableName . "name"],
            $sqlRes[self::sqlTableName . "address"],
            $sqlRes[self::sqlTableName . "postalCode"],
            $sqlRes[self::sqlTableName . "city"]
        );
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPostalcode()
    {
        return $this->postalCode;
    }

    public function setPostalcode($pCode)
    {
        $this->postalCode = $pCode;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }
}