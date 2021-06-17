<?php
require __DIR__ . '/functions.php';

$id = $_GET['id'] ?? 0;
foreach ($accounts as &$account) {
    if ($account['id'] == $id) {
        if ($_POST['remFunds'] == null) {
            setMessage('Prašome įvesti kiekį, kurį norite nuskaičiuoti!', 'color: red;');
            header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeRemFunds');
            die;
        }
        if (!is_numeric($_POST['remFunds'])) {
            setMessage('Į laukelį galima įvesti tik skaičius!', 'color: red;');
            header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeRemFunds');
            die;
        }
        if ((int) $_POST['remFunds'] <= 0) {
            setMessage('Įveskite skaičių, kuris yra didesnis už 0!', 'color: red;');
            header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeRemFunds');
            die;
        }
        if (($account['amount'] -  (int) $_POST['remFunds']) < 0) {
            setMessage('Nepakankamas sąskaitos likutis!', 'color: red;');
            header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeRemFunds');
            die;
        }
        if (($account['amount'] -  (int) $_POST['remFunds']) >= 0) {
            $account['amount'] -= (int) $_POST['remFunds'];
            file_put_contents(__DIR__ . '/data.json', json_encode($accounts));
            setMessage('Lėšos nuskaičiuotos', 'color: green;');
            header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeRemFunds');
            die;
        }
    }
}
