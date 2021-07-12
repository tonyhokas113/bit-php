<?php
session_start();
require __DIR__ . '/functions.php';

$id = $_GET['id'] ?? 0;
foreach ($accounts as &$account) {
    if ($account['id'] == $id) {
        if ($_POST['remFunds'] == null) {
            setMessage('Prašome įvesti kiekį, kurį norite nuskaičiuoti!', 'alert alert-danger alert-dismissible fade show', '!');
            header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeRemFunds');
            die;
        }
        if (!is_numeric($_POST['remFunds'])) {
            setMessage('Į laukelį galima įvesti tik skaičius!', 'alert alert-danger alert-dismissible fade show', '!');
            header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeRemFunds');
            die;
        }
        if ((int) $_POST['remFunds'] <= 0) {
            setMessage('Įveskite skaičių, kuris yra didesnis už 0!', 'alert alert-danger alert-dismissible fade show', '!');
            header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeRemFunds');
            die;
        }
        if (($account['amount'] -  (int) $_POST['remFunds']) < 0) {
            setMessage('Nepakankamas sąskaitos likutis!', 'alert alert-danger alert-dismissible fade show', '!');
            header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeRemFunds');
            die;
        }
        if (($account['amount'] -  (int) $_POST['remFunds']) >= 0) {
            $account['amount'] -= (int) $_POST['remFunds'];
            file_put_contents(__DIR__ . '/data.json', json_encode($accounts));
            setMessage('Lėšos nuskaičiuotos', 'alert alert-success d-flex align-items-center', 'V');
            header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeRemFunds');
            die;
        }
    }
}
