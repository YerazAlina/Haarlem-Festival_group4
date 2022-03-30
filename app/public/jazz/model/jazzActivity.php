<?php


require_once ("artist.php");
require_once ("activity.php");


class jazzActivity {

    public int $id;
    public int $artistId;
    public int $activityId;
    public string $activityHall;

    /**
     * @param int $id
     * @param int $artistId
     * @param int $activityId
     * @param string $activityHall
     */

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getArtistId(): int
    {
        return $this->artistId;
    }

    /**
     * @param int $artistId
     */
    public function setArtistId(int $artistId): void
    {
        $this->artistId = $artistId;
    }

    /**
     * @return int
     */
    public function getActivityId(): int
    {
        return $this->activityId;
    }

    /**
     * @param int $activityId
     */
    public function setActivityId(int $activityId): void
    {
        $this->activityId = $activityId;
    }

    /**
     * @return string
     */
    public function getActivityHall(): string
    {
        return $this->activityHall;
    }

    /**
     * @param string $activityHall
     */
    public function setActivityHall(string $activityHall): void
    {
        $this->activityHall = $activityHall;
    }




}