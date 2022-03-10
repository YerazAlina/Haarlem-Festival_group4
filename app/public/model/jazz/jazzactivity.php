<?php

require_once ("model.php");
require_once ("artist.php");
require_once ("performance.php");


class jazzactivity extends model {

    private int $id;
    private artist $artist;
    private performance $performance;

    protected const sqlTableName = "jazzactivity";
    protected const sqlFields = ["id", "artistId", "performanceId"];
    protected const sqlLinks = ["artistId" => artist::class, "performanceId" => performance::class];

    public function __construct() {}

    public function constructFull(int $id, artist $artist, performance $performance) {
        
        $this->id = $id;
        $this->artist = $artist;
        $this->performance = $performance;

        return $this;
    }

    public function getSqlFields() {

        return [
            "id" => $this->id,
            "artistId" => $this->artist->getId(),
            "performanceId" => $this->performance->getId()
        ];
    }

    public static function sqlParse(array $sqlRes): self
    {
        return (new self())->constructFull(
            $sqlRes[self::sqlTableName . "id"],
            artist::sqlParse($sqlRes),
            performance::sqlParse($sqlRes)
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

    public function getPerformance()
    {
        return $this->performance;
    }


    public function setPerformanceId($performance)
    {
        $this->performanceId = $performance;

        return $this;
    }
}