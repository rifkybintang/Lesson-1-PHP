<?php
//- minus //+ plus // diawal
//tambah + //kurang - //sisa bagi % //perkalian *
//pembagian / // pangkat **

$result = 10 + 10;
var_dump($result);

$result = 100 % 3; //modulo sisa hasil bagi
var_dump($result); //kalau pakek 2 variabel yang sama yang bakal di panggil kalau di bawah adalah variabel terbawah

//membuat hasil jadi negatif
$resultnegative = -$result;
var_dump($resultnegative);
//membuat hasil jadi positif
$resultpositif = +$result;
var_dump($resultpositif);

//bisa juga kaya gini pake aritmatika
$total = $result*$result;
var_dump($total);