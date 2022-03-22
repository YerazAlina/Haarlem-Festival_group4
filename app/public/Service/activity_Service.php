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
        $this->database = new activity_DAO();
        $this->food = new foodactivity_Service();
    }

    public function getTypedActivityByIds(array $ids){

        return $this->food->getFromActivityIds($ids);
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

    public function getAll(): array
    {
        return $this->database->get([
            "order" => ["activity.date", "activity.startTime", "activity.endTime"]
        ]);
    }

    public function getAllById($ids)
    {
        $activities = $this->database->get([
            "order" => ["activity.date", "activity.startTime", "activity.endTime"],
            "id" => $ids,
            "type" => new containDB(["All-Access", "Dayticket"])
        ]);

        if (is_null($activities))
            return [];

        if (gettype($activities) != "array")
            return [$activities];

        return $activities;
    }

    public function getById($id)
    {
        return $this->database->get([
            "order" => ["activity.date", "activity.startTime", "activity.endTime"],
            "id" => $id
        ]);
    }

    public function getByType($type){
        return$this->database->get([
            "order" => ["activity.date", "activity.startTime", "activity.endTime"],
            "type" => $type
        ]);
    }
}