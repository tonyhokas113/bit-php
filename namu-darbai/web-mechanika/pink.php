<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aštuntas</title>
</head>

<body style="background-color: pink">
    <form action="http://127.0.0.1/bit-php/namu-darbai/web-mechanika/pink.php" method="post">
        <button name="rose" type="submit">GO TO ROSE</button>
    </form>
</body>

</html>

<?php

if (isset($_POST['rose'])) {
    header('Location: http://127.0.0.1/bit-php/namu-darbai/web-mechanika/rose.php');
    die;
}
