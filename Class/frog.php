<?php

require "ape.php";

class Frog extends Animal {
    public $loncat = "hop hop";
    public $legs = 4 ;
    
    public function jump() {
        echo "Frog = " . $this->loncat;
    }
}
