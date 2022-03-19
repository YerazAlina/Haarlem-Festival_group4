<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require_once ("foodactivity_Service.php");
require_once ($root . "/DAL/containDB.php");
require_once ($root . "/DAL/activity_DAO.php");
require_once ("restaurant_Service.php");
require_once ("location_Service.php");
require_once ("base.php");

class activity_Service extends base
{
    private foodactivityService $food;

    public function __construct()
    {
        $this->db = new activity_DAO();
        $this->food = new foodactivity_Service();
    }

    public function getTypedActivityByIds(array $ids){

        return $this->food->getFromActivityIds($ids);
    }

    public function updateActivity(int $id, ?date $date, ?time $startTime, ?time $endTime, ?int $locationId, ?float $price, ?int $ticketsLeft)
    {
        $update = [
            "id" => $id
        ];

        if (!is_null($date))
            $update["date"] = $date;

        if (!is_null($startTime))
            $update["startTime"] = $startTime;

        if (!is_null($endTime))
            $update["endTime"] = $endTime;

        if (!is_null($locationId))
            $update["locationId"] = $locationId;

        if (!is_null($price))
            $update["price"] = $price;

        if (!is_null($ticketsLeft))
            $update["ticketsLeft"] = $ticketsLeft;

        return $this->db->update($update);
    }

    public function updateActivityWithClass(activity $a){
        return $this->db->update($a->sqlGetFields());
    }

    public function insertActivity(string $type, date $date, time $startTime, time $endTime, int $locationId, float $price, int $ticketsLeft)
    {
        $insert = [
            "type" => $type,
            "date" => $date,
            "startTime" => $startTime,
            "endTime" => $endTime,
            "locationId" => $locationId
            "price" => $price,
            "ticketsLeft" => $ticketsLeft
        ];

        return $this->db->insert($insert);
    }

    private function getNameFromTypedActivity($a, $inclClassName = false){
        $name = "";

        switch (get_class($a)){
            case "foodactivity":
                $name = $a->getName();
                break;
            default:
                throw new appException("Invalid type provided");
        }

        if ($inclClassName)
            return get_class($a) . " " . $name;
        else
            return $name;
    }

    public function getNames(array $activityIds){
        $typedActivities = $this->getTypedActivityByIds($activityIds);
        $names = [];

        foreach ($typedActivities as $a){
            $names[$a->getActivity()->getId()] = $this->getNameFromTypedActivity($a, true);
        }

        return $names;
    }

    public function deleteActivity(array $activityIds)
    {
        return $this->db->delete([
            "id" => $activityIds
        ]);
    }

    public function getAll(): array
    {
        return $this->db->get([
            "order" => ["activity.date", "activity.startTime", "activity.endTime"]
        ]);
    }

    public function getAllById($ids)
    {
        $activities = $this->db->get([
            "order" => ["activity.date", "activity.startTime", "activity.endTime"],
            "id" => $ids,
            "type" => new dbContains(["All-Access", "Dayticket"])
        ]);

        if (is_null($activities))
            return [];

        if (gettype($activities) != "array")
            return [$activities];

        return $activities;
    }

    public function getById($id)
    {
        return $this->db->get([
            "order" => ["activity.date", "activity.startTime", "activity.endTime"],
            "id" => $id
        ]);
    }

    public function getByType($type){
        return$this->db->get([
            "order" => ["activity.date", "activity.startTime", "activity.endTime"],
            "type" => $type
        ]);
    }
}