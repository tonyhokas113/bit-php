<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Septintas</title>
</head>

<body>
    <form action="http://127.0.0.1/bit-php/namu-darbai/web-mechanika/nd-7.php" method="get">
        <button name="btn1" type="submit">GET</button>
    </form>
    <br>
    <form action="http://127.0.0.1/bit-php/namu-darbai/web-mechanika/nd-7.php" method="post">
        <button name="btn2" type="submit">POST</button>
    </form>
</body>

</html>

<?php

if (isset($_GET['btn1'])) {
    echo '<body style="background-color: green">';
}

if (isset($_POST['btn2'])) {
    echo '<body style="background-color: yellow">';
}

if (isset($_GET['btn2'])) {
    header('Location: http://127.0.0.1/bit-php/namu-darbai/web-mechanika/nd-7.php?btn1=');
    die;
}
