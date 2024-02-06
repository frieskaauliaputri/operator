<?php
// 1.
 $a = "ikan";
$b = "ikan"; 
 if($a == $b){
    echo "ikan";
 }else{
    echo "gajah";
   }
?>
<?php
//2. 
$a = 8 ;
$b = 9;
if ($b == $a ){
    echo "sama besar";
}else{
    echo max($a,$b);
}
?>
<?php
// 3.
 $a = 83;
if ($a >= 73 ){
    echo "kompeten";
}else{
    echo "tidak kompoten";
}
?>
<?php
// 4.
 $a = -9;
if ( $a <=0){
    echo " bilangan negatif";

}else{
    echo "bilangan positif";
}
?>
<?php
// 5. 
$a = 136 ;
if($a %2 == 0 ){
    echo "bilangan genap";
}else{
    echo "bilangan ganjil";
}
?>
<?php
// 6. 
$a = 176 ;
if($a %6 == 0 ){
    echo " iya";
}else{
    echo "tidak";
}
?>
<?php
// 7. 
$a = 7;
if(is_numeric($a)){
    echo "numer";
}else{
    echo "string";
}
?>
<?php
//8.
 $a = "";
if($a == null){
    echo "tidak ";
}else{
    echo "value" ;
}
?>
<?php
// 9 
$a = 16;
if ($a <= 17){
    echo "blm ktp";
}else{
    echo "ktp";
}
?>
<?php
// 10. 
$a = 100000 ;
$b = 154000;
if($b >= $a){
    $c = $b - ($b * 0.07);
}else{
    $c = $b;
}
echo $c;
?>