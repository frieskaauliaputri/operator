<?php
// 11 .
$a = 20;
if ( $a < 0){
    echo " bilangan negatif";
}elseif( $a == 0) {
    echo "bilangan cacah";
}else{
    echo "bilangan positif";
}
// 12.
 $a = 9 ;
if ($a >= 0){
    echo "bilangan positif";
    if($a >10 ){
        echo "lebih besar";
    }else{
        echo "lebih kecil";
    }
}
else{
    echo "bilangan negatif";
}
// 13.
 $a =90;
$b =100;
if ($a > 85 && $b > 98){
    echo "lulus";
}else{
    echo "tidak lulus";
}
//soal 1. 
$a = 78;
if ($a >= 90){
    echo "predikat A";
}elseif($a >= 75){
    echo "predikat B";
}else {
    echo "predikat C";
}
// soal 2.
 $a =17;
if ($a <= 12 && $a >=6 ){
    echo "9 jam ";
}elseif ($a >= 12 && $a<= 18){
    echo " 10 jam";
}else{
    echo "8 jam";
}
// soal 3.
$a = 9;
if ( $a > 0 ){
    echo " bilangan positif";
}elseif ($a < 0 ){
    echo "bil ganjil";
}else{
     echo "bil cacah";
 }
// soal 4.
 $a = 15-8 ; 
$b = 30000;
if ($a > 0 ){
    $c = $a * $b;
}
echo $c;
  
    //5. 
    $a = 2004;
    $b = $a - 3;
     if($a %4==0 && $b %4==0){
        echo "keduanya lahir di tahun kabisat";
       
    }elseif(($a %4 == 0)){
        echo "andi lahir di tahun kabisat";
        
    }elseif($b%4 == 0){
        echo "eko lahir di tahun kabisat";
    }
    else{
        echo "tidak keduanya ";
    }
    // 6.
     $a = 44;
    $b =1.48 ** 2;
    $c = $a / $b;
    if ($c >= 18.5){
        echo "normal";
    }elseif ($c >= 22.9 && $c <= 24.9){
       echo "berat lebih";
    }elseif($c >= 25){
        echo " obesitas";
    }else{
        echo "kurang";
    }
    // === - hrus lebih detail/sama 
    // != tidak sama dengan 
//  7. 
$nasigoreng = 15000;
$ayambakar = 20000;
$nasikebuli = 25000;
$anekajus = 8000;
$esteh = 3000;
$esjeruk = 5000;
$date = date('2024-01-22');
$belanja = ($nasikebuli * 2) + $ayambakar + ($nasigoreng * 2);
$day = date('l', strtotime($date));


if($day == 'Monday'){
    echo "mendapat diskon". $belanja - ($belanja* 0.02) ;
}elseif($day == 'Friday'){
    echo"mendapat diskon" . $belanja - ($belanja* 0.05);
}else{
    echo "tidak mendapatkan diskon" . $belanja;
}
// 8.
 $a = 13;
$b = 9;
$c = $a * $b;
if ($c >=150){
    echo "tipe 70";
}elseif ($c >= 120 && $c <=150){
    echo "tipe 60";
}elseif($c >=96 && $c <= 120){
    echo "tipe 54";
}elseif($c >=90 && $c <= 96){
    echo " tipe 45";
}else{
    echo "tipe 36";
}
// n0 9
$a = 160000;
$c = 10000;
if ($a >= 100000 && $a <= 150000){
    echo " mendapatkan voucer" . ($a - $c);
}elseif($a >= 150000){
    echo " mendapat voucer , 1 dus permen kaki dan harga setelah voucer". ($a - $c);
}else{
   echo " tidak mendapatkan voucer";
}

?>