<?php

require __DIR__ . '/errMsgFunc.php';

if ($_GET['dir'] == 'addAcc') {
    if ($_POST['vardas'] == '') {
        setMessage('Laukelis "Vardas" negali būti tuščias!', 'color: red;');
        header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeNewAcc');
        die;
    }
    if ($_POST['pavarde'] == '') {
        setMessage('Laukelis "Pavardė" negali būti tuščias!', 'color: red;');
        header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeNewAcc');
        die;
    }
    if ($_POST['ak'] == '') {
        setMessage('Laukelis "Asmens kodas" negali būti tuščias!', 'color: red;');
        header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeNewAcc');
        die;
    }

    foreach ($accounts as $value) {
        if ($value['userid'] == $_POST['ak']) {
            setMessage('Toks asmens kodas jau egzistuoja!', 'color: red;');
            header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeNewAcc');
            die;
        } else {
        }
    }
    $account = ['name' => $_POST['vardas'], 'surname' => $_POST['pavarde'], 'userid' => $_POST['ak'], 'id' => rand(10000000, 99999999), 'amount' => 0];
    $accounts[] = $account;
    file_put_contents(__DIR__ . '/data.json', json_encode($accounts));
    setMessage('Sąskaita sukurta', 'color: green;');
    header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeNewAcc');
    die;
}
