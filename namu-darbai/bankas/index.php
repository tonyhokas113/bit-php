<?php
require __DIR__ . '/functions.php';
// session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['logout'])) {
        unset($_SESSION['loggedIn'], $_SESSION['username']);
        setMessage('Atsijungta sėkmingai', 'color: green;');
        header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/index.php');
        die;
    }
}
if (isset($_POST['user'])) {
    $users = json_decode(file_get_contents(__DIR__ . '/bankUsers.json'), 1);
    foreach ($users as $user) {
        if ($user['user'] == $_POST['user']) {
            if ($user['password'] == md5($_POST['password'])) {
                $_SESSION['loggedIn'] = 1;
                $_SESSION['user'] = $user['user'];
                setMessage('Labas, ' . $user['user'], 'color: green;');
                header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/home.php');
                die;
            }
        }
        // else {
        //     setMessage('Vartotojas' . $user['username'] . 'nerastas', 'color: red;');
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
    <title>Document</title>
</head>

<body>
    <h1>$BANKAS$</h1>
    <?php include __DIR__ . '/errorMsg.php' ?>
    <?php include __DIR__ . '/loginMenu.php' ?>
</body>

</html>