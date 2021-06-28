<?php

$array = [];
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (is_numeric($_GET['number1']) && $_GET['number1'] > 0) {
        $array[] = $_GET['number1'];
    }
    if (is_numeric($_GET['number2']) && $_GET['number2'] > 0) {
        $array[] = $_GET['number2'];
    }
    if (is_numeric($_GET['number3']) && $_GET['number3'] > 0) {
        $array[] = $_GET['number3'];
    }
}

rsort($array);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testas</title>
    <style>
        input {
            margin: 5px;
        }

        a {
            border: 1px solid black;
            text-decoration: none;
            border-radius: 2px;
            background-color: #EFEFEF;
            color: black;
            font-size: 15px;
            padding: 2px;
        }

        button {
            margin: 5px;
        }
    </style>
</head>

<body>
    <form method="GET">
        <input type="text" name="number1">
        <br>
        <input type="text" name="number2">
        <br>
        <input type="text" name="number3">
        <br>
        <button type="submit">GO</button>
    </form>
    <a href="http://127.0.0.1/bit-php/namu-darbai/test/uzduotis1.php">RESET</a>
    <h1>Result:</h1>
    <pre>
        <?php
        print_r($array);
        ?>
    </pre>

</body>

</html>