<?php

if ($_GET['dir'] == 'addAcc') {
    $same = false;
    $arr[] = $_POST['ak'];
    foreach ($arr as $value) {
        if ($value == $_POST['ak']) {
            $same = true;
        }
    }
    if ($same == false) {
        $account = ['name' => $_POST['vardas'], 'surname' => $_POST['pavarde'], 'userid' => $_POST['ak'], 'id' => rand(10000000, 99999999), 'amount' => 0];
        $accounts[] = $account;
        file_put_contents(__DIR__ . '/data.json', json_encode($accounts));
        header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeNewAcc&added=true');
        die;
    } else {
        header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeNewAcc&added=false');
        die;
    }
}
