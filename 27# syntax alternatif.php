<?php

//endswitch

$nilai = "A";
switch($nilai):
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

    endswitch;