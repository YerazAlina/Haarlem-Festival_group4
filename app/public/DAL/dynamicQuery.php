<?php

require_once("database.php");
require_once("containDB.php");
require_once("base_DAO.php");
require_once("../Exceptions/appException.php");


class dynamicQuery extends base_DAO {
    
    private $class;
    private $query;
    private $args;
    protected bool $insertPrimary;
    private array $joinedClasses;

    public function __construct($class){

        parent::__construct(database::getInstance()->getConnection());

        $this->insertPrimary = !$class::sqlPrimaryIncrement();
        $this->class = $class;
    }


    // gets entries parsed into classes
    public function get(array $filter = []){

        $this->query = "";
        $this->args = [];
        $this->select($this->class::sqlFields(), $this->class::sqlLinks());
        $this->from($this->class::sqlTableName());
        $this->join($this->class::sqlLinks());
        $this->where($filter);

        $this->prepareQuery($this->query);
        $this->bindParams($this->args);
        return $this->execQueryResult($this->class::sqlParseFunc());
    }


    //conver get's output to an array
    public function getArray(array $filter = []) : array {

        $val = self::get($filter);
        if (is_null($val))
            return [];

        if (gettype($val) != "array")
            return [$val];

        return $val;
    }


    // inserts fields using columnsNames and their values and return the primary key of the new entries
    public function insert(array $fields) {

        $columns = $this->class::sqlFields();
        $newColumns = [];
        $values = [];

        if(!$this->insertPrimary){
            if(($col = array_search($this->class::sqlPrimaryKey(), $columns)) !== false) {
                unset($columns[$col]);
            }
        }

        foreach($columns as $k){
            if(array_key_exists($k, $fields)){
                $newColumns[] = $k;
            }
        }

        if(empty($newColumns)){
            throw new aapException("No column names were given");
        }

        $columns = $newColumns;

        $query = "INSERT INTO " . $this->class:sqlTableName() . " (";

        foreach($columns as $col){
            $values[] = $fields[$col];
            $query .= $col . ",";
        }

        $query[strlen($query) - 1] = ")";

        $query .= " VALUES (";

        for($i = 0; $i < count($values); $i++){
            $query .= "?,";
        }

        $query[strlen($query) - 1] = ")";

        $this->prepareQuery($query);
        $this->bindParams($values);
        $ret = $this->executeQuery();
        $id = $this->stmt->insert_id;
        $this->closeQuery();
        if ($ret){
            return $id;
        }
        return false;
    }

    /**
     * protected const sqlTableName = "";
    protected const sqlPrimaryKey = "id";
    protected const sqlFields = "";
    protected const sqlLinks = [];
    protected const sqlPrimaryIncrement = true;
     */



     // updates values in the table
     public function update(array $fields, array $filter = []){

         $columns = $this->class::sqlFields();

         if(empty($filter)){
             $filter = [$this->class::sqlPrimaryKey() => $fields[$this->class::sqlPrimaryKey()]];
             unset($fields[$this->class::sqlPrimaryKey()]);
         }
         
         $this->query = "";
         $this->args = [];
         $this->updateFrom($fields, $filter, $columns);
        $this->where($filter);
        $this->prepareQuery($this->query);
        $this->bindParams($this->args);

        return $this->execAndCloseQuery();
     }


    //deletes from tables
    public function delete(array $filter){

        if(empty($filter)){
            return false;
        }

        $this->query = "";
        $this->args = [];
        $this->deleteFrom($this->class::sqlTableName());
        $this->where($filter);
        $this->prepareQuery($this->query);
        $this->bindParams($this->args);

        return $this->execAndCloseQuery();
    }

    
    protected function select(array $fields, array $links){

        $query = "SELECT ";

        $query .= $this->selectForm($fields, $this->class::sqlTableName());

        foreach ($links as $k => $v){
            $query .= $this->selectFromClass($v);
        }

        $query[strlen($query) - 1] = " ";
        $this->query .= $query;
    }


    protected function from(string $tableName){

        $query = "FROM " . $tableName . " ";
        $this->query .= $query;
    }


