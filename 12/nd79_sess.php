<?php
session_start();

// _d($_SERVER['REQUEST_METHOD'], 'method---->');




// GET
// 1,2 ===> 1 session is empty or  2 not empty
// POST
// 3

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_SESSION['results'])) {   // [5, 1]  [sugeneruota, pazymeta]
    // 1 scenarijus Formos Rodymas GET
    $letters = range('A', 'J');
    $count = rand(3, 10);
    $color = 'black';
    $form = true;
    // _d($_SESSION, 'seess---->');
    }
    else {
    // 2 scenarijus Rezultatų Rodymas GET
    $color = 'white';
    $form = false;
    $sugeneruota = $_SESSION['results']['sugeneruota'];
    $pazymeta = $_SESSION['results']['pazymeta'];
    // _d($_SESSION, 'seess---->');
    unset($_SESSION['results']);
    
    }
}
else {
    // 3 scenarijus Checkboksų skaičiavimas POST
    $_SESSION['results']['sugeneruota'] = $_POST['count'];
    $_SESSION['results']['pazymeta'] = count($_POST['let'] ?? []);
    // _d($_SESSION, 'seess---->');
    header('Location: http://localhost/barsukas/12/nd79_sess.php');
    die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7 - 9</title>
</head>
<body style="background-color: <?= $color ?>">

    <a href="">BACK</a><br><br>

    <?php if($form) : ?>
        <form action="" method="post" style="background-color: gray;padding: 10px;">
        <input type="hidden" name="count" value="<?= $count ?>">
        <?php foreach ($letters as $letter): ?>
        <label><?= $letter ?></label>
        <input type="checkbox" name="let[]" value="<?= $letter ?>">
        <?php if (--$count === 0) break ?>
        <?php endforeach ?>
        <button type="submit">CAL</button>
        </form>
    <?php else : ?>
        <br>Sugeneruota: <?= $sugeneruota ?>
        <br>Pažymėta: <?= $pazymeta ?>
    <?php endif ?>
</body>
</html>


