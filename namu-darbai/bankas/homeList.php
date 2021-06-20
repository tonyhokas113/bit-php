<?php
require __DIR__ . '/functions.php';
if (!isset($_SESSION['loggedIn'])) {
    header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/index.php');
    die;
}
function mySort($a, $b)
{
    if ($a['surname'] > $b['surname']) {
        return 1;
    }
}
usort($accounts, 'mySort');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sąskaitų sąrašas</title>
</head>

<body>
    <?php include __DIR__ . '/menu.php' ?>
    <h1>Sąskaitų sąrašas</h1>
    <?php include __DIR__ . '/errorMsg.php' ?>
    <ul>
        <?php foreach ($accounts as $account) : ?>
            <li>
                <?= $account['name'] ?> <?= $account['surname'] ?> Asmens kodas: <?= $account['userid'] ?>, Sąskaitos Nr. : <?= $account['id'] ?>, Sąskaitos likutis: <?= $account['amount'] ?>
                <form action="?dir=delete&id=<?= $account['id'] ?>" method="post">
                    <button type="submit">Ištrinti sąskaitą</button>
                </form>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>