<?php
require_once ("tableElement.php");
require_once ("dynamicHTML.php");

class table extends dynamicHTML {
    
    private string $title;
    private bool $isCollapsable;
    private array $header;
    private array $tableElements;

    public function __construct(){
        $this->title = "";
        $this->isCollapsable = false;
        $this->header = [];
        $this->tableElements = [];

        $this->css = [
            "h3" => "",
            "details" => "",
            "summary" => "",
            "table" => "",
            "th" => "",
            "tr" => "",
            "td" => "",
            "button" => ""
        ];
    }

    public function assignCss(array $rules)
    {
        parent::assignCss($rules);

        foreach ($this->tableElements as $t){
            $t->assignCss($rules);
        }
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setIsCollapsable(bool $isCollapsable): void
    {
        $this->isCollapsable = $isCollapsable;
    }

    public function addHeader(string ...$header): void
    {
        if (gettype($header) == "array")
            foreach ($header as $h)
                $this->header[] = $h;
        else
            $this->header[] = $header;
    }

    public function tableElements(tableElement ...$row){
        if (gettype($row) == "array")
            foreach ($row as $r) {
                $r->assignCss($this->css);
                $this->tableElements[] = $r;
            }
        else
            $this->tableElements[] = $row;
    }

    public function display(){
        echo $this->getHtmlElemStr("h3", $this->title);
        if ($this->isCollapsable){
            echo $this->getEmptyHtmlElemStr("details", "", 'open=""');
            echo $this->getHtmlElemStr("summary", "", "", 'data-open="Close" data-close="Expand"');
        }

        echo $this->getEmptyHtmlElemStr("table");
        echo $this->getEmptyHtmlElemStr("tr");

        foreach ($this->header as $h){
            echo $this->getHtmlElemStr("th", $h);
        }

        echo "</tr>";

        foreach ($this->tableElements as $t){
            $t->display();
        }

        echo "</table>";

        if ($this->isCollapsable)
            echo "</details>";
    }
}