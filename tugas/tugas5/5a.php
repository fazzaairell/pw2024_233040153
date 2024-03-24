<?php
$mahasiswa = [
    [
        "nama" => "Bryan Qwertyas",
        "nim" => "233040005",
        "email" => "bryanqwertyas@gmail.com",
        "jurusan" => "Teknik Informatika",
    ],

    [
        "nama" => "Hilman Zaldi",
        "nim" => "233040020",
        "email" => "hilmanzaldi@gmail.com",
        "jurusan" => "Teknik Informatika",
    ],

    [
        "nama" => "Asep Deri Hermawan",
        "nim" => "233040022",
        "email" => "asepderi@gmail.com",
        "jurusan" => "Teknik Informatika",
    ],

    [
        "nama" => "Aqillah Lean Andrea",
        "nim" => "233040017",
        "email" => "aqilahlean@gmail.com",
        "jurusan" => "Teknik Informatika",
    ],

    [
        "nama" => "Biagi Archie Fais",
        "nim" => "233040053",
        "email" => "biagiarchie@gmail.com",
        "jurusan" => "Teknik Informatika",
    ],

    [
        "nama" => "Rafi Safiq Mulyadi",
        "nim" => "233040023",
        "email" => "rafisafiq556@gmail.com",
        "jurusan" => "Teknik Informatika",
    ],

    [
        "nama" => "Kresna Satria Dewantoro",
        "nim" => "233040001",
        "email" => "kresnasatria@gmail.com",
        "jurusan" => "Teknik Informatika",
    ],

    [
        "nama" => "Muhammad Andriansyah",
        "nim" => "233040066",
        "email" => "andriansyah@gmail.com",
        "jurusan" => "Teknik Informatika",
    ],

    [
        "nama" => "Rival Anugrah Azi Febrian",
        "nim" => "233040007",
        "email" => "rivalanugrah@gmail.com",
        "jurusan" => "Teknik Informatika",
    ],

    [
        "nama" => "Ade Rizky Maulana",
        "nim" => "233040008",
        "email" => "aderizky@gmail.com",
        "jurusan" => "Teknik Informatika",
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

    <style>
        img {
            width: 150px;
            height: 150px;
        }
    </style>
</head>

<body>

    <h1>Data Mahasiswa UNPAS</h1>

    <?php foreach ($mahasiswa as $mhs) :  ?>
        <ul>
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>