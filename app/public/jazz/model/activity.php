<?php

require_once("location.php");


class activity
{
    public int $id;
    public string $type;
    public DateTime $date;
    public DateTime $startTime;
    public DateTime $endTime;
    public location $locationId;
    public float $price;
    public int $ticketsLeft;

    /**
     * @param int $id
     * @param string $type
     * @param DateTime $date
     * @param DateTime $startTime
     * @param DateTime $endTime
     * @param location $locationId
     * @param float $price
     * @param int $ticketsLeft
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
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     */
    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }

    /**
     * @return DateTime
     */
    public function getStartTime(): DateTime
    {
        return $this->startTime;
    }

    /**
     * @param DateTime $startTime
     */
    public function setStartTime(DateTime $startTime): void
    {
        $this->startTime = $startTime;
    }

    /**
     * @return DateTime
     */
    public function getEndTime(): DateTime
    {
        return $this->endTime;
    }

    /**
     * @param DateTime $endTime
     */
    public function setEndTime(DateTime $endTime): void
    {
        $this->endTime = $endTime;
    }

    /**
     * @return location
     */
    public function getLocationId(): location
    {
        return $this->locationId;
    }

    /**
     * @param location $locationId
     */
    public function setLocationId(location $locationId): void
    {
        $this->locationId = $locationId;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getTicketsLeft(): int
    {
        return $this->ticketsLeft;
    }

    /**
     * @param int $ticketsLeft
     */
    public function setTicketsLeft(int $ticketsLeft): void
    {
        $this->ticketsLeft = $ticketsLeft;
    }




}