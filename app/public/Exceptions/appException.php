<?php

class appException extends Exception {
    public function getError(){
        return $this->getMessage();  //returns a description of the error or behaviour that caused the exception to be thrown.
    }
}