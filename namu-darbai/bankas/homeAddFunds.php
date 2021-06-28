<?php
require __DIR__ . '/functions.php';
if (!isset($_SESSION['loggedIn'])) {
    header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/login.php');
    die;
}
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
    <div class="align">
        <h1>Pridėti lėšas</h1>
        <?php include __DIR__ . '/errorMsg.php' ?>
        <ul>
            <?php foreach ($accounts as $account) : ?>
                <li>
                    <span class="list">Klientas:</span> <?= $account['name'] ?> <?= $account['surname'] ?>
                    <br>
                    <span class="list">Sąskaitos likutis:</span> <?= $account['amount'] ?>
                    <form action="?dir=addFunds&id=<?= $account['id'] ?>" method="post">
                        <input type="text" name="addFunds" placeholder="Papildymo suma">
                        <button type="submit">Papildyti sąskaitą</button>
                    </form>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</body>

</html>