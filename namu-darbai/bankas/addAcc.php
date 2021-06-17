<?php

require __DIR__ . '/functions.php';

if ($_GET['dir'] == 'addAcc') {
    if ($_POST['vardas'] == '') {
        setMessage('Laukelis "Vardas" negali būti tuščias!', 'color: red;');
        header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeNewAcc');
        die;
    }
    if (preg_match('/[0-9]/', $_POST['vardas'])) {
        setMessage('Laukelis "Vardas" negali būti sudarytas iš skaičių!', 'color: red;');
        header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeNewAcc');
        die;
    }
    if (preg_match('/[0-9]/', $_POST['pavarde'])) {
        setMessage('Laukelis "Pavardė" negali būti sudarytas iš skaičių!', 'color: red;');
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
    if (strlen($_POST['ak']) < 11 || strlen($_POST['ak']) > 11) {
        setMessage('Laukelis "Asmens kodas" turi būti sudarytas iš 11 skaitmenų!', 'color: red;');
        header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeNewAcc');
        die;
    }
    if (strlen($_POST['vardas']) < 4) {
        setMessage('Vardas turi būti ilgesnis negu 3 simboliai!', 'color: red;');
        header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeNewAcc');
        die;
    }
    if (strlen($_POST['pavarde']) < 4) {
        setMessage('Pavardė turi būti ilgesnė negu 3 simboliai!', 'color: red;');
        header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeNewAcc');
        die;
    }
    foreach ($accounts as $value) {
        if ($value['userid'] == $_POST['ak']) {
            setMessage('Toks asmens kodas jau egzistuoja!', 'color: red;');
            header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeNewAcc');
            die;
        }
    }
    $account = ['name' => $_POST['vardas'], 'surname' => $_POST['pavarde'], 'userid' => $_POST['ak'], 'id' => generateIban(), 'amount' => 0];
    $accounts[] = $account;
    file_put_contents(__DIR__ . '/data.json', json_encode($accounts));
    setMessage('Sąskaita sukurta', 'color: green;');
    header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/?dir=homeNewAcc');
    die;
}
