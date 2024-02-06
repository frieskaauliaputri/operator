<?php
// contoh 
$nilai = 78;
$price = $nilai >= 75 ? "anda lulus" : "anda tidak lulus";
echo $price;
?>
<?php
//contoh 
$a = "gajah";
$b = "gajah";
$hewan = $a == $b ? "hewan sama" : "tidak sama";
echo $hewan;
?>
<?php
//contoh 
$a = 7 ;
$nilai = (is_numeric($a)) ? "numer" : "string";
echo $nilai ;
?>
<?php
//elseif
$a = 73;

$hasil = $a >= 80 ? "kompeten" : ($a >=75 ? "cukup" : "kurang" 
);
echo $hasil;
?>
<?php
//contoh 
$a = 0 ; 
$angka = $a <0 ? "negatif" 
        : ($a > 0 ? " positif" 
        : "cacah");
echo $angka 
?>
<?php
//contoh 
$date= date('2024-01-26');
$day = date('l', strtotime($date));
$angka = $day == 'Monday' ? 'diskon 2%' : ($day == 'Friday' ? 'diskon 5%' : 'tidak dapat');
            echo $angka;
?>
<?php 
//contoh 
$a = 150000;

$hasil = $a >= 100000 ? $a - 10000 : $a ;

echo "total belanja . Rp " . $a;
echo "voucer: Rp" . $hasil;
?> 
<?php
//soal 1.
 $tabung = 850;
$bank = $tabung >= 500 ? $tabung + $tabung * 0.05 : "tidak dapt bunga";
echo $bank;
?>
<?php
// soal 2. 
$a = 19.45;
$jam = $a >= 12 ? $a - 12 . "pm" : $a ."am";
echo $jam ;
?>
<?php
// soal 3.
 $date= date('2024-01-22');
 $day = date('l', strtotime($date));
  $hari = $day == 'Monday' ? "upacara" : "tidak upacara";
  echo $hari;
?>
<?php
//soal 4
 $nilai = 75;
  $hasil = $nilai >= 90 ? "predikat A" : ($nilai >=75 ? "Predikat B" : " predikat C" 
  );
  echo $hasil;
?>
<?php 
// soal 5.
 $sakitIzin = 0;
$alfa = 1;
$predikat = ($sakitIzin == 1) ? 100 - 3 : ($alfa == 1 ?  100 - 5: "hadir 100%");
echo $predikat;
?>
