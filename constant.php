<?php
//constan berguna untuk membuat agar variable di php bisa immutable (tidak bisa dirubah)
//pake function define()
//terus pakek uppercase

define("AUTHOR","muhammad rifky bintang febriansyah");
define("APP_VERSION",100);

echo "AUTHOR :";
echo AUTHOR; //nama definenya 
echo "\n";
echo "APP_VERSION :";
echo APP_VERSION; // namanya dan 100  itu value string gpp

//jangan menggunakan define nama yang sama mirip dengan variable secara penggunaan cuman ini tidak bisa dirubah atau tetap