<?php

$root = realpath($_SERVER["DOCUMENT_ROOT"]);

require_once ($root . "/Service/base.php");
require_once ($root . "/DAL/location_DAO.php");

class location_Service extends base
{
    public function __construct()
    {
        $this->db = new location_DAO();
    }
}