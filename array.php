<?php
//array bisa data kosong atau banyak data
//kumpulan data jadi satu bisa array dan bisa pake semua jenis tipe data BEBAS
//gak ada batas kapasitas
//index array mulai dari 0 kek mbak spbu

$values = array(1,2,3,4);//berarti membuat 4 array tipe number dari 0-3 
var_dump($values);

$names = ["bintang","bla","bla2"];//3 array dengan tipe string 
var_dump($names);

// keknya harus pakek vardump kalau nge cek dalem arraynya

//panggil data 
$panggil = ["bla1","bla2"];
var_dump($panggil[0]);// buat manggil array sesuai indexnya

//ngubah data
$names[1] = "budi";//mengubah names bla = budi
var_dump($names[1]);

//mengghapus data pake unset
unset($names[2]);//menghapus nama ke 3 index 2 bla2
var_dump($names);
//jadi kalau di hapus itu bukan ngegeser data tapi indexnya juga ke hapus langsung loncat dan tidak ada index nomer 2


//menambah array
$names[] = "bre";
var_dump($names);//auto nambah tapi paling bawah

//menghitung array pake count
var_dump(count($names));