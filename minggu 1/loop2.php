<?php
// no 8.
 $bilangan = array(75, 77, 87, 70, 90, 81, 69, 87, 66);

$kompeten = array();
$belum_kompeten = array();

foreach ($bilangan as $nilai) {
    if ($nilai >= 75) {
        $kompeten[] = $nilai;
    } else {
        $belum_kompeten[] = $nilai;
    }
}
 
echo "Kelompok Pertama (Kompeten): ";
foreach ($kompeten as $nilai_kompeten) {
    echo $nilai_kompeten . ' ';
}

echo "<br>";

echo "Kelompok Kedua (Belum Kompeten): ";
foreach ($belum_kompeten as $nilai_belum_kompeten) {
    echo $nilai_belum_kompeten . ' ';
}
// no 9.
 for ($e = 1; $e <= 3; $e++) {
    for ($j = 1; $j <= 10; $j++) {
        $hasil = $e * $j;
        echo "$e x $j = $hasil" ."<br>";
    }
  }


//  no 10.
$barang = [
    [
        'nama' => 'pasta gigi',
        'harga' => '18000',
        'jumlah' => '1',
    ],
    [
        'nama' => 'sabun mandi',
        'harga' => '5000',
        'jumlah' => '3',
    ],
    [
        'nama' => 'aloe vera sheet mask',
        'harga' => '15000',
        'jumlah' => '5',
    ],
];

$totalBayar = 0;

foreach ($barang as $bayar) {
    $harga = $bayar['harga'];
    $jumlah = $bayar['jumlah'];
    $totalBayar += $harga * $jumlah;
}

echo "Total yang perlu dibayar oleh Beni adalah : Rp. " . number_format($totalBayar, 0, ',', '.');

//no 11.
 $bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 81, 45, 90, 98];

$kelompokSama = [];
$kelompokBeda = [];

foreach ($bil1 as $bilangan) {
    if (in_array($bilangan, $bil2)) {
        $kelompokSama[] = $bilangan;
    } else {
        $kelompokBeda[] = $bilangan;
    }
}

foreach ($bil2 as $bilangan) {
    if (!in_array($bilangan, $bil1)) {
        $kelompokBeda[] = $bilangan;
    }
}
// array intersect : mencari value yg sama di antara dua array
// arrray diff : mencari value yg berbeda di antara dua array 
// in array : mencari suatu value yang ada di array  output nya true or false (harus ada)
// !in array : mencari suatu value yang ada di array  output nya true or false (yg tidak ada)
//implode : mencari array 
echo "Kelompok yang terdapat di kedua variabel: " . implode(', ', $kelompokSama) . "<br>";
echo "Kelompok yang hanya terdapat di satu variabel saja: " . implode(', ', $kelompokBeda);


// no 12.
 $barang = [
    [
        'nama' => 'Ban', 'diskon' => '10'
    ],
    [
        'nama' => 'oli mesin'
    ],
    [
        'nama' => 'kampas rem'
    ],
    [
        'nama' => 'busi', 'diskon' => '9'
    ],
    [
        'nama' => 'akumulator', 'diskon' => '7'
        ]
];
// isset:
foreach ($barang as $item) {
    if (isset($item['diskon'])) {
        echo "Nama Barang : " . $item['nama'] . ", Diskon: " . $item['diskon'] . "<br>";
    }
}
//  no 13.
 $data = [
    ['nama' => 'andi', 'tahun' => '2008'],
    ['nama' => 'beni', 'tahun' => '2001'],
    ['nama' => 'dani', 'tahun' => '2004'],
    ['nama' => 'eko', 'tahun' => '2006']
];

foreach ($data as $person) {
    $tahun = intval($person['tahun']); // Mengonversi tahun menjadi integer

    if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
        echo "Nama: " . $person['nama'] . ", Tahun Lahir: " . $person['tahun'] . " (Tahun Kabisat)<br>";
    }
}

//no 14. 
 $students = [
    [
        'nama' => 'Andi',
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [
        'nama' => 'Danii',
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89, 85, 84, 86, 88],
    ],
];

foreach ($students as $student) {
    $nama = $student['nama'];
    $nilai = $student['nilai'];
    
    $totalNilai = array_sum($nilai);
// array sum : untuk menjumlahkan 
    echo "Nama: $nama, Jumlah Nilai: $totalNilai<br>";
}

?>
 

