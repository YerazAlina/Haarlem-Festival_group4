<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

require_once("containDB.php");
//require __DIR__ . '/../Model/time.php';
require_once ($root . "/Model/time.php");
//require __DIR__ . '/../Model/date.php';
require_once ($root . "/Model/date.php");
//require __DIR__ . '/../Exceptions/appException.php';

abstract class base_DAO {
    protected mysqli $conn;
    protected mysqli_stmt $stmt;
    private string $types;
    private array $localVars;

    public function __construct(mysqli $conn){
        $this->conn = $conn;
    }

    protected function prepareQuery($query){
        $stmt = $this->conn->prepare($query);

        if(!$stmt){
            throw new Exception($this->conn->error);
        }

        $this->stmt = $stmt;
    }


    //Executes prepared query. return true or false
    protected function executeQuery(){
        return $this->stmt->execute();
    }

    protected function closeQuery() {
        return $this->stmt->close();
    }


    /*Execute prepared query.
    Parses all rows into an array of objects */
    protected function execQueryResult($parse) {
        $this->execQuery();
        $array = array();
        $queryResult = $this->stmt->get_result();  //Returns associative/enumerated array or object, automatically filled with data from the returned row
        while ($row = $queryResult->fetch_array()){
            if (gettype($row) == "array"){
                $array[] = $parse($row);
            }
        }

        $this->closeQuery();

        if (count($array) == 1)
            return $array[0];

        if ($array == [])
            return null;

        return $array;
    }

    protected function execAndCloseQuery(){
        $res = $this->execQuery();
        if (!$res)
            throw new Exception($this->conn->error);

        $this->closeQuery();
        return $res;
    }

    protected function bindParams(array $vars){

        if (empty($vars)) { return; }

        $this->types = "";
        $this->localVars = array();

        $this->getParametersType($vars);

        $this->stmt->bind_param($this->types, ...$this->localVars);
    }


    //binds types in array to  letters
    private function getParametersType(array $vars){

        foreach($vars as $var){
            switch(gettype($var)){
                case "integer":
                    $this->types .= "i";
                    $this->localVars[] = $var;
                    break;
                case "double":
                    $this->types .= "d";
                    $this->localVars[] = $var;
                    break;
                case "string":
                    $this->types .= "s";
                    $this->localVars[] = $var;
                    break;
                case "boolean":
                    $this->types .= "i";
                    $this->localVars[] = intval($var);
                    break;
                case "object":
                    switch (get_class($var)){
                        case "DateTime":
                            $this->types .= "s";
                            $this->localVars[] = $var->format("Y-m-d");
                            break;
                        case "dbContains":
                            foreach ($var->getContainsArray() as $entry){
                                $this->types .= "s";
                                $this->localVars[] = $entry;
                            }
                            break;
                        case "date":
                        case "time":
                            $this->types .= "s";
                            $this->localVars[] = $var->toString();
                            break;
                        default:
                            throw new Exception("[DB] Unknown class " . gettype($var));
                    }
                    break;
                case "array":
                    $this->getParametersType($var);
                    break;
                default:
                    throw new Exception("[DB] Unknown type " . gettype($var));
            }
        }
    }
}