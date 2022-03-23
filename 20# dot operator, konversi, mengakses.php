<?php

// Dot Operator (meggabungkan 2 string atau yang lain)

//adalah titik operator untuk menambah string data lain bebas
//aslinya bisa pake + sih cuman kalau tambah string pake tipe data number biasanya error makanya pakek dot

$name = "rifky bintang";

echo "Name : " . $name .PHP_EOL;
echo "Nilai : " . 100 . "\n";

// konversi ke number dan sebaliknya
// tanda kurung {}
// string tetap string , number pake int, float dipake untuk floating point

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"100.11";
var_dump($valueFloat);

// mengakses karakter
// string di php kaya array jadi bisa di panggil di beberapa posisi
// pakek kurung siku
// sama seperti di array, index pertama dari 0
// jika kita akses melebihi index karakter di string akan eror

$name = "bintang";
echo $name[0] .PHP_EOL;
echo $name[1] .PHP_EOL;
echo $name[2] .PHP_EOL;