    // selectForm foreach sqlLink
    protected function selectFromClass($class) {

        $query = $this->selectForm($class::sqlFields(), $class::sqlTableName());

        foreach ($class::sqlLinks() as $k => $v){
            $query .= $this->selectFromClass($v);
        }

        return $query;
    }


    private function selectForm(array $fields, string $tableName) {

        $query = "";
        foreach($fields as $field) {
            $query .= $tableName . "." . $field . " AS " . $tableName . $field . ",";
        }
        return $query;
    }


    protected function where(array $filter){

        if (array_key_exists("order", $filter)){
            $order = $filter["order"];
            unset($filter["order"]);
            if (gettype($order) != "array")
                $order = [$order];
        }

        if (array_key_exists("limit", $filter)){
            $limit = $filter["limit"];
            unset($filter["limit"]);
            if (gettype($limit) != "integer")
                throw new appException("This is off-limits");
        }

        if (!empty($filter)){
            $query = " WHERE ";

            foreach ($filter as $k => $v){
                if (gettype($v) == "array"){
                    $query .= $this->genTableVar($k) . " IN ( ";
                    $query .= join(", ", array_fill(0, count($v), "?"));
                    $query .= ") AND ";
                }
                else if (gettype($v) == "object" && get_class($v) == "containDB"){
                    $query .= $v->genSql($this->genTableVar($k)) . " AND ";
                }
                else {
                    $query .= $this->genTableVar($k) . " = ? AND ";
                }
                $this->args[] = $v;
            }

            $query = substr($query, 0, -4);

            $this->query .= $query;
        }

        if (isset($order))
            $this->orderBy($order);

        if (isset($limit))
            $this->limit($limit);
    }

    
    protected function join(array $links){

        if (empty($links))
            return;

        $this->joinedClasses = [];
        $query = "";

        foreach ($links as $k => $v){
            $query .= $this->joinClass($this->class, $v, $k);
        }

        $this->query .= $query;
    }


    // join (1stClass) ON (2ndClass).columnName = (1stClass).Primary_Key
    protected function joinClass($srcClass, $dstClass, $varName){

        $query = "";
        if (!in_array($dstClass::sqlTableName(), $this->joinedClasses)){
            $query = "LEFT JOIN " . $dstClass::sqlTableName() . " ON " . $srcClass::sqlTableName() . "." . $varName . " = " . $dstClass::sqlTableName() . "." . $dstClass::sqlPrimaryKey() . " ";
            $this->joinedClasses[] = $dstClass::sqlTableName();
        }
        foreach ($dstClass::sqlLinks() as $k => $v){
            $query .= $this->joinClass($dstClass, $v, $k);
        }
        return $query;
    }
    
    
    protected function orderBy(array $order){

        $query = " ORDER BY ";
        foreach ($order as $v){
            $query .= $this->genTableVar($v) . ", ";
        }
        $query = substr($query, 0, -2);
        $this->query .= $query . " ";
    }

    
    protected function limit(int $limit){

        $this->query .= "LIMIT " . $limit . " ";
    }

    protected function updateFrom(array $fields, array $filter, array $keys){

        $newKeys = [];
        foreach ($fields as $field => $fieldval){
            if (in_array($field, $keys) && !in_array($field, $filter)){
                $newKeys[] = $field;
                $this->args[] = $fieldval;
            }
        }

        $query = "UPDATE " . $this->class::sqlTableName() . " SET ";

        foreach ($newKeys as $key){
            $query .= $key . " = ?,";
        }

        $query[strlen($query) - 1] = " ";
        $this->query .= $query;
    }

    protected function deleteFrom(string $tableName) {

        $query = "DELETE FROM " . $tableName . " ";
        $this->query .= $query;
    }


    // generates the string for a field of a class
    private function genTableVar($var, $includeTable = null){

        if (is_null($includeTable)){
            $includeTable = (strpos($var, ".") === false);
        }

        if ($includeTable){
            return $this->class::sqlTableName() . "." . $var;
        }
        else {
            return $var;
        }
    } 
}