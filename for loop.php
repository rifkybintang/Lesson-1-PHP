<?php

//perulangan
//kalau kondisi true di ulang terus

// for(init statement, kondisi, post statement){
    //blok perulangan
//}

//for(;;){ //tanpa henti karena default jika tidak diisi bernilai true
    //echo "Hello for loop".PHP_EOL;
//};

//perulangan dengan kondisi

$counter = 1;
for(; $counter <= 10;){
    echo "Hello For Loop :".$counter.PHP_EOL;
    $counter++;
}

//init statement

for($counter = 1; $counter <= 10;){
    echo "Hello For Loop :".$counter.PHP_EOL;
    $counter++;
}

//post statement

for($counter = 1; $counter <= 10;$counter++){
    echo "Hello For Loop :".$counter.PHP_EOL;
}

//alternatif syntax
for($counter = 1; $counter <= 10;$counter++):
    echo "Hello For Loop :".$counter.PHP_EOL;
endfor;
