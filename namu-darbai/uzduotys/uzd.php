<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UzduotisDocument</title>
    <style>
        label {
            display: block;
        }

        div {
            margin: 10px;
        }

        .sub {
            margin-left: 20px;
        }
    </style>
</head>

<body>
    <form action="http://127.0.0.1/bit-php/namu-darbai/uzduotys/uzd.php" method="get">
        <div>
            <label for="vardas">Jusu vardas</label>
            <input class="vardas" type="text" name="vardas" required>
        </div>
        <div>
            <label for="pavarde">Jusu pavarde</label>
            <input class="pavarde" type="email" name="elpastas" required>
        </div>
        <input class="sub" type="submit">
    </form>
    <hr>
    <?php

    if (isset($_GET['vardas']) && isset($_GET['elpastas'])) {
        $vardas = $_GET['vardas'];
        $elpastas = $_GET['elpastas'];
    }
    if (!empty($vardas) && !empty($elpastas)) {
        echo "<p>Jūsų vardas: <b> $vardas </b></p>";
        echo "<p>Jūsų el. paštas <b> $elpastas </b></p>";
    }

    ?>
</body>

</html>