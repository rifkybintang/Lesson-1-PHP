<?php

$gender = "PRIA";

$hi = null;
if($gender == "PRIA"){
    $hi = "hi bro";
} else{
    $hi = "hi nona";
}

echo $hi .PHP_EOL;

//tuh pelajari sendiri dah paham pasti
//penting bet nih

//simpel lagi nih 
$gender = "PRIA";
$hi = $gender == "PRIA" ? "Hi bro" : "Hi nona";

echo $hi .PHP_EOL;