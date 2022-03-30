<?php

require_once("location.php");



class artist {

    public int $id;
    public string $artistname;
    public string $artistdescription;

    /**
     * @param int $id
     * @param string $artistname
     * @param string $artistdescription
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
     * @return string
     */
    public function getArtistname(): string
    {
        return $this->artistname;
    }

    /**
     * @param string $artistname
     */
    public function setArtistname(string $artistname): void
    {
        $this->artistname = $artistname;
    }

    /**
     * @return string
     */
    public function getArtistdescription(): string
    {
        return $this->artistdescription;
    }

    /**
     * @param string $artistdescription
     */
    public function setArtistdescription(string $artistdescription): void
    {
        $this->artistdescription = $artistdescription;
    }




}