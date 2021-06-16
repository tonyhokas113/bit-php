<?php

if (isset($_GET['rem']) &&  $_GET['rem'] == 'minus') {
    $error = '<span style="color: red;">Nepakankamas sąskaitos likutis!</span>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuskaičiuoti lėšas</title>
</head>

<body>
    <?php include __DIR__ . '/menu.php' ?>
    <h1>Nuskaičiuoti lėšas</h1>
    <?= $error ?? '' ?>
    <ul>
        <?php foreach ($accounts as $account) : ?>
            <li>
                <?= $account['name'] ?> <?= $account['surname'] ?> Sąskaitos likutis: <?= $account['amount'] ?>
                <form action="?dir=remFunds&id=<?= $account['id'] ?>" method="post">
                    <input type="text" name="remFunds" placeholder="Kiek nuskaičiuoti">
                    <button type="submit">Nuskaičiuoti lėšas</button>
                </form>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>