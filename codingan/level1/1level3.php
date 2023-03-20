<?php
$angka1 = 2;
$angka2 = 3;
$angka3 = 4;
$angka4 = 10;

$i = " angka terbesar";

if($angka1 > $angka2){
    if($angka1 > $angka3){
        if($angka1 > $angka4){
            echo $angka1 . $i;
        }else{
            echo $angka4 . $i;
        }
    }else{
        if($angka3 > $angka4){
            echo $angka3 . $i;
        }else{
            echo $angka4 . $i;
        }
    }
}else{
    if($angka2 > $angka3){
        if($angka3 > $angka4){
            echo $angka3 . $i;
        }
    }else{
        echo $angka4 . $i;
    }
}



?>