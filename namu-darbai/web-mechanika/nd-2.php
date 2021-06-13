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
    <a href="http://127.0.0.1/bit-php/namu-darbai/web-mechanika/nd-2.php/">Black</a>
</body>

</html>

<?php

if (isset($_GET['color'])) {
    $color = $_GET['color'];
    echo "<body style=\"background-color: #$color\">";
} else {
    echo '<body style="background-color: black">';
}
