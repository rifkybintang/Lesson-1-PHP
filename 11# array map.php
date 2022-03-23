<?php
//rada pusing nih array map dengerin
//array biasanya kan ada key sama value
//nah di map key yang defaultnya index bisa diganti jadi selain number kaya string atau tipe data lain
//liat ndiri lah contohnya nih

$bintang = array(
    "key1" => "ini value 1",//jan lupa koma (,) bang
    "key2" => "ini value 2",
    "key3" => 3// harus pakek double quote yak kalau rubah key

);

//ini opsional aja kalau males yang atas
$bintang2 = [
    "contoh1" => "ini value-1",
    "contoh2" => "ini value-2",
    "contoh3" => 30

];

var_dump($bintang);
var_dump($bintang2);

//gampangkan makanya bener bener

//kalau lu mau panggil array kaga lagi pakek array[0] kan lu dah ganti key nya
// jadi manggil nya gini liatin
var_dump($bintang["key1"]);//pakek double quote yak jan lupa 
