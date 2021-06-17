<?php

require __DIR__ . '/errMsgFunc.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sukurti naują sąskaitą</title>
</head>

<body>
    <?php include __DIR__ . '/menu.php' ?>
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
        <button type="submit">Sukurti sąskaitą</button>
    </form>
</body>

</html>