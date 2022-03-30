<?php

require_once ("model.php");
require_once ("time.php");
require_once ("date.php");

class historytour extends model {

    private int $id;
    private DateTime $date;
    private DateTime $time;
    private float $price;
    private int $seats;
    private int $guide;
    private int $language;

    protected const sqlTableName = "historytour";
    protected const sqlFields = ["id", "date", "time", "price", "language", "seats", "guide"];
    protected const sqlLinks = ["id"=> historytour::class,"date"=> historytour::class,"time"=> historytour::class,"price"=> historytour::class,"language"=> historytour::class,"seats"=> historytour::class,"guideS"=> historytour::class];

    public function __construct(int $id, DateTime $date, DateTime $time, float $price, int $language, int $seats, int $guide) {

        $this->id = $id;

        if(!is_null($date)){
            $this->date = $date;
        }

        if(!is_null($time)){
            $this->time = $time;
        }

        if(!is_null($price)){
            $this->price = $price;
        }

        if(!is_null($seats)){
            $this->seats = $seats;

        if(!is_null($guide)){
                $this->guide = $guide;
        }
        if(!is_null($language)){
            $this->language = $language;
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

        if (isset($this->language))
            $array["language"] = $this->language;

        if (isset($this->seats))
            $array["seats"] = $this->seats;

        if (isset($this->guide))
            $array["guide"] = $this->guide;

        

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
            $sqlRes[self::sqlTableName . "date"],
            $sqlRes[self::sqlTableName . "time"],
            $sqlRes[self::sqlTableName . "price"],
            $sqlRes[self::sqlTableName . "language"],
            $sqlRes[self::sqlTableName . "seats"],
            $sqlRes[self::sqlTableName . "guide"],
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


    public function getSeats(): int
    {
        return $this->seats;
    }

    public function setSeats(int $seats): void
    {
        $this->seats = $seats;
    }

    public function getGuide(): int {
        return $this->guide;
    }

    public function setGuide(string $guide): void {
        $this->guide = $guide;
    }
    public function getLanguage(): int {
        return $this->language;
    }

    public function setLanguage(string $language): void {
        $this->language = $language;
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
