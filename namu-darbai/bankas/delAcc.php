<?php
$id = $_GET['id'] ?? 0;
foreach ($accounts as $index => $account) {
    if ($account['id'] == $id) {
        if ($account['amount'] == 0) {
            unset($accounts[$index]);
            file_put_contents(__DIR__ . '/data.json', json_encode($accounts));
            header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeList');
            die;
        } else {
            $error =  '<span style="color: red;">Sąskaitų, kuriose yra pinigų ištrinti negalima!</span>';
            header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeList&error=accFull');
            die;
        }
    }
}
