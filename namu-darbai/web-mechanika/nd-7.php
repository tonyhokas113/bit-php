 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Šeštas</title>
 </head>

 <body>
     <form action="./nd-7.php" method="get">
         <button type="submit">GET</button>
     </form>
     <br>
     <form action="./nd-7.php" method="post">
         <button type="submit">POST</button>
     </form>
 </body>

 </html>

 <?php

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo '<body style="background-color: green">';
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo '<body style="background-color: yellow">';
        header('Location: ./nd-7.php');
        die;
    }
