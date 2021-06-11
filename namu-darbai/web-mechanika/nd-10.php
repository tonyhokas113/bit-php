<?php
session_start();

$generateForm = '';
if (!isset($_POST['check'])) {
    $bckg = 'black';
    $letters = range('A', 'J');
    $generated = rand(3, 10);
    $_SESSION['count'] = $generated;
    for ($i = 0; $i < $generated; $i++) {
        $generateForm .= "$letters[$i] <input name='check[]' type='checkbox'><br>";
    }
} else {
    $bckg = 'white';
    $generated = $_GET['count'];
    echo '<span> Pažymėta:' . count($_POST["check"]) . ' Sugeneruota: ' . $generated . '</span>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dešimtas</title>
</head>

<body style='background: <?= $bckg ?>;color: red;'>
    <form action="?count=<?= $generated ?>" method='post'>
        <?= $generateForm ?>
        <button type='submit'>Submit</button>
    </form>
</body>

</html>