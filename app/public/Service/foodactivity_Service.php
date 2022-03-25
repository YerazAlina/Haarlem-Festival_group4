<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

require_once ($root . "/Service/activityBase_Service.php");
require_once ($root . "/DAL/foodactivity_DAO.php");
require_once ($root . "/DAL/containDB.php");
require_once ($root . "/HTML/table.php");
require_once ($root . "/Service/restaurantTypesLink_Service.php");


class foodactivity_Service extends activityBase_Service {

    private restaurantTypesLink_Service $types;

    public function __construct(){
        $this-> database = new foodactivity_DAO();
        $this->types = new restaurantTypesLink_Service();
    }

    public function getTablesChild(array $css, array $dates): array
    {
        $tables = [];

        foreach ($dates as $k => $v) {
            $table = new table();
            $table->setTitle($k);
            $table->setIsCollapsable(true);
            $table->addHeader("Time", "Name", "Location", "Type");
            $table->assignCss($css);
            foreach ($v as $c) {

                $startDateStr = $c->getActivity()->getStartTime()->format("H:i");
                $endDateStr = $c->getActivity()->getEndTime()->format("H:i");

                $tableElement = new tableElement();
                $table->addtableElements($tableElement);
                $tableElement->addString(
                    "$startDateStr to $endDateStr",
                    $c->getRestaurant()->getName(),
                    $c->getActivity()->getLocation()->getAddress(),
                    join('/', $this->types->getRestaurantTypes($c->getRestaurant()->getId()))
                );

                $tableElement->addButton('openBox(' . $c->getActivity()->getId() . ')', "Edit", "aid=\"" . $c->getActivity()->getId() . "\"");
            }

            $tables[] = $table;
        }

        return $tables;
    }

    public function getAll(): array
    {
        return $this->database->getArray([
            "order" => ["activity.date", "activity.startTime", "activity.endTime"]
        ]);
    }

    public function getByRestaurantId(int $restaurantId)
    {
        return $this->database->getArray([
            "restaurant.id" => $restaurantId
        ]);
    }

    public function getBySessionDate(string $date, array $times, int $restaurantId)
    {
        return $this->database->get([
            "activity.date" => $date,
            "activity.startTime" => "$times[0]",
            "activity.endTime" => "$times[1]",
            "restaurant.id" => $restaurantId
        ]);
    }
}