<?php

require_once ("model.php");
require_once ("jazzArtist.php");
require_once ("jazzActivity.php");


class jazzActivity extends model {

    private int $id;
    private artist $artist;
    private activity $activity ;
    private string $activityHall;

    protected const sqlTableName = "jazzActivity";
    protected const sqlFields = ["id", "artistId", "activityId", "activityHall"];
    protected const sqlLinks = ["artistId" => artist::class, "activityId" => activity::class, "activityHall"];

    public function __construct() {}

    public function constructFull(int $id, artist $artist, activity $activity, string $activityHall) {
        
        $this->id = $id;
        $this->artist = $artist;
        $this->activity = $activity;
        $this->activityHall = $activityHall;

        return $this;
    }

    public function getSqlFields() {

        return [
            "id" => $this->id,
            "artistId" => $this->artist->getId(),
            "activityId" => $this->activity->getId(),
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


    public function getartist()
    {
        return $this->artist;
    }


    public function setartist($artist)
    {
        $this->artist = $artist;

        return $this;
    }

    public function getactivity()
    {
        return $this->activity;
    }


    public function setactivityId($activity)
    {
        $this->activityId = $activity;

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