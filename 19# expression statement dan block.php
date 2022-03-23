<?php

//EXPRESSION

//expression penting banget
//expression itu hampir disemua kode php
//sederhananya yang memiliki niali dan value 
//contoh $a = 5; 5 merupakan nilai atau value dan merupakan expression
//lalu $b = $a, a bisa dibilang expression karena bernilai 5
// expression complex
 function getValue()
 {
     return 100;
 }
 $value = getValue();

 var_dump($value);

// STATEMENT

//kalimat lengkap berisi execution komplit diakhiri titik koma
// $name = "rifky bintang"; (satu baris itu merupakan statement)
//expression itu bagian dari statement

// Block

//kumpulan statement yang terdiri dari nol atau lebih statement
// diawali dan diakhiri kurung kurawal {}

$name = "Rifky Bintang";
function runApp($name)
{
    echo "Start Program" . PHP_EOL;
    echo "Hello $name" . PHP_EOL;
    echo "End Program" . PHP_EOL;
};

var_dump(runApp($name));