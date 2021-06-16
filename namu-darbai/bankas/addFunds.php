<?php
$id = $_GET['id'] ?? 0;
foreach ($accounts as &$account) {
    if ($account['id'] == $id) {
        $account['amount'] += (int) $_POST['addFunds'];
        file_put_contents(__DIR__ . '/data.json', json_encode($accounts));
        header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeAddFunds');
        die;
    }
}
