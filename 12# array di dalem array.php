<?php

//array didalem array nih wk

$bintang = array(
    "key1" => "value1",
    "key2" => "value2",
    "key3" => "value3",//syaratnya make di dalem harus kasih koma bre jan lupa
    "didalem" => [ //mau pakek yang [ini] atau yang array(ini) juga bisa
        "dalem bet1" => "udah dalem ini",
        "dalem bet2" => "serius dah"
    ]
);

//manggil nya gini liatin dah
var_dump($bintang["key1"]);
var_dump($bintang["didalem"]["dalem bet1"]);
//jadi panggil dulu key pembukanya baru array yang di dalemnya