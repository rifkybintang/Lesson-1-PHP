<?php

//data kosong di php itu null 
//paling repot ngecek ngecek kan
//biasanya pakek if statement sih pakek function isset($variabel)
//tapi karena php ada null cocalescing jadi tinggal pake tanda ??


$data = [
    "action" => "create"
];

if (isset($data["action"])){
    $action = $data["action"];
}else {
    $action = "nothing";
}

echo $action .PHP_EOL;

//simpel bet nih

$data = [];
$action = $data['action'] ?? 'nothing';

echo $action;