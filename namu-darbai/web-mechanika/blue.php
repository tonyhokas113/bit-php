<?php
if (isset($_GET['link'])) {
    header("Location: http://127.0.0.1/bit-php/namu-darbai/web-mechanika/red.php");
} else {
    echo '<a href="http://127.0.0.1/bit-php/namu-darbai/web-mechanika/blue.php?link=1">Link</a>';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red</title>
</head>

<body style="background-color: blue">

</body>

</html>