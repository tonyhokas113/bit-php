<?php
$id = $_GET['id'] ?? 0;
foreach ($accounts as &$account) {
    if ($account['id'] == $id) {
        if (($account['amount'] -  (int) $_POST['remFunds']) >= 0) {
            $account['amount'] -= (int) $_POST['remFunds'];
            file_put_contents(__DIR__ . '/data.json', json_encode($accounts));
            header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeRemFunds');
            die;
        } else {
            header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeRemFunds&rem=minus');
            die;
        }
    }
}
