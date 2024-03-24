<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pertemuan6 array</title>
</head>
<style>
    .div {
        width: 30px;
        height: 30px;
        background-color: #bada55;
        text-align: center;
        line-height: 30px;
        margin: 3px;
        float: left;
        transition: 1s;

    }
    .div:hover {
        transform: rotate(360deg);
        border-radius: 50%;
    }
    .clear {
        clear: both;
    }
</style>
<body>
    <?php
    $angka = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];
    ?>
    <?php foreach ($angka as $a ) : ?>
        <?php foreach ($a as $b) : ?>
            <div class="div"><?= $b; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>
</html>