<?php
include __DIR__ .  '/data/data.php';
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Dischi</title>
</head>

<body>
    <div class="cards">
        <?php
        foreach ($dischi as $disco) {
        ?>
            <div class="card">
                <img src="<?= $disco['poster'] ?>" alt="<?= $disco['title'] ?>">
                <p> <?= $disco['author'] ?> </p>
                <p> <?= $disco['title'] ?> </p>
                <p> <?= $disco['genre'] ?> </p>
            </div>


        <?php
        }
        ?>
</body>

</html>