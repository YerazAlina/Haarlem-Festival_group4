<?php

$root = realpath($_SERVER["DOCUMENT_ROOT"]);

require_once ("base.php");
require_once ($root . "/DAL/location_DAO.php");

class location_Service extends base
{
    public function __construct()
    {
        $this->db = new location_DAO();
    }

    public function updateLocation(int $id, ?string $name, ?string $address, ?string $postalCode, ?string $city){
        $update = [
            "id" => $id
        ];

        if (!is_null($name))
            $update["name"] = $name;

        if (!is_null($address))
            $update["address"] = $address;

        if (!is_null($postalCode))
            $update["postalCode"] = $postalCode;

        if (!is_null($city))
            $update["city"] = $city;

        return $this->db->update($update);
    }

    public function insertLocation(string $address, string $postalCode, string $city, string $name){
        $insert = [
            "name" => $name
            "address" => $address,
            "postalCode" => $postalCode,
            "city" => $city
        ];

        return $this->db->insert($insert);
    }
}