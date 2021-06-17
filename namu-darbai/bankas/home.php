<?php
session_start();
if (!file_exists(__DIR__ . '/data.json')) {
    file_put_contents(__DIR__ . '/data.json', json_encode([]));
}
$accounts = json_decode(file_get_contents(__DIR__ . '/data.json'), 1);

// Home page
if (!isset($_GET['dir'])) {
    require __DIR__ . '/menu.php';
}
// Account list page
elseif ($_GET['dir'] == 'homeList') {
    require __DIR__ . '/homeList.php';
}
// Create account page
elseif ($_GET['dir'] == 'homeNewAcc') {
    require __DIR__ . '/homeNewAcc.php';
}
// Add acc
elseif ($_GET['dir'] == 'addAcc') {
    require __DIR__ . '/addAcc.php';
}
// Add funds page
elseif ($_GET['dir'] == 'homeAddFunds') {
    require __DIR__ . '/homeAddFunds.php';
}
// Add funds
elseif ($_GET['dir'] == 'addFunds') {
    require __DIR__ . '/addFunds.php';
}
// Remove funds page
elseif ($_GET['dir'] == 'homeRemFunds') {
    require __DIR__ . '/homeRemFunds.php';
}
// Remove funds
elseif ($_GET['dir'] == 'remFunds') {
    require __DIR__ . '/remFunds.php';
}
// Dellete account
elseif ($_GET['dir'] == 'delete') {
    require __DIR__ . '/delAcc.php';
}
