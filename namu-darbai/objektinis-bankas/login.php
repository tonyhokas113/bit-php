<?php
session_start();
require __DIR__ . '/functions.php';
require __DIR__ . '/svg.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['logout'])) {
    unset($_SESSION['loggedIn'], $_SESSION['username']);
    setMessage('Atsijungta sėkmingai', 'alert alert-success', 'V');
    header('Location: http://127.0.0.1/bit-php/namu-darbai/objektinis-bankas/login.php');
    die;
}
if (isset($_POST['user']) && $_POST['user'] == '') {
    setMessage('Klaida! Prašome įvesti prisijungimo vardą.', 'alert alert-danger', '!');
    header('Location: http://127.0.0.1/bit-php/namu-darbai/objektinis-bankas/index.php');
    die;
}
if (isset($_POST['password']) && $_POST['password'] == '') {
    setMessage('Klaida! Prašome įvesti slaptažodį.', 'alert alert-danger', '!');
    header('Location: http://127.0.0.1/bit-php/namu-darbai/objektinis-bankas/index.php');
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
                header('Location: http://127.0.0.1/bit-php/namu-darbai/objektinis-bankas/index.php');
                die;
            } else {
                setMessage('Klaida! Prisijungimo vardas ir/arba slaptažodis, kurį įvedei, neteisingas.', 'alert alert-danger', '!');
                header('Location: http://127.0.0.1/bit-php/namu-darbai/objektinis-bankas/index.php');
                die;
            }
        }
    }
    if ($user['name'] != $_POST['user']) {
        setMessage('Klaida! Prisijungimo vardas ir/arba slaptažodis, kurį įvedei, neteisingas.', 'alert alert-danger', '!');
        header('Location: http://127.0.0.1/bit-php/namu-darbai/objektinis-bankas/index.php');
        die;
    }
}
