<?php

$root = realpath($_SERVER["DOCUMENT_ROOT"]);

require_once ($root . "/Service/base.php");
require_once ($root . "/DAL/orders_DAO.php");

class orders_Service extends base
{
    public function __construct()
    {
        $this->db = new orders_DAO();
    }

    public function getByUser(int $userId){
        return $this->db->get(["userId" => $userId]);
    }
}