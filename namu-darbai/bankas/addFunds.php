<?php
session_start();
require __DIR__ . '/functions.php';

$id = $_GET['id'] ?? 0;
foreach ($accounts as &$account) {
    if ($account['id'] == $id) {
        if ((int) $_POST['addFunds'] > 0) {
            $account['amount'] += (int) $_POST['addFunds'];
            file_put_contents(__DIR__ . '/data.json', json_encode($accounts));
            setMessage('Sąskaita papildyta', 'alert alert-success d-flex align-items-center', 'V');
            header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeAddFunds');
            die;
        }
        if ((int) $_POST['addFunds'] < 0) {
            setMessage('Sąskaitos neigiama reikšme papildyti negalima!', 'alert alert-danger alert-dismissible fade show', '!');
            header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeAddFunds');
            die;
        }
        if ($_POST['addFunds'] == null) {
            setMessage('Prašome įvesti papildymo sumą!', 'alert alert-danger alert-dismissible fade show', '!');
            header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeAddFunds');
            die;
        }
        if (!is_int($_POST['addFunds'])) {
            setMessage('Į laukelį galima įvesti tik skaičius, kurie yra didesni už 0!', 'alert alert-danger alert-dismissible fade show', '!');
            header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeAddFunds');
            die;
        }
    }
}
