<?php

// create getAll method, getting all the info from historytour table

//create method to et the schedule of the tours, english, dutch chinese

// create method to get the tour by id

<?php

require_once("../model/historytour.php");
require_once("dynamicQuery.php");

class historytourDAO extends dynamicQuery {
    
    public function __construct(){
        parent::__construct(historytour::class);
    }

    public function get(array $filter = []){
        return parent::get($filter);
    }

    public function getArray(array $filter = []) : array {
        return parent::getArray($filter);
    }

    private string $tableName = "historytour";

    public function getAll(): ?PDOStatement {
        try {
            $query = "SELECT
                          'id', 'date', 'language','guide', `time`, 'seats', 'price'
                      FROM " . $this->tableName;

            $stmt = Base::getInstance()->conn->prepare($query);

            Base::getInstance()->conn->beginTransaction();

            $stmt->execute();

            Base::getInstance()->conn->commit();

            return $stmt;
        } catch (Exception $e) {
            return $this->handleNullError($e, true);
        }
    }

    public function getById(int $id): ?PDOStatement {
        try {
            $query = "SELECT
                          'id', 'date', 'language','guide', `time`, 'seats', 'price'
                      FROM " . $this->tableName . "
                      WHERE id = :id";

            $stmt = Base::getInstance()->conn->prepare($query);

            Base::getInstance()->conn->beginTransaction();

            $stmt->bindParam(":id", $id);
            $stmt->execute();

            Base::getInstance()->conn->commit();

            return $stmt;
        } catch (Exception $e) {
            return $this->handleNullError($e, true);
        }
    }
}