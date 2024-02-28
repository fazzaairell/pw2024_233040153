<?php
// luas lingkaran
// jari-jari 10cm
function jumlah_luas_lingkaran($r) {
 $rumusL = 3.14 * $r * $r;
 return $rumusL;
}
echo "jumlah luas lingkaran adalah =" . jumlah_luas_lingkaran(10);
echo "<br>";
// keliling
//jari-jari 20cm
function jumlah_keliling_lingkaran($r) {
    $rumusK = 3.14 * 2 * $r;
    return $rumusK;

}
echo "jumlah keliling lingkaran =" . jumlah_keliling_lingkaran(20);



?>