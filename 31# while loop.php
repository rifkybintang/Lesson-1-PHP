<?php

$counter = 1;
while ($counter <= 10){
    echo "Hello While Loop $counter" .PHP_EOL;
    $counter++;
}

//syntax alternatif
$counter = 1;
while ($counter <= 10):
    echo "Hello While Loop $counter" .PHP_EOL;
    $counter++;
endwhile;