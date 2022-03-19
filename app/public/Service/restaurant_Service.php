<?php

$root = realpath($_SERVER["DOCUMENT_ROOT"]);

require_once("activityBase_Service.php");
require_once("foodactivity_Service.php");
require_once($root . "/DAL/restaurant_DAO.php");
require_once("restaurantTypeLink_Service.php");

class restaurant_Service extends base
{
    public function __construct()
    {
        $this->db = new restaurant_DAO();
    }

    public function getAll(): array
    {
        return $this->db->getArray();
    }


    public function updateRestaurant(int $id, ?int $locationId, ?string $name, ?string $description, ?int $stars, ?int $seats, ?int $phoneNumber, ?float $price, ?string $parking, ?string $website, ?string $menu, ?string $contact): bool
    {
        $update = [
            "id" => $id,
        ];

        if (!is_null($locationId))
            $update["locationid"] = $locationId;

        if (!is_null($name))
            $update["name"] = $name;

        if (!is_null($description))
            $update["description"] = $description;

        if (!is_null($stars))
            $update["stars"] = $stars;

        if (!is_null($seats))
            $update["seats"] = $seats;

        if (!is_null($phoneNumber))
            $update["phoneNumber"] = $phoneNumber;

        if (!is_null($price))
            $update["price"] = $price;

        if (!is_null($parking))
            $update["parking"] = $parking;

        if (!is_null($website))
            $update["website"] = $website;

        if (!is_null($menu))
            $update["menu"] = $menu;

        if (!is_null($contact))
            $update["contact"] = $contact;

        return $this->db->update($update);
    }

    public function insertRestaurant(int $locationId, string $name, string $description, int $stars, int $seats, int $phoneNumber, float $price, string $parking, string $website, string $menu, string $contact)
    {
        $insert = [
            "locationId" => $locationId,
            "name" => $name,
            "description" => $description,
            "stars" => $stars,
            "seats" => $seats,
            "phoneNumber" => $phoneNumber,
            "price" => $price,
            "parking" => $parking,
            "website" => $website,
            "menu" => $menu,
            "contact" => $contact
        ];

        return $this->db->insert($insert);
    }

    public function getById($id)
    {
        return $this->db->get([
            "restaurant.id" => $id
        ]);
    }

    public function getTimesByRestaurantId($restaurantId)
    {
        $foodActivity_Service = new foodactivity_Service();
        $activities = $foodActivity_Service->getByRestaurantId($restaurantId);
        return $this->getTimes($activities);
    }

    public function getDatesByRestaurantId($restaurantId)
    {

        $foodActivity_Service = new foodactivity_Service();
        $activities = $foodActivity_Service->getByRestaurantId($restaurantId);
        return $this->getDates($activities);
    }

    function getTimes($foodactivities)
    {
        if (!is_array($foodactivities)) {
            return null;
        }
        $times = array();

        foreach ($foodactivities as $foodactivity) {
            $startTime = $foodactivity->getActivity()->getStartTime();
            $endTime = $foodactivity->getActivity()->getEndTime();
            $startTimeStr = date_format($startTime, 'H:i');
            $endTimeStr = date_format($endTime, 'H:i');

            $times["$startTimeStr"] = $endTimeStr;
        }
        return $times;
    }

    function getDates($foodactivities)
    {
        if (!is_array($foodactivities)) {
            return null;
        }
        $dates = array();

        foreach ($foodactivities as $foodactivity) {
            $date = $foodactivity->getActivity()->getDate();
            $date = date_format($date, "Y-m-d");
            $dates["$date"] = $date;
        }
        return $dates;
    }

    public function getAllRestaurantsAsStr()
    {
        $restaurants = $this->db->getArray();
        $restaurantStr = [];
        foreach ($restaurants as $b) {
            $restaurantStr[(string)$b->getId()] = $b->getName();
        }
        return $restaurantStr;
    }

    public function getBySearch($search, $cuisine, $stars3, $stars4)
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
        return $this->db->getArray($filter);
    }

    public function getBySearchTerm($search)
    {
        $restaurants = $this->db->getArray(["restaurant.name" => new containDB($search)]);
        return $restaurants;
    }

    public function getByStars($stars3, $stars4)
    {
        if (!$stars3 && !$stars4) {
            return null;
        }

        $stars = array();
        if ($stars3) {
            $stars[] = "3";
        }

        if ($stars4) {
            $stars[] = "4";
        }
        return $this->db->getArray(["restaurant.stars" => $stars]);
    }
}