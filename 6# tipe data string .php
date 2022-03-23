<?php

//string petik satu (')
echo 'Nama :';
echo 'Singel quote string';

//string double quote (")
echo "Nama :";
echo "double quote string";
//double quote ada fitur enter pakek (\n)
//tab juga bisa pakek(\t)
echo "\n Nama :";
echo "\n";
echo "double\t quote\t string\n";

//multiline string ada 2 
    //1.heredoc membuat string panjang dan otomatis enter mewakili double quote
        echo <<<Contoh
        ini adalah contoh string yang sangat panjang,
        dan juga gak perlu ngetik enter secara manual,
        "bisa quote" juga 
        Contoh;
    
    //2.nowdoc gak tau bedanya intinya ada pada parsing sama mewaliki singel quote
        echo <<<'Contoh'
        ini adalah contoh string yang sangat panjang,
        dan juga gak perlu ngetik enter secara manual,
        "bisa quote" juga 
        Contoh;
