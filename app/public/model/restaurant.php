<?php
require_once("model.php");
require_once("location.php");



class restaurant extends model {

    private int $id;
    private location $location;
    private string $name;
    private string $description;
    private int $seats;
    private int $phoneNumber;
    private float $price;
    private string $website;
    private string $menu;
    private string $contact;
    
    protected const sqlTableName = "restaurant";
    protected const sqlFields = ["id", "locationId", "name", "description", "seats", "phonenumber", "price", "website", "menu", "contact"];
    protected const sqlLinks = ["locationId" => location::class];

    public function constructor(int $id, location $location, string $name, string $description, int $seats, int $phoneNumber, float $price, string $website, string $menu, string $contact){
        
        $this->id = $id;
        $this->location = $location;
        $this->name = $name;
        $this->description = $description;
        $this->seats = $seats;
        $this->phoneNumber = $phoneNumber;
        $this->price = $price;
        $this->website = $website;
        $this->menu = $menu;
        $this->contact = $contact;
        return $this;
    }

    public function getSqlFields() {
        return [
            "id" => $this->id,
            "locationId" => $this->location->getId(),
            "name" => $this->name,
            "description" => $this->description,
            "seats" => $this->seats,
            "phonenumber" => $this->phoneNumber,
            "price" => $this->price,
            "website" => $this->website,
            "menu" => $this->menu,
            "contact" => $this->contact
        ];
    }

    public static function sqlParse(array $sqlRes): self
    {
        return (new self())->constructor(
            $sqlRes[self::sqlTableName . "id"],
            location::sqlParse($sqlRes),
            $sqlRes[self::sqlTableName . "name"],
            $sqlRes[self::sqlTableName . "description"],
            $sqlRes[self::sqlTableName . "seats"],
            $sqlRes[self::sqlTableName . "phonenumber"],
            $sqlRes[self::sqlTableName . "price"],
            $sqlRes[self::sqlTableName . "website"],
            $sqlRes[self::sqlTableName . "menu"],
            $sqlRes[self::sqlTableName . "contact"]
        );
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getSeats()
    {
        return $this->seats;
    }

    public function setSeats($seats)
    {
        $this->seats = $seats;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getWebsite()
    {
        return $this->website;
    }

    public function setWebsite($website)
    {
        $this->website = $website;
    }

    public function getMenu(): string  //return a string
    {
        return $this->menu;
    }

    public function setMenu($menu)
    {
        $this->menu = $menu;
    }

    public function getContact(): string
    {
        return $this->contact;
    }

    public function setContact($contact)
    {
        $this->contact = $contact;
    }
}