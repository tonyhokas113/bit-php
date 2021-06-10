<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antras</title>
</head>

<body>
    <h2 style="color: red; text-align: center;">Uždavinys nr.: 2</h2>
</body>

</html>

<?php

if (isset($_GET['color'])) {
    $color = $_GET['color'];
    echo "<body style=\"background-color: #$color\">";
    _d($_GET['color']);
}

?>