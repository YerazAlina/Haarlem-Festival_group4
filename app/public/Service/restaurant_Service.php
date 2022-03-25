<?php

$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once($root . "/Service/restaurantTypesLink_Service.php");

require_once($root . "/Service/activityBase_Service.php");
require_once($root . "/Service/foodactivity_Service.php");
require_once($root . "/DAL/restaurant_DAO.php");

class restaurant_Service extends base
{
    public function __construct()
    {
        $this->database = new restaurant_DAO();
    }

    public function getAll(): array
    {
        return $this->database->getArray();
    }

    public function getById($id)
    {
        return $this->database->get([
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
        $restaurants = $this->database->getArray();
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
        return $this->database->getArray($filter);
    }

    public function getBySearchTerm($search)
    {
        $restaurants = $this->database->getArray(["restaurant.name" => new containDB($search)]);
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
        return $this->database->getArray(["restaurant.stars" => $stars]);
    }
}