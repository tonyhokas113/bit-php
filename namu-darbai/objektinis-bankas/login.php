<?php
session_start();
require __DIR__ . '/functions.php';
require __DIR__ . '/svg.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['logout'])) {
    unset($_SESSION['loggedIn'], $_SESSION['username']);
    setMessage('Atsijungta sėkmingai', 'alert alert-success', 'V');
    header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/login.php');
    die;
}
if (isset($_POST['user']) && $_POST['user'] == '') {
    setMessage('Klaida! Prašome įvesti prisijungimo vardą.', 'alert alert-danger', '!');
    header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/index.php');
    die;
}
if (isset($_POST['password']) && $_POST['password'] == '') {
    setMessage('Klaida! Prašome įvesti slaptažodį.', 'alert alert-danger', '!');
    header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/index.php');
    die;
}
if (isset($_POST['user'])) {
    $users = json_decode(file_get_contents(__DIR__ . './json/bankUsers.json'), 1);
    foreach ($users as $user) {
        if ($user['name'] == $_POST['user']) {
            if ($user['pass'] == md5($_POST['password'])) {
                $_SESSION['loggedIn'] = 1;
                $_SESSION['user'] = $user['name'];
                setMessage('Labas, ' . $user['name'], 'alert alert-success', 'V');
                header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/index.php');
                die;
            } else {
                setMessage('Klaida! Prisijungimo vardas ir/arba slaptažodis, kurį įvedei, neteisingas.', 'alert alert-danger', '!');
                header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/index.php');
                die;
            }
        }
    }
    if ($user['name'] != $_POST['user']) {
        setMessage('Klaida! Prisijungimo vardas ir/arba slaptažodis, kurį įvedei, neteisingas.', 'alert alert-danger', '!');
        header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/index.php');
        die;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bankas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <div class="logoDiv">
        <img src="./img/Bit-bankas.jpg" alt="banner">
    </div>
    <div class="background"></div>
    <div class="login">
        <?php include __DIR__ . '/errorMsg.php' ?>
        <form class="box" action="" method="post">
            <label for="user">Prisijungimo vardas</label>
            <input class="form-control" id="user" type="text" name="user">
            <label for="psw">Slaptažodis</label>
            <input class="form-control" id="psw" type="password" name="password">
            <button class="btn-sm btn btn-outline-dark" type="submit">Prisijungti</button>
        </form>
    </div>
</body>

</html>