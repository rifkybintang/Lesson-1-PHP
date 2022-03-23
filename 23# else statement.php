<?php

// Else Statement

// blok if dieksekusi saat kondisi hanya true
// stelah itu baru masuk ke else


$nilai = 70;
$absen = 98;

if ($nilai >= 75 && $absen >= 75) {
    echo "Anda Lulus" .PHP_EOL;
    
} else{
    echo "Anda Tidak Lulus" .PHP_EOL;
} 

if ($nilai >= 75 OR $absen >= 75) 
    echo "Anda Lulus" .PHP_EOL;
    
else
    echo "Anda Tidak Lulus" .PHP_EOL;
 