<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagrindinis</title>
    <link rel="stylesheet" href="./stilius2.css">
</head>

<div>
    <a href="?dir=homeList">Sąskaitų sąrašas</a>
    <a href="?dir=homeNewAcc">Sukurti naują sąskaitą</a>
    <a href="?dir=homeAddFunds">Pridėti lėšas</a>
    <a href="?dir=homeRemFunds">Nuskaičiuoti lėšas</a>
    <?php if (isset($_SESSION['loggedIn'])) : ?>
        <form action="http://127.0.0.1/bit-php/namu-darbai/bankas/login.php" method="post">
            <input type="hidden" name="logout">
            <button class="atsijungti" type="submit">Atsijungti</button>
        </form>
    <?php endif ?>
</div>