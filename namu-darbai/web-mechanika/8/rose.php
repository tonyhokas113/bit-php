<body style="background-color: 	#FF0080"> </body>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    header('Location: ./pink.php');
    die;
}
