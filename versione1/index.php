<?php
include __DIR__ .  '/data/data.php';
?>

<div class="cards">
    <?php
    foreach ($dischi as $disco) {
    ?>
        <div class="card">
            <?php
            echo "<img src='" . $disco['poster'] . "' alt='img'>";
            echo  $disco['author'];
            echo $disco['genre'];
            echo $disco['title'];
            ?>
        </div>

    <?php
    }
    ?>
</div>




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

</body>

</html>