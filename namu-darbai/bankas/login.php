<?php
session_start();
require __DIR__ . '/functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['logout'])) {
    unset($_SESSION['loggedIn'], $_SESSION['username']);
    setMessage('Atsijungta sėkmingai', 'alert alert-success d-flex align-items-center', 'V');
    header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/login.php');
    die;
}
if (isset($_POST['user'])) {
    $users = json_decode(file_get_contents(__DIR__ . '/bankUsers.json'), 1);
    foreach ($users as $user) {
        if ($user['name'] == $_POST['user']) {
            if ($user['pass'] == md5($_POST['password'])) {
                $_SESSION['loggedIn'] = 1;
                $_SESSION['user'] = $user['name'];
                setMessage('Labas, ' . $user['name'], 'alert alert-success d-flex align-items-center', 'V');
                header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/index.php');
                die;
            }
        }
        // else {
        //     setMessage('Vartotojas' . $user['name'] . 'nerastas', 'color: red;');
        //     header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/index.php');
        //     die;
        // }
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
    <link rel="stylesheet" href="./login.css">
</head>

<body>
    <div class="logo">
        <img src="./cover.png" alt="logo">
    </div>
    <div class="login">
        <form class="box" action="" method="post">
            <label class="firstlabel" for="user">Prisijungimo vardas</label>
            <input id="user" type="text" name="user">
            <label for="psw">Slaptažodis</label>
            <input id="psw" type="password" name="password">
            <button class="btn-sm btn btn-outline-dark" type="submit">Prisijungti</button>
            <?php include __DIR__ . '/errorMsg.php' ?>
        </form>
    </div>
</body>

</html>