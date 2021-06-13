<?php

$code = '';
$result1 = 0;
$result2 = 0;
$maxScore = 30;
$turn = 0;
if (empty($_GET['play']) && !isset($_GET['play'])) {
    $code .= '<form action="./nd-11.php?play=0" method="post">
    <label for="first">Pirmo žaidėjo vardas:</label>
    <input id="first" name="first" type="text" placeholder="Žaidėjas nr.1">
    <label for="second">Antro žaidėjo vardas:</label>
    <input id="second" name="second" type="text" placeholder="Žaidėjas nr.2">
    <button type="submit">Pradėti</button>
</form>';
}

// if (isset($_GET['play'])) {
//     $first = $_REQUEST['first'];
//     $second = $_REQUEST['second'];
//     $value = rand(1, 6);
//     if (isset($_GET['play']) == $turn) {
//         $code .= "<form action=\"/nd-11/?play=1\" method=\"get\">
//         <span>Rezultatas:</span>
//     <span>$first -> $result1</span>
//     <span>$second -> $result2</span>
//     <br>
//     <span>Kauliuką meta: $first</span>
//     <button type=\"submit\">Mesti kauliuką</button>
//     <form>";
//         $turn++;
//     } else {
//         $code .= "<span>Rezultatas:</span>
//         <span>$first -> $result1</span>
//         <span>$second -> $result2</span>
//         <br>
//         <span>Kauliuką meta: $second</span>
//         <button type=\"submit\">Mesti kauliuką</button>";
//         $turn--;
//     }
// }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vienuoliktas</title>
    <link rel="stylesheet" href="./css.css">
</head>

<body>
    <div>
        <?= $code ?>
    </div>
</body>

</html>