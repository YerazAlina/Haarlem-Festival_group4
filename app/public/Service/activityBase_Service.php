<?php

$root = realpath($_SERVER["DOCUMENT_ROOT"]);

require_once ($root . "/Service/base.php");
require_once($root . "/Exceptions/appException.php");
require_once($root . "/DAL/location_DAO.php");

abstract class activityBase_Service extends base {

    public function getFromActivityIds(array $ids){
        if (empty($ids))
            return [];

        $ret = $this->database->get([
            "activity.id" => $ids,
            "order" => ["activity.date", "activity.startTime", "activity.endTime"]
        ]);

        if (is_null($ret))
            return [];

        if (gettype($ret) != "array")
            return [$ret];

        return $ret;
    }

    public function getTables(array $css){
        $content = $this->getAll();

        if (is_null($content))
            return [];

        if (gettype($content) != "array")
            $content = [$content];

        $dates = [];

        foreach ($content as $c){
            $curDate = $c->getActivity()->getDate()->format("l (Y-m-d)");
            $dates[$curDate][] = $c;
        }

        return $this->getTablesChild($css, $dates);
    }

    public abstract function getAll() : array;

    public abstract function getTablesChild(array $css, array $dates) : array;
}