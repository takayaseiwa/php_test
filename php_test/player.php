<?php

class Player {
    public $name = null;
    public $age = null;
    public $gender = null;
    
    function __construct($name,$age,$gender){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
}