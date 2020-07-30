<?php

require "Class/frog.php";

class Animal {
    public $name ;
    public $legs = 2 ;
    public $cold_blooded = false;
    
    public function __construct($name) {
        $this->name = $name;
    }
    function getName() {
        echo "Name : " . $this->name;
    }
    function getLegs() {
        echo $this->legs;
    }
    function getColdBlooded() {
        echo $this->cold_blooded;
    }
}