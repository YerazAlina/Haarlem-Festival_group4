<?php

$root = realpath($_SERVER["DOCUMENT_ROOT"]);

require_once($root . "/Model/restaurantTypeLink.php");
require_once($root . "/Model/restaurant.php");
require_once($root . "/Service/base.php");
require_once($root . "/DAL/containDB.php");
require_once($root . "/DAL/restaurantTypeLink_DAO.php");
require_once($root . "/DAL/restaurantType_DAO.php");

class restaurantTypesLink_Service extends base
{
    private array $types; 


    public function __construct()
    {
        $this->database = new restaurantTypeLink_DAO();
    }

    public function getTypeLink()
    {
        $this->types = $this->database->get();
    }

    private function getTypesFromId(int $id)
    {
        if (!isset($this->types))
            $this->getTypeLink();

        $restaurants = [];

        foreach ($this->types as $t) {
            if ($t->getRestaurant()->getId() == $id)
                $restaurants[] = $t->getType()->getName();
        }

        return $restaurants;
    }

    public function getRestaurantTypes(int $restaurantId)
    {
        return $this->getTypesFromId($restaurantId);
    }

    public function getRestaurantTypesAsIds(int $restaurantId)
    {
        if (!isset($this->types))
            $this->getTypeLink();

        $restaurants = [];

        foreach ($this->types as $t) {
            if ($t->getRestaurant()->getId() == $restaurantId)
                $restaurants[] = $t->getType()->getId();
        }

        return $restaurants;
    }

    public function getAllTypes()
    {
        $resType_DAO = new restaurantType_DAO();
        return $resType_DAO->getArray([
            "order" => "name"
        ]);
    }

    public function getAllTypesAsStr()
    {
        $res = $this->getAllTypes();
        $strs = [];
        foreach ($res as $r) {
            $strs[(string)$r->getId()] = $r->getName();
        }
        return $strs;
    }


    public function getBySearch($typeID, $search, $stars3, $stars4)
    {
        $filter = array();

        $filter = array_merge($filter, array("restaurant.name" => new containDB($search)));

        $stars = array();
        if ($stars3) {
            $stars[] = "3";
        }

        if ($stars4) {
            $stars[] = "4";
        }
        if (count($stars) > 0) {
            $filter = array_merge($filter, array("restaurant.stars" => $stars));
        }

        if ($typeID > 0) {
            $filter = array_merge($filter, array("restaurantType.id" => $typeID));
        }

        $restaurantTypeLinks = $this->database->get($filter);

        return $this->getRestaurants($restaurantTypeLinks);
    }


    public function getByType($typeID)
    {
        if ($typeID > 0) {
            $restaurantTypeLinks = $this->database->getArray(["restaurantType.id" => $typeID]);
        } else {
            $restaurantTypeLinks = $this->database->getArray();
        }

        return $this->getRestaurants($restaurantTypeLinks);
    }

    function getRestaurants($restaurantTypeLinks)
    {
        if ($restaurantTypeLinks == null) {
            return null;
        }

        $restaurants = array();
        if (is_array($restaurantTypeLinks)) {
            foreach ($restaurantTypeLinks as $restaurantTypeLink) {
                $restaurant = $restaurantTypeLink->getRestaurant();

                if ($this->checkDuple($restaurants, $restaurant->getId())) {
                    $restaurants[] = $restaurant;
                }
            }
        } else {
            $restaurant = $restaurantTypeLinks->getRestaurant();
            $restaurants[] = $restaurant;
        }
        return $restaurants;
    }

}