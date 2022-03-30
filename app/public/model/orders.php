<?php
require_once("model.php");
require_once("user.php");

class orders extends model
{
    private int $id;
    private string $status;
    private user $user;

    protected const sqlTableName = "orders";
    protected const sqlFields = ["id", "status", "userId"];
    protected const sqlLinks = ["userId" => user::class];

    public function __construct(){}

    public function constructor(int $id, string $status, user $user)
    {
        $this->id = $id;
        $this->status = $status;
        $this->user = $user;
        return $this;
    }

    public function sqlGetFields()
    {
        return [
            "id" => $this->id,
            "status" => $this->status,
            "userId" => $this->user->getId()
        ];
    }

    public static function sqlParse(array $sqlRes): self
    {
        return (new self())->constructor(
            $sqlRes[self::sqlTableName . "id"],
            $sqlRes[self::sqlTableName . "status"],
            user::sqlParse($sqlRes)
        );
    }

    public function getId(): int
    {
        return $this->id;
    }


    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}
