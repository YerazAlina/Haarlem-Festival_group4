<?php

require_once ("model.php");
require_once ("jazzartist.php");
require_once ("jazzactivity.php");


class jazzactivity extends model {

    private int $id;
    private artist $artistId;
    private activity $activityId ;
    private string $activityHall;

    protected const sqlTableName = "jazzActivity";
    protected const sqlFields = ["id", "artistId", "activityId", "activityHall"];
    protected const sqlLinks = ["artistId" => artist::class, "activityId" => activity::class, "activityHall"];

    public function __construct() {}

    public function constructFull(int $id, artist $artistId, activity $activityId, string $activityHall) {
        
        $this->id = $id;
        $this->artistId = $artistId;
        $this->activityId = $activityId;
        $this->activityHall = $activityHall;

        return $this;
    }

    public function getSqlFields() {

        return [
            "id" => $this->id,
            "artistId" => $this->artistId->getId(),
            "activityId" => $this->activityId->getId(),
            "activityHall" => $this->activityHalle->getactivityHall()
        ];
    }

    public static function sqlParse(array $sqlRes): self
    {
        return (new self())->constructFull(
            $sqlRes[self::sqlTableName . "id"],
            artist::sqlParse($sqlRes),
            activity::sqlParse($sqlRes),
            $sqlRes[self::sqlTableName . "activityHall"]
        );
    }

    public function getName(){
        return $this->getartist()->getName();
    }

    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    public function getartistId()
    {
        return $this->artistId;
    }


    public function setartistId($artistId)
    {
        $this->artistId = $artistId;

        return $this;
    }

    public function getactivityId()
    {
        return $this->activityId;
    }


    public function setactivityId($activityId)
    {
        $this->activityId = $activityId;

        return $this;
    }

    public function getactivityHall()
    {
        return $this->activityHall;
    }


    public function setactivityHall($activityHall)
    {
        $this->activityHall = $activityHall;

        return $this;
    }


}