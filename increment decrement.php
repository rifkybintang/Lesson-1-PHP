<?php
//increment menaikan satu angka
//decrement menurunkan satu angka

// a++ (post increment) ditambah setelah di run atau kompail
//kembalikan a lalu naikkan satu angka

// ++a (pre increment) di tambah dulu baru di run jadi terlihat hasilnya
// naikkan a satu angka , lalu kembalikan a

// a-- (post decrement) dikurangi setelah di run atau kompail
// kemablikan a lalu turunkan satu angka

// ==a (pre decrement) di kurang dulu baru di run jadi terlihat hasilnya
// turunkan a satu angka, lalu kembalikan a

$a = 10;
$b = ++$a; //langsung ditambah karena ++ dulu

var_dump($b);
var_dump($a);


$a = 10;
$b = $a++; //ditambah setelah kompail atau run karena a dulu

var_dump($b);
var_dump($a);