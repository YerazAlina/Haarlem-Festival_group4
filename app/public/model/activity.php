<?php
require_once ("model.php");
require_once ("location.php");
require_once ("time.php");
require_once ("date.php");

class avtivity extends model {
    private int $id;
    private string $type;
    private DateTime $date;
    private DateTime $startTime;
    private DateTime $endTime;
    private location $location;
    private float $price;
    private int $ticketsLeft;
    

    protected const sqlTableName = "activity";
    protected const sqlFields = ["id", "type", "date", "startTime", "endTime", "locationId", "price", "ticketsLeft"];
    protected const sqlLinks = ["locationId" => location::class];

    public function constructor(int $id, string $type, ?DateTime $date, DateTime $startTime, ?DateTime $endTime, ?location $location, float $price, ?int $ticketsLeft) {

        $this->id = $id;
        $this->type = $type;

        if(!is_null($dat)){
            $this->date = $date;
        }

        $this->startTime = $startTime;

        if(!is_null($endTime)){
            $this->endTime = $endTime;
        }

        if(!is_null($location)){
            $this->location = $location;
        }

        $this->price = $price;

        if(!is_null($ticketsLeft)){
            $this->ticketsLeft = $ticketsLeft;
        }

        return $this;
    }

    public function getSqlFields() {
        $array = [
            "id" => $this->id
        ];

        if (isset($this->type))
            $array["type"] = $this->type;

        if (isset($this->date))
            $array["date"] = $this->date;

        if (isset($this->startTime))
            $array["startTime"] = $this->startTime->format("H:i:s");

        if (isset($this->endTime))
            $array["endTime"] = $this->endTime->format("H:i:s");

        if (isset($this->location))
            $array["locationId"] = $this->location->getId();

        if (isset($this->price))
            $array["price"] = $this->price;

        if (isset($this->ticketsLeft))
            $array["ticketsLeft"] = $this->ticketsLeft;

        return $array;
    }

    public static function sqlParse(array $sqlRes): self
    {
        $date = null;
        $startT = null;
        $endT = null;

        if (!is_null($sqlRes[self::sqlTableName . "date"]))
            $date = date_create_from_format("Y-m-d", $sqlRes[self::sqlTableName . "date"]);

        if (!is_null($sqlRes[self::sqlTableName . "startTime"]))
            $startT = date_create_from_format("H:i:s", $sqlRes[self::sqlTableName . "startTime"]);

        if (!is_null($sqlRes[self::sqlTableName . "endTime"]))
            $endT = date_create_from_format("H:i:s", $sqlRes[self::sqlTableName . "endTime"]);

        return (new self())->constructFull(
            $sqlRes[self::sqlTableName . "id"],
            $sqlRes[self::sqlTableName . "type"],
            $date,
            $startT,
            $endT,
            location::sqlParse($sqlRes),
            $sqlRes[self::sqlTableName . "price"],
            $sqlRes[self::sqlTableName . "ticketsLeft"]
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

    
    public function getType(): string
    {
        return $this->type;
    }

    
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    
    public function getDate(): DateTime
    {
        return $this->date;
    }

    
    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }

    
    public function getStartTime(): DateTime
    {
        return $this->startTime;
    }

    
    public function getEndTime(): DateTime
    {
        return $this->endTime;
    }

    
    public function getLocation(): location
    {
        return $this->location;
    }

    
    public function getPrice(): float
    {
        return $this->price;
    }

    
    public function getTicketsLeft(): int
    {
        return $this->ticketsLeft;
    }

    public function getDateAsDate(): date {
        $date = new date();
        $date->fromDateTime($this->date);
        return $date;
    }

    public function getStartTimeAsTime() : time {
        $time = new time();
        $time->fromDateTime($this->startTime);
        return $time;
    }

    public function getEndTimeAsTime() : time {
        $time = new time();
        $time->fromDateTime($this->endTime);
        return $time;
    }

    public function getFormattedDateTime(){
        $startDateStr = $this->startTime->format("H:i");
        $endDateStr = $this->endTime->format("H:i");
        $dateStr = $this->date->format("d-m-Y");

        return $startDateStr . " to " . $endDateStr . " at " . $dateStr;
    }

    
    public function setStartTime(DateTime $startTime): void
    {
        $this->startTime = $startTime;
    }

    
    public function setEndTime(DateTime $endTime): void
    {
        $this->endTime = $endTime;
    }

    
    public function setLocation(location $location): void
    {
        $this->location = $location;
    }

    
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    
    public function setTicketsLeft(int $ticketsLeft): void
    {
        $this->ticketsLeft = $ticketsLeft;
    }
}