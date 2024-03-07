<?php
$component = ["motherboard","processor","Hard Disk","PC Cooler","VGA Card","SSD"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4b</title>
</head>
<body>
    <h2>Macam-macam perangkat keras komputer</h2>
    <ol>
        <?php foreach ($component as $components) { ?>
            <li><?php echo $components ?></li>
        <?php } ?>
    </ol>
    <hr>
    <h2>Macam-macam perangkat komputer baru</h2>
    <ol>
        <?php array_push ($component, "Card Reader","Modem");?>
        <?php sort ($component) ?>
        <?php foreach ($component as $components) : ?>
        <li><?php echo $components ?></li>
        <?php endforeach; ?>
    </ol>
</body>
</html>