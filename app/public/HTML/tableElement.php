<?php

require_once ("dynamicHTML")

class tableElement extends dynamicHTML {

    private array $contents
    
    public function __construct() {
        $this->css = [
            "tr" => "",
            "td" => "",
            "button" => "",
        ];
        $this->contents = [];
    }


    public function addButton(string $onclick, string $inner, string $extraTags = ""){
        $this->contents[] = $this->getHtmlElemStr("button", $inner, "", "onclick=\"$onclick\" " . $extraTags);
    }


    public function addString(string ...$s) {  //https://www.php.net/manual/en/functions.arguments.php#functions.variable-arg-list
        if(gettype($s) == "array") {
            foreach($s as $r){
                $this->contents[] = $r;
            }
        }
        else{
            $this->contents[] = $s;
        }
    }

    public function display() {
        echo $this->getEmptyHtmlElemStr("tr");

        foreach($this->contents as $cont){
            echo $this->getHtmlElemStr("td", $cont);
        }
        echo "</tr>";
    }
}