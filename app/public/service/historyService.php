<?php

require_once ("historytour.php");
require_once ("historyDAO.php");


  //getbyid method
  //getall method
  //getschedule method


class historyService extends base {
    private historyDAO $dao;

    public function __construct(){
        $this->dao = new historyDAO();
    }

    public function getById(int $id): ?historytour {
        try {
            $stmt = $this->dao->getById($id);
            $num = $stmt->rowCount();
            if ($num > 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                return $this->$row;
            }

            return null;
        } catch (Exception $e) {
            $error = new ErrorLog();
            $error->setMessage($e->getMessage());
            $error->setStackTrace($e->getTraceAsString());

            ErrorService::getInstance()->create($error);

            return null;
        }
    }

    // Get all the history tours from the database
    public function getAll(): ?array {
        try {
            $stmt = $this->dao->getAll();
            $num = $stmt->rowCount();

            if ($num > 0) {
                $tours = array();

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    array_push($tours, $row);
                }

                return $tours;
            }

            return null;
        } catch (Exception $e) {
            $error = new ErrorLog();
            $error->setMessage($e->getMessage());
            $error->setStackTrace($e->getTraceAsString());

            ErrorService::getInstance()->create($error);

            return null;
        }
    }
}