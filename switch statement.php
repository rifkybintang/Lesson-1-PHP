<?php

//normal

$nilai = "A";
if($nilai == "A"){
    echo "Anda Lulus sangat baik".PHP_EOL;
}else if($nilai == "B" || $nilai == "C"){
    echo "Anda Lulus".PHP_EOL;
}else if($nilai == "D"){
    echo "Anda tidak Lulus" .PHP_EOL;
}else{
    echo "Mungkin anda salah jurusan".PHP_EOL;
}

//jika menggunakan switch

switch($nilai){
    case "A":
        echo "Anda Lulus sangat baik".PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus" .PHP_EOL;
        break;
    case "D":
        echo "Mungkin kamu salah jurusan" .PHP_EOL;
        break;
    default:
    echo "Memang parah kaga cocok dah kaga usah di jurusan ini" .PHP_EOL;

}