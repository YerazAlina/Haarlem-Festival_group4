<?php

require_once ("model.php");
require_once ("time.php");
require_once ("date.php");

class historytour extends model {

    private int $id;
    private DateTime $date;
    private DateTime $time;
    private float $price;
    private float $famPrice;
    private int $seats;
    private string $guide;
    private int $tourType;

    protected const sqlTableName = "historytour";
    protected const sqlFields = ["id", "date", "time", "price", "famPrice", "seats", "guide", "tourType"];

    public function constructor(int $id, DateTime $date, DateTime $time,float $price, float $famPrice, int $seats, string $guide, int $tourType) {

        $this->id = $id;

        if(!is_null($date)){
            $this->date = $date;
        }

        if(!is_null($time)){
            $this->time = $time;
        }

        if(!is_null($$price)){
            $this->price = $price;
        }
        if(!is_null($$famPrice)){
            $this->famPrice = $famPrice;
        }

        if(!is_null($seats)){
            $this->seats = $seats;

        if(!is_null($guide)){
                $this->guide = $guide;
        }
        if(!is_null($tourType))){
            $this->tourType) = $tourType);
        }

        return $this;
    }

    public function getSqlFields() {
        $array = [
            "id" => $this->id
        ];

        if (isset($this->date))
            $array["date"] = $this->date;

        if (isset($this->time))
            $array["time"] = $this->time->format("H:i:s");

        if (isset($this->price))
            $array["price"] = $this->price;

        if (isset($this->famPrice))
            $array["famPrice"] = $this->famPrice;

        if (isset($this->seats))
            $array["seats"] = $this->seats;

        if (isset($this->guide))
            $array["guide"] = $this->guide;

        if (isset($this->tourType))
            $array["tourType"] = $this->tourType>getId();


        return $array;
    }

    public static function sqlParse(array $sqlRes): self
    {
        $date = null;
        $time = null;
       

        if (!is_null($sqlRes[self::sqlTableName . "date"]))
            $date = date_create_from_format("Y-m-d", $sqlRes[self::sqlTableName . "date"]);

        if (!is_null($sqlRes[self::sqlTableName . "time"]))
            $startT = date_create_from_format("H:i:s", $sqlRes[self::sqlTableName . "time"]);


        return (new self())->constructFull(
            $sqlRes[self::sqlTableName . "id"],
            $date,
            $time,
            $sqlRes[self::sqlTableName . "price"],
            $sqlRes[self::sqlTableName . "famPrice"],
            $sqlRes[self::sqlTableName . "seats"],
            $sqlRes[self::sqlTableName . "guide"],
            $sqlRes[self::sqlTableName . "tourType"]
        );
    }

    public function getId() : int
    {
        return $this->id;
    }

    
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    
    public function getDate(): DateTime
    {
        return $this->date;
    }

    
    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }

    
    public function getTime(): DateTime
    {
        return $this->startTime;
    }

    public function setTime(DateTime $time): void
    {
        $this->time = $time;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }


    public function getFamPrice(): float
    {
        return $this->famPrice;
    }

    public function setPrice(float $famPrice): void
    {
        $this->famPrice = $famPrice;
    }


    public function getSeats(): int
    {
        return $this->seats;
    }

    public function setSeats(int $seats): void
    {
        $this->seats = $seats;
    }

    public function getGuide(): string {
        return $this->guide;
    }

    public function setGuide(string $guide): void {
        $this->guide = $guide;
    }

    public function getTourType() : int
    {
        return $this->tourType;
    }

    
    public function setTourType(int $id): void
    {
        $this->tourType = $tourType;
    }

    public function getDateAsDate(): date {
        $date = new date();
        $date->fromDateTime($this->date);
        return $date;
    }

    public function getTimeAsTime() : time {
        $time = new time();
        $time->fromDateTime($this->time);
        return $time;
    }


    public function getFormattedDateTime(){
        $startDateStr = $this->time->format("H:i");
        $dateStr = $this->date->format("d-m-Y");

        return $startDateStr . " to " . $endDateStr . " at " . $dateStr; //ask about this
    }


}
