<?php
require __DIR__ . '/functions.php';
require __DIR__ . '/svg.php';

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
    <title>Nuskaičiuoti lėšas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./stilius.css">
</head>

<body>
    <div class="fillBg">
        <img class="logo" src="./img/cover.png" alt="logo">
    </div>
    <div class="navDivSize">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="?dir=homeList">Sąskaitų sąrašas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?dir=homeNewAcc">Sukurti naują sąskaitą</a>
            </li>
            <li class="nav-item">
                <a class="bg-light nav-link active">Nuskaičiuoti lėšas</a>
            </li>
        </ul>
        <?php if (isset($_SESSION['loggedIn'])) : ?>
            <form action="http://127.0.0.1/bit-php/namu-darbai/bankas/login.php" method="post">
                <input type="hidden" name="logout">
                <button class="btn-sm btn btn-outline-dark logout" type="submit">Atsijungti</button>
            </form>
        <?php endif ?>
        <?php if (isset($_SESSION['user'])) : ?>
            <div class="loggedInArea">
                <img class="userImg" src="./img/user.png" alt="user">
                <span class="loggedInAs"><?= $_SESSION['user'] ?></span>
            </div>
        <?php endif ?>
    </div>

    <?php include __DIR__ . '/errorMsg.php' ?>
    <div class="addRemDiv">
        <?php foreach ($accounts as $account) : ?>
            <?php $id = $_GET['id'] ?? 0; ?>
            <?php if ($id == $account['id']) : ?>
                <span class="list">Klientas:</span>
                <span class="accInfo"><?= $account['name'] ?> <?= $account['surname'] ?></span>
                <span class="list">Sąskaitos likutis:</span class="accInfo">
                <span class="accInfo"><?= $account['amount'] ?> eur.</span>
                <form action="?dir=remFunds&id=<?= $account['id'] ?>" method="post">
                    <input class="form-control width" type="text" name="remFunds" placeholder="Kiek nuskaičiuoti">
                    <button class="createAccBtn btn-sm btn btn-outline-dark" type="submit">Nuskaičiuoti lėšas</button>
                </form>
            <?php endif ?>
        <?php endforeach ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>