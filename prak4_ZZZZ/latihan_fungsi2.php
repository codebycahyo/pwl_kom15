<?php
function cetak_ganjil ($awal, $akhir){
    for ($i=$awal; $i<=$akhir; $i++){
        if ($i % 2 != 0){
            echo "$i ";
        }
    }
}

$a = 10;
$b = 50;
echo "bilangan ganjil dari $a sampai $b : <br>";
cetak_ganjil($a, $b);

?>