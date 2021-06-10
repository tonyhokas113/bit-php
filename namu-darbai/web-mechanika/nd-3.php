<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trecias</title>
    <style>
        label {
            display: block;
            margin-bottom: 2px;
        }

        input {
            display: block;
            margin-bottom: 8px;
        }

        button {
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <h2 style="color: red; text-align: center;">Uždavinys nr.: 3</h2>
    <form action="http://127.0.0.1/bit-php/namu-darbai/web-mechanika/nd-3.php" method="get">
        <label for="color">Įveskite spalvą</label>
        <input type="text" class="color" placeholder="Spalva" name="color">
        <button type="submit">Pateikti</button>
    </form>
</body>

</html>

<?php

if (isset($_GET['color'])) {
    $color = $_GET['color'];
    echo "<body style=\"background-color: $color\">";
    _d($_GET['color']);
}

?>