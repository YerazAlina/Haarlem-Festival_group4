<?php

require_once("model.php");
require_once("location.php");



class artist extends model {

    private int $id;
    private string $name;
    private string $description;

    protected const sqlTableName = "artist";
    protected const sqlFields = ["id", "name", "description"];

    public function constructor(int $id, string $name, string $description){
        
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        return $this;
    }

    public function getSqlFields() {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "description" => $this->description
        ];
    }

    public static function sqlParse(array $sqlRes): self
    {
        return (new self())->constructor(
            $sqlRes[self::sqlTableName . "id"],
            $sqlRes[self::sqlTableName . "name"],
            $sqlRes[self::sqlTableName . "description"]
        );
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

   
}