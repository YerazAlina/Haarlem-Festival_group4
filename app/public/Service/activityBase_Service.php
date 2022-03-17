<?php

require_once ("base.php");
require_once("../Exceptions/appException.php");
require_once("../DAL/location_DAO.php");

abstract class activityBase_Service extends base {

    public abstract function getAll() : array;
}