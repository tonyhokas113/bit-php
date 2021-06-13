<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pirmas</title>
    <style>
        body {
            margin: 0;
        }

        div {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h2 {
            height: 0;
            margin: 0;
        }

        a {
            margin: 5px;
            padding: 5px;
            border: 1px solid #90e0ef;
            border-radius: 10px;
            text-decoration: none;
            color: white;
            background: #333333;
            background: -webkit-linear-gradient(to right, #dd1818, #333333);
            background: linear-gradient(to right, #dd1818, #333333);
        }
    </style>
</head>

<body>
    <h2 style="color: white; text-align: center;">Uždavinys nr.: 1</h2>
    <div>
        <a href="http://127.0.0.1/bit-php/namu-darbai/web-mechanika/nd-1.php/">Black</a>
        <a href="http://127.0.0.1/bit-php/namu-darbai/web-mechanika/nd-1.php/?color=1">Red</a>
    </div>
</body>

</html>

<?php

if (isset($_GET['color']) && $_GET['color'] == 1) {
    echo '<body style="background-color:red">';
} else {
    echo '<body style="background-color:black">';
}
