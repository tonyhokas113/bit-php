<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="border: 1px solid black; padding: 10px; display: inline-block;">
        <form action="http://127.0.0.1/bit-php/namu-darbai/uzduotys/uzd2.php" method="get">
            <label for="x">X:</label>
            <input class="x" type="text" name="x" placeholder="Ivesk skaiciu">
            <br>
            <br>
            <label for="y">Y:</label>
            <input class="y" type="text" name="y" placeholder="Ivesk skaiciu">
            <br>
            <br>
            <button type="submit" style="align-items: center;">Sumuoti</button>
        </form>
        <?php
        if (isset($_GET['x']) && isset($_GET['y'])) {
            $x = $_GET['x'];
            $y = $_GET['y'];
            $sum = $x + $y;
        }
        if (!empty($x) && !empty($y)) {
            echo "<h2>$x + $y = $sum </h2>";
        }
        ?>
    </div>
</body>

</html>