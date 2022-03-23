<?php

$names = ["bintang","rifky","febriansyah"];

for($i=0; $i<count($names);$i++){
    echo "Helloo $names[$i]".PHP_EOL;
}

//ada yang lebih mudah pake foreach

$names = ["bintang","rifky","febriansyah"];

foreach($names as $name){
    echo "Hello $name".PHP_EOL;
}

// key custom array atau map

$person = [
    "first_name" => "rifky",
    "middle_name" => "bintang",
    "last_name" => "febriansyah",
];

foreach($person as $key=>$value){
    echo "Hello $key : $value".PHP_EOL;
}
