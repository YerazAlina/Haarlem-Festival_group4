<?php


abstract class dynamicHTML {

    protected array $css;

    protected function getHtmlElemStr(string $name, string $content, 
                                    string $addCSS = "", string $extraTags = "") {
        return '<'. $name . ' ' . $extraTags .  ' class="' . $this->css[$name] . " " . $addCSS .'">' . $content . "</$name>";
    }

    protected function getEmptyHtmlElemStr(string $name, string $addCSS = "", 
                                    string $extraTags = "") {
        return '<'. $name . ' ' . $extraTags . ' class="' . $this->css[$name] . " " . $addCSS .'">';
    }

    public function assignCss(array $rules){
        foreach ($rules as $k => $v){
            if (array_key_exists($k, $this->css)){
                $this->css[$k] = $v;
            }
        }
    }
}