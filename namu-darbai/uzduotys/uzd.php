<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UzduotisDocument</title>
</head>

<body>
    <form action="#result" method="post">
        Jūsų vardas
        <br>
        <input class="vardas" type="text" name="vardas" value="">
        <br>
        Jūsų el. pašto adresas:
        <br>
        <input class="pavarde" type="text" name="elpastas" value="">
        <br>
        <input type="submit" value="Išsiųsti">
    </form>
    <?php
    echo "<p>Jūsų vardas: <b> .vardas </b></p>";
    echo "<p>Jūsų el. paštas <b> (el. pašto kintamasis) </b></p>";
    ?>
</body>

</html>