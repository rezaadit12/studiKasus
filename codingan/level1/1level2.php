<?php

$nilai1 = 7;
$nilai2 = 4;
$nilai3 = 5;

if($nilai1 > $nilai2){
    if($nilai1 > $nilai3){
        echo $nilai1 . " angka terbesar";
    }else{
        echo $nilai3 . " angka terbesar";
    }
}else{
    if($nilai2 > $nilai3){
        echo $nilai2 . "angka terbesar";
    }else{
        echo $nilai3 . "angka terbesar";
    }
}


?>