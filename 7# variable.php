<?php
//di variabel php itu bisa dirubah rubah dan harus diawali dengan $ dan tidak boleh dengan spasi
$name = "bintang";
$age = "21";

echo "Name :";
echo $name;
echo "\n";
echo "age :";
echo $age;

//ada juga variable variables rada pusing serius dah cuman itu kaya di bawah lu tau sendiri dah
$name = "bintang";
$$name = "keren";

echo "\nName :";
echo $name;
echo "\n";
echo "\$bintang =";
echo $bintang;