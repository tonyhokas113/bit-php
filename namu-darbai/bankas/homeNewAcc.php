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
    <title>Sukurti naują sąskaitą</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="?dir=homeList">Sąskaitų sąrašas</a>
            </li>
            <li class="nav-item">
                <a class="bg-light nav-link active" aria-current="page" href="?dir=homeNewAcc">Sukurti naują sąskaitą</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?dir=homeAddFunds">Pridėti lėšas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?dir=homeRemFunds">Nuskaičiuoti lėšas</a>
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
        <h1>Sukurti naują sąskaitą</h1>
        <?php include __DIR__ . '/errorMsg.php' ?>
        <br>
        <span>Norint sukurti naują sąskaitą reikia užpildyti šią formą:</span>
        <form action="?dir=addAcc" method="post">
            <label for="name">Įveskite kliento vardą:</label>
            <input id="name" type="text" placeholder="Vardas" name="vardas">
            <br>
            <label for="surname">Įveskite kliento pavardę:</label>
            <input id="surname" type="text" placeholder="Pavardė" name="pavarde">
            <br>
            <label for="id">Įveskite kliento asmens kodą:</label>
            <input id="id" type="text" placeholder="Asmens kodas" name="ak">
            <br>
            <label for="iban">Kliento būsimas saskaitos numeris:</label>
            <input id="iban" type="text" name="iban" value="<?= generateIban() ?>" readonly>
            <br>
            <button type="submit">Sukurti sąskaitą</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>