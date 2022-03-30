<?php


class containDB {

    private $val;

    public function __construct($contains){
        if(gettype($contains) == "string"){
            $this->val = [$contains];
        }
        else {
            $this->val = $contains;
        }
    }

    public function genSql(string $tableVar){
        $query = "(";
        foreach ($this->val as $s){
            $query .= "position(? in " . $tableVar . ") > 0 OR ";
        }
        $query = substr($query, 0, -4);
        $query .= ")";

        return $query;
    }

    public function getContainsArray(){
        return $this->val;
    }
}