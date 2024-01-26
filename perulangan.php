 <?php
 //no 1. 
 $a = "wikrama";
 $panjang = strlen($a);
 for ($i = $panjang -2 ; $i < $panjang -1 ; $i++){
    echo $a[$i];
 }
 echo substr("wikrama" -2 ,1); 
 ?>
<?php
//  soal 2.
$i = 1;
while ($i <= 10) {
  echo $i;
  $i++;}
  ?>
<?php
// soal 3.
 for($i = 10; $i >= 1; $i--){
  echo $i;
}
?>
<?php
  // soal 4
  for ($i=1 ; $i<= 6; $i++){
    echo "<h$i>Heading $i</h $i>";
  }
  ?>
  <?php
  // soal 5.
  for ($i = 1 ; $i <=30 ; $i++){
    if ( $i %4 == 0){
        echo $i;
    } 
  }
  ?>
  <?php
  // soal 6.
    $b = 0 ;
  for ( $i = 5; $i <=25 ; $i += 5){
    if (225 % $i == 0){
       $b++;
    }  //  +=  buat langsung kelipatan 
  }
  echo $b;
  ?>
  <?php
  //no 7.
   $student = [
    [
        "nama" => "Andi",
        "rombel" => "PPLG XI - 1",
        "rayon" => "Ciawi 4",
        "jk" => "L"
    ], 
    [
        "nama" => "Sasa",
        "rombel" => "PPLG XI - 6",
        "rayon" => "Sukasari 1",
        "jk" => "P"
    ],
    [
        "nama" => "Lala",
        "rombel" => "PPLG XI - 3",
        "rayon" => "Cisarua 3",
        "jk" => "P"
    ],
    [
        "nama" => "Beni",
        "rombel" => "PPLG XI - 2",
        "rayon" => "Cicurug 2",
        "jk" => "L"
    ],
   ]?>
    <?php
    foreach( $student as $std) : ?>
    <br>  nama: <?= $std["nama"];?>
    <br>   rombel: <?= $std ["rombel"]; ?>
    <br>   rayon: <?= $std ["rayon"]; ?>
    <br>   jk:  <?= $std ["jk"]; ?>
    <br>
       <?php endforeach ; ?>
 <!-- ] array multidimensi krna ada array di dalam array  -->

   



