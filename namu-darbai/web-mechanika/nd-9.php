<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devintas</title>
</head>

<body style="background-color: black">
    <form action="http://127.0.0.1/bit-php/namu-darbai/web-mechanika/nd-9.php" method="post">
        <?php
        $range = range('A', 'J');
        for ($i = 0; $i < rand(3, 10); $i++) {
            echo "<span style=\"color: red\";>$range[$i]</span>";
            echo '<input type="checkbox"><br>';
        }
        ?>
        <br>
        <button name="sbm" type="submit">Submit</button>
    </form>
</body>

</html>

<?php

if (isset($_POST['sbm'])) {
    echo '<body style="background-color: yellow">';
}
