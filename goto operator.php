<?php

// fitur dimana kita bisa loncat ke kode program sesuai dengan keinginan
// harus buat label di php mengguanakan nama label lalu diakhiri :(colon)

goto a;
echo "Hello S" .PHP_EOL;

a: // class goto 
echo "Hello A".PHP_EOL;

//complex

$counter = 1;
while (true) {
    echo "ini adalah for while ke-$counter" .PHP_EOL;
    $counter++;
    if($counter > 10){
        goto end;
    }
}
end:
echo "END Loop";