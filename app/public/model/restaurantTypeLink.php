<?php

require_once("model.php");
require_once("restaurant.php");
require_once("restaurantType.php");

class restaurantTypeLink extends model{
    private int $id;
    private restaurant $restaurant;
    private restaurantType $type;

    protected const sqlTableName = "restaurantTypelink";
    protected const sqlFields = ["id", "restaurantId", "restaurantTypeId"];
    protected const sqlLinks = ["restaurantId" => restaurant::class, "restaurantTypeId" => restaurantType::class];

    public function constructor(int $id, restaurant $restaurant, restaurantType $type){
        $this->id = $id;
        $this->restaurant = $restaurant;
        $this->type = $type;

        return $this;
    }

    public function getSqlFields()
    {
        return [
            "id" => $this->id,
            "restaurantId" => $this->restaurant->getId(),
            "restaurantTypeId" => $this->type->getId()
        ];
    }

    public static function sqlParse(array $sqlRes) : self
    {
        return (new self())->constructor(
            $sqlRes[self::sqlTableName . "id"],
            restaurant::sqlParse($sqlRes),
            restaurantType::sqlParse($sqlRes)
        );
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function getRestaurant() : restaurant // return restaurant
    {
        return $this->restaurant;
    }
    
    public function getTpe() : restaurantType // return type
    {
        return $this->type;
    }
}