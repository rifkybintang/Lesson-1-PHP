<?php

// Union a + b
// manggabungkan array a dan b 

// Equality a == b
// true jika a dan b memiliki key value yang sama

// Identity a === b
// true jika a dan b memiliki key value sama dan posisi sama

//mirip nih pakek yang atas aja yang umum dah
// Inequality a != b
// true jika a dan b tidak sama
// Inequality a <> b
// true jika a dan b tidak sama 

// Nonidentity a !== b (kebalikan identitiy)
// true jika a dan b tidak identik

$first = [
    "first_name" => "rifky"
];

$last = [
    "last_name" => "bintang"
];

var_dump($first + $last);

$full = $first + $last;
var_dump($full);


$a = [
    "first_lorem" => "lorem",
    "last_ipsum" => "ipsum"
];

$b = [
    "first_lorem" => "lorem",
    "last_ipsum" => "ipsum"
];

var_dump($a == $b);

$full = $first == $last;
var_dump($full);