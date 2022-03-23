<?php
//function adalah kode program yang akan berjalan saat kita panggil
// sebelumnya juga udah pakek function isset(),count() dll
// kata kunci funtion lalu kurung() dan diakhiri dengan block
// bahasa lain function itu method


// function bebas ya flexibel bisa dipake di dalem if statement dsbnya
//dan kode function harus dieksekusi oaleh php jika tidak maka tidak akan bisa digunakan
function Testa(){
    echo "kepanggil gak?".PHP_EOL;
}
Testa();

$buat = true;
if($buat){
    function Test(){
        echo "kepanggil gak?".PHP_EOL;
    }
}

Test();