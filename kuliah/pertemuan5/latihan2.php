<?php
$binatang = ["😼","🐶","🐰","🐮","🐵"];
$makanan = ["ramen","bakso","ayam","tahu","tempe"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan array</title>
</head>
<body>
    <h3>daftar binatang</h3>
    <ol>
        <?php foreach($binatang as $b) : ?>
        <li><?= $b; ?></li>
        <?php endforeach ?>
    </ol>
    <h3>daftar makanan</h3>
    <ul>
    <?php for($i = 0; $i < count($makanan); $i++) : ?>
        <li><?= $makanan[$i]; ?></li>
        <?php endfor ?>
    </ul>
</body>
</html>