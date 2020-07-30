<?php
require "animal.php";

$sheep = new Animal("shaun");

echo $sheep->getName() . "<br>"; // "shaun"
echo $sheep->legs . "<br>" ;// 2
echo $sheep->cold_blooded; // false
//var_dump($sheep instanceof Animal);

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"
//var_dump($sungokong instanceof Animal);

$kodok = new Frog("buduk");
$kodok->jump() . "<br>"; // "hop hop"
echo "<br>" . $kodok->getLegs();
//var_dump($kodok instanceof Animal);