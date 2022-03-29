<?php
require_once ("model.php");

class role extends model {

    private int $roleId;
    private string $type;

    protected const sqlTableName = "roles";
    protected const sqlFields = ["roleId", "type"];

    public function __construct(){}

    public function constructor(int $roleId, string $type){
        
        $this->roleId = $roleId;
        $this->type = $type;

        return $this;
    }

    public function getSqlFields() {
        return [
            "roleId" => $this->roleId,
            "type" => $this->type
        ];
    }

    public static function sqlParse(array $sqlRes): self
    {
        return (new self())->constructor(
            $sqlRes[self::sqlTableName . "roleId"],
            $sqlRes[self::sqlTableName . "type"]
        );
    }

    public function getId(): int
    {
        return $this->roleId;
    }

    public function getType(): string
    {
        return $this->type;
    }

}