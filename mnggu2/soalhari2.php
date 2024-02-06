<?php

 function lenght($kalimat){
    $str = strlen($kalimat);
    $str2 = substr_count($kalimat, ' ');

    $jum = $str - $str2 ;
    echo $jum ."\n";
    $jumlah_kata = str_word_count($kalimat);
    echo  $jumlah_kata;
 }
 lenght ('Halo Nama Saya')
?>