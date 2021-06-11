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
        echo '<span> Pažymėta:' . count($_POST["check"]) . '</span>';
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