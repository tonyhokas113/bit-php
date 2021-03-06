<?php
require __DIR__ . '/functions.php';
require __DIR__ . '/svg.php';

if (!isset($_SESSION['loggedIn'])) {
    header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/login.php');
    die;
}
function mySort($a, $b)
{
    if ($a['surname'] > $b['surname']) {
        return 1;
    }
}
usort($_SESSION['acc'], 'mySort');

$i = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sąskaitų sąrašas</title>
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
                <a class="nav-link active" aria-current="page" href="?dir=homeList">Sąskaitų sąrašas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?dir=homeNewAcc">Sukurti naują sąskaitą</a>
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

    <div>
        <?php include __DIR__ . '/errorMsg.php' ?>
        <table class="table table-striped table-bordered align-middle table-sm table-hover">
            <tr class="table-dark">
                <th>#</th>
                <th>Vardas</th>
                <th>Pavardė</th>
                <th>Asmens kodas</th>
                <th>Sąskaitos Nr</th>
                <th>Sąskaitos likutis</th>
                <th>Galimi veiksmai</th>
            </tr>
            <?php foreach ($_SESSION['acc'] as $account) : ?>
                <tr>
                    <td>
                        <?= $i++; ?>
                    </td>
                    <td>
                        <?= $account['name'] ?>
                    </td>
                    <td>
                        <?= $account['surname'] ?>
                    </td>
                    <td>
                        <?= $account['userid'] ?>
                    </td>
                    <td>
                        <?= $account['id'] ?>
                    </td>
                    <td>
                        <?= $account['amount'] ?>
                    </td>
                    <td>
                        <form class="formBtnDel" action="?dir=delete&id=<?= $account['id'] ?>" method="post">
                            <button class="btn-sm btn btn-outline-danger" type="submit">Ištrinti sąskaitą</button>
                        </form>
                        <form class="formBtnDel" action="?dir=homeAddFunds&id=<?= $account['id'] ?>" method="post">
                            <button type="submit" class="btn-sm btn btn-outline-dark">Pridėti lėšas</button>
                        </form>
                        <form class="formBtnDel" action="?dir=homeRemFunds&id=<?= $account['id'] ?>" method="post">
                            <button type="submit" class="btn-sm btn btn-outline-dark">Nuskaičiuoti lėšas</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>