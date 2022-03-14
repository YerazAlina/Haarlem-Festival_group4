<?php
require_once("model.php");

class restaurantType extends model{
    private int $id;
    private string $name;

    protected const sqlTableName = "restaurantType";
    protected const sqlFields = ["id", "name"];

    public function constructor(int $id, string $name){
        $this->id = $id;
        $this->name = $name;

        return $this;
    }

    public function getSqlFields()
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
        ];
    }

    public static function sqlParse(array $sqlRes) : self
    {
        return (new self())->constructor(
            $sqlRes[self::sqlTableName . "id"],
            $sqlRes[self::sqlTableName . "name"]
        );
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function getName() : string
    {
        return $this->name;
    }
}