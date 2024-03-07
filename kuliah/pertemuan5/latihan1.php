<?php
// 1. membuat array
$hari = array("senin","selasa","rabu");
$bulan = ["januari","februari","maret"];
$mahasiswa = ["fazza", 3.2, false];



// 2.mencetak isi array
// mencetak 1 nilai pada array, menggunakan index
// dan index selalu dimulai dari  0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mahasiswa[1];
echo"<hr>";
// cetak semua isi array
// var_dumb() atau prnt_r()
// digunakan saat debugging
var_dump($hari);






// 3.memanipulasi isi di dalam array
// menambah isi array
// diakhir : [] atau array_push()
$hari[] = "kamis";
$hari[] = "jumat";
print_r($hari);
echo "<br>";
array_push($bulan, "april", "mei", "juni");
print_r($bulan);
echo "<br>";
// di awal : array_unshift()
array_unshift($mahasiswa, "233040153");
print_r($mahasiswa);
echo "<hr>";
// menghapus isi array
// dibelakang : array_poop()
// didepan : array_shift()
array_pop($hari);
array_shift($bulan);
print_r($hari);
echo "<br>";
print_r($bulan);









?>