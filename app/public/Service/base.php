<?php

$root = realpath($_SERVER["DOCUMENT_ROOT"]);

require_once ($root . "/DAL/dynamicQuery.php");
//require __DIR__ . '/../DAL/dynamicQuery.php';

abstract class base {

    protected dynamicQuery $database;
}