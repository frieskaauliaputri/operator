<?php
//str_replace
$str ="hello";
echo str_replace("e","o",$str);
//untuk mengubah huruf 

// add_date
$date = date_create("2013-05-01");
date_modify($date , "+3 days");
echo "tanggal setelah ditambah 3 hari :" . date_format($date , "Y-m-d");
//date_modify = untuk menambah hari setelah hari tsb 
//date_create = untuk menentukan/membuat tanggal 

//strpos = untuk menemukan posisi kemunculan pertama dari sebuah string di dalam string lainnya 
$str1 = "saya tinggal di jakarta";
$str2 = "di";
$result = strpos($str1 , $str2);

if ($result !== false){
    echo " substring '$str2' ditemukan pada posisi $result";
}else {
    echo "substring '$string' tidak ditemukan dalam string";
}

// rand = untuk menampilkan angka acak 
$angka_acak = rand(1,100);
echo "angka acak antara 1 dan 100:".$angka_acak;

//strtoupper = untuk mengubah huruf kecil menjadi huruf kapital
$data = "hello";
echo strtoupper($data);

// is_array = memeriksa apakah array atau tidak
echo "<h3>no3</h3>";
$data = [1,2,3];

if (is_array($data)){
    echo "data adalah array";
}else {
    echo "data bukan array";
}

// array_map = mapping suatu array 
$kendaraan = array('Mobil', 'Motor','Sepeda');
$upper = array_map(function($value){
    return strtoupper($value);
}, $kendaraan);
echo '<pre'; print_r($upper);

// str_repeat = mengulang kalimat sebanyak 2 kali atau lebih 
echo str_repeat("hello world" , 2). "<br>";

//array_pop = menghapus elemen terakhir 
$asal = array('jeruk','pisang','apel');
$buah = array_pop($asal);
print_r($asal);

// strtolower =untuk mengubah huruf besar ke huruf kecil
$nama = "ZAENI";
echo strtolower($nama);

// strlen = untuk menghitung jumlah huruf dalam string atau karakter
$kata = "hello world";
echo "jumlah kata: " .strlen($kata) . "<br>";

if (strlen($kata) > 8 ){
    echo "kata  '$kata' memiliki lebih dari 8 karakter ";
}else {
    echo "kata  '$kata' memiliki 8 karakter atau kurang ";
}

// sqrt = untuk mencari akar pangkat
echo sqrt(100);

// array_sum = untuk menjumlah suatu nilai dari array 
$nilai = [
    [
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [ 
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nilai' => [89, 85, 84, 86, 88],
    ],
];

foreach ($nilai as $nilai_akhir) {
    $nilai = $nilai_akhir['nilai'];
    
    $totalNilai = array_sum($nilai);

    echo "Jumlah Nilai: $totalNilai\n";
}
// rtrim = untuk menghapus kata di kanan 
$str = "hello world";
echo $str . "<br>";
echo rtrim($str, "world");

// strtr = untuk mengubah variabel yg sudah ditentukan 
$arr = array("Hello" => "Hi" , "World" => "Earth");
echo strtr("Hello World" , $arr);

// in_array = untuk menentukan apakah benar array atau tidak  
$kendaraan = ['Mobil','Motor','Sepeda'];
if (in_array('Mobil' , $kendaraan)){
    echo 'ok';
}else {
    echo 'salah';
}

// abs = mengubah nilai minus menjadi plus 
echo (abs(-6.7));
echo (abs(-6));
//floor = membulatkan nilai ke bawah ke bilangan yang terdekat 
echo (floor(0.2));
echo (floor(7.2));
echo (floor(-6.2));

// array_push = untuk menambahkan nilai elemen di dalam array ke belakang 
//array_unshift = untuk menambahkan elemen di dalam array dari depan
$buah = array("jeruk","pisang");
array_push($buah, "semangka","melon");
print_r($buah);

//  ceil = membulatkan angka ke atas 
echo ceil(0.7);
echo "<br>";
echo ceil(3.7);
echo "<br>";
echo ceil(-5.7);
echo "<br>";
echo ceil(5);
echo "<br>";

// sort = mengurutkan nilai elemen array dari yang terkecil 
$array = array(0,10,8,6,5,3);
sort($array);
print_r($array);

// ucfirst = mengubah huruf pertama dari string menjadi kapital
$str ="wajib ngulik";
echo "sebelum: $str <br>";
echo "sesudah:" . ucfirst($str);

// array_reverse = mengurutkan elemen dari belakang 
$rmbl = ['PPLG XI-5','PPLG XI-4','PPLG XI-3'];
$result = array_reverse($rmbl);
print_r($rmbl);
//arsort = mengurutkan dari yang terbesar 
$angka =['1,5,6,10'];
arsort ($angka);
print_r ($angka);

// compact = membuat variabel jadi array 
$depan = "agus";
$bel = "yadi";
$age = 29;
 
$result = compact("$depan" , "$bel" ,"$age");
print_r($result);
 
// file_exists = mencari file dalam directory 
echo file_exists("hari1.php");

// gettype =  untuk menentukan tipe data apa dan mengambil tipe data dari variabel 
$c = "hello";
echo gettype($c) . "<br>";
// array_unique = menghapus duplikat 
$buah = ["apel","pisang","orange","apel"];
$uniq = array_unique($buah);
print_r($uniq);

//  array_shift = mengambil index ke 0 / value yng pertama
$a = array('pisang','apel','mangga');
$b = array_shift($a);
print_r($b);

?>