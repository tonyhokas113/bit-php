  <?php

    $generateForm = '';
    if (!isset($_POST['check'])) {
        $bckg = 'black';
        $letters = range('A', 'J');
        for ($i = 0; $i < rand(3, 10); $i++) {
            $generateForm .= "$letters[$i] <input name='check[]' type='checkbox'><br>";
        }
    } else {
        $bckg = 'white';
        echo '<span> Pažymėta: ' . count($_POST["check"]) . '</span>';
    }

    ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Devintas</title>
  </head>

  <body style='background: <?= $bckg ?>;color: red;'>
      <form action="" method='post'>
          <?= $generateForm ?>
          <button type='submit'>Submit</button>
      </form>
  </body>

  </html>

  //--------------------------------------------------------------------
  <!-- 
  <?php
    $color = 'black';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        header("Location: http://localhost/barsukas/07/9uzduotis.php?count=" . count($_POST));
        die;
    }
    if (isset($_GET['count'])) {
        $color = 'white';
        echo "<h1>" . $_GET['count'] . "</h1>";
    }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9 uzduotis</title>
</head>

<?php
if (!isset($_GET['count'])) {
    echo "<body style='background-color: $color'>";
    echo "<form style='background-color: white' action='http://localhost/barsukas/07/9uzduotis.php' method='post'>";

    foreach (range(1, rand(3, 10)) as $key) {
        $random = chr(rand(65, 67));
        echo $random . "<input type='checkbox' name=" . $key . " value=" . $random . ">";
    }

    echo '<button type="submit">GO</button>';
    echo '</form>';
}
?>
    
</body>
</html> -->