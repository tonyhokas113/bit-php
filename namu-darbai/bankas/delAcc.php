<?php
session_start();
require __DIR__ . '/functions.php';

$id = $_GET['id'] ?? 0;
foreach ($accounts as $index => $account) {
    if ($account['id'] == $id) {
        if ($account['amount'] == 0) {
            unset($accounts[$index]);
            setMessage('Sąskaita ištrinta', 'alert alert-success d-flex align-items-center', 'V');
            file_put_contents(__DIR__ . '/data.json', json_encode($accounts));
            header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeList');
            die;
        } else {
            setMessage('Sąskaitų, kuriose yra pinigų ištrinti negalima!', 'alert alert-danger alert-dismissible fade show', '!');
            header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeList');
            die;
        }
    }
}
