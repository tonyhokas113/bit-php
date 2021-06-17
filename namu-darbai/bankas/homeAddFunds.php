<?php

require __DIR__ . '/errMsgFunc.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pridėti lėšas</title>
</head>

<body>
    <?php include __DIR__ . '/menu.php' ?>
    <h1>Pridėti lėšas</h1>
    <?php include __DIR__ . '/errorMsg.php' ?>
    <ul>
        <?php foreach ($accounts as $account) : ?>
            <li>
                <?= $account['name'] ?> <?= $account['surname'] ?> Sąskaitos likutis: <?= $account['amount'] ?>
                <form action="?dir=addFunds&id=<?= $account['id'] ?>" method="post">
                    <input type="text" name="addFunds" placeholder="Papildymo suma">
                    <button type="submit">Papildyti sąskaitą</button>
                </form>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>