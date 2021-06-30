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
    <title>Nuskaičiuoti lėšas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="?dir=homeList">Sąskaitų sąrašas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?dir=homeNewAcc">Sukurti naują sąskaitą</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?dir=homeAddFunds">Pridėti lėšas</a>
            </li>
            <li class="nav-item">
                <a class="bg-light nav-link active" aria-current="page" href="?dir=homeRemFunds">Nuskaičiuoti lėšas</a>
            </li>
        </ul>
        <?php if (isset($_SESSION['loggedIn'])) : ?>
            <form action="http://127.0.0.1/bit-php/namu-darbai/bankas/login.php" method="post">
                <input type="hidden" name="logout">
                <button class="btn-sm btn btn-outline-dark" type="submit">Atsijungti</button>
            </form>
        <?php endif ?>
    </div>
    <div>
        <h1>Nuskaičiuoti lėšas</h1>
        <?php include __DIR__ . '/errorMsg.php' ?>
        <ul>
            <?php foreach ($accounts as $account) : ?>
                <li>
                    <span class="list">Klientas:</span> <?= $account['name'] ?> <?= $account['surname'] ?>
                    <br>
                    <span class="list">Sąskaitos likutis:</span> <?= $account['amount'] ?>
                    <form action="?dir=remFunds&id=<?= $account['id'] ?>" method="post">
                        <input type="text" name="remFunds" placeholder="Kiek nuskaičiuoti">
                        <button type="submit">Nuskaičiuoti lėšas</button>
                    </form>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>