<?php
$name = "bintang";
$name = "NULL"; //mengkosongkan nilai setalah bernilai

$age = "NULL"; //mengkosongkan data dari awal 

//bisa pake null huruf kecil bebas bagus pakek kecil soalnya banyaknya code pemrogaman pake null kecil


//isnull ngecek data kosong apa engga

echo "is name null :";
echo is_null($name);//bisa gini
var_dump(is_null($name));//biar enak sama jelas booleannya pakek var dump
echo "\n";


//menghabpus variabel pakek function unset 
$contoh = "bintang";
unset($contoh);
//echo $contoh;//bakal error karena sebelumnya udah pakek unset buat hilangin variabel contoh okey


//isset untuk mengecek variabel itu ada ? lalu apakah ada valuenya tidak null
//mending pakek ini dari pada unset karena unset gak bisa cek variabel yang gak ada malah eror

var_dump(isset($contoh));
$contoh1 = "bintang";
var_dump(isset($contoh1));


