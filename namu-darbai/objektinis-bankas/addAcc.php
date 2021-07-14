<?php
session_start();
require __DIR__ . '/functions.php';

if ($_GET['dir'] == 'addAcc') {
    if ($_POST['vardas'] == '') {
        setMessage('Laukelis "Vardas" negali būti tuščias!', 'alert alert-danger errAlign', '!');
        header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeNewAcc');
        die;
    }
    if (preg_match('/[0-9]/', $_POST['vardas'])) {
        setMessage('Laukelis "Vardas" negali būti sudarytas iš skaičių!', 'alert alert-danger errAlign', '!');
        header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeNewAcc');
        die;
    }
    if (preg_match('/[0-9]/', $_POST['pavarde'])) {
        setMessage('Laukelis "Pavardė" negali būti sudarytas iš skaičių!', 'alert alert-danger errAlign', '!');
        header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeNewAcc');
        die;
    }
    if ($_POST['pavarde'] == '') {
        setMessage('Laukelis "Pavardė" negali būti tuščias!', 'alert alert-danger errAlign', '!');
        header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeNewAcc');
        die;
    }
    if ($_POST['ak'] == '') {
        setMessage('Laukelis "Asmens kodas" negali būti tuščias!', 'alert alert-danger errAlign', '!');
        header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeNewAcc');
        die;
    }
    if (strlen($_POST['ak']) < 11 || strlen($_POST['ak']) > 11) {
        setMessage('Laukelis "Asmens kodas" turi būti sudarytas iš 11 skaitmenų!', 'alert alert-danger errAlign', '!');
        header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeNewAcc');
        die;
    }
    if (strlen($_POST['vardas']) < 4) {
        setMessage('Vardas turi būti ilgesnis negu 3 simboliai!', 'alert alert-danger errAlign', '!');
        header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeNewAcc');
        die;
    }
    if (strlen($_POST['pavarde']) < 4) {
        setMessage('Pavardė turi būti ilgesnė negu 3 simboliai!', 'alert alert-danger errAlign', '!');
        header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeNewAcc');
        die;
    }
    foreach ($accounts as $value) {
        if ($value['userid'] == $_POST['ak']) {
            setMessage('Toks asmens kodas jau egzistuoja!', 'alert alert-danger errAlign', '!');
            header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeNewAcc');
            die;
        }
    }
    $account = ['name' => $_POST['vardas'], 'surname' => $_POST['pavarde'], 'userid' => $_POST['ak'], 'id' => $_POST['iban'], 'amount' => 0];
    $accounts[] = $account;
    file_put_contents(__DIR__ . './json/data.json', json_encode($accounts));
    setMessage('Sąskaita sukurta', 'alert alert-success errAlign', 'V');
    header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeNewAcc');
    die;
}
