<?php
require __DIR__ . '/functions.php';
require __DIR__ . '/svg.php';

if (!isset($_SESSION['loggedIn'])) {
    header('Location: http://127.0.0.1/bit-php/namu-darbai/objektinis-bankas/login.php');
    die;
}
function mySort($a, $b)
{
    if ($a['surname'] > $b['surname']) {
        return 1;
    }
}
usort($_SESSION['acc'], 'mySort');

$i = 1;
