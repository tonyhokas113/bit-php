<?php
session_start();
require __DIR__ . '/functions.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['logout'])) {
    unset($_SESSION['loggedIn'], $_SESSION['username']);
    setMessage('Atsijungta sėkmingai', 'color: green;');
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
                setMessage('Labas, ' . $user['name'], 'color: green;');
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
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h1>$--BANKAS--$</h1>
    <?php include __DIR__ . '/errorMsg.php' ?>
    <div>
        <form action="" method="post">
            <label for="user">Prisijungimo vardas</label>
            <input id="user" type="text" name="user">
            <label for="psw">Slaptažodis</label>
            <input id="psw" type="password" name="password">
            <button type="submit">Prisijungti</button>
        </form>
    </div>
</body>

</html>