<?php
session_start();
if (!isset($_SESSION['loggedIn'])) {
    header('Location: http://127.0.0.1/bit-php/namu-darbai/bankas/login.php');
    die;
}

if (!file_exists(__DIR__ . './json/data.json')) {
    file_put_contents(__DIR__ . './json/data.json', json_encode([]));
}
$accounts = json_decode(file_get_contents(__DIR__ . './json/data.json'), 1);
$_SESSION['acc'] = $accounts;

if (!isset($_GET['dir'])) {
    require __DIR__ . '/homeList.php';
}
// Account list page
if (isset($_GET['dir']) && $_GET['dir'] == 'homeList') {
    require __DIR__ . '/homeList.php';
}
// Create account page
elseif (isset($_GET['dir']) && $_GET['dir'] == 'homeNewAcc') {
    require __DIR__ . '/homeNewAcc.php';
}
// Add acc
elseif (isset($_GET['dir']) && $_GET['dir'] == 'addAcc') {
    require __DIR__ . '/addAcc.php';
}
// Add funds page
elseif (isset($_GET['dir']) && $_GET['dir'] == 'homeAddFunds') {
    require __DIR__ . '/homeAddFunds.php';
}
// Add funds
elseif (isset($_GET['dir']) && $_GET['dir'] == 'addFunds') {
    require __DIR__ . '/addFunds.php';
}
// Remove funds page
elseif (isset($_GET['dir']) && $_GET['dir'] == 'homeRemFunds') {
    require __DIR__ . '/homeRemFunds.php';
}
// Remove funds
elseif (isset($_GET['dir']) && $_GET['dir'] == 'remFunds') {
    require __DIR__ . '/remFunds.php';
}
// Dellete account
elseif (isset($_GET['dir']) && $_GET['dir'] == 'delete') {
    require __DIR__ . '/delAcc.php';
}
