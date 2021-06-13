<?php
if (isset($_GET['link'])) {
    header("Location: ./red.php");
    die;
} else {
    echo '<a href="./blue.php?link=1">Link</a>';
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