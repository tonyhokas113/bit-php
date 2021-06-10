<body style="background-color: 	#FF0080"> </body>

<?php

_d($_SERVER['PHP_SELF']);

// $url = $_SERVER['PHP_SELF'];
// $key = 'rose.php';

// if (strpos($url, $key) == true) {
//     header('Location: http://127.0.0.1/bit-php/namu-darbai/web-mechanika/pink.php');
//     die;
// }

if (isset($_GET['purple'])) {
    header('Location: http://127.0.0.1/bit-php/namu-darbai/web-mechanika/pink.php');
    die;
}
