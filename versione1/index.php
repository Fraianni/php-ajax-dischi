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

    <?php
    include __DIR__ .  '/data/dischi.php';
    if (isset($_GET['filter'])) {
        $filter = strtolower($_GET['filter']);
        $data = [];
        foreach ($dischi as $disco) {
            if (strlen($filter) === 0 || strtolower($disco['genre']) == $filter) {
                $data[] = $disco;
            }
        }
        $dischi = $data;
    }
    ?>

    <header>
        <form action="./index.php" method="get">
            <input type="text" name="filter">
            <input type="submit" value="cerca">
        </form>
    </header>

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