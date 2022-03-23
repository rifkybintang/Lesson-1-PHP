<?php

$counter = 1;
while (true){
    echo "Hello break" .$counter .PHP_EOL;
    $counter++;

    if($counter>5){
        break;
    }
}


$counter = 1;
for ($counter = 0; $counter <=100;$counter++){
    if($counter % 2 == 0){
        continue;
    }
    echo "Hello break" .$counter .PHP_EOL;

    
}